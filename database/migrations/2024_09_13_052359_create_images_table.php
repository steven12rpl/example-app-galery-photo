<?php

use App\Models\Post;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        schema::create('images',function(blueprint $table){
            $table->id();
            $table->string('title');
            $table->string('path');
            $table->foreignIdFor(Post::class);
            $table->timestamps();
        //
    });
}

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        schema::dropfexists('images');
        //
    }
};
