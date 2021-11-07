<?php

function ganjil_genap($number)
{
    if ($number % 2 == 0) return header('Location: ganjil_genap.php?message=genap');
    return header('Location: ganjil_genap.php?message=ganjil');
}

ganjil_genap($_POST['num']);
