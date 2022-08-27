<!DOCTYPE html>
<html>
  <head>
    <title>Pure HTML CSS Admin Template</title>
    <meta name="robots" content="noindex" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.5" />
    <link rel="stylesheet" href="admin.css" />
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
      Main
    </main>
  </body>
</html>
