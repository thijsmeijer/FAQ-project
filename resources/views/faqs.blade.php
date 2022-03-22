@extends('layouts.app')

@section('content')

@if(auth()->user())
<form method="POST" action="/create">
    @csrf
    <button class="btn btn-light" type="submit">Add Question</button>
</form>
@endif

<div class="faqsRender">
    @if ($questions->count() > 0)
    @foreach ($questions as $question)
    <article>
        <h1>
            <a href="/faqs/{{ $question->slug }}">
                {{ $question->title }}
            </a>
        </h1>

        <div>
            <p>{{ $question->excerpt }}</p>
        </div>

    </article>
    @endforeach
    @else
    <p>Er zijn nog geen vragen.</p>
    @endif
</div>
@endsection