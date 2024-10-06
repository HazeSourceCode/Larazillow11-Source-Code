<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('listings', function (Blueprint $table) {
            $table->unsignedTinyInteger('beds');
            $table->unsignedTinyInteger('baths');
            $table->unsignedSmallInteger('area'); // Smallint is better for area
          
            // Use string instead of tinyText
            $table->string('city', 100);
            $table->string('code', 10);
            $table->string('street', 100);
            $table->string('street_nr', 10);

            $table->unsignedInteger('price');
        });
    }

    public function down()
    {
        Schema::table('listings', function (Blueprint $table) {
            $table->dropColumn(['beds', 'baths', 'area', 'city', 'code', 'street', 'street_nr', 'price']);
        });
    }
};
