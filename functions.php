<?php

class classes
{
    function hypo()//finds the maximum range of a triangle's last edge 
    {
        $sum = 0;
        foreach (func_get_args() as $edge) 
        {
            if (is_int($edge)); //is_int() - to know if integer or not
            $sum += pow($edge, 2); //pow(base,expo) - exponential expression
        }
        return sqrt($sum);
    }

    function countOnes($binary)//function that counts all the ones in the binary representation of an integer
    {
        $count = 0;

        while ($binary) 
        {
            $count += $binary & 1;
            $binary >>= 1;
        }
        return $count;
    }

    function partPath($fpath, $spath)//function that receives 2 parts of a path
    {
        $part= array($fpath, $spath);
        echo join(" / ",$part);

    }

    //function that validates if a given number n is a Sastry number
    function sastryNum($sassy)
    {
        while($sassy>=0)
        {
            $equal = ($sassy . $sassy + 1);

            if($equal = sqrt($equal))
            {
                if($equal == floor($equal)) // floor() rounds a number to the nearest integer
                {
                    return "$equal => $sassy TRUE";
                }
                else
                {
                    return "$equal => $sassy FALSE";
                }
            }


        }
    }

}