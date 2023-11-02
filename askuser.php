<!-- https://github.com/giusmili/methode-get.git -->
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
                <a href="askuser.php?reponse=Oui">vous majeur</a>
                <a href="askuser.php?reponse=Non">vous n'êtes pas majeur</a>
            </p>
        
    <?php
          class UserAsk{
                # code...
            public function askage(){

                if(isset($_GET['reponse'])){
                
                    $_response = $_GET['reponse'];

                    switch ($_response) {
                        case 'Oui':
                            print '<p class="warning">'.$_response.'</p>';
                            break;
                        case 'Non':
                            print '<p class="warning">'.$_response.'</p>';
                            break;

                        
                        default:
                            print '<p class="warning"><span aria-hidden="true">🔥</span> Erreur : faites votre choix : 
                            <a href="help.php">Besoin d\'aide?</a></p>';
                            break;
                    }


                }
            }
        } 

        $_newask = new UserAsk();
        $_newask->askage()

        
       
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