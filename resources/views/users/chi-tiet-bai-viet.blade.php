@extends('master')
@section('content')
<section id="chiTietBaiViet">
    <header id="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3 text-center">
                    <h3 class="display-4 text-center">{{$baiViet->tieude}}</h3>
                </div>
            </div>
        </div>
    </header>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">

                <blockquote class="blockquote text-center">
                    <p class="mb-0">{{$baiViet->tieude}}</p>
                    <footer class="blockquote-footer">Tác giả: <cite title="Source Title">Admin</cite></footer>
                </blockquote>

                <div id="noiDung">
                    {!! $baiViet->noidung !!}
                </div>
            </div>


        </div>
    </div>
</section>
@endsection