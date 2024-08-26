<?php
include "./funcao.php";
include "../Util.php";

head();

if (!empty($_POST)) {
  //  var_dump($_POST);
   // exit;
    logar($_POST);
}

if(!empty($_GET['msg'])){
    echo "<b style='color:red'>Login ou senha incorretos, por favor tente novamente!</b>";
}

?>

<div class="col">

    <form action="LoginForm.php" method="POST">
        <h3>Login Sistema Academico</h4>

            <div class="mb-2">
                <label for="cpf" class="form-label">CPF</label>
                <input type="text"
                 class="form-control"
                 name="cpf"
                 placeholder="000.555.000-55">
            </div>

            <div class="mb-2">
                <label for="senha" class="form-label">Senha</label>
                <input type="password"
                 class="form-control"
                 name="senha"
                 placeholder="******">
            </div>

            <button type="submit" class="btn btn-success" class="btn btn-success">Logar</button>
            <a class="btn btn-primary" href="./UserRegister.php">Registrar-se</a>
    </form>
</div>

<?php
footer();
?>