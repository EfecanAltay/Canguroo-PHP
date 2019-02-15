<div id="collapse2">
<form method="GET" action="{{ route('adress') }}">
    <button type="submit" class="btn btn-default" style="margin-right: 10px; float:left;"><i class="fas fa-chevron-left"></i></button>
</form>
  <h1>Add Adress</h1>
  <form method="POST" action="{{route('addAdress')}}">
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
        <input type="tel" class="form-control" placeholder="-----"  name="post_code" pattern="[0-9]{6}" maxlength="12"  title="Ten digits code" required>
        <small>Exp 340555</small>
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
  </form>
</div>