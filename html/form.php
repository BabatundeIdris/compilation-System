<!doctype html>
<html lang="en">
<html>
<head>
<title>Admin</title>
</head>
	<style type= "text/css">
	
		#header{
		font-family: Times New Roman;
		background-color: purple;
		text-align: center;
		font-size: 20px;
		width: 1340px;
		height: 80px;
		padding: 2px;
		}
		body{
		background-color: #eee5de;
		}
		form{
		text-align: center;
		margin-right: 50px;
		}
		h2{
		font-family: Times New Roman;
		font-size: 20px;
		text-align: center;
		color: black;
		}
		table{
		border: 1px solid black;
		border-radius: 10px;
		text-align: center;
		padding: 0px;
		background-color: white;
		width: 500px;
		height: 300px;
		}
		input[type="Submit"]{ 
		float: right;
		margin-right: 220px;
		height: 25px;
		width: 100px;
		border: 1px solid black;
		border-radius: 5px;
		}
		
		input[type="text"]{
		border: 1px solid black;
		height: 25px;
		width: 200px;
		border-radius: 5px;
	}
</style>

<body> 
<div id="header">
<h1>NEW QUESTIONS</h1>
<a href="admin.php"><h3>LOG OUT</h3></a>
</div>
<br>
<br>
<br>
<br>
<br>
<center>	
<table>
    <tr>
	<td>
 <form action= "mali.php" method="POST">

 	
	<br> TEACHERS NAME:<br> <input type="text" name="day" required="required" maxlength="30">
	<br>
	<br> CLASS:<br> <input type="text" name="title" required="required" maxlength="12">
	<br>
	<br> SUBJECT:<br> <input type="text" name="sub" required="required" maxlength="15">
	<br>
	
	
	<br>
	 <input type="Submit" name="Submit" value="CHECK"/>
 </form>
 </td>
 </tr>
</tab>
</center>
</body>

</html>