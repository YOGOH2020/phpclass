<?php
//if elseif else example

$average=67.789;
if ($average>=80 && $average<=100)
{
    print "<b>Mean grade:</b>A";
}
else if ($average>=65 && $average<=79.9999){
    print "<b>Mean grade:</b>B";
}

else if ($average>=50 && $average<=64.9999){
    print "<b>Mean grade:</b>C";
}

else if ($average>=35 && $average<=49.9999){
    print "<b>Mean grade:</b>D";
}
elseif ($average>=0 && $average<=34.9999){
    print "<b>Mean grade:</b>E";
}
 else{
    print "<b>Mean grade:</b>Invalid";
}
