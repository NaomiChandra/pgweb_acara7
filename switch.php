<!DOCTYPE html>
<html>

<body>

    <?php
    $makanan = "mochi";

    switch ($makanan) {
        case "mochi":
            echo "Mochi sangat suka sekali!";
            break;
        case "mie ayam":
            echo "Mie ayam lumayan suka!";
            break;
        case "bakso":
            echo "Bakso kurang suka!";
            break;
        default:
            echo "Bukan makanan favoritku";
    }
    ?>

</body>

</html>