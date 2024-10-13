

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

    

    
    
?>