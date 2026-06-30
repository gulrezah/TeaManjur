<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (! Schema::hasColumn('apps', 'features_content')) {
            Schema::table('apps', function (Blueprint $table) {
                $table->longText('features_content')->nullable()->after('description');
            });
        }

        if (! Schema::hasColumn('apps', 'version_content')) {
            Schema::table('apps', function (Blueprint $table) {
                $table->longText('version_content')->nullable()->after('features_content');
            });
        }

        if (! Schema::hasColumn('app_screenshots', 'title')) {
            Schema::table('app_screenshots', function (Blueprint $table) {
                $table->string('title')->nullable()->after('app_id');
            });
        }
    }

    public function down(): void
    {
        if (Schema::hasColumn('app_screenshots', 'title')) {
            Schema::table('app_screenshots', function (Blueprint $table) {
                $table->dropColumn('title');
            });
        }

        if (Schema::hasColumn('apps', 'version_content')) {
            Schema::table('apps', function (Blueprint $table) {
                $table->dropColumn('version_content');
            });
        }

        if (Schema::hasColumn('apps', 'features_content')) {
            Schema::table('apps', function (Blueprint $table) {
                $table->dropColumn('features_content');
            });
        }
    }
};
