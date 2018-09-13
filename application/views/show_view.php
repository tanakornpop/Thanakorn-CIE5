<?php 
		include "menu.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 97%;
    margin-top: 20px;
    

}
 label{
	font-size: 40px;
	margin-top: 15px;

}
#customers td, #customers th {
    border: 0.5px solid #ddd;
    padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #FF6699;
    color: white;
}
</style>
</head>
<body>
<center><label>Member Information</label></center>
<div class="container">
		<center><table id="customers">

<thead>
	
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Address</th>
			<th>Email</th>
			<th>Tel</th>
			<th>User</th>
			<th>Password</th>
			<th>Status</th>
			<th colspan="2">Edit</th>
		</tr>
</thead>
    <?php foreach ($rs as $r){ ?>
    <tbody>
      <tr>
        <td><?php echo $r['id']; ?></td>
        <td><?php echo $r['name']." "." ".$r['lastname']; ?></td>
        <td><?php echo $r['address']; ?></td>
        <td><?php echo $r['email']; ?></td>
        <td><?php echo $r['tel']; ?></td>
        <td><?php echo $r['username']; ?></td>
        <td><?php echo $r['password']; ?></td>
        <td><?php echo $r['status']; ?></td>
        <td><?php echo anchor("http://localhost/cifs/index.php/member/edit/".$r['id'],"Edit");?></td>
        <td><?php echo anchor("http://localhost/cifs/index.php/member/del/".$r['id'],"Delete",array("onclick"=>"return confirm('Are you sure ????');"));?></td>
      </tr>
  </tbody>
 <?php   }  ?>

	</table>
</div>
</center>

	</body>
	</html>