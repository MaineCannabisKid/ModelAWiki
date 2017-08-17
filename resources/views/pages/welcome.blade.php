@extends('main')

@section('title', 'Homepage')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron">
                <h1>Welcome to My Blog!</h1>
                <p>Thank you for visiting. This is my test website built with Laravel.</p>
                <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular Post</a></p>
            </div>
        </div>
    </div> <!-- /.row -->


    <div class="row">
        <!-- Main Column -->
        <div class="col-md-8">

            @foreach($posts as $post)
            
                <div class="post">
                    <h3>{{ $post->title }}</h3>
                    <p>{{ substr($post->body, 0, 300) }}{{ strlen($post->body) > 300 ? "..." : "" }}</p>
                    <a href="{{ route('blog.single', $post->slug) }}" class="btn btn-primary">Read More</a>
                </div>

                <hr>

            @endforeach

            
        </div> <!-- /.col-md-8 -->

        <!-- Sidebar -->
        <div class="col-md-3 col-md-offset-1">
            <h2>Sidebar</h2>
        </div>


    </div> <!-- /.row -->
@endsection