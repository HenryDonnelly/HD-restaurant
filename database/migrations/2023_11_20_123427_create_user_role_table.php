<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void

    /**
     * laravel names this pivot table with joint tables names
     * in m:n relationship in alphabetical order,
     */
    {
        Schema::create('user_role', function (Blueprint $table) {
            $table->id();
            /**
             * these attributes ,ist be the same as the ids that defined
             * in the users and roles table
             * which are unsigned bigInts
             */
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('role_id')->unsigned();
            $table->timestamps();
             /**
             * add foreign keys - ids from users and roles tables
             */
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('role_id')->references('id')->on('roles')->onUpdate('cascade')->onDelete('restrict');
        });
    }
     /**Implementing the Many-to-Many relationship
       Many Users can have Many Roles
       Each Role can belong to many users, so you will create a users() function in the Role model (Role.php)
       Each User can have many roles, so you will create a roles() function in the User.php model (User.php) */
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_role');
    }
};
