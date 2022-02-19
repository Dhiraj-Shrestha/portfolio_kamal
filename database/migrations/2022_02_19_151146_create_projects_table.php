<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('project_title');
            $table->string('project_image');
            $table->foreignId('project_category_id')->constrained('project_categories')->onDelete('cascade');;
            $table->text('project_description');
            $table->string('playstore_link')->nullable();
            $table->string('appstore_link')->nullable();
            $table->string('project_tag');
            $table->string('banner_title');
            $table->string('banner_image');
            $table->string('usecase_title');
            $table->text('services');
            $table->string('availability');
            $table->text('why_to_use_description');
            $table->text('navigation_description');
            $table->string('navigation_image');
            $table->text('project_story');
            $table->string('project_story_image');
            $table->integer('project_month');
            $table->integer('project_team_member');
            $table->string('active_user');
            $table->string('average_rating');
            $table->text('what_next')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
