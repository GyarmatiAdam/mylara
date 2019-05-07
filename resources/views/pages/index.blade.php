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
                    <div class="col-md-8">
                        <div class="wp_images"></div>
                        <img src={{ asset('images/img-0.jpg') }} class="hidden wpsmall_img">  
                        <div id="wp_text">
                            <h3>Welcome</h3>
                            <p>My name is Adam Gyarmati and this is my portfolio website.</p>
                            <p>You will find here all the important information about me and my work.
                                To explore more of my projects, you can visit my GitHub account or simply go to the My projects 
                                page and take a look on them.</p>
                                <p>May you cantact me?...Then find my mobile number and email adresse just on the left side. 
                                Feel free to use them, especially if you are hiring Entry-level junior web developers.
                                Of course as a jobseeker i have got also my Stack-Overflow and Linkedin accounts,
                                where you will find additional infos.</p>
                        </div>
                            <div class="row">
                                <div id="linkedin_API">
                                </div>
                            </div>  
                            <div class="container">
                                <div>
                                    <button class="btn wp_toggle" type="button" data-toggle="collapse" data-target="#collapsable_when" aria-expanded="false" aria-controls="collapseExample">
                                            When?            <i class="fa fa-angle-down" aria-hidden="true"></i></button>
                                </div>
                                <div class="wp_collapse collapse" id="collapsable_when">
                                    <div>On the autumn of 2018 wright after my knee surgery, i was laying in the bed 
                                        and i questioned myself: What do i really want to do for living?
                                    </div>
                                </div>                        
                                <div>
                                    <button class="btn wp_toggle" type="button" data-toggle="collapse" data-target="#collapsable_why" aria-expanded="false" aria-controls="collapseExample">
                                            Why?            <i class="fa fa-angle-down" aria-hidden="true"></i></button>
                                </div>
                                <div class="wp_collapse collapse" id="collapsable_why">
                                    <div>By the time i had no idea, but i have felt i have to change career direction. 
                                        I was reading a lot, looking for my goal. Suddenly i bumped into an advertistment 
                                        and the description really liked me. It was about web development.
                                    </div>
                                </div>
                                <div>
                                    <button class="btn wp_toggle" type="button" data-toggle="collapse" data-target="#collapsable_how" aria-expanded="false" aria-controls="collapseExample">
                                            How?            <i class="fa fa-angle-down" aria-hidden="true"></i></button>
                                </div>
                                <div class="wp_collapse collapse" id="collapsable_how">
                                    <div>I started a research, what they do and how to become one of them. There are planty of 
                                        blogs and videos on the net. I found it very interesting, so i took couple of free courses.
                                        Afterwards i have decided to focus 100% on my studies. I went for an intensive course, where 
                                        i have learned the basics of Front and Back-end web development.
                                    </div>
                                </div>
                                <div>
                                    <button class="btn wp_toggle" type="button" data-toggle="collapse" data-target="#collapsable_what" aria-expanded="false" aria-controls="collapseExample">
                                            What?            <i class="fa fa-angle-down" aria-hidden="true"></i></button>
                                </div>
                                <div class="wp_collapse collapse" id="collapsable_what">
                                    <div>My goal is to become a professional web developer. As i am programming 
                                        every day and trying new tools and applications, 
                                        i feel myself ready to take an entry-level position. I am looking for 
                                        opportunities in a company, were i can be a part of a fizzy and 
                                        professional team and also have a chance to progress myself.
                                    </div>
                                </div>
                            </div>
                                <div id="wp_text_end">
                                    <p>Please take your time, check every page, register, write for my bolg, but most importantly... have fun!</p>
                                </div>                                        
                    </div>
                    <div class="col-md-1">                    
                        <div class="logbtn mb-xl-5 float-right d-none d-lg-block">
                            <a class="btn btn-primary btn-sm" href="/mylara/public/login" role="button">Login</a>
                            <a class="btn btn-success btn-sm" href="/mylara/public/register" role="button">Register</a>
                        </div>
                            
                    </div>
                </div>
            </div>
        </body>
    @endsection