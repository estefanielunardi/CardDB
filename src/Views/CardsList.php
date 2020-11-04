<?php require_once("Components/Layout.php"); ?>

<body>

    <?php require_once("Components/Header.php") ?>
    <main class="container">
        <a href="?action=create">
            <button class="btn btn-primary btn-circle btn-lg">
                <i class="fas fa-plus"></i>
            </button>
        </a>
        <table class="table table-light">

            <thead class="thead-light">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Title</th>
                    <th>Date</th>
                    <th>Options</th>
                </tr>
            </thead>

            <tbody>
                <?php
                foreach ($data["cards"] as $card) {
                    echo "
                    <tr>
                        <td>{$card->getId()}</td>
                        <td>{$card->getName()}</td>
                        <td>{$card->getTitle()}</td>
                        <td>{$card->getDate()}</td>
                        <td>               
                        <a href='?action=edit&id={$card->getId()}'><i class='lnr lnr-pencil'></i></a>
                            <a href='?action=delete&id={$card->getId()}'><i class='lnr lnr-trash'></i></a>
                        </td>
                    </tr>
                    ";
                } ?>

            </tbody>
        </table>
    </main>
</body>

</html>