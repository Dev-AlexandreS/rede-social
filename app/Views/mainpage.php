<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=base_url("assets/styles/default.css")?>">
    <link rel="stylesheet" href="<?=base_url("assets/styles/navbar.css")?>">
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
                <a href=""><button class="botaoNav">PERFIL</button></a>
            </nav>
        </section>
        <section class="content">

            

        </section>

    </main>
</body>
</html>