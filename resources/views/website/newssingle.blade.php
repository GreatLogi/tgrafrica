@extends('website.layouts.main')

@section('title')
    {{ $blog->title }}
@endsection

@section('content')
    <section
        class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-5"
        style="background-image:url('{{ asset('img/page-header/page-header-background.jpg') }}');">
        <div class="container">
            <div class="row">
                <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                    <h1>{{ $blog->title }}</h1>
                    <span class="sub-title">Read more about us</span>
                </div>
                <div class="col-md-4 order-1 order-md-2 align-self-center">
                    <ul class="breadcrumb breadcrumb-light d-block text-md-end">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li class="active">News</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div role="main" class="main">
        <div class="container py-4">
            <div class="row">
                <div class="col">
                    <div class="blog-posts single-post">
                        <article class="post post-large blog-single-post border-0 m-0 p-0">
                            <div class="post-date ms-0">
                                <span class="day">{{ $blog->created_at->format('d') }}</span>
                                <span class="month">{{ $blog->created_at->format('M') }}</span>
                            </div>
                            <div class="post-content ms-0">
                                <div class="post-meta">
                                    <span><i class="far fa-user"></i> By <a href="#">TGR AFRICA</a></span>
                                    <span><i class="far fa-folder"></i> <a href="#">{{ $blog->category }}</a></span>
                                    <span><i class="far fa-comments"></i> <a
                                            href="#comments">{{ optional($blog->comments)->count() ?? 0 }}
                                            Comments</a></span>
                                </div>
                                <p>{{ $blog->content }}</p>
                                {{-- Comment Section --}}
                                <div id="comments" class="post-block mt-5 post-comments">
                                    <h4 class="mb-3">Comments ({{ optional($blog->comments)->count() ?? 0 }})</h4>
                                    <ul class="comments">
                                        @if ($blog->comments)
                                            @foreach ($blog->comments->where('parent_id', null) as $comment)
                                                <li>
                                                    <div class="comment">
                                                        <div
                                                            class="img-thumbnail img-thumbnail-no-borders d-none d-sm-block">
                                                            <img class="avatar" alt=""
                                                                src="{{ asset('img/avatars/avatar.jpg') }}" />
                                                        </div>
                                                        <div class="comment-block">
                                                            <div class="comment-arrow"></div>
                                                            <span class="comment-by">
                                                                <strong>{{ $comment->name }}</strong>
                                                                <span class="float-end">
                                                                    <span><a href="#" class="reply-button"
                                                                            data-id="{{ $comment->id }}"><i
                                                                                class="fas fa-reply"></i> Reply</a></span>
                                                                </span>
                                                            </span>
                                                            <p>{{ $comment->message }}</p>
                                                            <span
                                                                class="date float-end">{{ $comment->created_at->format('F j, Y \a\t g:i a') }}</span>
                                                        </div>
                                                    </div>
                                                    @if ($comment->replies->count() > 0)
                                                        <ul class="comments reply">
                                                            @foreach ($comment->replies as $reply)
                                                                <li>
                                                                    <div class="comment">
                                                                        <div
                                                                            class="img-thumbnail img-thumbnail-no-borders d-none d-sm-block">
                                                                            <img class="avatar" alt=""
                                                                                src="{{ asset('img/avatars/avatar.jpg') }}" />
                                                                        </div>
                                                                        <div class="comment-block">
                                                                            <div class="comment-arrow"></div>
                                                                            <span class="comment-by">
                                                                                <strong>{{ $reply->name }}</strong>
                                                                                <span class="float-end">
                                                                                    <span><a href="#"
                                                                                            class="reply-button"
                                                                                            data-id="{{ $reply->id }}"><i
                                                                                                class="fas fa-reply"></i>
                                                                                            Reply</a></span>
                                                                                </span>
                                                                            </span>
                                                                            <p>{{ $reply->message }}</p>
                                                                            <span
                                                                                class="date float-end">{{ $reply->created_at->format('F j, Y \a\t g:i a') }}</span>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    @endif
                                                </li>
                                            @endforeach
                                        @endif
                                    </ul>
                                </div>
                                <div class="post-block mt-5 post-leave-comment">
                                    <h4 class="mb-3">Leave a comment</h4>
                                    <form class="contact-form p-4 rounded bg-color-grey"
                                        action="{{ route('news.comment', ['uuid' => $blog->uuid]) }}" method="POST">
                                        @csrf
                                        <div class="p-2">
                                            <div class="row">
                                                <div class="form-group col-lg-6">
                                                    <label class="form-label required font-weight-bold text-dark">Full
                                                        Name</label>
                                                    <input type="text" value="" class="form-control" name="name"
                                                        required />
                                                </div>
                                                <div class="form-group col-lg-6">
                                                    <label class="form-label required font-weight-bold text-dark">Email
                                                        Address</label>
                                                    <input type="email" value="" class="form-control" name="email"
                                                        required />
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col">
                                                    <label
                                                        class="form-label required font-weight-bold text-dark">Comment</label>
                                                    <textarea maxlength="5000" rows="8" class="form-control" name="message" required></textarea>
                                                </div>
                                            </div>
                                            <input type="hidden" name="parent_id" id="parent_id" value="">
                                            <div class="row">
                                                <div class="form-group col mb-0">
                                                    <input type="submit" value="Post Comment"
                                                        class="btn btn-primary btn-modern" />
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.reply-button').forEach(button => {
                button.addEventListener('click', function(event) {
                    event.preventDefault();
                    const parentId = button.getAttribute('data-id');
                    document.getElementById('parent_id').value = parentId;
                    window.scrollTo({
                        top: document.querySelector('.post-leave-comment').offsetTop,
                        behavior: 'smooth'
                    });
                });
            });
        });
    </script>

@endsection
