<ul class="minirte__buttons">

    {foreach from=$buttons item=button}
        <li><a href="#" onclick="formatText(event, '{$button.command}', '{$button.value}')" class="icon icon-{$button.icon}" style="{$button.style}"></a></li>
    {/foreach}

</ul>

<!-- events to suport: blur change click contextmenu copy cut dblclick keydown keypress keyup paste resize select textinput unload -->
<div id="minirte-editor-{$tv->id}" class="minirte__editor x-form-textarea x-form-field" contenteditable onblur="getCode('{$tv->id}')" onkeyup="getCode('{$tv->id}')" onpaste="formatPaste(event)" {if $linebreaks != true}onkeydown="checkLineBreaks(event)"{/if}>
    {$tv->value}
</div>

<textarea id="minirte-code-{$tv->id}" class="minirte__code" name="tv{$tv->id}">{$tv->value}</textarea>
