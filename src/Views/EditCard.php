<?php require_once("Components/Layout.php"); ?>

<body>
    <?php require_once("Components/Header.php"); ?>

        <main class="container text-center">
            <ul class="botonesCuadro">
                <li  class="appointButton"><a class="appoint" href="index.php">CARDS</a></li>
            </ul>
            <div class="cardContainer">
                <div id ="cardStyleEdit">
                    <form action='?action=update&id=<?php echo $data["card"]->getId() ?>' method="post">                       
                            <input type="text" name="name" class= "namePlace" required value='<?php echo $data["card"]->getName() ?>'>
                            <input type="text" name="title" class= "titlePlace" required value='<?php echo $data["card"]->getTitle() ?>'>                    
                        <div class="btn-group buttonGroup" role="group" aria-label="Basic example">
                            <button type="submit"><i class="fas fa-check-square send"></i></button>
                            <button type="button"><a class="linkCancel" href="index.php"><i class="fas fa-backspace cancel"></i></a></button>
                        </div>
                        
                    </form>
                </div>
            </div>
    </main>
</body>