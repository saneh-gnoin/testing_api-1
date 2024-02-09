<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $admin_role = Role::create(['name' => 'admin']);
$admin = User::create([
'name' => 'Admin',
'email' => 'sourabhsingh101037@gmail.com',
'password' => bcrypt('sss@12345'),
'contact' =>'9604545454',
'address' => 'jaipur',
]);

$admin->assignRole($admin_role);

// assign user role
$user_role = Role::create(['name' => 'user']);
$user = User::create([
'name' => 'user',
'email' => 'user@gmail.com',
'password' => bcrypt('sss@12345'),
'contact' =>'9604545453',
'address' => 'jaipur',
]);

$user->assignRole($user_role);
    }
}
