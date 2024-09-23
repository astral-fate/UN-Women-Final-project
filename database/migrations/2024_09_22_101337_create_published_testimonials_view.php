<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreatePublishedTestimonialsView extends Migration
{
    public function up()
    {
        DB::statement("
            CREATE VIEW published_testimonials AS
            SELECT id, name, content, image
            FROM testimonials
            WHERE is_published = 1
            ORDER BY created_at DESC
        ");
    }

    public function down()
    {
        DB::statement("DROP VIEW IF EXISTS published_testimonials");
    }
}