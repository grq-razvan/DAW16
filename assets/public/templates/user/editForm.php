<div class="container">
<form method="post" id="updatePage" class="form">
  <input type="hidden" name="userID" value="<?php echo $_GET['id']; ?>">
  <fieldset class="form-group">
  </fieldset>
    <label for="username" id="nameLabel">Username</label>
    <input class="form-control" type="text" name="username"
    id="username" size="30" value="<?php echo $user->name?>" required/>
  <fieldset class="form-group">
    <label for="email" id="emailLabel">Username</label>
    <input class="form-control" type="text" name="email"
    id="email" size="30" value="<?php echo $user->email?>" required/>
  </fieldset>
  <fieldset class="form-group">
    <label for="firstname" id="firstNameLabel">Firstname</label>
    <input class="form-control" type="text" name="firstname"
     id="firstname" size="30" value="<?php echo $user->firstname?>" required/>
  </fieldset>
  <fieldset class="form-group">
    <label for="lastname" id="lastNameLabel">Lastname</label>
    <input class="form-control" type="text" name="lastname"
     id="lastname" size="30" value="<?php echo $user->lastname?>" required/>
  </fieldset>
  <fieldset class="form-group">
    <label for="address" id="addressLabel">Address</label>
    <input class="form-control" type="text" name="address"
     id="address" size="50" value="<?php echo $user->address?>" required/>
  </fieldset>
  <fieldset class="form-group">
    <label for="phone" id="phoneLabel">Phone</label>
    <input class="form-control" type="text" name="phone"
     id="phone" size="20" value="<?php echo $user->phone?>" required/>
  </fieldset>
  <fieldset class="form-group">
    <label for="description" id="descriptionLabel">Description</label>
    <textarea id="description" class="form-control" name="description"
    value="<?php echo $user->description?>" rows="4"></textarea>
  </fieldset>
  <fieldset class="form-group">
    <button class="btn btn-primary" id="submit" type="submit" name="submit" value="Send">Update</button>
  </fieldset>
</form>
</div>
