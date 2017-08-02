<!--<h2>You can add other people's public album from Flickr.</h2>-->
<?php
SrizonFlickrUI::BoxHeader( 'box-search', __( "Embed Galleries from other users", 'srizon-flickr-gallery' ), true );
?>
    <form action="admin.php?page=SrzFlickr-OtherGalleries" method="post">
        <table class="srzflickr-admin-common" width="100%">
            <tr>
                <td width="20%">
                    <span class="label"><?php _e( 'Flickr Username or URL :', 'srizon-flickr-gallery' ); ?></span>
                </td>
                <td>
                    <input type="text" size="40" name="flickr_user" id="flickr_user" value="">
                    <br><span class="srz-admin-subtext"><?php _e('Enter the flickr username of that person or any url of that persons album/photo','srizon-flickr-gallery')?></span>
                </td>
            </tr>
            <tr>
                <td>
                    <span class="label"><?php wp_nonce_field( 'SrzFlickr-OtherAlbums', 'srzflickr_submit' ); ?></span>
                </td>
                <td>
                    <input type="submit" class="button-primary" name="searchUser" value="<?php _e( 'Search Galleries', 'srizon-flickr-gallery' ); ?>">
                </td>
            </tr>
        </table>
    </form>
<?php
SrizonFlickrUI::BoxFooter(true);
?>