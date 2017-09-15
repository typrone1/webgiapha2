@extends('master')
@section('content')
    <section id="actions" class="py-4 mb-4 bg-faded">
        <div class="container">
            <div class="row">
                <div class="col-md-3 mr-auto">
                    <a href="index.html" class="btn btn-secondary btn-block"><i class="fa fa-arrow-left"></i> Back To Dashboard</a>
                </div>

                <div class="col-md-3">
                    <button href="index.html" class="btn btn-success btn-block" type="submit" form="baiviet"><i class="fa fa-check"></i> Save Changes</button>
                </div>
                <div class="col-md-3">
                    <a href="index.html" class="btn btn-danger btn-block"><i class="fa fa-remove"></i> Delete Post</a>
                </div>
            </div>
        </div>
    </section>

    <!-- POST EDIT -->
    <section id="edit-post">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h4>Edit Post</h4>
                        </div>
                        <div class="card-block">
                            <form action="{{route('cap-nhat-bai-viet',$baiViet->mabaiviet)}}" method="post" id="baiviet">
                                <input type="hidden" name="_token" value="{{ csrf_token()}}"/>
                                <div class="form-group">
                                    <label for="title" class="form-control-label">Title</label>
                                    <input type="text" class="form-control" name="tieude" value="{{$baiViet->tieude}}">
                                </div>
                                <div class="form-group">
                                    <label for="category" class="form-control-label">Category</label>
                                    <select class="form-control" name="madanhmuc">
                                    @foreach($dsDanhMuc as $danhMuc)
                                        <option value="{{$danhMuc->madanhmuc}}" @if($danhMuc->madanhmuc == $baiViet->madanhmuc) selected @endif>{{$danhMuc->tendanhmuc }}</option>
                                    @endforeach
                                    </select>
                                </div>
                                <div class="form-group bg-faded p-3">
                                    <label for="file">Image Upload</label>
                                    <input type="file" class="form-control-file" id="file">
                                    <small id="fileHelp" class="form-text text-muted">
                                        Max Size 3MB
                                    </small>
                                </div>
                                <div class="form-group">
                                    <label for="body">Body</label>
                                    <textarea name="editor1" class="form-control">{{$baiViet->noidung}}</textarea>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection