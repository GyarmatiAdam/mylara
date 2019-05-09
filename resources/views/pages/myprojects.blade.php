@extends('layouts.app')

        @section('bodysection')
                <div class="container">
                        <div class="row">
                                <div class="col-md-4">
                                        @include('inc.socialmedia')
                                </div>
                                <div class="col-md-6">
                                        <h1>My <small>Projects</small></h1>
                                        <p>All of my projects are collected on this page.</p>
                                        <p>You can find out the name and the program leanguage by moving your mouse over the images.</p>
                                        <p>Clicking on them will drive you to the actual website, where you can see the source-code and try the functionality.</p>
                                        <p>For description click on  <button class="fa_plus btn btn-primary" type="button" data-toggle="collapse" aria-expanded="false"><i class="fa fa-plus" aria-hidden="true"></i></button>  button under each project.</p>
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
                                        <div id="toggledown">
                                                <p><button class="fa_plus btn btn-primary" type="button" data-toggle="collapse" data-target="#collapsable1" aria-expanded="false" aria-controls="collapseExample"><i class="fa fa-plus" aria-hidden="true"></i></button></p>
                                        </div>
                                        <div class="collapse" id="collapsable1">
                                                <div class="card card-body">Github finder is a small AJAX project, wich takes data from Github API. Your job is easy: just write a Github login name into the input box and if the account exists, the site drops couple of details about. By clciking on the red button, you can go and check out it's Github profile or clicking on the link, will drive you to it's website.</div>
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
                                        <div id="toggledown">
                                                <p><button class="fa_plus btn btn-primary" type="button" data-toggle="collapse" data-target="#collapsable2" aria-expanded="false" aria-controls="collapseExample"><i class="fa fa-plus" aria-hidden="true"></i></button></p>
                                        </div>
                                        <div class="collapse" id="collapsable2">
                                                <div class="card card-body">Calculator is a small Javascript project. You can use it to make basic math operations. With the red button, you can cacel the whole input field. If you try to make an uncountable operation, the site will throw out an alert box. </div>
                                        </div>        

                                        <div class="project_embed">
                                                <a target="_blank" href="http://theman.ezyro.com/">
                                                <img src={{ asset('images/man.jpg') }} class="projectimg img-fluid" alt="Responsive image">
                                                <div class="project_description">
                                                        <div class="project_text">  
                                                                <h2>The Man</h2>
                                                                <p>HTML, CSS, Javascript</p>
                                                        </div>
                                                </div>
                                                </a>
                                        </div>
                                        <div id="toggledown">
                                                <p><button class="fa_plus btn btn-primary" type="button" data-toggle="collapse" data-target="#collapsable3" aria-expanded="false" aria-controls="collapseExample"><i class="fa fa-plus" aria-hidden="true"></i></button></p>
                                        </div>
                                        <div class="collapse" id="collapsable3">
                                                <div class="card card-body">The Man is a small ''animation'' made with Javascript and CSS-keyfreams. You can move the mouse over his head and body. Also by clicking on his under part and left arm will make him move. In a mean time you will see, what is on his mind.</div>
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
                                        <div id="toggledown">
                                                <p><button class="fa_plus btn btn-primary" type="button" data-toggle="collapse" data-target="#collapsable4" aria-expanded="false" aria-controls="collapseExample"><i class="fa fa-plus" aria-hidden="true"></i></button></p>
                                        </div>
                                        <div class="collapse" id="collapsable4">
                                                <div class="card card-body">The Clock is a really simple project. I have used the get Date JS method and displayed it with an AM, PM format.</div>
                                        </div>        
        
                                        <div class="project_embed">
                                                <a target="_blank" href="http://message.ezyro.com/">
                                                <img src={{ asset('images/message.jpg') }} class="projectimg img-fluid" alt="Responsive image">
                                                <div class="project_description">
                                                        <div class="project_text">  
                                                                <h2>Message</h2>
                                                                <p>HTML, CSS, Javascript</p>
                                                        </div>
                                                </div>
                                                </a>
                                        </div>
                                        <div id="toggledown">
                                                <p><button class="fa_plus btn btn-primary" type="button" data-toggle="collapse" data-target="#collapsable5" aria-expanded="false" aria-controls="collapseExample"><i class="fa fa-plus" aria-hidden="true"></i></button></p>
                                        </div>
                                        <div class="collapse" id="collapsable5">
                                                <div class="card card-body">The message project made with Javascript, HTML and CSS. You can write any message into the input field. After clicking on the Send Message button, your message will be displayed underneath and an input field clears out.</div>
                                        </div>        
        
                                        <div class="project_embed">
                                                <a target="_blank" href="http://counter.ezyro.com/">
                                                <img src={{ asset('images/counter.jpg') }} class="projectimg img-fluid" alt="Responsive image">
                                                <div class="project_description">
                                                        <div class="project_text">  
                                                                <h2>Counter</h2>
                                                                <p>HTML, CSS, Javascript</p>
                                                        </div>
                                                </div>
                                                </a>
                                        </div>
                                        <div id="toggledown">
                                                <p><button class="fa_plus btn btn-primary" type="button" data-toggle="collapse" data-target="#collapsable6" aria-expanded="false" aria-controls="collapseExample"><i class="fa fa-plus" aria-hidden="true"></i></button></p>
                                        </div>
                                        <div class="collapse" id="collapsable6">
                                                <div class="card card-body">The counter is a basic Javascript project. By clicking on the buttons, you can increase or decrease the number displayed. The numbers get unique style, made with collaboration of Javascript and CSS.</div>
                                        </div>        
        
                                        <div class="project_embed">
                                                <a target="_blank" href="http://navbar.ezyro.com/">
                                                <img src={{ asset('images/navbar.jpg') }} class="projectimg img-fluid" alt="Responsive image">
                                                <div class="project_description">
                                                        <div class="project_text">  
                                                                <h2>Navbar</h2>
                                                                <p>HTML, CSS, Javascript</p>
                                                        </div>
                                                </div>
                                                </a>
                                        </div>
                                        <div id="toggledown">
                                                <p><button class="fa_plus btn btn-primary" type="button" data-toggle="collapse" data-target="#collapsable7" aria-expanded="false" aria-controls="collapseExample"><i class="fa fa-plus" aria-hidden="true"></i></button></p>
                                        </div>
                                        <div class="collapse" id="collapsable7">
                                                <div class="card card-body">The Navbar aka navigation-bar is a tool which used almost by every website. I just made one, simple and easy-looking, based on Javascript. By clicking on the menu button, it will collapse and the inhalt will be visible. The button also changes it's style there and back.</div>
                                        </div>        
        
                                        <div class="project_embed">
                                                <a target="_blank" href="http://quotes.unaux.com/">
                                                <img src={{ asset('images/quotes.jpg') }} class="projectimg img-fluid" alt="Responsive image">
                                                <div class="project_description">
                                                        <div class="project_text">  
                                                                <h2>Quotes</h2>
                                                                <p>HTML, CSS, Javascript</p>
                                                        </div>
                                                </div>
                                                </a>
                                        </div>
                                        <div id="toggledown">
                                                <p><button class="fa_plus btn btn-primary" type="button" data-toggle="collapse" data-target="#collapsable8" aria-expanded="false" aria-controls="collapseExample"><i class="fa fa-plus" aria-hidden="true"></i></button></p>
                                        </div>
                                        <div class="collapse" id="collapsable8">
                                                <div class="card card-body">The Qoutes has only one functionality. By clicking the button, one quote and it's author will be randomly choosen and shown from bulit in datas.</div>
                                        </div>        
        
                                        <div class="project_embed">
                                                <a target="_blank" href="http://imageslider.unaux.com/">
                                                <img src={{ asset('images/slider.jpg') }} class="projectimg img-fluid" alt="Responsive image">
                                                <div class="project_description">
                                                        <div class="project_text">  
                                                                <h2>Image slider</h2>
                                                                <p>HTML, CSS, Javascript</p>
                                                        </div>
                                                </div>
                                                </a>
                                        </div>
                                        <div id="toggledown">
                                                <p><button class="fa_plus btn btn-primary" type="button" data-toggle="collapse" data-target="#collapsable9" aria-expanded="false" aria-controls="collapseExample"><i class="fa fa-plus" aria-hidden="true"></i></button></p>
                                        </div>
                                        <div class="collapse" id="collapsable9">
                                                <div class="card card-body">Image slider actually shows the pictures that are in it's folder. You can click left or right and after the last image, it returns to the default one. In that case, you will never see a blank page.(The pictures were taken on my wedding day. I was not forced to upload those, by my wife ... i choosed them myself.... really....)</div>
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
                                        <div id="toggledown">
                                                <p><button class="fa_plus btn btn-primary" type="button" data-toggle="collapse" data-target="#collapsable10" aria-expanded="false" aria-controls="collapseExample"><i class="fa fa-plus" aria-hidden="true"></i></button></p>
                                        </div>
                                        <div class="collapse" id="collapsable10">
                                                <div class="card card-body">The color changer is a simple Javascript project. You can choose between two button. The first will create a random color, the second will choose one from it's five possible color. </div>
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
                                        <div id="toggledown">
                                                <p><button class="fa_plus btn btn-primary" type="button" data-toggle="collapse" data-target="#collapsable11" aria-expanded="false" aria-controls="collapseExample"><i class="fa fa-plus" aria-hidden="true"></i></button></p>
                                        </div>
                                        <div class="collapse" id="collapsable11">
                                                <div class="card card-body">This is my second project. It based on a Wordpress theme, which i created a child theme to. Contains wordpress plugins and a PHP with MySQL database. The visitor able to registre, login and write a post. The website uses E-commerce for the webshop but of course, i won't sell any product on it. I have used a free-host, so it may take some time to load the website.</div>
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
                                        <div id="toggledown">
                                                <p><button class="fa_plus btn btn-primary" type="button" data-toggle="collapse" data-target="#collapsable12" aria-expanded="false" aria-controls="collapseExample"><i class="fa fa-plus" aria-hidden="true"></i></button></p>
                                        </div>
                                        <div class="collapse" id="collapsable12">
                                                <div class="card card-body">This is my first website, where i have learned web development basics, including HTML, CSS, Javascript, PHP and MySQL. It is a simple portfolio website, based on a Wordpress theme. I created a child theme, where the CSS and Javascript was modified. The site has contact form, gallery and blog. I have used a free-host, so it may take some time to load the website.</div>
                                        </div>        
        
                                </div>
                                <div class="col-md-2">
                                        
                                </div>
                        </div>
                </div>
        @endsection
