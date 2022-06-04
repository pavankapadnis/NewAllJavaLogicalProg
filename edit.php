<?php 

include_once('connection.php');

$id = $_GET['edit_id'];
$sql = "select * from posts where id='".$id."'";
$result = mysqli_query($conn,$sql);

$data=mysqli_fetch_array($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Update Using AJAX</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Edit Data</h2>
   <p class="text-right"><a href="index.php" class="btn btn-primary">View All Blogs</a></p>
  <form>
    <div class="form-group">
	    <input type="hidden" id="postid" value="<?php echo $_GET['edit_id'];?>">
      <label for="pwd">FirstName:</label>
      <textarea class="form-control" id="fnamenew"><?php echo $data['firstname'];?></textarea>
    </div>
	
	   <div class="form-group">
      <label for="pwd">LastName:</label>
      <textarea class="form-control" id="lnamenew"><?php echo $data['lastname'];?></textarea>
    </div>

    <div class="form-group">
      <label for="pwd">Gender:</label>
      <textarea class="form-control" id="gendernew"><?php echo $data['gender'];?></textarea>
    </div>

    <div class="form-group">
      <label for="pwd">Country:</label>
      <textarea class="form-control" id="countrynew"><?php echo $data['country'];?></textarea>
    </div>

    <div class="form-group">
      <label for="pwd">Age:</label>
      <textarea class="form-control" id="agenew"><?php echo $data['age'];?></textarea>
    </div>

    <div class="form-group">
      <label for="pwd">Date:</label>
      <textarea class="form-control" id="datenew"><?php echo $data['dates'];?></textarea>
    </div>

    <div class="form-group">
      <label for="pwd">EmpID:</label>
      <textarea class="form-control" id="empidnew"><?php echo $data['empid'];?></textarea>
    </div>
 
    <button type="button" id="save" class="btn btn-primary">Submit</button>
  </form>
</div>




<script>
$('#save').click(function () {

$id=$("#postid").val();

//alert($id);

$fname = $('#fnamenew').val();
$lname = $("#lnamenew").val();
$gender = $("#gendernew").val();
$country = $("#countrynew").val();
$age = $("#agenew").val();
$date = $("#datenew").val();
$empid = $("#empidnew").val();


$.ajax({url:"update.php",
method:"POST",
data:{postid:$id,
      fname:$fname,
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
