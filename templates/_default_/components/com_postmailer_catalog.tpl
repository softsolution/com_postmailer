{* ================================================================================ *}
{* ================ Шаблон письма обновлений универсального каталога ============== *}
{* ================================================================================ *}

{* ДОПУСТИПЫЕ ПЕРЕМЕННЫЕ: *}
{*
%NAME% - имя подписчика,
%DAYS% - количество дней для активации подписки, 
%CONFIRM% - ссылка для подтверждения рассылки, 
%UNSUB% - ссылка отписки от рассылки,
%SERVER_NAME% - адрес сайта 
*}

<p>Здравствуйте, %NAME%!<br>
Мы рады вам сообщить, что в каталоге на сайте %SERVER_NAME% появились новые позиции:</p>
	
{foreach key=tid item=item from=$items name=foo}
    <table border="0" width="100%">
        <tr><td width="110" valign="top">
                <a href="http://{$server_name}/catalog/item{$item.id}.html">
                    {if $item.imageurl}
                        <img alt="{$item.title|escape:'html'}" src="http://{$server_name}/images/catalog/small/{$item.imageurl}.jpg" border="0" width="100" />
                    {else}
                        <img alt="{$item.title|escape:'html'}" src="http://{$server_name}/images/catalog/small/nopic.jpg" border="0" />								
                    {/if}
                </a>
            <td valign="top">
                <a href="http://{$server_name}/catalog/item{$item.id}.html">{$item.title}</a><br />	
                {$item.meta_desc}
            </td>
        </tr>						
    </table>
{/foreach}
<br>
<hr>
<small>Если Вы не хотите получать рассылку, вы можете <a href=%UNSUB%>Отписаться</a></small>