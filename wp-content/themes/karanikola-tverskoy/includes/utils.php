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


function getDateTimeFormat($datetime) {
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
    $dateFormatted = $date->format('d F');
    $dateFormatted = strtr($dateFormatted, $months);
    $timeFormatted = $date->format('H:i');

    return ['date' => $dateFormatted, 'time' => $timeFormatted];
}
