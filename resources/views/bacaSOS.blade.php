<?php 
    foreach($nilaiSOS as $data){
        if($data->sos == 0){
            echo("Aman");
        }else{
            echo("Perlu Bantuan!");
        }
    }
?>