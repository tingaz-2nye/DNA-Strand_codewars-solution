<?php

    function DNA_strand($dna){

        $dna_array = array('T'=>'A','A'=>'T','C'=>'G','G'=>'C');
        return strtr($dna,$dna_array);
    }

    echo DNA_strand('ATTGC');
 

?>