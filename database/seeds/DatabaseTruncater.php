<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseTruncater extends Seeder
{
    public function run()
    {
        DB::statement('BEGIN;');
        DB::statement('ALTER TABLE tokens DISABLE TRIGGER ALL;');
        DB::statement('TRUNCATE users CASCADE');
        DB::statement('ALTER TABLE tokens ENABLE TRIGGER ALL;');
        DB::statement('COMMIT;');
    }
}