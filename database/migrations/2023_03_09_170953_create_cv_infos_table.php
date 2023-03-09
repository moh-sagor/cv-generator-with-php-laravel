<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cv_infos', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("address");
            $table->string("phone");
            $table->string("email");
            $table->string("github")->nullable();
            $table->string("linkedin")->nullable();
            $table->string("image");
            $table->string("carrer")->nullable();
            $table->string("skill_1")->nullable();
            $table->string("skill_2")->nullable();
            $table->string("skill_3")->nullable();
            $table->string("skill_4")->nullable();
            $table->string("skill_5")->nullable();
            $table->string("project_1")->nullable();
            $table->string("project_2")->nullable();
            $table->string("project_3")->nullable();
            $table->string("bsc");
            $table->string("bsc_res");
            $table->string("hsc");
            $table->string("hsc_res");
            $table->string("ssc");
            $table->string("ssc_res");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cv_infos');
    }
};