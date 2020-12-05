<html>
    <head>
        <title>Grade calculation</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <style>
            html{
                scroll-behaviour:smooth;
            }
            body{
                background:linear-gradient(purple,lightblue);
                margin:0;
                padding:0;
                box-sizing:border-box;
            }
            div{
                width:40%;
                position: relative;
                float:left;
                margin:4%;
                text-align:center;
                font-size:20px;
                font-style:oblique;
            }
            #box1{
                color:purple;
                background-color:lightblue;
                border:none;
                border-radius:30px;
            }
            #box2{
                color:purple;
                background-color:lightblue;
                border-radius:30px;
                border:none;
            }
            fieldset{
                border:none;
            }
            legend{
                font-size:40px;
                font-weight: 200;
                color:purple;
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
                width:50%;
                margin:15px;
                background-color: antiquewhite;
                color:black;
                border:2px solid white;
                line-height: 30px;
                border-radius: 10px;
                font-size: 15px;
            }
            input[type=submit]:hover{
                background-color:aliceblue;
                color:cornflowerblue;
                cursor:grab;
                font-size:20px;
                padding:5px;
            }
            @media only screen and (max-width: 700px) {
                 div{
                     width:90%;
                 }
            }
        
        </style>
    </head>
    <body>
        <div id="box1">
        <fieldset>
        <legend>Grade Calculator</legend>
        <form method="POST" action="storage.php" autocomplete="off">
            <label>Enter your name:</label>
            <input type="text" required name="name"><br><br>
            <label>Enter your Date of Birth:</label>
            <input type="date" required name="dob"><br><br>
            <label>Marks obtained in Physics:</label>
            <input type="number" required name="physics" min="1" max="100"><br><br>
            <label>Marks obtained in Chemistry:</label>
            <input type="number" required name="chemistry" min="1" max="100"><br><br>
            <label>Marks obtained in Maths:</label>
            <input type="number" required name="maths" min="1" max="100"><br><br>
            <label>Marks obtained in Biology:</label>
            <input type="number" required name="biology" min="1" max="100"><br><br>
            <label>Marks obtained in English:</label>
            <input type="number" required name="english" min="1" max="100"><br>
            <input type="submit" name="submit" value="Calculate grade">
        </form>
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
            <input type="text" required name="id"><br>
            <input type="submit" name="submit2" value="Find grade">
        </form><br>
        </fieldset>
        </div>
    
    </body>
</html>