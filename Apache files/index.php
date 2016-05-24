<?php
    error_reporting(E_ALL & ~E_NOTICE);
    session_start();

    if (isset($_POST['submit'])) {
        $username = strip_tags($_POST['username']);
        $password = strip_tags($_POST['pass']);
		$dbCon = mysqli_connect("localhost", "$username", "$password", "memoriadb");
		mysqli_set_charset('utf8', $dbCon);

    if (mysqli_connect_errno()) {
        echo "Αποτυχία σύνδεσης";
    }else{
		$goON = true;
	}
         if ($goON) {
            $query = "select concat(citizenName,' ', citizenSurname) as fullname from GEN_citizens join GEN_citizenSurnames using (citizenID) join GEN_citizenNames using (citizenID) join PS_publicServantsSpecialties on GEN_citizens.citizenID = PS_publicServantsSpecialties.stuffID where memoria_user in (select CURRENT_USER()) order by citizenSurname, citizenName";
            $img_query = "select citizenPicture
from GEN_citizens join PS_publicServantsSpecialties on GEN_citizens.citizenID = PS_publicServantsSpecialties.stuffID
where memoria_user = CURRENT_USER()";
			$response = mysqli_query($dbCon, $query);
			$img_response = mysqli_query($dbCon, $img_query);
			$img_final=mysqli_fetch_array($img_response);
			$_SESSION['citizenImage'] = $img_final;
			
    $row = mysqli_fetch_array($response);
       $_SESSION['username'] = $row['fullname'];

            $_SESSION['id'] = $username;
            header('Location: main_panel.php');
		 }
    }
?>

<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8"/>
      <title>Memoria</title>
      <link href="./css/index.css" type="text/css" rel="stylesheet" />
   </head>
   <body>
      <div class="login-page">
         <div class="form">
            <h1>
            Memoria
            <h1/>
            <form class="login-form" action="index.php" method="post">
               <input type="text" name="username" placeholder="όνομα χρήστη" autofocus/>
               <input type="password" name="pass" placeholder="κωδικός"/>
               <button type="submit" name="submit">Σύνδεση</button>
            </form>
         </div>
		  </div>
		  </body>
</html>