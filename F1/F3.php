<?
class F3 extends Monoplaza{
    private $academia;

    public function __construct($pNombre, $pNacionalidad, $pNumero, $pEscuderia, $pPuntos, $pAcademia){
        parent::__construct($pNombre, $pNacionalidad, $pNumero, $pEscuderia, $pPuntos);
        $this->academia = $pAcademia;
    }

}
?>  