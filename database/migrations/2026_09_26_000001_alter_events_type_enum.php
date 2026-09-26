<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        $driver = DB::getDriverName();

        if ($driver === 'mysql') {
            DB::statement("ALTER TABLE events MODIFY COLUMN type ENUM('event', 'program', 'upcoming', 'happening_today') NOT NULL DEFAULT 'event'");
            return;
        }

        Schema::table('events', function (Blueprint $table) {
            $table->string('type')->default('event')->change();
        });
    }

    public function down(): void
    {
        $driver = DB::getDriverName();

        if ($driver === 'mysql') {
            DB::statement("ALTER TABLE events MODIFY COLUMN type ENUM('event', 'program', 'upcoming') NOT NULL DEFAULT 'event'");
            return;
        }

        Schema::table('events', function (Blueprint $table) {
            $table->string('type')->default('event')->change();
        });
    }
};
