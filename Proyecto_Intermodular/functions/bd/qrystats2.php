<?php
    require_once 'ctdb.php';

    $stats2=$conn->prepare('select month(h.fecha) as mes,count(DISTINCT h.fecha) as Hipoglucemias,count(DISTINCT hr.fecha) as Hiperglucemias FROM hipo h
    left join hiper hr on (hr.idUsuario=h.idUsuario)
    where h.idUsuario=?
    and h.fecha between ? and ?
    group by mes;');
?>