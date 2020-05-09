<?php
$girisdogrumu=false;
if(empty($_POST)==false)
{
   
    $kadi=$_POST["kadi"];
    $sifre=$_POST["sifre"];
    //kontrol
       if($kadi=="tahir.uzelli@gmail.com"&& $sifre=="123") 
       {
         //dogruysa
           echo "Hosgeldin tahir";
           $girisdogrumu=true;
		   <button type="button">Bu Bir Butondur</button>
       }
    else
    {
    //degilse logine geri don
        header ("Location:Login.html");

    }
}


?>
