<?php
//POO: crear nuestra clase calculadora
class calculadora{
    public function calcularDatos($val1,$val2,$opcion){
        switch ($opcion) {
            case 'suma':
                return $val1+$val2;
                break;
            case 'resta':
                return $val1-$val2;
                break;
            case 'division':
                return $val1/$val2;
                break;
            case 'multiplication':
                return $val1*$val2;
                break ;
            case 'raiz';
            return sqrt($val1);
            break;
            case 'potencia';
            return pow($val1,$val2);
            default : #en caso no se cumpla
            break;
    }
 }
}
?>              