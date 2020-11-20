<?php require_once("Components/Layout.php"); ?>

<body>
    <?php require_once("Components/Header.php") ?>
    <main class="container">
        <ul class="botonesCuadro">
            <li  class="appointButton"><a class="appoint" href="?action=create">NEW</a></li>
            <li  class="appointButton"><a class="appoint" href="?action=archiveview">ARCHIVED LIST</a></li>
        </ul>
        <h3 id="styleTitle">CARD LIST</h3>
        <div class="cardContainer">
                <?php
                foreach ($data["cards"] as $card) {
                    echo <<<TAG
                    <div class="cardStyle">
                        <div>            
                        <h6 class="card-subtitle mb-2 text-muted"  name="name">{$card->getName()}</h6>
                        <h5  class="card-title" name="title">{$card->getTitle()}</h5>
                            <p class="card-text">ID:{$card->getId()}</p>
                            <p class="card-text">Date:{$card->getDate()}</p>
                            <div class="buttonGroup">
                                <a href='?action=delete&id={$card->getId()}'>
                                    <i class="fas fa-trash icono trash"></i>
                                </a>
                                <a href='?action=edit&id={$card->getId()}'>
                                    <i class="fas fa-pencil-alt icono"></i>
                                </a>
                                <a href='?action=checked&id={$card->getId()}'>
                                <i class="fas fa-check-double"></i>
                                </a>
                            </div>           
                        </div>
                    </div>                                
                TAG;
            } ?>
        </div>
    </main>
</body>

</html>