<?php 



function giveNumber($num){
    if($num <= 10 )
    {
        throw new Exception("your number is less than 10, try another");
    }else{
        echo "great you number is greater than 10, Woww";
    }
};

try{
    giveNumber(20);
}catch(Exception $error){
   echo $error->getMessage();
}

// 

?>