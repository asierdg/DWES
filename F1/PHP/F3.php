<?php
class F3 extends Monoplaza{
    private $academia;

    public function __construct($pNombre, $pNacionalidad, $pNumero, $pEscuderia, $pPuntos, $pAcademia){
        parent::__construct($pNombre, $pNacionalidad, $pNumero, $pEscuderia, $pPuntos);
        $this->academia = $pAcademia;
    }

    public function getAcademia(){
        return $this->academia;
    }
    public function setAcademia($sAcademia){
        $this->academia = $sAcademia; 
    }


    public function otorgarPuntos($posicion, $vueltaRapida) {
    $sumarPuntos = 0;
    $tablaPuntos = [0, 10, 8, 7, 6, 5, 4, 3, 2, 1, 0];

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


    public function subirCategoria($superlicencia) {
        return new F2(
            $this->nombre,
            $this->nacionalidad,
            $this->numero,
            $this->escuderia,
            $this->puntos,
            $superlicencia
        );
    }
}
?>  