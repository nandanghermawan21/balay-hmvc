<?php
/**
 * Created by PhpStorm.
 * User: hermawan
 * Date: 8/4/2018
 * Time: 3:23 PM
 */

class MenuModel extends CI_Model
{
    /**
     * @return array
     */
    public function FrontEndMenu(){
        $menu = array();

        $res = $this->db->select('*')
            ->from("sys_menu_tree t")
            ->join("sys_menu m","m.id = t.id")
            ->where("t.role_id",1)
            ->get();



        $menu = $res->result_array();

        return $menu;
    }
}