<?php

include("../models/conexao.php");
include("../models/bancoJogos.php");
include("../views/header.php");

extract($_REQUEST,EXTR_OVERWRITE);

if(inserirJogos($conexao,$jogo,$tamanhojog,$precojog,$reqjog,$conjog,$clasjog,$avajog)){
    echo("Jogo cadastrado com sucesso.");
}else{
    echo("Jogo não cadastrado.");
}

include("../views/footer.php");
?>