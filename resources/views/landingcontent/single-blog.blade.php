@extends('blog-layout')

@section('title')
    {{ $data['blog'][0]->blog_title }}
@endsection

@section('breadcrumbs')

<div class="container">

<ol>
  <li><a href="/">Home</a></li>
  <li><a href="{{ route('pylonblog') }}">Blogs</a></li>
  <li>{{ $data['blog'][0]->blog_title }}</li>
</ol>
<h2>{{ $data['blog'][0]->blog_title }}</h2>

</div>

@endsection

@section('entry')

    <article class="entry entry-single">

    <div class="entry-img">
    <img src="{{ url('/') }}/assets/img/blog/{{ $data['blog'][0]->blog_image }}" alt="" class="img-fluid">
    </div>

    <h2 class="entry-title">
    <a>{{ $data['blog'][0]->blog_title }}</a>
    </h2>

    <div class="entry-meta">
    <ul>
        <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html">{{ $data['blog'][0]->f_name . " " . $data['blog'][0]->l_name }}</a></li>
        <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time>{{ date("F jS, Y", strtotime($data['blog'][0]->created_at)) }}</time></a></li>
        <!-- <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-single.html">12 Comments</a></li> -->
    </ul>
    </div>

    <div class="entry-content">
    {!! $data['blog'][0]->blog_content !!}
    </div>

    <!-- <div class="entry-footer">
    <i class="bi bi-folder"></i>
    <ul class="cats">
        <li><a href="#">Business</a></li>
    </ul>

    <i class="bi bi-tags"></i>
    <ul class="tags">
        <li><a href="#">Creative</a></li>
        <li><a href="#">Tips</a></li>
        <li><a href="#">Marketing</a></li>
    </ul>
    </div> -->

    </article><!-- End blog entry -->
    <div class="blog-author d-flex align-items-center">
        <img src="{{ url('/') }}/assets/img/team/{{ $data['blog'][0]->user_image }}" class="rounded-circle float-left" alt="">
        <div>
            <h4>{{ $data['blog'][0]->f_name . " " . $data['blog'][0]->l_name }}</h4>
            <div class="social-links">
                <a href="https://twitters.com/#"><i class="bi bi-twitter"></i></a>
                <a href="https://facebook.com/#"><i class="bi bi-facebook"></i></a>
                <a href="https://instagram.com/#"><i class="biu bi-instagram"></i></a>
            </div>
            <p>
            {{ $data['blog'][0]->blog_remarks }}
            </p>
        </div>
    </div><!-- End blog author bio -->
@endsection


@section('recent')

@foreach($data["recent"] as $recent)    
    <div class="post-item clearfix">
        <img src="{{ url('/') }}/assets/img/blog/{{ $recent->blog_image }}" alt="">
        <h4><a href="{{ route('pylonblog') }}/{{ $recent->id }}">{{ $recent->blog_title }}</a></h4>
        <time>{{ date("F jS, Y", strtotime($data['blog'][0]->created_at)) }}</time>
    </div>
@endforeach

@endsection

@section('categories')

@foreach($data["categories"] as $category)
    <li><a href="#">{{ $category->category_name }}</a></li>
@endforeach

@endsection

@section('tags')

@foreach($data["tags"] as $tag)
    <li><a href="#">{{ $tag->tag_name }}</a></li>
@endforeach

@endsection