<?php session_start(); ?>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark navbar-static-top">
    <a class="navbar-brand" href="../menu_negociacao.php"><?php print $_SESSION['nome_empresa']; ?></a>
      <ul class="navbar-nav">

        <p class="text-right"></p>
        <ul class="nav justify-content-end">
            <li class="nav-item">
              <a class="nav-link" href = "../menu/logout.php">Logout</a>
            </li>
          </ul>
        </ul>
</nav>