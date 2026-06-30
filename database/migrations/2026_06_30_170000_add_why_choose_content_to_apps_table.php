<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (! Schema::hasColumn('apps', 'why_choose_content')) {
            Schema::table('apps', function (Blueprint $table) {
                $table->longText('why_choose_content')->nullable()->after('features_content');
            });
        }
    }

    public function down(): void
    {
        if (Schema::hasColumn('apps', 'why_choose_content')) {
            Schema::table('apps', function (Blueprint $table) {
                $table->dropColumn('why_choose_content');
            });
        }
    }
};
