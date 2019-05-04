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
                    <div class="col-md-3">
                        @include('inc.socialmedia')
                    </div>
                    <div class="col-md-7">
                        <div class="wp_images"></div>
                        <img src={{ asset('images/img-0.jpg') }} class="hidden wpsmall_img">  
                        <div id="wp_text">
                            <h3>Welcome</h3>
                            <p>My name is Adam Gyarmati and this is my portfolio website.</p>
                            <p>Here you will find all the important information about me.
                                You can  have a look on my works by simply going to the 
                                My projects page. If you want to know more about me, you will also find it here.
                                May you cantact me?...Then find my mobile number or email adresse just on the left side.
                                Of course as a Web-deeloper i have got my Github, Stack-Overflow and Linkedin accounts,
                                where you will find additional infos.</p>
                            <div>
                                <button class="btn wp_toggle" type="button" data-toggle="collapse" data-target="#collapsable_start" aria-expanded="false" aria-controls="collapseExample">
                                        When did i become a Web-developer?<br><i class="fa fa-angle-down" aria-hidden="true"></i></button>
                            </div>
                            <div class="wp_collapse collapse" id="collapsable_start">
                                <div>something</div>
                            </div> 
                            <p>I would like to become a useful member of an amazing developer team.</p>
                            <div>
                                <button class="btn wp_toggle" type="button" data-toggle="collapse" data-target="#collapsable_why" aria-expanded="false" aria-controls="collapseExample">
                                        Why do i want?<br><i class="fa fa-angle-down" aria-hidden="true"></i></button>
                            </div>
                            <div class="wp_collapse collapse" id="collapsable_why">
                                <div>something</div>
                            </div>
                            <p>I would like to become a useful member of an amazing developer team.</p>
                            <div>
                                <button class="btn wp_toggle" type="button" data-toggle="collapse" data-target="#collapsable_what" aria-expanded="false" aria-controls="collapseExample">
                                        What i would like?<br><i class="fa fa-angle-down" aria-hidden="true"></i></button>
                            </div>
                            <div class="wp_collapse collapse" id="collapsable_what">
                                <div>something</div>
                            </div>
                            <p>I would like to become a useful member of an amazing developer team.</p>
                        </div>
                    </div>
                    <div class="col-md-2">                    
                        <div class="logbtn mb-xl-5 float-right d-none d-lg-block">
                            <a class="btn btn-primary btn-sm" href="/mylara/public/login" role="button">Login</a>
                            <a class="btn btn-success btn-sm" href="/mylara/public/register" role="button">Register</a>
                        </div>
                            
                    </div>
                </div>
            </div>
        </body>
    @endsection