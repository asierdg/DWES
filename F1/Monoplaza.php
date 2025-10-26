<?php
class Monoplaza{
    protected $nombre;
    protected $nacionalidad;
    protected $numero;
    protected $escuderia;
    protected $puntos;

    public function __construct($pNombre, $pNacionalidad, $pNumero, $pEscuderia, $pPuntos) {
        $this->nombre = $pNombre;
        $this->nacionalidad = $pNacionalidad;
        $this->numero = $pNumero;
        $this->escuderia = $pEscuderia;
        $this->puntos = $pPuntos;
    }

    public function getNombre(){
        return $this->nombre;
    }
    public function setNombre($sNombre){
        $this->nombre = $sNombre; 
    }

    public function getNacionalidad(){
        return $this->nacionalidad;
    }
    public function setNacionalidad($sNacionalidad){
        $this->nacionalidad = $sNacionalidad; 
    }

    public function getNumero(){
        return $this->numero;
    }
    public function setNumero($sNumero){
        $this->numero = $sNumero; 
    }

    public function getEscuderia(){
        return $this->escuderia;
    }
    public function setEscuderia($sEscuderia){
        $this->escuderia = $sEscuderia; 
    }

    public function getPuntos(){
        return $this->puntos;
    }
    public function setPuntos($sPuntos){
        $this->puntos = $sPuntos; 
    }

}
?>