
<?php

// get age from user
$age = $_POST['age'];

//Display if user can watch r rated movies
if ($age >= 18) {
  echo "You can go see any movie you want alone.";

}

  // Display if user can watch PG or PG-13 movies
else if ($age >= 14) {
  echo "You can only see movies rated 14a and under";

}

  // Display if user can watch G rated movies
else if ($age >= 5) {
  echo "You can go see PG and G rated movies alone.";

}

  // Display is user can't watch any movie by themselves
else if ($age >= 0) {
  echo "You can not see any movie alone.";

}

// Display is the user does not enter a valid age
else {
  echo "Please enter a valid age.";    
}

?>