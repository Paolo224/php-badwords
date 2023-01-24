<h2>
    <?php
    echo $_GET['paragrafo'];
    ?>
</h2>

<h3>
    <?php
    echo $_GET['parola'];
    ?>
</h3>

<h2>
    <?php
    echo str_replace($_GET['parola'], '***', $_GET['paragrafo']);
    ?>
</h2>

<h3>
    <?php
    echo $_GET['parola'];
    ?>
</h3>