@extends('admin.layouts.admin_master')
@section('title')
    BrainStorm
@endsection
@section('admin')
    <style>
        .input-group {
            margin-bottom: 10px;
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <div class="row">
        <div class="col-lg-12">
            <form action="{{ route('posts.store') }}" method="POST" id="myForm" enctype="multipart/form-data">
                @csrf
                <section class="card">
                    <header class="card-header">
                        <h2 class="card-title">Create a new Post</h2>
                    </header>
                    <div class="card-body" style="display: block;">
                        <div class="row">
                            <div class="col-lg-12">
                                <label for="">Title</label>
                                <input class="form-control" name="title" placeholder="Title">
                                @error('title')
                                    <span class="btn btn-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-lg-12">
                                <label for=""></label>
                                <textarea class="form-control" name="content" rows="8" placeholder="Type your message"></textarea>
                                @error('content')
                                    <span class="btn btn-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <footer class="card-footer text-end" style="display: block;">
                        <button class="btn btn-primary" type="submit">Post</button>
                    </footer>
                </section>
            </form>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-lg-12">
            @foreach ($posts as $post)
                <div class="card mt-4">
                    <div class="card-header">
                        <h5>{{ $post->title }}</h5>
                        <small>Posted by {{ $post->user->name }} on {{ $post->created_at->format('d M Y, H:i') }}</small>
                    </div>
                    <div class="card-body">
                        <p>{{ $post->content }}</p>
                        <h6>Replies</h6>
                        @foreach ($post->replies as $reply)
                            <div class="card mt-2">
                                <div class="card-body">
                                    <small>{{ $reply->user->name }} replied on
                                        {{ $reply->created_at->format('d M Y, H:i') }}</small>
                                    <p>{{ $reply->content }}</p>
                                </div>
                            </div>
                        @endforeach

                        <form action="{{ route('replies.store', $post) }}" method="POST" class="mt-3">
                            @csrf
                            <div class="form-group">
                                <label for="content">Reply</label>
                                <textarea class="form-control" name="content" rows="3"></textarea>
                                @error('content')
                                    <span class="btn btn-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <button class="btn btn-primary" type="submit">Reply</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
