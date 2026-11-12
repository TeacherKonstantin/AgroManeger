<?php
$dir = __DIR__;
$entityDir = $dir . '/Entity.php';
$PhysicalDir = $dir . '/Physicals/Physical.php';

if (file_exists($entityDir)) {
    require_once $entityDir;
    echo "Файл '" . $entityDir . "' подключен";
}

if (file_exists($PhysicalDir)) {
    require_once $PhysicalDir;
    echo "Файл '" . $PhysicalDir . "' подключен";
}

$physical = new Physical("1", "Молоток");
print_r($physical);