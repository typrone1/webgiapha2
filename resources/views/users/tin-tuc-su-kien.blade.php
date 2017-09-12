@extends('master')
@section('content')
    <header id="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3 text-center">
                    <h1>Tin tức - Sự kiện</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia, ea.</p>
                </div>
            </div>
        </div>
    </header>
    <section id="actions" class="py-4 mb-4 bg-faded">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-6">
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                <button class="btn btn-warning">Tìm kiếm</button>
              </span>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="p-5">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-8">
                    <div class="row mb-2">
                        <div class="container p-3 bg-faded">
                            <h4>Blog Post One</h4>
                            <div class="row">
                                <div class="col-6">
                                    <div style="height: 260px; overflow: hidden">
                                        <img src="http://lorempixel.com/500/500/city/1" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <small class="text-muted">Written by Jeff on 07/10</small>
                                    <hr>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque nihil atque alias totam,
                                        nostrum vitae, voluptas libero veritatis illo nemo dignissimos dolore, dolorum in
                                        voluptatum perspiciatis molestiae perferendis cupiditate facere!
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="container p-3 bg-faded">
                            <h4>Blog Post One</h4>
                            <div class="row">
                                <div class="col-6">
                                    <div style="height: 260px; overflow: hidden">
                                        <img src="http://lorempixel.com/500/500/city/1" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <small class="text-muted">Written by Jeff on 07/10</small>
                                    <hr>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque nihil atque alias totam,
                                        nostrum vitae, voluptas libero veritatis illo nemo dignissimos dolore, dolorum in
                                        voluptatum perspiciatis molestiae perferendis cupiditate facere!
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="container p-3 bg-faded">
                            <h4>Blog Post One</h4>
                            <div class="row">
                                <div class="col-6">
                                    <div style="height: 260px; overflow: hidden">
                                        <img src="http://lorempixel.com/500/500/city/1" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <small class="text-muted">Written by Jeff on 07/10</small>
                                    <hr>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque nihil atque alias totam,
                                        nostrum vitae, voluptas libero veritatis illo nemo dignissimos dolore, dolorum in
                                        voluptatum perspiciatis molestiae perferendis cupiditate facere!
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1">Previous</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>


                </div>
                <div class="col-sm-12 col-md-4">
                    <ul class="list-group">
                        <li class="list-group-item justify-content-between">
                            Cras justo odio
                            <span class="badge badge-default badge-pill">14</span>
                        </li>
                        <li class="list-group-item justify-content-between">
                            Dapibus ac facilisis in
                            <span class="badge badge-default badge-pill">2</span>
                        </li>
                        <li class="list-group-item justify-content-between">
                            Morbi leo risus
                            <span class="badge badge-default badge-pill">1</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection