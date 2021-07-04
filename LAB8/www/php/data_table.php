<?php
require "conDB.php";
?>
<table>
    <thead>
        <tr>
            <td>ID</tr>
            <td>Name</tr>
            <td>Subject</tr>
            <td></td>
        </tr>
    </thead>
    <tbody>
    <?php
        $sql = "SELECT * FROM td_register LEFT JOIN tb_subject ON tb_register.subject_id 
        ORDER BY tb_register.id ASC";
        $sqli = $mysqli->query($sql);
        while($obj = $result->fetch_object()){
    ?>
        <tr>
            <td><?= $obj->id ?></tr>
            <td><?= $obj->pre_name . $obj->name ?></tr>
            <td><?= $obj->subject_name ?></tr>
            <td><a href="/php/del.php?id=<?=$obj->id ?>&sub_id=<?= $obj->subject_id ?>">DEL</a></td>
        </tr>
        <?php
        }
        ?>
    <tbody>
</table>
