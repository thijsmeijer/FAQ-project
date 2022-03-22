@extends('layouts.app')

@section('content')
<div class="homeWrapper">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Ask A Question') }}</div>

                    <div class="card-body">
                        <form method="POST" action="/">
                            @csrf

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right"
                                    style="color: black">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="question" class="col-md-4 col-form-label text-md-right text-black"
                                    style="color: black">{{ __('Question') }}</label>

                                <div class="col-md-6">
                                    <input id="question" type="text" class="form-control" name="question">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary text-black">
                                        {{ __('Ask Question') }}
                                    </button>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection