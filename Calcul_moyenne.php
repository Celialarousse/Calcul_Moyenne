<html> 
    <head>
        <title>Calcule de la moyenne du BTS</title>
    </head>
    <body>
        <?php
            include 'btsBlanc.php'; #Inclusion du fichier contenant la fonction de calcul de la moyenne.

            $notes = [ #Tableau associatif contenant les matières, leurs coefficients et les notes obtenues.
                ['mat' => 'Progammation', 'coeff' => 1 , 'note' => 12],
                ['mat' => 'Fondamentaux', 'coeff' => 1 , 'note' => 9],
                ['mat' => 'Base De Données', 'coeff' => 1 , 'note' => 11,75],
                ['mat' => 'Système Réseau', 'coeff' => 1 , 'note' => 11],
                ['mat' => 'Cyber-Sécurité', 'coeff' => 4 , 'note' => 12],
                ['mat' => 'CEJM', 'coeff' => 3 , 'note' => 7,75],
                ['mat' => 'CGE', 'coeff' => 2 , 'note' => null],
                ['mat' => 'Anglais', 'coeff' => 1 , 'note' => null]
            ];

            echo "<h2>Calcul de la moyenne du BTS</h2>";
            echo "<ul>";
            $moyenne = btsBlanc($notes); #Appel de la fonction pour calculer la moyenne avec le tableau des notes.

            foreach ($notes as $note) { #Affichage des matières, coefficients et notes.
                echo "<li>Matière : " . $note['mat'] . ", Coefficient : " . $note['coeff'] . ", Note : " . $note['note'] . "</li>"; #Affichage de chaque matière avec son coefficient et sa note.
            }

            echo "</ul>";
            echo "<p>Moyenne générale : " . round($moyenne, 2) . "</p>"; #Affichage de la moyenne générale arrondie à deux décimales.

            if ($moyenne >= 10) { #Condition pour afficher un message en fonction de la moyenne.
                echo "Bravo continuez comme sa";
            } else {
                echo "Il faut travailler davantage";
            }
        ?>
    </body>
</html>