<?php 
    foreach($nilaiBantuan as $data){
        echo $data->sos;
        if($data->feedback == 1){
            echo("Segera Datang");
        }else if($data->feedback == 2){
            echo("Nanti Kesana");
        }else if($data->feedback == 3 ){
            echo("Tidak Bisa Sekarang");
        }else if($data->feedback == 4) {
            echo("Maaf, Tidak Bisa");
        }else {
            echo("belum ada respon");
        }
    }
?>
