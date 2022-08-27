<?php 

include "config.php";

    if (isset($_POST['update'])) {

        $firstname = $_POST['firstname'];

        $user_id = $_POST['user_id'];

        $lastname = $_POST['lastname'];

        $email = $_POST['email'];

        $password = $_POST['password'];

        $gender = $_POST['gender']; 

        $sql = "UPDATE `users` SET `firstname`='$firstname',`lastname`='$lastname',`email`='$email',`password`='$password',`gender`='$gender' WHERE `id`='$user_id'"; 

        $result = $conn->query($sql); 

        if ($result == TRUE) {

            echo "Record updated successfully.";

        }else{

            echo "Error:" . $sql . "<br>" . $conn->error;

        }

    } 

if (isset($_GET['id'])) {

    $user_id = $_GET['id']; 

    $sql = "SELECT * FROM `users` WHERE `id`='$user_id'";

    $result = $conn->query($sql); 

    if ($result->num_rows > 0) {        

        while ($row = $result->fetch_assoc()) {

            $first_name = $row['firstname'];

            $lastname = $row['lastname'];

            $email = $row['email'];

            $password  = $row['password'];

            $gender = $row['gender'];

            $id = $row['id'];

        } 

    ?>
    <!DOCTYPE html>
<html>
  <head>
    <title>Pure HTML CSS Admin Template</title>
    <meta name="robots" content="noindex" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.5" />
    <link rel="stylesheet" href="admin.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  </head>
  <body>
    <!-- (A) SIDEBAR -->
    <div id="pgside">
      <!-- (A1) BRANDING OR USER -->
      <!-- LINK TO DASHBOARD OR LOGOUT -->
      <div id="pguser">
        <img src="potato.png"/>
        <i class="txt">ADMIN PANEL</i>
      </div>

      <!-- (A2) MENU ITEMS -->
      <a href="view.php" class="current">
        <i class="ico">&#9733;</i>
        <i class="txt">View Students</i>
      </a>
      <a href="create.php">
        <i class="ico">&#9728;</i>
        <i class="txt">Add Students</i>
      </a>
      <a href="index.php">
        <i class="ico">&#9737;</i>
        <i class="txt">Logout</i>
      </a>
    </div>

    <!-- (B) MAIN -->
    <main id="pgmain">
    <h2>Student Update Form</h2>

<form action="" method="post">

  <fieldset>

    <legend>Personal information:</legend>

    First name:<br>

    <input type="text" name="firstname" value="<?php echo $first_name; ?>">

    <input type="hidden" name="user_id" value="<?php echo $id; ?>">

    <br>

    Last name:<br>

    <input type="text" name="lastname" value="<?php echo $lastname; ?>">

    <br>

    Email:<br>

    <input type="email" name="email" value="<?php echo $email; ?>">

    <br>

    Password:<br>

    <input type="password" name="password" value="<?php echo $password; ?>">

    <br>

    Gender:<br>

    <input type="radio" name="gender" value="Male" <?php if($gender == 'Male'){ echo "checked";} ?> >Male

    <input type="radio" name="gender" value="Female" <?php if($gender == 'Female'){ echo "checked";} ?>>Female

    <br><br>

    <input type="submit" value="Update" name="update">

  </fieldset>

</form> 
    </main>
  </body>
</html>
<?php

} else{ 

    header('Location: view.php');

} 

}

?> 
