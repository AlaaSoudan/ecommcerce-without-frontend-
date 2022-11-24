
@extends('layouts.admin')



<div class=card>
     <div class="card-body">
         <h1>edit/update Product</h1>
     </div>
 </div>

 <form action="{{url('/update_products/'.$products->id)}}" method="post" enctype="multipart/form-data">
     @csrf
     <input type="hidden" name="_method" value="PUT">
>
     <div class="field">


  <label class="label" >Name</label>
  <div class="control">
    <input class="input" type="text" value="{{$products->name}}" name='name'>
  </div>
  <div class="field">
  <label class="label">category</label>
  <div class="control">
    <div class="select" >
      <select name="cate_id">
      @foreach ( $category as $item )
      <option value="{{$item->id}}"> {{$item->name}}"</option>
      @endforeach

      </select>
    </div>
  </div>
</div>


<div class="field">
  <label class="label">small_description</label>
  <div class="control">
    <input class="textarea"   type="text" value="{{$products->small_description}}" name="small_description"></input>
  </div>
  <div class="field">
  <label class="label">description</label>
  <div class="control">
    <input class="textarea" value="{{$products->description}}" name="description"></input>
  </div>
  <div class="field">
  <label class="label">original_price</label>
  <div class="control">
    <input class="number"   type="text" value="{{$products->original_price}}" name="original_price"></input>
  </div>

  <div class="field">
  <label class="label">selling_price</label>
  <div class="control">
    <input class="number"  type="text" value="{{$products->selling_price}}" name="selling_price"></input>
  </div>
  <div class="field">
<label class="label">qty</label>
<div class="control">
  <input  type="text" value="{{$products->qty}}" name='qty'>
</div>

<div class="field">
<label class="label">tax</label>
<div class="control">
  <input class="tax" type="text" value="{{$products->tax}}" name='tax'>
</div>


<div class="field">
  <label class="label">image</label>
  <div class="control">
    <input class="input" type="text" value="{{$products->image}}" name='image'>
  </div>
</div>

<div class="field">
  <label class="label">status</label>
  <div class="control">
    <input  type="checkbox" value="{{$products->status ? '1' :'' }}" name='status'>
  </div>
</div>
<div class="field">
  <label class="label">trending</label>
  <div class="control">
    <input  type="checkbox"  value="{{$products->trending ? '1' : ''}}" name='trending'>
  </div>
</div>

<div class="field">
<label class="label">meta_title</label>
<div class="control">
  <input  type="text" value="{{$products->meta_title}}" name='meta_title'>
</div>
<div class="field">
<label class="label">meta_keywords</label>
<div class="control">
  <input  type="text"  value="{{$products->meta_keywords}}" name='meta_keywords'>
</div>

<div class="field">
<label class="label">meta_description</label>
<div class="control">
  <input  type="text" value="{{$products->meta_description}}" name='meta_description'>
</div>


<div class="field is-grouped">
  <div class="control">

<div class="field is-grouped">
  <div class="control">
    <button class="button is-link">Submit</button>
  </div>
  <div class="control">
    <button class="button is-link is-light">Cancel</button>
  </div>
</div>
</Form>

