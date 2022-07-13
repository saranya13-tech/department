<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('department_id')->unsigned()->index();
            $table->foreign('department_id')->references('id')->on('department');
            $table->integer('designation_id')->unsigned()->index();
            $table->foreign('designation_id')->references('id')->on('designation');
            $table->string('phone_number');
            $table->timestamps();
        });
         DB::table('user')->insert(array (
            0 =>
                array (
                    'name' => 'Jhon Due',
                    'department_id'=>1,
                    'designation_id'=>1,
                    'phone_number'=>'99999999999'

                ),
            1 =>
                array (
                    'name' => 'Tommy Mark',
                    'department_id'=>2,
                    'designation_id'=>2,
                    'phone_number'=>'99999999999'
                   
                ),
            
          ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user');
    }
}
