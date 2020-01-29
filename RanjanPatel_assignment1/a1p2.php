<?php
//***********Ranjan Patel-8622791********* */

// *********************PART-2*****************************************
echo "<h3><br>*******************PART-2****************************</h3>";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

	$fname = $lname= $email = $phone='';

	if (empty($_POST['fname'])) { //  checking textbox has value or not 
		$fnameError = 'opps...Please write your first name.......'; // if not this message will display
    } 
    else{
        $fname = $_POST['fname']; //if is has the asign value to define variable
    }

    if (empty($_POST['lname'])) {
		$lnameError = 'opps...Please write your Last name.......';
    } 
    else{
        $lname = $_POST['lname'];
    }
	if (empty($_POST['email'])) {
		$emailError = 'opps...Please write your email id....';
    } 
    else{
        $email = $_POST['email'];
    }
    if (empty($_POST['phone'])) {
		$phoneError = 'opps...Please write your Contact number....';
    } 
    else{
        if(is_numeric($_POST['phone']))
        {
            $phone = $_POST['phone'];
        }
        else{
            $phoneError = 'only numbers allowed....';
        }
        
    }
}
?>

<html>
<head>
	
	<style type="text/css">
		#error {
			color:red; -
		}
        .textbox{
            padding:10px;
        }
        .button{
            
            padding:10px;
            
        }
      
	</style>
</head>
<body>

<form method="POST" action="" name="sticky form">
    <div class="textbox">
        First Name: <input type="text" name="fname" value="<?php if (isset($fname)) echo $fname; ?>">
        <span id="error"><?php if (isset($fnameError)) echo $fnameError ?></span><br>
    </div>
    <div class="textbox">
        Last Name: <input type="text" name="lname" value="<?php if (isset($lname)) echo $lname; ?>">
        <span id="error"><?php if (isset($lnameError)) echo $lnameError ?></span><br>
    </div>
    <div class="textbox">
        Email: <input type="text" name="email" value="<?php if (isset($email)) echo $email; ?>">
        <span id="error"><?php if (isset($emailError)) echo $emailError ?></span><br>
    </div>
    <div class="textbox">
        Contact Number: <input type="text" name="phone" value="<?php if (isset($phone)) echo $phone; ?>">
        <span id="error"><?php if (isset($phoneError)) echo $phoneError ?></span><br>
    </div>
	<div class="button"><input type="submit" name="submit"></div>
</form>

</body>
</html>