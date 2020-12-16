<?php 

/** Migrations documentatie: https://laravel.com/docs/8.x/migrations */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->incerments('id');
            $table->string('title', 30);
            $table->text('body');
            /** Tags -> Mogelijkheid om eventueel te zoeken in de gehele blog naar bepaalde tags om enkel de blogposts te zien met die aanwezige tag(s) */
            $table->text('tags')->nullable();
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
        Schema::dropIfExists('posts');
    }
}
