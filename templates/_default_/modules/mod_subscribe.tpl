<script type="text/javascript" src="/includes/jquery/jquery.form.js"></script>
<script type="text/javascript" src="/modules/mod_subscribeform/js/subscribeform.js"></script>
<div id="test"></div>
<div id="module_ajax_{$module_id}" >
    <div id="module_id" data-module-id="{$module_id}"></div>
    
    <p class="intro">Хотите быть в курсе новых поступлений?<br />Подпишитесь e-mail на рассылку!</p>

    {* Форма подписки *}
    <div id="subscribeform_preloader" style="display:none;"><img src="/modules/mod_subscribeform/images/loading.gif"></div>
    <div id="subscribeform_wrap">
        {include file="mod_subscribe_form.tpl"}
    </div>

</div>