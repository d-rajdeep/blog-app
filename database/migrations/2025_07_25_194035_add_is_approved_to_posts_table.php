<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  public function up()
{
    Schema::table('blog_posts', function (Blueprint $table) {
        $table->boolean('is_published')->default(false);
        $table->boolean('is_approved')->default(false);
    });
}


};
