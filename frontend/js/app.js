console.log("app.js has started...");



// DISPLAY: USER INFO
//#region 

// Save the user values in variables.
let user_name     = document.getElementById("display-user-name").textContent;
let user_mail     = document.getElementById("display-user-mail").textContent;
let user_password = document.getElementById("display-user-password").textContent;
let user_role     = document.getElementById("display-user-role").textContent;
let user_uid      = document.getElementById("display-user-uid").textContent;

// Get the span elements by ID.
let display_user_name     = document.getElementById("display-user-name");
let display_user_mail     = document.getElementById("display-user-mail");
let display_user_password = document.getElementById("display-user-password");
let display_user_role     = document.getElementById("display-user-role");
let display_user_uid      = document.getElementById("display-user-uid");

// Set the innerHTMl of the span elements.
display_user_name.innerHTML     = "<b>Username:</b>"  + " " + user_name;
display_user_mail.innerHTML     = "<b>Mail:</b>"      + " " + user_mail;
display_user_password.innerHTML = "<b>Password:</b>"  + " " + user_password;
display_user_role.innerHTML     = "<b>Role:</b>"      + " " + user_role;
display_user_uid.innerHTML      = "<b>Unique ID:</b>" + " " + user_uid;

//#endregion

/* ================================================================================================= */
/* ======================================== XMLHTTP-REQEUST ======================================== */
/* XMLHttpRequest (XHR) objects are used to interact with servers. You can retrieve data from a URL  */
/* without having to do a full page refresh. This enables a Web page to update just part of a page   */
/* without disrupting what the user is doing. XMLHttpRequest is used heavily in AJAX programming.    */
/* ================================================================================================= */

// // GET USER NAME FOR THE DROPDOWN LIST OF PLAYER
//#region xmlHttpRequest: Get user_name [from mysql-table 'users'] (get-player.php)
xmlhttp_get_player = new XMLHttpRequest();                                    // 1: New request object.
xmlhttp_get_player.open("GET","./backend/get-player.php",true);	              // 2: Initializes a newly-created request, or re-initializes an existing one. 'true' indicate to perform the operation asynchronously.
xmlhttp_get_player.send();	                                                  // 3: Sends the request. If the request is asynchronous (which is the default), this method returns as soon as the request is sent.

xmlhttp_get_player.onreadystatechange = function()                            // 4: This is where you handle what to do with the response.
{
  if (xmlhttp_get_player.readyState == 4 && xmlhttp_get_player.status == 200) // 4.1: Check that everything is done.
  {	// 4.2: Get the response					    
    document.getElementById("team1_player1").innerHTML = xmlhttp_get_player.responseText; 
    document.getElementById("team1_player2").innerHTML = xmlhttp_get_player.responseText; 
    document.getElementById("team2_player1").innerHTML = xmlhttp_get_player.responseText; 
    document.getElementById("team2_player2").innerHTML = xmlhttp_get_player.responseText; 
  }
}
//#endregion