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
      <title>main_panel</title>
      <link href="./css/main_panel.css" type="text/css" rel="stylesheet" />
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
            Κεντρικό μενού
            <h1/>
         </div>
         <div class="logout_and_timer"><button onclick="location.href = 'logout.php';">Αποσύνδεση</button></div>
      </div>
      <div class="main_body" style="clear">
         <div class="history" style="float: left;">
            <p>Ενέργεια_1</p>
            <p>Ενέργεια_2</p>
            <p>Ενέργεια_3</p>
            <p>Ενέργεια_4</p>
            <p>Ενέργεια_5</p>
         </div>
         <div class="announcements" style="float: left;">
            <p>Ανακοίνωση_1</p>
            <p>Ανακοίνωση_2</p>
            <p>Ανακοίνωση_3</p>
            <p>Ανακοίνωση_4</p>
            <p>Ανακοίνωση_5</p>
         </div>
         <table class="buttons">
            <tr>
               <td><button onclick="location.href = 'scanner.php';">Εύρεση πολίτη</button></td>
            </tr>
            <tr>
               <td><button>Σύνθετη αναζήτηση</button></td>
            </tr>
            <tr>
               <td><button>Καταχώρηση</button></td>
            </tr>
            <tr>
               <td><button>Λοιπές ενέργειες</button></td>
            </tr>
         </table>
      </div>
   </body>
</html>


