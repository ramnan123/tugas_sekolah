<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   *
   * @return void
   */
  public function run()
  {
    $data = [
      [
        'username' => 'admin',
        'role' => 'admin',
        'name' => 'admin',
        'email' => 'admin@e-comers.com',
        'password' => bcrypt(12341234)
      ],
      [
        'username' => 'user',
        'role' => 'user',
        'name' => 'user',
        'email' => 'user@e-comers.com',
        'password' => bcrypt(12341234)
      ],
      [
        'username' => 'penjual',
        'role' => 'costomer',
        'name' => 'penjual',
        'email' => 'penjual@e-comers.com',
        'password' => bcrypt(12341234)
      ],
    ];

    foreach ($data as $user) {
      User::create($user);
    }
  }
}
