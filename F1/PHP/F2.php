<?php
class F2 extends Monoplaza{
    private $superlicencia;

    public function __construct($pNombre, $pNacionalidad, $pNumero, $pEscuderia, $pPuntos, $pSuperlicencia){
        parent::__construct($pNombre, $pNacionalidad, $pNumero, $pEscuderia, $pPuntos);
        $this->superlicencia = $pSuperlicencia;
    }

    public function getSuperlicencia(){
        return $this->superlicencia;
    }
    public function setSuperlicencia($sSuperlicencia){
        $this->superlicencia = $sSuperlicencia; 
    }


    public function otorgarPuntos($posicion, $vueltaRapida) {
    $sumarPuntos = 0;
    $tablaPuntos = [0, 10, 8, 7, 6, 5, 4, 3, 2, 1, 0];

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
        if ($num >= 1 && $num <= 24) {
            return true;
        } else {
            return false;
        }
    }


    public function subirCategoria($patrocinador) {
        if ($this->superlicencia == false){
            echo "El piloto no tiene puntos suficientes de superlicencia para subir a F1";
        }else{
            return new F1(
                $this->nombre,
                $this->nacionalidad,
                $this->numero,
                $this->escuderia,
                $this->puntos,
                $patrocinador
            );
        }
    }
}
?>