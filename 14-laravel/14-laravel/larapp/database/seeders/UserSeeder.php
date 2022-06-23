<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // metodo insert
       DB::table('users')->insert([
           'fullname' => 'jeremias springfield',
           'email' => 'jeremias@gmail.com',
           'phone' => 320123456,
           'birthdate' => '1968-08-05',
           'gender' => 'Male',
           'address' => 'Avn Siempre Viva',
           'role' => 'Admin',
           'password' => Hash::make('admin')
       ]);

       // metodo ORM
       $user = new User;
       $user->fullname = 'Homero simpson';
       $user->email = 'homero@gmail.com';
       $user->phone = 320123495;
       $user->birthdate = '1980-02-15';
       $user->gender = 'Male';
       $user->address = 'Avn siempre viva';
       $user->password = bcrypt('customer');
       $user->save();
    }
}
