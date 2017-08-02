<?php

//SrizonResourceLoader::load_collage_plus();
//SrizonResourceLoader::load_srizon_custom_css();
$data .= '<div class="fbalbum jfb-big"  id="' . $scroller_id . '">';
foreach ($photos as $image) {
	$caption = nl2br(esc_html($image['title']));
	$image['url_l'] = esc_url($image['url_l']);
	$image['width_l'] = esc_attr($image['width_l']);
	$image['height_l'] = esc_attr($image['height_l']);
	$data .= <<<EOL
		<div class="Image_Wrapper" data-caption="{$caption}">
			<a href="javascript:;">
				<img alt="{$caption}" src="{$image['url_l']}" data-width="{$image['width_l']}" data-height="{$image['height_l']}" width="{$image['width_l']}" height="{$image['height_l']}" />
			</a>
		</div>
EOL;
}
$data .= '</div>';
$addcaption = ($srz_album['hovercaption']) ? '.collageCaption({behaviour_c: '.$srz_album['hovercaptiontype'].'})' : '';
$data .= <<<EOL
<script>
	;
	jQuery(document).ready(function(){
		jQuery('#{$scroller_id} .Image_Wrapper').css("opacity", 0.3);
		jQuery('#{$scroller_id}').removeWhitespace().collagePlus({
			'allowPartialLastRow': {$srz_album['collagepartiallast']},
			'targetHeight': {$srz_album['maxheight']},
			'padding': {$srz_album['collagepadding']}
		}){$addcaption};
	});
	jQuery(window).resize(function(){
		jQuery('#{$scroller_id}').collagePlus({
			'allowPartialLastRow': {$srz_album['collagepartiallast']},
			'targetHeight': {$srz_album['maxheight']},
			'padding': {$srz_album['collagepadding']}
		});
	});
</script>
EOL;
