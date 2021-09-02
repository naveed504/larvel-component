<?php

namespace Database\Seeders;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Seeder;
use DB;
use Carbon\Carbon;
class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::insert([
            [
                'name' => 'admin',
                'guard_name' => 'web',
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
            [
                'name' => 'writer',
                'guard_name' => 'web',
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
            [
                'name' => 'manager',
                'guard_name' => 'web',
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
            [
                'name' => 'user',
                'guard_name' => 'web',
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
           

            ]);
       
    }
}
