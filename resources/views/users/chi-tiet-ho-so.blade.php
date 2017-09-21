@extends('master')
@section('content')
    <section id="actions" class="py-4 mb-4 bg-faded">
        <div class="container">
            <div class="row">
                <div class="col-md-3 mr-auto">
                    <a onclick="window.history.go(-1)" class="btn btn-secondary btn-block"><i
                                class="fa fa-arrow-left"></i> Back To Dashboard</a>
                </div>
                @if(Auth::check())
                    <div class="col-md-3">
                        <a href="{{ route('chi-tiet-ho-so', $hoSo->mahoso)}}" class="btn btn-success btn-block"><i
                                    class="fa fa-check"></i> Chỉnh sửa</a>
                    </div>
                @endif
                <div class="col-md-3">
                    <a href="#" class="btn btn-danger btn-block"><i class="fa fa-id-card" aria-hidden="true"></i> Bổ
                        sung thêm thông tin</a>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container card p-3">
            <h4 class="text-center">Hồ Sơ Gia Tộc</h4>
            <div class="row">
                <div class="col-md-3">
                    <img src="@if($hoSo->hinhanh == null){{asset('img/avatar.png')}}@else{{asset('/img/anhcanhan').'/'.$hoSo->hinhanh}}@endif"
                         alt="" class="d-block img-thumbnail mb-3">
                </div>
                <div class="col-md-9">
                    <h5>(Ông) {{ $hoSo->hoten }}</h5>
                    <p>Đời thứ: {{$hoSo->doithu}} - Con thứ {{$hoSo->conthu}} </p>
                    <hr>
                    <p>Tên tự (Hiệu): </p>
                    <p>Giới tính: @if($hoSo->gioitinh !== true){{'Nam'}}@else {{'Nữ'}}@endif</p>
                    <p>Nơi ở: {{$hoSo->diachi}}</p>
                    <p>Địa vị xã hội:</p>
                    <p>Học hàm học vị:</p>
                    <p>Sự tích:</p>
                    <p>Địa chỉ Email: {{$hoSo->email}}</p>
                    <p>Số điện thoại: {{$hoSo->sdt}}</p>

                    <div class="bg-faded" style="border-radius: 5px;">
                        <div class="container p-2">
                            <div class="row">
                                <div class="col-6">Ngày mất: {{$hoSo->ngaymat}}</div>
                                <div class="col-6">Nơi mất: {{$hoSo->noimat}}</div>
                            </div>

                            <div class="row">
                                <div class="col-6">Ngày kỵ: 6/2/1999</div>
                                <div class="col-6">Nơi an táng:</div>
                                <div class="col-6">Người kỵ:</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="gia-dinh" class="p-5 bg-info">
        <div class="container">
            <div class="row">
                <div class="col-12">
                <?php
                $count = 0;
                ?>
                @foreach($dsVo as $vo)
                    <?php
                    $count++
                    ?>
                        <h5><i class="fa fa-arrow-circle-o-up"></i> Vợ {{$count}} {{ $vo->hoten }}</h5>
                        <p>Năm sinh: {{$year = date('Y', strtotime($vo->ngaysinh))}}</p>
                        <p>Quê quán: {{ $vo->quequan }}</p>
                        <p>Mất ngày: {{ $vo->ngaymat }}</p>
                        <p>Nơi mất: </p>
                        <p>Nơi an táng: {{$vo->noiantang}}</p>
                        <p>Sinh hạ:</p>
                        <ol>
                            @foreach($dsCon as $con)
                                @if($con->mahsme == $vo->mahoso )
                                    <li><a class="btn btn-link" href="{{ route('chi-tiet-ho-so', $con->mahoso) }}">Con
                                            thứ: {{$con->conthu}} - Đời thứ: {{$con->doithu}} {{$con->hoten}}</a></li>
                                @endif
                            @endforeach
                        </ol>
                @endforeach
                    <div class="row">
                        <div class="col-12">
                            <h5><i class="fa fa-adn"></i> Danh sách con nuôi</h5>
                            <ol>
                                @foreach($dsCon as $con)
                                    @if($con->mahsme == null)
                                        <li><a class="btn btn-link" href="{{ route('chi-tiet-ho-so', $con->mahoso) }}">Con
                                                thứ: {{$con->conthu}} - Đời thứ: {{$con->doithu}} {{$con->hoten}}</a></li>
                                    @endif
                                @endforeach
                            </ol>
                        </div>
                    </div>
                </div>
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
                                @foreach($dsCon as $con)
                                    <li><a href="{{ route('ho-so', $con->mahoso)}}">Con thứ: 1 - Đời thứ:
                                            10 {{$con->hoten}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <h5><i class="fa fa-arrow-circle-o-up"></i> Cháu ngoại</h5>
                            <ul>
                                <li><a>Con thứ: 1 - Đời thứ: 10 Nguyễn Thị G</a></li>
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
                        @if(isset($hoSoOng))
                            <tr>

                                <td colspan="3" align="center" valign="middle">

                                    <div style=" width: 400px;text-align:center; vertical-align:middle; background: url({{asset('img/pattern.jpg')}})">
                                        Ông nội: <br>
                                        <div style=" width: 400px;text-align:center; vertical-align:middle; background: url({{asset('img/pattern.jpg')}})">
                                            Con: <br>
                                            <span style="color:#FF0000">Đời thứ: 10 - Con thứ: 3</span><br><a
                                                    href="{{route('chi-tiet-ho-so', $hoSoOng->mahoso)}}">{{ $hoSoOng->hoten }}</a>
                                        </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3" height="10" align="center" valign="middle"><img
                                            src="{{asset('img/down.gif')}}"></td>
                            </tr>
                        @endif
                        @if(isset($hoSoBo))
                            <tr>
                                <td colspan="3" align="center" valign="middle">
                                    <div style="width: 400px;  text-align:center; vertical-align:middle; background: url({{asset('img/pattern.jpg')}})">
                                        Bố: <br>
                                        <span style="color:#FF0000">Đời thứ: 10 - Con thứ: 3</span><br><a
                                                style="color: white;"
                                                href="{{route('chi-tiet-ho-so', $hoSoBo->mahoso)}}">{{ $hoSoBo->hoten }}</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3" height="10" align="center" valign="middle"><img
                                            src="{{asset('img/down.gif')}}"></td>
                            </tr>
                        @endif
                        <tr>
                            <?php
                            $count = $dsAnhEm->count();
                            if ($count == 0) {
                                $count = 1;
                            }
                            $percent = 100 / $count;
                            $linePercent = (100 / $count);
                            $marginPercent = $linePercent / 2;
                            $viTri = 0;
                            ?>
                            <td colspan="3" align="center" style="position: relative"><img
                                        src="{{asset('img/VLine.jpg')}}" width="{{$linePercent*($count-1)}}%"
                                        height="1px" style="position: absolute; left: {{$marginPercent}}% ">
                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>

                                        @foreach($dsAnhEm as $anhEm)
                                            <td width="{{$percent}}%" align="center" valign="top"
                                                style="vertical-align:middle; background: url(@if($anhEm->mahoso != $hoSo->mahoso){{asset('img/pattern.jpg')}})@else{{asset('img/pattern2.jpg')}})@endif">
                                                <div align="center" style="background-color:#FFFFFF"><img
                                                            src="{{asset('img/down.gif')}}"></div>
                                                <div style="text-align:center; vertical-align:middle; position: relative">
                                                    Anh em: <br>
                                                    <span style="color:#FF0000">Đời thứ: 10 - Con thứ: 3</span><br><a
                                                            style="color: chocolate;"
                                                            href="{{ route('chi-tiet-ho-so', $anhEm->mahoso)}}">{{ $anhEm->hoten }}</a>
                                                    <div style="position: absolute; right: 0; top: 0; height: 100%; width: 1px; background-color: #fff "></div>
                                                </div>
                                            </td>
                                    @endforeach
                                    <tr>
                                        <?php $viTri = 0 ?>
                                        @foreach($dsAnhEm as $anhEm)
                                            <?php $viTri++ ?>
                                            {{--Tìm thấy rồi--}}
                                            @break($anhEm->mahoso == $hoSo->mahoso)
                                        @endforeach
                                        @for($i = 1; $i < $viTri; $i++)
                                            <td></td>
                                        @endfor

                                        {{--{{ $count }}--}}
                                        <td align="center" valign="middle"><img src="{{asset('img/down.gif')}}"></td>
                                    </tr>

                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <?php
                            $count = $dsCon->count();
                            if ($count == 0) {
                                $count = 1;
                            }
                            $percent = 100 / $count;
                            $linePercent = (100 / $count);
                            $marginPercent = $linePercent / 2;
                            ?>
                            <td colspan="3" align="center" style="position: relative"><img
                                        src="{{asset('img/VLine.jpg')}}" width="{{$linePercent*($count-1)}}%"
                                        height="1px" style="position: absolute; left: {{$marginPercent}}%">
                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    @foreach($dsCon as $con)
                                        <td width="{{$percent}}%" align="center" valign="top"
                                            style="vertical-align:middle; height: 200px; float: left; background: url({{asset('img/pattern.jpg')}})">
                                            <div align="center" style="background-color:#FFFFFF"><img
                                                        src="{{asset('img/down.gif')}}"></div>
                                            <div style="text-align:center; vertical-align:middle; position: relative; height: 100%">
                                                Con: <br>
                                                <span style="color:#FF0000">Đời thứ: 10 - Con thứ: 3</span><br><a
                                                        href="{{ route('chi-tiet-ho-so', $con->mahoso)}}">{{$con->hoten}}</a>
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

                                        @foreach($dsHocVan as $hocVan)
                                            <div class="col-12 my-3">
                                                <div class="circle">
                                                    <span style="font-size: 0.6em">{{$hocVan->tgtu}}
                                                        -{{$hocVan->tgden}}</span>
                                                </div>
                                                <span>{{$hocVan->hoctai}}({{$hocVan->congviec}})</span>
                                            </div>
                                        @endforeach
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