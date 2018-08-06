<?php
/**
 * Created by PhpStorm.
 * User: hermawan
 * Date: 8/6/2018
 * Time: 5:41 AM
 */

class ContactModel extends CI_Model
{
    public function loadMenu(){
        $menu = array(
            array(
                "id" => "ContactForm",
                "name" => "Contact Form",
                "icon" => "",
                "slug" => "#ContactForm",
                "active" => "1",
                "display" => "1",
                "selected" => "0",
            ),
            array(
                "id" => "Directions",
                "name" => "Directions",
                "icon" => "",
                "slug" => "#Directions",
                "active" => "1",
                "display" => "1",
                "selected" => "0"
            ),
                   );
        return $menu;
    }
}