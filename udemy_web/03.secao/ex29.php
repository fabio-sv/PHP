<!-- Podemos exetucar códigos php dentro de tags html e códigos html dentro de tags php -->
<h1>
    <?php
    echo "Ola PHP <br>";
    echo "<a href=#>Elemento html dentro de uma tag PHP</a>";

    echo "<h1>";
    echo "Ola Mundo HTML";
    echo "</h1>";
    ?>
</h1>

<?= "<h2>Outra forma de me expressar...</h2>"?>

<button><?="Botão PHP"?></button>


