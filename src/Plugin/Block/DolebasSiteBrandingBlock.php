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

    $build['#theme'] = 'dolebas_site_branding_block';
    $build['#attached']['library'] = 'dolebas_default_content/dolebas-site-branding-block';
    
    return $build;
  }

}
