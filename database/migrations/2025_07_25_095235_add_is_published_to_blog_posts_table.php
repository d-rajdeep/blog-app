<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   public function up(): void
{
    Schema::table('blog_posts', function (Blueprint $table) {
        $table->boolean('is_published')->default(false)->after('content'); // adjust column position if needed
    });
}

public function down(): void
{
    Schema::table('blog_posts', function (Blueprint $table) {
        $table->dropColumn('is_published');
    });
}

};
