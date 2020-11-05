<?php require_once("Components/Layout.php"); ?>

<body>
    <?php require_once("Components/Header.php"); ?>

    <main class="container text-center">

        <h2 class="text-center">Edit Card</h2>

        <div class="cardStyle">
            <form action='?action=update&id=<?php echo $data["card"]->getId() ?>' method="post">
                <div>
                <input type="text" name="name" required value='<?php echo $data["card"]->getName() ?>'>
                <input type="text" name="title" required value='<?php echo $data["card"]->getTitle() ?>'>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <button type="submit" class="btn btn-secondary send">Send</button>
                        <a href="index.php">
                        <button type="button" class="btn btn-secondary cancel">Cancel</button>
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </main>
</body>