<<<<<<< HEAD
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('ukms', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('pembina');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('ukms');
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
        Schema::create('ukms', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('pembina');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('ukms');
    }
>>>>>>> a148e2d54188b024776fd58f323a6b3508647fb5
}; 