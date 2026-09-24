@extends('layouts.app')

@section('title', 'Blog | Tradecraft Printers — Printing Tips & News from Nairobi CBD')
@section('meta_description', 'Guides, tips and news on printing, photocopying, binding, lamination and graphic design from Tradecraft Printers in Nairobi CBD.')

@section('hero_title', 'Tradecraft Blog')
@section('hero_subtitle', 'Printing tips, guides and news from Nairobi CBD')

@section('content')
<section id="blog-list" class="services">
  <div class="container" data-aos="fade-up">
    <div class="section-title">
      <h2 class="text-white">Blog</h2>
      <p>Latest from Tradecraft</p>
    </div>

    @if($posts->isEmpty())
    <div class="row justify-content-center">
      <div class="col-lg-8 text-center text-white">
        <p>No posts published yet &mdash; check back soon.</p>
      </div>
    </div>
    @else
    <div class="row justify-content-center gy-5">
      @foreach($posts as $post)
      <div class="col-xl-4 col-md-6 mb-5" data-aos="zoom-in" data-aos-delay="200">
        <div class="service-item">
          <div class="img">
            <img src="{{ $post->thumbnail ? asset('storage/' . $post->thumbnail) : asset('storage/img/hero-bg.jpg') }}" class="img-fluid" alt="{{ $post->title }}">
          </div>
          <div class="details position-relative">
            <div class="icon">
              <i class="bi bi-file-earmark-text"></i>
            </div>
            <a href="{{ route('blog.show', $post->slug) }}"><h3>{{ $post->title }}</h3></a>
            <p class="mb-3">{{ Illuminate\Support\Str::limit(strip_tags($post->body), 140) }}</p>
            <p class="fst-italic" style="font-size:13px;">{{ $post->created_at->format('M d, Y') }}</p>
            <a href="{{ route('blog.show', $post->slug) }}" class="order mt-3 text-white">Read More</a>
          </div>
        </div>
      </div>
      @endforeach
    </div>

    <div class="row justify-content-center mt-3">
      {{ $posts->onEachSide(1)->links('pagination::bootstrap-4') }}
    </div>
    @endif
  </div>
</section><!-- End Blog List -->
@endsection
