<?php

$nome ='Dayvison';

function teste (){//começo do escopo
    global $nome;
    echo $nome;

}//fim de escopo


function teste2(){
echo $nome; // nao encontra pois esta dentro de um escopo diferente;
}
teste();
teste2();
?>