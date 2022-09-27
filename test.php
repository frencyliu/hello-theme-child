<?php

function change_heading_widget_content($widget_content, $widget)
{

    //取得名稱
    $widget->get_name();
    //取得該widget設定
    $widget->get_settings();

    //控制返回的元素
    return $widget_content;
}
add_filter('elementor/widget/render_content', 'change_heading_widget_content', 10, 2);
