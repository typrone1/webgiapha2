@extends('master')
@section('content')
    <div class="tree">
        <ul>
            <li><a class="hop-chua" data-toggle="modal" data-target="#hopThongTin" data-id="1">1–Nguyễn Văn Nhất (asd)</a>
            </li>
        </ul>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="hopThongTin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p id="hoten"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
@endsection
<script src="{{asset('js/jquery-3.2.1.js')}}"></script>
<script>
    $(document).ready(function () {
        $(".hop-chua").click(function (event) {
            event.preventDefault();
            var id = $(this).data('id');
            $.get("/chi-tiet/" + id, function (data, status) {
                $("#hoten").html(
                    "<b>Họ tên:</b>: " + data.hoten)
            });
        },null);
    });
</script>