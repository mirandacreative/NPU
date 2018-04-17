<?php

/**
 * Class Foundation_Navigation
 */

class Foundation_Navigation extends Walker_Nav_Menu {

	/**
	 * Adds custom class to dropdown menu for foundation dropdown script
	 */
	function start_lvl( &$output, $depth = 0, $args = array() ){
		$indent = str_repeat("\t", $depth);
		$output .= "\n$indent<ul class=\"menu submenu\">\n";
	}
    function start_el(&$output, $item, $depth, $args) {
        $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

        $class_names = $value = '';

        $classes = empty( $item->classes ) ? array() : (array) $item->classes;

        $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );
        $class_names = ' class="' . esc_attr( $class_names ) . '"';

        $output .= $indent . '<li ' . $value . $class_names .'>';

        $attributes = ! empty( $item->attr_title ) ? ' title="' . esc_attr( $item->attr_title ) .'"' : '';
        $attributes .= ! empty( $item->target ) ? ' target="' . esc_attr( $item->target ) .'"' : '';
        $attributes .= ! empty( $item->xfn ) ? ' rel="' . esc_attr( $item->xfn ) .'"' : '';
        $attributes .= ! empty( $item->url ) ? ' href="' . esc_attr( $item->url ) .'"' : '';


        $item_output = $args->before;
        $item_output .= '<a'. $attributes .'>';
        if ($field = get_field('icon', $item)){
            $icon= $field['sizes']['medium'] ;
            $icon_hover = get_field('icon_hover', $item)['sizes']['medium'];
            $item_output .= '<span style="background-image: url(' .$icon. ');"   class="menu_icon icon"></span>';
            $item_output .= '<span style="background-image: url(' .$icon_hover. ');"  class="menu_icon_hover icon"></span>';
            $item_output .= '<span class="mobile_fa"></span>';
        }
        $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
        $item_output .= '</a>';
        $item_output .= $args->after;

        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }

	/**
	 * Adds custom class to parent item with dropdown menu
	 */
	function display_element( $element, &$children_elements, $max_depth, $depth=0, $args, &$output ) {
		$id_field = $this->db_fields['id'];
		if ( !empty( $children_elements[ $element->$id_field ] ) ) {
			$element->classes[] = 'has-dropdown';
		}
		parent::display_element( $element, $children_elements, $max_depth, $depth, $args, $output );
	}
}