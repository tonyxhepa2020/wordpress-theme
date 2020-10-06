<?php

class Ju_Custom_Nav_Walker extends Walker_Nav_Menu{
    public function start_lvl(&$output, $depth = 0, $args = [])
    {
        $output .= '<ul class="dropdown-menu"  role="menu">';
    }
}