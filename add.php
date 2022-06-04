<!DOCTYPE html>
<html lang="en">

<!-- https://www.webdevelopmentinstitute.com/blog/crud-using-ajax-in-php -->

<head>
  <title>Add Data Using AJAX</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container py-5">
  <h2>Add Blog</h2>
  <p class="text-right"><a href="index.php" class="btn btn-primary">View All Blogs</a></p>
  <form>
    <div class="form-group">
      <label for="email">FirstName:</label>
      <input type="text" class="form-control" id="fname">
    </div>
    <div class="form-group">
      <label for="email">LastName:</label>
      <input type="text" class="form-control" id="lname">
    </div>
    <div class="form-group">
      <label for="email">Gender:</label>
      <input type="text" class="form-control" id="gender">
    </div>
    <div class="form-group">
      <label for="email">Country:</label>
      <input type="text" class="form-control" id="country">
    </div>
    <div class="form-group">
      <label for="email">Age:</label>
      <input type="text" class="form-control" id="age">
    </div>
    <div class="form-group">
      <label for="email">Date:</label>
      <input type="text" class="form-control" id="date">
    </div>
    <div class="form-group">
      <label for="email">EmployeeID:</label>
      <input type="text" class="form-control" id="empid">
    </div>
  
    <button type="button" id="save" class="btn btn-primary">Submit</button>
  </form>
</div>


<script>
$('#save').click(function () {

$fname = $('#fname').val();
$lname = $("#lname").val();
$gender = $("#gender").val();
$country = $("#country").val();
$age = $("#age").val();
$date = $("#date").val();
$empid = $("#empid").val();



$.ajax({url:"insert.php",
method:"POST",
data:{fname:$fname,
      lname:$lname,
      gender:$gender,
      country:$country,
      age:$age,
      date:$date,
      empid:$empid},
success:function(dataabc){
  window.location.href="index.php";
}});


});



</script>


</body>
</html>
