<?php
function srz_flickr_albums()
{
    $flickr = new SrizonFlickr(SrizonFlickrDB::get_api_key(), SrizonFlickrDB::get_api_secret());
    $flickr->wp_maybe_restore_auth_data();
    $response = null;
    if (!$flickr->isAuthenticated()) {
        srizon_show_admin_error(__('The app isn\'t authenticated. Please Authenticate this.') . ' <a href="admin.php?page=SrzFlickr&srizon_flickr_auth=yes">Authenticate</a>');
    } else if (isset($_GET['albumid']) and isset($_GET['customize']) and $_GET['customize'] == 'load') {
        $album_settings = stripslashes_deep(SrizonFlickrDB::getAlbumSettings($_GET['albumid']));
        SrizonFlickrUI::PageWrapStart();
        echo '<h2>'.__( 'Album Settings', 'srizon-flickr-gallery' ).'</h2>';
        SrizonFlickrUI::OptionWrapperStart();

        if (!isset($_GET['others'])) {
            SrizonFlickrUI::RightColStart();
            $list = $flickr->maybe_call('flickr.photosets.getList', array('primary_photo_extras' => 'url_m'), SrizonFlickrDB::get_common_val('cache_interval'));
            include 'forms/album-settings-right.php';
            SrizonFlickrUI::RightColEnd();
        }

        if (!isset($_GET['others'])) SrizonFlickrUI::LeftColStart();
        include 'forms/album-settings-form.php';
        if (!isset($_GET['others'])) SrizonFlickrUI::LeftColEnd();
        SrizonFlickrUI::OptionWrapperEnd();
        SrizonFlickrUI::PageWrapEnd();
    } else {
        if (isset($_GET['customize']) and $_GET['customize'] == 'save' and isset($_POST['submit'])) {
            if (wp_verify_nonce($_POST['srzflickr_submit'], 'SrzFlickr') == false) {
                die('Form token mismatch!');
            }
            SrizonFlickrDB::saveAlbumSettings(sanitize_text_field($_POST['id']));
            srizon_show_admin_notice('Album Settings Saved!');
        }
        $response = $flickr->maybe_call('flickr.photosets.getList', array('primary_photo_extras' => 'url_m'), SrizonFlickrDB::get_common_val('cache_interval'));
        if ($response) srz_render_album_list($response['photosets']);
        else {
            echo __('Couldn\'t get data from Flickr. Might be a server issue!', 'srizon-flickr-gallery');
        }

    }
}

function srz_render_album_list($albums, $others = false)
{
    if ($albums['total']) {
        echo "<h2 class=\"srz-album-title\">{$albums['total']}".__( 'Album(s) Found!', 'srizon-flickr-gallery' )."</h2>";
    } else {
        echo "<h2>".__( 'No Albums Found!', 'srizon-flickr-gallery' )."</h2>";
        echo __("<p>Albums on flickr are collection of your own photos.<br>Looks like you didn't create any. Go to <a target=\"_blank\" href=\"https://flickr.com\">Flickr</a> and create some!</p>",'srizon-flickr-gallery');

    }
    echo '<div class="album-table">';
    if ($others) $others = '&others=true';
    else $others = '';
    $remember_button = '';
    foreach ($albums['photoset'] as $album) {
        if ($others) {
            $list = SrizonFlickrDB::get_others_album_list();
            if(in_array($album['id'],$list)){
                $remember_button = "<button class=\"album-remember button disabled\">".__('Already Listed','srizon-flickr-gallery')."</button>";
            }
            else {
                $remember_button = "<button class=\"button-primary album-remember\" data-albumid=\"{$album['id']}\">".__('Add To List','srizon-flickr-gallery')."</button>";
            }
        }
//        srizon_flickr_set_debug_msg('albuminfo',$album);
        $t_photos = __('Photos','srizon-flickr-gallery');
        $t_shortcode = __('Shortcode:','srizon-flickr-gallery');
        $t_customize = __('Customize','srizon-flickr-gallery');
        echo <<<END
<div class="srzrow">
    <div class="srzcol-3 first">
        <img src="{$album['primary_photo_extras']['url_m']}" alt="" width="{$album['primary_photo_extras']['width_m']}" height="{$album['primary_photo_extras']['height_m']}">
    </div>
    <div class="srzcol-7">
        <h3>{$album['title']['_content']} - <small>{$album['photos']} {$t_photos}</small></h3>
        <span>{$t_shortcode}</span><br><input size="33" type="text" value="[srzflalbum id={$album['id']}]" />
        <br><br><a class="button-primary" href="admin.php?page=SrzFlickr-Albums&albumid={$album['id']}&customize=load{$others}">{$t_customize}</a>
        {$remember_button}
    </div>
</div>
END;

    }
    echo '</div>';
//    echo '<pre>';
//    print_r($albums);
//    echo '</pre>';
}