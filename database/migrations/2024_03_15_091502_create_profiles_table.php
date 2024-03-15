<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nationality');
            $table->integer('age');
            $table->string('LinkedinLink')->nullable();
            $table->string('DegreeName');
            $table->string('university');
            $table->string('cgpa');
            $table->string('passingYear');
            $table->string('HSC');
            $table->string('college');
            $table->string('gpa');
            $table->string('HSCpassingYear');
            $table->string('companyName')->nullable();
            $table->string('Designation')->nullable();
            $table->date('JoiningDate')->nullable();
            $table->date('LeavingDate')->nullable();
            $table->string('skills');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')
                ->restrictOnDelete()->cascadeOnUpdate();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
