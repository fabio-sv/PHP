<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Formulário</title>
</head>
<body style="background: #CFCED4">
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <h2>Formulário</h2>
            <div>
                <button type="button" class="btn btn-outline-primary">Primary</button>
                <button type="button" class="btn btn-outline-success">Success</button>
                <button type="button" class="btn btn-outline-danger">Success</button>
             </div>
        </div>   
    </nav>
    <?php
    if(count($_POST) > 0) {
        if(!filter_input(INPUT_POST, "nome")){
            echo "Nome é obrigatório!";
        }

        if(filter_input(INPUT_POST, "nascimento")){
            $data = DateTime::createFromFormat('d/m/Y', $_POST['nascimento']);

            if(!$data){
                echo "Data deve estar no padrão dd/mm/AAAA !";
            }
        }
    }
    
    ?>
    <div class="container" style="background: white; padding: 20px;">
        <form action="#" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" >
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Nascimento</label>
                <input type="text" class="form-control" id="nascimento" name="nascimento">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">E-mail</label>
                <input type="email" class="form-control" id="email">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Site</label>
                <input type="text" class="form-control" id="site">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>




