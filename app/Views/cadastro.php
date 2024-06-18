<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEBALE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="<?=base_url("assets/styles/default.css")?>">
    <link rel="stylesheet" href="<?=base_url("assets/styles/cadastro.css")?>">
</head>
<body>
<main>
        <?=form_open_multipart('cadastrar')?>
        
            <h1 class="titulo-login">Cadastro</h1>

            <div class="container-input">
                <label for="nome">nome</label>
                <input type="text" placeholder="Digite seu nome" id="nome" name="nome">
            </div>

            <div class="container-input">
                <label for="email">email</label>
                <input type="text" placeholder="Digite seu email" id="email" name="email">
            </div>

            <div class="container-input">
                <label for="senha">senha</label>
                <input type="text" placeholder="Digite sua senha" id="senha" name="senha">
            </div>

            <div class="container-input">
                <label for="foto_perfil">Foto de perfil</label>
                <label class="btn-upload" for="ft-perfil">Upload</label>
                <input type="file" name="ft-perfil" id="ft-perfil">
            </div>
        
             <div class="container-btn">
                <button type="submit" class="btn-sub">cadastrar</button>
            </div>

            <?=form_close()?>
</body>
</html>