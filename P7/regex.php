

<?php
    $pattern = '/[a-z]/';
    $text = 'This is a Sample text.';

    if (preg_match($pattern, $text)) {
        echo "Huruf kecil ditemukan!";
    } else {
        echo "Tidak ada huruf kecil!";
    }
    echo "<br>";

    $pattern1 = '/[0-9]/';
    $text1 = 'There are 123 apples';
    if (preg_match($pattern1, $text1, $matches)) {
        echo "Cocokkan: " . $matches[0];
    } else {
        echo "Tidak ada yang cocok!";
    }
    echo "<br>";

    $pattern2 = '/apple/';
    $replacement = 'banana';
    $text2 = 'I like apple pie.';
    $new_text = preg_replace($pattern2, $replacement, $text2);
    echo $new_text;

    echo "<br>";

    $pattern3 = '/go{1,2}d/';
    $text3 = 'god is good';
    if (preg_match($pattern3, $text3, $matches)) {
        echo "Cocokan: " . $matches[0];
    } else {
        echo "Tidak ada yang cocok!";
    }
    
    
?>