<?php

namespace Drupal\dolebas_default_content\Command;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Command\Command;
use Drupal\Console\Core\Command\Shared\CommandTrait;
use Drupal\Console\Core\Style\DrupalStyle;
use Drupal\Console\Annotations\DrupalCommand;

/**
 * Class DefaultCommand.
 *
 * @DrupalCommand (
 *     extension="dolebas_default_content",
 *     extensionType="module"
 * )
 */
class DefaultCommand extends Command {

  use CommandTrait;

  /**
   * {@inheritdoc}
   */
  protected function configure() {
    $this
      ->setName('dolebas:test')
      ->setDescription('Command for running dev tests');
  }

  /**
   * {@inheritdoc}
   */
  protected function execute(InputInterface $input, OutputInterface $output) {
    $io = new DrupalStyle($input, $output);

  // private function stripeHostedTest(array &$form, FormStateInterface $form_state) {
  //   $config = \Drupal::config('dolebas_config.config');
  //   $stripe_api_sk = $config->get('stripe_api_sk');
  //   \Stripe\Stripe::setApiKey($stripe_api_sk);
  //   $card =  array(
  //     "number" => "4242424242424242",
  //     "exp_month" => 5,
  //     "exp_year" => 2018,
  //     "cvc" => "314"
  //   );
  //   //$this->paymentService->
  //   $token = \Stripe\Token::create(array(
  //     "card" => array(
  //       "number" => "4242424242424242",
  //       "exp_month" => 5,
  //       "exp_year" => 2018,
  //       "cvc" => "314"
  //     )
  //   ));
  //   $charge = $this->paymentService->stripeCharge($form_state->getValue('amount'), $form_state->getValue('currency'), $token);
  //   //print'<pre>';print_r($token->id);exit;


//    $url_raw = 'http://develop.kbox.site/user';
//    $encoded_url = bin2hex($url_raw);
//    $decoded_url = hex2bin($encoded_url);

    // $query = \Drupal::entityQuery('node');
    // $group = $query->orConditionGroup()
    //   ->condition('type', 'dolebas_transaction')
    //   ->condition('type', 'dolebas_publisher')
    // ;
    // $query->condition($group);
    // $nids = $query->execute();
    // $nodes = \Drupal\node\Entity\Node::loadMultiple($nids);
    // foreach($nodes as $node) {
    //   $node->delete();
    // }

    // drupal_set_message(''. print_r($nids, TRUE) .'');

    // Insert code for testing purposes here
    
  // // Set default admin theme
  // \Drupal::configFactory()
  // ->getEditable('system.site')
  // ->set('page.front', '/me')   
  // ->save();    
    
      //   // Inserting the data in the url_redirect table.
      // $query = \Drupal::database();
      // $query->insert('url_redirect')->fields(array(
      //   'path' => 'myPath/*',
      //   'roles' => '{"authenticated":"authenticated"}',
      //   'users' => '',
      //   'redirect_path' => '/',
      //   'status' => '1',
      //   'message' => 'No',
      //   'check_for' => 'Role',
      // ))
      // ->execute();
    
    $myTest = 'testing';
    $io->info($myTest);
    

  }
}
