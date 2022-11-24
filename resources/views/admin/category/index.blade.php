
@extends('layouts.admin')

@section('content')
<div class=card>
     <div class="card-body">
         <h1>Category  page</h1>
     </div>
  <div class="card-body">
        <table class="table is-bordered">
            <theard>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>description</th>
                    <th>image</th>
                    <th>Action</th>


                </tr>
            </theard>
         @foreach ($category as $item)
            <tbody>
                <tr>
                    <td>{{ $item->id}}</td>
                    <td>{{ $item->name}}</td>
                    <td>{{ $item->description}}</td>
                    <td><img src="{{ asset('assets\uploads\category'.$item->image)}}" alt='image here'></td>
                  <td>  <a href= "{{url('edit_Category/'.$item->id) }} ">edit</a>
                 <a href= "{{url('delete_Category/'.$item->id) }} ">delete</a>
                   </td>
                </tr>
            </tbody>

        @endforeach
        </table>

 </div>

@endsection




