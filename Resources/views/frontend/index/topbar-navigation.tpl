{extends file='parent:frontend/index/topbar-navigation.tpl'}

{block name="frontend_index_navigation_inline"}
    <div class="navigation--entry entry--translate has--drop-down">
        <img src="https://www.google.com/images/cleardot.gif" class="goog-te-gadget-icon" alt="" style="background-image: url(&quot;https://translate.googleapis.com/translate_static/img/te_ctrl3.gif&quot;); background-position: -65px 0; float: left; margin-top: 5px;">
        <div id="svenj-sw-google-translate-container" style="float: left;"></div>
    </div>

    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement('svenj-sw-google-translate-container');
        }
    </script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

    {$smarty.block.parent}
{/block}