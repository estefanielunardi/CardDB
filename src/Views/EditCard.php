<?php require_once("Components/Layout.php"); ?>

<body>
    <?php require_once("Components/Header.php"); ?>

        <main class="container text-center">
            <ul>
                <li  class="appointButton"><a class="appoint" href="index.php">Cards</a></li>
            </ul>
            <div class="cardContainer">
                <div class="cardStyle">
                    <form action='?action=update&id=<?php echo $data["card"]->getId() ?>' method="post">                       
                            <input type="text" name="name" required value='<?php echo $data["card"]->getName() ?>'>
                            <input type="text" name="title" required value='<?php echo $data["card"]->getTitle() ?>'>                    
                        <div class="btn-group buttonGroup" role="group" aria-label="Basic example">
                            <button type="submit" class="btn btn-secondary send">Done</button>
                            <button type="button" class="btn btn-secondary cancel"><a class="linkCancel" href="index.php">Cancel</a></button>
                        </div>
                        
                    </form>
                </div>
            </div>
    </main>
</body>