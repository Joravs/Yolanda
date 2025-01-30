<!doctype html>
<html lang="en">
    <head>
        <title>Gestor de Administracion de Insulina</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"/>
    </head>

    <body>
        <div class="container-fluid">
            <div class="row text-center">
                <h1>Gestor de Administracion de Insulina</h1>
            </div>
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-primary align-middle">
                    <thead class="table-light">
                    <caption></caption>
                        <tr>
                            <th class="table-light"></th>
                            <th colspan="9">Desayuno</th>
                            <th colspan="9">Comida</th>
                            <th colspan="9">Cena</th>
                            <th class="table-light" colspan='2'></th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        <tr>
                            <th></th>
                            <th colspan="4"></th>
                            <th colspan="2">Hipo</th>
                            <th colspan="3">Hiper</th>
                            <th colspan="4"></th>
                            <th colspan="2">Hipo</th>
                            <th colspan="3">Hiper</th>
                            <th colspan="4"></th>
                            <th colspan="2">Hipo</th>
                            <th colspan="3">Hiper</th>
                            <th></th>
                            <th></th>
                        </tr>
                        <tr>
                            <th></th>
                            <?php 
                            for($i=0;$i<3;$i++){
                                echo "
                                <th>GL/1h</th>
                                <th>Rac.</th>
                                <th>Insu.</th>
                                <th>GL/2h</th>
                                <th>Glu.</th>
                                <th>Hora</th>
                                <th>Glu.</th>
                                <th>Hora</th>
                                <th>Corr.</th>";
                            }?>
                            <th>Deporte</th>
                            <th>Lenta</th>
                        </tr>
                        <?php
                            $diaMes=date("t");
                            for($i=1;$i<=$diaMes;$i++){
                                echo "<tr>";
                                echo "<td>Dia $i</td>";
                                for($j=0;$j<29;$j++){
                                    echo "<td></td>";
                                }
                                echo "</tr>";
                            }
                        ?>
                    </tbody>
                    <tfoot>
                        
                    </tfoot>
                </table>
            </div>
        </div>
    </body>
</html>
