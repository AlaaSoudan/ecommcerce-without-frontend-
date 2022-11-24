
@extends('layouts.admin')




<div class=card>
     <div class="card-body">
 <h1>add Category</h1>
<form action="{{url('insert_category')}}" method="POST" enctype="multipart/form-data">
     @csrf
 <div class="field">
  <label class="label">Name</label>
  <div class="control">
    <input class="input" type="text" placeholder="Text input" name='name'>
  </div>
</div>

<div class="field">
  <label class="label">slug</label>
  <div class="control has-icons-left has-icons-right">
    <input class="input is-success" type="text" placeholder="Text input" value="bulma" name='slug'>
    <span class="icon is-small is-left">
      <i class="fas fa-user"></i>
    </span>

  </div>
<div class="field">
  <label class="label" >description</label>
  <div class="control">
    <textarea class="textarea" placeholder="Textarea" name='description'></textarea>
  </div>
</div>

</div>
<label class="checkbox">
  <input type="checkbox"  name='status'>
  status
</label>

<label class="checkbox">
  <input type="checkbox"  name='popular'>
  popular
</label>

<div class="field">
  <label for="">meta_title</label>
  <div class="control">
    <input class="input" type="text" placeholder="Text input" name='meta_title'>
  </div>
</div>
<div class="field">
  <label for="">meta_title</label>
  <div class="control">
    <input class="input" type="text" placeholder="Text input" name='meta_title'>
  </div>
</div>
<div class="field">
  <label for="">meta_descrip</label>
  <div class="control">
    <input class="input" type="text" placeholder="Text input" name='meta_descrip'>
  </div>
</div>
<div class="field">
  <label for="">meta_keywords</label>
  <div class="control">
    <input class="input" type="text" placeholder="Text input" name='meta_keywords'>
  </div>
</div>




<div class="file has-name">
  <label class="file-label">
    <input class="file-input" type="file" name="image">
    <span class="file-cta">
      <span class="file-icon">
        <i class="fas fa-upload"></i>
      </span>
      <span class="file-label">
        Choose a file…
      </span>
    </span>

  </label>
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
     </div>
 </div>


