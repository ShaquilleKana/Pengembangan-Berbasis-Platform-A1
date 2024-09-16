<?php
    // Nama : Muhammad Shaquille Kana
    // NIM  : 24060122140177
    
    // SINGLE IF ELSE********************************************
    echo '<br />SINGLE IF-ELSE<br />';
    $lulus = TRUE;
    if ($lulus){
        echo 'Selamat Anda Lulus. <br/>';
    }else{
        echo 'Maaf, Anda gagal. Silakan mencoba lagi. <br />';
    }

    // MULTIPLE IF ELSE********************************************
    echo '<br />MULTIPLE IF-ELSE<br />';
    // TODO Coba dengan beberapa nilai yang lain, misalkan 86, 68, 59, 30, 11, 0, 110, -98, 'abc'
    echo '<br />Nilai 60<br />';
    $nilai = 60;
    if ($nilai >= 80 && $nilai <= 100){
        echo 'Nilai : A <br />';
    }elseif ($nilai >= 60 && $nilai < 80){
        echo 'Nilai : B <br />';
    }elseif ($nilai >= 40 && $nilai < 60){
        echo 'Nilai : C <br />';
    }elseif ($nilai >= 20 && $nilai < 40){
        echo 'Nilai : D <br />';
    }elseif ($nilai >= 0 && $nilai < 20){
        echo 'Nilai : E <br />';
    }else{
        echo 'Invalid nilai <br />';
    }
    echo '<br />Nilai 86<br />';
    $nilai = 86;
    if ($nilai >= 80 && $nilai <= 100){
        echo 'Nilai : A <br />';
    }elseif ($nilai >= 60 && $nilai < 80){
        echo 'Nilai : B <br />';
    }elseif ($nilai >= 40 && $nilai < 60){
        echo 'Nilai : C <br />';
    }elseif ($nilai >= 20 && $nilai < 40){
        echo 'Nilai : D <br />';
    }elseif ($nilai >= 0 && $nilai < 20){
        echo 'Nilai : E <br />';
    }else{
        echo 'Invalid nilai <br />';
    }
    echo '<br />Nilai 59<br />';
    $nilai = 59;
    if ($nilai >= 80 && $nilai <= 100){
        echo 'Nilai : A <br />';
    }elseif ($nilai >= 60 && $nilai < 80){
        echo 'Nilai : B <br />';
    }elseif ($nilai >= 40 && $nilai < 60){
        echo 'Nilai : C <br />';
    }elseif ($nilai >= 20 && $nilai < 40){
        echo 'Nilai : D <br />';
    }elseif ($nilai >= 0 && $nilai < 20){
        echo 'Nilai : E <br />';
    }else{
        echo 'Invalid nilai <br />';
    }
    echo '<br />Nilai 30<br />';
    $nilai = 30;
    if ($nilai >= 80 && $nilai <= 100){
        echo 'Nilai : A <br />';
    }elseif ($nilai >= 60 && $nilai < 80){
        echo 'Nilai : B <br />';
    }elseif ($nilai >= 40 && $nilai < 60){
        echo 'Nilai : C <br />';
    }elseif ($nilai >= 20 && $nilai < 40){
        echo 'Nilai : D <br />';
    }elseif ($nilai >= 0 && $nilai < 20){
        echo 'Nilai : E <br />';
    }else{
        echo 'Invalid nilai <br />';
    }
    echo '<br />Nilai 11<br />';
    $nilai = 11;
    if ($nilai >= 80 && $nilai <= 100){
        echo 'Nilai : A <br />';
    }elseif ($nilai >= 60 && $nilai < 80){
        echo 'Nilai : B <br />';
    }elseif ($nilai >= 40 && $nilai < 60){
        echo 'Nilai : C <br />';
    }elseif ($nilai >= 20 && $nilai < 40){
        echo 'Nilai : D <br />';
    }elseif ($nilai >= 0 && $nilai < 20){
        echo 'Nilai : E <br />';
    }else{
        echo 'Invalid nilai <br />';
    }
    echo '<br />Nilai 0<br />';
    $nilai = 0;
    if ($nilai >= 80 && $nilai <= 100){
        echo 'Nilai : A <br />';
    }elseif ($nilai >= 60 && $nilai < 80){
        echo 'Nilai : B <br />';
    }elseif ($nilai >= 40 && $nilai < 60){
        echo 'Nilai : C <br />';
    }elseif ($nilai >= 20 && $nilai < 40){
        echo 'Nilai : D <br />';
    }elseif ($nilai >= 0 && $nilai < 20){
        echo 'Nilai : E <br />';
    }else{
        echo 'Invalid nilai <br />';
    }
    echo '<br />Nilai 110<br />';
    $nilai = 110;
    if ($nilai >= 80 && $nilai <= 100){
        echo 'Nilai : A <br />';
    }elseif ($nilai >= 60 && $nilai < 80){
        echo 'Nilai : B <br />';
    }elseif ($nilai >= 40 && $nilai < 60){
        echo 'Nilai : C <br />';
    }elseif ($nilai >= 20 && $nilai < 40){
        echo 'Nilai : D <br />';
    }elseif ($nilai >= 0 && $nilai < 20){
        echo 'Nilai : E <br />';
    }else{
        echo 'Invalid nilai <br />';
    }
    echo '<br />Nilai -98<br />';
    $nilai = -98;
    if ($nilai >= 80 && $nilai <= 100){
        echo 'Nilai : A <br />';
    }elseif ($nilai >= 60 && $nilai < 80){
        echo 'Nilai : B <br />';
    }elseif ($nilai >= 40 && $nilai < 60){
        echo 'Nilai : C <br />';
    }elseif ($nilai >= 20 && $nilai < 40){
        echo 'Nilai : D <br />';
    }elseif ($nilai >= 0 && $nilai < 20){
        echo 'Nilai : E <br />';
    }else{
        echo 'Invalid nilai <br />';
    }
    echo '<br />Nilai "abc"<br />';
    $nilai = 'abc';
    if ($nilai >= 80 && $nilai <= 100){
        echo 'Nilai : A <br />';
    }elseif ($nilai >= 60 && $nilai < 80){
        echo 'Nilai : B <br />';
    }elseif ($nilai >= 40 && $nilai < 60){
        echo 'Nilai : C <br />';
    }elseif ($nilai >= 20 && $nilai < 40){
        echo 'Nilai : D <br />';
    }elseif ($nilai >= 0 && $nilai < 20){
        echo 'Nilai : E <br />';
    }else{
        echo 'Invalid nilai <br />';
    }

    // SWITCH********************************************
    echo '<br />SWITCH<br />';
    // TODO Coba dengan bebrapa nilai lain, misalkan B, C, D, E, AB
    echo '<br />Nilai A<br />';
    $nilai = 'A';
    switch ($nilai) {
        case "A":
            echo "Sangat Baik. <br />";
            break;
        case "B":
            echo "Baik. <br />";
            break;
        case "C":
            echo "Cukup. <br />";
            break;
        case "D":
            echo "Kurang. <br />";
            break;
        case "E":
            echo "Tidak Lulus. <br />";
            break;
        default:
            echo "Invalid nilai! <br />";
            break;
    }
    echo '<br />Nilai B<br />';
    $nilai = 'B';
    switch ($nilai) {
        case "A":
            echo "Sangat Baik. <br />";
            break;
        case "B":
            echo "Baik. <br />";
            break;
        case "C":
            echo "Cukup. <br />";
            break;
        case "D":
            echo "Kurang. <br />";
            break;
        case "E":
            echo "Tidak Lulus. <br />";
            break;
        default:
            echo "Invalid nilai! <br />";
            break;
    }    
    echo '<br />Nilai C<br />';
    $nilai = 'C';
    switch ($nilai) {
        case "A":
            echo "Sangat Baik. <br />";
            break;
        case "B":
            echo "Baik. <br />";
            break;
        case "C":
            echo "Cukup. <br />";
            break;
        case "D":
            echo "Kurang. <br />";
            break;
        case "E":
            echo "Tidak Lulus. <br />";
            break;
        default:
            echo "Invalid nilai! <br />";
            break;
    }    
    echo '<br />Nilai D<br />';
    $nilai = 'D';
    switch ($nilai) {
        case "A":
            echo "Sangat Baik. <br />";
            break;
        case "B":
            echo "Baik. <br />";
            break;
        case "C":
            echo "Cukup. <br />";
            break;
        case "D":
            echo "Kurang. <br />";
            break;
        case "E":
            echo "Tidak Lulus. <br />";
            break;
        default:
            echo "Invalid nilai! <br />";
            break;
    }    
    echo '<br />Nilai E<br />';
    $nilai = 'E';
    switch ($nilai) {
        case "A":
            echo "Sangat Baik. <br />";
            break;
        case "B":
            echo "Baik. <br />";
            break;
        case "C":
            echo "Cukup. <br />";
            break;
        case "D":
            echo "Kurang. <br />";
            break;
        case "E":
            echo "Tidak Lulus. <br />";
            break;
        default:
            echo "Invalid nilai! <br />";
            break;
    }    
    echo '<br />Nilai AB<br />';
    $nilai = 'AB';
    switch ($nilai) {
        case "A":
            echo "Sangat Baik. <br />";
            break;
        case "B":
            echo "Baik. <br />";
            break;
        case "C":
            echo "Cukup. <br />";
            break;
        case "D":
            echo "Kurang. <br />";
            break;
        case "E":
            echo "Tidak Lulus. <br />";
            break;
        default:
            echo "Invalid nilai! <br />";
            break;
    }

    echo '<br />SWITCH TANPA BREAK<br />';
    // TODO SWITCH TANPA BREAK
    echo '<br />Nilai A tetapi dengan mengahapus semua break<br />';
    $nilai = 'A';
    switch ($nilai) {
        case "A":
            echo "Sangat Baik. <br />";
        case "B":
            echo "Baik. <br />";
        case "C":
            echo "Cukup. <br />";
        case "D":
            echo "Kurang. <br />";
        case "E":
            echo "Tidak Lulus. <br />";
        default:
            echo "Invalid nilai! <br />";
    }    echo '<br />Nilai C tetapi dengan mengahapus semua break<br />';
    $nilai = 'C';
    switch ($nilai) {
        case "A":
            echo "Sangat Baik. <br />";
        case "B":
            echo "Baik. <br />";
        case "C":
            echo "Cukup. <br />";
        case "D":
            echo "Kurang. <br />";
        case "E":
            echo "Tidak Lulus. <br />";
        default:
            echo "Invalid nilai! <br />";
    }

    
?>
