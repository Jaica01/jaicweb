<?php
$title = 'Index';
require_once 'includes/header.php';
?>
<!--
    - First name
    - Last name
    - Date of birth (Use Date Picker)
    - Specialty (Database Admin, Software Developer, Web Administrator)
    - Email address
    - Contact Number
-->
<h1 class="text-center">Registration for It Conference </h1>

<form>
  <div class="form-group">
    <label for="exampleInputEmail1">FIRST NAME</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">LAST NAME</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>

  <form action="/action_page.php">
  <label for="birthday">Date of Birth:</label>
  <input type="date" id="birthday" name="birthday">

</form>
  </div>

  <br>
  <label for="exampleInputPassword1">SPECIALTY:</label>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Database Admin</label>
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Software Developer</label>
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Web Administrator</label>
  </div>


  <button type="submit" class="btn btn-primary">Submit</button>
</form>


<body>

<?php require_once 'includes/footer.php';
