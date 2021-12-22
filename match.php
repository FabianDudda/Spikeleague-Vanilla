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

  <title>Add Match</title>
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
      Add Match
    </div>
    <!-- (RIGHT) BUTTON  -->
    <div>
      <span class="material-icons-outlined">
        settings
      </span>
    </div>
  </div>

  <!-- CONTENT CONTAINER -->
  <div class="col-12 content-container-add-match">
    <div class="row">
     <div class="col-8">
     
      <!-- ADD MATCH -->
        <div class="add-match-container">
          <form action="backend/add-match.php" method="post" class="add-match">
            
            <div class="add-match-row">

              <!-- Team 1 -->
              <div class="add-match-team-1">
                <b>TEAM 1</b>
                <select name="team1_player1" id="team1_player1" class="add-match-select-player-team-1">
                  <!-- <option> Username </option>-->
                </select>
                <select name="team1_player2" id="team1_player2" class="add-match-select-player-team-1">
                  <!-- <option> Username </option>-->
                </select>
                <select name="team1_points" class="add-match-points-team-1">
                  <option value="" disabled selected> 0 </option>
                  <option value="00"> 0 </option>
                  <option value="1">  1 </option>
                  <option value="2">  2 </option>
                  <option value="3">  3 </option>
                  <option value="4">  4 </option>
                  <option value="5">  5 </option>
                  <option value="6">  6 </option>
                  <option value="7">  7 </option>
                  <option value="8">  8 </option>
                  <option value="9">  9 </option>
                  <option value="10"> 10 </option>
                  <option value="11"> 11 </option>
                  <option value="12"> 12 </option>
                  <option value="13"> 13 </option>
                  <option value="14"> 14 </option>
                  <option value="15"> 15 </option>
                  <option value="16"> 16 </option>
                  <option value="17"> 17 </option>
                  <option value="18"> 18 </option>
                  <option value="19"> 19 </option>
                  <option value="20"> 20 </option>
                  <option value="21"> 21 </option>
                </select> 
              </div>

              <div class="add-match-vs">  
                <b>VS</b>  
              </div>
            
              <!-- Team 2 -->
              <div class="add-match-team-2">
                <b>TEAM 2</b>

                <select name="team2_player1" id="team2_player1" class="add-match-select-player-team-2">
                  <!-- <option> Username </option>-->
                </select>  

                <select name="team2_player2" id="team2_player2" class="add-match-select-player-team-2">
                  <!-- <option> Username </option>-->
                </select>

                <select name="team2_points" class="add-match-points-team-2">
                  <option value="" disabled selected> 0 </option>
                  <option value="00"> 0 </option>
                  <option value="1">  1 </option>
                  <option value="2">  2 </option>
                  <option value="3">  3 </option>
                  <option value="4">  4 </option>
                  <option value="5">  5 </option>
                  <option value="6">  6 </option>
                  <option value="7">  7 </option>
                  <option value="8">  8 </option>
                  <option value="9">  9 </option>
                  <option value="10"> 10 </option>
                  <option value="11"> 11 </option>
                  <option value="12"> 12 </option>
                  <option value="13"> 13 </option>
                  <option value="14"> 14 </option>
                  <option value="15"> 15 </option>
                  <option value="16"> 16 </option>
                  <option value="17"> 17 </option>
                  <option value="18"> 18 </option>
                  <option value="19"> 19 </option>
                  <option value="20"> 20 </option>
                  <option value="21"> 21 </option>
                </select> 
              </div>

            </div>

            <div class="add-match-row">
              <input class="btn-1" type="submit" value="ADD"> 
            </div>
      
          </form>
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
  <script type="text/javascript" src="frontend/js/add-match.js"></script>
</body>



</html>