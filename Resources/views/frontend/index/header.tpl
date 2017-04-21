{extends file='parent:frontend/index/header.tpl'}

{block name="frontend_index_header_javascript_tracking" prepend}
    {if isset($defaultLanguage) && $defaultLanguage != ""}
        <script type="text/javascript">
            if(window.location.hash.indexOf('#googtrans') === -1) {
                window.location.href = "#googtrans({$defaultLanguage})";
            }
        </script>
    {/if}
{/block}
