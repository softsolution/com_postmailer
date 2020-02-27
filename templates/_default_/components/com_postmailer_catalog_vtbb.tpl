{* ================================================================================ *}
{* ================ Ўаблон письма обновлений универсального каталога ============== *}
{* ================================================================================ *}

{* ƒќѕ”—“»ѕџ≈ ѕ≈–≈ћ≈ЌЌџ≈: *}
{*
%NAME% - им€ подписчика,
%DAYS% - количество дней дл€ активации подписки, 
%CONFIRM% - ссылка дл€ подтверждени€ рассылки, 
%UNSUB% - ссылка отписки от рассылки,
%SERVER_NAME% - адрес сайта 
*}
<table cellspacing="0" cellpadding="0" style="width: 100%;">
    <tbody>
        <tr>
            <td align="center">
                <table cellspacing="0" cellpadding="0" style="background-color: #ffffff; border: 3px solid #36BEF2; width: 700px; text-align: left;">
                    <tbody>
                        <tr>
                            <td width="400" height="70" bgcolor="#36BEF2">
                                <table cellspacing="0" cellpadding="0" style="padding-left: 27px;">
                                    <tbody>
                                        <tr>
                                            <td width="400" height="50"><a href="http://www.vtbbaikal.ru" target="_blank" style="font-family: 'Calibri','Trebuchet MS',Arial,sans-serif; font-size: 32px; font-weight: bold;text-decoration: none;color:#fff;line-height:1;" title="¬неш“оргЅизнесЅайкал">¬неш“оргЅизнесЅайкал</a>
                                                <span><a href="http://www.vtbbaikal.ru/catalog/1013" target="_blank" style="color: #ffffff; font-size: 14px; text-decoration: none; font-family: 'Calibri','Trebuchet MS',Arial,sans-serif;">спецтехника б/у,</a> <a href="http://www.vtbbaikal.ru/catalog/1001" target="_blank" style="color: #ffffff; font-size: 14px; text-decoration: none; font-family: 'Calibri','Trebuchet MS',Arial,sans-serif;">оборудование б/у,</a> <a href="http://www.vtbbaikal.ru/catalog/2" target="_blank" style="color: #ffffff; font-size: 14px; text-decoration: none; font-family: 'Calibri','Trebuchet MS',Arial,sans-serif;">запчасти к спецтехнике</a></span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                            <td bgcolor="#36BEF2" align="right"><a href="http://vtbbaikal.ru" target="_blank" title="www.vtbbaikal.ru" style="color: #ffffff; margin-right: 27px; font-size: 12px; font-weight: bold; text-decoration: underline; font-family: Tahoma, sans-serif;">www.vtbbaikal.ru</a></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <table cellspacing="0" cellpadding="0" style="width: 100%;">
                                    <tbody>
                                        <tr>
                                            <td style="padding: 21px 26px 0 26px;line-height: 1.3;">
                                                <p style="color: #000000; font-size: 14px; margin-bottom: 10px; font-family: Tahoma, sans-serif;">«дравствуйте,<strong>&nbsp; %NAME% </strong>!</p>
                                                <p style="color: #000000; font-size: 12px; margin-bottom: 21px; font-family: Tahoma, sans-serif;line-height:1.5;">ћы рады вам сообщить, что в каталоге на сайте ¬неш“оргЅизнесЅайкал по€вились новые позиции<br> <span style="color: #36BEF2;"><strong>∆дем вас в гости!</strong></span></p>
                                                <p style="background-color: #36BEF2; width: 100%; height: 1px;"></p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <br />
                                
                            {foreach key=tid item=item from=$items name=foo}
                                <table cellspacing="0" cellpadding="0" style="margin: 0 26px 20px 26px;">
                                    <tr><td width="110" valign="top">
                                            <a href="http://{$server_name}/catalog/item{$item.id}.html" target=_blank >
                                                {if $item.imageurl}
                                                    <img alt="{$item.title|escape:'html'}" src="http://{$server_name}/images/catalog/small/{$item.imageurl}.jpg" border="0" width="100" />
                                                {else}
                                                    <img alt="{$item.title|escape:'html'}" src="http://{$server_name}/images/catalog/small/nopic.jpg" border="0" />								
                                                {/if}
                                            </a>
                                        <td valign="top">
                                            <a href="http://{$server_name}/catalog/item{$item.id}.html" target=_blank style="color: #36BEF2; font-size: 16px; line-height: 20px; font-family: Tahoma, sans-serif;">{$item.title}</a><br />	
                                            <p style="color: #000000; font-size: 12px; line-height: 20px; font-family: Tahoma, sans-serif;">{$item.meta_desc}</p>
                                        </td>
                                    </tr>						
                                </table>
                                <table cellspacing="0" cellpadding="0" style="padding-bottom: 20px; width: 100%;">
                                    <tbody>
                                        <tr>
                                            <td width="302" style="padding: 0 26px;">
                                                <p style="background-color: #a8cde1; width: 100%; height: 1px;"></p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            {/foreach}

                                <p style="border: 1px solid #36BEF2; background-color: #f5fafc; color: #0b7bb5; padding: 20px 30px; margin: 0 26px 40px 26px; text-align: center; font-size: 12px; line-height: 20px;"><a href="http://www.vtbbaikal.ru" target="_blank" style="color: #36BEF2; font-size: 24px; font-weight: bold; text-decoration: underline; font-family: Tahoma, sans-serif;" title="www.vtbbaikal.ru">www.vtbbaikal.ru</a></p>
                                <table cellspacing="0" cellpadding="0" style="width: 100%;">
                                    <tbody>
                                        <tr>
                                            <td width="100%" style="padding: 0 0 21px 26px;">
                                                <p align="center" style="color: #000000; font-size: 12px; line-height: 20px; font-family: Tahoma, sans-serif;">— уважением и наилучшими пожелани€ми, команда сайта&nbsp;Ђ¬неш“оргЅизнесЅайкалї</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table cellspacing="0" cellpadding="0" style="margin-bottom: 20px; width: 100%;">
                                    <tbody>
                                        <tr>
                                            <td style="padding: 0 26px 0 26px;">
                                                <table cellspacing="0" cellpadding="0" style="width: 100%;">
                                                    <tbody>
                                                        <tr>
                                                            <td width="640" height="3" background="http://vtbb.me/images/mail/dashed_red_waywe_sep.png"></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 21px 26px 0 26px;">
                                                <p align="center" style="color: #000000; font-size: 12px; line-height: 10px; font-weight: bold; font-family: Tahoma, sans-serif;"><span style="color: #da2929;">ѕожалуйста, Ќ≈ отвечайте на это письмо!</span></p>
                                                <p align="center" style="color: #000000; font-size: 12px; line-height: 10px; font-family: Tahoma, sans-serif;">ќтветы на него автоматически удал€ютс€ почтовым сервером и Ќ≈ поступают в администрацию сайта.</p>
                                                <p align="center" style="color: #000000; font-size: 10px; line-height: 10px; font-family: Tahoma, sans-serif;">≈сли ¬ы не хотите получать рассылку, вы можете <a target="_blank" href=%UNSUB%>ќтписатьс€</a></p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
    </tbody>
</table>