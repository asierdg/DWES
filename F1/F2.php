<?
class F2 extends Monoplaza{
    private $superlicencia;

    public function __construct($pNombre, $pNacionalidad, $pNumero, $pEscuderia, $pPuntos, $pSuperlicencia){
        parent::__construct($pNombre, $pNacionalidad, $pNumero, $pEscuderia, $pPuntos);
        $this->superlicencia = $pSuperlicencia;
    }

}
?>