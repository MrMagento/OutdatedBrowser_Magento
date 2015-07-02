<?php
/**
 * Outdated Browser data helper
 *
 * @category   GaugeInteractive
 * @package    GaugeInteractive_OutdatedBrowser
 */
class GaugeInteractive_OutdatedBrowser_Helper_Data extends Mage_Core_Helper_Abstract
{
    /**
     * Config paths for using throughout the code
     */
    const XML_PATH_ACTIVE        = 'notifications/outdatedbrowser/active';
    const XML_PATH_COLOR         = 'notifications/outdatedbrowser/color';
    const XML_PATH_BACKGROUND    = 'notifications/outdatedbrowser/background';
    const XML_PATH_LESSTHAN      = 'notifications/outdatedbrowser/lowerthan';

    /**
     * Whether Outdated Browser is active
     *
     * @param mixed $store
     * @return bool
     */
    public function isActive($store = null)
    {
        return Mage::getStoreConfigFlag(self::XML_PATH_ACTIVE, $store);
    }

    /**
     * Get text color
     *
     * @param mixed $store
     * @return string The text color
     */
    public function getColor($store = null)
    {
        return Mage::getStoreConfig(self::XML_PATH_COLOR, $store);
    }

    /**
     * Get background color
     *
     * @param mixed $store
     * @return string The background color
     */
    public function getBackground($store = null)
    {
        return Mage::getStoreConfig(self::XML_PATH_BACKGROUND, $store);
    }

    /**
     * Get minimum browser version
     *
     * @param mixed $store
     * @return string The minimum browser version
     */
    public function getVersion($store = null)
    {
        return Mage::getStoreConfig(self::XML_PATH_LESSTHAN, $store);
    }

}
