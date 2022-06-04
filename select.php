<?php
include("connection.php");

$sql="select * from posts";
$result = mysqli_query($conn,$sql);


echo ' <tr>
	 <th>Sr.No</th>
	 <th>FirstName</th>
	 <th>LastName</th>
	 <th>Gender</th>
	 <th>Country</th>
	 <th>Age</th>
	 <th>Date</th>
	 <th>EmpId</th>
	 <th>Edit</th>
	 <th>Delete</th>
	 </tr>';

$i=1;
while($data=mysqli_fetch_array($result))
{
	 echo '
	
		<tr>
			<td>'.$i.'</td>
			<td>'.$data['firstname'].'</td>
			<td>'.$data['lastname'].'</td>
			<td>'.$data['gender'].'</td>
			<td>'.$data['country'].'</td>
			<td>'.$data['age'].'</td>
			<td>'.$data['dates'].'</td>
			<td>'.$data['empid'].'</td>
			<td><a href="edit.php?edit_id='.$data['id'].'">edit</a></td>
			<td><a href="index.php?del_id='.$data['id'].'" >delete</a></td>
		</tr>';
	  
	  $i++;
}

?>
