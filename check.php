<?php
// We would initiate the form and make it submit to the same file the form is in.
//echo "<form name=\"boxes\" method=\"POST\" action=\"".$_SERVER['REQUEST_URI']."\">";

// Ask the user how many text boxes he wants
//echo "How many textboxes?";

// Display the text field
//echo "<input type=\"text\" name=\"textboxes\" />";

// This is where we display our textboxes
// Now, first check if there was a form submitted
//if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // The form was submitted
    // Now loop through the number to display the boxes

// Make sure we have a count number for the loop
$i = 1;

// Initiate the while loop
while ($i <=5) {
     // Now print the text box to the screen
     echo "<input type=\"textbox\" name=\"ashok".$i."\" />";

     // Make sure we add 1 to the count variable, otherwise we would have an infinate loop.
     $i++;
}
//}

// Display the submit button
echo "<input type=\"submit\" value=\"Submit\" />";

// Close the form
echo "</form>";

?>