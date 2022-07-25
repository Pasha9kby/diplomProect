<?php
?>

<div>
    это представление
    всех продуктов
</div>

<ul>
    <? foreach ($product as $value):?>
    <li><?php echo "Товар: ".$value['name']." по цене ".$value['price']; ?></li>
    <? endforeach;?>

</ul>
