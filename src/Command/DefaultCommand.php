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
      ->setName('dolebas_default_content:default')
      ->setDescription($this->trans('commands.dolebas_default_content.default.description'));
  }

  /**
   * {@inheritdoc}
   */
  protected function execute(InputInterface $input, OutputInterface $output) {
    $io = new DrupalStyle($input, $output);

    $io->info($this->trans('commands.dolebas_default_content.default.messages.success'));
    
    // Insert code for testing purposes here
    \Drupal::service('config.factory')->getEditable('block.block.dolebas_subtheme_branding')->delete();


  }
}
