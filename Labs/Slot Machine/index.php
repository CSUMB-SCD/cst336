<?php 
$symbols = array("./img/bell.png", "./img/cherry.png", "./img/grape.png", "./img/lemon.png", "./img/orange.png", "./img/plum.png", "./img/seven.png", "./img/strawberry.png", "./img/watermelon.png");
$n1 = rand(0,count($symbols)-1);
$n2 = rand(0,count($symbols)-1);
$n3 = rand(0,count($symbols)-1);
$n4 = rand(0,count($symbols)-1);

echo '<img src="' . $symbols[$n1] . '" style=' . '"display:inline;"/>';
echo '<img src="' . $symbols[$n2] . '" style=' . '"display:inline;"/>';
echo '<img src="' . $symbols[$n3] . '" style=' . '"display:inline;"/>';
echo '<img src="' . $symbols[$n4] . '" style=' . '"display:inline;"/>';

echo '<br>';

if($n1 == $n2 && $n1 == $n3)
{
    echo '<p><b>Congratulations!</b> you win!</p>';
}
else if($n1==$n2 && $n1==$n4)
{
    echo '<p><b>Congratulations!</b> you win!</p>';
}
else if($n1==$n3 && $n2==$n4)
{
    echo '<p><b>Congratulations!</b> you win!</p>';
}
else if($n2==$n1 && $n2 == $n3){
    echo '<p><b>Congratulations!</b> you win!</p>';
}
else if($n2==$n1 && $n2 == $n4)
{
    echo '<p><b>Congratulations!</b> you win!</p>';
}
else if($n2==$n3 && $n2==$n4)
{
    echo '<p><b>Congratulations!</b> you win!</p>';
}
else if($n3==$n1 && $n3==$n2)
{
    echo '<p><b>Congratulations!</b> you win!</p>';
}
else if($n3 == $n1 && $n3 == $n4)
{
    echo '<p><b>Congratulations!</b> you win!</p>';
}
else if($n3==$n2 && $n3==$n4)
{
    echo '<p><b>Congratulations!</b> you win!</p>';
}
else if($n4==$n1 && $n4==$n2)
{
    echo '<p><b>Congratulations!</b> you win!</p>';
}
else if($n4 == $n1 && $n4==$n3)
{
    echo '<p><b>Congratulations!</b> you win!</p>';
}
else if($n4==$n2 && $n4 == $n3)
{
    echo '<p><b>Congratulations!</b> you win!</p>';
}
else
{
    echo '<p>Try Again!</p>';
}

?>