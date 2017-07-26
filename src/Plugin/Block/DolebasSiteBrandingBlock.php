<?php

namespace Drupal\dolebas_default_content\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'DolebasSiteBrandingBlock' block.
 *
 * @Block(
 *  id = "dolebas_site_branding_block",
 *  admin_label = @Translation("Dolebas Site Branding"),
 * )
 */
class DolebasSiteBrandingBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['dolebas_site_branding_block']['#theme'] = 'dolebas_site_branding_block';
    return $build;
  }

}
