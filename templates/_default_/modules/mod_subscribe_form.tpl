<form action="" method="post" name="subscribeform" id="subscribeform{$mid}" class="form-sendmail">
    <div>
        <div class="email">
            <span>Ваш e-mail:</span> <span class="regstar">*</span>
            <input type="text" name="email" class="inputbox" id="email" value="{$email}" onchange="checkEmail({$mid})" />
            <p class="novalid"></p>
        </div>
        <div class="name">
            <span>Ваше имя:</span> <span class="regstar">*</span>
            <input type="text" name="name" class="inputbox" id="name" value="{$name}" />
        </div>
    </div>
    <div style="text-align:center">
        <input type="button" onclick="sendSubscribeForm({$mid})" value="Подписаться сейчас!" class="button-blue" id="SubscribeFormButton" />
        <input type="hidden" name="sid" value="{$sid}">
        <input type="hidden" name="mid" value="{$mid}">
    </div>
</form>