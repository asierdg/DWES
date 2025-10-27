<?php
class FAcademy extends Monoplaza{
    private $potenciaMax;

    public function __construct($pNombre, $pNacionalidad, $pNumero, $pEscuderia, $pPuntos, $pPotenciaMax){
        parent::__construct($pNombre, $pNacionalidad, $pNumero, $pEscuderia, $pPuntos);
        $this->potenciaMax = $pPotenciaMax;
    }

    public function getPotenciaMax(){
        return $this->potenciaMax;
    }
    public function setPotenciaMax($sPotenciaMax){
        $this->potenciaMax = $sPotenciaMax; 
    }


    public function otorgarPuntos($posicion, $vueltaRapida) {
    $sumarPuntos = 0;
    $tablaPuntos = [0, 18, 15, 12, 10, 8, 6, 4, 2, 1, 0];

    if ($this->posicionValida($posicion) == true) {
        if ($posicion <= 10 && $vueltaRapida == true) {
            $sumarPuntos = $sumarPuntos + 1;
            echo "Mas 1 punto por realizar una vuelta rapida y quedar entre los 10 primeros";
        }
        else if ($vueltaRapida == true){
            echo "El piloto ha realizado una vuelta rapida";
        }

        $sumarPuntos = $sumarPuntos + $tablaPuntos[$posicion];
        $this->puntos = $this->puntos + $sumarPuntos;

    } else {
        echo "La posicion no es valida";
    }
    }


    public function posicionValida($num) {
        if ($num >= 1 && $num <= 18) {
            return true;
        } else {
            return false;
        }
    }


    public function subirCategoria($pais) {
        return new F4(
            $this->nombre,
            $this->nacionalidad,
            $this->numero,
            $this->escuderia,
            $this->puntos,
            $pais
        );
    }
}
?>