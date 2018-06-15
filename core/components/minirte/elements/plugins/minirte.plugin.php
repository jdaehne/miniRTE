<?php
/**
 * miniRTE runtime hooks
 * Registers custom TV input & output types and includes javascripts on document
 * edit pages so that the TV can be used from within other extras (i.e. MIGX,
 * Collections)
 *
 *
 * @package minirte
 * @subpackage plugin
 *
 * @author Jan Dähne <jan.daehne@quadro-system.de>
 *
 * @event OnTVInputRenderList
 * @event OnTVOutputRenderList
 * @event OnTVInputPropertiesList
 * @event OnTVOutputRenderPropertiesList
 * @event OnDocFormPrerender
 * @event OnManagerPageBeforeRender
 *
 * @var modX $modx
 */
 
$corePath = $modx->getOption('minirte.core_path', null, $modx->getOption('core_path') . 'components/minirte/');
$minirte = $modx->getService('minirte', 'miniRTE', $corePath . 'model/minirte/', array(
    'core_path' => $corePath
));
 
$corePath = $modx->getOption('core_path',null,MODX_CORE_PATH).'components/minirte/';
switch ($modx->event->name) {
    case 'OnTVInputRenderList':
        $modx->event->output($corePath.'elements/tv/input/');
        break;
    case 'OnTVOutputRenderList':
        $modx->event->output($corePath.'elements/tv/output/');
        break;
    case 'OnTVInputPropertiesList':
        $modx->event->output($corePath.'elements/tv/input/options/');
        break;
    case 'OnTVOutputRenderPropertiesList':
        $modx->event->output($corePath.'elements/tv/output/options/');
        break;
    case 'OnManagerPageBeforeRender':
        $modx->controller->addLexiconTopic('minirte:default');
        $minirte->includeScriptAssets();
        break;
}