<?php

/*
Plugin Name: Rossana Contact form
Description: A pluguin just to send email from a aform
Version: 1.0
Author: Wes Benvindo
*/


class IliosContactForm
{
    function __construct()
    {
        add_action("admin_menu", array($this, "adminPage"));

    }

    function adminPage()
    {
        add_options_page("Contact Form - Rossana", "Contact Form", "manage_options", "contact-form-rossana", array($this, "ourHTML"));
    }

    function ourHTML(){
        ?>
        <h1>Plugin</h1>
<?php
    }
}


$contactFormRossana = new IliosContactForm();