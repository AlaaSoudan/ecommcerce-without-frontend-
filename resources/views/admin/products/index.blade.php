
@extends('layouts.admin')

@section('content')
<div class=card>
     <div class="card-body">
         <h1>Products  page</h1>
     </div>
     <div class="card-body">
        <table class="table is-bordered">
            <theard>
                <tr>
                    <th>id</th>
                    <th>category</th>
                    <th>name</th>
                    <th>description</th>
                    <th>original_price</th>
                    <th>selling_price</th>
                    <th>image</th>
                    <th>Action</th>


                </tr>
            </theard>
         @foreach ($products as $item)
            <tbody>
                <tr>
                    <td>{{ $item->id}}</td>
                    <td>{{ $item->category->name}}</td>
                    <td>{{ $item->name}}</td>
                    <td>{{ $item->description}}</td>
                    <td>{{ $item->original_price}}</td>
                    <td>{{ $item->selling_price}}</td>
                    <td><img src="{{ asset('asset/upload/products/'.$item->image)}}" alt='image here'></td>
                  <td>  <a href= "{{url('edit_products/'.$item->id) }} ">edit</a>
                 <a href= "{{url('delete_products/'.$item->id) }} ">delete</a>
                   </td>
                </tr>
            </tbody>

        @endforeach
        </table>

 </div>


@endsection




