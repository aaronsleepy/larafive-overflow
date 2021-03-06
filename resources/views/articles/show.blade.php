@extends('layouts.app')

@section('content')
    <div class="page-header">
        <h4>
            <a href="{{ route('articles.index') }}">
                포럼
            </a>
            <small>
                / {{ $article->title }}
            </small>
        </h4>
    </div>

    <article data-id="{{ $article->id }}">
        @include('articles.partial.article', compact('article'))

        <p>{{ $article->content }}</p>
    </article>

    <div class="text-center action__article">
        <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-info">
            <i class="fa fa-pencil"></i>
            글 수정
        </a>
        <button class="btn btn-danger button__delete">
            <i class="fa fa-trash-o"></i>
            글 삭제
        </button>
        <a href="{{ route('articles.index') }}" class="btn btn-default">
            <i class="fa fa-list"></i>
            글 목록
        </a>
    </div>
@stop
