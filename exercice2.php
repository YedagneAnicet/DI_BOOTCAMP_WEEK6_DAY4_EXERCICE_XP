<?php
$delete_item = 'juin';
$months = array('janvier', 'fevrier', 'mars', 'avril', 'mai','juin','juillet','aout','septembre','octobre','novembre','decembre');
if (($key = array_search($delete_item, $months)) !== false) {
    unset($months[$key]);
}
var_dump($months);
?> 