<form action="admin.php?page=SrzFlickr-Galleries&customize=save" method="post">
    <?php
    SrizonFlickrUI::BoxHeader( 'box3', __( "Layout", 'srizon-flickr-gallery' ), true );
    ?>

    <table class="srzflickr-admin-album">
        <tr>
            <td>
                <label class="label"
                       for="layout"><strong><?php _e( 'Layout', 'srizon-flickr-gallery' ); ?></strong></label>
            </td>
            <td>
                <select name="options[layout]" id="layout" class="layout-options">
                    <option value="collage_thumb" <?php if ( $album_settings['layout'] == 'collage_thumb' ) {
                        echo 'selected="selected"';
                    } ?>><?php _e( '1. Collage - Thumb', 'srizon-flickr-gallery' ); ?>
                    </option>
                    <option value="collage_full" <?php if ( $album_settings['layout'] == 'collage_full' ) {
                        echo 'selected="selected"';
                    } ?>><?php _e( '2. Collage - Full', 'srizon-flickr-gallery' ); ?>
                    </option>
                    <option value="slider_lightbox" <?php if ( $album_settings['layout'] == 'slider_lightbox' ) {
                        echo 'selected="selected"';
                    } ?>><?php _e( '3. Slider - Lightbox', 'srizon-flickr-gallery' ); ?>
                    </option>
                    <option value="slider_image_above" <?php if ( $album_settings['layout'] == 'slider_image_above' ) {
                        echo 'selected="selected"';
                    } ?>><?php _e( '4. Slider - Image Above', 'srizon-flickr-gallery' ); ?>
                    </option>
                    <option value="slider_image_below" <?php if ( $album_settings['layout'] == 'slider_image_below' ) {
                        echo 'selected="selected"';
                    } ?>><?php _e( '5. Slider - Image Below', 'srizon-flickr-gallery' ); ?>
                    </option>
                    <option value="single_image" <?php if ( $album_settings['layout'] == 'single_image' ) {
                        echo 'selected="selected"';
                    } ?>><?php _e( '6. Single Image', 'srizon-flickr-gallery' ); ?>
                    </option>
                    <option value="image_card" <?php if ( $album_settings['layout'] == 'image_card' ) {
                        echo 'selected="selected"';
                    } ?>><?php _e( '7. Image Card', 'srizon-flickr-gallery' ); ?>
                    </option>
                </select>
            </td>
        </tr>

        <tr class="srz-cond" data-cond-option="layout-options"
            data-cond-value="collage_thumb,slider_lightbox,slider_image_above,slider_image_below">
            <td><label for="targetheight"
                       class="label"><?php _e( 'Target Thumb Height', 'srizon-flickr-gallery' ); ?></label></td>
            <td>
                <input id="targetheight" name="options[targetheight]"
                       type="text"
                       value="<?php echo $album_settings['targetheight']; ?>"
                    />

                <p class="srz-admin-subtext"><?php _e( 'This may not be the exact height but closer to this', 'srizon-flickr-gallery' ); ?></p>
            </td>
        </tr>
        <tr class="srz-cond" data-cond-option="layout-options" data-cond-value="collage_thumb,collage_full">
            <td><label for="collagepadding"
                       class="label"><?php _e( 'Collage - Padding', 'srizon-flickr-gallery' ); ?></label></td>
            <td>
                <input id="collagepadding" name="options[collagepadding]"
                       type="text"
                       value="<?php echo $album_settings['collagepadding']; ?>"
                    />

                <p class="srz-admin-subtext"><?php _e( 'Padding size around each image', 'srizon-flickr-gallery' ); ?></p>

            </td>
        </tr>
        <tr class="srz-cond" data-cond-option="layout-options" data-cond-value="collage_thumb,collage_full">
            <td><label for="collagepartiallast"
                       class="label"><?php _e( 'Collage - Fill Last Row', 'srizon-flickr-gallery' ); ?>
                </label></td>
            <td>
                <select id="collagepartiallast" name="options[collagepartiallast]"

                        class="btn-group btn-group-yesno"
                    >
                    <option value="true" <?php if ( $album_settings['collagepartiallast'] == 'true' ) {
                        echo 'selected="selected"';
                    } ?>><?php _e( 'No', 'srizon-flickr-gallery' ); ?>
                    </option>
                    <option value="false" <?php if ( $album_settings['collagepartiallast'] == 'false' ) {
                        echo 'selected="selected"';
                    } ?>><?php _e( 'Yes', 'srizon-flickr-gallery' ); ?>
                    </option>
                </select>

                <p class="srz-admin-subtext"><?php _e( 'Stretch the image of the last row to fill the space', 'srizon-flickr-gallery' ); ?></p>

            </td>
        </tr>
        <tr class="srz-cond" data-cond-option="layout-options"
            data-cond-value="collage_thumb,collage_full,slider_image_above,slider_image_below,single_image,image_card">
            <td><label for="hovercaption"
                       class="label"><?php _e( 'Mouse-over Caption', 'srizon-flickr-gallery' ); ?></label></td>
            <td>
                <select id="hovercaption" name="options[hovercaption]"
                        class="hovercaption"
                    >
                    <option value="1" <?php if ( $album_settings['hovercaption'] == '1' ) {
                        echo 'selected="selected"';
                    } ?>><?php _e( 'Yes', 'srizon-flickr-gallery' ); ?>
                    </option>
                    <option value="0" <?php if ( $album_settings['hovercaption'] == '0' ) {
                        echo 'selected="selected"';
                    } ?>><?php _e( 'No', 'srizon-flickr-gallery' ); ?>
                    </option>
                </select>


            </td>
        </tr>
        <tr class="srz-cond" data-cond-option="hovercaption" data-cond-value="1">
            <td><label for="hovercaptiontype"
                       class="label"><?php _e( 'Caption Behavior', 'srizon-flickr-gallery' ); ?></label></td>
            <td>
                <select id="hovercaptiontype" name="options[hovercaptiontype]"
                    >
                    <option value="0" <?php if ( $album_settings['hovercaptiontype'] == '0' ) {
                        echo 'selected="selected"';
                    } ?>><?php _e( 'Show On Hover - Hide On Leave', 'srizon-flickr-gallery' ); ?>
                    </option>
                    <option value="1" <?php if ( $album_settings['hovercaptiontype'] == '1' ) {
                        echo 'selected="selected"';
                    } ?>><?php _e( 'Hide On Hover - Show On Leave', 'srizon-flickr-gallery' ); ?>
                    </option>
                    <option value="2" <?php if ( $album_settings['hovercaptiontype'] == '2' ) {
                        echo 'selected="selected"';
                    } ?>><?php _e( 'Always Show', 'srizon-flickr-gallery' ); ?>
                    </option>
                </select>


            </td>
        </tr>
        <tr class="srz-cond" data-cond-option="layout-options" data-cond-value="collage_thumb">
            <td><label for="showhoverzoom"
                       class="label"><?php _e( 'Animate Thumb on Hover', 'srizon-flickr-gallery' ); ?></label>
            </td>
            <td>
                <select id="showhoverzoom" name="options[showhoverzoom]"

                        class="btn-group btn-group-yesno"
                    >
                    <option value="1" <?php if ( $album_settings['showhoverzoom'] == '1' ) {
                        echo 'selected="selected"';
                    } ?>><?php _e( 'Yes', 'srizon-flickr-gallery' ); ?>
                    </option>
                    <option value="0" <?php if ( $album_settings['showhoverzoom'] == '0' ) {
                        echo 'selected="selected"';
                    } ?>><?php _e( 'No', 'srizon-flickr-gallery' ); ?>
                    </option>
                </select>


            </td>
        </tr>
        <tr class="srz-cond" data-cond-option="layout-options"
            data-cond-value="slider_lightbox,slider_image_above,slider_image_below,single_image">
            <td><label for="animationspeed"
                       class="label"><?php _e( 'Animation Time in MilliSecs', 'srizon-flickr-gallery' ); ?></label></td>
            <td>
                <input id="animationspeed" name="options[animationspeed]"
                       type="text"
                       value="<?php echo $album_settings['animationspeed']; ?>"
                    />


            </td>
        </tr>
        <tr class="srz-cond" data-cond-option="layout-options"
            data-cond-value="slider_lightbox,slider_image_above,slider_image_below">
            <td><label for="autoslideinterval"
                       class="label"><?php _e( 'AutoSlide Interval in Seconds.', 'srizon-flickr-gallery' ); ?>
                </label></td>
            <td>
                <input id="autoslideinterval" name="options[autoslideinterval]"
                       type="text"
                       value="<?php echo $album_settings['autoslideinterval']; ?>"
                    />

                <p class="srz-admin-subtext"><?php _e( 'Put 0 for disabling autoSlide', 'srizon-flickr-gallery' ); ?></p>
            </td>
        </tr>
        <tr class="srz-cond" data-cond-option="layout-options"
            data-cond-value="collage_full,slider_image_above,slider_image_below,single_image,image_card">
            <td><label for="maxheight"
                       class="label"><?php _e( 'Maximum height of the full image', 'srizon-flickr-gallery' ); ?></label>
            </td>
            <td>
                <input id="maxheight" name="options[maxheight]"
                       type="text"
                       value="<?php echo $album_settings['maxheight']; ?>"
                    /></td>
        </tr>

    </table>
    <?php
    SrizonFlickrUI::BoxFooter();
    SrizonFlickrUI::BoxHeader( 'box4', __( "Options", 'srizon-flickr-gallery' ), true );
    ?>
    <table class="srzflickr-admin-album">
        <tr>
            <td>
                <label for="updatefeed"
                       class="label"><?php _e( 'Sync After Every # minutes', 'srizon-flickr-gallery' ); ?></label>
            </td>
            <td>
                <input type="text" size="5" name="options[updatefeed]" id="updatefeed"
                       value="<?php echo $album_settings['updatefeed']; ?>"/>
                <p class="srz-admin-subtext"><?php _e( 'Keep blank to use the global value from "Common Options" page', 'srizon-flickr-gallery' ); ?></p>

            </td>
        </tr>

        <tr>
            <td>
                <label class="label"
                       for="totalimg"><?php _e( 'Total Number of Images', 'srizon-flickr-gallery' ); ?></label>
            </td>
            <td>
                <input type="text" size="5" name="options[totalimg]" id="totalimg"
                       value="<?php echo $album_settings['totalimg']; ?>"/>
            </td>
        </tr>
        <tr>
            <td>
                <label class="label"
                       for="paginatenum"><?php _e( 'Paginate After # Thumbs', 'srizon-flickr-gallery' ); ?></label>
            </td>
            <td>
                <input type="text" size="5" id="paginatenum" name="options[paginatenum]"
                       value="<?php echo $album_settings['paginatenum']; ?>"/>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <label class="label"><?php wp_nonce_field( 'SrzFlickr', 'srzflickr_submit' ); ?></label>
                <?php
                    echo '<input type="hidden" name="id" value="' . sanitize_text_field($_GET['galleryid']) . '" />';
                ?>
                <input type="submit" class="button-primary" name="submit"
                       value="<?php _e( 'Save Album Settings', 'srizon-flickr-gallery' ); ?>"/>
            </td>
        </tr>
    </table>
    <?php SrizonFlickrUI::BoxFooter(); ?>
</form>