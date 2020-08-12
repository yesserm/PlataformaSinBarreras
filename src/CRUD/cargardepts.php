<?php
    $query=<<<SQL
        SELECT * FROM departamentos;
    SQL;
    $result=$db->prepare($query);
    
    foreach($result){
        
    }
?>