<html>

                              <?php

                                $errors = array(
                                    1=>"Invalid user name or password, Try again",
                                    2=>"Please login to access this area"
                                  );

                                $error_id = isset($_GET['err']) ? (int)$_GET['err'] : 0;

                                if ($error_id == 1) {
                                        echo '<p class="text-danger">'.$errors[$error_id].'</p>';
                                    }elseif ($error_id == 2) {
                                        echo '<p class="text-danger">'.$errors[$error_id].'</p>';
                                    }
                               ?>

                             <head>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
 <meta charset="UTF-8">
    <title>Online Book Store</title>




        <link rel="stylesheet" href="css/style.css">

    <br>
	<br>
	<img src="mayangsari-logo.png" width="100" height="100" style="margin-left:450; margin-top:-25;"/><img src="workspace.png" width="80" height="100" style="margin-left:-200; margin-top:-50;"/><h1 align="center" style="margin-top: -65; margin-left:140">Office Management System</h1>

  </head>

  <body>

    <div class="wrapper">
	<div class="container">
		<form method="post" action="authentication.php">
		Username<br>
		<input type="text" name="username">
        Password<br>
		<input type="password" name="password"><br>
       <input type="submit" value="Login" name="submit">
		</form>
	</div>

	<ul class="bg-bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
</div>

  </body>
</html>
