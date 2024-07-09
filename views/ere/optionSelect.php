<option value="">Selecciona ...</option>
<?php 
if (is_array($data))
    foreach ($data as $d) { ?>
<option value="<?=$d[$clave]?>"><?=$d[$value]?></option>
    <?php }?>