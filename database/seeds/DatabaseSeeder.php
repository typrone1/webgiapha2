<?php

use Illuminate\Database\Seeder;
use App\HoToc;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $hoToc = HoToc::create(['tenhotoc'=>'Tộc Họ Nguyễn']);
    }
}
