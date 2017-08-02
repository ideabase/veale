<?php
//SrizonResourceLoader::load_srizon_custom_js();
//SrizonResourceLoader::load_srizon_custom_css();
$data .= <<<EOL
	<div class="full-size-card-image-container srz-clearfix" id="{$scroller_id}">
		<p class="current-caption"></p>
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
$json_data = json_encode($photos);
$data .= <<<EOL
<script>
	jQuery('#{$scroller_id}').srzSingleImageCard({
		images_json: {$json_data},
		next_class: '.srz-next, .card-first',
		max_height: {$srz_album['maxheight']},
		hover_caption: {$srz_album['hovercaption']}
	});
</script>
EOL;
