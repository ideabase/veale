<?php
function srz_flickr_other_galleries()
{
    $flickr = new SrizonFlickr(SrizonFlickrDB::get_api_key(), SrizonFlickrDB::get_api_secret());
    $flickr->wp_maybe_restore_auth_data();
    $response = null;
    if (!$flickr->isAuthenticated()) {
        srizon_show_admin_error(__('The app isn\'t authenticated. Please Authenticate this.') . ' <a href="admin.php?page=SrzFlickr&srizon_flickr_auth=yes">Authenticate</a>');
    } else {
        // show the form
        SrizonFlickrUI::PageWrapStart();
        SrizonFlickrUi::OptionWrapperStart();
        include 'forms/flickr-search-form-gallery.php';
        if (isset($_POST['searchUser'])) {
            if (!wp_verify_nonce($_POST['srzflickr_submit'], 'SrzFlickr-OtherAlbums')) {
                exit();
            }
            if (strpos($_POST['flickr_user'], 'flickr.')) {
                $user = $flickr->maybe_call('flickr.urls.lookupUser', array('url' => $_POST['flickr_user']),SrizonFlickrDB::get_common_val('cache_interval'));
            } else {
                $user = $flickr->maybe_call('flickr.people.findByUsername', array('username' => $_POST['flickr_user']),SrizonFlickrDB::get_common_val('cache_interval'));
            }
            if (!isset($user['user']['id'])) {
                return;
            }
            $response = $flickr->maybe_call('flickr.galleries.getList', array('primary_photo_extras' => 'url_m', 'user_id' => $user['user']['id']),SrizonFlickrDB::get_common_val('cache_interval'));
            if ($response) {
                SrizonFlickrUI::BoxHeader( 'box-result', __( "Search Result", 'srizon-flickr-gallery' ), true );
                srz_render_gallery_list($response['galleries'], true);
                SrizonFlickrUI::BoxFooter(true);
            } else {
                echo __('Couldn\'t get data from Flickr. Might be a server issue!','srizon-flickr-gallery');
            }

        }

        // list previously saved galleries

        SrizonFlickrUI::BoxHeader('box-list', __("Listed Galleries", 'srizon-flickr-gallery'), true);
        srz_flickr_render_others_listed_galleries();
        SrizonFlickrUI::BoxFooter(true);

        SrizonFlickrUi::OptionWrapperEnd();
        SrizonFlickrUI::PageWrapEnd();

    }

}


function srz_flickr_render_others_listed_galleries()
{
    $flickr = new SrizonFlickr(SrizonFlickrDB::get_api_key(), SrizonFlickrDB::get_api_secret());
    $flickr->wp_maybe_restore_auth_data();

    $list = SrizonFlickrDB::get_others_gallery_list();
    $list_count = count($list);

    if ($list_count) {
        echo "<h2 class=\"srz-album-title\">{$list_count}".__('Gallery(ies) Listed! Use Search to find and list more','srizon-flickr-gallery')."</h2>";
    } else {
        echo "<h2>".__('No Gallery Listed Yet! Use Search to find and list some Gallery from other flickr users.','srizon-flickr-gallery')."</h2>";
    }

    echo '<div class="album-table">';
    foreach ($list as $galleryid) {
        $galleryinfo = $flickr->maybe_call('flickr.galleries.getInfo', array('gallery_id' => $galleryid), SrizonFlickrDB::get_common_val('cache_interval'));
//        srizon_flickr_set_debug_msg('Gallery info:',$galleryinfo);
        $primary_photo_url = "https://farm{$galleryinfo['gallery']['primary_photo_farm']}.staticflickr.com/{$galleryinfo['gallery']['primary_photo_server']}/{$galleryinfo['gallery']['primary_photo_id']}_{$galleryinfo['gallery']['primary_photo_secret']}.jpg";
//        srizon_flickr_set_debug_msg('Cover:',$primary_photo_url);

        $t_photos = __('Photos','srizon-flickr-gallery');
        $t_by = __('By','srizon-flickr-gallery');
        $t_shortcode = __('Shortcode:','srizon-flickr-gallery');
        $t_customize = __('Customize','srizon-flickr-gallery');
        $t_remove_from_list = __('Remove from List','srizon-flickr-gallery');
        echo <<<END
<div class="srzrow">
    <div class="srzcol-3 first">
        <img src="{$primary_photo_url}" alt="">
    </div>
    <div class="srzcol-7">
        <h3>{$galleryinfo['gallery']['title']['_content']} - <small>{$galleryinfo['gallery']['count_photos']} {$t_photos}</small></h3>
        <span>{$t_by} - {$galleryinfo['gallery']['username']}</span><br><br>
        <span>{$t_shortcode}</span><br><input size="33" type="text" value="[srzflgallery id={$galleryid}]" />
        <br><br><a class="button-primary" href="admin.php?page=SrzFlickr-Galleries&galleryid={$galleryid}&customize=load&others=true">{$t_customize}</a>
        <button class="button-primary gallery-remove" data-galleryid="{$galleryid}">{$t_remove_from_list}</button>
    </div>
</div>
END;
    }
    echo '</div>';
}

