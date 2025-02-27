<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserDetailsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->float('current_weight')->nullable(); // Current weight in kg
            $table->enum('sex', ['male', 'female'])->nullable(); // Sex
            $table->date('date_of_birth')->nullable(); // Date of birth
            $table->float('height')->nullable(); // Height in cm
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['current_weight', 'sex', 'date_of_birth', 'height']);
        });
    }
}
