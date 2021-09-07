<!DOCTYPE html>
<html>
<body>
 
<?php
ini_set('display_errors',0);
 
if( isset( $_REQUEST['calculate'] ))
{
$operator=$_REQUEST['operator'];
$n1 = $_REQUEST['first_value'];
$n2 = $_REQUEST['second_value'];
 
if($operator=="+")
{
$res= $n1+$n2;
}
if($operator=="-")
{
$res= $n1-$n2;
}
if($operator=="*")
{
$res =$n1*$n2;
}
if($operator=="/")
{
$res= $n1/$n2;
}
 
if($_REQUEST['first_value']==NULL || $_REQUEST['second_value']==NULL)
{
echo "<script language=javascript> alert(\"Please Enter Correct values.\");</script>";
}
}
?>
 
<form>
<table style="border:groove #00FF99">
 
<tr>
<td style="background-color:turquoise; color:black; font-family:'Times New Roman'">Enter Number</td>
<td colspan="1">
<input name="first_value" type="text" style="color:red"/></td>
</tr>
 
<tr>
<td style="color:red; font-family:'Times New Roman'">Select Operator</td>
<td>
<select name="operator" style="width: 63px">
<option>+</option>
<option>-</option>
<option>*</option>
<option>/</option>
</select></td>
</tr>
 
<tr>
<td style="background-color:turquoise; color:black; font-family:'Times New Roman'">Enter Number</td>
<td class="auto-style5">
<input name="second_value" type="text"  style="color:red"/></td> 
</tr>
 
<tr>
<td></td>
<td><input type="submit" name="calculate" value="Calculate" style="color:wheat;background-color:rosybrown" /></td>	 
</tr>
 
<tr>
<td style="background-color:turquoise;color:black">Output = </td>
<td style="color:darkblue"><?php echo $res;?></td>
</tr>	
 
</table>
</form>
 
</body>
</html>

<html>
<head>
<style>
table, tr, td ,th{
    border: solid green;
    text-align: center;
    font-size:15px;
    color:blue;
    border-collapse: collapse;
    background-color: cornsilk;
    border-radius:20%;
    padding:5px 10px 5px 10px;
}

table {
    margin: auto;
}

input,p{text-align:right;color:blue;}
</style>
</head>

<body>
<form action="" method="post">
<table>
<caption><h2>SIMPLE CALCULATOR</h2></caption>
<tr>
<td>first number:</td> <td><input type="text"name="num1"/></td>
<td rowspan="2"><input type="submit" name="submit" value="calculate" style="color:wheat;background-color:rosybrown"/></td>
</tr>

<tr>
<td>Second number:</td>
<td><input type="text" name="num2"/></td>
</tr>

</form>

<?php
if(isset($_POST['submit']))
{
$num1=$_POST['num1'];
$num2=$_POST['num2'];
if(is_numeric($num1) and is_numeric($num2))
{
echo"<tr><td>addition:     </td><td> <p>".($num1+$num2)."</p></td>";
echo"<tr><td>subtraction:  </td><td> <p>".($num1-$num2)."</p></td>";
echo"<tr><td>multiplication:</td><td> <p>".($num1*$num2)."</p></td>";
echo"<tr><td>division:      </td><td> <p>".($num1/$num2)."</p></td>";
echo"</table>";
  }
}

?>

</body>
</html>
