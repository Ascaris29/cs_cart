<div class="btn-group prev-next">
    <a class="btn cm-tooltip {if !$view_tools.prev_id}disabled{/if}" {if $view_tools.prev_id}href="{"`$url``$view_tools.prev_id`"|fn_url}" title="{if $view_tools.links_label}{$view_tools.links_label}{if $view_tools.show_item_id} #{$view_tools.prev_id}{/if}{else}{__("previous")}{/if}"{/if}>{include_ext file="common/icon.tpl" class="icon-chevron-left"}</a>
    <a class="btn cm-tooltip {if !$view_tools.next_id}disabled{/if}" {if $view_tools.next_id}href="{"`$url``$view_tools.next_id`"|fn_url}" title="{if $view_tools.links_label}{$view_tools.links_label}{if $view_tools.show_item_id} #{$view_tools.next_id}{/if}{else}{__("next")}{/if}"{/if}>{include_ext file="common/icon.tpl" class="icon-chevron-right"}</a>
</div>
