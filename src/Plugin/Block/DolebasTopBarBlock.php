<?php

namespace Drupal\dolebas_default_content\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a top bar.
 *
 * @Block(
 *  id = "dolebas_top_bar_block",
 *  admin_label = @Translation("Dolebas Top Bar"),
 * )
 */
class DolebasTopBarBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {

    $site_branding = \Drupal::service('plugin.manager.block')->createInstance('dolebas_site_branding_block', []);
    $user_display = \Drupal::service('plugin.manager.block')->createInstance('dolebas_user_display_block', []);
    $sidebar_menu = \Drupal::service('plugin.manager.block')->createInstance('dolebas_sidebar_menu_block', []);

    $build['#dolebas_site_branding_block'] = $site_branding->build();
    $build['#dolebas_user_display_block'] = $user_display->build();
    $build['#dolebas_sidebar_menu_block'] = $sidebar_menu->build();
    
    $build['#attached']['library'] = 'dolebas_default_content/dolebas-top-bar-block';
    
    $build['#theme'] = 'dolebas_top_bar_block';

    return $build;
  }

}
