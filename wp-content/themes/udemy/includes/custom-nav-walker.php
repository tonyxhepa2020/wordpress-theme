<?php

class Ju_Custom_Nav_Walker extends Walker_Nav_Menu{
    public function start_lvl(&$output, $depth = 0, $args = [])
    {
        $output .= '<ul class="dropdown-menu"  role="menu">';
    }

    public function start_el( &$output, $item, $depth = 0, $args = [], $id = 0)
    {
        $output .= '<li class="item item-title">';
        $output .= $args->before;
        $output .= '<a href="' . $item->url . '">';
        $output .= $args->link_before . $item->title . $args->link_after;
        $output .= '</a>';
        $output .= $args->after;
    }
    public function end_el(&$output, $item, $depth = 0, $args = null)
    {
       $output .= '</li>'; // end the li tag
    }

    public function end_lvl( &$output, $depth = 0, $args = [])
    {
        $output .= '</ul>';
    }
}