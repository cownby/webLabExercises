<?php
function CountHoles($str)
{
    $holeLookup = array (
        "A" => 1, "a" => 1,
        "B" => 2, "b" => 1,
        "O" => 1, "o" => 1);
    $count = 0;
    $chars = str_split($str,1);
    foreach ($chars as $char)
    {
        //if character exists in lookup table, use the associated value.
        // if undefined, then return 0
        // Appears this if construct returns 1 or 0, regardless of $holeLookup[$char] value
        //
        //echo 'charVal:' . $charVal . '<br/>';
        //echo 'holeLookup[$char]:' . $holeLookup[$char] . '<br/>';
        //$charVal = $holeLookup[$char] || 0;
        //if ($charVal)
        //	$count += $charVal;

        //any non-zero value evaluates to true
        if ($holeLookup[$char])
        {
            $count = $count + $holeLookup[$char];
        }
    }
    return $count;
}
function CountHolesNW($str){
    $holeCount = 0;
    $chars = str_split($str, 1);
    $hole_lookup = array(
        "B" => 2, "o" => 1
    );
    foreach($chars as $char){
        if(isset($hole_lookup[$char])){
            $holeCount += $hole_lookup[$char];
        }
    }
    return $holeCount;
}


function prSecondLargest_v1($a,$b,$c)
{

print "<p>inputs [". $a .",". $b .",". $c ."]   ";
    if ("integer" != gettype($a) or "integer" != gettype($b) or "integer" != gettype($c)) {
    print "Sorry, I can only handle integers. <br/>";
    }
    else {
    //is a in the middle?
    if (($a <= $b and $a >= $c or ($a<$c and $a>$b)))
    $middle = $a;
    //is b in the middle?
    elseif ( ($b <= $a and $b >= $c) or ($b <= $c and $b >= $a))
    $middle = $b;
    else
    $middle = $c;

    printf("'%d' is in the middle<br/>",$middle);

    }

    }

function isPalindrome($str)
{
	$trimmedStr = trim($str);
	if (empty($trimmedStr) || $trimmedStr != strrev($trimmedStr))
		return FALSE;
	else
		return TRUE;
		
}

function isLowerCase($str)
{
	$trimmedStr = trim($str);
	if (empty($trimmedStr) || $trimmedStr != strtolower ($trimmedStr))
		return FALSE;
	else
		return TRUE;
		
}

function lastUrlToken($url)
{
	$parts = explode("/",$url);
	return ($parts[(count($parts))-1]);
}

function emailName($str)
{
	if (strpos($str,"@"))
	{
		$parts = explode("@",$str);
		return ($parts[0]);		
	}
	else
		return ($str . " is not a valid email address");
}
