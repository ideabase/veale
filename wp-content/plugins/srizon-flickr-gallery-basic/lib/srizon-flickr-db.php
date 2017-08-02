<?php

class SrizonFlickrDB
{
    static $common_settings = false;
    static $common_settings_key = 'srz_flickr_common';
    static $albumKeyPrefix = 'srizonFlickrAlbum';
    static $galleryKeyPrefix = 'srizonFlickrGallery';
    static $othersAlbumListKey = 'srizonFlickrOthersAlbumList';
    static $othersGalleryListKey = 'srizonFlickrOthersGalleryList';
    static $default_album_settings = array(
        'updatefeed' => '',
        'image_sorting' => 'default',
        'totalimg' => '1000',
        'layout' => 'collage_thumb',
        'paginatenum' => '18',
        'targetheight' => '200',
        'collagepadding' => '2',
        'collagepartiallast' => 'true',
        'hovercaption' => '1',
        'hovercaptiontype' => '0',
        'hovercaptiontypecover' => '2',
        'showhoverzoom' => '1',
        'animationspeed' => '500',
        'autoslideinterval' => '0',
        'maxheight' => '500'
    );


    static function get_common_val($key)
    {
        if (is_array(self::$common_settings) and isset(self::$common_settings[$key]))
            return self::$common_settings[$key];
        else
            return '';
    }

    static function get_api_key()
    {
        return self::get_common_val('api_key');
    }

    static function get_api_secret()
    {
        return self::get_common_val('api_secret');
    }

    static function saveCommonOpt()
    {
        $post_vals = array();
        $post_vals['api_key'] = sanitize_text_field($_POST['api_key']);
        $post_vals['api_secret'] = sanitize_text_field($_POST['api_secret']);
        $post_vals['cache_interval'] = sanitize_text_field($_POST['cache_interval']);
        $post_vals['srz_debug'] = sanitize_text_field($_POST['srz_debug']);

        update_option(self::$common_settings_key, $post_vals);
    }

    static function prepareCommonOpt()
    {
//        $defaults = array(
//            'api_key' => 'b581c449db1756c00189ba8002d556c4',
//            'api_secret' => '135da5809897714c',
//        );
        $defaults = array('cache_interval' => '600', 'srz_debug' => 'no');
        $saved_values = get_option(self::$common_settings_key);
        if (is_array($saved_values)) {
            self::$common_settings = array_replace($defaults, $saved_values);
        } else {
            self::$common_settings = $defaults;
        }
        self::$common_settings = stripslashes_deep(self::$common_settings);
    }

    static function saveAlbumSettings($id)
    {
        $key = self::$albumKeyPrefix . $id;
        $sanitized_options = array();
        foreach ($_POST['options'] as $k => $val) {
            $sanitized_options[$k] = sanitize_text_field($val);
        }
        update_option($key, $sanitized_options);
    }

    static function getAlbumSettings($id)
    {
        $key = self::$albumKeyPrefix . $id;
        $album_option = get_option($key);
        $value_arr = self::$default_album_settings;
        if (trim($value_arr['updatefeed']) == '') $value_arr['updatefeed'] = SrizonFlickrDB::get_common_val('cache_interval');
        if (is_array($album_option)) {
            return array_replace($value_arr, $album_option);
        } else {
            return $value_arr;
        }
    }

    static function saveGallerySettings($id)
    {
        $key = self::$galleryKeyPrefix . $id;
        $sanitized_options = array();
        foreach ($_POST['options'] as $k => $val) {
            $sanitized_options[$k] = sanitize_text_field($val);
        }
        update_option($key, $sanitized_options);
    }

    static function getGallerySettings($id)
    {
        $key = self::$galleryKeyPrefix . $id;
        $gallery_options = get_option($key);
        $value_arr = self::$default_album_settings;
        if (trim($value_arr['updatefeed']) == '') $value_arr['updatefeed'] = SrizonFlickrDB::get_common_val('cache_interval');
        if (is_array($gallery_options)) {
            return array_replace($value_arr, $gallery_options);
        } else {
            return $value_arr;
        }
    }

    static function save_others_album_list($list)
    {
        update_option(self::$othersAlbumListKey, $list);
    }

    static function get_others_album_list()
    {
        $list = get_option(self::$othersAlbumListKey);
        if (!is_array($list)) {
            return array();
        }
        return $list;
    }


    static function save_others_gallery_list($list)
    {
        update_option(self::$othersGalleryListKey, $list);
    }

    static function get_others_gallery_list()
    {
        $list = get_option(self::$othersGalleryListKey);
        if (!is_array($list)) {
            return array();
        }
        return $list;
    }

}
