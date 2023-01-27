<?php

namespace Drupal\yc_ckeditor\Plugin\CKEditorPlugin;

use Drupal\ckeditor\CKEditorPluginInterface;
use Drupal\ckeditor\CKEditorPluginButtonsInterface;
use Drupal\Component\Plugin\PluginBase;
use Drupal\editor\Entity\Editor;

/**
 * Defines the "attributes" plugin, with a CKEditor.
 *
 * @CKEditorPlugin(
 *   id = "Attributes",
 *   label = @Translation("Attributes template Plugin")
 * )
 */
class Attributes extends PluginBase implements CKEditorPluginInterface, CKEditorPluginButtonsInterface {

  /**
   * {@inheritdoc}
   */
  public function getDependencies(Editor $editor) {
    return [];
  }

  /**
   * {@inheritdoc}
   */
  public function getLibraries(Editor $editor) {
    return [];
  }

  /**
   * {@inheritdoc}
   */
  public function isInternal() {
    return FALSE;
  }

  /**
   * {@inheritdoc}
   */
  public function getFile() {
    // Provide the JS plugin path.
    $module_handler = \Drupal::service('module_handler');
    return $module_handler->getModule('ckeditor')->getPath(). '/js/plugins/attributes.js';
  }

  /**
   * {@inheritdoc}
   */
  public function getButtons() {
    $module_handler = \Drupal::service('module_handler');
    $iconImage = $module_handler->getModule('yc_ckeditor')->getPath(). '/js/plugins/images/icon.svg';

    // Return the CKEditor plugin button details.
    return [
      'External Link' => [
        'label' => t('Open in new Tab'),
        'image' => $iconImage,
      ],
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function getConfig(Editor $editor) {
    return [];
  }

}
