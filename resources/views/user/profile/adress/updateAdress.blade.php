<form method="POST" action="{{ route('deleteAdress') }}">
    @csrf
    <input type="hidden" name="adress_id" value="{{ $adress->id }}">
    <button type="submit" class="btn btn-danger" style="float:right;"><a>Delete</a></button>
</form>
<form method="GET" action="{{ route('adress') }}">
    <button type="submit" class="btn btn-default" style="margin-right: 10px; float:left;"><i class="fas fa-chevron-left"></i></button>
</form>
<h1>Update Adress</h1>
<form method="POST" action="{{route('updateAdress')}}">
  @csrf
  <input type="hidden" name="adress_id" value="{{ $adress->id }}">
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputEmail4">Title</label>
      <input type="text" class="form-control" name="title" placeholder="Title" value="{{$adress['title']}}">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputEmail4">Adress</label>
      <textarea type="text" class="form-control"  placeholder="Adress" name="adress" required rows="3">{{$adress['adress']}}</textarea> 
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Post Code</label>
      <input type="tel" class="form-control" placeholder="-----"  name="post_code" pattern="[0-9]{6}" maxlength="12"  title="Ten digits code" value="{{$adress['post_code']}}" required>
      <small>Exp 340555</small>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Update</button>
</form>