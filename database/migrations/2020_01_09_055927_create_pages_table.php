<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('pg_page_name');
            $table->string('pg_banner_type');
            $table->string('slider_id');
            $table->string('pg_image_path');
            $table->string('pg_image_alt');
            $table->string('pg_meta_tag');
              $table->text('page_meta_desc_tag');
            $table->string('pg_url');
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
        Schema::dropIfExists('pages');
    }
}
