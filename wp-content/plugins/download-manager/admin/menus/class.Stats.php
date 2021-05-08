<?php
/**
 * Created by PhpStorm.
 * User: shahnuralam
 * Date: 11/9/15
 * Time: 7:44 PM
 */

namespace WPDM\admin\menus;


use \WPDM\libs\FileSystem;

class Stats
{
    function __construct()
    {
        add_action('admin_menu', array($this, 'menu'));
        add_action('admin_init', array($this, 'export'));
        add_action('wp_ajax_wpdm_stats_get_packages', array($this, 'ajax_callback_get_packages'));
        add_action('wp_ajax_wpdm_stats_get_users', array($this, 'ajax_callback_get_users'));
    }

    function menu()
    {
        $menu_access_cap = apply_filters('wpdm_admin_menu_stats', WPDM_MENU_ACCESS_CAP);
        add_submenu_page('edit.php?post_type=wpdmpro', __('History &lsaquo; Download Manager','download-manager'), __('History','download-manager'), $menu_access_cap, 'wpdm-stats', array($this, 'UI'));
    }

    function export(){
        if(wpdm_query_var('page') == 'wpdm-stats' && wpdm_query_var('task') == 'export'){
            global $wpdb;
            $adcond = array();
            if(wpdm_query_var('pid', 'int') > 0) $adcond[] = "pid = ".wpdm_query_var('pid', 'int');
            if(wpdm_query_var('uid', 'int') > 0) $adcond[] = "uid = ".wpdm_query_var('uid', 'int');
            if(wpdm_query_var('ip') > 0) $adcond[] = "ip = '".wpdm_query_var('ip')."'";
            $adcond = (count($adcond) > 0) ? " and ".implode(" and ", $adcond) : "";
            $data = $wpdb->get_results("select s.*, p.post_title as file from {$wpdb->prefix}ahm_download_stats s, {$wpdb->prefix}posts p where p.ID = s.pid {$adcond} order by id DESC");
            FileSystem::downloadHeaders("download-stats.csv");
            echo "File,User ID,Order ID,Date,Timestamp,IP\r\n";
            foreach ($data as $d){
                echo "{$d->file},{$d->uid},{$d->oid},{$d->year}-{$d->month}-{$d->day},{$d->timestamp},{$d->ip}\r\n";
            }
            die();
        }
    }

    public function ajax_callback_get_packages()
    {
        global $wpdb;
        $posts_table = "{$wpdb->prefix}posts";
        $packages = [];
        $term = isset($_GET['term']) ? $_GET['term'] : null;

        if ($term) {
            $result_rows = $wpdb->get_results("SELECT ID, post_title FROM $posts_table where `post_type` = 'wpdmpro' AND `post_title` LIKE  '%" . $term . "%' ");
            foreach ($result_rows as $row) {
                array_push($packages, [
                    'id' => $row->ID,
                    'text' => $row->post_title
                ]);
            }
        }
        //results key is necessary for jquery select2
        wp_send_json(["results" => $packages]);
    }

    public function ajax_callback_get_users()
    {
        global $wpdb;
        $users_table = "{$wpdb->prefix}users";
        $term = isset($_GET['term']) ? $_GET['term'] : null;
        $users = [];

        if ($term) {
            $result_rows = $wpdb->get_results("SELECT ID, user_login, display_name, user_email FROM $users_table where `display_name` LIKE  '%" . $term . "%' OR `user_login` LIKE  '%" . $term . "%' OR `user_email` LIKE  '%" . $term . "%'  ");
            foreach ($result_rows as $row) {
                $text = $row->display_name . " ( $row->user_login ) ";
                array_push($users, [
                    'id' => $row->ID,
                    'text' => $text
                ]);
            }
        }
        //results key is necessary for jquery select2
        wp_send_json(["results" => $users]);
    }



    function UI()
    {
        include(WPDM_BASE_DIR."admin/tpls/stats.php");
    }


}
