@extends('master')
@section('content')
    <header id="main-header" class="py-2 bg-primary text-white">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1><i class="fa fa-dashboard"></i>Trang dashboard</h1>
                </div>
            </div>
        </div>
    </header>

    <section class="p-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-5">
                    <div class="card" style="height: 180px;">
                        <div class="card-block  bg-primary">
                            <i class="fa fa-bookmark fa-4x"></i>
                            <span style="font-size: 2em">Quản lý hồ sơ</span>
                        </div>

                    </div>

                </div>
                <div class="col-md-6 mb-5">
                    <div class="card" style="height: 180px;">
                        <div class="card-block  bg-success">
                            <i class="fa fa-lock fa-4x"></i>
                            <span style="font-size: 2em">Chỉnh sửa tài khoản</span>
                        </div>

                    </div>

                </div>
                <div class="col-md-6 mb-5">
                    <div class="card" style="height: 180px;">
                        <div class="card-block  bg-danger">
                            <i class="fa fa-podcast fa-4x"></i>
                            <span style="font-size: 2em">Viết bài</span>
                        </div>

                    </div>

                </div>
                <div class="col-md-6 mb-5">
                    <div class="card" style="height: 180px;">
                        <div class="card-block  bg-warning">
                            <i class="fa fa-book fa-4x"></i>
                            <span style="font-size: 2em;">Quản lý việc tộc</span>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
