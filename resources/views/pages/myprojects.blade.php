@extends('layouts.app')
    @section('content')
        <body>
                <div class="container">
                        <div class="row">
                                <div class="col-md-4">
                                        @include('inc.socialmedia')
                                </div>
                                <div class="col-md-6">
                                        <h1>My <small>Projects</small></h1>
                                        <div class="project_embed">
                                                <a target="_blank" href="http://adam.ezyro.com/">
                                                <img src={{ asset('images/Github_finder.jpg') }} class="projectimg img-fluid" alt="Responsive image">
                                                <div class="project_description">
                                                        <div class="project_text">  
                                                                <h2>Github finder</h2>
                                                                <p>AJAX, CSS</p>
                                                        </div>
                                                </div>
                                                </a>
                                        </div>
                                        <div class="project_embed">
                                                <a target="_blank" href="http://calculate.ezyro.com/">
                                                <img src={{ asset('images/calculator.jpg') }} class="projectimg img-fluid" alt="Responsive image">
                                                <div class="project_description">
                                                        <div class="project_text">  
                                                                <h2>Calculator</h2>
                                                                <p>HTML, CSS, Javascript</p>
                                                        </div>
                                                </div>
                                                </a>
                                        </div>
                                        <div class="project_embed">
                                                <a target="_blank" href="">
                                                <img src={{ asset('images/man.jpg') }} class="projectimg img-fluid" alt="Responsive image">
                                                <div class="project_description">
                                                        <div class="project_text">  
                                                                <h2>The Man</h2>
                                                                <p>HTML, CSS, Javascript</p>
                                                        </div>
                                                </div>
                                                </a>
                                        </div>
                                        <div class="project_embed">
                                                <a target="_blank" href="http://clock.ezyro.com/">
                                                <img src={{ asset('images/clock.jpg') }} class="projectimg img-fluid" alt="Responsive image">
                                                <div class="project_description">
                                                        <div class="project_text">  
                                                                <h2>Clock</h2>
                                                                <p>HTML, CSS, Javascript</p>
                                                        </div>
                                                </div>
                                                </a>
                                        </div>
                                        <div class="project_embed">
                                                <a target="_blank" href="">
                                                <img src={{ asset('images/message.jpg') }} class="projectimg img-fluid" alt="Responsive image">
                                                <div class="project_description">
                                                        <div class="project_text">  
                                                                <h2>Message</h2>
                                                                <p>HTML, CSS, Javascript</p>
                                                        </div>
                                                </div>
                                                </a>
                                        </div>
                                        <div class="project_embed">
                                                <a target="_blank" href="">
                                                <img src={{ asset('images/counter.jpg') }} class="projectimg img-fluid" alt="Responsive image">
                                                <div class="project_description">
                                                        <div class="project_text">  
                                                                <h2>Counter</h2>
                                                                <p>HTML, CSS, Javascript</p>
                                                        </div>
                                                </div>
                                                </a>
                                        </div>
                                        <div class="project_embed">
                                                <a target="_blank" href="">
                                                <img src={{ asset('images/navbar.jpg') }} class="projectimg img-fluid" alt="Responsive image">
                                                <div class="project_description">
                                                        <div class="project_text">  
                                                                <h2>Navbar</h2>
                                                                <p>HTML, CSS, Javascript</p>
                                                        </div>
                                                </div>
                                                </a>
                                        </div>
                                        <div class="project_embed">
                                                <a target="_blank" href="">
                                                <img src={{ asset('images/quotes.jpg') }} class="projectimg img-fluid" alt="Responsive image">
                                                <div class="project_description">
                                                        <div class="project_text">  
                                                                <h2>Quotes</h2>
                                                                <p>HTML, CSS, Javascript</p>
                                                        </div>
                                                </div>
                                                </a>
                                        </div>
                                        <div class="project_embed">
                                                <a target="_blank" href="">
                                                <img src={{ asset('images/slider.jpg') }} class="projectimg img-fluid" alt="Responsive image">
                                                <div class="project_description">
                                                        <div class="project_text">  
                                                                <h2>Image slider</h2>
                                                                <p>HTML, CSS, Javascript</p>
                                                        </div>
                                                </div>
                                                </a>
                                        </div>
                                        <div class="project_embed">
                                                <a target="_blank" href="http://colors.ezyro.com/">
                                                <img src={{ asset('images/colors.jpg') }} class="projectimg img-fluid" alt="Responsive image">
                                                <div class="project_description">
                                                        <div class="project_text">  
                                                                <h2>Change colors</h2>
                                                                <p>HTML, CSS, Javascript</p>
                                                        </div>
                                                </div>
                                                </a>
                                        </div>
                                        <div class="project_embed">
                                                <a target="_blank" href="http://footballstore.unaux.com/">
                                                <img src={{ asset('images/footballshop.jpg') }} class="projectimg img-fluid" alt="Responsive image">
                                                <div class="project_description">
                                                        <div class="project_text">  
                                                                <h2>Football-Shop</h2>
                                                                <p>Wordpress, CSS, Javascript, PHP</p>
                                                        </div>
                                                </div>
                                                </a>
                                        </div>
                                        <div class="project_embed">
                                                <a target="_blank" href="http://adamgyarmati.unaux.com">
                                                <img src={{ asset('images/portfolio.jpg') }} class="projectimg img-fluid" alt="Responsive image">   
                                                <div class="project_description">
                                                        <div class="project_text">
                                                                <h2>Portfolio</h2>
                                                                <p>Wordpress, CSS, Javascript, PHP</p>
                                                        </div>
                                                </div>
                                                </a>
                                        </div>
                                </div>
                                <div class="col-md-2">
                                        
                                </div>
                        </div>
                </div>
        </body>
    @endsection