<?php
include "./funcao.php";
include "../db.class.php";

head();

$db = new db();
$db->conn();

if (!empty($_POST)) {
    
    if($_POST['senha'] === $_POST['senha_c']){

       // var_dump($_POST);
      //  exit;
        $_POST['senha'] = password_hash($_POST['senha'],PASSWORD_BCRYPT);
        unset( $_POST['senha_c']);

        $db->insert("usuario",$_POST);

        header('location: LoginForm.php');
    } else {
        echo "<b style='color:red'>As senhas não conhecidem</b>";
    }
} 

?>
<div class="col">

    <form action="UserRegister.php" method="POST">
        <h3>Registrar Usuario</h4>

            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text"
                  class="form-control"
                  name="nome"
                  placeholder="Nome">
            </div>

            <div class="mb-3">
                <label for="cpf" class="form-label">CPF</label>
                <input type="text"
                   class="form-control"
                   name="cpf"
                   placeholder="000.555.000-55">
            </div>

            <div class="mb-3">
                <label for="senha" class="form-label">Senha</label>
                <input type="password"
                  class="form-control"
                  name="senha"
                  placeholder="******">
            </div>

            <div class="mb-3">
                <label for="senha_c" class="form-label">Senha Confirmar</label>
                <input type="password"
                  class="form-control"
                  name="senha_c"
                  placeholder="******">
            </div>

            <button type="submit" class="btn btn-success">Salvar</button>
            <a class="btn btn-primary" href="./LoginForm.php">Voltar</a>
    </form>
</div>

<?php
footer();
?>