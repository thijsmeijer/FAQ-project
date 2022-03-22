@extends('layouts.app')

@section('content')
<div class="homeWrapper">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Create Question') }}</div>

                    <div class="card-body">
                        <form method="POST" action="/faqs">
                            @csrf

                            <div class="form-group row">
                                <label for="question" class="col-md-4 col-form-label text-md-right"
                                    style="color: black">{{ __('Question') }}</label>

                                <div class="col-md-6">
                                    <input id="question" type="text" class="form-control" name="question" autofocus autocomplete="off">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="excerpt" class="col-md-4 col-form-label text-md-right text-black"
                                    style="color: black">{{ __('Excerpt') }}</label>

                                <div class="col-md-6">
                                    <input id="excerpt" type="text" class="form-control" name="excerpt" autocomplete="off">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="answer" class="col-md-4 col-form-label text-md-right text-black"
                                    style="color: black">{{ __('Answer') }}</label>

                                <div class="col-md-6">
                                    <input id="answer" type="text" class="form-control" name="answer" autocomplete="off">
                                </div>
                            </div>

                            <label class="form-group row" for="location">Location:</label>
                            <input type="checkbox" id="all-locations" name="all-locations" value="All locations" onclick="selectAllLocations()">
                            <label for="all-locations">All locations</label>
                                @foreach($locations as $location)
                                    <input type="checkbox" id="location" name="locations[]" value="{{ $location->id }}" onclick="checkLocations()">
                                    <label for="location">{{ $location->name }}</label>
                                @endforeach
                                <input type="text" name="newLocation" placeholder="New Location" autocomplete="off">

                            <label class="form-group row" for="Category">Category:</label>
                            <input type="checkbox" id="all-categories" name="all-categories" value="All categories" onclick="selectAllCategories()">
                            <label for="all-categories">All categories</label>
                                @foreach($categories as $category)
                                    <input type="checkbox" id="category" name="categories[]" value="{{ $category->id }}" onclick="checkCategories()">
                                    <label for="category">{{ $category->name }}</label>
                                @endforeach
                                <input type="text" name="newCategory" placeholder="New Category" autocomplete="off">
                            </select>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary text-black">
                                        {{ __('Create Question') }}
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
<script>
    function selectAllLocations() {
        var checkBox = document.getElementById("all-locations");
        var locations = document.getElementsByName("locations[]");
        if (checkBox.checked == true) {
            for (var i = 0; i < locations.length; i++) {
                locations[i].checked = true;
            }
        } else {
            for (var i = 0; i < locations.length; i++) {
                locations[i].checked = false;
            }
        }
    }

    function selectAllCategories() {
        var checkBox = document.getElementById("all-categories");
        var categories = document.getElementsByName("categories[]");
        if (checkBox.checked == true) {
            for (var i = 0; i < categories.length; i++) {
                categories[i].checked = true;
            }
        } else {
            for (var i = 0; i < categories.length; i++) {
                categories[i].checked = false;
            }
        }
    }
    
    function checkLocations() {
        var checkBox = document.getElementById("all-locations");
        var locations = document.getElementsByName("locations[]");
        var checked = true;

        [...locations].forEach(function(location) {
            if (! location.checked) {
                checked = false;
            }
        });

        checkBox.checked = checked;
    }

    function checkCategories() {
        var checkBox = document.getElementById("all-categories");
        var categories = document.getElementsByName("categories[]");
        var checked = true;

        [...categories].forEach(function(category) {
            if (! category.checked) {
                checked = false;
            }
        });
        
        checkBox.checked = checked;
    }
</script>
@endsection