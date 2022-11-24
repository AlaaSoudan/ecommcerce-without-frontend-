@extends('layouts.frontend')
@section('title', $products->name)


@section('content')
    <div class="conatainer">
        <h5 class="mb-0">colloction /{{ $products->category->name }}/{{ $products->name }}</h5>
<div class="product_data">
        <div class="card ">
            <div class="card-image">

                <img src="{{ asset('assets/uploads/products/.$prod->image') }}" atl="prodcuts image">

            </div>
            <div class="card-content">
                {{ $products->name }}
                @if ($products->trending == '1')we
                    <label style="front-size :16px" class="float-end badge bg-danger trending_tag">trending</label>
                @endif

                <hr>

                <input type="hidden" id="prod_id" value="{{ $products->id }}">
                <label>Quantity</label>

                <input typ="text" name="quantity" id="qty-input" value='1'>

            </div>
            <br />
            <button type="button" class="button is-link addtocartbtn"> Add to cart
            </button>
            <button type="button" class="button is-danger">Add to wish list
            </button>
        </div>
         </div>

    @endsection
    @section('script')
        <script >
            $(document).ready(function() {

                $('.addtocartbtn').click, function(e) {
                        e.preventDefault();

                         prod_qty = $(this).closest('.product_data').find('input[id="qty-input"]').val();
                         alert("prod_qty ")


$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
                        $.ajax({
                            type: "POST",
                            url: "/add-to-cart",
                            data: {
                                'prod_id': prod_id,
                                'prod_qty': prod_qty

                            },
                            dataType: "dataType",
                            success: function(response) {
                                alert(response, status);
                            }
                        });


                    }



            });
        </script>
    @endsection
