<div id="tv-input-properties-form{$tv}"></div>

{literal}
<script type="text/javascript">
    // <![CDATA[

    var params = {
        {/literal}{foreach from=$params key=k item=v name='p'}
        '{$k}': '{$v|escape:"javascript"}'{if NOT $smarty.foreach.p.last},{/if}
        {/foreach}{literal}
    };

    var oc = {
        'change':{
            fn:function(){
                Ext.getCmp('modx-panel-tv').markDirty();
            }, scope:this
        },
        'beforerender': {
            fn: function () {
                if (Ext.getCmp('inopt_buttons{/literal}{$tv}{literal}').getValue() === '') {
                    // Set the default value.
                    Ext.getCmp('inopt_buttons{/literal}{$tv}{literal}').setValue('[{"command":"undo","icon":"undo"},{"command":"bold","icon":"bold"},{"command":"underline","icon":"underline"},{"command":"italic","icon":"italic"},{"command":"forecolor","value":"063bd5","icon":"paint-brush","style":""},{"command":"justifyLeft","icon":"align-left"},{"command":"justifyCenter","icon":"align-center"},{"command":"justifyRight","icon":"align-right"}]');
                }
            }, scope: this
        }
    };

    MODx.load({
        xtype: 'panel',
        layout: 'form',
        autoHeight: true,
        cls: 'form-with-labels',
        labelAlign: 'top',
        border: false,
        items: [{
            xtype: 'textarea',
            fieldLabel: _('minirte.buttons'),
            name: 'inopt_buttons',
            hiddenName: 'inopt_buttons',
            id: 'inopt_buttons{/literal}{$tv}{literal}',
            value: params['buttons'],
            width: '98%',
            height: 200,
            listeners: oc
        },{
            xtype: MODx.expandHelp ? 'label' : 'hidden',
            forId: 'inopt_buttons{/literal}{$tv}{literal}',
            html: _('minirte.buttons_desc'),
            cls: 'desc-under'
        },{
            xtype: 'combo-boolean',
            fieldLabel: _('minirte.linebreaks'),
            name: 'inopt_linebreaks',
            hiddenName: 'inopt_linebreaks',
            id: 'inopt_linebreaks{/literal}{$tv}{literal}',
            value: (params['linebreaks'] === 1 || params['linebreaks'] === 'true'),
            labelAlign: 'left',
            width: 200,
            listeners: oc
        }],
        renderTo: 'tv-input-properties-form{/literal}{$tv}{literal}'
    });

    // ]]>
</script>
{/literal}
