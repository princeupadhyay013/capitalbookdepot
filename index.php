<!DOCTYPE html>
 <html>
<head>
<title>
    CAPITAL BOOK DEPOT
</title> 
</head>
<body>
    <h1 style= text-align:center;>WELCOME TO CAPITAL BOOK DEPOT</h1>

<form action="index.php" method="post">
<h4>Please enter your name </h4>
<input type="textfield" name="name">
<h4>Please select your class</h4>
<select name="class" >
<option value="nursery">Nursery</option>
<option value="prep">Prep</option>
<option value="first">First</option>
<option value="second">Second</option>
<option value="third">Third</option>
<option value="fourth">Fourth</option>
<option value="fifth">Fifth</option>
<option value="sixth">Sixth</option>
<option value="seventh">Seventh</option>
<option value="eightth">8th</option>
<option value="ninth">9th</option>
<option value="tenth">10th</option>
<option value="eleventh">11th</option>
<option value="twelveth">12th</option>
</select>
<input type="submit" value="proceed">

</form>
<?php
$class=$_POST['class'];
$name=$_POST['name'];
$con=mysqli_connect('localhost','root','','capital_book_depot_db');
if($con)
{
$query= "INSERT INTO class_6(naam,class) VALUES ('$name','$class',)";
$result= mysqli_query($con,$query);
if($result){
    echo "done";
}
else{
    echo "not ".$class;
}
}
mysqli_close($con);

?>










</body>
 </html>