<?php
    include "./funcao.php";
    include "../Util.php";
    verificar();

    head();
?>
    <h3>Sistema Academico</h3>
    <?php
        echo "<p>Seja bem vindo usuário <b>".$_SESSION['cpf']."</b> <a href='LoginForm.php'>Sair</a></p>";
    ?>
    <br><br><br>
    <a href="./AlunoList.php">Aluno</a>
<?php
    footer();
?>