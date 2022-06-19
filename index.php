<?php   

//echo 2+2;

//Functions

function greet($name, $color){
    echo "<p>Hi my mame is $name and my favourite color is $color</p>";
}
greet('Lailah', 'green');
greet('Larry', 'blue');

function myFunction(){
    //echo 2+2;
    echo "<p>Welcome to PHP</p>";
}

myFunction();
myFunction();
myFunction();

//Arrays
$myName = "Lailah";
echo "<p>My name is $myName</p>";

//multiple values in  a single array
$names = array('Lailah', 'Jane', 'Oliver', 'Max');
echo "<p>My name is $names[3]</p>";

//Looping
// while loop
$count = 1;
while($count <= 100){
    echo "<li>$count</li>";
    $count++;
}

//loop through array $names
$count = 0; //arrays are 0 based
while($count < count($names)){ //count() -php fn counts the whole variable automatically
    echo "<li>Hi, my name is $names[$count]</li>";
    $count++;
}

?>
<!--<h1> <?php  //bloginfo('name');   ?></h1>