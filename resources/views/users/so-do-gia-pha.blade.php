@extends('master')
@section('content')
    <header id="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3 text-center">
                    <h1>About Us</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia, ea.</p>
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
                                {{--<div class="item">--}}
                                    {{--<input type="checkbox" id="A" checked/>--}}
                                    {{--<img src="img/Arrow.png" class="arrow"><label for="A">Services</label>--}}

                                    {{--<ul>--}}
                                        {{--<li><a href="#">Branding</a></li>--}}
                                        {{--<li><a href="#">Web/App Development</a></li>--}}
                                        {{--<li><a href="#">Internet Marketing and SEO</a></li>--}}
                                    {{--</ul>--}}
                                {{--</div>--}}
                                {{--<div class="item">--}}
                                    {{--<input type="checkbox" id="B" checked />--}}
                                    {{--<img src="img/Arrow.png" class="arrow"><label for="B">Jobs</label>--}}

                                    {{--<ul>--}}
                                        {{--<li>--}}
                                            {{--<div class="sub-item">--}}
                                                {{--<input type="checkbox" id="B-A" checked/>--}}
                                                {{--<img src="img/Arrow.png" class="arrow"><label for="B-A">UI/UX</label>--}}

                                                {{--<ul>--}}
                                                    {{--<li><a href="#">UI/UX Designer</a></li>--}}
                                                    {{--<li><a href="#">UI Designer</a></li>--}}
                                                    {{--<li><a href="#">UX Designer</a></li>--}}
                                                {{--</ul>--}}
                                            {{--</div>--}}
                                        {{--</li>--}}
                                        {{--<li>--}}
                                            {{--<div class="sub-item">--}}
                                                {{--<input type="checkbox" id="B-B" checked/>--}}
                                                {{--<img src="img/Arrow.png" class="arrow"><label for="B-B">Development</label>--}}

                                                {{--<ul>--}}
                                                    {{--<li><a href="#">Front end Developer</a></li>--}}
                                                    {{--<li><a href="#">Back end Developer</a></li>--}}
                                                {{--</ul>--}}

                                            {{--</div>--}}
                                        {{--</li>--}}
                                        {{--<li><a href="#">Graphic Designer</a></li>--}}
                                        {{--<li><a href="#">Logo Designer</a></li>--}}

                                    {{--</ul>--}}
                                {{--</div>--}}
                                {{--<div class="item">--}}
                                    {{--<input type="checkbox" id="C" checked/>--}}
                                    {{--<img src="img/Arrow.png" class="arrow"><label for="C">About Us</label>--}}

                                    {{--<ul>--}}
                                        {{--<li><a href="#">Our Team</a></li>--}}
                                        {{--<li><a href="#">Clients</a></li>--}}
                                        {{--<li><a href="#">Our Work</a></li>--}}
                                    {{--</ul>--}}
                                {{--</div>--}}
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





