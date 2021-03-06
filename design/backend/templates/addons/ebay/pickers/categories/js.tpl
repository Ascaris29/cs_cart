{if $category_id}
    {assign var="category_data" value=$category_id|fn_ebay_get_category_data:$site_id}
    {assign var="category" value=$category_data.name|default:"`$ldelim`category`$rdelim`"}
    {assign var="show_only_name" value=true}
    {assign var="hide_delete_button" value=true}
{else}
    {assign var="category" value=$default_name|unescape:url}
{/if}
{if $multiple}
    <tr {if !$clone}id="{$holder}_{$category_id}" {/if}class="cm-js-item {if $clone} cm-clone hidden{/if}">
        {if $position_field}<td width="5%"><input type="text" name="{$input_name}[{$category_id}]" value="{math equation="a*b" a=$position b=10}" size="3" class="input-micro"{if $clone} disabled="disabled"{/if} /></td>{/if}
        <td>
           {$category}
        </td>
        <td width="5%" class="nowrap">
        {if !$view_only || $show_only_name}
            {capture name="tools_list"}
                {if !$hide_delete_button}
                    <li>{btn type="list" text=__("remove") onclick="Tygh.$.cePicker('delete_js_item', '{$holder}', '{$category_id}', 'c'); return false;"}</li>
                {/if}
            {/capture}
            <div class="hidden-tools">
                {dropdown content=$smarty.capture.tools_list}
            </div>
        {/if}
        </td>
    </tr>
{else}
    {if $view_mode != "list"}
        <span {if !$clone}id="{$holder}_{$category_id}" {/if}class="cm-js-item {if $clone} cm-clone hidden{/if}">
        {if !$first_item && $single_line}<span class="cm-comma{if $clone} hidden{/if}">,&nbsp;&nbsp;</span>{/if}

        <div class="input-append">
        <input class="cm-picker-value-description {$extra_class}" type="text" value="{$category}" {if $display_input_id}id="{$display_input_id}"{/if} size="10" name="category_name" readonly="readonly" {$extra} id="appendedInputButton">
        {if !$runtime.company_id || $runtime.controller != "companies"}
        {if $multiple}
            {assign var="_but_text" value=$but_text|default:__("add_categories")}
            {assign var="_but_role" value="add"}
            {assign var="_but_icon" value="icon-plus"}
        {else}
            {include_ext file="common/icon.tpl" class="icon-plus" assign=_but_text}
            {assign var="_but_role" value="icon"}
        {/if}
        {include file="buttons/button.tpl" but_id="opener_picker_`$data_id`" but_href="ebay.categories_picker?site_id={$site_id}&display=`$display`&company_id=`$company_id`&picker_for=`$picker_for`&extra=`$extra_var`&checkbox_name=`$checkbox_name`&root=`$default_name`&except_id=`$except_id`&data_id=`$data_id``$extra_url`"|fn_url but_text=$_but_text but_role=$_but_role but_icon=$_but_icon but_target_id="content_`$data_id`" but_meta="`$but_meta` cm-dialog-opener add-on btn"}
        {/if}
        </div>
        </span>
    {else}
        {assign var="default_category" value="`$ldelim`category`$rdelim`"}
        {assign var="default_category_id" value="`$ldelim`category_id`$rdelim`"}
        {if $first_item || !$category_id}
            <p class="cm-js-item cm-clone hidden">
                {if $hide_input != "Y"}
                    <label class="radio inline-block" for="category_rb_category_id">
                        <input id="category_rb_category_id" type="radio" name="{$radio_input_name}" value="{$default_category_id}">
                    </label>
                {/if}
                    {$default_category}
                    <a class="icon-remove-sign cm-tooltip hand hidden" onclick="Tygh.$.cePicker('delete_js_item', '{$holder}', '{$default_category_id}', 'c'); return false;" title="{__("remove")}"></a>
            </p>
        {/if}
        {if $category_id}
        <div class="cm-js-item {$extra_class}" id="{$holder}_{$category_id}" {$extra}>
            {if $hide_input != "Y"}
                <label class="radio inline-block" for="category_radio_button_{$category_id}">
                    <input id="category_radio_button_{$category_id}" {if $main_category == $category_id}checked{/if} type="radio" name="{$radio_input_name}" value="{$category_id}" />
                </label>
            {/if}
        </div>
        {/if}
    {/if}
{/if}
