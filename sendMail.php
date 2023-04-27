<?php

$subject = 'FOR YOU';
$one = "Hello.";
$name = "My name is Ivan.";
$two = 'I live in Europe but was born in Ukraine';
$three = 'Due to the current situation, I had to temporarily change my place of residence.';
$four = "And how are you doing? Where are you now?";
$end = "Write me. By.";
$message = $one . "\n" . $name . $two . $three . $four . "\n" . $end;
$headers = 'From: i.d.pokhvaljsjkyy@student.khai.edu';
mail('pokhivan@gmail.com', $subject, $message, $headers);
