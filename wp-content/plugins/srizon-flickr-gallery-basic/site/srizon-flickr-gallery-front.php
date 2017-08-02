<?php
function srz_flickr_gallery_shortcode($atts) {
    if (!isset($atts['id'])) return 'Invalid shortcode... ID missing';
    $srz_galleryid = $atts['id'];
    $srz_album = SrizonFlickrDB::getGallerySettings($srz_galleryid);
    if (!$srz_album) return 'Gallery Not found';
    srizon_flickr_set_debug_msg('Gallery Settings:', $srz_album);
    if (!isset($GLOBALS['imggroup'])) $GLOBALS['imggroup'] = 1;
    else $GLOBALS['imggroup']++;
    $paging_id = 'jfl' . $GLOBALS['imggroup'];
    $scroller_id = 'fbalbum'. $GLOBALS['imggroup'];

    $flickr = new SrizonFlickr(SrizonFlickrDB::get_api_key(),SrizonFlickrDB::get_api_secret());
    $flickr->wp_maybe_restore_auth_data();
    $response = $flickr->maybe_call('flickr.galleries.getPhotos',
        array(
            'gallery_id'=>$srz_galleryid,
            'extras'=>'url_s,url_l'
        ),
        $srz_album['updatefeed']
    );
//    echo '<pre>';
//    print_r($response); die();
//    echo '</pre>';

    $lightbox_attribute = 'class="aimg"';

    if($response['stat']=='ok'){
        $response['photos']['photo'] = array_slice($response['photos']['photo'],0,$srz_album['totalimg']);
        $srz_total_img_count = count($response['photos']['photo']);
        $srz_cur_page = isset($_REQUEST[$paging_id])? intval($_REQUEST[$paging_id]-1) : 0;
        $photos = array_slice($response['photos']['photo'], $srz_cur_page*$srz_album['paginatenum'], $srz_album['paginatenum']);
        srizon_flickr_fix_no_large_image($photos);
        $data='';
        $layout_file = dirname(__FILE__) . '/../tmpl/'.$srz_album['layout'].'.php';
        if(file_exists($layout_file)) include($layout_file);
        else include(dirname(__FILE__) . '/../tmpl/collage_thumb.php');
        $data .= srizon_flickr_show_pagination($srz_album['paginatenum'], $srz_total_img_count, $scroller_id, $paging_id);
        return $data;
    }
    else{
        return null;
    }

//    echo '<pre>';
//    print_r($response);
//    echo '</pre>';

}
add_shortcode( 'srzflgallery', 'srz_flickr_gallery_shortcode' );
