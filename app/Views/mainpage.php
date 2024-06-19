<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=base_url("assets/styles/default.css")?>">
    <link rel="stylesheet" href="<?=base_url("assets/styles/navbar.css")?>">
    <link rel="stylesheet" href="<?=base_url("assets/styles/mainpage.css")?>">
    <title>WEBALE</title>
</head>
<body>
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
                <a href="/meuPerfil"><button class="botaoNav">FAZER POST +</button></a>
            </nav>
        </section>
        <section class="content">

            <div class="postagem">
                <div class="header-post">
                    <span class="containerFtPerfil"><img class="ftPost" src="" alt=""></span>
                    <span>nome</span>
                </div>
                <div class="content-post">

                </div>
                <div class="titulo-post">
                    <span>Titulo do post</span>
                </div>
            </div>
            

        </section>

    </main>
</body>
</html>