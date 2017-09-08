@extends('master')
@section('content')
    <section id="actions" class="py-4 mb-4 bg-faded">
        <div class="container">
            <div class="row">
                <div class="col-md-3 mr-auto">
                    <a href="index.html" class="btn btn-secondary btn-block"><i class="fa fa-arrow-left"></i> Back To Dashboard</a>
                </div>

                <div class="col-md-3">
                    <a href="index.html" class="btn btn-success btn-block"><i class="fa fa-check"></i> Lưu thay đổi</a>
                </div>
                <div class="col-md-3">
                    <a href="index.html" class="btn btn-danger btn-block"><i class="fa fa-remove"></i> Xóa hồ sơ</a>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container card p-3 mb-5">
            <h4 class="text-center">Hồ Sơ Gia Tộc</h4>
            <div class="row">

                <div class="col-md-9">
                    <h5>{{ $hoSo->hoten }}</h5>
                    <p>Đời thứ: {{$hoSo->doithu}} - Con thứ {{$hoSo->conthu}} </p>
                    <hr>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-md-2 col-form-label">Tên tự (Hiệu)</label>
                        <div class="col-md-4">
                            <input class="form-control" type="text" value="" id="example-text-input">
                        </div>
                        <label for="example-text-input" class="col-md-2 col-form-label">Tên thường gọi</label>
                        <div class="col-md-4">
                            <input class="form-control" type="text" value="" id="example-text-input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-md-2 col-form-label">Giới tính</label>
                        <div class="col-md-10">
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="gioi-tinh" id="gioi-tinh" value="nam" checked> Nam
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    @if($hoSo->gioitinh !== true)
                                    <input class="form-check-input" type="radio" name="gioi-tinh" id="gioi-tinh" value="nu"> Nữ
                                    @else
                                    <input class="form-check-input" type="radio" name="gioi-tinh" id="gioi-tinh" value="nu" checked>
                                    @endif
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-md-2 col-form-label">Nơi ở</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" value="{{$hoSo->diachi}}" id="example-text-input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-md-2 col-form-label">Địa vị xã hội</label>
                        <div class="col-md-4">
                            <input class="form-control" type="text" value="" id="example-text-input">
                        </div>
                        <label for="example-text-input" class="col-md-2 col-form-label">Học hàm học vị</label>
                        <div class="col-md-4">
                            <input class="form-control" type="text" value="" id="example-text-input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-md-2 col-form-label">Địa chỉ Email:</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" value="{{$hoSo->email}}" id="example-text-input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-md-2 col-form-label">Số điện thoại:</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" value="{{$hoSo->sdt}}" id="example-text-input">
                        </div>
                    </div>
                    <div class="bg-faded" style="border-radius: 5px;">
                        <div class="container p-2">
                            <div class="row">
                                <div class="col-6">Ngày mất: {{$hoSo->ngaymat}}</div>
                                <div class="col-6">Nơi mất: {{$hoSo->noimat}} </div>
                            </div>

                            <div class="row">
                                <div class="col-6">Ngày kỵ: 6/2/1999</div>
                                <div class="col-6">Nơi an táng: </div>
                                <div class="col-6">Người kỵ: </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-5">
                    <h3>Hình ảnh</h3>
                    <img src="{{asset('img/avatar.png')}}" alt="" class="d-block img-fluid mb-3">
                    <button class="btn btn-primary btn-block">Sửa ảnh</button>
                    <button class="btn btn-danger btn-block">Xóa ảnh</button>
                </div>
            </div>
        </div>
    </section>

    <section id="gia-dinh" class="p-5 bg-info">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h5><i class="fa fa-arrow-circle-o-up"></i>Chánh thất: Nguyễn Thị C</h5>
                    <p>Năm sinh: 1980</p>
                    <p>Quê quán: </p>
                    <p>Mất ngày: </p>
                    <p>Nơi mất: </p>
                    <p>Nơi an táng: </p>
                    <p>Sinh hạ:</p>
                    <ul>
                        <li><a></a>Con thứ: 1 - Đời thứ: 10 Nguyễn Thị G</li>
                        <li><a></a>Con thứ: 1 - Đời thứ: 10 Nguyễn Thị G</li>
                        <li><a></a>Con thứ: 1 - Đời thứ: 10 Nguyễn Thị G</li>
                        <li><a></a>Con thứ: 1 - Đời thứ: 10 Nguyễn Thị G</li>
                        <li><a></a>Con thứ: 1 - Đời thứ: 10 Nguyễn Thị G</li>
                        <li><a></a>Con thứ: 1 - Đời thứ: 10 Nguyễn Thị G</li>
                    </ul>
                </div>
                <a href="#" class="btn btn-primary">Thêm vợ</a>
                <a href="#" class="btn btn-secondary">Thêm con</a>
            </div>
        </div>
    </section>
    <section id="chau-chat" class="p-5">
        <div class="container">
            <div class="card">
                <div class="card-block">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <h5><i class="fa fa-arrow-circle-o-up"></i> Cháu nội</h5>
                            <ul>
                                <li><a href="#">Con thứ: 1 - Đời thứ: 10 Nguyễn Thị G</a></li>
                                <li><a href="#">Con thứ: 1 - Đời thứ: 10 Nguyễn Thị G</a></li>
                                <li><a href="#">Con thứ: 1 - Đời thứ: 10 Nguyễn Thị G</a></li>
                                <li><a href="#">Con thứ: 1 - Đời thứ: 10 Nguyễn Thị G</a></li>
                                <li><a href="#">Con thứ: 1 - Đời thứ: 10 Nguyễn Thị G</a></li>
                                <li><a href="#">Con thứ: 1 - Đời thứ: 10 Nguyễn Thị G</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <h5><i class="fa fa-arrow-circle-o-up"></i> Cháu ngoại</h5>
                            <ul>
                                <li><a href="#">Con thứ: 1 - Đời thứ: 10 Nguyễn Thị G</a></li>
                                <li><a href="#">Con thứ: 1 - Đời thứ: 10 Nguyễn Thị G</a></li>
                                <li><a href="#">Con thứ: 1 - Đời thứ: 10 Nguyễn Thị G</a></li>
                                <li><a href="#">Con thứ: 1 - Đời thứ: 10 Nguyễn Thị G</a></li>
                                <li><a href="#">Con thứ: 1 - Đời thứ: 10 Nguyễn Thị G</a></li>
                                <li><a href="#">Con thứ: 1 - Đời thứ: 10 Nguyễn Thị G</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="so-do-gia-dinh">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <table width="100%" border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                        <tr>
                            <td colspan="3" align="center" valign="middle">
                                <div style=" width: 400px;text-align:center; vertical-align:middle; background: url({{asset('img/pattern.jpg')}})">Con: <br>
                                    <span color="#FF0000">Đời thứ: 10 - Con thứ: 3</span><br><a href="#">{{ $hoSoOng->hoten }}</a></div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3" height="10" align="center" valign="middle"><img src="{{asset('img/down.gif')}}"></td>
                        </tr>
                        <tr>
                            <td colspan="3" align="center" valign="middle">
                                <div style="width: 400px;  text-align:center; vertical-align:middle; background: url({{asset('img/pattern.jpg')}})">Con: <br>
                                    <span color="#FF0000">Đời thứ: 10 - Con thứ: 3</span><br><a href="#">{{ $hoSoBo->hoten }}</a></div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3" height="10" align="center" valign="middle"><img src="{{asset('img/down.gif')}}"></td>
                        </tr>
                        <tr>
                            <td colspan="3" align="center" style="position: relative"><img src="{{asset('img/VLine.jpg')}}" width="50%" height="1px" style="position: absolute; left: 25%">
                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                        <td width="50%" align="center" valign="top" style="vertical-align:middle; background: url({{asset('img/pattern.jpg')}})">
                                            <div align="center" style="background-color:#FFFFFF"><img src="{{asset('img/down.gif')}}"></div>
                                            <div style="text-align:center; vertical-align:middle; position: relative">Con: <br>
                                                <span color="#FF0000">Đời thứ: 10 - Con thứ: 3</span><br><a href="#">{{ $hoSo->hoten }}</a>
                                                <div style="position: absolute; right: 0; top: 0; height: 100%; width: 1px; background-color: #fff "></div>
                                            </div>
                                        </td>
                                        <td width="50%" align="center" valign="top" style="vertical-align:middle; background: url({{asset('img/pattern.jpg')}})">
                                            <div align="center" style="background-color:#FFFFFF"><img src="{{asset('img/down.gif')}}"></div>
                                            <div style="text-align:center; vertical-align:middle; position: relative">Con: <br>
                                                <span color="#FF0000">Đời thứ: 10 - Con thứ: 3</span><br><a href="#">Trần Hưng Hân</a>
                                                <div style="position: absolute; right: 0; top: 0; height: 100%; width: 1px; background-color: #fff "></div>
                                            </div>
                                        </td>
                                    <tr>
                                        <td></td>
                                        <td align="center" valign="middle"><img src="{{asset('img/down.gif')}}"></td>
                                    </tr>

                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <?php
                            $count = $dsCon->count();
                            $percent = 100/$count;
                            $linePercent = (100/$count);
                            $marginPercent = $linePercent/2;
                            ?>
                            <td colspan="3" align="center" style="position: relative"><img src="{{asset('img/VLine.jpg')}}" width="{{$linePercent*($count-1)}}%" height="1px" style="position: absolute; left: {{$marginPercent}}%">
                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                    <tbody>

                                    @foreach($dsCon as $con)
                                    <td width="{{$percent}}%" align="center" valign="top" style="vertical-align:middle; float: left; background: url({{asset('img/pattern.jpg')}})">
                                        <div align="center" style="background-color:#FFFFFF"><img src="{{asset('img/down.gif')}}"></div>
                                        <div style="text-align:center; vertical-align:middle; position: relative">Con: <br>
                                            <span color="#FF0000">Đời thứ: 10 - Con thứ: 3</span><br><a href="#">{{$con->hoten}}</a>
                                            <div style="position: absolute; right: 0; top: 0; height: 100%; width: 1px; background-color: #fff "></div>
                                        </div>
                                    </td>
                                    @endforeach


                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container my-3">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between" style="font-size: 1.2em;">
                            <span><i class="fa fa-star"></i>Học Vấn</span>
                            <a href="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Chỉnh sửa</a>
                        </div>
                        <div class="card-block">
                            <div id="timeline">
                                <div class="container p-2" style="position: relative">
                                    <div id="verticle-line"></div>
                                    <div class="row">
                                        <div class="col-12 my-3">
                                            <div class="circle">
                                                <span>1997</span>
                                            </div>
                                            <span>Học trường THPT Lương Thế Vinh</span>
                                        </div>
                                        <div class="col-12  my-3">
                                            <div class="circle">
                                                <span>1997</span>
                                            </div>
                                            <span>Học trường THPT Lương Thế Vinh</span>
                                        </div>
                                        <div class="col-12 my-3 ">
                                            <div class="circle">
                                                <span>1997</span>
                                            </div>
                                            <span>Học trường THPT Lương Thế Vinh</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="card h-100">
                        <div class="card-header d-flex justify-content-between" style="font-size: 1.2em;">
                            <span><i class="fa fa-ticket" aria-hidden="true"></i>Sự nghiệp</span>
                            <a href="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Chỉnh sửa</a>
                        </div>

                        <div class="card-block">
                            <table class="table table-sm table-hover">
                                <thead>
                                <tr>
                                    <th>Từ - Đến</th>
                                    <th>Nơi công tác</th>
                                    <th>Chức vụ</th>
                                    <th>Ghi chú</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td colspan="2">Larry the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection