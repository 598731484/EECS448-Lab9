<?php

	$answer1 = $_POST['question-1-answers'];
	$answer2 = $_POST['question-2-answers'];
	$answer3 = $_POST['question-3-answers'];
	$answer4 = $_POST['question-4-answers'];
	$answer5 = $_POST['question-5-answers'];
        
	$point = 0;
            
	if ($answer1 == "A") { $point++; }
	if ($answer2 == "B") { $point++; }
	if ($answer3 == "C") { $point++; }
	if ($answer4 == "D") { $point++; }
	if ($answer5 == "E") { $point++; }
            

	echo "Q1: What is A looks like?" . "<br>";
	echo "Your answered: " . $answer1 . "<br>";
	echo "Correct answer: A" . "<br>";
    
	echo "Q2: What is B looks like?" . "<br>";
	echo "Your answered: " . $answer2 . "<br>";
	echo "Correct answer: B" . "<br>";

	echo "Q3: What is C looks like?" . "<br>";
	echo "Your answered: " . $answer3 . "<br>";
	echo "Correct answer: C" . "<br>";

	echo "Q4: What is D looks like?" . "<br>";
	echo "Your answered: " . $answer4 . "<br>";
	echo "Correct answer: D" . "<br>";

	echo "Q5: What is E looks like?" . "<br>";
	echo "Your answered: " . $answer5 . "<br>";
	echo "Correct answer: E" . "<br>";

    echo "Point: " . $point . "/5<br>";
    echo "Percentage: " . ($point/5*100) . "%<br>";
?>