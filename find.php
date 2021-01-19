<html>
    <head><meta name="viewport" content="width=device-width, initial-scale=1.0"></head>
    <body>
     <style>
         body{
            background:linear-gradient(lightblue,purple);
         }
         fieldset{
             margin-left:auto;
             margin-right:auto;
             color:dimgray;
             background-color:lightblue;
             font-size:25px;
             width:40%;
             height: 80%;
             border-radius:30px;
             text-align: center;
             padding:2%;
             border:none;
         }
         legend{
             color:white;
             font-size:50px;
         }
         @media screen and (max-width:700px){
             fieldset{
                 font-size:30px;
                 width:100%;
                 max-height:100%;
                 padding:5px;
                 background:linear-gradient(purple,lightblue);
                 color:white;
             }
         }
         
    </style>
    </body>

<?php
$con=mysqli_connect('localhost','root','','dbms1') or die("Connection error: ".mysqli_connect_error());
if(isset($_POST['submit2']))
{
    $id=$_POST['id'];
    $sql2="SELECT * FROM students WHERE id='$id'";
    $result=mysqli_query($con,$sql2);
    if(mysqli_num_rows($result)==0)
    {
        echo '<script>window.alert("No records found")</script>';
        echo '<script>window.location.assign("index.php")</script>';
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
