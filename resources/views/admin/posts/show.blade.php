@extends('layouts.app')

@section('title', '| Post: ' . $post->title)

@section('content')

    <main>
        <div class="container">
            <div class="row">
                @if (session('session-change'))
                    <div class="col-12 alert {{ session('class') }}">
                        {{ session('session-change') }}
                    </div>
                @endif

                <div class="card m-auto mt-5 p-1" style="width: 18rem;">
                    <img src="{{ $post->post_image }}" class="card-img-top" alt="{{ $post->title }}'s image">
                    <div class="card-body">
                        <h5 class="card-subtitle">
                            Author id:
                            Id:{{ $post->user_id }}
                        </h5>
                        <h5 class="card-subtitle">
                            Author name:
                            Name: {{ $post->user->name }}
                        </h5>
                        <h5 class="card-title">
                            Title:
                            {{ $post->title }}
                        </h5>

                        <p class="card-subtitle">
                            Published:
                            {{ $post->post_date }}
                        </p>

                        <p class="card-text">
                            Content:
                            {{ $post->post_content }}
                        </p>
                        <p class="card-text">
                            Slug
                            {{ $post->slug }}
                        </p>
                        @if ($post->user_id == $idAuth)
                        <div class="d-flex justify-content-between">
                            <a href="{{ route('admin.posts.edit', $post->slug) }}" class="btn btn-primary">Edit</a>

                            <form action="{{ route('admin.posts.destroy', $post->slug) }}" method="post" class="delete-form"
                                data-name="{{ $post->name }}">
                                @csrf 
                                @method('DELETE')
                                <input type="submit" value="Delete" class="btn btn-danger d-block m-auto">
                            </form>
                            
                        @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
