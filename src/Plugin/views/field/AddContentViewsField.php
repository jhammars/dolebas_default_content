<?php

namespace Drupal\dolebas_default_content\Plugin\views\field;

use Drupal\Core\Form\FormStateInterface;
use Drupal\Component\Utility\Random;
use Drupal\views\Plugin\views\field\FieldPluginBase;
use Drupal\views\ResultRow;

/**
 * A handler to provide a field that is completely custom by the administrator.
 *
 * @ingroup views_field_handlers
 *
 * @ViewsField("add_content_views_field")
 */
class AddContentViewsField extends FieldPluginBase {

  /**
   * {@inheritdoc}
   */
  public function usesGroupBy() {
    return FALSE;
  }

  /**
   * {@inheritdoc}
   */
  public function query() {

    // Check if there are any existing unpublished nodes of the user
    $current_user_uid = \Drupal::currentUser()->id();
    $query = \Drupal::entityQuery('node')
      ->condition('type', 'dolebas_publisher')
      ->condition('uid', $current_user_uid)
      ->condition('status', 0);
    $existing_nodes = $query->execute();
    
    if ( count($existing_nodes) == 0 ) {
      // Create new unpublished node
      $new_node = \Drupal\node\Entity\Node::create(
        array(  'title'   => 'Dolebas Parent',
                'status'  => 0,
                'type'    => 'dolebas_publisher',  )
      );
      $new_node->save();
    }      
    
  }

  /**
   * {@inheritdoc}
   */
  protected function defineOptions() {
    $options = parent::defineOptions();

    $options['hide_alter_empty'] = ['default' => FALSE];
    return $options;
  }

  /**
   * {@inheritdoc}
   */
  public function buildOptionsForm(&$form, FormStateInterface $form_state) {
    parent::buildOptionsForm($form, $form_state);
  }
  
  /**
   * {@inheritdoc}
   */
  public function render(ResultRow $values) {

    // Do nothing
  }  

}
