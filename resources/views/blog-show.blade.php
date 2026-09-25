@extends('layouts.app')

@section('title', $post->title . ' | Tradecraft Printers Blog')
@section('meta_description', $metaDescription)
@section('meta_image', $post->thumbnail ? asset('storage/' . $post->thumbnail) : 'https://tradecraft.co.ke/assets/img/twitter-card.png')
@section('og_type', 'article')
@section('canonical', route('blog.show', $post->slug))
@section('extra_meta')
        <meta property="article:published_time" content="{{ $post->created_at->toAtomString() }}" />
        <meta property="article:modified_time" content="{{ $post->updated_at->toAtomString() }}" />
@endsection
@section('hero_title', $post->title)
@section('hide_hero_dot', true)
@section('hero_subtitle', 'Tradecraft Blog')

@section('schema')
{!! $postSchema !!}
@endsection

@section('content')
<style>
    .post-body img { max-width: 100%; height: auto; border-radius: 8px; }
    .post-body { line-height: 1.8; }
    .post-body h1, .post-body h2, .post-body h3, .post-body h4 { margin-top: 1.5em; }
</style>

<section id="post" class="about">
  <div class="container" data-aos="fade-up">
    <div class="row justify-content-center">
      <div class="col-lg-9 content">
        @if($post->thumbnail)
        <img src="{{ asset('storage/' . $post->thumbnail) }}" class="img-fluid rounded mb-4" alt="{{ $post->title }}">
        @endif
        <p class="fst-italic">Published {{ $post->created_at->format('F d, Y') }}</p>
        <div class="post-body">
          {!! $post->body !!}
        </div>
        <p class="mt-4"><a href="{{ route('blog') }}">&larr; Back to the blog</a></p>
      </div>
    </div>
  </div>
</section><!-- End Post -->

@if($relatedPosts->count())
<section id="related-posts" class="services">
  <div class="container" data-aos="fade-up">
    <div class="section-title">
      <h2>More From the Blog</h2>
      <p>Related Posts</p>
    </div>
    <div class="row justify-content-center gy-5">
      @foreach($relatedPosts as $related)
      <div class="col-xl-4 col-md-6 mb-5" data-aos="zoom-in" data-aos-delay="200">
        <div class="service-item">
          <div class="img">
            <img src="{{ $related->thumbnail ? asset('storage/' . $related->thumbnail) : asset('storage/img/hero-bg.jpg') }}" class="img-fluid" alt="{{ $related->title }}">
          </div>
          <div class="details position-relative">
            <div class="icon">
              <i class="bi bi-file-earmark-text"></i>
            </div>
            <a href="{{ route('blog.show', $related->slug) }}"><h3>{{ $related->title }}</h3></a>
            <p class="mb-3">{{ Illuminate\Support\Str::limit(strip_tags($related->body), 100) }}</p>
            <a href="{{ route('blog.show', $related->slug) }}" class="order mt-3 text-white">Read More</a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section><!-- End Related Posts -->
@endif
@endsection
