<?php
SrizonFlickrUI::BoxHeader( 'box3', __( "Edit Gallery Settings For:", 'srizon-flickr-gallery' ), true );
echo '<div>';
//srizon_flickr_set_debug_msg('list',$list);
foreach($list['galleries']['gallery'] as $gallery){
    if($gallery['id']==$_GET['galleryid']){
        echo "<h3>{$gallery['title']['_content']} - <small>{$gallery['count_photos']}".__( 'Photos', 'srizon-flickr-gallery' )."</small></h3>";
        echo "<img style=\"max-width: 100%; height: auto;\" src=\"{$gallery['primary_photo_extras']['url_m']}\" alt=\"\" width=\"{$gallery['primary_photo_extras']['width_m']}\" height=\"{$gallery['primary_photo_extras']['height_m']}\">
";
    }
}
echo '</div>';
SrizonFlickrUI::BoxFooter();
?>