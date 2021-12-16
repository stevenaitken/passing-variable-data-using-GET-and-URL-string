<?php

//passing one variable
/*function checkMethod(){
    //check if the GET method was used and if the variable has been set
    if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET[ 'name' ]) ) {
    
    $name = $_GET[ 'name' ]; 

    echo '<p>Name: ' . $name . "</p>";
   
    }
    
    else{
    echo "No values recieved";
    //do something else if the $_GET request does not exist
    }
    
    }
*/
//passing two variables

function checkMethod(){
//check if the GET method was used and if the variable has been set
if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET[ 'name' ]) && isset($_GET[ 'postcode' ]) ) {

$name = $_GET[ 'name' ]; 
$postcode = $_GET[ 'postcode' ]; 

echo '<p>Name: ' . $name . "</p>";
echo '<p>Postcode: ' . $postcode . "</p>";



}

else{
echo "No values recieved";
//do something else if the $_GET request does not exist
}

}


?>