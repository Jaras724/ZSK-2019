<!DOCTYPE html>
<html land="pl" dir="ltr">
<head>
    
    <meta charset="utf-8">
    <tittle></tittle>
    
    </head>
    <body>
    
    <?php
        
        //php wersja
   //echo phpinfo();
        
        //potęgi
        
        $potega = 2**10;
        echo $potega , '<hr>';
        
        //operacje na zmiennych (and &, or |, not, ~, xor ^, >>, << )
        
        $x = 0b1010; //10
        
        echo $x, '<br>';
        
        $x = $x >> 1; //101
        
        echo $x,  '<br>';
        
        $x = $x << 2; //10100
        
        echo $x,  '<hr>';
        
    ##################################################################################################################
        //sprawdzenie
        
        $x = 1;
        $y = 1;
        $wynik = $x <=> $y;
        
        echo $wynik, '<hr>';
            
        if ($x === $y) {
            echo "Identyczna";
        } else {
            echo "Różna";
        }
        
        echo gettype($x); //integer
        echo gettype($y), '<hr>'; //double
    
############################################################################################################
        
        $x=2;
        echo $x++; //2
        echo ++$x; //4
        echo $x; //4
        $y=$x++;
        echo $y; //4
        $y=++$x;
        echo $y; //6
        echo ++$y, '<hr>'; //7
        
        #########################################3
        
        //operatory rzutowania
        //bool, int, float, string, array, object, unset
        $text1 = '123abc';
        $text2 = -1;
        $text3 = 1;
        $text4;
        
        $x1 = (int)$text1;
        echo $x1;
        
        $x2 = (bool)$text2;
        echo $x2;
        
        $x3 = (string)$text2;
        echo $x3;
        
        $x4 = (unset)$text3;
        echo $x4;
        echo gettype($x4); //null
        
        echo $text4; //notice
        echo @gettype($text4); //NULL @ukrywa bład, gettype - kontrola typu danych
        
        //rozmiar typu integer
        echo PHP_INT_SIZE, '<hr>';//8 zawsze duze litery
        
        //kontrola typu zmiennych
        $x = 'text';
        echo is_string($x); //1
        echo is_int($x); //false, bo nic nie wyswietla
        echo is_null($x);//false, bo nic nie wyswietla
        echo is_bool($x);//false, bo nic nie wyswietla
        echo is_float($x);//false, bo nic nie wyswietla
        
        ####################################################################3
        //zmienna superglobalna
        
        //$_GET, $_POST, $_COOKIE, $_FILES, $_SESSION, $_SERVER
            ?>
    
    </body>
</html>
