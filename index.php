<?php
    include_once "./src/head.inc.php";
?>
<body>
    <header>
        <h1>
            &lt;/&gt;Méthode get
        </h1>
    </header>
    <main>
        <section>
            <p>
                <a href="index.php?genre=homme">vous êtes un homme</a>
                <a href="index.php?genre=femme">vous êtes une femme</a>
            </p>
        
        <?php
            include_once "./src/choice.inc.php";
        ?>
        </section>
    </main>
           

    <footer>
        <p>
            &copy; - PHP - 2022
        </p>
    </footer>

    <pre>
        <?php
           // print_r($_SERVER);
        ?>
    </pre>
</body>
</html>