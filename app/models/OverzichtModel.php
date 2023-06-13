<?php

class overzichtModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getLeerlingen()
    {
        $query = "SELECT leerling.Id, leerling.Voornaam, leerling.Tussenvoegsel, leerling.Achternaam, lespakket.paketnaam, lespakket.aantallessen, lespakket.rijbewijscategorie, lespakket.prijs, leerlingperlespakket.startdadumrijlessen, leerlingperlespakket.datumrijbewijsbehaald
                  FROM leerling
                  INNER JOIN leerlingperlespakket ON leerling.Id = leerlingperlespakket.leerlingld
                  INNER JOIN lespakket ON leerlingperlespakket.lespakketld = lespakket.Id
                  ORDER BY leerling.Id"
                ;
        try {

            $this->db->query($query);
            return $this->db->resultSet();

        } catch (PDOException $e) {
            
            echo "Fout bij het ophalen van de gegevens: " . $e->getMessage();
            exit;
        }
    }
}


?>
