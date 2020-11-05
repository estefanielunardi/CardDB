<?php require_once("Components/Layout.php"); ?>

<body>

    <?php require_once("Components/Header.php") ?>
    <main class="container">
        <ul>
            <li  class="appointButton"><a class="appoint" href="?action=create">NEW</a></li>
        </ul>
        <div class="cardContainer">
                <?php
                foreach ($data["cards"] as $card) {
                    echo <<<TAG
                    <div class="cardStyle">
                        <div>            
                            <h5  class="card-title" name="title">{$card->getTitle()}</h5>
                            <h6 class="card-subtitle mb-2 text-muted"  name="name">{$card->getName()}</h6>
                            <p class="card-text">ID:{$card->getId()}</p>
                            <p class="card-text">Date:{$card->getDate()}</p>
                            <div class="btn-group buttonGroup" role="group" aria-label="Basic example">
                                <a href='?action=delete&id={$card->getId()}'>
                                    <button type="button" class="btn btn-secondary cancel">Delete</button>
                                </a>
                                <a href='?action=edit&id={$card->getId()}'>
                                    <button type="button" class="btn btn-secondary edit">Edit</button>
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