@extends('layouts.app')<!--this calls the template from layouts.app
    ||(view folder)so only the content has to be changed-->
    @section('content')<!--starts a section where this below content 
        ||will be inserted-->
        <body>
                <div class="container">
                        <div class="row">
                                <div class="col-md-2">
                                    @include('inc.socialmedia')
                                </div>
                                <div class="col-md-12">
                                    <div class="contact_page">
                                        <h3><i class="fa fa-envelope" aria-hidden="true"></i></h3>
                                        <h3>agyarmati123@gmail.com</h3>
                                        <h3><i class="fa fa-mobile" aria-hidden="true"></i></h3>
                                        <h3>(+43)0 664 3855768</h3>
                                        <h3><i class="fa fa-map-marker" aria-hidden="true"></i></h3>
                                        <h3>1180 Wien<br>Pötzleinsdorfer<br>Straße 194</h3>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                        
                                </div>
                        </div>
                </div>
        </body>
    @endsection