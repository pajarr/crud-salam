@extends('layout.temp')

@section('main')
<div class="col-sm-12 col-xl-6">
    <div class="bg-light rounded h-100 p-4">
        <h6 class="mb-4">Edit Title</h6>
        <form method="POST" action="/titlee">
            @method('PUT')
            @csrf
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Title</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="title" >
                </div>
            </div>
            <fieldset class="row mb-3">
                <button type="submit" class="btn btn-primary">Sign in</button>
            </fieldset>
        </form>
    </div>
</div>
@endsection