<?php
    function btsBlanc (array $notes) {
        $totalNote = 0; #Variable pour stocker la somme des notes pondérées par leurs coefficients.
        $totalCoeff = 0; #Variable pour stocker la somme des coefficients.

        foreach ($notes as $key => $note) { #Boucle pour calculer la somme des notes pondérées et des coefficients.
            if ($note['note'] !== null) { #Vérification que la note n'est pas nulle.
                $totalNote += $note['note'] * $note['coeff']; #Calcul de la note pondérée.
                $totalCoeff += $note['coeff']; #Addition des coefficients.
            }
        }
        if ($totalCoeff > 0) {
            $moyenne = $totalNote / $totalCoeff; #Calcul de la moyenne générale.
        } else {
            $moyenne = 0; #Si aucun coefficient n'est présent, la moyenne est 0.
        }
        

        return $moyenne; #Retourne la moyenne calculée.
    }
?>