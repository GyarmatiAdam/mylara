@extends('layouts.app')
    @section('content')
        <div class="container">
                <div class="row">
                        <div class="col-md-4">
                                @include('inc.socialmedia')
                        </div>
                        <div class="col-md-7">
                                <h1>About <small>me</small></h1>
                                <img src={{ asset('images/aboutme.jpg') }} class="about_img img-fluid" alt="Responsive image">
                                <div class="about_text text-justify">                       
                                        <h5>Hi, my name is Adam.</h5>
                                        <p>I was born and raised in the beautiful Hungary. I spent my childhood
                                                in a really small village, where people know each other. 
                                                Since I could walk, I have been playing football, handball, basketball, 
                                                actually all kinds of teamsport. Until today, I do all physical excercises 
                                                with enthusiasm and fun. I also enjoy watching movies and reading.</p>
                                        <p>In my hometown, my kindergarden and primary school were both in the neighborhood, 
                                                just about walking distance. Maybe this is the real reason, 
                                                 I left my country after Uni.</p>
                                        <p>I always dreamed of living in a big city, which has a bubbly day and nightlife. 
                                                My friends lived in London at that time, so the decision was 
                                                quite easy. We moved there with my girlfriend - who, by the way became 
                                                my wife - and we spent an amazing five years in the capital of the UK. 
                                                Due to the great distance from our family and friends, whom we missed so much, 
                                                we made a commitment
                                                to move closer to Hungary. From that very moment, Vienna was the 
                                                perfect place.</p>
                                        <p>It's been two years now, that we have settled here, and I have to say: we love it! 
                                                We managed to make new friends and could also find acquaintances from the old 
                                                times. As an extra benefit, our families are just a couple of hours away.
                                                In this phase of my life, I am looking for new connections, am eager to build a new 
                                                carrere and above all, I live a beautiful life here.</p>
                                        
                                </div>
                        </div>
                        <div class="col-md-1">
                             
                        </div>
                </div>
        </div>
    @endsection