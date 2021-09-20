<?php

include "WhatsApp360.php";

$o = new WhatsApp360();


/*
 * This sends a message for a given template
 */

print_r(
    $o->sendWhatsApp(
        "654765476547654",
        ["011111","Ward","$12.00","Macbook"],
        'order_sent',
        'en',
        'f6baa15e_fb52_4d4f_a5a0_cde307dc3a85'
    )
);
