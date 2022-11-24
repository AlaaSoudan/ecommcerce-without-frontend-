
@extends('layouts.admin')





<div class=card>
     <div class="card-body">
         <h1>edit/update Category</h1>
     </div>
 </div>

 <form action="{{url('/update_category/'.$category->id)}}" method="post" enctype="multipart/form-data">
     @csrf
     <input type="hidden" name="_method" value="PUT">
 <div class="field">

  <label class="label">Name</label>
  <div class="control">
    <input class="input" value="{{$category->name}}" type="text" placeholder="Text input" name='name'>
  </div>
</div>

<div class="field">
  <label class="label">slug</label>
  <div class="control has-icons-left has-icons-right">
    <input class="input is-success" value="{{$category->slug}}" type="text" placeholder="Text input" value="bulma" name='slug'>
    <span class="icon is-small is-left">
      <i class="fas fa-user"></i>
    </span>

  </div>
<div class="field">
  <label class="label" >description</label>
  <div class="control">
    <textarea class="textarea" placeholder="Textarea" name='description'>{{$category->description}}</textarea>
  </div>
</div>
<div class="checkbox">
  <label class="label">status</label>
    <input value="{{$category->status}}" type="checkbox"  name='status'>
  </div>
</div>
<div class="field">
  <label class="checkbox">populer</label>
  <div class="control">
    <input value="{{$category->populer}}" type="checkbox" name='populer'>
  </div>
</div>

</div>
<div class="field">
  <label for="">meta_title</label>
  <div class="control">
    <input class="input" type="text"  value="{{$category->meta_title}}" placeholder="Text input" name='meta_title'>
  </div>
</div>



<div class="field">
  <label for="">meta_descrip</label>
  <div class="control">
    <input class="input" type="text" placeholder="Text input"  value="{{$category->meta_descrip}}" name='meta_descrip'>
  </div>
</div>
<div class="field">
  <label for="">meta_keywords</label>
  <div class="control">
    <input class="input" type="text" placeholder="Text input"  value="{{$category->meta_keywords}}" name='meta_keywords'>
  </div>
</div>

<div class="field">

    <input class="input" type="text" placeholder="Text input" value="{{$category->image}}" name='image'>


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
 </div>
