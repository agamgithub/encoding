<?php 


function strToBinary($s) 
{ 
    $n = strlen($s); 
  
  
    for ($i = 0; $i < $n; $i++) 
    { 
        // convert each char to 
        // ASCII value 
        $val = ord($s[$i]); 
  
        // Convert ASCII value to 
        // binary 
        $bin = ""; 
        while ($val > 0) 
        { 
            ($val % 2)? $bin=$bin.'1' :  
                         $bin=$bin.'0'; 
                           
            $val= floor($val / 2); 
        } 
        for($x = strlen($bin) - 1; 
                    $x >= 0; $x--) 
                      
        echo $bin[$x]; 
        echo " "; 
    } 
} 

echo '<form method="POST"> 
        <input type="text" name="input" placeholder="Masukkan Kata">
        <input type="submit" name="proses" value="proses">
        </form>

';


$s = $_POST['input']; 
$_POST['proses'] = strToBinary($s); 
  

?> 
