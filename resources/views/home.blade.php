@extends('layout.master')

@section('title','Home')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
                @include('layout.sidebar')
            </div>

            <div class="col-md-10">
                <h3>Content</h3>

                <div class="row" use Illuminate\Support\Str;>
                    @foreach($products as $product)
                    <!-- One Product Start --> 
                        <div class="col-sm-6 col-md-4">
                            <div class="card" style="width: 22rem;">
                                <h5 class="text-center">{{$product->price}} Ks</h5>
                                <img src="{{asset('/uploads/'. unserialize($product->imgs) [0])}}" class="card-img-top m-auto" alt="..." style="width: 250px;height: 290px;">
                                <div class="card-body">
                                    <h5 class="card-title">{{$product->title}}</h5>
                                    <p class="card-text">{{Str::limit($product->description,70)}}</p>
                                    <p>
                                        <a href="#" class="btn btn-info">View Detail</a>
                                        <a href="{{action('App\Http\Controllers\PageController@add',$product->id)}}" class="btn btn-success pull-right">Add to Cart</a>
                                    </p>
                                </div>  
                            </div>
                        </div>
                    <!-- One Product End -->
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection