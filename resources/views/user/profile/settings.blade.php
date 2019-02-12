<form>
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputEmail4">Email</label>
      <input type="text" readonly class="form-control" id="inputEmail4" value="{{$userData['email']}}">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Name</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="Name" value="{{$userData['name']}}">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Surname</label>
      <input type="text" class="form-control" id="inputPassword4" placeholder="{{$userData['surname']}}">
    </div>
  </div>
    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Phone</label>
      <input type="tel" class="form-control" id="inputEmail4" placeholder="888 888 8888" pattern="[0-9]{3} [0-9]{3} [0-9]{4}" maxlength="12"  title="Ten digits code" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Birth Date</label>
      <input type="date" class="form-control" id="inputPassword4" placeholder="Surname">
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" name="sex" type="radio" >
      <label class="form-check-label" for="gridCheck">
        Mr
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" name="sex" type="radio" >
      <label class="form-check-label" for="gridCheck">
        Mss
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Save</button>
</form>