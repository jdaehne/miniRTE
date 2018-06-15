<?php
/**
 * miniRTE Input Options Render
 *
 *
 * @package minirte
 * @subpackage inputoptions_render
 *
 * @author Jan Dähne <jan.daehne@quadro-system.de>
 */

/** @var \modX $modx */
$corePath = $modx->getOption('minirte.core_path', null, $modx->getOption('core_path') . 'components/minirte/');



return $modx->smarty->fetch($corePath . 'elements/tv/input/tpl/minirte.options.tpl');
