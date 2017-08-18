<?php

namespace Drupal\dolebas_default_content\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class DolebasPricingPage.
 */
class DolebasPricingPage extends ControllerBase {

  public function render() {
    return [
      '#theme' => 'dolebas_pricing_page'
    ];
  }

}
