<?php
//functions
// a function with no arguments

print "<h3><u>Function with no arguments</u></h3>";
function displayText(){
    print "I am a function with no arguments";
}

//A function calling to display the result
displayText();

// A function with arguments example
print "<h3><u>Function with  arguments</u></h3>";
function displayText1($txt){
    print $txt."<br>";
}
//function calling
displayText1("I am a single line of text");
displayText1("I am  another line of text");
displayText1("I am yet another line of text");
displayText1("I am still another line of text");

//using the return keyword to return a value in a function
print "<h3><u>Using return keyword</u></h3>";
function addNumbers($num1,$num2,$num3){
    return $num1+$num2+$num3;
}
function subtractNumbers($num1,$num2,$num3){
    $difference=$num1-$num2-$num3;
    return $difference;
}
//results
print "<b>Sum:</b>".addNumbers(45,67,13)."<br>";
print "<b>Difference</b>".subtractNumbers(45,15,13)."<br>";
