<?php
function srz_flickr_album_shortcode($atts)
{
    if (!isset($atts['id'])) return 'Invalid shortcode... ID missing';
    $srz_albumid = $atts['id'];
    $srz_album = SrizonFlickrDB::getAlbumSettings($srz_albumid);
    if (!$srz_album) return 'Album Not found';
    srizon_flickr_set_debug_msg('Global Settings', SrizonFlickrDB::$common_settings);
    srizon_flickr_set_debug_msg('Album Settings:', $srz_album);
    if (!isset($GLOBALS['imggroup'])) $GLOBALS['imggroup'] = 1;
    else $GLOBALS['imggroup']++;
    $paging_id = 'jfl' . $GLOBALS['imggroup'];
    $scroller_id = 'fbalbum' . $GLOBALS['imggroup'];

    $flickr = new SrizonFlickr(SrizonFlickrDB::get_api_key(), SrizonFlickrDB::get_api_secret());
    $flickr->wp_maybe_restore_auth_data();
    $response = $flickr->maybe_call('flickr.photosets.getPhotos',
        array(
            'photoset_id' => $srz_albumid,
            'extras' => 'url_s,url_l'
        ),
        $srz_album['updatefeed']
    );

    $lightbox_attribute = 'class="aimg"';

    if ($response['stat'] == 'ok') {
        $response['photoset']['photo'] = array_slice($response['photoset']['photo'],0,$srz_album['totalimg']);
        $srz_total_img_count = count($response['photoset']['photo']);
        $srz_cur_page = isset($_REQUEST[$paging_id]) ? intval($_REQUEST[$paging_id] - 1) : 0;
        $photos = array_slice($response['photoset']['photo'], $srz_cur_page * $srz_album['paginatenum'], $srz_album['paginatenum']);
        srizon_flickr_fix_no_large_image($photos);
        $data = '';
        $layout_file = dirname(__FILE__) . '/../tmpl/'.$srz_album['layout'].'.php';
        if(file_exists($layout_file)) include($layout_file);
        else include(dirname(__FILE__) . '/../tmpl/collage_thumb.php');
        $data .= srizon_flickr_show_pagination($srz_album['paginatenum'], $srz_total_img_count, $scroller_id, $paging_id);
        return $data;
    } else {
        return null;
    }

//    echo '<pre>';
//    print_r($response);
//    echo '</pre>';

}

add_shortcode('srzflalbum', 'srz_flickr_album_shortcode');
