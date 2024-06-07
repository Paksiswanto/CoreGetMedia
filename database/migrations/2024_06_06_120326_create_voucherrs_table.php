<?php

use App\Enums\QuotaEnum;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('voucherrs', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->integer('quota')->nullable();
            $table->integer('presentation');
            $table->enum('status' , [QuotaEnum::UNLIMITED->value , QuotaEnum::QUOTA->value]);
            $table->date('start_date');
            $table->date('end_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('voucherrs');
    }
};
