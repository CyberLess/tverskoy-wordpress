<?php

function getTplPageURL($TEMPLATE_NAME){
    $url = null;
    $pages = get_pages(array(
        'meta_key' => '_wp_page_template',
        'meta_value' => $TEMPLATE_NAME
    ));
    if(isset($pages[0])) {
        $url = get_page_link($pages[0]->ID);
    }
    return $url;
}


function getDateTimeFormat($datetime, $dateformat = "d F") {
    if (!$datetime) {
        return ['date' => '', 'time' => ''];
    }

    $months = [
        'January' => 'января',
        'February' => 'февраля',
        'March' => 'марта',
        'April' => 'апреля',
        'May' => 'мая',
        'June' => 'июня',
        'July' => 'июля',
        'August' => 'августа',
        'September' => 'сентября',
        'October' => 'октября',
        'November' => 'ноября',
        'December' => 'декабря'
    ];

    $date = new DateTime($datetime);
	if ($dateformat === 'd F') {
		$dateFormatted = $date->format('d F');
		$dateFormatted = strtr($dateFormatted, $months);
	} else {
		$dateFormatted = $date->format($dateformat);
	}
    $timeFormatted = $date->format('H:i');
    return ['date' => $dateFormatted, 'time' => $timeFormatted];
}

function getDomainFromUrl($url) {
	if (!$url) {
		return '';
	}
    if (!preg_match("~^(?:f|ht)tps?://~i", $url)) {
        $url = "http://" . $url;
    }
    $host = parse_url($url, PHP_URL_HOST);
    return preg_replace('/^www\./', '', $host);
}


function wp_get_nav_sorted_menu_items($name) {
	$locations = get_nav_menu_locations();

	if (empty($locations[ $name ])) {
		return false;
	}

	return nav_sort_menu_items(wp_get_nav_menu_items($locations[ $name ]));
}

function nav_sort_menu_items($items) {
	if (!$items) {
		return false;
	}
	return _nav_get_children($items, 0, 0);
}

function _nav_get_children($items, $parentId, $depth) {
	if (!$items) {
		return false;
	}
	$children = array();
	foreach($items as $id => $child)
	{
		if($child->menu_item_parent == $parentId)
		{
			$child->depth = $depth;
			$child->children = _nav_get_children($items, $child->ID, $depth + 1);
			$children[] = $child;
		}
	}
	return $children;
}

function the_share() {
	global $post;
	$title = $post->post_title;
	$url = get_the_permalink($post->ID);
?>
	<a class="section-news-single__social-button ui-button ui-button_circle-gray ui-button_type_circle ui-button_size_circle-middle ui-button_type_circle ui-button_size_circle-middle" target="_blank" href='<?php echo "https://vk.com/share.php?url={$url}&title={$title}" ?>'>
		<span class="ui-button__icon ui-button__icon_icon-vk">
			<svg class="ui-button__icon ui-button__icon_circle ui-button__icon_circle-gray module-svg-icon module-svg-icon_icon-vk" viewBox="0 0 24 24"><use href="#icon-vk"></use></svg>
		</span>
	</a>
	<a class="section-news-single__social-button ui-button ui-button_circle-gray ui-button_type_circle ui-button_size_circle-middle ui-button_type_circle ui-button_size_circle-middle" target="_blank" href='<?php echo "https://vk.com/share.php?url={$url}&title={$title}" ?>'>
		<span class="ui-button__icon ui-button__icon_icon-tg">
			<svg class="ui-button__icon ui-button__icon_circle ui-button__icon_circle-gray module-svg-icon module-svg-icon_icon-tg" viewBox="0 0 24 24"><use href="#icon-tg"></use></svg>
		</span>
	</a>
	<a class="section-news-single__social-button ui-button ui-button_circle-gray ui-button_type_circle ui-button_size_circle-middle ui-button_type_circle ui-button_size_circle-middle" target="_blank" href='<?php echo "https://api.whatsapp.com/send?text={$url}" ?>'>
		<span class="ui-button__icon ui-button__icon_icon-whatsapp">
			<svg class="ui-button__icon ui-button__icon_circle ui-button__icon_circle-gray module-svg-icon module-svg-icon_icon-whatsapp" viewBox="0 0 24 24"><use href="#icon-whatsapp"></use></svg>
		</span>
	</a>
<?}
