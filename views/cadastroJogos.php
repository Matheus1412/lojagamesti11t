 <?php
    include("header.php");
 ?>
   <form method="Post" action="../controllers/inserirJogos.php"> 
       <p>Jogo <input type="text" name="jogo"></p>
       <p>Tamanho do Jogo<input type="text" name="tamanhojog"></p>
       <p>Preço do Jogo <input type="text" name="precojog"></p>
       <p>Requisitos do Jogo<input type="text" name="reqjog"></p>
       <p>Console para Jogo<input type="text" name="conjog"></p>
       <p>Classificação do Jogo<input type="text" name="clasjog"></p>
       <p>Avaliação do Jogo<input type="text" name="avajog"></p>
       <button type="submit">Salvar</button>
   </form>
<?php
include("../views/footer.php");
?>