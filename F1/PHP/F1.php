<?php
class F1 extends Monoplaza{
    private $patrocinador;
    
    public function __construct($pNombre, $pNacionalidad, $pNumero, $pEscuderia, $pPuntos, $pPatrocinador){
        parent::__construct($pNombre, $pNacionalidad, $pNumero, $pEscuderia, $pPuntos);
        $this->patrocinador = $pPatrocinador;
    }

    public function getPatrocinador(){
        return $this->patrocinador;
    }
    public function setPatrocinador($sPatrocinador){
        $this->patrocinador = $sPatrocinador; 
    }

    
    public function otorgarPuntos($posicion, $vueltaRapida) {
    $sumarPuntos = 0;
    $tablaPuntos = [0, 25, 18, 15, 12, 10, 8, 6, 4, 2, 1, 0];

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
        if ($num >= 1 && $num <= 22) {
            return true;
        } else {
            return false;
        }
    }

}
?>