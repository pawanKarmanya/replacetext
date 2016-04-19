<?php
if(isset($_POST['submit'])){
    $find=$_POST['find'];
    $find=explode(",",$find);
    array_walk($find,'addDelimiter');
    $replace= explode(",", $_POST["replace"]);
    $textarea=$_POST['textarea'];
   
        $result= preg_replace($find, $replace, $textarea);
    
}
function addDelimiter(&$y){
    $y="/".trim($y)."/";
}

?>