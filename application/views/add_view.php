<?php 
		include "menu.php"
?>
		<?php echo form_open('Member/add')?>
<!DOCTYPE html>
<html>
<head>
	<title></title>

<style> 
input[type=txt] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: none;
    border-bottom: 2px solid pink;
}
input[type=submit] {
    background-color: #FF66CC ;
    color: white;
    padding: 10px 10px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: center;
}

input[type=submit]:hover {
    background-color: #FF99CC;
}
</style>
</head>
<body>

	<form method="POST" action="<?=base_url();?>member/add">



			<center><table width="50%">
			<tr>
				<td>Name</td>
                <td><input class="" id="name" name="name" type="txt" placeholder="name"  data-validation-required-message="Please enter your id."></td>
			</tr>
			
			
			<tr>
				<td>Lastname</td>
                <td><input class="" id="lastname" name="lastname" type="txt" placeholder="lastname"  data-validation-required-message="Please enter your id."></td>			</tr>
			
			
			<tr>
				<td>Address</td>
                <td><input class="" id="address" name="address" type="txt" placeholder="address"  data-validation-required-message="Please enter your id."></td>
			</tr>
			
			
			<tr>
				<td>E-mail</td>
                <td><input class="" id="email" name="email" type="txt" placeholder="email"  data-validation-required-message="Please enter your id."></td>
			</tr>
			
			
			<tr>
				<td>Phone number</td>
                <td><input class="" id="tel" name="tel" type="txt" placeholder="tel"  data-validation-required-message="Please enter your id."></td>
			</tr>
			<tr>
				<td>Username</td>
                <td><input class="" id="username" name="username" type="txt" placeholder="username"  data-validation-required-message="Please enter your id."></td>
			</tr>
			
			<tr>
				<td>Password</td>
                <td><input class="" id="password" name="password" type="txt" placeholder="password"  data-validation-required-message="Please enter your id."></td>
			</tr>
			
			<tr>
				<td>Status</td>
                <td><input class="" id="status" name="status" type="txt" placeholder="status"  data-validation-required-message="Please enter your id."></td>
			</tr>
            <tr><td></td><td><input type="submit" value="Create"></td></tr>
			
		</table>
	</form>
</body>
</html>