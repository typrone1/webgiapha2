@extends('master')
@section('content')
    <header id="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3 text-center">
                    <h1>Xem sơ đồ gia phả</h1>
                    <p>Sơ đồ dạng Menu/ Sơ đồ dạng cây</p>
                </div>
            </div>
        </div>
    </header>
    <section>
        <div class="container py-5">
            <div class="row">
                <div class="col-12">
                    <ul class="nav nav-pills nav-justified" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#home" role="tab" aria-controls="home">Sơ
                                đồ dạng Menu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#profile" role="tab" aria-controls="profile">Sơ
                                đồ dạng cây</a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </section>
    <div class="tab-content">
        <div class="tab-pane active" id="home" role="tabpanel">
            <div class="container-fluid">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="multi-level card">
                                {{inGiaPhaDangMenu($data, null)}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="tab-pane" id="profile" role="tabpanel">
            <div class="container-fluid">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 card" style="overflow: scroll">
                            <div class="tree">
                                {{inGiaPha($data, null)}}
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="hopThongTin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Thông tin cơ bản</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p id="hoten"></p>
                        <p id="ngaysinh"></p>
                        <p id="gioitinh"></p>
                        <p id="doithu"></p>
                        <p id="conthu"></p>
                        <p id="quequan"></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                        <a type="button" href="/ho-so/1" id="nutXemChiTiet" class="btn btn-primary">Xem chi tiết</a>
                    </div>
                </div>
            </div>
        </div>
@endsection
<script src="{{asset('js/jquery-3.2.1.js')}}"></script>
<script>
    var base_url = window.location.origin;
    $(document).ready(function () {
        $(".hop-chua").hover(function (event) {
            event.preventDefault();
            var id = $(this).data('id');
            $.get("/chi-tiet/" + id, function (data, status) {
                $("#hoten").html(
                    "<b>Họ tên:</b>" + data.hoten);
                $("#ngaysinh").html("<b>Ngày sinh: </b>" + data.ngaysinh);
                $("#gioitinh").html("<b>Giới tính: </b>" + data.gioitinh);
                $("#doithu").html("<b>Đời thứ: </b>" + data.doithu);
                $("#conthu").html("<b>Con thứ: </b>" + data.conthu);
                $("#quequan").html("<b>Quê quán: </b>" + data.quequan);
                $("#nutXemChiTiet").attr("href", base_url+"/ho-so/"+data.mahoso);
            });
        }, null);
    });
</script>
