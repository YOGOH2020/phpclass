<?php
// indexed arrays , associative and multidimensional
// index array

print "<h2><u>Indexed Arrays Example</u></h2>";
$cars=array(
    "Range Rover",//located at index 0
    "Land Cruiser",// located at index 1
    "Prado", //located at index 2
    "Amazon", //located at index 3
    "Vx", //located at index 4
    "Audi", //located at index 5
    "Bmw 7 Series", //located at index 6
    "Ford Ranger", // located at index 7
);
print "The following is a list of SUV cars";
print "<ol>";
for ($count=0;$count<=7;$count++){
    print "<li>" .$cars[$count] ."</li>";
}
print "</ol>";


// index array

print "<h2><u>Associate Arrays Example</u></h2>";
$person=array(
    "firstName"=>"Collins",
    "lastName"=>"Yogo",
    "Age"=>"28",
    "profession"=>"Software developer",
    "organisation"=>"Inceptor Kenya"
);
print "<b>Full Names:</b>" .$person["firstName"]."".$person["lastName"]."<br>";
print "<b>Age:</b>" .$person["Age"]."<br>";
print "<b>Job Title:</b>" .$person["profession"]. "<br>";
print "<b>Company Name:</b>" .$person["organisation"]. "<br>";

//multidimensional arrays
print "<h2><u>multidimensional Arrays Example</u></h2>";

$persons=array(
    array(
        "firstName"=>"Collins",
        "lastName"=>"Yogo",
        "Age"=>"28",
        "profession"=>"Software developer",
        "organisation"=>"Inceptor Kenya"
    ),
    array(
        "firstName"=>"Richard",
        "lastName"=>"Yogo",
        "Age"=>"54",
        "profession"=>"Retired",
        "organisation"=>"Inceptor Kenya"
    ),
    array(
        "firstName"=>"Goretty",
        "lastName"=>"Adhiambo",
        "Age"=>"36",
        "profession"=>"Software developer",
        "organisation"=>"Inceptor Kenya"
    ),
    array(
        "firstName"=>"Perez",
        "lastName"=>"Akinyi",
        "Age"=>"22",
        "profession"=>"Business owner",
        "organisation"=>"Inceptor Kenya"
    ),
    array(
        "firstName"=>"Anne",
        "lastName"=>"Akinyi",
        "Age"=>"4",
        "profession"=>"Student",
        "organisation"=>"Inceptor Kenya"
    )
);

for ($c=0;$c<=4;$c++){
    print "<b>Full Names:</b>" .$persons[$c]["firstName"]."".$persons[$c]["lastName"]."<br>";
    print "<b>Age:</b>" .$persons[$c]["Age"]."<br>";
    print "<b>Job Title:</b>" .$persons[$c]["profession"]. "<br>";
    print "<b>Company Name:</b>" .$persons[$c]["organisation"]. "<hr>";
}




