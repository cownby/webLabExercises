<form method="POST">
    <label for="string">Test Input</label>
    <input type="text" name="string"  />
    <input type="submit" value="Submit" />
</form>

<?php
	$str = isset($_POST['string']) ? $_POST['string'] : '';
	try{
				
		if (isPalindrome($str))
			printP($str . ' is a palindrome');
		else	
			printP($str . ' is not a palindrome');


		if (isLowerCase($str))
			printP($str . ' is all lowercase');
		else	
			printP($str . ' is not lowercase');
			
		printP("last part of url (or the whole string if not a url): ". lastUrlToken($str));
		
		printP(emailName($str));

	 } catch (Exception $ex) {
	 	dump(ex);
	 }
?>

