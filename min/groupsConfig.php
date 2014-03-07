<?php
/**
 * Groups configuration for default Minify implementation
 * @package Minify
 */

/** 
 * You may wish to use the Minify URI Builder app to suggest
 * changes. http://yourdomain/min/builder/
 *
 * See http://code.google.com/p/minify/wiki/CustomSource for other ideas
 **/

return array(
    'js-init' => array(
        '//js/vendor/jquery.mousewheel.js', 
        '//js/vendor/jquery.slides.js',
        '//js/vendor/jquery.magnific-popup.min.js',
        '//js/init.js'
    ),
    'js-exec' => array(
        '//js/main.js'
    ),
    'css' => array(
        '//css/screen.css'
    )
);