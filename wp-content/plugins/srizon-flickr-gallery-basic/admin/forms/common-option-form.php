<?php
SrizonFlickrUI::BoxHeader( 'box-common', __( "Common Options", 'srizon-flickr-gallery' ), true );
?>
<form action="admin.php?page=SrzFlickr" method="post">
    <table class="srzflickr-admin-common" width="100%">
        <tr>
            <td width="20%">
                <span class="label"><?php _e( 'Flickr API Key:', 'srizon-flickr-gallery' ); ?></span>
            </td>
            <td>
                <input type="text" size="40" name="api_key" id="api_key" value="<?php echo SrizonFlickrDB::get_common_val('api_key')?>">
                <br><span class="srz-admin-subtext"><?php _e('Enter your flickr API Key.<br>You can generate it from <a href="https://www.flickr.com/services/apps/create/" target="_blank">Flickr</a>','srizon-flickr-gallery')?></span>
            </td>
        </tr>
        <tr>
            <td width="20%">
                <span class="label"><?php _e( 'Flickr API Secret:', 'srizon-flickr-gallery' ); ?></span>
            </td>
            <td>
                <input type="text" size="40" name="api_secret" id="api_secret" value="<?php echo SrizonFlickrDB::get_common_val('api_secret')?>">
                <br><span class="srz-admin-subtext"><?php _e( 'Enter your flickr API Secret', 'srizon-flickr-gallery' ); ?></span>
            </td>
        </tr>
        <?php if(trim(SrizonFlickrDB::get_api_key()) and trim(SrizonFlickrDB::get_api_secret())){?>
        <tr>
            <td>
                &nbsp;
            </td>
            <td class="auth-cell">
                <?php
                    if($auth_user_fullname){
                        echo '<span>'.__( 'Currently authenticated as', 'srizon-flickr-gallery' ).' <strong><a target="_blank" href="https://flickr.com/photos/'.$auth_user_username.'">'.$auth_user_fullname.'</a></strong></span><br><br>';
                        echo '<a href="admin.php?page=SrzFlickr&srizon_flickr_auth=yes" class="button-primary">'.__( 'Authenticate again (Update Token)', 'srizon-flickr-gallery' ).'</a>';
                    }
                    else{
                        echo '<a href="admin.php?page=SrzFlickr&srizon_flickr_auth=yes" class="button-primary">'.__( 'Authenticate', 'srizon-flickr-gallery' ).'</a>';
                        echo '<br><span class="srz-admin-subtext">'.__( 'You need to authenticate this app after providing the api key and secret.', 'srizon-flickr-gallery' ).'</span>
';
                    }
                ?>
            </td>
        </tr>
        <?php }?>
        <tr>
            <td><span class="label"><?php _e( 'Global Caching Time', 'srizon-flickr-gallery' ); ?></span></td>
            <td>
                <input size="5" type="text" name="cache_interval" id="cache_interval" value="<?php echo SrizonFlickrDB::get_common_val('cache_interval')?>"><br>
                <span class="srz-admin-subtext"><?php _e( 'Caching time in minutes. After this interval the data will by synced with flicker. (For example: if the value is 60 then the data will be updated in every 60 minutes', 'srizon-flickr-gallery' ); ?>)</span>
            </td>
        </tr>
        <tr>
            <td><span class="label"><?php _e( 'Show Debug Msg', 'srizon-flickr-gallery' ); ?></span></td>
            <td>
                <input type="radio" name="srz_debug" value="yes" <?php if(SrizonFlickrDB::get_common_val('srz_debug')=='yes') echo 'checked';?>><?php _e( 'Yes', 'srizon-flickr-gallery' ); ?> &nbsp;&nbsp;
                <input type="radio" name="srz_debug" value="no" <?php if(SrizonFlickrDB::get_common_val('srz_debug')=='no') echo 'checked';?>><?php _e( 'No', 'srizon-flickr-gallery' ); ?>
                <br>
                <span class="srz-admin-subtext"><?php _e( 'Change it to yes if your albums aren\'t showing on your post/page. This might help finding/debugging the problem.', 'srizon-flickr-gallery' ); ?></span>
            </td>
        </tr>
        <tr>
            <td>
                <span class="label"><?php wp_nonce_field( 'SrzFlickr', 'srzflickr_submit' ); ?></span>
            </td>
            <td>
                <input type="submit" value="<?php _e( 'Save', 'srizon-flickr-gallery' ); ?>" name="submit" class="button-primary">
            </td>
        </tr>
    </table>
</form>
<?php
SrizonFlickrUI::BoxFooter();
?>