<html>
    <body>
     <style>
         body{
             background-color: #001f3f;
         }
         fieldset{
             margin-left:auto;
             margin-right:auto;
             color:dimgray;
             background-color:bisque;
             font-size:25px;
             width:40%;
             height: 80%;
             border-radius:30px;
             text-align: center;
         }
         legend{
             color:white;
             font-size:40px;
         }
         
    </style>
    </body>

<?php
$con=mysqli_connect('localhost','root','','dbms1');
if(!$con)
{
    die("Connection error: ".mysqli_connect_error());
}
if(isset($_POST['submit2']))
{
    $id=$_POST['id'];
    $sql2="SELECT * FROM students WHERE id='$id'";
    $result=mysqli_query($con,$sql2);
    if(mysqli_num_rows($result)==0)
    {
        echo "No record found";
    }
    else
    {
        while($row=mysqli_fetch_assoc($result))
        {
            echo "<fieldset>";
            echo "<legend>GRADE REPORT</legend>";
            echo "Student Id: ".$row["id"]."<br>";
            echo "Student Name: ".$row["name"]."<br>";
            echo "Date of Birth: ".$row["dob"]."<br>";
            echo "Physics(Out of 100): ".$row["physics"]."<br>";
            echo "Chemistry(Out of 100): ".$row["chemistry"]."<br>";
            echo "Maths(Out of 100): ".$row["maths"]."<br>";
            echo "Biology(Out of 100): ".$row["biology"]."<br>";
            echo "English(Out of 100): ".$row["english"]."<br>";
            echo "Aggregate CGPA: ".$row["cgpa"]."<br>";
            echo "Final Grade: ".$row["grade"]."<br>";
            echo "</fieldset>";
        }
    }
}
mysqli_close($con);
?>
</html>