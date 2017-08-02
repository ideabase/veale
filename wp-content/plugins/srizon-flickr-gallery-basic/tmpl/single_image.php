<?php
//SrizonResourceLoader::load_srizon_custom_js();
//SrizonResourceLoader::load_srizon_custom_css();
$data .= <<<EOL
	<div class="full-size-image-container srz-clearfix">
		<div class="full-size-single-image" id="{$scroller_id}"></div>
		<span class="srz-prev"></span>
		<span class="srz-next"></span>
	</div>
EOL;
$j = 0;
foreach($photos as $photo){
	$photos[$j]['txt'] = $photos[$j]['title'];
	$photos[$j]['thumb'] = $photos[$j]['url_s'];
	$photos[$j]['src'] = $photos[$j]['url_l'];
	$photos[$j]['width'] = $photos[$j]['width_s'];
	$photos[$j]['height'] = $photos[$j]['height_s'];
	$j++;
}
$json_data = json_encode( $photos );
$data .= <<<EOL
<script>
	jQuery('#{$scroller_id}').srzSingleImageSlider({
		images_json: {$json_data},
		prev_class: '.srz-prev',
		next_class: '.srz-next, .full-size-single-image',
		max_height: {$srz_album['maxheight']},
		fadeout_time: {$srz_album['animationspeed']},
		fadein_time: {$srz_album['animationspeed']},
		hover_caption: {$srz_album['hovercaption']}
	});
</script>
EOL;
