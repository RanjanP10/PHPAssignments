<?php
//***********Ranjan Patel-8622791********* */

// *********************PART-3*****************************************
$file1 = explode(" ","Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum doloreeu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,sunt in culpa qui officia deserunt mollit anim id est laborum");
  sort($file1); // sort function will sort words in orders

    $clength = count($file1); // count will count all words in array
    echo "<h3><u> Result of A.....................</u></h3>";
    echo "<h3> (static text)Alphabetically arrange string.........<br></h3>";
    for($x = 0; $x < $clength; $x++) {
        echo $file1[$x]." "; // display array value
       
    }



function findduplicate($text1){ // function to find string has duplicate char. 
    $text = strtolower($text1); // convert string to lower case
    for($i = 0;$i<strlen($text);$i++){ // for loop will continue till charactors end in string by finding string length(using strlen function) 
        //will get one charactor from string
        for($j = $i + 1;$j < strlen($text);$j++){ // will get next charactor
            if($text[$i] == $text[$j]){ // compare two char.
                return true; // return true if char. are same
            }
        }
    }
}

if($_SERVER['REQUEST_METHOD']=='POST'){
if(!empty($_POST['word'])) //  checking textbox has value or not
{ 
    $str = $_POST['word'];
    echo"-----------------------------------------------------------------";
    echo "<br><BR>original string : ".$str."<br><br>"; // just displaying textbox value
    $words= explode(" ",$str); // explode function will separate textbox sentance in words as array
    sort($words); // sort function will sort words in orders

    $clength = count($words); // count will count all words in array
    echo "<h3><u>(Text from textbox)Alphabetically arrange string.........<br></u></h3>";
    for($x = 0; $x < $clength; $x++) {
        echo $words[$x]; // display array value
        echo "<br>";
    }

    echo "<br><br><h3><u> Result of B.....................</u></h3><br>";
    $result = findduplicate($_POST['word']);  // function calling and will return true if char. matches
    if($result == "true"){ // if result is true than message will display

       
        echo " <strong class='error'>duplicate character in string...</strong>";

    }
    else{
     echo "<strong > No duplicate character in string...</strong>";
    }
}
else{
    echo "<p class='error'>Please enter some text..... and see magic </p>";
}


}   
?>

<html>
<head>
	
	<style type="text/css">
	
        .textbox{
            padding:10px;
        }
        .button{
            
            padding:10px;
            
        }
        .error{

            color:red;
        }
      
	</style>
</head>
<body>

<form method="POST" action="" name="sticky form">
    <div class="textbox">
     Enter Text: <input type="text" name="word">
    
	<div class="button"><input type="submit" name="submit"></div>
</form>

</body>
</html>







