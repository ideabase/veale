<?php

$extraclass = '';
if($srz_album['showhoverzoom']) $extraclass.=' zoom';
$data .= '<div class="fbalbum'.$extraclass.'"  id="' . $scroller_id . '">';
foreach ($photos as $image) {
	$caption = nl2br(esc_html($image['title']));
	$image['url_l'] = esc_url($image['url_l']);
	$image['url_s'] = esc_url($image['url_s']);
	$image['width_s'] = esc_attr($image['width_s']);
	$image['height_s'] = esc_attr($image['height_s']);
	$data .= <<<EOL
		<div class="Image_Wrapper" data-caption="{$caption}">
			<a href="{$image['url_l']}" data-title="{$caption}" {$lightbox_attribute}>
				<img alt="{$caption}" src="{$image['url_s']}" data-width="{$image['width_s']}" data-height="{$image['height_s']}" width="{$image['width_s']}" height="{$image['height_s']}" />
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
			'targetHeight': {$srz_album['targetheight']},
			'padding': {$srz_album['collagepadding']}
		}){$addcaption};
	});
	jQuery(window).resize(function(){
		jQuery('#{$scroller_id}').collagePlus({
			'allowPartialLastRow': {$srz_album['collagepartiallast']},
			'targetHeight': {$srz_album['targetheight']},
			'padding': {$srz_album['collagepadding']}
		});
	});
</script>
EOL;
