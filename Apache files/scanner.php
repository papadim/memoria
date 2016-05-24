<?php
    session_start();

    if(isset($_SESSION['id'])) {
        $username = $_SESSION['username'];
		$citizenImage = $_SESSION['citizenImage'];
        $userId = $_SESSION['id'];
    } else {
        header('Location: index.php');
        die();
    }

?>

<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8"/>
      <title>scanner</title>
      <link href="./css/scanner.css" type="text/css" rel="stylesheet" />
   </head>
   <body>
      <div class="header">
         <div class="user">
            <img class="user_avatar" <?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $citizenImage['citizenPicture'] ).'"' ?>>
            <div class="user_info">
               <p> <?php header('Content-Type: text/html; charset=utf-8'); echo $username ?><br>Υπηρεσία</p>
            </div>
         </div>
         <div class="page_title">
            <h1>
            Αναζήτηση πολίτη
            <h1/>
         </div>
         <div class="logout_and_timer" onclick="location.href = 'logout.php';"><button>Αποσύνδεση</button></div>
      </div>
      <div class="main_body">
         <div class="message_to_user" >
            <h2>
            Παρακαλώ σαρώστε την κάρτα πολίτη
            <h2/>
         </div>
         <div class="loading_icon">
            <input type="image" src="./images/Loading_icon.gif"  background="white" />
         </div>
         <div class="return_button" >
            <img class="return_button" src="./images/arrow.png" onclick="location.href = 'main_panel.php';">
         </div>
      </div>
   </body>
</html>


