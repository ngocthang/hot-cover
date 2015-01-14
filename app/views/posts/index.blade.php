@extends('layouts.visitor')
@section('content')
    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Page Heading
                    <small>Secondary Text</small>
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Project One -->
        @if ($posts->count())
          @foreach($posts as $post)
            <div class="row">
                <div class="col-md-7">
                    <iframe align="center" width="600px" height="300px" src="<?= $post->content ?>"  
      frameborder="yes" scrolling="yes" name="myIframe" id="myIframe"> </iframe>
                </div>
                <div class="col-md-5">
                    <h3>{{ $post->title }}</h3>
                    <!-- like -->
                    <div class="rateWrapper"><span class="like rate rateUp" id="{{$post->id}}" data-item="{{$post->id}}">
                    <span class="rateUpN">{{$post->true_likes()->count()}}</span></span>
                    <span class="disLike rate rateDown" data-item="{{$post->id}}">
                    <span class="rateDownN">{{$post->disLikes()->count()}}</span></span></div>
                    <!-- end like -->
                    <h5>{{ $post->description }}</h5>
                    {{ link_to_route('posts.show', 'View Video', array($post->id), array('class' => 'btn btn-primary')) }}<span class="glyphicon glyphicon-chevron-right"></span>
                </div>
            </div>
          @endforeach
        @else
          There are no posts
        @endif
        <!-- /.row -->

        <hr>

        <!-- Pagination -->
        <div style="text-align: center">{{ $posts->links(); }}</div>
        <!-- /.row -->
@stop