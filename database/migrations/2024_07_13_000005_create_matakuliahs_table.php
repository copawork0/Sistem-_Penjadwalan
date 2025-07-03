<<<<<<< HEAD
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('matakuliahs', function (Blueprint $table) {
            $table->id();
            $table->string('kode');
            $table->string('nama');
            $table->integer('sks');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('matakuliahs');
    }
=======
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('matakuliahs', function (Blueprint $table) {
            $table->id();
            $table->string('kode');
            $table->string('nama');
            $table->integer('sks');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('matakuliahs');
    }
>>>>>>> a148e2d54188b024776fd58f323a6b3508647fb5
}; 