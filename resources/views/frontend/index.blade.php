@extends('layouts.frontend')

@section('title')
    e_shop
@endsection
@section('content')
    @include('layouts.inc.slider')

    <div class='py-5 mt-3'>
        <div class="container">
            <div class="row">
                <div class=" featuredcarousel owl-theme">

                    @foreach ($featured_products as $prod)
                        <div class="items">
                            <div class="card">
                                <img src="{{ asset('assets/uploads/products/.$prod->image') }}" atl="prodcuts image">
                                <div class="card-body">
                                    <h1>{{ $prod->name }} </h1>
                                    <small>{{ $prod->selling_price }}</small>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>


            </div>
        </div>
    </div>

        <div class='py-5 '>
        <div class="container">
            <div class="row">
            <h2>Trending Category</h2>
                <div class=" owlCarousel featuredcarousel owl-theme">

                    @foreach ($trending_category as $tcate)
                        <div class="items">
                        <a href="{{ url('view-category/'.$tcate->slug) }}">
                            <div class="card">
                                <img src="{{ asset('assets/uploads/products/.$tcate->image') }}" atl="prodcuts image">
                                <div class="card-body">
                                    <h1>{{ $tcate->name }} </h1>
                                    <p>{{ $tcate->description }}</p>
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

@section('scripts')
 $('.featuredcarousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})
@endsection

