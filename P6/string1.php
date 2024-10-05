<?php
    $loremIpsum = "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Molestiae veritatis expedita delectus officia amet dolore? At aliquam a eos 
        excepturi adipisci doloribus ex molestiae eius recusandae quos illum, iste voluptatem. 
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque porro facilis 
        et eligendi blanditiis expedita repudiandae libero tenetur asperiores quibusdam 
        voluptatem vitae rem officia ad quisquam, quis incidunt aspernatur sequi!";
    echo "<p>{$loremIpsum}</p>";
    echo "Panjang karakter: " . strlen($loremIpsum) . "<br>";
    echo "Panjang kata: " . str_word_count($loremIpsum) . "<br>";
    echo "<p>" . strtoupper($loremIpsum) . "</p>";
    echo "<p>" . strtolower($loremIpsum) . "</p>";
?>