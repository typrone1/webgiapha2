@extends('master')
@section('content')
    <header id="main-header" class="py-2 bg-primary text-white">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1><i class="fa fa-search"></i> Trang tìm kiếm</h1>
                </div>
            </div>
        </div>
    </header>


    <section id="actions" class="py-4 mb-4 bg-faded">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-6">
                    <form class="form-inline" action="{{route('tim-kiem')}}">
                        <label class="sr-only" for="inlineFormInput">Tìm kiếm</label>
                        <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="inlineFormInput" name="keyword">
                        <button type="submit" class="btn btn-warning">Tìm kiếm</button>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <!-- POSTS -->
    <section id="users">

        <div class="container">
            <p>Tìm thấy {{ $count }} kết quả</p>
            <div class="row">
                {{----}}
                @foreach($dsHoSo as $hoso)
                <div class="col-md-6">
                    <div class="container card p-2 mb-2">
                        <div class="row">
                            <div class="col-4">
                                <img src="img/avatar.png" class="img-thumbnail" alt="">
                            </div>
                            <div class="col-8">
                                <h5>{{ $hoso->hoten }}</h5>
                                <p><span>Ngày sinh: {{ $hoso->ngaysinh }}</span> - <span>Ngày dỗ: 31/2/1999</span></p>
                                <p><span>Quê quán</span></p>
                                <a href="{{ route('chi-tiet-ho-so', $hoso->mahoso)}}" class="btn btn-primary">Xem chi tiết</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                {{----}}

            </div>
            <div class="row">
                <div class="container">
                    <div class="row justify-content-md-center">
                        <div>
                            {{ $dsHoSo->links('vendor.pagination.bootstrap-4') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
