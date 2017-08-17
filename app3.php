<?php

//phpinfo()

;

$array_assoc = [
    'milk'=>'молоко',
    'choco'=>'шоко',
    'tea'=>'чай'
];

?>

<ul>
<?php

foreach ($array_assoc as $value){
?>
    <li><?= $value ?></li>
    <?php
    }
    ?>
</ul>
<!--цикл для перебора массива-->

<?php
for ($i=0; $i<10; $i++){
    print ($i.'<br>');
}
?>

<?php
$i = 0;
while ($i<10){
    $value = $i++;
    print ($value);
}

$i == 0;


