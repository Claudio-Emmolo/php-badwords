<?php
$paragraph = $_GET['paragraph'];
$censure = $_GET['censureWord'];

echo ($paragraph . ', ' . strlen($paragraph)); //Print the paragraph without the censored word

//Print the paragraph with the censored word
$censoredParagraph = str_ireplace($censure, '***', $paragraph);
echo (' || ' . $censoredParagraph . ', ' . strlen($censoredParagraph));
