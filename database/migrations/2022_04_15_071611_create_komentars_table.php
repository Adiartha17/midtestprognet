<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// return new class extends Migration
// {
//     /**
//      * Run the migrations.
//      *
//      * @return void
//      */
//     public function up()
//     {
//         Schema::create('komentars', function (Blueprint $table) {
//             $table->id()->autoIncrement();
//             $table->string('komentar');
//             $table->bigInteger('id_post')->unsigned();
//             $table->foreign('id_post')->references('id')->on('posts');
//             $table->bigInteger('id_admin')->unsigned();
//             $table->foreign('id_admin')->references('id')->on('admins');
//             $table->rememberToken();
//             $table->timestamps();
//         });
//     }

//     /**
//      * Reverse the migrations.
//      *
//      * @return void
//      */
//     public function down()
//     {
//         Schema::dropIfExists('komentars');
//     }
// };
