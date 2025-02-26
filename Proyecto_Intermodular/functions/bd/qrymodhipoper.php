<?php
    require_once '../bd/ctdb.php';

    $updateHiper=$conn->prepare('
        UPDATE `hiper` SET `hora`=?,`glucosa`=?,`correccion`=? WHERE idUsuario=? and fecha=? and tipoComida=?;
    ');
    $updateHipo=$conn->prepare('
        UPDATE `hipo` SET `hora`=?,`glucosa`=? WHERE idUsuario=? and fecha=? and tipoComida=?;
    ');
    $selectHipo=$conn->prepare('select * from hipo WHERE idUsuario=? and fecha=? and tipoComida=?;
    ');
    $selectHiper=$conn->prepare('select * from hiper WHERE idUsuario=? and fecha=? and tipoComida=?;'
    );
    $insertHipo=$conn->prepare('
    INSERT INTO `hipo`(`idUsuario`, `fecha`, `tipoComida`, `hora`, `glucosa`) VALUES (?,?,?,?,?)');
    $insertHiper=$conn->prepare('
    INSERT INTO `hiper`(`idUsuario`, `fecha`, `tipoComida`, `hora`, `glucosa`, `correccion`) VALUES (?,?,?,?,?,?)');
?>