function sortTable(n) {

    let table, rows, switching, i, x, y, should_switch, dir, switch_count = 0;
  
    table     = document.getElementById("table");
    switching = true;
    dir       = "asc";    // Set the sorting direction to ascending
    
    while (switching)     // Make a loop that will continue until no switching has been done
    {
      switching = false;  // Start by saying: no switching is done
      rows      = table.rows;
    
      for (i = 1; i < (rows.length - 1); i++) // Loop through all table rows (except the first, which contains table headers) 
      {
        should_switch = false;                // Start by saying there should be no switching
    
        // Get the two elements you want to compare, one from current row and one from the next
        x = rows[i].getElementsByTagName("TD")[n];
        y = rows[i + 1].getElementsByTagName("TD")[n];
            
        // If it is NOT a number:    xContent = x.textContent.toLowerCase()
        // Else (if it is a number): xContent = parseInt(x.textContent)
        let xContent=isNaN(parseInt(x.textContent))?x.textContent.toLowerCase():parseInt(x.textContent);
        let yContent=isNaN(parseInt(y.textContent))?y.textContent.toLowerCase():parseInt(y.textContent);
  
        // If xContent contains a '-', set it to 0 (for string comparison)
        xContent=(xContent=='-')?0:xContent;
        yContent=(yContent=='-')?0:yContent;
  
        // Check if the two rows should switch place, based on the direction, asc or desc
        if (dir == "asc") 
        {
          // If x > y, mark as switch and break the loop
          if (xContent > yContent) 
          {
            should_switch = true;
            break;
          }
        }
        else if (dir == "desc")
        {
          // If x < y, mark as switch and break the loop
          if(xContent < yContent) 
          {
            should_switch = true;
            break;
          }
        }
      }
      // If a switch has been marked, make switch and mark that a switch has been done
      if (should_switch) 
      {
        rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
        switching = true;
  
        switch_count++;
      }
      else 
      {
        // If no switch has been done AND the direction is "asc", set the direction to "desc" and run the while loop again
        if(switch_count == 0 && dir == "asc")
        {
          dir = "desc";
          switching = true;
        }
      }
    }
  }