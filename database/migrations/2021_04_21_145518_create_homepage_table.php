<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Homepage;

class CreateHomepageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homepage', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title')->default('Pavadinimas');
            $table->mediumText('body')->default('Tesktas');
            $table->string('homepage_image')->default('noimage.jpg');
        });

        DB::table('homepage')->insert([
           [
               'id'=>1,
           ]
        ]);


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('homepage');
    }
}
