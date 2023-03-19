<?php
    require_once("../Model/conexao.php");
    // listagem de semanas

    $result = Conexao::Conectar()->query("SELECT * FROM estudo");
?>
<table style="border:2px solid black">
    <thead>
        <tr>
            <td><b>Materia</b></td>
            <td><b>Horas</b></td>
            <td><b>Data</b></td>
            <td><b>Opções</b></td>
        </tr>
    </thead>
    <tbody>
        <?php
            while($row = $result->fetch_assoc())
            {
        ?>
        
                <tr>
                    <td>
                        <?= $row['materia'] ?>
                    </td>
                    <td>
                        <?= $row['horas_estudadas'] ?>
                    </td>
                    <td>
                        <?= $row['data'] ?>
                    </td>
                    <td>
                        <a href="delete.php?id=<?= $row['id'] ?>">
                            -- Apagar
                        </a>
                        <a href="edit.php?id=<?= $row['id'] ?>">
                            -- Editar
                        </a>
                    </td>
                </tr>
            
        <?php
            }
        ?>
    </tbody>
</table>