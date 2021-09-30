<?php
function inserirJogos($conexao,$jogo,$tamanhojog,$precojog,$reqjog,$conjog,$clasjog,$avajog){
    $query="insert into tbjogos(nomeJog,tamanhoJog,precoJog,requisitosJog,consoleJog,clasificacaoJog,avaliacaoJog)values('{$jogo}','{$tamanhojog}','{$precojog}','{$reqjog}','{$conjog}','{$clasjog}','{$avajog}')";

    $resultados = mysqli_query($conexao,$query);
    return $resultados;
}

function listaTudojogos($conexao){
    $query = "Select * From tbjogos";
    
    $resultados = mysqli_query($conexao,$query);
    return $resultados;
}

function listaTudojogosCod($conexao,$codJogo){
    $query = "Select * from tbjogos where codJog={$codJogo}";
    $resultados = mysqli_query($conexao,$codJogo);
    return $resultados;
}
?>