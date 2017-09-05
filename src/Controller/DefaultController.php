<?php

namespace Drupal\dolebas_default_content\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class DefaultController.
 */
class DefaultController extends ControllerBase {

  /**
   * Hello.
   *
   * @return string
   *   Return Hello string.
   */
  public function front() {
    return [
      '#type' => 'markup',
      '#markup' => $this->t(''),
      // '#theme' => 'hello'
    ];
  }

}
