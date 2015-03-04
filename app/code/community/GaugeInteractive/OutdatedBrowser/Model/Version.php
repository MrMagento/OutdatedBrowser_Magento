<?php
/**
 * Outdated Browser data model
 *
 * @category   GaugeInteractive
 * @package    GaugeInteractive_OutdatedBrowser
 */
class GaugeInteractive_OutdatedBrowser_Model_Version
{
  /**
   * Get version options
   * @return array An array of version options
   */
  public function toOptionArray()
  {
      $options = array(
          array('value' => 'IE11', 'label' => 'IE11'),
          array('value' => 'IE10', 'label' => 'IE10'),
          array('value' => 'IE9',  'label' => 'IE9'),
          array('value' => 'IE8',  'label' => 'IE8'),
      );

      return $options;
  }
}