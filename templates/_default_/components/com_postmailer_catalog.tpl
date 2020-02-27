{* ================================================================================ *}
{* ================ ������ ������ ���������� �������������� �������� ============== *}
{* ================================================================================ *}

{* ���������� ����������: *}
{*
%NAME% - ��� ����������,
%DAYS% - ���������� ���� ��� ��������� ��������, 
%CONFIRM% - ������ ��� ������������� ��������, 
%UNSUB% - ������ ������� �� ��������,
%SERVER_NAME% - ����� ����� 
*}

<p>������������, %NAME%!<br>
�� ���� ��� ��������, ��� � �������� �� ����� %SERVER_NAME% ��������� ����� �������:</p>
	
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
<small>���� �� �� ������ �������� ��������, �� ������ <a href=%UNSUB%>����������</a></small>