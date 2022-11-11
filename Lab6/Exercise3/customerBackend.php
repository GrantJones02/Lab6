 <link href="style.css"
        rel="stylesheet"
        type="text/css"/>
 <?php
            $username = $_POST["username"]; 
            $password = $_POST["password"];
            
            $televisions = $_POST["televisions"];
            $jayhawks = $_POST["jayhawks"];
            $keyboards = $_POST["keyboards"];
            
            $answer1 = $_POST['question-1-answers'];
            
            $total = 0;
            
            if ($answer1 == "$50.00 over night") { $total+=50; }
            if ($answer1 == "$5.00 three day") { $total+=5; }
            
            $total += $televisions * 10 + $jayhawks * 5 + $keyboards * 1;
            
            echo "<div>Username: " . $username . "<br></div>";
            echo "<div>Password: " . $password . "<br></div>";  
            echo "<div>Televisions: " . $televisions . " X $10</div>";
            echo " = $" . $televisions * 10 . "<br>";
            echo "<div>Jayhawks: " . $jayhawks . " X $5</div>"; 
            echo " = $" . $jayhawks * 5 . "<br>";
            echo "<div>keyboards: " . $keyboards . " X $1</div>"; 
            echo " = $" . $keyboards * 1 . "<br>";
            echo "<div>Shipping: " . $answer1 . "<br></div>"; 
            
            echo "<div>Total: $" . $total . "<br></div>"; 
?>
