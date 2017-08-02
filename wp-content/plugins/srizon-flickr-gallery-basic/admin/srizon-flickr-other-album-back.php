<?php
function srz_flickr_other_albums()
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
        include 'forms/flickr-search-form.php';
        if (isset($_POST['searchUser'])) {
            if (!wp_verify_nonce($_POST['srzflickr_submit'], 'SrzFlickr-OtherAlbums')) {
                exit();
            }
            if (strpos($_POST['flickr_user'], 'flickr.')) {
                $user = $flickr->maybe_call('flickr.urls.lookupUser', array('url' => $_POST['flickr_user']), SrizonFlickrDB::get_common_val('cache_interval'));
            } else {
                $user = $flickr->maybe_call('flickr.people.findByUsername', array('username' => $_POST['flickr_user']), SrizonFlickrDB::get_common_val('cache_interval'));
            }
            if (!isset($user['user']['id'])) {
                return;
            }
            $response = $flickr->maybe_call('flickr.photosets.getList', array('primary_photo_extras' => 'url_m', 'user_id' => $user['user']['id']), SrizonFlickrDB::get_common_val('cache_interval'));
            if ($response) {
                SrizonFlickrUI::BoxHeader('box-result', __("Search Result", 'srizon-flickr-gallery'), true);
                srz_render_album_list($response['photosets'], true);
                SrizonFlickrUI::BoxFooter(true);
            } else {
                srizon_show_admin_error(__('Couldn\'t get data from Flickr. Might be a server issue!','srizon-flickr-gallery'));
            }
        }

        // list previously saved albums

        SrizonFlickrUI::BoxHeader('box-list', __("Listed Albums", 'srizon-flickr-gallery'), true);
        srz_flickr_render_others_listed_albums();
        SrizonFlickrUI::BoxFooter(true);

        SrizonFlickrUi::OptionWrapperEnd();
        SrizonFlickrUI::PageWrapEnd();

    }
}

function srz_flickr_render_others_listed_albums()
{
    $flickr = new SrizonFlickr(SrizonFlickrDB::get_api_key(), SrizonFlickrDB::get_api_secret());
    $flickr->wp_maybe_restore_auth_data();

    $list = SrizonFlickrDB::get_others_album_list();
    $list_count = count($list);

    if ($list_count) {
        echo "<h2 class=\"srz-album-title\">{$list_count}".__(' Album(s) Listed! Use Search to find and list more','srizon-flickr-gallery')."</h2>";
    } else {
        echo "<h2>".__('No Albums Listed Yet! Use Search to find and list some Albums from other flickr users.','srizon-flickr-gallery')."</h2>";
    }

    echo '<div class="album-table">';
    foreach ($list as $albumid) {
        $albuminfo = $flickr->maybe_call('flickr.photosets.getInfo', array('photoset_id' => $albumid), SrizonFlickrDB::get_common_val('cache_interval'));
//        srizon_flickr_set_debug_msg('Album info:',$albuminfo);
        $primary_photo_url = "https://farm{$albuminfo['photoset']['farm']}.staticflickr.com/{$albuminfo['photoset']['server']}/{$albuminfo['photoset']['primary']}_{$albuminfo['photoset']['secret']}.jpg";
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
        <h3>{$albuminfo['photoset']['title']['_content']} - <small>{$albuminfo['photoset']['photos']} {$t_photos}</small></h3>
        <span>{$t_by} - {$albuminfo['photoset']['username']}</span><br><br>
        <span>{$t_shortcode}</span><br><input size="33" type="text" value="[srzflalbum id={$albumid}]" />
        <br><br><a class="button-primary" href="admin.php?page=SrzFlickr-Albums&albumid={$albumid}&customize=load&others=true">{$t_customize}</a>
        <button class="button-primary album-remove" data-albumid="{$albumid}">{$t_remove_from_list}</button>
    </div>
</div>
END;
    }
    echo '</div>';
}
