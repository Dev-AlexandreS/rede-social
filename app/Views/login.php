<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEBALE</title>
    <link rel="stylesheet" href="<?=base_url("assets/styles/default.css")?>">
    <link rel="stylesheet" href="<?=base_url("assets/styles/login.css")?>">
    <script src="<?=base_url("assets/js/login.js")?>"></script>
</head>
<body>
    <main>
        <?=form_open('login_submit')?>
            <h1 class="titulo-login">login</h1>
            <div class="container-input">
                <label for="email">email</label>
                <input type="text" placeholder="Digite seu email" name="email">
            </div>
            <div class="container-input">
                <label for="senha">senha</label>
                <input type="password" placeholder="Digite sua senha" name="senha">
            </div>
        
             <div class="container-btn">
                <button type="submit" class="btn-sub">logar</button>
            </div>

            <?=form_close()?>
            <span>Não tem conta ? <a href="<?=base_url("/cadastro")?>">Cadastre-se</a></span>
    </main>
</body>
</html>