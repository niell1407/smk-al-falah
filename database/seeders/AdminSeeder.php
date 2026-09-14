<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            [
                'email' => 'admin@alfalah.sch.id',
            ],
            [
                'name' => 'Admin SMK Al Falah',
                'password' => Hash::make('AdminAlFalah123!'),
            ]
        );
    }
}