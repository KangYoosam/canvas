@extends('backend.layout')

@section('title')
    <title>Canvas | Page not found</title>
@stop

@section('login')
    <section id="main">
        <section id="content">
            <div class="col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-12">
                <div class="card">
                    <br>
                    <div class="card-header" style="text-align: center">
                        <img src="{{ asset('images/favicon.png') }}" style="width: 85px">
                    </div>

                    <div class="card-body card-padding" id="login-ch">
                        <p class="f-20 f-300 text-center">404 - Page Not Found</p>
                        <p class="text-muted text-center">Sorry, but nothing exists here.</p>
                    </div>
                </div>
                <p class="text-center"><a href="/"><i class="zmdi zmdi-long-arrow-return"></i> Back to the blog</a></p>
            </div>
        </section>
    </section>
@stop

