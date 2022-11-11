 <?php
            
            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
            $answer5 = $_POST['question-5-answers'];
        
            $totalCorrect = 0;
            
            if ($answer1 == "1955") { $totalCorrect++; }
            if ($answer2 == "1952") { $totalCorrect++; }
            if ($answer3 == "James Naismith") { $totalCorrect++; }
            if ($answer4 == "James Naismith") { $totalCorrect++; }
            if ($answer5 == "Phog Allen") { $totalCorrect++; }
            
            echo "<div> Question 1: When was Allen Fieldhouse Built?</div>";
            echo "<div> You answered: $answer1</div>";
            echo "<div> Correct answer: 1955</div>";
            echo "<div> Question 2: When was Kansas' first national championship?</div>";
            echo "<div> You answered: $answer2</div>";
            echo "<div> Correct answer: 1952</div>";
            echo "<div> Question 3: Who was Kansas basketball's first head coach?</div>";
            echo "<div> You answered: $answer3</div>";
            echo "<div> Correct answer: James Naismith</div>";
            echo "<div> Question 4: Who invented the game of basketball?</div>";
            echo "<div> You answered: $answer4</div>";
            echo "<div> Correct answer: James Naismith</div>";
            echo "<div> Question 5: Who is Allen Fieldhouse named after?</div>";
            echo "<div> You answered: $answer5</div>";
            echo "<div> Correct answer: Phog Allen</div>";
            
            echo "<div id='results'>$totalCorrect / 5 correct</div>";
            echo $totalCorrect / 5 * 100;
            echo "%";
?>
