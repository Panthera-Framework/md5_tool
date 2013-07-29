<?php
function md5toolPreinstall($package)
{
    global $panthera;
    $panthera -> logging -> output('Pre-install test hook for md5tool is running', 'leopard');
    return $package;
}

function md5toolPreremove($input)
{
    global $panthera;
    $panthera -> logging -> output ('Test of pre-remove hook', 'leopard');
    return $input;
}

$panthera -> add_option('leopard.preinstall', 'md5toolPreinstall');
$panthera -> add_option('leopard.preremove', 'md5toolPreremove');
