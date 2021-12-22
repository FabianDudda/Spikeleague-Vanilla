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
  <title>Spike League</title>       
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

    <div class="row news-box">
      <div class="col-8">
        <h1>Spike League (v.0.1)</h1>
        <p>Hello, <?php echo $user_data['user_name']; ?> :) <a class="btn-1" href="logout.php">LOGOUT</a></p> 
      </div>
    </div>

    <div class="row news-box">
      <div class="col-8">
        <h2 style="text-align: center;">Season 1 ist vorbei!</h2>
        <div id="tablearea">
            <table id="table">
              <tr>
                <th onclick="sortTable(0)">User</th>
                <th onclick="sortTable(1)">WR</th>
                <th onclick="sortTable(2)">W</th>
                <th onclick="sortTable(3)">L</th>
                <th onclick="sortTable(4)">T</th>
              </tr>
              <tr>
                <td><div>Marius</div></td>
                <td><div>70.83</div></td>
                <td><div>17</div></td>
                <td><div>7</div></td>
                <td><div>24</div></td>
              </tr>
              <tr>
                <td><div>Markus</div></td>
                <td><div>66.67</div></td>
                <td><div>4</div></td>
                <td><div>2</div></td>
                <td><div>6</div></td>
              </tr>
              <tr>
                <td><div>Benny</div></td>
                <td><div>65.00</div></td>
                <td><div>13</div></td>
                <td><div>7</div></td>
                <td><div>20</div></td>
              </tr>
              <tr>
                <td><div>Nico</div></td>
                <td><div>63.79</div></td>
                <td><div>37</div></td>
                <td><div>21</div></td>
                <td><div>58</div></td>
              </tr>
              <tr>
                <td><div>Andre</div></td>
                <td><div>55.88</div></td>
                <td><div>19</div></td>
                <td><div>15</div></td>
                <td><div>34</div></td>
              </tr>
              <tr>
                <td><div>Carl</div></td>
                <td><div>41.54</div></td>
                <td><div>27</div></td>
                <td><div>38</div></td>
                <td><div>65</div></td>
              </tr>
              <tr>
                <td><div>Fabian</div></td>
                <td><div>36.07</div></td>
                <td><div>22</div></td>
                <td><div>39</div></td>
                <td><div>61</div></td>
              </tr>
              <tr>
                <td><div>Cem</div></td>
                <td><div>18.75</div></td>
                <td><div>3</div></td>
                <td><div>13</div></td>
                <td><div>16</div></td>
              </tr>
            </table>
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
  <script type="text/javascript" src="frontend/js/sort-table.js"></script>
  

  </body>
</html>