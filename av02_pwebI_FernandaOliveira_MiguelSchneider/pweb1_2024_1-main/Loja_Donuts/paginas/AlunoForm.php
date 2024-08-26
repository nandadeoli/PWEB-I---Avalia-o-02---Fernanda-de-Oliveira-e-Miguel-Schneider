<?php
include "./funcao.php";
include "../Util.php";

verificar();
head();

$db = new db();
$db->conn();

if (!empty($_POST['id'])) {

    //var_dump($_POST);
    $db->update("aluno",[
        'nome' => $_POST['nome'],
        'telefone' => $_POST['telefone'],
        'cpf' => $_POST['cpf'],
        'id' => $_POST['id'],
    ]);
    header('location: AlunoList.php');
    
} else  if (!empty($_POST)) {
    //var_dump($_POST);
    $db->insert("aluno",[
        'nome' => $_POST['nome'],
        'telefone' => $_POST['telefone'],
        'cpf' => $_POST['cpf'],
    ]);
    header('location: AlunoList.php');
}

if (!empty($_GET['id'])) {
    $data = $db->find("aluno",$_GET['id']);
    // var_dump($data);
    // exit;
}

?>

<div class="col">

    <form action="AlunoForm.php" method="POST">
        <h3>Formulário Aluno</h4>

            <div class="mb-3">
                <input type="hidden" name="id" value="<?php echo !empty($data->id) ? $data->id : "" ?>">

                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" name="nome" value="<?php echo !empty($data->nome) ? $data->nome : "" ?>" placeholder="Nome">
            </div>

            <div class="mb-3">
                <label for="cpf" class="form-label">CPF</label>
                <input type="text" class="form-control" name="cpf" value="<?php echo !empty($data->cpf) ? $data->cpf : "" ?>" placeholder="000.555.000-55">
            </div>

            <div class="mb-3">
                <label for="telefone" class="form-label">Telefone</label>
                <input type="text" class="form-control" name="telefone" value="<?php echo !empty($data->telefone) ? $data->telefone : "" ?>" placeholder="(49) 98800-5500">
            </div>

            <button type="submit" class="btn btn-success">Salvar</button>
            <a class="btn btn-primary" href="./AlunoList.php">Voltar</a>
    </form>
</div>

<?php
footer();
?>