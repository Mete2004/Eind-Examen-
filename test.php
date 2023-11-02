<?php

            // Een PHP-array met de prijsinformatie
            $prijslijst = array(
                "Heren knippen" => "€15",
                "Dames knippen" => "€25",
                "Kinderen knippen" => "€10",
                "Haarstyling" => "€20",
                "Kleurbehandeling" => "€40"
            );

            // Loop door de array en vul de prijstabel
            foreach ($prijslijst as $service => $prijs) {
                echo "<tr>";
                echo "<td>$service</td>";
                echo "<td>$prijs</td>";
                echo "</tr>";
            }
            ?>