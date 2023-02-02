<?php
function mostrarData(string $data){
   
    $time = strtotime($data);

    print_r(date("d / m / Y - l", $time));
}

mostrarData('1985-11-02');