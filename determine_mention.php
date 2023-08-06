<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Détermination de la Mention</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <?php
        $moyenne = 16;
        $decision;
        $mention;

        if ($moyenne >= 10 and $moyenne < 20) {
            $decision = "Vous êtes admis";
            echo "<p>Decision : $decision</p>";

            if ($moyenne >= 17 ) {
                echo " <p> Mention = <span class='text-warning' style='font-size: 14px'>   Excellent </span> </p>";
            } elseif ($moyenne >= 16) {
                echo " <p> Mention = <span class='text-danger' style='font-size: 14px'>  Tres Bien </span> </p>";
            } elseif ($moyenne >= 14) {
                echo " <p> Mention = <span class='text-success' style='font-size: 14px'>   Bien </span> </p>";
            } elseif ($moyenne >= 12) {
                echo " <p> Mention = <span class='text-secondary' style='font-size: 14px'>    Assez Bien </span> </p>";
            } else {
                echo " <p> Mention = <span class='text-primary' style='font-size: 14px'>   Passable   </span> </p>";
            }
        } 
        elseif($moyenne>20) {
            echo "<p>Une moyenne ne peut être supérieure à 20</p>";
        }
        else {
            $decision = "Vous êtes éliminé";
            echo "<p>Decision : $decision</p>";
        }


        ?>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
