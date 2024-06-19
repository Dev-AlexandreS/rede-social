<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEBALE</title>
    <link rel="stylesheet" href="<?=base_url("assets/styles/default.css")?>">
    <link rel="stylesheet" href="<?=base_url("assets/styles/navbar.css")?>">
    <link rel="stylesheet" href="<?=base_url("assets/styles/editarPerfil.css")?>">
    <link rel="stylesheet" href="<?=base_url("assets/styles/deletarPerfil.css")?>">
    <link rel="stylesheet" href="<?=base_url("assets/styles/perfil.css")?>">
    <script src="<?=base_url("assets/js/perfil.js")?>" defer></script>
</head>
<body>
    <div id="backModal" class="editarPerfil"> </div>
    <div id="modalEdicao" class="containerModal">
        <h2>EDIÇÃO</h2>
        <?=form_open_multipart('edicao')?>
            <div class="container-input">
                <label for="nome">nome</label>
                <input type="text" id="nome" name="nome" value="<?=$nome?>">
            </div>

            <div class="container-input">
                <label for="email">email</label>
                <input type="text" id="email" name="email" value="<?=$email?>">
            </div>

            <div class="container-input">
                <label for="senha">senha</label>
                <input type="text" id="senha" name="senha" value="<?=$senha?>">
            </div>

            <div class="container-fotos">
                <div class="container-input">
                    <label for="foto_perfil">Foto de perfil</label>
                    <label class="btn-upload" id="labelFtPerfil" for="ft-perfil">Upload</label>
                    <input type="file" name="ft-perfil" id="ft-perfil" value="<?=$foto?>">
                </div>
                <div class="container-input">
                    <label for="foto_banner">Foto da capa</label>
                    <label class="btn-upload " id="labelFtBanner" for="ft-banner">Upload</label>
                    <input type="file" name="ft-banner" id="ft-banner" value="<?=$banner?>">
                </div>
            </div>
            <div class="container-btn">
                <button type="submit" class="btn-sub">EDITAR</button>
            </div>
            <?=form_close()?>
            <div class="container-btn">
                <button type="button" id="fecharModal" class="btn-sub">VOLTAR</button>
            </div>
        </div>
<div id="ModalDelete" class="containerModal">
    <h2>Tem certeza que deseja deletar?</h2>
    <span>* O ato será irreversível *</span>
    <?=form_open("/delete")?>
        <div class="container-input">
            <label for="email">email</label>
            <input type="text" id="email" name="email" >
        </div>

        <div class="container-input">
            <label for="senha">senha</label>
            <input type="password" id="senha" name="senha" >
        </div>
        <div class="container-btn">
            <button type="submit" class="btn-sub">DELETAR</button>
        </div>
        <?=form_close()?>
        <div class="container-btn">
            <button type="button" id="cancelarDelete" class="btn-sub">VOLTAR</button>
        </div>
</div>
<header>
        <h1>WEBALE</h1>
        <div class="containerInfos">
            <span><?=$nome?></span>
            <span ><img class="ftperfil" src="<?=base_url("assets/img/". $foto)?>" alt="ftperfil"></span>
            <a href="/logout"><span class="logout">SAIR</span></a>
        </div>
    </header>
    <main>
        <section class="containerNav">
            <nav>
                <a href="/mainpage"><button class="botaoNav">FEED</button></a>
                <button id="btnEditar" class="botaoNav">EDITAR PERFIL</button>
                <button id="btnDeletar" class="botaoNav">DELETAR PERFIL</button>
            </nav>
        </section>
        <section class="content">

            <div class="contents-img">
                <div class="banner" style="background-image: url('<?=base_url("assets/img/". $banner)?>');">
                   
                    <div class="fotoBanner">
                        <img class="imgPerfil" src="<?=base_url("assets/img/". $foto)?>" alt="">
                    </div>               
                </div>
            </div>

        </section>

    </main>
</body>
</html>