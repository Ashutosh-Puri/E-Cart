<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create( [
            'id'=>1,
            'name'=>'Admin',
            'role'=>1,
            'email'=>'admin@gmail.com',
            'email_verified_at'=>'2023-03-16 09:07:48',
            'password'=>'$2y$10$HF5rC68zc737YuNMH0htfuJF7.K/S4PNm80x5IdjW6EV6lIIm7Oq6',
            'remember_token'=>NULL,
            'created_at'=>'2023-03-16 06:09:40',
            'updated_at'=>'2023-03-16 09:07:48'
            ] );
            
            
                        
            User::create( [
            'id'=>2,
            'name'=>'Ashutosh',
            'role'=>0,
            'email'=>'ashutoshpuri2000@gmail.com',
            'email_verified_at'=>'2023-03-16 09:16:47',
            'password'=>'$2y$10$HVavYAUUz89fYcy/S3YWS.bS0R0jG7FlPAeFgU8Ot18ok39CEnhF2',
            'remember_token'=>NULL,
            'created_at'=>'2023-03-16 09:02:47',
            'updated_at'=>'2023-03-16 09:16:47'
            ] );
            
            
    }
}
