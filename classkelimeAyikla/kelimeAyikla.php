<?php
class kelimeAyikla{
   function kelime_bul($metin,$aranan){
       $dizi =explode(" ",$metin);
       $i=0;
       foreach($dizi as $val=>$key ){
           if($key==$aranan){
               $i++;
          }
       }
       echo "Kelime olaraktan ".$i." tane ".$aranan." kelimesi var</br>";
       $str = str_replace($aranan,'<span style="color:blue;text-align:center;text-decoration: underline;font-size: 200%;">'.$aranan.' </span>',$dizi);
       $yeniden = implode(" ",$str);
       echo $yeniden;
   }

}

?>