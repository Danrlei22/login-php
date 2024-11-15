<?php
    echo '<h2>Bem vindo '. htmlspecialchars($_SESSION['login']).'</h2>';
    echo '<a class="linkExit" href="?logout">Exit </a>';
?>