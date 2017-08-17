<style>
    table{
        border: 1px solid #000;
        border-spacing: 0; /* Расстояние между ячейками */
    }
    td {
        width: 50px;
        height: 50px;
        border: none !important;
        margin: 0;
        padding: 0;
    }
    tr{
        border: none !important;
        margin: 0;
        padding: 0;
    }
    .black{
        background-color: g#8a7a66;
    }
    .white{
        background-color: #fff;
    }
    .figure0{
        background-image: url("img/бел король.png");
        background-size: 100%;
    }
    .figure1{
        background-image: url("img/бел ферзь.png");
        background-size: 100%;
    }
    .figure2{
        background-image: url("img/черн конь.png");
        background-size: 100%;
    }
    .figure3{
        background-image: url("img/черн король.png");
        background-size: 100%;
    }
</style>

<table>
    <?php

    $calk = 0;
    for($row = 0; $row<8; $row++) {
        //row.create
        $calk = $calk + 1;
        //$calk = numbers of squares
        ?>
        <tr>
            <?php for ($squeare = 0; $squeare < 8; $squeare++) {
                //square.append
                if ($calk % 2 > 0) {
                    //square.addClass white
                    $calk = $calk + 1;
                    ?>
                    <td class="white"></td>
                    <?php
                } else {
                    //square.addClass black
                    $calk = $calk + 1;
                    ?>
                    <td class="black"></td>
                    <?php
                }
            }
            ?>
        </tr>
        <?php
    }
?>
</table>

<?php
$td =0;
$tr =0;


$chessDesk = [];
$white = 'class="white';
$black = 'class="black';
$figures = 'фигуры';



for($td=0; $td<8; $td++){
    for ($tr=0; $tr<8; $tr++){
        if($td % 2 != 0){
            if ($tr % 2 != 0) {
                $chessDesk [$tr][$td]= $white;
            } else {
                $chessDesk [$tr][$td]= $black;
            }
        }else{
            if ($tr % 2 != 0) {
                $chessDesk [$tr][$td]= $black;
            } else {
                $chessDesk [$tr][$td]= $white;
            }
        }
    }
}

for($i=0; $i<4; $i++){
    $r = rand(0, 7);
    $rr = rand(0, 7);
    //echo $r, $rr;
    $chessDesk[$r][$rr] =  $chessDesk[$r][$rr]. ' figure'."$i";
}





?>
<br><br><br><br>
<table>
    <?php

    $str = 0;
    $std = 0;
    foreach ($chessDesk as $tr){
        echo "<tr>";
        foreach ($tr as $td){
            ?>
    <td <?php echo $td ?> "> </td>
        <?php
        }
    }
    ?>
</table>