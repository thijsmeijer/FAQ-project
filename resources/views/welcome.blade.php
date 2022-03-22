@extends('layouts.app')

@section('content')
<div class="headerMain">
    <h1>How can we help you?</h1>
    <form method="get" class="navbar-search pull-left" action="faqs">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-search" viewBox="0 0 16 16" style="position: relative; left: 30px; bottom: 1px;">
            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
          </svg>
        <input type="text" class="search-query" name="search" placeholder="Waar ben je naar opzoek?" style="width: 400px; height: 40px; border-radius: 30px; border:0px; padding-left: 35px;" autocomplete="off">
    </form>
    <p>Je kunt ook door de onderstaande onderwerpen bladeren om te vinden wat je zoekt</p>
</div>
<div class="contentMain">
    <h2><strong>Frequently asked questions</strong></h2>
    <div class="faqContainers">
        <div class="generalQuestions">
            <h3>General</h3>
            @foreach ($questions as $question)
            <h5><a href="/faqs/{{ $question->slug }}">{!! $question->title !!}</a></h5>
            @endforeach
            <div class="Button-Border">
                <a class=" TestButton nav-link text-white" href="/faqs">Bekijk alle vragen ➟</a>
            </div>
        </div>
        <div class="stageQuestions">
            <h3>Categories</h3>
            @foreach ($categories as $category)
            <h5><a href="/faqs/category/{{ $category->slug }}">{{ $category->name }}</a></h5>
            @endforeach
        </div>
        <div class="Locations">
            <h3>Locations</h3>
            @foreach ($locations as $location)
            <h5><a href="/faqs/location/{{ $location->slug }}">{{ $location->name }}</a></h5>
            @endforeach
        </div>
    </div>
    <div class="faqContainers">
        <div class="generalQuestions">
            <h3>General</h3>
            @foreach ($questions as $question)
            <h5><a href="/faqs/{{ $question->slug }}">{!! $question->title !!}</a></h5>
            @endforeach
            <div class="Button-Border">
                <a class=" TestButton nav-link text-white" href="/faqs">Bekijk alle vragen ➟</a>
            </div>
        </div>
        <div class="stageQuestions">
            <h3>Categories</h3>
            @foreach ($categories as $category)
            <h5><a href="/faqs/category/{{ $category->slug }}">{{ $category->name }}</a></h5>
            @endforeach
        </div>
        <div class="Locations">
            <h3>Locations</h3>
            @foreach ($locations as $location)
            <h5><a href="/faqs/location/{{ $location->slug }}">{{ $location->name }}</a></h5>
            @endforeach
        </div>
    </div>

</div>

@endsection
