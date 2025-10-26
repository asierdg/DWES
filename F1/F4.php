<?php
class F4 extends Monoplaza{
    private $pais;

    public function __construct($pNombre, $pNacionalidad, $pNumero, $pEscuderia, $pPuntos, $pPais){
        parent::__construct($pNombre, $pNacionalidad, $pNumero, $pEscuderia, $pPuntos);
        $this->pais = $pPais;
    }

    public function getPais(){
        return $this->pais;
    }
    public function setPais($sPais){
        $this->pais = $sPais; 
    }


    public function otorgarPuntos($posicion, $vueltaRapida) {
    $sumarPuntos = 0;
    $tablaPuntos = [0, 25, 18, 15, 12, 10, 8, 6, 4, 2, 1, 0];

    if ($this->posicionValida($posicion) == true) {
        if ($vueltaRapida == true){
            echo "El piloto ha realizado una vuelta rapida";
        }
        
        $sumarPuntos = $sumarPuntos + $tablaPuntos[$posicion];
        $this->puntos = $this->puntos + $sumarPuntos;

    } else {
        echo "La posicion no es valida";
    }
    }


    public function posicionValida($num) {
        if ($num >= 1 && $num <= 30) {
            return true;
        } else {
            return false;
        }
    }
}
?>