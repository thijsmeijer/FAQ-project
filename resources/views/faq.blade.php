@extends('layouts.app')

@section('content')

<form method="POST" id="editQuestionsForm">
    @csrf
    <input type="hidden" id="titleInput" name="titleUpdate" />
    <input type="hidden" id="textInput" name="textUpdate" />
    <div class="faqsRender">
        <div name="title" id="title" @if(auth()->user())class="editable"@endif><h1>{!! $question->question !!}</h1></div>
        <div name="content" id="content" @if(auth()->user())class="editable"@endif>{!! $question->answer !!}</div>
        <div>
            <span>Created: </span>{{ $question->created_at->diffForHumans() }}
        </div>
        <a href="../faqs"> <button type="button" class="btn btn-light">All Questions</button>
        </a>
        @if(auth()->user())<button class="btn btn-light" type="submit">Update Question</button>@endif
    </div>
    
</form>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
    $('#editQuestionsForm').submit(function() {
        $('#titleInput').val($('#title').html());
        $('#textInput').val($('#content').html());
        return true; 
    });
    

</script>

@endsection
