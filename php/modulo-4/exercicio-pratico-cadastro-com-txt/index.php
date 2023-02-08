<?php
require('recebedor.php');

    echo 'Novo Nome:'.'<br/>';
    echo '<form method="POST" action="recebedor.php">';
    echo '<input type="text" name="nome" />';
    echo '<input type="submit" value="Adicionar" />';
    echo '</form>';
   
    echo '<h3>Lista de nomes</h3>';

    if(file_exists('nomes.txt')){
        $nomes = file_get_contents('nomes.txt');
        $nomes = explode("\n", $nomes);
        echo '<ul>';
            foreach($nomes as $nome){
                if($nome != ''){
                    echo '<li>'.$nome.'</li>';
                }                
            }
        echo '</ul>';
    }else{
        echo 'Arquivo não existe';
    }