# Send WhatsApp text based template messages with 360dialog WhatsApp API

## Introduction

The purpose of this class is not to interact with the entire 360Dialog api. Instead, it is designed as a start-pack that
will quickly allow you to send template based message (with placeholders) to your users. The only supported template type is text in the body.

Please note that you cannot **initiate** a freetext message with WhatsappAPI. Instead, you must use a pre-approved
template.

If you do not have a WhatsApp API Key you need to request access using our solution. Please create your account and we will help you with the process. WhatsApp API Key are a Paid solution. If you want to test it with your CRM or ERP, please contact us and we will help you using our own API KEY for testing purposes. This is our WhatsApp link for more information. 
https://chatwith.io/s/link-to-whatsapp


## Getting a 360Dialog Api key

You can get one from here:
https://tochat.be (create your free account and we will help you setting up your account).
To get a WhatsApp API Key you need:
- To be an incorporated business. It is not available for individuals or freelancers.
- You need to have a dedicated phone number with NO previous WhatsApp or WhatsApp Business usage.
- You need to have a verified Facebook Business Manager.

If you are not sure about this topics or the stage where you are, we can help you. 

Once you have your WhatsApp API key this "KEY" will then have to be added to the .env file, there is a .env.example file.


## Creating a template

The class at the moment only support text based messages. It does not support images, buttons.

Thus, you can create a temple in 360Dialog. Once the template has been approved you can start to use the starter pack.
If you want just to test it for your company, please contact us and we will share our API KEY and some templates for you to test.


## Use cases

WhatsApp API and Templates are very convenient for:
- Reminders (apointments, scheduling, delivering packages, etc...).
- Notifications (like payments pending, updates in your policies, or any other notification you need to send to your customer base).
- Marketing and sales (you need to very carefull about this, but Facebook enables marketing campaigns with WhatsApp).
- Bulk Campaigns (you can send a WhatsApp to all your contacts at once even if they are not in your contact list).


## 24 hour window 

Please be aware that contact by WhatsApp API must use templates unless the conversation has been initiated by the customer in the 24 hour window. This means, most new conversations or recovering conversations must required a templated from your end.


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








