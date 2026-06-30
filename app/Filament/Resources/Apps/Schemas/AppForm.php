<?php

namespace App\Filament\Resources\Apps\Schemas;

use App\Models\AppCategory;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Components\Utilities\Get;
use Illuminate\Support\Str;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class AppForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Tabs::make('App Entry')
                    ->tabs([
                        Tab::make('Basics')
                            ->schema([
                                Section::make('App Details')
                                    ->schema([
                                        Select::make('app_category_id')
                                            ->relationship('appCategory', 'name')
                                            ->searchable()
                                            ->preload(),
                                        TextInput::make('name')
                                            ->required()
                                            ->maxLength(255)
                                            ->live(onBlur: true)
                                            ->afterStateUpdated(fn ($set, ?string $state) => $set('slug', Str::slug((string) $state))),
                                        TextInput::make('slug')
                                            ->required()
                                            ->unique(ignoreRecord: true)
                                            ->maxLength(255),
                                        TextInput::make('tagline')
                                            ->maxLength(255),
                                        Textarea::make('short_description')
                                            ->maxLength(255)
                                            ->rows(3)
                                            ->columnSpanFull(),
                                    ])
                                    ->columns(2),
                                Section::make('Publishing')
                                    ->schema([
                                        TextInput::make('sort_order')
                                            ->numeric()
                                            ->default(0),
                                        Toggle::make('is_featured')
                                            ->default(false),
                                        Toggle::make('is_published')
                                            ->default(true),
                                    ])
                                    ->columns(3),
                            ]),
                        Tab::make('Content')
                            ->schema([
                                Section::make('Description')
                                    ->schema([
                                        RichEditor::make('description')
                                            ->columnSpanFull(),
                                    ]),
                                Section::make('App Features')
                                    ->schema([
                                        RichEditor::make('features_content')
                                            ->columnSpanFull(),
                                    ]),
                                Section::make(fn (Get $get): string => 'Why choose ' . ((string) $get('name') ?: 'this app'))
                                    ->schema([
                                        RichEditor::make('why_choose_content')
                                            ->label('Content')
                                            ->columnSpanFull(),
                                    ]),
                                Section::make('Current App Version')
                                    ->schema([
                                        RichEditor::make('version_content')
                                            ->columnSpanFull(),
                                    ]),
                            ]),
                        Tab::make('Images')
                            ->schema([
                                Section::make('Main Images')
                                    ->schema([
                                        FileUpload::make('icon')
                                            ->image()
                                            ->disk('public')
                                            ->directory(fn (Get $get): string => 'apps/' . self::appSlug($get))
                                            ->imagePreviewHeight('110')
                                            ->getUploadedFileNameForStorageUsing(fn (TemporaryUploadedFile $file, Get $get): string => self::uploadName($file, $get, 1)),
                                        FileUpload::make('hero_image')
                                            ->image()
                                            ->disk('public')
                                            ->directory(fn (Get $get): string => 'apps/' . self::appSlug($get))
                                            ->imagePreviewHeight('130')
                                            ->getUploadedFileNameForStorageUsing(fn (TemporaryUploadedFile $file, Get $get): string => self::uploadName($file, $get, 2)),
                                    ])
                                    ->columns(2),
                                Section::make('App Screenshots')
                                    ->schema([
                                        Repeater::make('appScreenshots')
                                            ->relationship('appScreenshots')
                                            ->schema([
                                                FileUpload::make('image')
                                                    ->required()
                                                    ->image()
                                                    ->disk('public')
                                                    ->storeFiles()
                                                    ->directory(fn (Get $get): string => 'apps/' . self::appSlug($get, '../../../slug') . '/screenshots')
                                                    ->imagePreviewHeight('130')
                                                    ->getUploadedFileNameForStorageUsing(fn (TemporaryUploadedFile $file, Get $get): string => self::uploadName($file, $get, self::imageNumber($get))),
                                                TextInput::make('title')
                                                    ->maxLength(255),
                                                TextInput::make('sort_order')
                                                    ->numeric()
                                                    ->default(0),
                                            ])
                                            ->maxItems(10)
                                            ->orderColumn('sort_order')
                                            ->itemLabel(fn (array $state): ?string => $state['title'] ?? $state['image'] ?? null)
                                            ->columns(3)
                                            ->columnSpanFull(),
                                    ]),
                            ]),
                        Tab::make('Links & SEO')
                            ->schema([
                                Section::make('Links')
                                    ->schema([
                                        TextInput::make('app_store_url')
                                            ->url()
                                            ->maxLength(255),
                                        TextInput::make('privacy_policy_url')
                                            ->maxLength(255),
                                        TextInput::make('support_url')
                                            ->maxLength(255),
                                    ])
                                    ->columns(3),
                                Section::make('SEO')
                                    ->schema([
                                        TextInput::make('seo_title')
                                            ->maxLength(255),
                                        Textarea::make('seo_description')
                                            ->maxLength(255)
                                            ->rows(3),
                                    ])
                                    ->columns(2),
                            ]),
                    ])
                    ->persistTab()
                    ->columnSpanFull(),
            ]);
    }

    private static function appSlug(Get $get, string $path = 'slug'): string
    {
        return Str::slug((string) $get($path)) ?: 'untitled-app';
    }

    private static function uploadName(TemporaryUploadedFile $file, Get $get, int $imageNumber): string
    {
        return implode('_', [
            self::appNameSlug($get, self::namePath($get)),
            self::categorySlug($get, self::categoryPath($get)),
            now()->format('YmdHisv'),
            str_pad((string) $imageNumber, 2, '0', STR_PAD_LEFT),
        ]) . '.' . strtolower($file->getClientOriginalExtension());
    }

    private static function imageNumber(Get $get): int
    {
        $sortOrder = (int) $get('sort_order');

        return $sortOrder > 0 ? $sortOrder : random_int(1000, 9999);
    }

    private static function categorySlug(Get $get, string $path): string
    {
        $category = AppCategory::find($get($path));

        return Str::slug((string) ($category?->name ?? 'uncategorized')) ?: 'uncategorized';
    }

    private static function appNameSlug(Get $get, string $path): string
    {
        return Str::slug((string) $get($path)) ?: self::appSlug($get, self::slugPath($get));
    }

    private static function slugPath(Get $get): string
    {
        return $get('../../slug') ? '../../slug' : 'slug';
    }

    private static function namePath(Get $get): string
    {
        return $get('../../name') ? '../../name' : 'name';
    }

    private static function categoryPath(Get $get): string
    {
        return $get('../../app_category_id') ? '../../app_category_id' : 'app_category_id';
    }
}
