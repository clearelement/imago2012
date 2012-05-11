<?php

add_action('headway_setup_child_theme', 'imago_remove_theme_support');

function imago_remove_theme_support() {

        // Removes Headway's basic CSS file
	remove_theme_support('headway-structure-css');
        // Removes the Design Editor from the Visual Editor
	remove_theme_support('headway-design-editor');
        // Removes Headway's basic CSS file
	remove_theme_support('headway-structure-css');
}