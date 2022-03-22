@extends('layouts.app') 

@section('content')

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
            {{ $question->excerpt }}
        </div>
    </article>
    @endforeach 
    @else
    <p>Er zijn nog geen vragen.</p>
    @endif
</div>


@endsection