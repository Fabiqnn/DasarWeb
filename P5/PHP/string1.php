<?php

$loremIpsum = " Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nihil odit officia quos id cupiditate 
            velit itaque accusamus cum sequi vitae, sint placeat, voluptas sunt perspiciatis neque accusantium. 
            Eius, numquam dolor.
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nihil odit officia quos id cupiditate 
            velit itaque accusamus cum sequi vitae, sint placeat, voluptas sunt perspiciatis neque accusantium.";
echo "<p>{$loremIpsum}</p>";
echo "Panjang karakter: " . strlen($loremIpsum) . "<br>";
echo "panjang kata: " . str_word_count($loremIpsum) . "<br>";
echo "<p>" . strtoupper($loremIpsum) . "</p>";
echo "<p>" . strtoupper($loremIpsum) . "</p>";

?>