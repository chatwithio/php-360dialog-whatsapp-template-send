<?php

include "WhatsApp360.php";

$o = new WhatsApp360();

/*
* This gets all templates
*/

print_r(
    $o->getTemplates()
);