<?php
$paragraph = $_GET['paragraph'];
$censure = $_GET['censureWord'];

echo ($paragraph . ', ' . strlen($paragraph));

$censoredParagraph = str_ireplace($censure, '***', $paragraph);

echo $censoredParagraph . strlen($censoredParagraph);
