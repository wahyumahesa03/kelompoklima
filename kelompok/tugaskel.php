<!DOCTYPE html>
<html>
<head>
	<title>tugas kelompok</title>
</head>
<style type="text/css">
	*{
			padding : 6px;
			font-family: arial;

			
		}
		img{
		width: 18%;
      height: 9%;
	}
		
		body{
			margin: 35px;
		}
		table{
			width: 100%;
			border-collapse: collapse;

		}
		div {
			width: 300px;
			/*border: 15px solid green;*/
			padding: 20px;
			margin : 20px;
  			background-color: #c9cbc9;
  			border: solid 2px black;
}
body{
	background-size: cover;
	background-attachment: fixed;
}

</style>
<body background="8.jpg">
	<center>
		<img src="2.png">
	<div>

	 <form action="" method="POST">
        <table>
        	<tr>
        		<p><b>LOGIN PABW 4G</b></p>
        	</tr>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username" placeholder="masukkan username anda "></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password" placeholder="masukkan password anda "></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="login" value="Log in">
                	<input type="checkbox" name="checkbox">Remember me
                </td>
            </tr>
            <tr>
            	<td></td>
            	<td><a href="">Forgot password? </a></td>
            </tr>
        </table>

    </form>
    <?php 
    	

    	if (isset($_POST['login'])) {
		 		$username =  $_POST['username'];
    			$password =  $_POST['password'];

		 		echo "selamat ".$username. ", anda berhasil login";
		 		
		 	}
     ?>
     </div>
    </center>
</body>
</html>