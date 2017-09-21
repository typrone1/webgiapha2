@extends('master')
@section('content')
    <header id="main-header" class="py-2 bg-primary text-white">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1><i class="fa fa-dashboard"></i>Trang quản trị</h1>
                </div>
            </div>
        </div>
    </header>

    <section class="p-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-5">
                    <div class="d-flex align-items-center justify-content-center" style="background:linear-gradient( #400080, transparent),linear-gradient(200deg, #d047d1, #ff0000, #ffff00);">
                            <a href="{{route('quan-ly-ho-so')}}" class="btn btn-primary btn-lg m-5 w-50"><i class="fa fa-bookmark"></i> Quản lý hồ sơ</a>
                    </div>
                </div>

                <div class="col-md-6 mb-5">
                    <div class="d-flex align-items-center justify-content-center bg-info">
                        <a href="{{route('quan-ly-viec-toc')}}" class="btn btn-outline-danger btn-lg m-5 w-50"><i class="fa fa-podcast"></i> Viết bài</a>
                    </div>
                </div>

                <div class="col-md-6 mb-5">
                    <div class="d-flex align-items-center justify-content-center bg-warning">
                        <a href="{{route('quan-ly-ho-so')}}" class="btn btn-outline-primary btn-lg m-5 w-50"><i class="fa fa-youtube-play"></i> Xem thông tin tài khoản</a>
                    </div>
                </div>
                <div class="col-md-6 mb-5">
                    <div class="d-flex align-items-center justify-content-center bg-danger">
                        <a href="{{route('quan-ly-viec-toc')}}" class="btn btn-primary btn-lg m-5 w-50"><i class="fa fa-book"></i> Quản lý việc tộc</a>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
