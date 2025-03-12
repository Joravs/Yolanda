<?php
    require_once '../functions/bd/ctdb.php';

    $selectTabla=$conn->prepare(
        'SELECT c.fecha,
        (select h.glucosa from hipo h where c.idUsuario=h.idUsuario and c.fecha=h.fecha and c.tipoComida=h.tipoComida),
        (select h.hora from hipo h where c.idUsuario=h.idUsuario and c.fecha=h.fecha and c.tipoComida=h.tipoComida),
        (select hr.glucosa from hiper hr where c.idUsuario=hr.idUsuario and c.fecha=hr.fecha and c.tipoComida=hr.tipoComida),
        (select hr.hora from hiper hr where c.idUsuario=hr.idUsuario and c.fecha=hr.fecha and c.tipoComida=hr.tipoComida),
        (select hr.correccion from hiper hr where c.idUsuario=hr.idUsuario and c.fecha=hr.fecha and c.tipoComida=hr.tipoComida),
        c.tipoComida, c.glucosa1,c.racion,c.insulina,c.glucosa2
            FROM controlGlucosa cg
            INNER JOIN comidas c ON (c.idUsuario=cg.idUsuario)
            WHERE c.idUsuario=(select u.idUsuario from usuario u where u.username=?)
            AND c.fecha=?
            GROUP BY c.idUsuario, c.tipoComida
            ORDER BY FIELD(tipoComida, "Desayuno","Mediodia","Comida","Merienda","Cena");'
    );

    $selectLD=$conn->prepare(
        'SELECT fecha,lenta,deporte
            FROM controlGlucosa cg
            WHERE cg.idUsuario=(select u.idUsuario from usuario u where u.username=?)
            AND cg.fecha=?
            GROUP BY cg.idUsuario
            ORDER BY fecha;'
    );
?>