
<?php
$states= "Mississippi Alabama Texas Massachusetts Kansas";
$states1 = explode(' ',$states);

echo"<p style='color: blue;text-align:center;font-size:larger;'>Original Array : </p><br>";
foreach ($states1 as $i =>$i_value)
{
echo "<p style='color: black;text-align:center;font-size:medium;'>STATES[$i]=$i_value<br></p>";

}
foreach($states1 as $state)
{
if(preg_match('/xas$/', ($state)))
$statesArray[0] = ($state);
}
foreach($states1 as $state)
{
if(preg_match('/^k.*s$/i',($state)))
$statesArray[1]=($state);
}
foreach($states1 as $state)
{
if(preg_match('/^M.*s$/',($state)))
$statesArray[2] = ($state);
}
foreach($states1 as $state)
{
if(preg_match('/a$/',($state)))
$statesArray[3] = ($state);
}
echo "<br><p style='color: blue;text-align:center;font-size:larger;'>Resultant Array</p><br>";
foreach($statesArray as $i =>$i_value)
echo "<p style='color: black;text-align:center;font-size:medium;'>STATES[$i]=$i_value</p><br>";
?>