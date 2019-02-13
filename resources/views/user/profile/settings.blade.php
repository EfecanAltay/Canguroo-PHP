
<?php
$gender = "";
$phone = "";
$birthday = "";
if(isset($userData['gender'])){
  $gender = $userData['gender'];
}
if(isset($userData['phone'])){
  $phone = $userData['phone'];
}
if(isset($userData['birthday'])){
  $birthday = $userData['birthday'];
}

?>
<form method="post" action="{{route('updateUserData')}}">
  @csrf
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputEmail4">Email</label>
      <input type="text" readonly class="form-control" id="inputEmail4" name="email" value="{{$userData['email']}}">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail4">Gender</label>
    <div class="form-check">
      <input class="form-check-input" name="gender" type="radio" value="mr"
            <?php echo ($gender == 'mr') ? 'checked="checked"' : ''; ?> />
      <label class="form-check-label" for="gridCheck" >
        Mr
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" name="gender" type="radio" value="mrs" 
        <?php echo ($gender == 'mrs') ? 'checked="checked"' : ''; ?> />
      <label class="form-check-label" for="gridCheck" >
        Mrs
      </label>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Name</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="Name" name="name" value="{{$userData['name']}}" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Surname</label>
      <input type="text" class="form-control" id="inputPassword4" placeholder="Surname"  name="surname" value="{{$userData['surname']}}" required>
    </div>
  </div>
    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Phone</label>
      <input type="tel" class="form-control" id="inputEmail4" placeholder="(---) --- ----"  name="phone" value="{{$phone}}" pattern="[0-9]{3} [0-9]{3} [0-9]{4}" maxlength="12"  title="Ten digits code">
      <small>Exp 0555 555 55 55</small>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Birth Date</label>
      <input type="date" class="form-control" id="inputPassword4" name="birthday" value="{{$birthday}}" placeholder="BirthDay">
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Save</button>
</form>