<?php

  /**
   * Plugin Name:       Utreon Embed
   * Description:       Embed Utreon videos.
   * Version:           1.0.0
   * Requires at least: 5.0
   * Requires PHP:      5.6
   * Author:            Utreon
   * Author URI:        https://utreon.com/
   * License:           GPLv3 or later
   * License URI:       https://www.gnu.org/licenses/gpl-3.0.html
   * Text Domain:       utreon-embed
   */

  wp_embed_register_handler(
    'utreon',
    '#(?:https:\/\/)?utreon\.com\/(?:v|embed)\/([a-zA-Z0-9\_-]{11})#',
    'wpdocs_embed_handler_utreon'
  );

  function wpdocs_embed_handler_utreon($matches, $attr, $url, $rawattr) {
    $embed = sprintf(
      '<iframe width="560" height="315" src="https://utreon.com/embed/%1$s" title="Utreon video player" frameborder="0" scrolling="no" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
      esc_attr($matches[1])
    );
    return $embed;
  }

?>