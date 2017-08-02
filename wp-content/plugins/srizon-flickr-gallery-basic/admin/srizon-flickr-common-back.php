<?php
add_action('admin_menu', 'srz_flickr_menu');
add_action('init', 'srz_flickr_auth');
function srz_flickr_auth()
{
    if (session_id() == '') {
        session_start();
    }
    if (isset($_GET['srizon_flickr_auth'])) {
        $callback = sprintf('%s://%s%s',
            (@$_SERVER['HTTPS'] == "on") ? 'https' : 'http',
            $_SERVER['SERVER_NAME'],
            $_SERVER['SCRIPT_NAME']
        );
        $callback .= '?page=SrzFlickr&srizon_flickr_auth=yes&keep_session=true';
        $flickr = new SrizonFlickr(SrizonFlickrDB::get_api_key(), SrizonFlickrDB::get_api_secret(), $callback);
        if (!isset($_GET['keep_session'])) $flickr->signout();
        $msg = $flickr->authenticate();
        if ($msg == false) {
            srizon_show_admin_error('Invalid app id/secret or connection problem. Can\'t authenticate. Response Code: ' . $flickr->getLastHttpResponseCode());

        }
    }
}

function srz_flickr_menu()
{
    $srzflickrhook = add_menu_page(__('Flickr Gallery', 'srizon-flickr-gallery'), __('Flickr Gallery', 'srizon-flickr-gallery'), 'manage_options', 'SrzFlickr', 'srz_flickr_options_page', srz_flickr_get_resource_url('resources/images/srzflickr-icon.png'));
    $srzflickrhook2 = add_submenu_page('SrzFlickr', "My Albums - Flickr Gallery", __('My Albums', 'srizon-flickr-gallery'), 'manage_options', 'SrzFlickr-Albums', 'srz_flickr_albums');
    $srzflickrhook3 = add_submenu_page('SrzFlickr', "My Galleries - Flickr Gallery", __('My Galleries', 'srizon-flickr-gallery'), 'manage_options', 'SrzFlickr-Galleries', 'srz_flickr_galleries');
    $srzflickrhook4 = add_submenu_page('SrzFlickr', "Other's Albums - Flickr Gallery", __('Other\'s Albums', 'srizon-flickr-gallery'), 'manage_options', 'SrzFlickr-OtherAlbums', 'srz_flickr_other_albums');
    $srzflickrhook5 = add_submenu_page('SrzFlickr', "Other's Galleries - Flickr Gallery", __('Other\'s Galleries', 'srizon-flickr-gallery'), 'manage_options', 'SrzFlickr-OtherGalleries', 'srz_flickr_other_galleries');
    add_action("admin_print_scripts-{$srzflickrhook}", 'srzflickr_load_admin_resources');
    add_action("admin_print_scripts-{$srzflickrhook2}", 'srzflickr_load_admin_resources');
    add_action("admin_print_scripts-{$srzflickrhook3}", 'srzflickr_load_admin_resources');
    add_action("admin_print_scripts-{$srzflickrhook4}", 'srzflickr_load_admin_resources');
    add_action("admin_print_scripts-{$srzflickrhook5}", 'srzflickr_load_admin_resources');
    global $submenu;
    $submenu['SrzFlickr'][0][0] = __('Common Options', 'srizon-flickr-gallery');
}

function srzflickr_load_admin_resources()
{
    wp_enqueue_style('srzflickradmin', srz_flickr_get_resource_url('admin/resources/admin.css'), null, '1.0');
    wp_enqueue_script('srzflickradmin', srz_flickr_get_resource_url('admin/resources/admin.js'), array('jquery'), '1.0');

}

function srz_flickr_options_page()
{
    echo '<div class="notice notice-warning"><h4>' . __('You\'re using the Basic/Free version. It\'s limited to <code>50</code> images per album. Upgrade to <a href="https://www.srizon.com/srizon-flickr-gallery" target="_blank">Pro Version</a> to get upto <code>500</code> images per album.', 'srizon-flickr-gallery') . '</h4></div>';
    SrizonFlickrUI::PageWrapStart();
    if ($_POST['submit']) {
        if (wp_verify_nonce($_POST['srzflickr_submit'], 'SrzFlickr') == false) {
            die('Form token mismatch!');
        }
        SrizonFlickrDB::saveCommonOpt();
        SrizonFlickrDB::prepareCommonOpt();
        srizon_show_admin_notice(__('Options Saved!', 'srizon-flickr-gallery'));
    }
    $flickr = new SrizonFlickr(SrizonFlickrDB::get_api_key(), SrizonFlickrDB::get_api_secret());
    $flickr->wp_maybe_restore_auth_data();
    $auth_user_fullname = $flickr->getOauthData($flickr::USER_FULL_NAME);
    $auth_user_username = $flickr->getOauthData($flickr::USER_NSID);
    echo '<h2>' . __('Srizon Flickr Gallery Option Page', 'srizon-flickr-gallery') . '</h2>';

    SrizonFlickrUi::OptionWrapperStart();
    SrizonFlickrUi::RightColStart();
    SrizonFlickrUi::BoxHeader('box1', __("About This Plugin", 'srizon-flickr-gallery'));
    echo '<p>' . __('This Plugin will show your Flickr album(s) or Gallery(ies) into your WordPress site.', 'srizon-flickr-gallery') . '
<br> ' . __('Select', 'srizon-flickr-gallery') . ' <em>' . __('Albums', 'srizon-flickr-gallery') . '</em> ' . __('or', 'srizon-flickr-gallery') . ' <em>' . __('Galleries', 'srizon-flickr-gallery') . '</em> ' . __('from sub-menu and add a new album or gallery', 'srizon-flickr-gallery') . '.
<br>' . __('Use the generated shortcode on your post/page to display the album/gallery', 'srizon-flickr-gallery') . '</p>';
    SrizonFlickrUi::BoxFooter();
    SrizonFlickrUi::BoxHeader('box-what-to-do', __("What to do:", 'srizon-flickr-gallery'));
    echo '<p><ol>
<li>' . __('Setup the options on this page', 'srizon-flickr-gallery') . '</li>
<li>' . __('Click on the Albums or Galleries sub-menu', 'srizon-flickr-gallery') . '</li>
<li>' . __('Click "Add New" button to add a new album or gallery. (or click on an existing album title to edit that)', 'srizon-flickr-gallery') . '</li>
<li>' . __('Fill-up or modify the form and save that', 'srizon-flickr-gallery') . '</li>
<li>' . __('Your albums or galleries will be listed along with the shortcodes. Use the shortcodes into your page/post to show the photo album or gallery', 'srizon-flickr-gallery') . '</li>
<li>' . __('Try out different options/layouts', 'srizon-flickr-gallery') . '</li>
</ol></p>';
    SrizonFlickrUi::BoxFooter();
    SrizonFlickrUi::RightColEnd();
    SrizonFlickrUi::LeftColStart();
    include 'forms/common-option-form.php';
    SrizonFlickrUi::LeftColEnd();
    SrizonFlickrUi::OptionWrapperEnd();
    SrizonFlickrUI::PageWrapEnd();

}

add_action('wp_ajax_srz_flickr_save_album_list', 'srizon_flickr_save_album_list');
function srizon_flickr_save_album_list()
{
    $album_list = SrizonFlickrDB::get_others_album_list();
    $album_list[] = sanitize_text_field($_POST['albumid']);
    $album_list = array_unique($album_list);
    SrizonFlickrDB::save_others_album_list($album_list);
    echo __('saved', 'srizon-flickr-gallery');
    exit();
}

add_action('wp_ajax_srz_flickr_remove_album_list', 'srizon_flickr_remove_album_list');
function srizon_flickr_remove_album_list()
{
    $album_list = SrizonFlickrDB::get_others_album_list();
    $id = sanitize_text_field($_POST['albumid']);
    $key = array_search($id, $album_list);
    unset($album_list[$key]);
    SrizonFlickrDB::save_others_album_list($album_list);
    echo __('removed', 'srizon-flickr-gallery');
    exit();
}

add_action('wp_ajax_srz_flickr_save_gallery_list', 'srizon_flickr_save_gallery_list');
function srizon_flickr_save_gallery_list()
{
    $gallery_list = SrizonFlickrDB::get_others_gallery_list();
    $gallery_list[] = sanitize_text_field($_POST['galleryid']);
    $gallery_list = array_unique($gallery_list);
    SrizonFlickrDB::save_others_gallery_list($gallery_list);
    echo __('saved', 'srizon-flickr-gallery');
    exit();
}

add_action('wp_ajax_srz_flickr_remove_gallery_list', 'srizon_flickr_remove_gallery_list');
function srizon_flickr_remove_gallery_list()
{
    $gallery_list = SrizonFlickrDB::get_others_gallery_list();
    $id = sanitize_text_field($_POST['galleryid']);
    $key = array_search($id, $gallery_list);
    unset($gallery_list[$key]);
    SrizonFlickrDB::save_others_gallery_list($gallery_list);
    echo __('removed', 'srizon-flickr-gallery');
    exit();
}
