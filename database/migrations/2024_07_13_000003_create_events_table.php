<<<<<<< HEAD
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->date('tanggal');
            $table->string('status')->default('aktif');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('events');
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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->date('tanggal');
            $table->string('status')->default('aktif');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
>>>>>>> a148e2d54188b024776fd58f323a6b3508647fb5
}; 