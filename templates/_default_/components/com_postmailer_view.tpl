<h1 class="con_heading">{$page_title}</h1>
<div class=clear></div>

<div id="mails_body">

{if $is_mails}
    <table class="list_greetings"><tbody>
    {foreach key=tid item=mail from=$mails name=foo}
        <tr id="mt_item" {if $smarty.foreach.foo.index % 2}class="bg_light"{else}class="bg_dark"{/if}>
            <td id="mail_text">
                <a title="{$LANG.EDIT}" href="/postmailer/read{$mail.id}.html">{*$mail.title*}Почтовая рассылка №{$mail.id}</a>
                <div class="mail_date">{$mail.pubdate}</div>
                {*<div class="mail_mess">{$mail.message}</div>*}
            </td>
        </tr>
    {/foreach}
    </tbody></table>
    <div class=clear></div>
    {$pagebar}
{else}
    <p>Нет почтовых рассылок</p>
{/if}
</div>