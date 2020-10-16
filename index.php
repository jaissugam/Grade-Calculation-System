<html>
    <head>
        <title>Grade calculation</title>
    </head>
    <style>
        body{
            background-color:#001f3f;
        }
        div{
            width:40%;
            position: relative;
            float:left;
            margin:20px;
            text-align:center;
            font-size:20px;
            font-style:oblique;
        }
        #box1{
            color:white;
            background-color: chocolate;
        }
        #box2{
            color:white;
            background-color:darkred;
        }
        legend{
            font-size:30px;
            font-weight: 200;
        }
        input[type=text],input[type=date]{
            width:50%;
            line-height: 30px;
            background-color:beige;
            border-radius:5px;
        }
        input[type=number]{
            width:25%;
            line-height: 30px;
            background-color:beige;
            border-radius:5px;
        }
        input[type=submit]{
            font-weight: 300;
            width:25%;
            margin:20px;
            background-color: antiquewhite;
            color:black;
            border:2px solid white;
            line-height: 30px;
            border-radius: 10px;
            font-size: 15px;
        }
        input[type=submit]:hover{
            width:35%;
            background-color:aliceblue;
            color:cornflowerblue;
            cursor:grab;
            font-size:15px;
        }
    
    </style>
    <body>
        <div id="box1">
        <fieldset>
        <legend>Grade Calculator</legend>
        <form method="POST" action="storage.php">
            <label>Enter your name:</label>
            <input type="text" name="name"><br><br>
            <label>Enter your Date of Birth:</label>
            <input type="date" name="dob"><br><br>
            <label>Marks obtained in Physics:</label>
            <input type="number" name="physics" min="1" max="100"><br><br>
            <label>Marks obtained in Chemistry:</label>
            <input type="number" name="chemistry" min="1" max="100"><br><br>
            <label>Marks obtained in Maths:</label>
            <input type="number" name="maths" min="1" max="100"><br><br>
            <label>Marks obtained in Biology:</label>
            <input type="number" name="biology" min="1" max="100"><br><br>
            <label>Marks obtained in English:</label>
            <input type="number" name="english" min="1" max="100"><br>
            <input type="submit" name="submit" value="Calculate grade">
        </form><br>
        </fieldset>
        </div>
        <div id="box2">
        <fieldset>
        <legend>Grade Finder</legend>
        <form method="post" action="display.php">
            <input type="submit" name="submit1" value="Show all records">
        </form><br>
        <form method="post" action="find.php">
            <label>Enter your Student Id</label>
            <input type="text" name="id"><br>
            <input type="submit" name="submit2" value="Find grade">
        </form><br>
        </fieldset>
        </div>
    
    </body>
</html>