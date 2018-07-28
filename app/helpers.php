<?php
/**
 * Created by PhpStorm.
 * User: Jaime
 * Date: 27/07/2018
 * Time: 23:44
 */
namespace App;

define ("FINICIO","3-7-2018"); //CICLO CON ID = 0

use DateTime;
use DateInterval;

class JaimeHelper {

    public static function getCicloSobreDia(DateTime $f){

        $f_inicio = new DateTime(FINICIO);
        $f_comp = $f;
        $dif = date_diff($f_inicio,$f_comp);
        $dif_dias = $dif->days;
        if ($dif->invert)
            $dif_dias = -$dif_dias;

        $cuantos_ciclos = floor($dif_dias/8);
        $ret[2] = $dif_dias%8;
        $str = "+".abs($cuantos_ciclos*8)." days";
        if ($cuantos_ciclos<0)
            $fecha_inicio_nueva = $f_inicio->sub(DateInterval::createFromDateString($str));
        else
            $fecha_inicio_nueva = $f_inicio->add(DateInterval::createFromDateString($str));

        $ret[0] = $fecha_inicio_nueva;
        $ret[1] = $cuantos_ciclos;

        return $ret; //[0] = DateTime ciclo    [1] = int ciclos pasados    [2] = int dia del ciclo [0..7]
    }
}