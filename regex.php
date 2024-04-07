<?php
$pattern1 = '/[a-z]/'; // Cocokkan huruf kecil.
$text1 = 'This is a Sample Text.';
if (preg_match($pattern1, $text1)) {
    echo "Huruf kecil ditemukan!";
} else {
    echo "Tidak ada huruf kecil!";
}

echo "<br>";

$pattern2 = '/[0-9]+/'; // Cocokkan satu atau lebih digit.
$text2 = 'There are 123 apples.';
if (preg_match($pattern2, $text2, $matches)) {
    echo "Cocokkan: " . $matches[0];
} else {
    echo "Tidak ada yang cocok!";
}

echo "<br>";

$pattern3 = '/apple/';
$replacement = 'banana';
$text3 = 'I like apple pie.';
$new_text = preg_replace($pattern3, $replacement, $text3);
echo $new_text; // Output: "I like banana pie."

echo "<br>";

$pattern4 = '/go*d/'; // Cocokkan "god", "good", "gooood", dll.
$text4 = 'god is good.';
if (preg_match($pattern4, $text4, $matches)) {
    echo "Cocokkan: " . $matches[0];
} else {
    echo "Tidak ada yang cocok!";
}

echo "<br>";

// 5.5: Menggunakan `?` (0 atau 1 kali)
$pattern5 = '/go?d/'; // Cocokkan "god", "good", "gooood", dll.
$text5 = 'gad is good.';
if (preg_match($pattern5, $text5, $matches)) {
    echo "Cocokkan: " . $matches[0];
} else {
    echo "Tidak ada yang cocok!";
}

echo "<br>";

// 5.6: Menggunakan `{n,m}`
$pattern6 = '/go{1,2}d/'; // Cocokkan "god", "good", "gooood", dll.
$text6 = 'gad is a good god.';
if (preg_match($pattern6, $text6, $matches)) {
    echo "Cocokkan: " . $matches[0];
} else {
    echo "Tidak ada yang cocok!";
}
?>
