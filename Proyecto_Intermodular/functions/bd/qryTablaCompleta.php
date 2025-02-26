<?php
    require_once '../functions/bd/ctdb.php';

    $selectTabla=$conn->prepare(
        'SELECT c.glucosa1,c.racion,c.insulina,c.glucosa2,
        (select h.glucosa from hipo h where c.idUsuario=h.idUsuario and c.fecha=h.fecha and c.tipoComida=h.tipoComida),
        (select h.hora from hipo h where c.idUsuario=h.idUsuario and c.fecha=h.fecha and c.tipoComida=h.tipoComida),
        (select hr.glucosa from hiper hr where c.idUsuario=hr.idUsuario and c.fecha=hr.fecha and c.tipoComida=hr.tipoComida),
        (select hr.hora from hiper hr where c.idUsuario=hr.idUsuario and c.fecha=hr.fecha and c.tipoComida=hr.tipoComida),
        (select hr.correccion from hiper hr where c.idUsuario=hr.idUsuario and c.fecha=hr.fecha and c.tipoComida=hr.tipoComida),
        cg.deporte,cg.lenta,c.tipoComida
            FROM controlGlucosa cg
            INNER JOIN comidas c ON (c.idUsuario=cg.idUsuario)
            WHERE cg.idUsuario=(select u.idUsuario from usuario u where u.username=?)
            AND c.fecha=?
            and c.tipoComida=?
            GROUP BY cg.idUsuario, c.tipoComida
            ORDER BY FIELD(tipoComida, "Desayuno","Mediodia","Comida","Merienda","Cena");'
    );
?>