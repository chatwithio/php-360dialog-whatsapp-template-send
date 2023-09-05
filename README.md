# Send WhatsApp text based template messages with 360dialog WhatsApp API

## Introduction

The purpose of this class is not to interact with the entire 360Dialog api. Instead, it is designed as a start-pack that
will quickly allow you to send template based message (with placeholders) to your users. The only supported template type is text in the body.

Please note that you cannot **initiate** a freetext message with WhatsappAPI. Instead, you must use a pre-approved
template.

## Getting a 360Dialog api key

You can get one from here:

https://tochat.be

This will then have to be added to the .env file, there is a .env.example file

## Creating a template

The class at the moment only support text based messages. It does not support images, buttons.

Thus, you can create a temple in 360degree. Once the template has been approved you can start to use the starter pack.

## Example command line usage

```
php example-send.php
```

```php
sendWhatsApp(
        "34666777888", //phone number to send to
        ["Bob"], //placeholder for a name
        'sample_shipping_confirmation', //template name
        'en_US', //template language
        'f6baa15e_fb52_4d4f_a5a0_cde307dc3a85' //template namespace
    );

)
```
This should send a message 








