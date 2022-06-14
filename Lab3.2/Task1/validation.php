<?php

    $name = $_REQUEST['name'];

    if($name == null ){
        echo "Value can not be null";
    }elseif(strlen($name)<2){
        echo "Please enter atleast two words";
    }elseif(!preg_match('/[a-zA-z]/',$name)){
        echo "Please enter a-z or A-Z or dot(.) or dash(-)";
    }elseif(substr($name,0,1)!=preg_match("/[a-zA-z]/",$name)){
        echo "Must start with a letter";
    }else{
        echo " Yeor name is Valid";
    }

?>