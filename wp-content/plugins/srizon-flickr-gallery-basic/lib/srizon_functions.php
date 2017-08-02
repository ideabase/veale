<?php
if (!function_exists('srizon_flickr_set_debug_msg')) {
    function srizon_flickr_set_debug_msg($title, $message)
    {
        if (isset($_REQUEST['debugsrzfl']) or SrizonFlickrDB::get_common_val('srz_debug')=='yes') {
            echo '<h2>' . $title . '</h2>';
            echo '<pre>';
            print_r($message);
            echo '</pre>';
        }
    }
}

if (!function_exists('srizon_flickr_show_pagination')) {
    function srizon_flickr_show_pagination($per_page, $total, $scroller_id, $paging_id, $jumptoarea = 'false')
    {
        if (!$total > $per_page) {
            return false;
        }
        require_once(dirname(__FILE__) . '/srizon_pagination.php');
        $paginator = new SrizonFlickrPagination($per_page, $paging_id);
        $paginator->set_total($total);
        $url = remove_query_arg($paging_id);
        if ($jumptoarea == 'true') {
            if (strpos($url, '?')) {
                return $paginator->page_links($url . '&', '#' . $scroller_id);
            } else {
                return $paginator->page_links($url . '?', '#' . $scroller_id);
            }
        } else {
            if (strpos($url, '?')) {
                return $paginator->page_links($url . '&');
            } else {
                return $paginator->page_links($url . '?');
            }
        }
    }
}

if (!function_exists('srizon_show_admin_error')) {
    function srizon_show_admin_error($msg)
    {
        echo '<div class="error"><p>' . $msg . '</p></div>';
    }
}
if (!function_exists('srizon_show_admin_warning')) {
    function srizon_show_admin_warning($msg)
    {
        echo '<div class="updated"><p>' . $msg . '</p></div>';
    }
}
if (!function_exists('srizon_show_admin_notice')) {
    function srizon_show_admin_notice($msg)
    {
        echo '<div class="updated notice notice-success is-dismissible"><p>' . $msg . '</p></div>';
    }
}

if (!function_exists('srizon_flickr_fix_no_large_image')) {
    function srizon_flickr_fix_no_large_image(&$photos)
    {
        $j = 0;
        foreach($photos as $photo){
            if(!isset($photos[$j]['url_l'])){
                $photos[$j]['url_l'] = $photos[$j]['url_s'];
                $photos[$j]['width_l'] = $photos[$j]['width_s'];
                $photos[$j]['height_l'] = $photos[$j]['height_s'];
            }
            $j++;
        }

    }
}