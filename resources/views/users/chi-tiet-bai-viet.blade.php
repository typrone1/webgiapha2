@extends('master')
@section('content')
<section id="chiTietBaiViet">
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h3 class="text-center text-capitalize">{{$baiViet->tieude}}</h3>
                <p class="text-muted text-lg-right">Tác giả: Admin - Ngày viết: {{$baiViet->created_at}}</p>
                <hr>
                <div id="noiDung">
                    {!! $baiViet->noidung !!}
                </div>
            </div>
        </div>
    </div>
</section>
@endsection