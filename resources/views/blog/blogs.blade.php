@extends('layout.main')

@section('body')
    <section class="container">
        <div class="">
            <div class="">
                <div class="d-sm-flex justify-content-sm-between align-items-center">
                    <h2 class=" text-center text-sm-start">Our Blogs</h2>
                    <div class="mb-5">
                        <form action="{{ url('blogs') }}" method="get">
                            @csrf
                            <div class="d-flex">
                                <div class="me-3 w-75">
                                    <input type="search" name="search_post" id="search_post"
                                           class="form-control fs-4 py-3" value="{{ app('request')->input('search_post') }}"
                                           placeholder="Search Blog Category...."/>
                                </div>
                                <div class="w-25">
                                    <input type="submit" value="Search" class="btn btn-primary fs-4 py-3 w-100">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row g-5">
                    @if($posts->count() > 0)
                        @foreach($posts as $post)
                            <div class="col-12 col-sm-6 col-md-4">
                                <div class="card shadow h-100">
                                    <img src="{{ asset('storage/'.$post->featured_image.'') }}" class="card-img-top"
                                         alt="Web Design">
                                    <div class="card-body pt-4">
                                        <a href="{{ url('blog/'.$post->slug) }}">
                                            <h5 class="card-title mb-4">{{ $post->blog_title }}</h5>
                                        </a>
                                        <p class="mb-2"><span
                                                class="text-muted fs-5"> {{ $post->created_at->format('M d, Y') }}</span>
                                        </p>
                                        <p class="card-text">{{ substr($post->blog_content, 0, 100) }}...</p>

                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <h4 class="text-center">Sorry, no results found.
                        </h4>
                    @endif
                </div>

            </div>
        </div>
    </section>
@endsection
