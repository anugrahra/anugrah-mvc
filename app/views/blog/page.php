<p>
    <?php
        $a = rtrim($_SERVER['REQUEST_URI'], '/');
        $a = explode('/', $a);
        var_dump($a);

        echo "<br><br>";
        echo $a[4];
    ?>
</p>