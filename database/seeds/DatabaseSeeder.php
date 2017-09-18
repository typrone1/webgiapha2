<?php

use Illuminate\Database\Seeder;
use App\HoToc;
use App\HoSo;
use App\BaiViet;
use App\ViecToc;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        $this->call(UsersTableSeeder::class);
        $hoToc = HoToc::create(['tenhotoc'=>'Tộc Họ Nguyễn']);
        $hoSo = HoSo::create([
            'mahotoc' => 1,
            'mahsbo' => null,
            'mahsme' => null,
            'hoten' => 'Nguyễn Văn Nhất',
            'ngaysinh' => '1950-08-20',
            'gioitinh' => true,
            'doithu' => 1,
            'conthu' => 1,
            'quequan' => 'Lorem ipsum',
            'diachi' => 'Lorem ipsum',
            'nguoiky' => 'Ông A',
            'damat' => true
        ]);
        $hoSo = HoSo::create([
            'mahotoc' => 1,
            'mahsbo' => 1,
            'mahsme' => null,
            'hoten' => 'Nguyễn Văn Nhì',
            'ngaysinh' => '1950-08-20',
            'gioitinh' => true,
            'doithu' => 1,
            'conthu' => 1,
            'quequan' => 'Lorem ipsum',
            'diachi' => 'Lorem ipsum',
            'nguoiky' => 'Ông A',
            'damat' => true
        ]);
        $hoSo = HoSo::create([
            'mahotoc' => 1,
            'mahsbo' => 2,
            'mahsme' => null,
            'hoten' => 'Nguyễn Văn Tam',
            'ngaysinh' => '1950-08-20',
            'gioitinh' => true,
            'doithu' => 1,
            'conthu' => 1,
            'quequan' => 'Lorem ipsum',
            'diachi' => 'Lorem ipsum',
            'nguoiky' => 'Ông A',
            'damat' => true
        ]);
        $hoSo = HoSo::create([
            'mahotoc' => 1,
            'mahsbo' => null,
            'mahsme' => null,
            'hoten' => 'Nguyễn Văn Tứ',
            'ngaysinh' => '1950-08-20',
            'gioitinh' => true,
            'doithu' => 1,
            'conthu' => 1,
            'quequan' => 'Lorem ipsum',
            'diachi' => 'Lorem ipsum',
            'nguoiky' => 'Ông A',
            'damat' => true
        ]);
        $hoSo = HoSo::create([
            'mahotoc' => 1,
            'mahsbo' => 4,
            'mahsme' => null,
            'hoten' => 'Nguyễn Con Ngũ',
            'ngaysinh' => '1950-08-20',
            'gioitinh' => true,
            'doithu' => 1,
            'conthu' => 1,
            'quequan' => 'Lorem ipsum',
            'diachi' => 'Lorem ipsum',
            'nguoiky' => 'Ông A',
            'damat' => true
        ]);
        $hoSo = HoSo::create([
            'mahotoc' => 1,
            'mahsbo' => 2,
            'mahsme' => null,
            'hoten' => 'Nguyễn Văn Lục',
            'ngaysinh' => '1950-08-20',
            'gioitinh' => true,
            'doithu' => 1,
            'conthu' => 1,
            'quequan' => 'Lorem ipsum',
            'diachi' => 'Lorem ipsum',
            'nguoiky' => 'Ông A',
            'damat' => true
        ]);
        $hoSo = HoSo::create([
            'mahotoc' => 1,
            'mahsbo' => 3,
            'mahsme' => null,
            'hoten' => 'Nguyễn Văn Thất',
            'ngaysinh' => '1950-08-20',
            'gioitinh' => true,
            'doithu' => 1,
            'conthu' => 1,
            'quequan' => 'Lorem ipsum',
            'diachi' => 'Lorem ipsum',
            'nguoiky' => 'Ông A',
            'damat' => true
        ]);
        $hoSo = HoSo::create([
            'mahotoc' => 1,
            'mahsbo' => 4,
            'mahsme' => null,
            'hoten' => 'Nguyễn Văn Bát',
            'ngaysinh' => '1950-08-20',
            'gioitinh' => true,
            'doithu' => 1,
            'conthu' => 1,
            'quequan' => 'Lorem ipsum',
            'diachi' => 'Lorem ipsum',
            'nguoiky' => 'Ông A',
            'damat' => true
        ]);
        $hoSo = HoSo::create([
            'mahotoc' => 1,
            'mahsbo' => 5,
            'mahsme' => null,
            'hoten' => 'Nguyễn Văn Cửu',
            'ngaysinh' => '1950-08-20',
            'gioitinh' => true,
            'doithu' => 1,
            'conthu' => 1,
            'quequan' => 'Lorem ipsum',
            'diachi' => 'Lorem ipsum',
            'nguoiky' => 'Ông A',
            'damat' => true
        ]);
        $hoSo = HoSo::create([
            'mahotoc' => 1,
            'mahsbo' => 6,
            'mahsme' => null,
            'hoten' => 'Nguyễn Văn Thập',
            'ngaysinh' => '1950-08-20',
            'gioitinh' => true,
            'doithu' => 1,
            'conthu' => 1,
            'quequan' => 'Lorem ipsum',
            'diachi' => 'Lorem ipsum',
            'nguoiky' => 'Ông A',
            'damat' => true
        ]);
        $hoSo = HoSo::create([
            'mahotoc' => 1,
            'mahsbo' => 10,
            'mahsme' => null,
            'hoten' => 'Nguyễn Văn Thập Nhất',
            'ngaysinh' => '1950-08-20',
            'gioitinh' => true,
            'doithu' => 1,
            'conthu' => 1,
            'quequan' => 'Lorem ipsum',
            'diachi' => 'Lorem ipsum',
            'nguoiky' => 'Ông A',
            'damat' => true
        ]);
        $hoSo = HoSo::create([
            'mahotoc' => 1,
            'mahsbo' => 10,
            'mahsme' => null,
            'hoten' => 'Nguyễn Văn Thập Nhì',
            'ngaysinh' => '1950-08-20',
            'gioitinh' => true,
            'doithu' => 1,
            'conthu' => 1,
            'quequan' => 'Lorem ipsum',
            'diachi' => 'Lorem ipsum',
            'nguoiky' => 'Ông A',
            'damat' => true
        ]);
        $hoSo = HoSo::create([
            'mahotoc' => 1,
            'mahsbo' => 10,
            'mahsme' => null,
            'hoten' => 'Nguyễn Văn Thập Tam',
            'ngaysinh' => '1950-08-20',
            'gioitinh' => true,
            'doithu' => 1,
            'conthu' => 1,
            'quequan' => 'Lorem ipsum',
            'diachi' => 'Lorem ipsum',
            'nguoiky' => 'Ông A',
            'damat' => true
        ]);
        $viectoc = ViecToc::create([
            'ngaydienra' => '2017-09-12',
            'tensukien' => 'Hội họp',
            'noidung' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum',
        ]);

        $viectoc = ViecToc::create([
            'ngaydienra' => '2017-09-12',
            'tensukien' => 'Hội họp 1',
            'noidung' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
        ]);
        $viectoc = ViecToc::create([
            'ngaydienra' => '2017-09-12',
            'tensukien' => 'Hội họp 2',
            'noidung' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
        ]);

        $danhMuc = \App\Category::create([
            'tendanhmuc' => 'Tin tức',
            'mota' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
        ]);

        $baiViet = BaiViet::create([
            'madanhmuc' => 1,
            'tieude' => 'Thông báo toàn thể gia tộc',
            'noidung' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
        ]);
        $baiViet = BaiViet::create([
            'madanhmuc' => 1,
            'tieude' => 'Thông báo về việc cử hành lễ thành hôn của con cháu',
            'noidung' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
        ]);
        $baiViet = BaiViet::create([
            'madanhmuc' => 1,
            'tieude' => 'Thông báo về việc cử hành lễ thành hôn của con cháu',
            'noidung' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
        ]);

    }
}
