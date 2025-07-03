<<<<<<< HEAD
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('jadwals', function (Blueprint $table) {
            $table->id();
            $table->string('hari');
            $table->string('jam');
            $table->string('matakuliah');
            $table->string('dosen');
            $table->string('ruangan');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('jadwals');
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
        Schema::create('jadwals', function (Blueprint $table) {
            $table->id();
            $table->string('hari');
            $table->string('jam');
            $table->string('matakuliah');
            $table->string('dosen');
            $table->string('ruangan');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('jadwals');
    }
>>>>>>> a148e2d54188b024776fd58f323a6b3508647fb5
}; 