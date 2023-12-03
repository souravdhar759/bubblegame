<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="game.css">
    <title>Document</title>
</head>

<body>

<?php

$name=$_POST ['t1'];
$_SESSION ['name']=$name;


?>


    <div id="main">

        <div id="panel">
            <div id="toppanel">
                <div class="elem">
                <h3>Hit</h3> 
                <div id="hitwhere" class="box">5</div>   
                </div>
                <div class="elem">
                    <h3 >Timer</h3> 
                    <div id="timerinter" class="box">6</div>   
                    </div>
                    <div class="elem">
                        <h3>Score</h3> 
                        <div id="scoreinterval"
                        class="box"> 0</div>   
                        </div>
                
            </div>
            <div id="panelbottom">
               <input type="submit" value="chekc score" id="next"> 
            </div>
        </div>
    </div>

    <script src="bubbol.js"></script>
</body>
</html>