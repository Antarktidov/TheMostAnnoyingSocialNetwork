@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @foreach ($posts as $post)
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <p class="card-text">{{ $post->user->name }}</p>
                        <h5 class="card-title">
                            <audio controls>
                                <source src="{{ asset('storage/' . $post->filename) }}">
                            </audio>
                        </h5>
                        <div class="d-flex justify-content-between flex-wrap" style="gap: 10px;">
                            <div data-post-id="{{ $post->id }}" data-reaction-type="dislike" class="dd-reaction add-reaction-dislike d-flex align-items-center rounded-pill border px-3 py-1" style="background-color: #f8f9fa; min-width: 70px;">
                                <span style="font-size: 1.3rem;">👎</span>
                                <span class="ms-2 fw-bold">{{ $post->dislikeCount }}</span>
                            </div>
                            <div data-post-id="{{ $post->id }}" data-reaction-type="clown" class="add-reaction add-reaction-clown d-flex align-items-center rounded-pill border px-3 py-1" style="background-color: #f8f9fa; min-width: 70px;">
                                <span style="font-size: 1.3rem;">🤡</span>
                                <span class="ms-2 fw-bold">{{ $post->clownCount }}</span>
                            </div>
                            <div data-post-id="{{ $post->id }}" data-reaction-type="poop" class="add-reaction add-reaction-poop d-flex align-items-center rounded-pill border px-3 py-1" style="background-color: #f8f9fa; min-width: 70px;">
                                <span style="font-size: 1.3rem;">💩</span>
                                <span class="ms-2 fw-bold">{{ $post->poopCount }}</span>
                            </div>
                            <div data-post-id="{{ $post->id }}" data-reaction-type="bloat" class="add-reaction add-reaction-bloat d-flex align-items-center rounded-pill border px-3 py-1" style="background-color: #f8f9fa; min-width: 70px;">
                                <span style="font-size: 1.3rem;">🤮</span>
                                <span class="ms-2 fw-bold">{{ $post->bloatCount }}</span>
                            </div>
                            <div data-post-id="{{ $post->id }}" data-reaction-type="skull" class="add-reaction add-reaction-skull d-flex align-items-center rounded-pill border px-3 py-1" style="background-color: #f8f9fa; min-width: 70px;">
                                <span style="font-size: 1.3rem;">💀</span>
                                <span class="ms-2 fw-bold">{{ $post->skullCount }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
<script src="{{ asset('js/add-reaction.js') }}"></script>
@endsection