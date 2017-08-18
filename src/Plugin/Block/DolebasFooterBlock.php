<?php

namespace Drupal\dolebas_default_content\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'DolebasFooterBlock' block.
 *
 * @Block(
 *  id = "dolebas_footer_block",
 *  admin_label = @Translation("Dolebas Footer"),
 * )
 */
class DolebasFooterBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    // $build['dolebas_footer_block']['#markup'] = 'Pricing  &nbsp;|&nbsp;  Terms of Service  &nbsp;|&nbsp;  Privacy Policy  &nbsp;|&nbsp;  Contact';
    $build['dolebas_footer_block']['#theme'] = 'dolebas_footer_block';

    return $build;
  }

}
