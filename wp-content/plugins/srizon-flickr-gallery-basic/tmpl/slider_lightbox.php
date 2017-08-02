<?php
//SrizonResourceLoader::load_mag_popup();
//SrizonResourceLoader::load_elastislide();
//SrizonResourceLoader::load_srizon_custom_css();
$data .= '<div class="loading-wrap"><ul class="elastislide-list fbalbum"  id="' . $scroller_id . '">';
foreach ( $photos as $image ) {
	$caption = nl2br(esc_html($image['title']));
	$image['url_l'] = esc_url($image['url_l']);
	$image['url_s'] = esc_url($image['url_s']);
	$image['width_s'] = esc_attr($image['width_s']);
	$image['height_s'] = esc_attr($image['height_s']);
	$data .= <<<IMGLINK
	<li>
		<a href="{$image['url_l']}" data-title="{$caption}" {$lightbox_attribute}>
			<img src="{$image['url_s']}" alt="{$caption}" width="{$image['width_s']}" height="{$image['height_s']}" />
		</a>
	</li>
IMGLINK;
}
$data .= '</ul></div>';
$data .= <<<EOL
<script type="text/javascript">
	jQuery( '#{$scroller_id}' ).matchImgHeight({
		'height':{$srz_album['targetheight']}
	});
	jQuery(window).load(function(){
		jQuery( '#{$scroller_id}').unwrap().elastislide({
			speed: {$srz_album['animationspeed']}
		});
	});
	jQuery('#{$scroller_id}').autoscrollElastislide({
		interval: {$srz_album['autoslideinterval']}
	});
</script>
EOL;
