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
                    <div class="col-md-4 col-sm-4">
                        @include('inc.socialmedia')
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="wp_images">
                            <div class="wp_start"></div>
                            <i class="wp_btn btn_prev fa fa-angle-left" aria-hidden="true"></i>
                            <i class="wp_btn btn_next fa fa-angle-right" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">                    
                        <div class="logbtn mb-xl-5 float-right d-none d-lg-block">
                            <a class="btn btn-primary btn-sm" href="/mylara/public/login" role="button">Login</a>
                            <a class="btn btn-success btn-sm" href="/mylara/public/register" role="button">Register</a>
                        </div>
                            
                    </div>
                </div>
            </div>
        </body>
    @endsection