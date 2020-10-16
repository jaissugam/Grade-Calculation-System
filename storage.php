<html>
    <body>
     <style>
         body{
             background-color: #001f3f;
         }
         table{
             margin-left:auto;
             margin-right:auto;
             color:dimgray;
             background-color:bisque;
             font-size:25px;
             width:50%;
             height: 100%;
             border-radius:30px;
             text-align: center;
         }
         
    </style>
    </body>
<?php
$con=mysqli_connect('localhost','root','','dbms1');
if(!$con)
{
    die("Connection failed :".mysqli_connect_error());
}
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$dob=$_POST['dob'];
$physics=$_POST['physics'];
$chemistry=$_POST['chemistry'];
$maths=$_POST['maths'];
$biology=$_POST['biology'];
$english=$_POST['english'];
$grade="";
$sum=$physics+$chemistry+$maths+$biology+$english;
$cgpa=($sum/500)*10;
if($cgpa==10)
{
    $grade="S+";
}
else if($cgpa>=9 && $cgpa<10)
{
    $grade="S";
}
else if($cgpa>=8 && $cgpa<9)
{
    $grade="A";
}
else if($cgpa>=7 && $cgpa<8)
{
    $grade="B";
}
else if($cgpa>=6 && $cgpa<7)
{
    $grade="C";
}
else
{
    $grade="D";
}
}
$sql="INSERT INTO students(name,grade,dob,cgpa,physics,chemistry,biology,maths,english) VALUES('$name','$grade','$dob','$cgpa','$physics','$chemistry','$biology','$maths','$english')";
if(mysqli_query($con,$sql))
{
    echo "<table border=1>";
    echo "<tr>";
    echo "<td>";
    echo "Name:&nbsp";
    echo "</td";
    echo "<td>";
    echo "$name";
    echo "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>";
    echo "Date of Birth:&nbsp ";
    echo "</td";
    echo "<td>";
    echo "$dob";
    echo "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>";
    echo "CGPA:&nbsp";
    echo "</td";
    echo "<td>";
    echo "$cgpa";
    echo "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>";
    echo "Final Grade:&nbsp";
    echo "</td";
    echo "<td>";
    echo "$grade";
    echo "</td>";
    echo "</tr>";
    echo "</table>";
    //echo "Record stored successfully";
}
else
{
    echo "Error ".mysqli_error($con);
}
mysqli_close($con);

?>
</html>