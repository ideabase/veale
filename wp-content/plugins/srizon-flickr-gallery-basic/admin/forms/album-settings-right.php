<?php
SrizonFlickrUI::BoxHeader( 'box3', __( "Edit Album Settings For:", 'srizon-flickr-gallery' ), true );
echo '<div>';
//srizon_flickr_set_debug_msg('list',$list);
foreach($list['photosets']['photoset'] as $album){
    if($album['id']==$_GET['albumid']){
        echo "<h3>{$album['title']['_content']} - <small>{$album['photos']}".__( 'Photos', 'srizon-flickr-gallery' )."</small></h3>";
        echo "<img style=\"max-width: 100%; height: auto;\" src=\"{$album['primary_photo_extras']['url_m']}\" alt=\"\" width=\"{$album['primary_photo_extras']['width_m']}\" height=\"{$album['primary_photo_extras']['height_m']}\">
";
    }
}
echo '</div>';
SrizonFlickrUI::BoxFooter();
?>