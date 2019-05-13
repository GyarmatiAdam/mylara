@extends('layouts.app')

@section('bodysection')
            <div class="container">
                <div class="row">
                        <div class="col-md-4">
                            @include('inc.socialmedia')
                        </div>

                        <div class="col-md-7">  
                            <div id="post_title">                         
                            <h1>Posts</h1>
                            <p>You can see the latest posts here.</p>
                            </div>
                            @if (count($posts) > 0)
                                @foreach ($posts as $post)
                                <div id="post_index">
                                        <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                                    <div>
                                        <img style="width:10%; height:10%" src="/images/{{$post->cover_image}}" alt="">
                                    </div>                                           
                                    <div class="post_details">
                                        <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
                                    </div>
                                </div>
                                @endforeach
                                    {{$posts->links()}}
                                @else
                                    <p>No posts found</p>
                            @endif
                        </div>                   

                        <div class="col-md-1">
                        </div>                       
                </div>
            </div>
@endsection