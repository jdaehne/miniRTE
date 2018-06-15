<?php
/**
 * templateVars transport file for minirte extra
 *
 * Copyright 2018 by Quadro - Jan Dähne <https://www.quadro-system.de>
 * Created on 06-15-2018
 *
 * @package minirte
 * @subpackage build
 */

if (! function_exists('stripPhpTags')) {
    function stripPhpTags($filename) {
        $o = file_get_contents($filename);
        $o = str_replace('<' . '?' . 'php', '', $o);
        $o = str_replace('?>', '', $o);
        $o = trim($o);
        return $o;
    }
}
/* @var $modx modX */
/* @var $sources array */
/* @var xPDOObject[] $templateVars */


$templateVars = array();

$templateVars[1] = $modx->newObject('modTemplateVar');
$templateVars[1]->fromArray(array (
  'id' => 1,
  'property_preprocess' => false,
  'type' => 'minirte',
  'name' => 'minirte',
  'caption' => 'miniRTE',
  'description' => '',
  'elements' => '',
  'rank' => 0,
  'display' => 'default',
  'default_text' => '',
  'properties' => 
  array (
  ),
  'input_properties' => 
  array (
    'buttons' => '[{"command":"undo","icon":"undo"},{"command":"bold","icon":"bold"},{"command":"underline","icon":"underline"},{"command":"italic","icon":"italic"},{"command":"forecolor","value":"063bd5","icon":"paint-brush","style":""},{"command":"justifyLeft","icon":"align-left"},{"command":"justifyCenter","icon":"align-center"},{"command":"justifyRight","icon":"align-right"}]',
    'linebreaks' => 'true',
  ),
  'output_properties' => 
  array (
  ),
), '', true, true);
$templateVars[2] = $modx->newObject('modTemplateVar');
$templateVars[2]->fromArray(array (
  'id' => 2,
  'property_preprocess' => false,
  'type' => 'migx',
  'name' => 'minirteMIGX',
  'caption' => 'miniRTE MIGX',
  'description' => '',
  'elements' => '',
  'rank' => 30,
  'display' => 'default',
  'default_text' => '',
  'properties' => 
  array (
  ),
  'input_properties' => 
  array (
    'configs' => '',
    'formtabs' => '[
{"caption":"Info", "fields": [
    {"field":"title","caption":"Titel","inputTV":"minirte"}
]}
]',
    'columns' => '[
{"header": "Title", "width": "160", "sortable": "true", "dataIndex": "title"}
]',
    'btntext' => '',
    'previewurl' => '',
    'jsonvarkey' => '',
    'autoResourceFolders' => 'false',
  ),
  'output_properties' => 
  array (
  ),
), '', true, true);
return $templateVars;
