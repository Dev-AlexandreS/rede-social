<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=base_url("assets/styles/default.css")?>">
    <link rel="stylesheet" href="<?=base_url("assets/styles/mainpage.css")?>">
    <link rel="stylesheet" href="<?=base_url("assets/styles/navbar.css")?>">
    <script src="<?=base_url("assets/js/mainpage.js")?>" defer></script>
    <title>WEBALE</title>
</head>
<body>
    <div id="backG" class="backG"></div>
    <div id="Modal" class="addPost">
        <div class="header-post">
            <h3 class="tituloModal">DEFINA SEU POST</h3>
        </div>
        <div class="content-Post">
            <?=form_open_multipart("/postar")?>
                <div class="containerInput">
                    <label for="nomePost">Titulo do Post</label>
                    <input type="text" name="nomePost" id="nomePost" placeholder="Digite o titulo do Post">
                </div>

                <div class="containerInput">
                    <label for="foto_perfil">Faça o upload de uma imagem</label>
                    <label class="btn-upload" for="imgPost">Upload</label>
                    <input type='file' id="imgPost" name="imgPost"/>
                    <img id="previewImg" src="" alt="sua imagem" />
                </div>
                <div class="containerInput">
                    <button class="btn-sub" type="submit">Publicar</button>
                </div>
                <?=form_close()?>
                <button class="btn-sub" id="backModal">Voltar</button>
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
                <a href="/meuPerfil"><button class="botaoNav">PERFIL</button></a>
                <button id="abreModal" class="botaoNav">FAZER POST +</button>
            </nav>
        </section>
        <section class="content">

            <?php foreach($posts as $post):?>
                <div class="postagem">
                    <div class="header-post">
                        <span class="containerFtPerfil"><img class="ftPost" src="<?=base_url("assets/img/". $post->caminho_foto_perfil)?>" alt=""></span>
                        <span><?=$post->nome?></span>
                    </div>
                    <div class="content-post">
                        <img src="<?=base_url("assets/img/posts/". $post->caminho_post)?>" alt="">
                    </div>
                    <div class="titulo-post">
                        <span><?=$post->titulo;?></span>
                    </div>
                </div>
            <?php endforeach;?>

        </section>

    </main>
</body>
</html>