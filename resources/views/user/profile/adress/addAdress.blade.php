<form method="post" action="{{route('addAdress')}}">
  @csrf
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputEmail4">Title</label>
      <input type="text" class="form-control" name="title" placeholder="Title">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputEmail4">Adress</label>
      <textarea type="text" class="form-control"  placeholder="Adress" name="adress" required rows="3"></textarea> 
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Post Code</label>
      <input type="tel" class="form-control" placeholder="-----"  name="postcode" pattern="[0-9]{6}" maxlength="12"  title="Ten digits code" required>
      <small>Exp 340555</small>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Save</button>
</form>