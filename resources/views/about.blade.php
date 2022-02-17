@extends('master')
@section('title')
    About Page
@endsection
@section('body')
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                @foreach($products as $product)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{$product['image']}}" alt="" class="card-img-top h-300"/>
                        <div class="card-body">
                            <h3 class="card-title">{{$product['name']}}</h3>
                            <p class="text-justify">TK. {{$product['price']}}</p>
                            <br/>
                            <a href="{{route('detail',['id' => $product['id']])}}" class="btn btn-success">Detail</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
