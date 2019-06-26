<?php error_reporting(E_ERROR | E_PARSE); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css?family=Catamaran|Questrial" rel="stylesheet">
    <!--Bootstrap css-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--Bootstrap JS-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!--Custom css-->
    <link rel="stylesheet" href="/photocopy/css/style.css">
    <!--Title Logo-->
    <link rel="icon" href="/photocopy/img/store.png" type="image/icon type">
    <title>Photocopy | Successful</title>
  </head>
  <body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "photo_copy";

      // Create connection
      $conn = new mysqli($servername, $username, $password, $dbname);
      // Check connection
      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      }

      $target = "/Applications/XAMPP/xamppfiles/htdocs/photocopy/files/";
      $target = $target.basename( $_FILES['Filename']['name']);

      //This gets all the other information from the form
      $Filename = basename( $_FILES['Filename']['name']);

      //Writes the Filename to the server
      if(move_uploaded_file($_FILES['Filename']['tmp_name'], $target)) {
      //Tells you if its all ok
      // echo "The file ". basename( $_FILES['Filename']['name']). " has been uploaded, and your information has been added to the directory";
      }
      else {
          //Gives and error if its not
          echo "Sorry, there was a problem uploading your file.";
      }

      $name       = $_POST['name'];
      $usn        = $_POST['usn'];
      $dept       = $_POST['dept'];
      $mobile     = $_POST['mobile'];
      $n_color    = $_POST['n_color'];
      $n_bw       = $_POST['n_bw'];
      $n_copies   = $_POST['n_copies'];
      $binding    = $_POST['binding'];
      $details    = $_POST['details'];
      $user_type  = $_POST['user_type'];
      $subject    = $_POST['subject'];
      $sem        = $_POST['sem'];
      $description= $_POST['desc'];
      $details    = $_POST['details'];


      if( $user_type ==  1 ) {
        $sql = "INSERT INTO printData (`name`, `usn`, `dept`, `mobile`, `n_color`, `n_bw`, `n_copies`, `binding`, `file_name`, `user_type`, `details`)
        VALUES ('$name' , '$usn', '$dept',$mobile, $n_color, $n_bw , $n_copies,'$binding', '$Filename', $user_type, '$details')";
      } else if( $user_type ==  2 ) {
        $sql = "INSERT INTO printData (`name`, `dept`, `mobile`, `n_color`, `n_bw`, `n_copies`, `binding`, `file_name`, `user_type`, `details`)
        VALUES ('$name' ,'$dept',$mobile, $n_color, $n_bw , $n_copies,'$binding', '$Filename', $user_type, '$details')";
      } else if ($user_type ==  3){
        $sql = "INSERT INTO printData (`name`, `dept`, `mobile`, `n_color`, `n_bw`, `n_copies`, `binding`, `file_name`, `user_type`, `details`)
        VALUES ('$name' ,'$dept',$mobile, $n_color, $n_bw , $n_copies,'$binding', '$Filename', $user_type, '$details')";
      } else if ( $user_type ==  4 ) {
        $sql = "INSERT INTO storeData (`name`, `subject`,`dept`,`sem`,`description`,`file`, `user_type`)
        VALUES ('$name' ,'$subject','$dept','$sem','$description','$Filename', $user_type)";
      }
      else if ( $user_type ==  5 ) {
        $sql = "INSERT INTO storeData (`dept`,`description`,`file`, `user_type`)
        VALUES ('$dept','$description','$Filename', $user_type)";
      }


      if ($conn->query($sql) === TRUE) {
          // echo "New record created successfully";
      } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
      }

      $conn->close();
    ?>
    <section id="main">
      <div class="container">
        <div id="logo">
          <a href="index.html"><img src="/photocopy/img/store.png" alt="logo" width="250px"></a>
          <h3>Photocopy <span>Shop</span></h3>
        </div>
        <div id="successful_bg">
          <div id="successful_text">
            <h1>Request Successful</h1>
            <?php if ($user_type <= 3 ) { ?>
              <h2>Collect your document after 15 minutes</h2>
            <?php } else  {?>
              <h2>File has been stored in the Shop</h2>
            <?php }?>
            <!-- <a href="display.php">Display</a> -->
          </div>
        </div>
      </div>
    </section>
    <section id="bottom">
      <div id="footer">
        © 2019 Gagan Prasad, Inc. All rights reserved.
      </div>
    </section>
  </body>
</html>
