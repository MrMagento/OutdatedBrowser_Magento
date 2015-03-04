<?php
/**
 * Outdated Browser block
 *
 * @category   GaugeInteractive
 * @package    GaugeInteractive_OutdatedBrowser
 */
class GaugeInteractive_OutdatedBrowser_Block_Notification extends Mage_Core_Block_Template
{
    /**
     * Get text color
     *
     * @return string The text color
     */
    public function getColor()
    {
        return Mage::helper('outdatedbrowser')->getColor();
    }

    /**
     * Get background color
     *
     * @return string The background color
     */
    public function getBackground()
    {
        return Mage::helper('outdatedbrowser')->getBackground();
    }

    /**
     * Get minimum browser version
     *
     * @return string The  minimum browser version
     */
    public function getVersion()
    {
        return Mage::helper('outdatedbrowser')->getVersion();
    }

    /**
     * Render Outdated Browser notification
     *
     * @return string
     */
    protected function _toHtml()
    {
        if (!Mage::helper('outdatedbrowser')->isActive()) {
            return '';
        }
        return parent::_toHtml();
    }
}
