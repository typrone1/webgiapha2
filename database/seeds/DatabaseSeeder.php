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
            'hoten' => 'Nguyễn Văn Trưởng',
            'ngaysinh' => '1950-08-20',
            'gioitinh' => true,
            'doithu' => 1,
            'conthu' => 1,
            'quequan' => 'Lorem Ipsum',
            'diachi' => 'Lorem Ipsum',
            'nguoiky' => 'Ông A',
            'damat' => true
        ]);
        $hoSo = HoSo::create([
            'mahotoc' => 1,
            'mahsbo' => 1,
            'mahsme' => null,
            'hoten' => 'Nguyễn Văn Phó',
            'ngaysinh' => '1950-08-20',
            'gioitinh' => true,
            'doithu' => 1,
            'conthu' => 1,
            'quequan' => 'Lorem Ipsum',
            'diachi' => 'Lorem Ipsum',
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
            'quequan' => 'Lorem Ipsum',
            'diachi' => 'Lorem Ipsum',
            'nguoiky' => 'Ông A',
            'damat' => true
        ]);
        $hoSo = HoSo::create([
            'mahotoc' => 1,
            'mahsbo' => null,
            'mahsme' => null,
            'hoten' => 'Nguyễn Văn Nhì Hai',
            'ngaysinh' => '1950-08-20',
            'gioitinh' => true,
            'doithu' => 1,
            'conthu' => 1,
            'quequan' => 'Lorem Ipsum',
            'diachi' => 'Lorem Ipsum',
            'nguoiky' => 'Ông A',
            'damat' => true
        ]);
        $hoSo = HoSo::create([
            'mahotoc' => 1,
            'mahsbo' => 4,
            'mahsme' => null,
            'hoten' => 'Nguyễn Con Nhì Hai',
            'ngaysinh' => '1950-08-20',
            'gioitinh' => true,
            'doithu' => 1,
            'conthu' => 1,
            'quequan' => 'Lorem Ipsum',
            'diachi' => 'Lorem Ipsum',
            'nguoiky' => 'Ông A',
            'damat' => true
        ]);
        $hoSo = HoSo::create([
            'mahotoc' => 1,
            'mahsbo' => 2,
            'mahsme' => null,
            'hoten' => 'Nguyễn Văn Trưởng',
            'ngaysinh' => '1950-08-20',
            'gioitinh' => true,
            'doithu' => 1,
            'conthu' => 1,
            'quequan' => 'Lorem Ipsum',
            'diachi' => 'Lorem Ipsum',
            'nguoiky' => 'Ông A',
            'damat' => true
        ]);
        $hoSo = HoSo::create([
            'mahotoc' => 1,
            'mahsbo' => 3,
            'mahsme' => null,
            'hoten' => 'Nguyễn Văn Trưởng',
            'ngaysinh' => '1950-08-20',
            'gioitinh' => true,
            'doithu' => 1,
            'conthu' => 1,
            'quequan' => 'Lorem Ipsum',
            'diachi' => 'Lorem Ipsum',
            'nguoiky' => 'Ông A',
            'damat' => true
        ]);
        $hoSo = HoSo::create([
            'mahotoc' => 1,
            'mahsbo' => 4,
            'mahsme' => null,
            'hoten' => 'Nguyễn Văn Trưởng',
            'ngaysinh' => '1950-08-20',
            'gioitinh' => true,
            'doithu' => 1,
            'conthu' => 1,
            'quequan' => 'Lorem Ipsum',
            'diachi' => 'Lorem Ipsum',
            'nguoiky' => 'Ông A',
            'damat' => true
        ]);
        $hoSo = HoSo::create([
            'mahotoc' => 1,
            'mahsbo' => 5,
            'mahsme' => null,
            'hoten' => 'Nguyễn Văn Trưởng',
            'ngaysinh' => '1950-08-20',
            'gioitinh' => true,
            'doithu' => 1,
            'conthu' => 1,
            'quequan' => 'Lorem Ipsum',
            'diachi' => 'Lorem Ipsum',
            'nguoiky' => 'Ông A',
            'damat' => true
        ]);

        $viectoc = ViecToc::create([
            'ngaydienra' => '2017-09-12',
            'tensukien' => 'Hội họp',
            'noidung' => 'Hội họp',
        ]);

        $viectoc = ViecToc::create([
            'ngaydienra' => '2017-09-12',
            'tensukien' => 'Hội họp 1',
            'noidung' => 'Hội họp 1',
        ]);
        $viectoc = ViecToc::create([
            'ngaydienra' => '2017-09-12',
            'tensukien' => 'Hội họp 2',
            'noidung' => 'Hội họp 2',
        ]);

        $danhMuc = \App\Category::create([
            'tendanhmuc' => 'Tin tức',
            'mota' => 'abcxzy'
        ]);

        $baiViet = BaiViet::create([
            'madanhmuc' => 1,
            'tieude' => 'Xin chào',
            'noidung' => 'Lorem Ipsum'
        ]);

    }
}
