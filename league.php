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
  <title>League</title>
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
        League
    </div>
    <!-- (RIGHT) BUTTON  -->
    <div>
      <span class="material-icons-outlined">
        settings
      </span>
    </div>
  </div>

  <!-- CONTENT CONTAINER -->
  <div class="col-12 content-container">



    <!-- SEARCH STATS  

      <form action="backend/search-stats.php" method="post" class="search-stats">
        <div class="user-stats-container">

          <div class="user-stats-row">
            <h2>User Stats</h2>
            <span id="display-any-user-stats-user-uid"></span>
          </div>

          <div class="user-stats-row">
            <span id="display-any-user-win-rate">WR: 0.00%</span>
            <div id="display-win-defeat">
              (W/L)
              <span id="display-any-user-wins">0</span>-<span style="color: red;" id="display-any-user-defeats">0</span>
            </div>
            <span id="display-any-user-total-games">Total: 0</span>
          </div>

          <select name="display-any-stats-user-name" id="display-any-stats-user-name" class="display-any-stats-user-name">
            
          </select>

          <input class="btn-1" type="submit" value="Show"> 
          
        </div>
      </form>

    -->

    <div class="row">
     <div class="col-8">
       <div class="season-name">
       SEASON 2
       </div>
      </div>
    </div>
    <!-- TABLE -->
    <div class="row">
     <div class="col-8">
        <div id="tablearea">
        </div>
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
  <script type="text/javascript" src="frontend/js/view-league.js"></script>

</body>
</html>