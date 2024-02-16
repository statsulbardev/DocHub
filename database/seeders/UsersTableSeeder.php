<?php

namespace Database\Seeders;

use BookStack\Users\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('users')->truncate();

        $json = File::get('database/data/user7600.json');
        $data = json_decode($json);

        foreach ($data as $item) {
            DB::table('users')->insert([
                'name'        => $item->name,
                'email'       => $item->email,
                'password'    => bcrypt('dochub7600'),
                'bps_id'      => $item->bps_id ?? null,
                'employee_id' => $item->employee_id ?? null,
                'created_at'  => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at'  => \Carbon\Carbon::now()->toDateTimeString(),
                'slug'        => Str::slug($item->name)
            ]);
        }
    }
}