@extends('layouts.app')<!--this calls the template from layouts.app
    ||(view folder)so only the content has to be changed-->
    @section('headsection')
        <head>
            <!--<h1>{{$title}}</h1>$title take place in PagesController it is good for an often used content-->
        </head>
    @endsection
    @section('bodysection')
        <body>
            <!--loading screen-->
            <div id="load_screen">
                <div class="lds-ring"><div></div><div></div><div></div><div></div></div>
                <div>Loading...</div>
            </div>
            
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-3">
                        @include('inc.socialmedia')
                    </div>
                    <div class="col-md-7 col-sm-7">
                        <div class="wp_images">
                            <i class="wp_btn btn_prev fa fa-angle-left" aria-hidden="true"></i>
                            <i class="wp_btn btn_next fa fa-angle-right" aria-hidden="true"></i>
                        </div>
                        <img src={{ asset('images/img-0.jpg') }} class="hidden wpsmall_img img-fluid" alt="Responsive image">
                    </div>
                    <div class="col-md-2 col-sm-2">                    
                        <div class="logbtn mb-xl-5 float-right d-none d-lg-block">
                            <a class="btn btn-primary btn-sm" href="/mylara/public/login" role="button">Login</a>
                            <a class="btn btn-success btn-sm" href="/mylara/public/register" role="button">Register</a>
                        </div>
                            
                    </div>
                </div>
            </div>
        </body>
    @endsection