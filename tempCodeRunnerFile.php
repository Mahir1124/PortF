<?php define("Hello",["Hello how are you","I am fine "]);
date_default_timezone_set("Asia/Kolkata");
class hello1{
    
    public $str = "My name is ... khan"; 
    function myName($name){    
        return (str_ireplace("...",$name,$this->str));

    }
    function getTime(){
        $T = date("H");
        $d = date("s:i:d:h:m:y");
        if($T<12){
            return "Good Morning !! it's $d'o clock ";
        }
        elseif($T<15)
        return "Good Afternoon !! it's $d'o clock ";
        elseif($T<18)
        return "Good Evening !! it's $d'o clock ";
        elseif($T>18)
        return "Good Night !! it's $d'o clock ";
    }
}
 class hello2 extends hello1
{
   
   
}



$Name = new hello2();
// echo ($Name->myName("Aman"));

// echo (3**3);

for ($i=0; $i < 2; $i++) { 
    
    echo Hello[$i] . "<br>";
}
echo $Name->getTime();
$arr = array("Hello ", "Lelo",66);
echo $arr[2];
?>