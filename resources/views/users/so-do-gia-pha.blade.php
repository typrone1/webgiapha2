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
                            <a class="nav-link active" data-toggle="tab" href="#home" role="tab" aria-controls="home">Sơ đồ dạng Menu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#profile" role="tab" aria-controls="profile">Sơ đồ dạng cây</a>
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
                        <div class="col-12 card"  style="overflow: scroll">
                            <div class="tree">
                                {{inGiaPha($data, null)}}
                            </div>

                        </div>
                    </div>
                </div>


            </div>

        </div>

@endsection





