<?php 
  $conn_string = "host=ec2-54-235-108-217.compute-1.amazonaws.com port=5432 dbname=d3r0rcf2je8t76 user=bmqbbyzbyplbgb password=a18deed93ee2e22811f1743dd1db9d7d5b9d568f8bfaaa97ad1265cf72eba0a0";
  $dbconn4 = pg_connect($conn_string);
  if(isset($_POST['login'])){
    $uname = $_POST['umname'];
    $psw = $_POST['psw'];
    var_dump($uname);
    $sql = "SELECT * FROM account WHERE _username = '$uname' AND _password = '$psw'";
    $query = pg_query($dbconn4,$sql);
    $row = pg_num_rows($query);
    if($row == 1){
      echo "Login Successfully <3";
    }
    else{
      echo "Incorrect Data, please try again !!!";
    }
  }
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<style type="text/css">
  /* Bordered form */
form {
  border: 3px solid #f1f1f1;
}

/* Full-width inputs */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

/* Add a hover effect for buttons */
button:hover {
  opacity: 0.8;
}

/* Extra style for the cancel button (red) */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the avatar image inside this container */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

/* Avatar image */
img.avatar {
  width: 40%;
  border-radius: 50%;
}

/* Add padding to containers */
.container {
  padding: 16px;
}

/* The "Forgot password" text */
span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
    display: block;
    float: none;
  }
  .cancelbtn {
    width: 100%;
  }
}
</style>>
<body>
<form method="post">
  <div class="imgcontainer">
    <img src="img_avatar2.png" alt="Avatar" class="avatar">

  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button name='login' type="submit">Login</button>
</form>
</body>
</html>>
