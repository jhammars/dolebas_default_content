<?php

namespace Drupal\dolebas_default_content\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a sidebar menu block.
 *
 * @Block(
 *  id = "dolebas_sidebar_menu_block",
 *  admin_label = @Translation("Dolebas Sidebar Menu"),
 * )
 */
class DolebasSidebarMenuBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {

    $build['#theme'] = 'dolebas_sidebar_menu_block';
    
    $build['#attached']['library'] = 'dolebas_default_content/dolebas-sidebar-menu-block';

    return $build;
  }

}
