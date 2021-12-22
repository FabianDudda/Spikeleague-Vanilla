console.log("add-match.js has started...");

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

// FORM: ADD MATCH
//#region Execute this function, when the form with the class="add-match" is submitted.
$('form.add-match').on('submit', function() 
{
  var that = $(this),           // Save this form.
  url = that.attr('action'),    // Save the action of this form. ("ajax.php")
  method = that.attr('method'), // Save the method of this form. ("post")
  data = {};                    // Create an empty object. 

  // Loop through all input-elements with a name tag.
  that.find('[name]').each(function(index, value) 
  {
    var that = $(this),         // Save this input-element.
    name = that.attr('name'),   // Save the name of this input-element.
    value = that.val();         // Save the value of this input-element.

    data[name] = value;         // Save the value of this input-element in the data object.
  });
  //#region console.log()
    // console.log(data);
    // console.log(data.team1_points);
    // console.log(data.team2_points);
    // console.log(data.team1_player1);
    // console.log(data.team1_player2);
    // console.log(data.team2_player1);
    // console.log(data.team2_player2);
  //#endregion

  if (data.team1_points && data.team2_points) 
  {
    if (!isNaN(data.team1_points) && !isNaN(data.team2_points)) 
    {
      if ((data.team1_player1 != data.team1_player2) && (data.team2_player1 != data.team2_player2) && (data.team1_player1 != data.team2_player1) && (data.team1_player2 != data.team2_player2) && (data.team1_player1 != data.team2_player2) && (data.team1_player2 != data.team2_player1)) 
      {
        $.ajax({
          url: url,                   
          method: method,             
          data: data,                 
          success: function(response) {
            //console.log(response);
          }
        });
  
        function reload() {
          window.location.reload();
        }
        setTimeout(reload, 500); 
      }
      else 
      {
        window.alert("Each player is only allowed to play once per game :(");
      } 
    }
    else 
    {
      window.alert("Match points have to be numbers :("); 
    }
  }
  else 
  {
    window.alert("Missing some match points :("); 
  }
  return false;
});
//#endregion
