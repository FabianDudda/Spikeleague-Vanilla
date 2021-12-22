<?php

session_start();

include("backend/db_connection.php");
include("backend/functions.php");

// Check, if the user is logged in.
$user_data = check_login($con);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="frontend/scss/styles.css">
  <title>Profile</title>
</head>
<body>
  
  <!-- TOP BAR CONTAINER -->
  <div class="col-12 top-bar-container">
    <!-- (LEFT) HAMBURGER MENU -->
    <div>
      <span class="material-icons-outlined">
        menu
      </span>
    </div>
    <!-- (CENTER) PAGE NAME -->
    <div>   
        Profile
    </div>
    <!-- (RIGHT) BUTTON  -->
    <div>
      <span class="material-icons-outlined">
        <a href="edit-profile.php">settings</a> 
      </span>
    </div>
  </div>

  <!-- CONTENT CONTAINER -->
  <div class="col-12 content-container">

  <!-- EDIT USER INFO -->
  <div class="row">
    <div class="col-8">
      <form action="backend/edit-user.php" method="post" class="edit-user">
        
        <div class="user-edit-container">
    
          <h2>Edit Profile</h2>

          <label for="user_name">Username</label>
          <input class="text-input" type="text" name="user_name" placeholder="Username" value="">
      
          <label for="user_mail">Mail</label>
          <input class="text-input" type="text" name="user_mail" placeholder="Mail" value="">   
        

          <label for="user_password">Password</label>
          <input class="text-input" type="text" name="user_password" placeholder="Password" value="">           

          <input type="text" name="user_role" style="display:none" value="<?php echo $user_data['user_role']; ?>">   
          <input type="text" name="user_uid"  style="display:none" value="<?php echo $user_data['user_uid'];  ?>">    
      
          <input class="btn-1" type="submit" value="Edit"> 
    
          </div>
        
      </form>
    </div>
  </div>


  </div>

  <!-- BOTTOM BAR CONTAINER -->
  <div class="col-12 bottom-bar-container">
      <div>
        <span class="material-icons-outlined">
          <a href="index.php">home</a> 
        </span>
      </div>
      <div>
        <span class="material-icons-outlined">
          <a href="league.php">emoji_events</a> 
        </span>
      </div>
      <div>
        <span class="material-icons-outlined">
          <a href="match.php">add_circle_outline</a> 
        </span>
      </div>
      <div>
        <span class="material-icons-outlined">
          <a href="community.php">groups</a> 
        </span>
      </div>
      <div>
        <span class="material-icons-outlined">
          <a href="view-profile.php">perm_identity</a> 
        </span>
      </div>
  </div>

  <!-- Embed JQuery -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

  <!-- Embed JavaScript file. -->
  <script type="text/javascript" src="frontend/js/edit-profile.js"></script>

</body>
</html>