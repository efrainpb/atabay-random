<?php
/**
 * User: Efrain
 * Date: 19/1/2016
 * Time: 10:56
 */
 $id = $_POST['id'];
 $id++;
 $number = rand (100000,999999);
 $cadena = generarString(6);
 $mezcla = generarMezcla(6);
 $array = array('id'=>$id,'numero' => $number,'cadena' => $cadena,'mezcla'=>$mezcla);
 echo json_encode($array);

    function generarString($tamano){
        $cadena = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $tamano_cadena = strlen($cadena);
        $randomString = '';
        for ($i = 0; $i < $tamano; $i++) {
            $randomString .= $cadena[rand(0, $tamano_cadena - 1)];
        }
        return $randomString;
    }

    function generarMezcla($tamano){
        $cadena = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $tamano_cadena = strlen($cadena);
        $randomMezcla = '';
        for ($i = 0; $i < $tamano; $i++) {
            $randomMezcla .= $cadena[rand(0, $tamano_cadena - 1)];
        }
        return $randomMezcla;
    }
?>