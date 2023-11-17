@extends('layout.master')

@section('title', 'Create Product')

@section('content')

    <div class="container col-md-8 col-md-offset-2 mt-3">
        <div class="card p-5">
            <!-- Form Start -->
            <form method="post" enctype="multipart/form-data"> 
                @foreach($errors->all() as $error)
                    <p class="alert alert-danger">{{$error}}</p>
                @endforeach

                @if(session('status'))
                    <p class="alert alert-success alert-dismissible fade show">
                        {{session('status')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </p>
                @endif
                <legend class="text-center">Insert A New Product</legend>
                {{csrf_field()}}
                <div class="mb-3">
                    <label for="title" class="form-label b-color">Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Title">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label b-color">Price</label>
                    <input type="number" class="form-control" id="price" name="price" placeholder="Price"> 
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label b-color">Description</label>
                    <textarea class="form-control" id="description" rows="3" name="description"></textarea>
                </div>
                <div class="mb-3">
                    <label for="file" class="form-labelb-color">Image</label>
                    <input class="form-control" type="file" id="file" name="file[]" multiple>
                </div>
                <button type="submit" class="btn btn-secondary">Submit</button>
            </form>
            <!-- Form End -->
        </div>
    </div>

@endsection