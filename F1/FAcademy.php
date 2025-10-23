<?
class FAcademy extends Monoplaza{
    private $potenciaMax;

    public function __construct($pNombre, $pNacionalidad, $pNumero, $pEscuderia, $pPuntos, $pPotenciaMax){
        parent::__construct($pNombre, $pNacionalidad, $pNumero, $pEscuderia, $pPuntos);
        $this->potenciaMax = $pPotenciaMax;
    }
    
}
?>