<?php

if (! function_exists('dd')) {
  /**
   * Die and Dump
   *
   * @param $vars
   * @return void
   */
  function dd($vars)
  {
    die('<pre>'.htmlentities(print_r($vars, true)).'</pre>');
  }
}

if (! function_exists('wpdocs_theme_path')) {
  /**
   *
   *
   * @param $path
   * @return string
   */
  function wpdocs_theme_path($path)
  {
    return get_stylesheet_directory_uri() . DIRECTORY_SEPARATOR . $path;
  }
}