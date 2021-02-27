<html>
    <head><meta name="viewport" content="width=device-width, initial-scale=1.0"></head>
    <body>
     <style>
         
         table{
             margin-left:auto;
             margin-right:auto;
             color:dimgray;
             background-color:lightblue;
             font-size:20px;
             width:80%;
             border-radius:30px;
             text-align: center;
             border:none;
         }
         @media screen and (max-width:700px){
             table{
                 width:100%;
                 font-size:10px;
             }
         }
         
    </style>
    </body>

<?php
$con=mysqli_connect("localhost","root","","dbms");
if(!$con)
{
    die("Connection failed: ".mysqli_connect_error());
}
if(isset($_POST["submit1"]))
{   
    $sql1="SELECT * from students";
    $result=mysqli_query($con,$sql1);
        
}
if(mysqli_num_rows($result)>0)
{
    echo "<table>";
    echo "<tr><th>Sudent Id</th><th>Student Name</th><th>Date of Birth</th><th>PHYSICS</th><th>CHEMISTRY</th><th>MATHS</th><th>BIOLOGY</th><th>ENGLISH</th><th>CGPA</th><th>Grade Obtained</th></tr>";
    while($row=mysqli_fetch_assoc($result))
    {
        echo "<tr>";
        echo "<td>";
        echo $row["id"];
        echo "</td>";
        echo "<td>";
        echo $row["name"];
        echo "</td>";
        echo "<td>";
        echo $row["dob"];
        echo "</td>";
        echo "<td>";
        echo $row["physics"];
        echo "</td>";
        echo "<td>";
        echo $row["chemistry"];
        echo "</td>";
        echo "<td>";
        echo $row["maths"];
        echo "</td>";
        echo "<td>";
        echo $row["biology"];
        echo "</td>";
        echo "<td>";
        echo $row["english"];
        echo "</td>";
        echo "<td>";
        echo $row["cgpa"];
        echo "</td>";
        echo "<td>";
        echo $row["grade"];
        echo "</td>";
        echo "</tr>";
    }
    echo "</table>";
}
else{
    echo "No students database found";
}
mysqli_close($con);

?>
</html>
