<?php
  require_once('db.php');
  require_once('login.php');
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="author" content="nathanchrs">

    <title>ARC Training Day 6 - Home</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">

  </head>

  <body>

    <div class="container">

      <h1>ARC Training <small>Day 6</small></h1>
      <hr>

      <?php
        $username = $_POST['username'] || '';
        $password = $_POST['password'] || '';

    		if ( valid_login($username, $password) ) {
    	?>

        <h3>
          Selamat datang, <?php echo $_POST['username']; ?>
        </h3>

      <table class="table">
        <tr>
          <th>Username</th>
          <th>Bio</th>
        </tr>

        <?php
            $stmt = $db->query('SELECT * FROM users');
     
            while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo '<tr><td>' . $row['username'] . '</td><td>' . $row['bio'] . '</td></tr>';
            }
        ?>
      </table>

      <?php
    		} else {
    	?>

        <h3>
          Username atau password salah.
        </h3>

      <?php
        }
      ?>
      

      <a href="index.php">Kembali</a>

    </div>

  </body>
</html>
