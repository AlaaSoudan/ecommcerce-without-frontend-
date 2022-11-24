@extends('layouts.frontend')
@section('title')
    {{ $category->name }}
@endsection
@section('content')
    <div class='py-5 mt-3'>
        <div class="container">
            <div class="row">
                <h2> {{ $category->name }}</h2>

                @foreach ($products as $prod)
                    <div class="col-md-3 mb-3">
                        <div class="card">
                            <a href="{{ url('category/' . $category->slug .'/'. $prod->name) }}">
                                <img src="{{ asset('assets/uploads/products/.$prod->image') }}" atl="prodcuts image">
                                <div class="card-body">
                                    <h5>{{ $prod->name }} </h5>
                                    <small class="front-start">{{ $prod->selling_price }}</small>
                                    <span class="front-end"><s>{{ $prod->original_price }}}</s></span>
                                </div>
                        </div>
                        </a>


                    </div>
                @endforeach

            </div>


        </div>
    </div>
    </div>
@endsection
