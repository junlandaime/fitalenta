<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        DB::table('services')->where('id', 8)->update([
            'icon' => 'gears',
        ]);

        DB::table('services')->where('id', 10)->update([
            'icon' => 'clipboard-list',
        ]);
    }

    public function down(): void
    {
        DB::table('services')->where('id', 8)->update([
            'icon' => null,
        ]);

        DB::table('services')->where('id', 10)->update([
            'icon' => null,
        ]);
    }
};
