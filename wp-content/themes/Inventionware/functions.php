<?php
/**
 * Created by PhpStorm.
 * User: mustafakattan
 * Date: 2019-08-19
 * Time: 11:23
 */

function laod_stylesheets(){
    wp_register_style("stylesheet", get_template_directory_uri() . '/css/bootstrap.min.css',array(),false,'all');
    wp_enqueue_style('stylesheet');
}