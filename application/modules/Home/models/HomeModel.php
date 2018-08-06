<?php defined('BASEPATH') or exit('No direct script access allowed');


/**
 * Class HomeModel
 */
class HomeModel extends CI_Model
{

    /**
     * @return array
     */
    public function loadMenu()
    {
        $menu = array(
            array(
                "id" => "Home",
                "name" => "Home",
                "icon" => "",
                "slug" => "#Home",
                "active" => "1",
                "display" => "1",
                "selected" => "0",
            ),
            array(
                "id" => "Profile",
                "name" => "Profile",
                "icon" => "",
                "slug" => "#Profile",
                "active" => "1",
                "display" => "1",
                "selected" => "0"
            ),
            array(
                "id" => "History",
                "name" => "History",
                "icon" => "",
                "slug" => "#History",
                "active" => "1",
                "display" => "1",
                "selected" => "0"
            ),
        );
        return $menu;
    }

}
