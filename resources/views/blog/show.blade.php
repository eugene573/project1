@extends('layout')

@section('content')

<style>
 h1 {
    color: #28A828;
    text-shadow: 3px 3px 3px white, 0 0 20px white, 0 0 10px green;
}

h3 {
        color: #286ca8;
  text-shadow: 3px 3px 3px white, 0 0 20px white, 0 0 10px white;
  }

h5{
    font-weight: bold;
    font-family: 'Times New Roman', Times, serif;
    font-size: 1.55rem;
    text-align:left;
    margin-left:125px;

}

</style>

<body>
<br><br><br>


<div class="w-4/5 m-auto pt-20 text-right">
    <br><br>
    <center>
    <h3>{{ $post->title }}</h3>
    <div>
        <img src="{{ asset('images/' . $post->image_path) }}" width="650" class="img-fluid"  alt="">
    </div>
    </center>
    <br>
    <br>
    <center>
    <div class="text">
    <h6 style="font-weight: bold; font-style: italic;"><a href="{{ $post->user->avatar }}"><img class="rounded-circle" height="70" width="70" src="{{$post->user->avatar}}"
                    alt="User profile picture"></a>  &nbsp;&nbsp;{{ $post->user->name }}</h6>  <h6 style="font-style: italic;">
            {{ date('d/m/Y', strtotime($post->updated_at)) }}
            &nbsp;
            {{ date('H:i A', strtotime($post->updated_at)) }}
            </h6>
                   
            </div>
            </center>

            <br>
    <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light text-center">
        {{ $post->description }}
    </p>
    <br>
    <div class="col-lg-4 single-b-wrap col-md-12">
    @guest
        <i class="fas fa-thumbs-up" aria-hidden="true"></i>{{ $post->likedUsers->count() }} liked
    @else
        <a href="#" onclick="document.getElementById('like-form-{{ $post->id }}').submit();"><i class="fas fa-thumbs-up"
        aria-hidden="true"></i></a>
        {{ $post->likedUsers->count() }} liked

        <form action="{{ route('post.like', $post->id) }}" method="POST" style="display: none;" id="like-form-{{ $post->id }}">
        @csrf
        </form>
    @endguest
    </div>
    <!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-62c993cd5f98c742"></script>



<br><br>
@if (Auth::check())
<hr style="width:55%;"><br>

        <form method="post" action="{{ route( 'comments.store' ) }}">
        @csrf
            <div class="form-group">
            <input type="text" class="w-full border-2 border-gray-800 p-3 rounded-lg focus:outline-none focus:border-blue-900" textarea class="form-control-first" name="body"  style="width: 75rem;"></textarea>
                <input type="hidden" name="post_id" value="{{ $post->id }}" />
            </div>
            <div class="form-group">
            <input type="submit" class="btn btn-primary" style="border-radius: 4px; text-color: black;" value="Add Comment" /><br><br>
            </div>
        </form>

<hr style="width:85%">

        @include('blog.commentsDisplay', ['comments' => $post->comments, 'post_id' => $post->id])
@endif
</div>

</body>
@endsection
