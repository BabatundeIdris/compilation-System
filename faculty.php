<!doctype html>
<html lang="en">
<html>
<head>
<title>TEACHERS</title>
</head>
	<style type= "text/css">
	
		#header{
		font-family: Times New Roman;
		background-color: pink;
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
<h1>TEACHERS PORTAL</h1>
<a href="interface.php"><h3>HOME</h3></a>
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
	<h2> LOGIN</h2>
	<hr> </hr>
 <form action= "connect4.php" method="POST">
	<br> Username: <input type="Username" name="Username" placeholder="Username" required="required" maxlength="25">
	<br>
	<br> Password: <input type="Password" name="Password" placeholder="Password" required="required" maxlength="25">
	<br>
	<br>
	 <input type="Submit" name="Submit" value="Login"/>
 </form>
 </td>
 </tr>
</table>
</center>
</body>

</html>