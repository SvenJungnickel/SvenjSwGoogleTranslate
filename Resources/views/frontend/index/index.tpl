{extends file='parent:frontend/index/index.tpl'}

{block name="frontend_index_header_javascript_jquery_lib" append}
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
            {if isset($defaultLanguage) && $defaultLanguage != ""}
                pageLanguage: '{$defaultLanguage}',
            {/if}
            {if isset($includedLanguages) && $includedLanguages != ""}
                includedLanguages: '{$includedLanguages}',
            {/if}
            {if isset($multilanguagePage) && $multilanguagePage == true}
                multilanguagePage: true,
            {/if}
            {if isset($sAnalyticsWebPropertyID) && $sAnalyticsWebPropertyID != ""}
                gaTrack: true,
                gaId: '{$sAnalyticsWebPropertyID}'
            {/if}
            }, 'svenj-sw-google-translate-element');
        }
    </script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
{/block}