<?php

include "WhatsApp360.php";

$o = new WhatsApp360();


/*
 * This sends a message for a given template
 */

print_r(
    $o->sendWhatsApp(
        "34622814642",
        [],
        'test_template_sandbox',
        'en_US',
        'f6baa15e_fb52_4d4f_a5a0_cde307dc3a85'
    )
);