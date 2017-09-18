@extends('master')
@section('content')
    <header id="main-header" class="py-2 bg-primary text-white">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1><i class="fa fa-gear"></i>Quản lý ngày việc tộc</h1>
                </div>
            </div>
        </div>
    </header>

    <!-- ACTIONS -->
    <section id="actions" class="py-4 mb-4 bg-faded">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="btn btn-primary btn-block" data-toggle="modal" data-target="#addPostModal"><i class="fa fa-plus"></i>Thêm việc tộc</a>
                </div>
                <div class="col-md-3">
                    <a href="#" class="btn btn-success btn-block" data-toggle="modal" data-target="#addCategoryModal"><i class="fa fa-plus"></i>Thêm danh mục</a>
                </div>
                <div class="col-md-3">
                    <a href="#" class="btn btn-warning btn-block" data-toggle="modal" data-target="#themBaiVietModal"><i class="fa fa-plus"></i>Thêm bài viết</a>
                </div>
            </div>
        </div>
    </section>


    <!-- Nav tabs -->


    <!-- POSTS -->
    <section id="posts">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item w-50">
                            <a class="nav-link active" data-toggle="tab" href="#home" role="tab">Việc tộc</a>
                        </li>
                        <li class="nav-item w-50">
                            <a class="nav-link" data-toggle="tab" href="#profile" role="tab">Bài viết</a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="home" role="tabpanel">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Danh sách việc tộc</h4>
                                </div>
                                <table class="table table-striped">
                                    <thead class="thead-inverse">
                                    <tr>
                                        <th>#</th>
                                        <th>Ngày diễn ra</th>
                                        <th>Tiêu đề</th>
                                        <th>Nội dung</th>
                                        <th>Ngày đưa tin</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $count = 0 ?>
                                    @foreach($dsViecToc as $viecToc)
                                        <?php $count++ ?>
                                        <tr>
                                            <td scope="row">{{$count}}</td>
                                            <td>{{$viecToc->ngaydienra }}</td>
                                            <td>{{$viecToc->tensukien}}</td>
                                            <td>{{$viecToc->noidung}}</td>
                                            <td>{{$viecToc->created_at}}</td>
                                            <td><a class="btn btn-danger" href="{{route('xoa-viec-toc',$viecToc->maviectoc)}}">Xóa</a></td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                <nav class="ml-4">
                                    <ul class="pagination">
                                        <li class="page-item disabled"><a href="#" class="page-link">Previous</a></li>
                                        <li class="page-item active"><a href="#" class="page-link">1</a></li>
                                        <li class="page-item"><a href="#" class="page-link">2</a></li>
                                        <li class="page-item"><a href="#" class="page-link">3</a></li>
                                        <li class="page-item"><a href="#" class="page-link">Next</a></li>
                                    </ul>
                                </nav>

                            </div>
                        </div>
                        <div class="tab-pane" id="profile" role="tabpanel">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Danh sách bài viết</h4>
                                </div>
                                <table class="table table-striped">
                                    <thead class="thead-inverse">
                                    <tr>
                                        <th>#</th>
                                        <th>Hình ảnh</th>
                                        <th>Danh mục</th>
                                        <th>Tiêu đề</th>
                                        <th>Người viết</th>
                                        <th>Ngày viết</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $count = 0 ?>
                                    @foreach($dsBaiViet as $baiViet)
                                        <?php $count++ ?>
                                        <tr>
                                            <td scope="row">{{$count}}</td>
                                            @if(isset($baiViet->hinhanh))
                                                <td><img class="img-thumbnail" width="100px" src="{{asset('img/anhbaiviet').'/'.$baiViet->hinhanh}}"></td>
                                            @else
                                                <td><img class="img-thumbnail" width="100px" src="{{asset('img/thongbao.jpg')}}"></td>
                                            @endif

                                            <td>{{$baiViet->madanhmuc}}</td>
                                            <td>{{$baiViet->tieude}}</td>
                                            <td>Admin</td>
                                            <td>{{$baiViet->created_at}}</td>
                                            <td><a class="btn btn-secondary" href="{{route('chinh-sua-bai-viet', $baiViet->mabaiviet)}}"><i class="fa fa-angle-double-right"></i>Chi tiết</a>
                                                <a class="btn btn-danger" href="{{route('xoa-bai-viet',$baiViet->mabaiviet)}}">Xóa</a></td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                <nav class="ml-4">
                                    <ul class="pagination">
                                        <li class="page-item disabled"><a href="#" class="page-link">Previous</a></li>
                                        <li class="page-item active"><a href="#" class="page-link">1</a></li>
                                        <li class="page-item"><a href="#" class="page-link">2</a></li>
                                        <li class="page-item"><a href="#" class="page-link">3</a></li>
                                        <li class="page-item"><a href="#" class="page-link">Next</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-3">
                    <div class="card text-center card-primary text-white mb-3">
                        <div class="card-block">
                            <h3>Việc</h3>
                            <h1 class="display-4"><i class="fa fa-pencil"></i> {{$dsViecToc->count()}}</h1>
                            <a href="posts.html" class="btn btn-sm btn-outline-secondary text-white">Việc</a>
                        </div>
                    </div>

                    <div class="card text-center card-success text-white mb-3">
                        <div class="card-block">
                            <h3>Danh mục</h3>
                            <h1 class="display-4"><i class="fa fa-folder-open-o"></i> {{$dsDanhMuc->count()}}</h1>
                            <a href="categories.html" class="btn btn-sm btn-outline-secondary text-white">Danh mục</a>
                        </div>
                    </div>

                    <div class="card text-center card-success text-white mb-3">
                        <div class="card-block">
                            <h3>Bài viết</h3>
                            <h1 class="display-4"><i class="fa fa-youtube-play"></i> {{$dsBaiViet->count()}}</h1>
                            <a href="categories.html" class="btn btn-sm btn-outline-secondary text-white">Bài viết</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ADD POST MODAL -->
    <div class="modal fade" id="addPostModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="addPostModalLabel">Thêm sự kiện</h5>
                    <button class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{route('them-viec-toc')}}" method="post" id="thong-tin">
                        <input type="hidden" name="_token" value="{{ csrf_token()}}"/>
                        <div class="form-group">
                            <label for="title" class="form-control-label">Tên sự kiện</label>
                            <input type="text" class="form-control" name="tensukien">
                        </div>
                        <div class="form-group">
                            <label for="title" class="form-control-label">Ngày diễn ra</label>
                            <input type="date" class="form-control" name="ngaydienra">
                        </div>
                        <div class="form-group">
                            <label for="body">Nội dung bài</label>
                            <textarea name="editor1" class="form-control"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                    <button class="btn btn-primary" type="submit" form="thong-tin" value="Submit">Tạo</button>
                </div>
            </div>
        </div>
    </div>



    <!-- ADD BAI VIET MODAL -->
    <div class="modal fade" id="themBaiVietModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="addPostModalLabel">Thêm bài viết</h5>
                    <button class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{route('them-bai-viet')}}" method="post" id="bai-viet" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token()}}"/>
                        <div class="form-group">
                            <label for="title" class="form-control-label">Tiêu đề bài viết</label>
                            <input type="text" class="form-control" name="tieude">
                        </div>
                        <div class="form-group">
                        <label for="category" class="form-control-label">Danh mục</label>
                        <select class="form-control" name="madanhmuc">
                            @foreach($dsDanhMuc as $danhMuc)
                                <option value="{{$danhMuc->madanhmuc}}">{{ $danhMuc->tendanhmuc }}</option>
                            @endforeach

                        </select>
                        </div>
                        <div class="form-group bg-faded p-3">
                            <label for="hinhanh">Image Upload</label>
                            <input type="file" name="hinhanh" class="form-control-file" id="hinhanh">
                            <small id="fileHelp" class="form-text text-muted">
                                Max Size 3MB
                            </small>
                        </div>
                        <div class="form-group">
                            <label for="body">Nội dung bài</label>
                            <textarea name="editor1" class="form-control"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                    <button class="btn btn-primary" type="submit" form="bai-viet" value="Submit">Tạo</button>
                </div>
            </div>
        </div>
    </div>

    <!-- ADD CATEGORY MODAL -->
    <div class="modal fade" id="addCategoryModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-success text-white">
                    <h5 class="modal-title" id="addCategoryModalLabel">Thêm danh mục</h5>
                    <button class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{route('them-danh-muc')}}" method="post" id="danh-muc">
                        <div class="form-group">
                            <input type="hidden" name="_token" value="{{ csrf_token()}}"/>
                            <label for="title" class="form-control-label">Tên danh mục</label>
                            <input type="text" name="tendanhmuc" class="form-control">

                            <label for="title" class="form-control-label">Mô tả</label>
                            <input type="text" name="mota" class="form-control">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button class="btn btn-success" type="submit" form="danh-muc" value="Submit">Thêm</button>
                </div>
            </div>
        </div>
    </div>

@endsection
