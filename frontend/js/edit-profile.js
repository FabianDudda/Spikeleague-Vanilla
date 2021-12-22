console.log("edit-profile.js has started...");

// FORM: EDIT USER
//#region Execute this function, when the form with the class="edit-user" is submitted.
$('form.edit-user').on('submit', function() 
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
  //console.log(data);

  $.ajax({                      // Make an AJAX CALL
    url: url,                   // Paste URL
    method: method,             // Paste method
    data: data,                 // Paste data
    success: function(response) {
      //console.log(response); 

      if(response)              // If we get a response, username or usermail already exists.
      {
        alert("Username or mail already exists");
      }
      else                      // Else everything works and we reload the page.
      {
        function reload() {     // Timer to reload the page after 50 milliseconds
          window.location.reload();
        }
        setTimeout(reload, 100); 
      }
    }
  });
  return false;
});
//#endregion



