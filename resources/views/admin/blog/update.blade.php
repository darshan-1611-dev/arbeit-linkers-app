@extends('admin.layout.main')

@section('body')
    <main>
        <div class="head-title">
            <div class="left">
                <h4 class="mb-4 ps-3">Update Blog</h4>
            </div>
        </div>

        <div>
            <div class="container">
                <div>
                    <form action="{{ url('dashboard/update-blog') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <input type="hidden" name="id" id="id" value="{{ $blog_data->id }}">

                        <div class="mb-4">
                            <label for="" class="fw-semibold mb-2">Blog Title: </label>
                            <input type="text" name="blog_title" id="blog_title" placeholder="Blog Title"
                                   value="{{ $blog_data->blog_title }}" class="form-control">
                            @error("blog_title")
                            <span class="text-danger">* {{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="" class="fw-semibold mb-2">Blog Slug: </label>
                            <input type="text" name="slug" id="slug" placeholder="Blog Slug"
                                   value="{{ $blog_data->slug }}" class="form-control">
                            @error("slug")
                            <span class="text-danger">* {{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="" class="fw-semibold mb-2">Blog Image: </label>
                            <input type="file" name="featured_image" id="featured_image" class="form-control">
                        </div>
                        <img src="{{ asset('storage/'.$blog_data->featured_image) }}"
                             alt="Image" height="100" width="100">
                        <br>
                        <br>

                        <div class="mb-4">
                            <label for="" class="fw-semibold mb-2">Blog Description: </label>
                            <textarea name="blog_content" id="blog_content" rows="20" class="form-control"
                                      placeholder="Write Description..."
                                      style="resize: none;">{{ $blog_data->blog_content }}</textarea>
                            @error("blog_content")
                            <span class="text-danger">* {{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="" class="fw-semibold mb-2">Blog Status: </label>
                            <input type="radio" name="status" id="status"
                                   value="1" {{ $blog_data->status == 1 ? 'checked' : '' }}/>Active
                            <input type="radio" name="status" id="status"
                                   value="0" {{ $blog_data->status == 0 ? 'checked' : '' }}/>Inactive
                        </div>
                        <div class="mb-5">
                            <input type="submit" value="Update Blog" class="btn btn-primary" style="width: 150px;">
                            <a href="{{ url('dashboard/blogs') }}"><input type="button" value="Cancel"
                                                                          class="btn btn-danger" style="width: 150px;">
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection
