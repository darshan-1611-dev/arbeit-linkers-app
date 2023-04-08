@extends('layout.main')

@section('body')
    <section class="container">
        <div class="row ">
            <div class="col-12 col-md-8 col-lg-9">
                <div class="">
                    <h2 class="mt-5">{{ $post->blog_title }}</h2>
                    <span
                        class="mb-4 text-muted d-block fs-4">Posted on {{ $post->created_at->format('M d, Y') }}</span>
                    <div class="">
                        <img src="{{ asset('storage/'.$post->featured_image.'') }}" class=""/>
                        <div class="mt-5">
                            <p>
                                {!! $post->blog_content !!}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
