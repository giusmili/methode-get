<?php
    class ControllerPage{

        static function choise(){
            
            if(isset($_GET["genre"])){

                $genre = $_GET["genre"];

                /* print "<p class=\"warning\">".$genre."</p>"; */
                /* $genre !=="femme" && $genre !=="homme" ? print '<h2>erreur</h2>' : true; */
                echo $genre === "femme" ?
                '<figure>
                    <img src="./asset/femme.png" alt="logo">
                    <figcaption>
                        <h2>'.$genre.'</h2>
                    </figcaption>
                </figure>
                ' :
                '<figure>
                    <img src="./asset/homme.png" alt="logo">
                    <figcaption>
                        <h2>'.$genre.'</h2>
                    </figcaption>
                </figure>';
                
              
                

            }
        
        }
    
    
    }
ControllerPage::choise();
