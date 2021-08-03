<?php
//for(initialisation,condition, increase/decrease)
print "<h2><u>For loop example</u></h2>";
for ($num1=1;$num1<=10;$num1++){
    print "<b>The count is:</b>".$num1."<br>";
}

//while loop

print "<h2><u>While loop example</u></h2>";

$num2=10;
while ($num2<=20){
    print "<b>The count is:</b>".$num2."<br>";
    $num2++;
}
//do while loop

print "<h2><u> Do While loop example</u></h2>";

$num3=30;
do{
    print "<b>The count is:</b>".$num3."<br>";
    $num3--;
}
while($num3>=0);

// break for terminating a code example

print "<h2><u>For break example</u></h2>";
for ($num4=1;$num4<=10;$num4++){
    print "<b>The count is:</b>".$num4."<br>";
    if ($num4==6){
        break;
    }
}
// continue for skipping a code example

print "<h2><u>For skipping code in example</u></h2>";
for ($num5=1;$num5<=10;$num5++){
 if ($num5==3|| $num5==5|| $num5==7){
     continue;
 }
    print "<b>The count is:</b>".$num5."<br>";
}





