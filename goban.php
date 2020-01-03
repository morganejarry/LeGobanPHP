<?php

function displayGoban($game){
        $size = count($game)-1;
        echo '<table>';
        foreach($game as $rowKey => $row){
                echo '<tr>';
                foreach($row as $columnKey => $stone){
                        // <?php echo   ===     <?=
                        ?>
                        <td class="container"><div class= <?= construct($rowKey,$columnKey,$size);?> ><?= setStone($stone);?></div></td>
                        <?php
                }
                echo '</tr>';
        }
        echo '</table>';
}

function construct($row,$column,$size){
        if ($row == 0 && $column == 0){
                return '"top left"';
        }else if ($row == 0 && $column ==$size){
                return '"top right"';
        }else if ($row == $size && $column == 0){
                return '"bottom left"';
        }else if ($row == $size && $column == $size){
                return '"bottom right"';
        }else if ($row == 0){
                return '"top"';
        }else if ($column == 0){
                return '"left"';
        }else if ($column == $size){
                return '"right"';
        }else if ($row == $size){
                return '"bottom"';
        }else{
                return '"center"';
        }
}

function setStone($stone){
        if ($stone === true){
                return '<div class="white"></div>';
        }else if ($stone === false){
                return '<div class="black"></div>';
        }
}