<html>
    <head><meta name="viewport" content="width=device-width, initial-scale=1.0"></head>
    <body>
     <style>
         body{
            background:linear-gradient(lightblue,purple);
         }
         table{
             margin-left:auto;
             margin-right:auto;
             color:dimgray;
             background-color:lightblue;
             font-size:15px;
             width:50%;
             height: 50%;
             border-radius:30px;
             text-align: center;
             border:none;
         }
         @media screen and (max-width:700px){
             table{
                 width:90%;
                 margin:auto;
                 margin-top:5%;
                 height:75%;
                 border:none;
             }
         }
    </style>
    </body>
<?php
$con=mysqli_connect('localhost','root','','dbms');
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
    echo "<table>";
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
}
else
{
    echo "Error ".mysqli_error($con);
}
mysqli_close($con);

?>
</html>
