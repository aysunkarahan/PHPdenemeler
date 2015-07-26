<?php
class kelimeAyikla{
    /**
     *
     */
    public $db;
        function __construct(){
        $host = "localhost";
        $dbname = "arama";
        $user = "root";
        $pass= "";
        $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8";

        try{
            $this->db = new PDO($dsn,$user,$pass);
        }
        catch(PDOException $e) {
            echo "[HATA]: Veritabanı-".$e->getMessage();
        }
    }


   public function kelime_bul($metin,$aranan){
       /*fonksiyondaki $metin parametresi metin $aranan parametresi ise o metinde aranacak kelimeyi ifade eder*/
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

    /**
     * @param $metin
     * @param $aranan
     * @return bool
     */
    public function yazdir($metin,$aranan){

        $q = "INSERT INTO aranan_kelimeler VALUES (NULL ,:metin,:aranan,now())";
        $sorgu = $this->db->prepare($q);
        $sorgu->bindParam(":metin",$metin);
        $sorgu->bindParam(":aranan",$aranan);
        $sorgu->execute();
        if($sorgu->rowCount()>0){
            return true;
        }else{
            return false;
        }

    }

}

?>