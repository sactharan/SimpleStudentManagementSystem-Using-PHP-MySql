<?php 

include "config.php";

$sql = "SELECT * FROM users";

$result = $conn->query($sql);

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
    <div class="container">

<h2>Students</h2>

<table class="table">

<thead>

<tr>

<th>ID</th>

<th>First Name</th>

<th>Last Name</th>

<th>Email</th>

<th>Gender</th>

<th>Action</th>

</tr>

</thead>

<tbody> 

<?php

    if ($result->num_rows > 0) {

        while ($row = $result->fetch_assoc()) {

?>

            <tr>

            <td><?php echo $row['id']; ?></td>

            <td><?php echo $row['firstname']; ?></td>

            <td><?php echo $row['lastname']; ?></td>

            <td><?php echo $row['email']; ?></td>

            <td><?php echo $row['gender']; ?></td>

            <td><a class="btn btn-info" href="update.php?id=<?php echo $row['id']; ?>">Edit</a>&nbsp;<a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>

            </tr>                       

<?php       }

    }

?>                

</tbody>

</table>

</div> 
    </main>
  </body>
</html>