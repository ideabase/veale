<?php
function srz_flickr_galleries(){
    $flickr = new SrizonFlickr(SrizonFlickrDB::get_api_key(), SrizonFlickrDB::get_api_secret());
    $flickr->wp_maybe_restore_auth_data();
    $response = null;
    if (!$flickr->isAuthenticated()) {
        srizon_show_admin_error(__('The app isn\'t authenticated. Please Authenticate this.') . ' <a href="admin.php?page=SrzFlickr&srizon_flickr_auth=yes">Authenticate</a>');
    }
    else if(isset($_GET['galleryid']) and isset($_GET['customize']) and $_GET['customize']=='load'){
        $album_settings = stripslashes_deep(SrizonFlickrDB::getGallerySettings($_GET['galleryid']));
        SrizonFlickrUI::PageWrapStart();
        echo '<h2>Gallery Settings</h2>';
        SrizonFlickrUI::OptionWrapperStart();

        if(!isset($_GET['others'])) {
            SrizonFlickrUI::RightColStart();
            $list = $flickr->maybe_call('flickr.galleries.getList', array('primary_photo_extras' => 'url_m'),SrizonFlickrDB::get_common_val('cache_interval'));
            include 'forms/gallery-settings-right.php';
            SrizonFlickrUI::RightColEnd();
        }

        if (!isset($_GET['others'])) SrizonFlickrUI::LeftColStart();
        include 'forms/gallery-settings-form.php';
        if (!isset($_GET['others'])) SrizonFlickrUI::LeftColEnd();
        SrizonFlickrUI::OptionWrapperEnd();
        SrizonFlickrUI::PageWrapEnd();
    }
    else {
        if(isset($_GET['customize']) and $_GET['customize']=='save' and isset($_POST['submit'])){
            if ( wp_verify_nonce( $_POST['srzflickr_submit'], 'SrzFlickr' ) == false ) {
                die( 'Form token mismatch!' );
            }
            SrizonFlickrDB::saveGallerySettings(sanitize_text_field($_POST['id']));
            srizon_show_admin_notice('Gallery Settings Saved!');
        }
        $response = $flickr->maybe_call('flickr.galleries.getList', array('primary_photo_extras' => 'url_m'),SrizonFlickrDB::get_common_val('cache_interval'));
        if($response) srz_render_gallery_list($response['galleries']);
        else{
            echo __('Couldn\'t get data from Flickr. Might be a server issue!','srizon-flickr-gallery');
        }

    }
}

function srz_render_gallery_list($galleries,$others=false)
{
    if ($galleries['total']) {
        echo "<h2 class=\"srz-album-title\">{$galleries['total']}".__( 'Gallery(ies) Found!', 'srizon-flickr-gallery' )."</h2>";
    } else {
        echo "<h2>".__( 'No Gallery Found!', 'srizon-flickr-gallery' )."</h2>";

        $t_galleries_are = __("<p>Galleries are collection of photos from other Flickr user.<br>While exploring other people's photos, you can add them into a gallery if the uploader allows it (public).<br>Just look for the <em>Add to Gallery</em> button on Flickr while exploring.</p>",'srizon-flickr-gallery');
        $t_more_about = __('More about galleries on','srizon-flickr-gallery');

        echo <<<END
{$t_galleries_are}
<p>{$t_more_about} <a target="_blank" href="https://www.flickr.com/help/galleries/">Flickr</a></p>
END;

    }
    echo '<div class="album-table">';
    if($others) $others = '&others=true';
    else $others = '';
    $remember_button = '';
    foreach($galleries['gallery'] as $gallery){
        if ($others) {
            $list = SrizonFlickrDB::get_others_gallery_list();
            if(in_array($gallery['id'],$list)){
                $remember_button = "<button class=\"gallery-remember button disabled\">".__('Already Listed','srizon-flickr-gallery')."</button>";
            }
            else {
                $remember_button = "<button class=\"button-primary gallery-remember\" data-galleryid=\"{$gallery['id']}\">".__('Add To List','srizon-flickr-gallery')."</button>";
            }
        }
        $t_photos = __('Photos','srizon-flickr-gallery');
        $t_shortcode = __('Shortcode:','srizon-flickr-gallery');
        $t_customize = __('Customize','srizon-flickr-gallery');
        echo <<<END
<div class="srzrow">
    <div class="srzcol-3 first">
        <img src="{$gallery['primary_photo_extras']['url_m']}" alt="" width="{$gallery['primary_photo_extras']['width_m']}" height="{$gallery['primary_photo_extras']['height_m']}">
    </div>
    <div class="srzcol-7">
        <h3>{$gallery['title']['_content']} - <small>{$gallery['count_photos']} {$t_photos}</small></h3>
        <span>{$t_shortcode}</span><br><input size="43" type="text" value="[srzflgallery id={$gallery['id']}]" />
        <br><br><a class="button-primary" href="admin.php?page=SrzFlickr-Galleries&galleryid={$gallery['id']}&customize=load{$others}">{$t_customize}</a>
        {$remember_button}
    </div>
</div>
END;

    }
    echo '</div>';
}
