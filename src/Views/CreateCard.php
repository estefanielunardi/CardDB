<?php require_once("Components/Layout.php"); ?>

<body>
    <?php require_once("Components/Header.php"); ?>

        <ul>
            <li  class="appointButton"><a class="appoint" href="index.php">Cards</a></li>
        </ul>
    <main class="container text-center">
        <h2>New Card</h2>
        <div class="cardStyle">
            <form action='?action=store' method="post">
                <div>
                    <input placeholder="Enquiry Title" class="card-title" type="text" name="title">
                    <input placeholder="Coder Name"class="card-subtitle mb-2 text-muted" type="text" name="name">
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