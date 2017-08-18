<?php

namespace Drupal\dolebas_default_content\Controller;

use Drupal\Core\Controller\ControllerBase;
use Parsedown;
use Drupal\Core\Render\Markup;

/**
 * Class DolebasCustomPage.
 */
class DolebasCustomPage extends ControllerBase {

  public function dolebasPricing() {
    
    $md_file_name = 'pricing.md';
    $md_file_path = drupal_get_path('module', 'dolebas_default_content') . '/includes/' . $md_file_name;
    $md_file = fopen($md_file_path, "r") or die("Unable to open " . $md_file_name);
    $md_file_content = fread($md_file,filesize($md_file_path));
    $parsed_md = (new Parsedown())->text($md_file_content);
    
    return array('#markup' => $parsed_md);  
  }

  public function dolebasTerms() {
    
    $md_file_name = 'terms.md';
    $md_file_path = drupal_get_path('module', 'dolebas_default_content') . '/includes/' . $md_file_name;
    $md_file = fopen($md_file_path, "r");
    $md_file_content = fread($md_file,filesize($md_file_path));
    $parsed_md = (new Parsedown())->text($md_file_content);
    
    return array('#markup' => $parsed_md);    
  }

  public function dolebasPrivacy() {

    $md_file_name = 'privacy.md';
    $md_file_path = drupal_get_path('module', 'dolebas_default_content') . '/includes/' . $md_file_name;
    $md_file = fopen($md_file_path, "r");
    $md_file_content = fread($md_file,filesize($md_file_path));
    $parsed_md = (new Parsedown())->text($md_file_content);
    
    return array('#markup' => $parsed_md);  
  }

}
