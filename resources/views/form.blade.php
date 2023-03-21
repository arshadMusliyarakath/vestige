@extends('layouts.theme')
@section("content")


<div class="container mt-4">
    <div class="row">
        <h1>{{ $poster_type }} Poster</h1>
        <form method="post" action="{{ route('form.submited') }}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="poster_type" value="{{ $poster_type }}">
            <div class="mb-3">
            <label for="" class="form-label">Select</label>
            <select class="form-select" name='gender' required>
                <option value="Mr.">Mr.</option>
                <option value="Mrs." selected>Mrs.</option>
                <option value="Mrs.">Ms.</option>
                <option value="Miss.">Miss.</option>
                
              </select>
            </div>
            <div class="mb-3">
              <label for="" class="form-label">Name</label>
              <input type="text" class="form-control" id="" name="name" required value="raihanath">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Place</label>
                <input type="text" class="form-control" id="" name="place" required value="pandikkad">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Image</label>
                <input type="file" class="form-control" id="" name="image" required>
              </div>
            
            <button type="submit" class="btn btn-primary">Generate Poster</button>
          </form>
    </div>
</div>






@endsection