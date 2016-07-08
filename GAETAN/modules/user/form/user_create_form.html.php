<form action="modules/user/form/user_create_form_submit.php" method="post">
  <div class="form-group">
    <label for="name">name</label>
    <input type="name" name="name" class="form-control" id="name" placeholder="name">
  </div>
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" name="email" class="form-control" id="email" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="Password1">Password</label>
    <input type="password" name="password1" class="form-control" id="Password1" placeholder="enter Password">
  </div>
  <div class="form-group">
    <label for="Password2">Password</label>
    <input type="password" name="password2" class="form-control" id="Password2" placeholder="comfirm Password">
  </div>
  <div class="form-group">
  <div class="checkbox">
    <label>Rôles</label><br>
      <label for="role-admin">
        <input type="checkbox" name="rôles[0]"" value="admin" id="role-admin">admin </label><br>
     <label for="role-journalist">
        <input type="checkbox" name="rôles[1]" value="journalist" id="role-journalist">journalist 
      </label><br> 
      <label for="role-webmaster">
        <input type="checkbox" name="rôles[2]" value="webmaster" id="role-webmaster">webmaster 
      </label><br>
      <label for="role-rédac-chef">
        <input type="checkbox" name="rôles[3]" value="redac-chef" id="role-redac-chef">Jonas Johnson 
      </label><br> 
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>