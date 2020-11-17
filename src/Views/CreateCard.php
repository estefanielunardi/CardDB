<?php require_once("Components/Layout.php"); ?>

<body>
    <?php require_once("Components/Header.php"); ?>

    <main class="container text-center">
        <ul class="botonesCuadro">
            <li  class="appointButton"><a class="appoint" href="index.php">CARDS</a></li>
        </ul>
        <div class="cardContainer">
            <div id ="cardStyleCreate">
                <form action='?action=store' method="post">
                    <div>
                        <input placeholder="Coder Name"class="namePlace fondo" type="text" name="name">                       
                        <input placeholder="Enquiry Title" class="fondo titlePlace" type="text" name="title">
                        <div class="btn-group buttonGroup" role="group" aria-label="Basic example">
                            <button type="submit" ><i class="fas fa-check-square send"></i></button>
                            <button type="button" ><a class="linkCancel" href="index.php"><i class="fas fa-backspace cancel"></i></a></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>