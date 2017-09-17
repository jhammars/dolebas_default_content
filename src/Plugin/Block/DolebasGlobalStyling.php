<?php

namespace Drupal\dolebas_default_content\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'DolebasGlobalStyling' block.
 *
 * @Block(
 *  id = "dolebas_global_styling",
 *  admin_label = @Translation("Dolebas global styling"),
 * )
 */
class DolebasGlobalStyling extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['dolebas_global_styling']['#markup'] = '';
    $build['#attached']['library'] = 'dolebas_default_content/dolebas-global-styling-block';

    return $build;
  }

}
