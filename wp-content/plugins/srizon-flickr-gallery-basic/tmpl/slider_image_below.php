<?php
//SrizonResourceLoader::load_elastislide();
//SrizonResourceLoader::load_srizon_custom_css();
$data .= <<<EOL
	<div class="full-size-image">
		<div class="loading-wrap">
			<ul class="elastislide-list"  id="{$scroller_id}">
EOL;
$i = 0;
foreach ($photos as $image) {
	$caption = nl2br(esc_html($image['title']));
	$image['url_s'] = esc_url($image['url_s']);
	$image['width_s'] = esc_attr($image['width_s']);
	$image['height_s'] = esc_attr($image['height_s']);
    $data .= <<<EOL
				<li>
					<a href="javascript:;" data-index="{$i}">
						<img src="{$image['url_s']}" alt="{$caption}" width="{$image['width_s']}" height="{$image['height_s']}" />
					</a>
				</li>

EOL;
    $i++;
}
$data .= <<<EOL
			</ul>
		</div>
		<div class="full-size-image-container srz-clearfix">
			<div class="full-size-single-image" id="full-{$scroller_id}"></div>
			<span class="srz-prev"></span>
			<span class="srz-next"></span>
		</div>
	</div>
EOL;
$j=0;
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
<script type="text/javascript">
	jQuery('#{$scroller_id}').matchImgHeight({
		'height':{$srz_album['targetheight']}
	});

	jQuery(window).load(function(){
		jQuery( '#{$scroller_id}').unwrap().elastislide({
			speed: {$srz_album['animationspeed']}
		});

		jQuery('#{$scroller_id}').autoscrollElastislide({
			interval: {$srz_album['autoslideinterval']}
		});

		jQuery('#full-{$scroller_id}').srzSingleImageSlider({
				images_json: {$json_data},
				prev_class: '.srz-prev',
				next_class: '.srz-next, .full-size-single-image',
				max_height: {$srz_album['maxheight']},
				fadeout_time: {$srz_album['animationspeed']},
				fadein_time: {$srz_album['animationspeed']},
				thumb_container: '#{$scroller_id}',
				hover_caption: {$srz_album['hovercaption']}
			});
	});
</script>
EOL;
