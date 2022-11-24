
@extends('layouts.admin')



<div class=card>
     <div class="card-body">
         <h1>add Product</h1>
     </div>
 </div>

 <form action="{{url('insert_products')}}" method="POST" enctype="multipart/form-data">
     @csrf
     <div class="select is-success">

</div>
 <div class="field">


  <label class="label">Name</label>
  <div class="control">
    <input class="input" type="text" placeholder="Text input" name='name'>
  </div>
<div class="field">
<label class="label">slug</label>
<div class="control">
  <input class="slug" type="text"  name='slug'>
</div>

  <div class="control">
    <div class="select" >
      <select name="cate_id">
      @foreach ( $category as $item )
      <option value="{{$item->id}}"> {{$item->name}}"</option>
      @endforeach

      </select>
    </div>
  </div>

<div class="field">
  <label class="label">small_description</label>
  <div class="control">
    <textarea class="textarea" placeholder="Textarea" name="small_description"></textarea>
  </div>
  <div class="field">
  <label class="label">description</label>
  <div class="control">
    <textarea class="textarea" placeholder="Textarea" name="description"></textarea>
  </div>

<div class="field">
  <label class="label">original_price</label>
  <div class="control">
    <input class="number" type="number"  name='original_price'>
</div>
<div class="field">
  <label class="label">selling_price</label>
  <div class="control">
    <input class="number" type="number" name='selling_price'>
</div>

<div class="field">
<label class="label">qty</label>
<div class="control">
  <input class="qty" type="text"  name='qty'>
</div>

<div class="field">
<label class="label">tax</label>
<div class="control">
  <input class="tax" type="text"  name='tax'>
</div>



<div class="field">
  <label class="label">image</label>
  <div class="control">
    <input class="input" type="text"  name='image'>
  </div>
</div>

<div class="field">
  <label class="label">status</label>
  <div class="control">
    <input  type="checkbox"  name='status'>
  </div>
</div>
<div class="field">
  <label class="label">trending</label>
  <div class="control">
    <input  type="checkbox"  name='trending'>
  </div>
</div>

<div class="field">
<label class="label">meta_title</label>
<div class="control">
  <input  type="text"  name='meta_title'>
</div>
<div class="field">
<label class="label">meta_keywords</label>
<div class="control">
  <input  type="text"  name='meta_keywords'>
</div>

<div class="field">
<label class="label">meta_description</label>
<div class="control">
  <input  type="text"  name='meta_description'>
</div>


<div class="field is-grouped">
  <div class="control">
    <button class="button is-link">Submit</button>
  </div>
  <div class="control">
    <button class="button is-link is-light">Cancel</button>
  </div>
</div>
</Form>

