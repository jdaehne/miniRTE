<?php
/**
 * miniRTE Input Render
 *
 *
 * @package minirte
 *
 * @author Jan Dähne <jan.daehne@quadro-system.de>
 */
class minirteInputRender extends modTemplateVarInputRender
{
    /**
     * Return the template path to load
     * @return string
     */
    public function getTemplate()
    {
        $corePath = $this->modx->getOption('minirte.core_path', null, $this->modx->getOption('core_path') . 'components/minirte/');
        return $corePath . 'elements/tv/input/tpl/minirte.render.tpl';
    }

    /**
     * Process
     *
     */
    public function process($value, $params = array())
    {
        // Prepare tv config for jsonification
        $tvConfig = new stdClass();
        $buttons = json_decode($params['buttons'], true);

        // set placeholders
        $this->setPlaceholder('buttons', $buttons);
        $this->setPlaceholder('linebreaks', $params['linebreaks']);
    }

}
return 'minirteInputRender';
