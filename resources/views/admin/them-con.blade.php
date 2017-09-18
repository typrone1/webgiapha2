@extends('master')
@section('content')
    <section id="actions" class="py-4 mb-4 bg-faded">
        <div class="container">
            <div class="row">
                <div class="col-md-3 mr-auto">
                    <a onclick="window.history.go(-1)" class="btn btn-secondary btn-block"><i class="fa fa-arrow-left"></i> Back To Dashboard</a>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="p-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card p-4">
                        <div class="card-block">
                            <h4 class="text-center">Ảnh hiển thị</h4>
                            <hr>
                            <img src="{{asset('img/avatar.png')}}" class="img-thumbnail" alt="">
                            <div class="form-group">
                                <label for="exampleInputFile">Chọn đường dẫn</label>
                                <input type="file" class="form-control-file  w-100" id="exampleInputFile" aria-describedby="fileHelp">
                                <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-8">
                    <div class="card p-4">
                        <form action="{{route('post-them-ho-so')}}" method="post">
                            <input type="hidden" name="_token" value="{{ csrf_token()}}"/>
                            <div class="card-block">
                                <h3 class="text-center">Thông tin cá nhân</h3>
                                <p class="text-center font-italic">Con của {{$hoSo->hoten}}</p>
                                @if(Session::has('thongbao'))
                                    <div class="alert alert-success" role="alert">
                                        <strong>Tạo hồ sơ thành công!</strong>
                                    </div>
                                @endif
                                <hr>
                                <input name="nhanh-bo" type="hidden" value="{{$hoSo->mahoso}}">
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-4 col-form-label">Chọn nhánh mẹ</label>
                                    <div class="col-8">
                                        <select class="form-control" id="nhanh-me" name="nhanh-me">
                                            @foreach($dsVo as $vo)
                                            <option value="{{$vo->mahoso}}">{{$vo->hoten}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-4 col-form-label">Họ và tên</label>
                                    <div class="col-8">
                                        <input class="form-control" name="ho-ten" type="text" value="" id="example-text-input">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="example-text-input" class="col-4 col-form-label">Ngày sinh</label>
                                    <div class="col-8">
                                        <input class="form-control" name="ngay-sinh" type="date" value="2011-08-19" id="example-date-input">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-4 col-form-label">Giới tính</label>
                                    <div class="col-8">
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="gioi-tinh" id="gioi-tinh" value="nam" checked> Nam
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="gioi-tinh" id="gioi-tinh" value="nu"> Nữ
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-4 col-form-label">Quên quán</label>
                                    <div class="col-8">
                                        <input class="form-control" type="text" name="que-quan" id="example-text-input">
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="example-text-input" class="col-4 col-form-label">Đời thứ</label>
                                    <div class="col-8">
                                        <input class="form-control" type="number" name="doi-thu" value="1" id="example-text-input">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-4 col-form-label">Con thứ</label>
                                    <div class="col-8">
                                        <input class="form-control" type="number" name="con-thu" value="2" id="example-text-input">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-4 col-form-label">Email</label>
                                    <div class="col-8">
                                        <input class="form-control" type="text" name="email" value="abc@gmail.com" id="example-text-input">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-4 col-form-label">Số điện thoại</label>
                                    <div class="col-8">
                                        <input class="form-control" type="text" value="0123456789" name="sdt" id="example-text-input">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-4 col-form-label">Nghề nghiệp</label>
                                    <div class="col-8">
                                        <input class="form-control" type="text" name="nghe-nghiep"  id="example-text-input">
                                    </div>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="da-mat">
                                        Đã mất
                                    </label>
                                </div>

                                <div class="form-group row">
                                    <label for="example-text-input" class="col-4 col-form-label">Ngày mất</label>
                                    <div class="col-8">
                                        <input class="form-control" type="date" name="ngay-mat" value="20-08-19" id="example-date-input" disabled>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="submit" class="btn btn-outline-danger btn-block" value="Đăng ký">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection