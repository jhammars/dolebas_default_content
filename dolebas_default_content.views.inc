<?php

/**
 * @file
 * Contains dolebas_default_content\dolebas_default_content.views.inc..
 * Provide a custom views field data that isn't tied to any other module. */

use Drupal\Component\Utility\NestedArray;
use Drupal\Core\Entity\EntityStorageInterface;
use Drupal\Core\Entity\Sql\SqlContentEntityStorage;
use Drupal\Core\Render\Markup;
use Drupal\field\FieldConfigInterface;
use Drupal\field\FieldStorageConfigInterface;
use Drupal\system\ActionConfigEntityInterface;

/**
* Implements hook_views_data().
*/
function dolebas_default_content_views_data() {

    $data['views']['table']['group'] = t('Custom Global');
    $data['views']['table']['join'] = [
      // #global is a special flag which allows a table to appear all the time.
      '#global' => [],
    ];


    $data['views']['add_content_views_field'] = [
        'title' => t('Dolebas add content'),
        'help' => t('Add new unpublished content if no unpublished content exists'),
        'field' => [
            'id' => 'add_content_views_field',
        ],
    ];

    return $data;
}
