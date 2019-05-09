@extends('layouts.app')<!--this calls the template from layouts.app
    ||(view folder)so only the content has to be changed-->
    @section('headsection')
        <head>
            <img src={{ asset('images/img-0.jpg') }} title="Portfolio" sizes="16x16">  
            <!--<h1>{{$title}}</h1>$title take place in PagesController it is good for an often used content-->
        </head>
    @endsection
    @section('bodysection')
        <div id="body">
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
                        <div id="wp_images"></div>
                        <img src={{ asset('images/img-0.jpg') }} class="hidden wpsmall_img">  
                        <div id="wp_text">
                            <h3>Welcome</h3>
                            <p>My name is Adam Gyarmati and this is my portfolio website.</p>
                            <p>You will find here all the important information about me and my work.
                                To find out more about my projects, you can visit my GitHub account or simply go to the My projects 
                                page and take a look on them.</p>
                                <p>Should you cantact me?...Then find my mobile number and email adresse just on the left side. 
                                Feel free to get in touch with me, especially if you are hiring Entry-level junior web developers.
                                Of course as a jobseeker, I also have Stack-Overflow and Linkedin accounts,
                                where you may find additional information.</p>
                        </div>
                            <div class="row">
                                <div id="linkedin_API">
                                    <!--linledin api-->
                                </div>
                            </div>  
                            <div class="container">
                                <div>
                                    <button class="btn wp_toggle" type="button" data-toggle="collapse" data-target="#collapsable_when" aria-expanded="false" aria-controls="collapseExample">
                                            When?            <i class="fa fa-angle-down" aria-hidden="true"></i></button>
                                </div>
                                <div class="wp_collapse collapse" id="collapsable_when">
                                    <div>In the autumn of 2018, right after my knee surgery, I was laying in bed 
                                        and asked myself: What do I really want to do for a living?
                                    </div>
                                </div>                        
                                <div>
                                    <button class="btn wp_toggle" type="button" data-toggle="collapse" data-target="#collapsable_why" aria-expanded="false" aria-controls="collapseExample">
                                            Why?            <i class="fa fa-angle-down" aria-hidden="true"></i></button>
                                </div>
                                <div class="wp_collapse collapse" id="collapsable_why">
                                    <div>Back then, I was unsure about my future, but I felt I had to change my career direction. 
                                        I was reading a lot, looking for my path. Suddenly I came across an advertistment 
                                        and the description really appealed to me. It was about web development.
                                    </div>
                                </div>
                                <div>
                                    <button class="btn wp_toggle" type="button" data-toggle="collapse" data-target="#collapsable_how" aria-expanded="false" aria-controls="collapseExample">
                                            How?            <i class="fa fa-angle-down" aria-hidden="true"></i></button>
                                </div>
                                <div class="wp_collapse collapse" id="collapsable_how">
                                    <div>I started a research: what do they do and how to become one of them. There are planty of 
                                        blogs and videos on the net. This new world that I had just discovered, really fascinated me, so I enrolled to a couple of free courses.
                                        Afterwards, I decided to focus 100% on my studies, therefore I applied for an intensive course, where 
                                        I learned the basics of Front and Back-end web development.
                                    </div>
                                </div>
                                <div>
                                    <button class="btn wp_toggle" type="button" data-toggle="collapse" data-target="#collapsable_what" aria-expanded="false" aria-controls="collapseExample">
                                            What?            <i class="fa fa-angle-down" aria-hidden="true"></i></button>
                                </div>
                                <div class="wp_collapse collapse" id="collapsable_what">
                                    <div>My ultimate goal is to become a professional web developer. As I do programming 
                                        every day and I have been trying out new tools and applications, 
                                        I feel that I'm ready to take an entry-level position. I am eager to join a 
                                     company, were I could be part of a bubbly and 
                                        professional team, and where I would have the chance to further educate myself.
                                    </div>
                                </div>
                            </div>
                                <div id="wp_text_end">
                                    <p>If you have any concerns, please do not hesitate to contact me.</p>
                                </div>                                        
                    </div>
                    <div class="col-md-1">                    
                        <div class="logbtn mb-xl-5 float-right d-none d-lg-block">
                            <a class="btn btn-primary btn-sm" href="/login" role="button">Login</a>
                            <a class="btn btn-success btn-sm" href="/register" role="button">Register</a>
                        </div>
                            
                    </div>
                </div>
            </div>
        </div>
    @endsection