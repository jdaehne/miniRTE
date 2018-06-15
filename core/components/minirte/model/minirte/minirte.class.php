<?php
/**
 * miniRTE classfile
 *
 *
 * @package minirte
 * @subpackage classfile
 *
 * @author Jan Dähne <jan.daehne@quadro-system.de>
 */


/**
 * class ImagePlus
 */
class miniRTE
{
    /**
     * A reference to the modX instance
     * @var modX $modx
     */
    public $modx;

    /**
     * The namespace
     * @var string $namespace
     */
    public $namespace = 'minirte';

    /**
     * The class options
     * @var array $options
     */
    public $options = array();

    /**
     * miniRTE constructor
     *
     * @param modX $modx A reference to the modX instance.
     * @param array $options An array of options. Optional.
     */
    function __construct(modX &$modx, $options = array())
    {
        $this->modx = &$modx;
    }

    /**
     * Render supporting javascript to try and help it work with MIGX etc
     */
    public function includeScriptAssets()
    {
        $assetsUrl = $this->modx->getOption('minirte.assets_url', null, $this->modx->getOption('assets_url') . 'components/minirte/');

        $this->modx->regClientCSS($assetsUrl . 'css/minirte.min.css');
        $this->modx->regClientStartupScript($assetsUrl . 'js/minirte.min.js');
    }


}

define('minirte', true);
