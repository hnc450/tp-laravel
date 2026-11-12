<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->timestamps();
          
        });

        DB::table('roles')->insert([
            ['name' => 'admin','created_at' => now(), 'updated_at' => now()],
            ['name' => 'editor','created_at' => now(), 'updated_at' => now()],
            ['name' => 'user','created_at' => now(), 'updated_at' => now()]
        ]);

        Schema::table('users', function (Blueprint $table) {
            $table->foreignId('role_id')
            ->default(3)
            ->constrained('roles')
            ->OnDelete('cascade');
        });
       
      

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roles');
    }
};
