<?php

namespace Drupal\dolebas_default_content\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a top bar.
 *
 * @Block(
 *  id = "dolebas_default_content_block",
 *  admin_label = @Translation("Dolebas Default Content"),
 * )
 */
class DolebasDefaultContentBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {

    $frontpage_player = \Drupal::service('plugin.manager.block')->createInstance('frontpage_player_block', []);

    $build['#frontpage_player_block'] = $frontpage_player->build();

    $build['#dolebas_me_view'] = views_embed_view('dolebas_me_view');
    
    $build['#attached']['library'] = 'dolebas_default_content/dolebas-default-content-block';
    
    $build['#theme'] = 'dolebas_default_content_block';

    return $build;
  }

}
