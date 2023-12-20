<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>badhon sen</h1>
    <?php
      $email = $_REQUEST["email"];
      $pass = $_REQUEST["password"];

      if($email == "sen@gmail.com"){
       if($pass == 12345) {
        echo "your login successful!";
       } 
       else{
           echo "unsucessful!";
       } 
      }
       else{
             echo "your email is uncorrect";
      }

    ?>
</body>
</html>
