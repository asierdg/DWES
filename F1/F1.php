<?
class F1 extends Monoplaza{
    private $patrocinador;
    
    public function __construct($pNombre, $pNacionalidad, $pNumero, $pEscuderia, $pPuntos, $pPatrocinador){
        parent::__construct($pNombre, $pNacionalidad, $pNumero, $pEscuderia, $pPuntos);
        $this->patrocinador = $pPatrocinador;
    }
    
}
?>