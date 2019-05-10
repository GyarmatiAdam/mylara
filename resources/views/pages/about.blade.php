@extends('layouts.app')<!--this calls the template from layouts.app
    ||(view folder)so only the content has to be changed-->
    @section('content')<!--starts a section where this below content 
        ||will be inserted-->

        <div class="container">
                <div class="row">
                        <div class="col-md-4">
                                @include('inc.socialmedia')
                        </div>
                        <div class="col-md-7">
                                <h1>About <small>me</small></h1>
                                <img src={{ asset('images/aboutme.jpg') }} class="about_img img-fluid" alt="Responsive image">
                                <div class="about_text text-justify">                       
                                        <h5>Hi, my name is Adam</h5>
                                        <p>I was born and raised in the beautiful Hungary. I spent my childhood
                                                in a really small village, where all the people know each other. 
                                                Since i stood up, i am playing football, handball, basketball, 
                                                actually all kind of teamsport. Until today, i make all excerises 
                                                with enthusiasm and fun. I also love watching movies and reading.</p>
                                        <p>My kindergarden and primary school where in the neighborhood, 
                                                just about a walking distance. Maybe that is the real reason, 
                                                why i left my country after Uni.</p>
                                        <p>I always wanted to live in a big city, with a bubbly day and nightlife. 
                                                My friends where living in London by that time, so the decision was 
                                                quiet easy. We moved there with my girlfriend - who by the way became 
                                                my wife - and spent an amazing five years. Because we were far away 
                                                from home, of course we missed our family so much, that we made a commitment 
                                                to move closer to Hungary. From the point of that, Vienna was the 
                                                perfect place.</p>
                                        <p>Two years now since we are settled here, and i have to say: we love it! 
                                                We have new and old friends here, and we can see our family whenever 
                                                we want. Therefor i am looking for new connections, building a new 
                                                carrere and living a beautiful life here.</p>
                                        
                                </div>
                        </div>
                        <div class="col-md-1">
                                
                        </div>
                </div>
        </div>

    @endsection