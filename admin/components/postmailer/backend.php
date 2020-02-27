<?php if(!defined('VALID_CMS_ADMIN')) { die('ACCESS DENIED'); }
/* **************************************************************************** */
/*                       soft-solution.ru team                                  */
/*                      Бэкенд компонента POSTMAILER                            */
/* **************************************************************************** */

    cpAddPathway('Почтовая рассылка', '?view=components&do=config&id='.(int)$_REQUEST['id']);
    echo '<h3>Почтовая рассылка</h3>';
    if (isset($_REQUEST['opt'])) { $opt = $_REQUEST['opt']; } else { $opt = 'list_items'; }

/* ==================================================================================================== */
/* ============================= Меню компонента ====================================================== */
/* ==================================================================================================== */
    
    $toolmenu = array();
    if($opt != 'config'){
        
            $toolmenu[1]['icon'] = 'liststuff.gif';
            $toolmenu[1]['title'] = 'Все рассылки';
            $toolmenu[1]['link'] = '?view=components&do=config&id='.(int)$_REQUEST['id'].'&opt=list_items';

            $toolmenu[2]['icon'] = 'newstuff.gif';
            $toolmenu[2]['title'] = 'Новая рассылка';
            $toolmenu[2]['link'] = '?view=components&do=config&id='.(int)$_REQUEST['id'].'&opt=add_item';

        if($opt == 'list_items' || $opt == 'show_item' || $opt == 'hide_item') {
            $toolmenu[3]['icon'] = 'edit.gif';
            $toolmenu[3]['title'] = 'Редактировать выбранные';
            $toolmenu[3]['link'] = "javascript:checkSel('?view=components&do=config&id=".(int)$_REQUEST['id']."&opt=edit_item&multiple=1');";

            $toolmenu[4]['icon'] = 'show.gif';
            $toolmenu[4]['title'] = 'Публиковать выбранные';
            $toolmenu[4]['link'] = "javascript:checkSel('?view=components&do=config&id=".(int)$_REQUEST['id']."&opt=show_item&multiple=1');";

            $toolmenu[5]['icon'] = 'hide.gif';
            $toolmenu[5]['title'] = 'Скрыть выбранные';
            $toolmenu[5]['link'] = "javascript:checkSel('?view=components&do=config&id=".(int)$_REQUEST['id']."&opt=hide_item&multiple=1');";

            
            $toolmenu[6]['icon'] = 'autoorder.gif';
            $toolmenu[6]['title'] = 'Упорядочить писма';
            $toolmenu[6]['link'] = "?view=components&do=config&id=".(int)$_REQUEST['id']."&opt=autoorder";

            $toolmenu[7]['icon'] = 'reorder.gif';
            $toolmenu[7]['title'] = 'Сохранить порядок писем';
            $toolmenu[7]['link'] = "javascript:checkSel('?view=components&do=config&id=".(int)$_REQUEST['id']."&opt=saveorder');";
            
            $toolmenu[8]['icon'] = 'mail-trash.png';
            $toolmenu[8]['title'] = 'Удалить выбранные';
            $toolmenu[8]['link'] = "javascript:checkSel('?view=components&do=config&id=".(int)$_REQUEST['id']."&opt=delete_item&multiple=1');";
        }
        
            $toolmenu[9]['icon'] = 'usergroup.gif';
            $toolmenu[9]['title'] = 'Подписчики';
            $toolmenu[9]['link'] = '?view=components&do=config&id='.(int)$_REQUEST['id'].'&opt=list_users';
            
            $toolmenu[10]['icon'] = 'useradd.gif';
            $toolmenu[10]['title'] = 'Добавить подписчика';
            $toolmenu[10]['link'] = '?view=components&do=config&id='.(int)$_REQUEST['id'].'&opt=add_user';

            $toolmenu[11]['icon'] = 'folders.gif';
            $toolmenu[11]['title'] = 'Категории подписчиков';
            $toolmenu[11]['link'] = '?view=components&do=config&id='.(int)$_REQUEST['id'].'&opt=list_cats';

            $toolmenu[12]['icon'] = 'newfolder.gif';
            $toolmenu[12]['title'] = 'Добавить категорию подписчиков';
            $toolmenu[12]['link'] = '?view=components&do=config&id='.(int)$_REQUEST['id'].'&opt=add_cat';
            
        if($opt == 'list_users' || $opt == 'show_user' || $opt == 'hide_user') {
            
            $toolmenu[13]['icon'] = 'edit.gif';
            $toolmenu[13]['title'] = 'Редактировать выбранные';
            $toolmenu[13]['link'] = "javascript:checkSel('?view=components&do=config&id=".(int)$_REQUEST['id']."&opt=edit_user&multiple=1');";

            $toolmenu[14]['icon'] = 'show.gif';
            $toolmenu[14]['title'] = 'Публиковать выбранные';
            $toolmenu[14]['link'] = "javascript:checkSel('?view=components&do=config&id=".(int)$_REQUEST['id']."&opt=show_user&multiple=1');";

            $toolmenu[15]['icon'] = 'hide.gif';
            $toolmenu[15]['title'] = 'Скрыть выбранные';
            $toolmenu[15]['link'] = "javascript:checkSel('?view=components&do=config&id=".(int)$_REQUEST['id']."&opt=hide_user&multiple=1');";

            $toolmenu[16]['icon'] = 'delete.gif';
            $toolmenu[16]['title'] = 'Удалить выбранные';
            $toolmenu[16]['link'] = "javascript:checkSel('?view=components&do=config&id=".(int)$_REQUEST['id']."&opt=delete_user&multiple=1');";
            
        }
            
            $toolmenu[17]['icon'] = 'group_go.png';
            $toolmenu[17]['title'] = 'Экспорт подписчиков';
            $toolmenu[17]['link'] = '?view=components&do=config&id='.(int)$_REQUEST['id'].'&opt=users_export';
        
            $toolmenu[18]['icon'] = 'users_import.png';
            $toolmenu[18]['title'] = 'Импорт подписчиков';
            $toolmenu[18]['link'] = '?view=components&do=config&id='.(int)$_REQUEST['id'].'&opt=users_import';
            
            $toolmenu[19]['icon'] = 'chart_bar.png';
            $toolmenu[19]['title'] = 'Статистика';
            $toolmenu[19]['link'] = '?view=components&do=config&id='.(int)$_REQUEST['id'].'&opt=stat';
            
            $toolmenu[20]['icon'] = 'control_play_blue.png';
            $toolmenu[20]['title'] = 'Управление крон-файлами';
            $toolmenu[20]['link'] = '?view=components&do=config&id='.(int)$_REQUEST['id'].'&opt=cron';
        
            $toolmenu[21]['icon'] = 'config.gif';
            $toolmenu[21]['title'] = 'Настройки';
            $toolmenu[21]['link'] = '?view=components&do=config&id='.(int)$_REQUEST['id'].'&opt=config';
            
    }
    
    if($opt == 'config'){
            $toolmenu[22]['icon'] = 'save.gif';
            $toolmenu[22]['title'] = 'Сохранить';
            $toolmenu[22]['link'] = 'javascript:document.optform.submit();';
            
            $toolmenu[23]['icon'] = 'cancel.gif';
            $toolmenu[23]['title'] = 'Отмена';
            $toolmenu[23]['link'] = 'javascript:history.go(-1);';
    }

	cpToolMenu($toolmenu);

    //LOAD CURRENT CONFIG
    $cfg = $inCore->loadComponentConfig('postmailer');

    if(!isset($cfg['admin_email'])) { $cfg['admin_email'] = 'admin@'.$_SERVER['SERVER_NAME']; }
    if(!isset($cfg['from_mail'])) { $cfg['from_mail'] = $_SERVER['SERVER_NAME']; }
    if(empty($cfg['subjecttextconfirm'])) { $cfg['subjecttextconfirm'] = 'Подписка на рассылку'; }
    
    if(empty($cfg['textconfirmation'])) {
        $textconfirmation_path   = PATH.'/components/postmailer/text/textconfirmation.txt';
        $textconfirmation        = file_get_contents($textconfirmation_path);
        $cfg['textconfirmation'] = $textconfirmation;
    }
    
    if(empty($cfg['unsublink'])) { $cfg['unsublink'] = 'Отписаться от рассылки: <a href=%UNSUB%>%UNSUB%</a>'; }
    if(!isset($cfg['db_charset'])) { $cfg['db_charset'] = 'cp1251'; }
    if(!isset($cfg['log'])) { $cfg['log'] = 1; }
    
    if(!isset($cfg['unsubscribe'])) { $cfg['unsubscribe'] = 1; }
    if(!isset($cfg['ShowAdmin'])) { $cfg['ShowAdmin'] = 1; }
    if(!isset($cfg['interval_type'])) { $cfg['interval_type'] = 'no'; }
    if(!isset($cfg['count_interval'])) { $cfg['count_interval'] = 1; }
    if(!isset($cfg['many_send'])) { $cfg['many_send'] = 1; }
    if(!isset($cfg['limit_number'])) { $cfg['limit_number'] = 100; }
    if(!isset($cfg['send_limit'])) { $cfg['send_limit'] = 1; }
    if(!isset($cfg['day'])) { $cfg['day'] = 7; }
    if(!isset($cfg['del'])) { $cfg['del'] = 1; }
    if(!isset($cfg['codirovka'])) { $cfg['codirovka'] = 1; }
    if(!isset($cfg['ContentType'])) { $cfg['ContentType'] = 1; }
    if(!isset($cfg['send_server'])) { $cfg['send_server'] = 1; }
    if(!isset($cfg['EOL'])) { $cfg['EOL'] = 1; }

    if(!isset($cfg['smtp_host'])) { $cfg['smtp_host'] = 'smtp.mail.ru'; }
    if(!isset($cfg['smtp_port'])) { $cfg['smtp_port'] = 25; }
    if(!isset($cfg['smtp_aut'])) { $cfg['smtp_aut'] = 1; }
    
    //автописьма
    if(!isset($cfg['auto_article'])) { $cfg['auto_article'] = 0; }
    if(!isset($cfg['auto_blog'])) { $cfg['auto_blog'] = 0; }
    if(!isset($cfg['auto_uc'])) { $cfg['auto_uc'] = 0; }
    if(!isset($cfg['uc_cat_id'])) { $cfg['uc_cat_id'] = 0; }
    if(!isset($cfg['target_uc_cat_id'])) { $cfg['target_uc_cat_id'] = 0; }
    
    $inCore->loadModel('postmailer');
    $model = new cms_model_postmailer();

/* ==================================================================================================== */
/* ============================= Настройки компонента ================================================= */
/* ==================================================================================================== */
	if($opt=='saveconfig'){
		$cfg = array();

                //Общие настройки
                $cfg['admin_email']          = $inCore->request('admin_email', 'str');
		$cfg['from_mail']            = $inCore->request('from_mail', 'str', '');
                $cfg['subjecttextconfirm']   = $inCore->request('subjecttextconfirm', 'str', 'Подписка на рассылку');
		$cfg['textconfirmation']     = $inCore->request('textconfirmation', 'html', '');
                $cfg['unsublink']            = $inCore->request('unsublink', 'html', '');
                $cfg['db_charset']           = $inCore->request('db_charset', 'str', 'cp1251');
                $cfg['log']                  = $inCore->request('log', 'int');
                
                //Параметры рассылки
                $cfg['unsubscribe']          = $inCore->request('unsubscribe', 'int');
                $cfg['ShowAdmin']            = $inCore->request('ShowAdmin', 'int');
                $cfg['reply']                = $inCore->request('reply', 'int');
                $cfg['interval_type']        = $inCore->request('interval_type', 'str', 'no');
                $cfg['count_interval']       = $inCore->request('count_interval', 'int', 1);
                $cfg['many_send']            = $inCore->request('many_send', 'int');
                $cfg['limit_number']         = $inCore->request('limit_number', 'int', 100);
                $cfg['send_limit']           = $inCore->request('send_limit', 'int');
                $cfg['day']                  = $inCore->request('day', 'int', 7);
                $cfg['del']                  = $inCore->request('del', 'int');
                $cfg['codirovka']            = $inCore->request('codirovka', 'int', 1);
                $cfg['ContentType']          = $inCore->request('ContentType', 'int', 1);
                $cfg['send_server']          = $inCore->request('send_server', 'int', 1);
                $cfg['EOL']                  = $inCore->request('EOL', 'int', 1);
                
                //SMTP                
                $cfg['smtp_host']            = $inCore->request('smtp_host', 'str', '');
                $cfg['smtp_username']        = $inCore->request('smtp_username', 'str', '');
                $cfg['smtp_password']        = $inCore->request('smtp_password', 'str', '');
                $cfg['smtp_port']            = $inCore->request('smtp_port', 'int', 25);
                $cfg['smtp_aut']             = $inCore->request('smtp_aut', 'int', 1);
                
                //автописьма
                $cfg['auto_article']         = $inCore->request('auto_article', 'int', 0);
                $cfg['auto_blog']            = $inCore->request('auto_blog', 'int', 0);
                $cfg['auto_uc']              = $inCore->request('auto_uc', 'int', 0);
                $cfg['uc_cat_id']            = $inCore->request('uc_cat_id', 'int', 0);
                $cfg['target_uc_cat_id']     = $inCore->request('target_uc_cat_id', 'int', 0);
                $cfg['auto_title_uc']        = $inCore->request('auto_title_uc', 'str', '');

                $inCore->saveComponentConfig('postmailer', $cfg);
		$msg = 'Настройки сохранены!';
		$opt = 'config';

	if (@$msg) { echo '<p class="success">'.$msg.'</p>'; }
}

/* ==================================================================================================== */
/* ==================================================================================================== */

    if ($opt=='config') {

        cpAddPathway('Настройки', '?view=components&do=config&id='.(int)$_REQUEST['id'].'&opt=config');
        $GLOBALS['cp_page_head'][] = '<link href="/includes/jquery/tabs/tabs.css" rel="stylesheet" type="text/css" />';
        $GLOBALS['cp_page_head'][] = '<script type="text/javascript" src="/includes/jquery/tabs/jquery.ui.min.js"></script>';
    ?>

        <form action="index.php?view=components&do=config&id=<?php echo (int) $_REQUEST['id']; ?>&opt=config" method="post" name="optform" target="_self">

    <div id="config_tabs" style="margin-top:12px;">

        <ul id="tabs">
            <li><a href="#basic"><span>Общие настройки</span></a></li>
            <li><a href="#post"><span>Параметры рассылки</span></a></li>
            <li><a href="#smtp"><span>SMTP</span></a></li>
            <li><a href="#automail"><span>Автописьма</span></a></li>
        </ul>
        
        <div id="basic">
        <table width="620" border="0" cellpadding="10" cellspacing="0" class="proptable">
            <tr>
                <td>
                    <strong>E-mail администратора:</strong><br />
                </td>
                <td valign="top">
                    <input type="text" style="width:98%" value="<?php echo @$cfg['admin_email']; ?>" name="admin_email">
                </td>
            </tr>
            <tr>
                <td>
                    <strong>Ваше имя в исходящих письмах (from):</strong><br />
                </td>
                <td valign="top">
                    <input type="text" style="width:98%" value="<?php echo @$cfg['from_mail']; ?>" name="from_mail">
                </td>
            </tr>
            <tr>
                <td>
                    <strong>Тема подтверждения рассылки:</strong><br />
                </td>
                <td valign="top">
                    <input type="text" style="width:98%" value="<?php echo @$cfg['subjecttextconfirm']; ?>" name="subjecttextconfirm">
                </td>
            </tr>
            <tr>
                <td valign="top">
                    <strong>Текст подтверждения рассылки:</strong><br />
                    <span class="hinttext">
                        %NAME% - имя подписчика, %DAYS% - количество дней для активации подписки, %CONFIRM% - ссылка для подтверждения рассылки, %UNSUB% - ссылка для удаления рассылки, %SERVER_NAME% - адрес сайта
                    </span>
                </td>
                <td valign="top">
                    <textarea rows="5" name="textconfirmation" cols="25"><?php echo @$cfg['textconfirmation']; ?></textarea>
                </td>
            </tr>
            <tr>
                <td valign="top">
                    <strong>Текст ссылки отписки от рассылки:</strong><br />
                    <span class="hinttext">
                    %UNSUB% - ссылка отписки
                    </span>
                </td>
                <td valign="top">
                    <textarea rows="3" name="unsublink" cols="25"><?php echo @$cfg['unsublink']; ?></textarea>
                </td>
            </tr>
            <tr>
                <td width="250">
                    <strong>Кодировка базы данных:</strong>
                </td>
                <td>
                    <select name="db_charset">
                        <option value="cp1251" <?php if($cfg['db_charset'] == "cp1251") echo "selected"; ?>>windows-1251</option>
                        <option value="utf8" <?php if($cfg['db_charset'] == "utf8") echo "selected"; ?>>utf-8</option>
                        <option value="koi8r" <?php if($cfg['db_charset'] == "koi8r") echo "selected"; ?>>koi8-r</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td width="250">
                    <strong>Вести лог рассылок:</strong>
                </td>
                <td>
                    <input type=checkbox name="log" value="1" <?php if($cfg['log']) echo "checked"; ?>>
                </td>
            </tr>
        </table>
        </div>
        <div id="post">
            <table width="620" cellspacing="5" border="0" class="proptable">
                    <tbody>
                        <tr>
                            <td width="250">
                                <strong>Показывать ссылку отписки от рассылки:</strong>
                            </td>
                            <td>
                                <input type=checkbox name="unsubscribe" value="1" <?php if($cfg['unsubscribe']) echo "checked"; ?>>
                            </td>
                        </tr>
                        <tr>
                            <td width="250">
                                <strong>Показывать e-mail администратора  в отправляемых письмах:</strong>
                            </td>
                            <td>
                                <input type=checkbox name="ShowAdmin" value="1" <?php if($cfg['ShowAdmin']) echo "checked"; ?>>
                            </td>
                        </tr>
                        <tr>
                            <td width="250">
                                <strong>Запрашивать уведомления о прочтении писем:</strong>
                            </td>
                            <td>
                                <input type=checkbox name="reply" value="1" <?php if($cfg['reply']) echo "checked"; ?>>
                            </td>
                        </tr>
                        <tr>
                            <td width="250">
                                <strong>Интервал между рассылками одному пользователю</strong><br>
                                <span class="hinttext">Письмо пользователю будет отправляться не чаще этого времени, рекомендуется 24 часа.</span>
                            </td>
                            <td>
                                <input type="text" name="count_interval" size="3" maxlength="4" value="<?php echo @$cfg['count_interval']; ?>">&nbsp;
                                <select name="interval_type">
                                    <option value="no" <?php if($cfg['interval_type'] == "no") echo "selected"; ?>>нет</option>
                                    <option value="m" <?php if($cfg['interval_type'] == "m") echo "selected"; ?>>минут</option>
                                    <option value="h" <?php if($cfg['interval_type'] == "h") echo "selected"; ?>>часов</option>
                                    <option value="d" <?php if($cfg['interval_type'] == "d") echo "selected"; ?>>дней</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td width="250">
                                <strong>Отправлять одно и тоже письмо многократно:</strong>
                            </td>
                            <td>
                                <input type=checkbox name="many_send" value="1" <?php if($cfg['many_send']) echo "checked"; ?>>
                            </td>
                        </tr>
                        <tr>
                            <td width="250">
                                <strong>Отправлять не более писем за раз:</strong>
                            </td>
                            <td>
                                <input size="3" maxlength="4" type="text" value="<?php echo @$cfg['limit_number']; ?>" name="limit_number">&nbsp;
                                <input type="checkbox" name="send_limit" value="1" <?php if($cfg['send_limit']) echo "checked"; ?> name="send_limit">
                            </td>
                        </tr>
                        <tr>
                            <td width="250">
                                <strong>Удалять подписчика, если он не активировался в течении:</strong>
                            </td>
                            <td>
                                <input size="3" maxlength="4" type=text name="day" value="<?php echo @$cfg['day']; ?>">&nbsp;&nbsp;дн.
                                <input type="checkbox" name="del" <?php if($cfg['del']) echo "checked"; ?>
                            </td>
                        </tr>
                        <tr>
                            <td width="250">
                                <strong>Кодировка исходящих писем:</strong>
                            </td>
                            <td>
                                <select name="codirovka">
                                    <option value="1" <?php if($cfg['codirovka'] == "1") echo "selected"; ?>>windows-1251</option>
                                    <option value="2" <?php if($cfg['codirovka'] == "2") echo "selected"; ?>>koi8-r</option>
                                    <option value="3" <?php if($cfg['codirovka'] == "3") echo "selected"; ?>>utf-8</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td width="250">
                                <strong>Формат исходящих писем:</strong>
                            </td>
                            <td>
                                <select name="ContentType">
                                    <option value="1" <?php if($cfg['ContentType'] == "1") echo "selected"; ?>>plain</option>
                                    <option value="2" <?php if($cfg['ContentType'] == "2") echo "selected"; ?>>html</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td width="250">
                                <strong>Рассылать письма через:</strong>
                            </td>
                            <td>
                                <input type="radio" value="1" name="send_server" <?php if($cfg['send_server'] == "1" OR empty($cfg['send_server'])) echo "checked"; ?> >внутренний сервер&nbsp;
                                <input type="radio" value="2" name="send_server" <?php if($cfg['send_server'] == "2") echo "checked"; ?> >внешний (smtp сервер)
                            </td>
                        </tr>
                        <tr>
                            <td width="250">
                                <strong>Разделитель:</strong>
                            </td>
                            <td>
                                <select name="EOL">
                                    <option value="1" <?php if ($cfg['EOL'] == "1") echo "selected"; ?>>(Windows) \r\n</option>
                                    <option value="2" <?php if ($cfg['EOL'] == "2") echo "selected"; ?>>(UNIX) \n</option>
                                </select> 
                            </td>
                        </tr>
                    </tbody>
            </table>
       </div>
        <div id="smtp">
            <table width="620" cellspacing="5" border="0" class="proptable">
                    <tbody>
                        <tr>
                            <td width="250">
                                <strong>smtp сервер:</strong>
                            </td>
                            <td>
                                <input type="text" style="width:98%" value="<?php echo @$cfg['smtp_host']; ?>" name="smtp_host">
                            </td>
                        </tr>
                        <tr>
                            <td width="250">
                                <strong>Логин почтового ящика:</strong>
                            </td>
                            <td>
                                <input type="text" style="width:98%" value="<?php echo @$cfg['smtp_username']; ?>" name="smtp_username">
                            </td>
                        </tr>
                        <tr>
                            <td width="250">
                                <strong>Пароль:</strong>
                            </td>
                            <td>
                                <input type="text" style="width:98%" value="<?php echo @$cfg['smtp_password']; ?>" name="smtp_password">
                            </td>
                        </tr>
                        <tr>
                            <td width="250">
                                <strong>Порт smtp сервера:</strong>
                            </td>
                            <td>
                                <input type="text" style="width:98%" value="<?php echo @$cfg['smtp_port']; ?>" name="smtp_port">
                            </td>
                        </tr>
                        <tr>
                            <td width="250">
                                <strong>Метод аутентификации:</strong>
                            </td>
                            <td>
                                <input type="radio" value="1" <?php if($cfg['smtp_aut'] == "1" OR empty($cfg['smtp_aut'])) echo "checked"; ?> name="smtp_aut">PLAIN&nbsp;(Низкая секретность)&nbsp;<input type="radio" name="smtp_aut" <?php if($cfg['smtp_aut'] == "2") echo "checked"; ?> value="2">CRAM-MD5&nbsp;(Высокая секретность)</td>
                            </td>
                        </tr>
                    </tbody>
            </table>
       </div>
        <div id="automail">
           
            <table width="800" cellspacing="5" border="0" class="proptable">
                    <tbody>
                        <tr>
                            <td colspan="2">
                                Для автоматического создания писем 1) в панели вашего хостинга должен быть настроен запуск файла cron_makemail.php (рекомендуется 1 раз в 24 часа), 2) установлен и включен плагин "Автописьма"
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <h4>Компоненты:</h4>
                                <div style="width:100%; border-bottom:1px dotted #ccc;"></div>
                            </td>
                        </tr>
                        <tr>
                            <td width="400">
                                <strong>Статьи</strong>
                            </td>
                            <td>
                                <label><input type="radio" value="1" <?php if($cfg['auto_article'] == "1") echo "checked"; ?> name="auto_article"> Да </label><label><input type="radio" name="auto_article" <?php if($cfg['auto_article'] == "0" || empty($cfg['auto_article'])) echo "checked"; ?> value="0"> Нет</label>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <div style="width:100%; border-bottom:1px dotted #ccc;"></div>
                            </td>
                        </tr>
                        <tr>
                            <td width="400">
                                <strong>Блоги</strong>
                            </td>
                            <td>
                                <label><input type="radio" value="1" <?php if($cfg['auto_blog'] == "1") echo "checked"; ?> name="auto_blog"> Да </label><label><input type="radio" name="auto_blog" <?php if($cfg['auto_blog'] == "0" || empty($cfg['auto_blog'])) echo "checked"; ?> value="0"> Нет</label>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <div style="width:100%; border-bottom:1px dotted #ccc;"></div>
                            </td>
                        </tr>
                        <tr>
                            <td width="400">
                                <strong>Универсальный каталог</strong>
                            </td>
                            <td>
                                <label><input type="radio" value="1" <?php if($cfg['auto_uc'] == "1") echo "checked"; ?> name="auto_uc"> Да </label><label><input type="radio" name="auto_uc" <?php if($cfg['auto_uc'] == "0" || empty($cfg['auto_uc'])) echo "checked"; ?> value="0"> Нет</label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Создавать письма для рубрики универсального каталога:</strong>
                            </td>
                            <td>
                                <select name="uc_cat_id" id="uc_cat_id" style="width:300px">
                                    <option value="0" <?php if (!$cfg['uc_cat_id']){ echo 'selected=""';} ?>>Для всех рубрик</option>
                                    <?php if (isset($cfg['uc_cat_id'])){
                                            echo $inCore->getListItemsNS('cms_uc_cats', $cfg['uc_cat_id']);
                                        } else {
                                            echo $inCore->getListItemsNS('cms_uc_cats');
                                        }
                                    ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Категория писем:</strong>
                            </td>
                            <td>
                                <select name="target_uc_cat_id" id="target_uc_cat_id" style="width:300px">
                                    <option value="0" <?php if (!$cfg['target_uc_cat_id']){ echo 'selected=""';} ?>>Общая категория</option>
                                    <?php if (isset($cfg['target_uc_cat_id'])){
                                            echo $inCore->getListItems('cms_postmailer_cats', $cfg['target_uc_cat_id']);
                                        } else {
                                            echo $inCore->getListItems('cms_postmailer_cats');
                                        }
                                    ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Тема рассылки:</strong><br />
                                <span class="hinttext">Поддерживаемые теги:
                                    <br />%NAME% - имя подписчика
                                </span>
                            </td>
                            <td>
                                <input name="auto_title_uc" id="auto_title_uc" type="text" style="width:320px" value="<?php echo htmlspecialchars($cfg['auto_title_uc']); ?>">
                            </td>
                        </tr>


                    </tbody>
            </table>
       </div>
      </div>
        <p>
            <input name="opt" type="hidden" value="saveconfig" />
            <input name="save" type="submit" id="save" value="Сохранить" />
            <input name="back" type="button" id="back" value="Отмена" onclick="window.location.href='index.php?view=components';"/>
        </p>
    </form>
<script type="text/javascript">
$('#config_tabs > ul#tabs').tabs();
</script>
	<?php }
        
/* ==================================================================================================== */
/* ======================== ПОЧТОВАЯ РАССЫЛКА  ======================================================== */
/* ==================================================================================================== */ 
     
    if ($opt=='sendmail') {
        echo '<h3>Результат почтовой рассылки</h3>';
        
        // Устанавливаем неограниченный лимит на выполнение скрипта
        // Если на вашем сервере установлен лимит на выполнение скриптов, просто удалите или закоментируйте данную строчку
        @set_time_limit(0);
        
        //ПЕРЕМЕННЫЕ И КОНСТАНТЫ
        $db_charset = "cp1251";     //кодировка базы данных
        // Кодировка
        define("CHARSET","WINDOWS-1251");
        
        if($db_charset == 'utf8') { $conv_chareset = 'UTF-8'; }
        else if($db_charset == 'koi8r') { $conv_chareset = 'KOI8-R'; }
        else if($db_charset == 'cp1251') { $conv_chareset = 'WINDOWS-1251'; }
        else { $conv_chareset = CHARSET; }
        
        $mailcont = 0;

        $item_id = $_REQUEST['item_id'];
        
        $mail = $model->getMail($item_id);
        
        if(!$mail['id']){ $inCore->halt(); }

        $subject = $mail['title'];

        if(empty($cfg['from_mail'])) {
            $from = $_SERVER["SERVER_NAME"];
        } else {
            $from = $cfg['from_mail'];
        }

        if($cfg['codirovka'] == "1") { $charset = "WINDOWS-1251"; }
        else if($cfg['codirovka'] == "2") { $charset = "KOI8-R"; }
        else { $charset = "UTF-8"; }
        
        if($model->check_rus($subject) == true) {
            if($conv_chareset != $charset) { $subject = iconv($conv_chareset,$charset,$subject); }
            $subject = base64_encode($subject);
            $subject = "=?$charset?B?$subject?=";
        } else {
            if($conv_chareset != $charset) { $subject = iconv($conv_chareset,$charset,$subject); }
        }
//print_r($subject);
        if($model->check_rus($from) == true) {
            if($conv_chareset != $charset) { $from = iconv($conv_chareset,$charset,$from); }
            $from = base64_encode($from);
            $from = "=?$charset?B?$from?=";
        } else {
            if($conv_chareset != $charset) { $from = iconv($conv_chareset,$charset,$from); }
        }
//print_r($from);
/*TODO вложения файлов проверка здесь должна быть */
        
        $count_attach = 0;
        $attach = "no";
        if($count_attach == 0) { 
            $attach = "no"; 
        } else { 
            $attach = "yes"; 
        }
        
        if($cfg['interval_type'] == 'm') {
            $interval = "AND time_send < NOW() - INTERVAL '".$cfg['count_interval']."' MINUTE";
        } else if($cfg['interval_type'] == 'h') {
            $interval = "AND time_send < NOW() - INTERVAL '".$cfg['count_interval']."' HOUR";
        } else if($cfg['interval_type'] == 'd') {
            $interval = "AND time_send < NOW() - INTERVAL '".$cfg['count_interval']."' DAY";
        } else { $interval = ''; }
        
        // Если в настройках $cfg['send_limit'] = 1, тогда устанавливаем ограничение на рассылку писем
        if($cfg['send_limit'] == 1) { $interval .= " LIMIT ".$cfg['limit_number'].""; }
        
        if($mail['cat_id'] == 0) {
            $sql_users = "SELECT * FROM cms_postmailer_users WHERE published = 1 $interval";
        } else {
            $sql_users = "SELECT * FROM cms_postmailer_users WHERE id_cat = ".$mail['cat_id']." AND published = 1 $interval";
        }

        $result = dbQuery($sql_users) ;
        if (mysql_num_rows($result)){
            
            // В соответсвии c насройками выбираем способ отправки (через внешний или внутрений smtp сервер)
            // Отправка письма через внутрений smtp сервер
            if ($cfg['send_server'] == "1") {
                while ($user = mysql_fetch_assoc($result)) {
                        $send_allow = "";

                        // формируем загловок и тело письма
                        $id = $user['id_user'];
                        $cod = $user['cod'];
                        $UNSUB = "http://" . $_SERVER["SERVER_NAME"] . $dir . "unsubscribe.php?id=$id&key=" . $user['cod'] . "";

//                        if ($settings['many_send'] == "no") {
//                            $query_send = "SELECT send FROM " . DB_READY . " WHERE id_send = " . $send['id_send'] . " AND id_user = " . $user['id_user'];
//                            $result_send = $dbh->query($query_send);
//                            $send_ready = $result_send->fetch_array();
//
//                            // Освобаждаем дискриптор
//                            $result_send->close();
//
//                            if ($send_ready['send'] == "yes") {
//                                $send_allow = "no";
//                            }
//                            else
//                                $send_allow = "yes";
//                        }
//                        else {
//                            $send_allow = "yes";
//                        }

//                        if ($send_allow == "yes") {
//                            if ($send['active'] == "yes") {
//                                $unsublink = str_replace('%UNSUB%', $UNSUB, $settings['unsublink']);
//
//                                if ($settings['unsubscribe'] == "yes" and !empty($settings['unsublink'])) {
//                                    $msg = "" . $send['message'] . "<br>$unsublink";
//                                } else {
//                                    $msg = $send['message'];
//                                }
//
//                                $msg = str_replace('%NAME%', $user['name'], $msg);
//                                $msg = str_replace('%DAYS%', $settings['day'], $msg);
//                                $msg = str_replace('%UNSUB%', $UNSUB, $msg);
//                                $msg = str_replace('%SERVER_NAME%', $_SERVER['SERVER_NAME'], $msg);
//
//                                if ($settings['ContentType'] == "1") {
//                                    $type = "text/plain";
//                                    $msg = preg_replace('/<br>/i', "\n", $msg);
//                                    $msg = preg_replace('/<(\/)?[^>]*>/siU', '', $msg);
//                                } else {
//                                    $msg = str_replace("\n", "<br>", $msg);
//                                    $type = "text/html";
//                                }
//
//                                if ($conv_chareset != $charset) {
//                                    $msg = iconv($conv_chareset, $charset, $msg);
//                                }
//
//                                $headers = "MIME-Version: 1.0\n";
//
//                                if ($settings['reply'] == "yes") {
//                                    $headers .= "Reply-To: $from <" . $settings['admin_email'] . ">\n";
//                                    $headers .= "Disposition-Notification-To: $from <" . $settings['admin_email'] . ">\n";
//                                }
//
//                                $headers .= "Sender: $from <" . $settings['admin_email'] . ">\n";
//
//                                if ($settings['ShowAdmin'] == "yes") {
//                                    $headers .= "From: $from <" . $settings['admin_email'] . ">\n";
//                                } else {
//                                    $headers .= "From: $from <robot@" . $_SERVER["SERVER_NAME"] . ">\n";
//                                }
//
//                                if ($send['prior'] == "1") {
//                                    $headers .= "X-Priority: 1\n";
//                                }
//
//                                $headers .= "Content-Type: $type; charset=$charset\n";
//                                $headers .= "Content-Transfer-Encoding: 8bit$EOL";
//
//                                // Проверяем имеются ли вложения
//                                if ($attach == "no") {
//                                    // отправляем письмо пользователю
//                                    if (@mail($user['email'], $subject, $msg, $headers)) {
//                                        // Учет отправки письма
//                                        if ($settings['many_send'] == "no") {
//                                            $insert = "INSERT INTO " . DB_READY . " VALUES (0,
//        'yes',
//        " . $user['id_user'] . ",
//        " . $_GET['id_send'] . ")";
//
//                                            $result_insert = $dbh->prepare($insert);
//
//                                            if ($result_insert) {
//                                                $result_insert->execute();
//                                            } else {
//                                                throw new ExceptionMySQL($dbh->error, $insert, "Ошибка при выполнении SQL запроса!");
//                                            }
//                                        }
//
//                                        $update = "UPDATE " . DB_USERS . " SET time_send = NOW() WHERE id_user = $id";
//                                        $dbh->query($update);
//
//                                        // подсчет адресов на которые отправлена рассылка
//                                        $mailcont = $mailcont + 1;
//                                    }
//                                } else {
//                                    $boundary = "--" . md5(uniqid(time()));
//                                    $headers = "MIME-Version: 1.0\n";
//
//                                    if ($settings['reply'] == "yes") {
//                                        $headers .= "Reply-To: $from <" . $settings['admin_email'] . ">\n";
//                                        $headers .= "Disposition-Notification-To: $from <" . $settings['admin_email'] . ">\n";
//                                    }
//
//                                    $headers .= "Sender: $from <" . $settings['admin_email'] . ">\n";
//
//                                    if ($settings['ShowAdmin'] == "yes") {
//                                        $headers .= "From: $from <" . $settings['admin_email'] . ">\n";
//                                    } else {
//                                        $headers .= "From: $from <robot@" . $_SERVER["SERVER_NAME"] . ">\n";
//                                    }
//
//                                    if ($send['prior'] == "1") {
//                                        $headers .= "X-Priority: 1\n";
//                                    }
//
//                                    $headers .= "Content-Type: multipart/mixed; boundary=\"$boundary\"$EOL";
//
//                                    $multipart = "--$boundary\n";
//                                    $multipart .= "Content-Type: $type; charset=$charset\n";
//                                    $multipart .= "Content-Transfer-Encoding: base64$EOL";
//                                    $multipart .= $EOL;
//                                    $multipart .= chunk_split(base64_encode($msg));
//
//                                    $query_attach = "SELECT * FROM " . DB_ATTACH . " WHERE id_send = " . $_GET['id_send'];
//                                    $result_attach = $dbh->query($query_attach);
//
//                                    if (!$result_attach) {
//                                        throw new ExceptionMySQL($dbh->error, $query_attach, "Ошибка при выполнении SQL запроса!");
//                                    }
//
//                                    while ($row = $result_attach->fetch_array()) {
//                                        $fp = fopen($row['path'], "rb");
//                                        $file = fread($fp, filesize($row['path']));
//
//                                        fclose($fp);
//
//                                        $name = $row['name'];
//
//                                        if (check_rus($name) == true) {
//                                            if ($conv_chareset != $charset) {
//                                                $name = iconv($conv_chareset, $charset, $name);
//                                            }
//                                            $name = base64_encode($name);
//                                            $name = "=?$charset?B?$name?=";
//                                        } else {
//                                            if ($conv_chareset != $charset) {
//                                                $name = iconv($conv_chareset, $charset, $name);
//                                            }
//                                        }
//
//                                        $multipart .= "\n--$boundary\n";
//                                        $multipart .= "Content-Type: application/octet-stream; name=\"$name\"\n";
//                                        $multipart .= "Content-Transfer-Encoding: base64\n";
//                                        $multipart .= "Content-Disposition: attachment; filename=\"$name\"$EOL";
//                                        $multipart .= $EOL;
//                                        $multipart .= chunk_split(base64_encode($file));
//                                    }
//
//                                    // Освобаждаем дискриптор
//                                    $result_attach->close();
//
//                                    $multipart .= "\n--$boundary--\n";
//
//                                    // отправляем письмо пользователю
//                                    if (@mail($user['email'], $subject, $multipart, $headers)) {
//                                        // Учет отправки письма
//                                        if ($settings['many_send'] == "no") {
//                                            $insert = "INSERT INTO " . DB_READY . " VALUES (0,
//        'yes',
//        " . $user['id_user'] . ",
//        " . $_GET['id_send'] . ")";
//
//                                            $result_insert = $dbh->prepare($insert);
//
//                                            if ($result_insert) {
//                                                $result_insert->execute();
//                                            } else {
//                                                throw new ExceptionMySQL($dbh->error, $insert, "Ошибка при выполнении SQL запроса!");
//                                            }
//                                        }
//
//                                        $update = "UPDATE " . DB_USERS . " SET time_send = NOW() WHERE id_user = $id";
//                                        $dbh->query($update);
//
//                                        // подсчет адресов на которые отправлена рассылка
//                                        $mailcont = $mailcont + 1;
//                                    }
//                                }
//                            }
//                        }
                    }
                    
                } else {
                    // Если в настройках задано отправка писем через внешний smtp сервер
                    // тогда открваем сеанс и ведем диалог с smtp сервером через сокеты
                    // открываем сокет и подключаемся к удаленому smtp серверу
                    if (!$socket = fsockopen($settings['smtp_host'], $settings['smtp_port'], $errno, $errstr, 30)) {
                        echo $errno . "<br>" . $errstr;
                    }

                    if (!server_parse($socket, "220", __LINE__))
                        echo '<p>Ошибка отправки сокета</p>';

                    // Авторизация
                    if (!empty($settings['smtp_username']) AND !empty($settings['smtp_password'])) {
                        @fputs($socket, "EHLO " . $settings['smtp_host'] . "$EOL");

                        if (!server_parse($socket, "250", __LINE__)) {
                            echo '<p>Не могу отправить EHLO!</p>';
                            @fclose($socket);
                        }

                        // Взависимости от типа аутентификации задаем тип для данной аутентификации
                        if ($settings['smtp_aut'] == "1") {
                            @fputs($socket, "AUTH LOGIN$EOL");

                            if (!server_parse($socket, "334", __LINE__)) {
                                echo '<p>Не могу найти ответ на запрос авторизаци!</p>';
                                @fclose($socket);
                            }

                            @fputs($socket, base64_encode($settings['smtp_username']) . "$EOL");

                            if (!server_parse($socket, "334", __LINE__)) {
                                echo '<p>Логин авторизации не был принят сервером!</p>';
                                @fclose($socket);
                            }

                            @fputs($socket, base64_encode($settings['smtp_password']) . "$EOL");

                            if (!server_parse($socket, "235", __LINE__)) {
                                echo '<p>Пароль не был принят сервером как верный! Ошибка авторизации!</p>';
                                @fclose($socket);
                            }
                        } else {
                            @fputs($socket, "AUTH CRAM-MD5$EOL");

                            $answer = get_msg($socket, __LINE__);

                            if (empty($answer)) {
                                echo '<p>Не могу найти ответ на запрос авторизаци!</p>';
                                @fclose($socket);
                            }

                            $challenge = trim(get_challenge($answer));
                            $cram_md5_hash = trim(cram_md5_response($settings['smtp_username'], $settings['smtp_password'], $challenge, $EOL));

                            @fputs($socket, "$cram_md5_hash$EOL");

                            if (!server_parse($socket, "235", __LINE__)) {
                                echo '<p>Пароль не был принят сервером как верный! Ошибка авторизации!</p>';
                                @fclose($socket);
                            }
                        }
                    } else {
                        @fputs($socket, "HELO " . $settings['smtp_host'] . "$EOL");

                        if (!server_parse($socket, "250", __LINE__)) {
                            echo '<p>Не могу отправить HELO!</p>';
                            @fclose($socket);
                        }
                    }

                    while ($user = $result_users->fetch_array()) {
                        $send_allow = "";

                        // В цикле формируем загаловок и тело письма для каждого пользователя
                        $id = $user['id_user'];
                        $cod = $user['cod'];
                        $UNSUB = "http://" . $_SERVER["SERVER_NAME"] . $dir . "unsubscribe.php?id=$id&key=" . $user['cod'] . "";

                        if ($settings['many_send'] == "no") {
                            $query_send = "SELECT send FROM " . DB_READY . " WHERE id_send = " . $send['id_send'] . " AND id_user = " . $user['id_user'];
                            $result_send = $dbh->query($query_send);
                            $send_ready = $result_send->fetch_array();

                            // Освобаждаем дискриптор
                            $result_send->close();

                            if ($send_ready['send'] == "yes") {
                                $send_allow = "no";
                            }
                            else
                                $send_allow = "yes";
                        }
                        else {
                            $send_allow = "yes";
                        }

                        if ($send_allow == "yes") {
                            if ($send['active'] == "yes") {
                                $unsublink = str_replace('%UNSUB%', $UNSUB, $settings['unsublink']);

                                if ($settings['unsubscribe'] == "yes" and !empty($settings['unsublink'])) {
                                    $msg = "" . $send['message'] . "<br>$unsublink";
                                } else {
                                    $msg = $send['message'];
                                }

                                if ($settings['ContentType'] == "1") {
                                    $type = "text/plain";
                                    $msg = preg_replace('/<br>/i', "\n", $msg);
                                    $msg = preg_replace('/<(\/)?[^>]*>/siU', '', $msg);
                                } else {
                                    $msg = str_replace("\n", "<br>", $msg);
                                    $type = "text/html";
                                }

                                $msg = str_replace('%NAME%', $user['name'], $msg);
                                $msg = str_replace('%DAYS%', $settings['day'], $msg);
                                $msg = str_replace('%UNSUB%', $UNSUB, $msg);
                                $msg = str_replace('%SERVER_NAME%', $_SERVER['SERVER_NAME'], $msg);

                                $msg_convert = "";

                                if ($conv_chareset != $charset) {
                                    $msg_convert = iconv($conv_chareset, $charset, $msg);
                                } else {
                                    $msg_convert = $msg;
                                }

                                if ($attach == "no") {
                                    $headers = "MIME-Version: 1.0\n";

                                    if ($settings['reply'] == "yes") {
                                        $headers .= "Reply-To: $from <" . $settings['admin_email'] . ">\n";
                                        $headers .= "Disposition-Notification-To: $from <" . $settings['admin_email'] . ">\n";
                                    }

                                    $headers .= "Sender: $from <" . $settings['admin_email'] . ">\n";
                                    $headers .= "To: " . $user['email'] . "\n";

                                    if ($settings['ShowAdmin'] == "yes") {
                                        $headers .= "From: $from <" . $settings['admin_email'] . ">\n";
                                    } else {
                                        $headers .= "From: $from <robot@" . $_SERVER["SERVER_NAME"] . ">\n";
                                    }

                                    if ($send['prior'] == "1") {
                                        $headers .= "X-Priority: 1\n";
                                    }

                                    $headers .= "Content-Type: $type; charset=$charset\n";
                                    $headers .= "Content-Transfer-Encoding: 8bit\n";
                                } else {
                                    $boundary = "--" . md5(uniqid(time()));
                                    $headers = "MIME-Version: 1.0\n";
                                    $headers .= "Content-Type: multipart/mixed; boundary=\"$boundary\"\n";
                                    $headers .= "To: " . $user['email'] . "\n";

                                    if ($settings['ShowAdmin'] == "yes") {
                                        $headers .= "From: $from <" . $settings['admin_email'] . ">\n";
                                    } else {
                                        $headers .= "From: $from <robot@" . $_SERVER["SERVER_NAME"] . ">\n";
                                    }

                                    if ($settings['reply'] == "yes") {
                                        $headers .= "Reply-To: $from <" . $settings['admin_email'] . ">\n";
                                        $headers .= "Disposition-Notification-To: $from <" . $settings['admin_email'] . ">\n";
                                    }

                                    $headers .= "Sender: $from <" . $settings['admin_email'] . ">\n";

                                    if ($send['prior'] == "1") {
                                        $headers .= "X-Priority: 1\n";
                                    }

                                    $multipart = "--$boundary\n";
                                    $multipart .= "Content-Type: $type; charset=$charset\n";
                                    $multipart .= "Content-Transfer-Encoding: base64$EOL";
                                    $multipart .= $EOL;
                                    $multipart .= chunk_split(base64_encode($msg_convert));

                                    $query = "SELECT * FROM " . DB_ATTACH . " WHERE id_send = " . $_GET['id_send'];
                                    $result_attach = $dbh->query($query);

                                    while ($row = $result_attach->fetch_array()) {
                                        $fp = fopen($row['path'], "rb");
                                        $file = fread($fp, filesize($row['path']));

                                        fclose($fp);

                                        $name = $row['name'];

                                        if (check_rus($name) == true) {
                                            if ($conv_chareset != $charset) {
                                                $name = iconv($conv_chareset, $charset, $name);
                                            }
                                            $name = base64_encode($name);
                                            $name = "=?$charset?B?$name?=";
                                        } else {
                                            if ($conv_chareset != $charset) {
                                                $name = iconv($conv_chareset, $charset, $name);
                                            }
                                        }

                                        $multipart .= "\n--$boundary\n";
                                        $multipart .= "Content-Type: application/octet-stream; name=\"$name\"\n";
                                        $multipart .= "Content-Transfer-Encoding: base64\n";
                                        $multipart .= "Content-Disposition: attachment; filename=\"$name\"$EOL";
                                        $multipart .= $EOL;
                                        $multipart .= chunk_split(base64_encode($file));
                                    }

                                    // Освобаждаем дискриптор
                                    $result_attach->close();

                                    $multipart .= "\n--$boundary--\n";
                                }

                                // посылаем поле FROM
                                @fputs($socket, "MAIL FROM: <" . $settings['admin_email'] . ">$EOL");

                                if (!server_parse($socket, "250", __LINE__)) {
                                    echo '<p>Не могу отправить комманду MAIL FROM: </p>';
                                }

                                // посылаем поле TO
                                @fputs($socket, "RCPT TO: <" . $user['email'] . ">$EOL");

                                if (!server_parse($socket, "250", __LINE__)) {
                                    echo '<p>Не могу отправить комманду RCPT TO: </p>';
                                }

                                // посылаем поле DATA
                                @fputs($socket, "DATA$EOL");

                                if (!server_parse($socket, "354", __LINE__)) {
                                    echo '<p>Не могу отправить комманду DATA</p>';
                                }

                                if ($attach == "no") {
                                    $message = "Date: " . date("D, d M Y H:i:s") . " UT\n";
                                    $message .= "Subject: $subject\n";
                                    $message .= "$headers$EOL";
                                    $message .= "$msg_convert\n";
                                } else {
                                    $message = "Date: " . date("D, d M Y H:i:s") . " UT\n";
                                    $message .= "Subject: $subject\n";
                                    $message .= "$headers$EOL";
                                    $message .= "$multipart\n";
                                }

                                // посылаем тело письма
                                @fputs($socket, $message . "$EOL.$EOL");

                                if (server_parse($socket, "250", __LINE__)) {
                                    // Учет отправки письма
                                    if ($settings['many_send'] == "no") {
                                        $insert = "INSERT INTO " . DB_READY . " VALUES (0,
        'yes',
        " . $user['id_user'] . ",
        " . $_GET['id_send'] . ")";

                                        $result_insert = $dbh->prepare($insert);

                                        if ($result_insert) {
                                            $result_insert->execute();
                                        } else {
                                            throw new ExceptionMySQL($dbh->error, $insert, "Ошибка при выполнении SQL запроса!");
                                        }
                                    }

                                    $update = "UPDATE " . DB_USERS . " SET time_send = NOW() WHERE id_user = $id";
                                    $dbh->query($update);

                                    // подсчет адресов на которые отправлена рассылка
                                    $mailcont = $mailcont + 1;
                                }
                            }
                        }
                    }

                    // Завершаем сеанс
                    @fputs($socket, "QUIT$EOL");

                    // Закрываем сокет
                    @fclose($socket);
                }

            echo "Письмо отправлено" .$mailcont. "подписчикам!";
            
        }
            
     }   
        
/* ==================================================================================================== */
/* ======================== СТАТИСТИКА + ЛОГ ========================================================== */
/* ==================================================================================================== */  
     
    if ($opt=='clearlog') {
        
        $model->clearLog();
        $msg = 'Лог очищен!';
        $opt = 'stat';

    }
   
    if ($opt=='stat') {
        
        if (@$msg) { echo '<p class="success">'.$msg.'</p>'; }
        
        echo '<h3>Статистика рассылки</h3>';
        
        echo '<h3>Подписчики</h3>';
        
        $stat = $model->getStat();
        $active_users = $stat[1]['users'] ? $stat[1]['users'] : 0;
        $noactive_users = $stat[0]['users'] ? $stat[0]['users'] : 0;
        $total_users = $noactive_users + $active_users;
        

        echo '<ul><li>Всего пользователей - '.$total_users.'</li><li>Неактивные - '.$noactive_users.'</li><li>Активные - '.$active_users.'</li></ul>';

        echo '<h3>Лог рассылки</h3>';
        $logs = $model->getLog();
        if($logs){
            echo '<style>.logtbl {font-size:11px;} .log_error{background-color:#FF7B7B}.log_info{background-color:#A2D3EA}</style>';
            echo '<table class="logtbl" width="800" cellspacing="1" cellpadding="3" border="0" class="contentlist">';
            echo '<tr><td colspan="2" align="right"><a href="?view=components&do=config&id='.(int)$_REQUEST['id'].'&opt=clearlog">Очистить лог</a>';
            foreach ($logs as $log) {
                echo "<tr class='log_".$log['status']."'><td width='150px'>".$log['date']."<td>".$log['message'];
            }
            echo "</table>";
        }else{
            echo "Нет записей";
        }
    }

/* ==================================================================================================== */
/* ======================== ЭКСПОРТ/ИМПОРТ ============================================================ */
/* ==================================================================================================== */
    if ($opt=='users_export') { 
        $GLOBALS['cp_page_head'][] = '<script type="text/javascript" src="/includes/jquery/jquery.form.js"></script>';
        ?>

        <h3>Экспорт подписчиков</h3>
        <script type="text/javascript">
        function makeDump(){
        $("#godump").attr('disabled', '1');
        $("div#dumpinfo").html('<span style="background:url(/images/ajax-loader.gif) no-repeat;padding-left:56px;">Идет экспорт, подождите...</span>');
        $("form#dump").ajaxSubmit({
            success: function(msg) {
                $("div#dumpinfo").html(msg);
                $("#godump").attr('disabled', '');
            }
        });
        } 
        </script>
        
        <form id="dump" name="dump" action="/components/postmailer/ajax/export.php" method="post">
            <p><strong>Поля для экспорта:</strong></p>

            <input type="checkbox" value="email" checked="checked" name="fields[]"> email - e-mail подписчика<br />
            <input type="checkbox" value="name" checked="checked" name="fields[]"> name - имя подписчика<br />
            <input type="checkbox" value="cat_id" checked="checked" name="fields[]"> cat_id - id категории<br />
            <input type="checkbox" value="published" checked="checked" name="fields[]"> published - публикация (активация) подписчика<br />
            
            <p><strong>Подписчики:</strong></p>
            
            <input type="radio" value="all" checked="checked" name="users"> Все подписчики 
            <input type="radio" value="published" name="users"> Только активные<br /><br />
            
            <input type="hidden" name="opt" value="export" />
            
            /temp/<input name="file" type="text" id="file" value="<?php echo date('d-m-Y') ?>" size="25" />.csv&nbsp;&nbsp;
            <input type="button" name="godump" id="godump" value="Экспорт" onclick="makeDump()"/>
        </form>
        
        <div id="dumpinfo"></div>

    <?php }
    
    if ($opt=='import_result') {

        $error          = '';
        $data_struct    = $_REQUEST['data_struct'];
        $encoding       = $_REQUEST['encoding'];
        $separator      = $_REQUEST['separator'];
        $rows_start     = $_REQUEST['rows_start'];
        $rows_count     = $_REQUEST['rows_count'];
        $current_row    = 0;
        $rows_loaded    = 0;

        if (!isset($_FILES["csvfile"]["name"]) || @$_FILES["csvfile"]["name"]=='') { $error = 'Ошибка загрузки файла. Код: 001'; }
        $tmp_name   = $_FILES["csvfile"]["tmp_name"];
        $file       = $_SERVER['DOCUMENT_ROOT'].'/cache/'. md5($_FILES["csvfile"]["name"] . time()). '.csv';

        if (!move_uploaded_file($tmp_name, $file)) { $error = 'Ошибка загрузки файла. Код: 002'; }

        $csv_file   = @fopen($file, 'r');

        if (!$csv_file) { $error = 'Ошибка открытия файла. Код: 003'; }

        if ($csv_file){

            $data_struct = explode(',', $data_struct);
            foreach($data_struct as $key=>$val){ $data_struct[$key] = trim($val); }

            //Импорт записей в цикле
            while(!feof($csv_file)){

                //увеличим номер текущей строки
                $current_row++;
                //читаем строку
                $row = fgets($csv_file); if (!$row) { continue; }
                //если не достигли начала, пропускаем импорт и в начало
                if ($current_row < $rows_start){ continue; }
                //увеличим счетчик строк
                $rows_loaded++;
                //проверяем превышение лимита
                if ($rows_loaded > $rows_count && $rows_count > 0) { break; }

                //конвертим кодировку
                if ($encoding != 'CP1251') { $row = iconv($encoding, 'CP1251', $row); }

                $row_struct = array();

                //разбиваем строку на поля
                $row_struct = explode($separator, $row);

                //очищаем поля от кавычек
                foreach($row_struct as $key=>$val){
                    $val = trim($val);
                    $val = ltrim($val, $quote);
                    $val = rtrim($val, $quote);
                    $row_struct[$key] = trim($val);
                }

                $item = array();

                foreach($data_struct as $num=>$field){
                    //пропускаем не нужные колонки
                    if ($field == '---') { continue; }
                    if (is_numeric(str_replace('c', '', $field))){
                        //поле - характеристика
                        $item['chars'][str_replace('c', '', $field)] = $row_struct[$num];
                    } else {
                        //поле - параметр товара
                        $item[$field] = $row_struct[$num];
                    }
                }

                if ($item) {

                    $items[] = $item;

                }

            }//while

            @unlink($file);

        }//if csv file

        //создаем записи
        if ($items){

            // снимаем таймлимит
            set_time_limit(0);
            
            $mod = array();
            $conters = array('incorrectemail' => '0', 'emailbusy' => '0', 'site_id' => '0');

            //обрабатываем полученный массив записей
            foreach($items as $num=>$item){

                $mod['email']          = ($item['email'] ? $item['email'] : '');
                $mod['name']           = ($item['name'] ? $item['name'] : '');
                $mod['cat_id']         = ($item['cat_id'] ? $item['cat_id'] : '0');
                $mod['published']      = $item['published'];

                $result = '';
                $result = $model->addUser($mod);

                if ($result['incorrectemail']) {
                    $conters['incorrectemail']++;
                }

                if ($result['emailbusy']) {
                    $conters['emailbusy']++;
                }

                if ($result['site_id']) {
                    $conters['site_id']++;
                }
            }
        }

        echo  '<h3>Результаты импорта</h3>';

        if($conters['site_id']>0){

            echo '<p>Добавлено '.$conters['site_id'].' подписчиков</p>';
            echo '<p>Не корректных e-mail = '.$conters['incorrectemail'].'</p>';
            echo '<p>Уже используется e-mail = '.$conters['emailbusy'].'</p>';
            echo '<h2><a href="?view=components&do=config&id='.(int)$_REQUEST['id'].'&opt=list_users">Продолжить</a></h2>';

        } else {

            echo '<p>Не корректных e-mail = '.$conters['incorrectemail'].'</p>';
            echo '<p>Уже используется e-mail = '.$conters['emailbusy'].'</p>';

            echo '<p>Ни одна запись не была добавлена.</p>';
            echo '<p>Пожалуйста, проверьте настройки импорта и повторите операцию.</p>';
            echo '<p><input type="button" onclick="window.history.go(-1)" value="Повторить" /></p>';

        }

    }
        
    if ($opt == 'users_import'){ 
        
        cpAddPathway('Импорт подписчиков', '?view=components&do=config&id='.(int)$_REQUEST['id'].'&opt=users_import');
        ?>

        <h3>Импорт подписчиков</h3>					 
        <form action="index.php?view=components&amp;do=config&amp;id=<?php echo (int)$_REQUEST['id'];?>" method="post" enctype="multipart/form-data">
            <table>
                    <tr>
                        <td width="200">
                            <strong>CSV-файл для импорта:</strong>
                        </td>
                        <td width="200">
                            <input type="file" name="csvfile" />
                        </td>
                    </tr>
                    <tr>
                        <td width=""><strong>Кодировка файла:</strong></td>
                        <td width="200">
                            <select style="width:290px" name="encoding" id="encoding">
                                <option value="CP1251">Кириллица (MS Office, Windows)</option>
                                <option value="UTF-8">Юникод (OpenOffice, Linux)</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>Разделитель полей:</strong></td>
                        <td>
                            <select style="width:290px" name="separator" id="separator">
                                <option value=",">Запятая</option>
                                <option selected="" value=";">Точка с запятой</option>
                                <option value=":">Двоеточие</option>
                                <option value=" ">Пробел</option>
                                <option value="\t">Табуляция</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <strong>Начинать со строки:</strong>
                        </td>
                        <td>
                            <input type="text" style="width:50px" value="2" name="rows_start" id="rows_start">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <strong>Импортировать строк <span style="color:gray">(0 - все):</span></strong>
                        </td>
                        <td valign="top">
                            <input type="text" style="width:50px" value="0" name="rows_count" id="rows_count">
                        </td>
                    </tr>
                </table>
                <br />
                <h3>Шаблон cтруктуры данных</h3>
                <p style="margin-top:0px;color:gray;border-bottom:dotted 1px gray;padding-bottom:10px;">
                    Здесь нужно задать шаблон для строк импортируемого CSV-файла. Это необходимо для того, чтобы скрипт понимал в каком порядке расположены данные.<br/>
                    По сути, это просто перечисление колонок в импортируемой таблице.
                </p>
        
                <p>
                    <input type="text" id="data_struct" name="data_struct" style="width:900px" value="email, name, cat_id, published" />
                </p>
                <input name="opt" type="hidden" value="import_result" />
                <button class="btn btn-primary" type="submit">Установить</button><br />
            </form>
            <p>
                <strong>Допустимые поля импорта:</strong><br />
                <strong>email</strong> - email подписчика,<br />
                <strong>name</strong> - имя подписчика,<br />
                <strong>cat_id</strong> - 0-n, id категории подписчика, пустое значение = 0 (общая категория)<br />
                <strong>published</strong> - 0 - неактивен, 1 - активен, пустое значение - активен
            </p>
        
        <?php }
        
/* ==================================================================================================== */
/* ======================== УПРАВЛЕНИЕ ПОЛЬЗОВАТЕЛЯМИ ================================================= */
/* ==================================================================================================== */
    
    if ($opt == 'show_user'){
        if (!isset($_REQUEST['item'])){
            if (isset($_REQUEST['item_id'])){ dbShow('cms_postmailer_users', (int)$_REQUEST['item_id']);  }
            echo '1'; exit;
        } else {
            dbShowList('cms_postmailer_users', $_REQUEST['item']);
            $inCore->redirectBack();
        }			
    }

    if ($opt == 'hide_user'){
        if (!isset($_REQUEST['item'])){
            if (isset($_REQUEST['item_id'])){ dbHide('cms_postmailer_users', (int)$_REQUEST['item_id']);  }
            echo '1'; exit;
        } else {
            dbHideList('cms_postmailer_users', $_REQUEST['item']);				
            $inCore->redirectBack();
        }		
    }
    
    if ($opt == 'delete_user') {
        if (!isset($_REQUEST['item'])) {
            $user_id = (int)$_REQUEST['user_id'];
            if ($user_id >= 0) {
                $model->deleteUser($user_id);
            }
        } else {
            $model->deleteUsers($inCore->request('item', 'array_int'));
        }
            $inCore->redirectBack();
    }


    if ($opt == 'submit_user') {

        $mod['name']      = htmlspecialchars($_REQUEST['name'], ENT_QUOTES, 'cp1251');
        $mod['email']     = $inCore->request('email', 'str');
        $mod['cat_id']    = $inCore->request('cat_id', 'int');
        $mod['published'] = $inCore->request('published', 'int');

        $error = '';
        
        $result = $model->addUser($mod);

        if ($result['incorrectemail']) {
            $error .= 'Некорректный адрес e-mail!<br/>';
        }
        
        if ($result['emailbusy']) {
            $error .= 'Указанный email занят!<br/>';
        }   

        if (!$error) {
            header('location:?view=components&do=config&id='.(int)$_REQUEST['id'].'&opt=list_users');
        } else {
            $opt = 'add_user';
        }
    }

    if ($opt == 'update_user') {
        if (isset($_REQUEST['user_id'])) {
            $user_id = (int)$_REQUEST['user_id'];

            $name      = htmlspecialchars($_REQUEST['name'], ENT_QUOTES, 'cp1251');
            $email     = $inCore->request('email', 'str');
            $cat_id    = (int)$_REQUEST['cat_id'];
            $published = $inCore->request('published', 'int');

            $sql = "UPDATE cms_postmailer_users 
                        SET name = '$name', 
                        email = '$email', 
                        cat_id = '$cat_id', 
                        published = $published
                        WHERE id = $user_id
                        LIMIT 1";
            dbQuery($sql);
        }
        
        if (!isset($_SESSION['editlist']) || @sizeof($_SESSION['editlist']) == 0) {
            header('location:?view=components&do=config&id='.(int)$_REQUEST['id'].'&opt=list_users');
        } else {
            $opt = 'edit_user';
        }
   }
        
  if ($opt == 'edit_user' || $opt== 'add_user'){

        if ($opt=='edit_user'){

            if(isset($_REQUEST['multiple'])){				 
                if (isset($_REQUEST['item'])){					
                        $_SESSION['editlist'] = $_REQUEST['item'];
                } else {
                        echo '<p class="error">Нет выбранных объектов!</p>';
                        return;
                }				 
            }
						
            $ostatok = '';
					
            if (isset($_SESSION['editlist'])){
                $user_id = array_shift($_SESSION['editlist']);
                if (sizeof($_SESSION['editlist'])==0) { unset($_SESSION['editlist']); } else 
                { $ostatok = '(На очереди: '.sizeof($_SESSION['editlist']).')'; }
            } else { $user_id = (int)$_REQUEST['user_id']; }
	
            $sql = "SELECT * FROM cms_postmailer_users WHERE id = $user_id LIMIT 1";
            $result = dbQuery($sql) ;
            if (mysql_num_rows($result)){
                $mod = mysql_fetch_assoc($result);
            }
					
            echo '<h3>Редактировать подписчика '.$ostatok.'</h3>';					 
            cpAddPathway($mod['name'], '?view=components&do=config&id='.(int)$_REQUEST['id'].'&opt=edit_user&user_id='.$mod['user_id']);
		
        } else {
            $mod['published'] = 1;
            echo '<h3>Добавить подписчика</h3>';					 
            cpAddPathway('Добавить подписчика', '?view=components&do=config&id='.(int)$_REQUEST['id'].'&opt=add_user');
        }

	?>

      <?php if ($error){ ?>
          <div style="color:red;margin-bottom:10px;">
            <?php echo $error; ?>
          </div>
      <?php } ?>

      <form action="index.php?view=components&amp;do=config&amp;id=<?php echo (int)$_REQUEST['id'];?>" method="post" enctype="multipart/form-data" name="addform" id="addform">
        <table width="600" border="0" cellpadding="0" cellspacing="10" class="proptable">
          <tr>
            <td valign="middle"><strong>Имя: </strong></td>
            <td width="220" valign="middle">
                <input name="name" type="text" id="name" style="width:220px" value="<?php echo htmlspecialchars($mod['name']);?>" />
            </td>
          </tr>
          <tr>
            <td valign="middle"><strong>Email: </strong></td>
            <td valign="middle"><input name="email" type="text" id="nickname" style="width:220px" value="<?php echo @$mod['email'];?>"/></td>
          </tr>
          <tr>
            <td valign="middle"><strong>Категория подписчика:</strong></td>
            <td valign="middle">
                <select name="cat_id" id="cat_id" style="width:225px">
                    <option value="0" <?php if (@$mod['cat_id']==0) { echo 'selected=""'; } ?>>Общая</option>
                    <?php
                        if (isset($mod['cat_id'])) {
                            echo $inCore->getListItems('cms_postmailer_cats', $mod['cat_id']);
                        } else {
                            echo $inCore->getListItems('cms_postmailer_cats');
                        }
                    ?>
                </select>
            </td>
          </tr>
          <tr>
            <td valign="middle"><strong>Активирован?</strong></td>
            <td valign="middle">
                <label>
                    <input name="published" type="radio" value="1" <?php if ($mod['published']) { echo 'checked="checked"'; } ?> /> Да  
                </label>
                <label>
                    <input name="published" type="radio" value="0"  <?php if (!$mod['published']) { echo 'checked="checked"'; } ?> /> Нет
                </label>
            </td>
          </tr>
        </table>
        <p>
        <?php if($opt=='edit_user'){ ?>
            <input name="opt" type="hidden" id="opt" value="update_user" />
            <input name="add_mod" type="submit" id="add_mod" value="Сохранить" />
        <?php } else { ?>
            <input name="opt" type="hidden" id="opt" value="submit_user" />	  
            <input name="add_mod" type="submit" id="add_mod" value="Создать" />
        <?php } ?>
        <span style="margin-top:15px">
            <input name="back2" type="button" id="back2" value="Отмена" onclick="window.history.back();"/>
        </span>
        <?php
            if ($opt=='edit_user'){ 
                echo '<input name="user_id" type="hidden" value="'.$user_id.'" />';
            }
        ?>
        </p>
      </form>
	<?php
   }   
        
    if ($opt == 'list_users'){
        cpAddPathway('Подписчики', '?view=components&do=config&id='.(int)$_REQUEST['id'].'&opt=list_users');
        //TABLE COLUMNS
        $fields = array();

        $fields[0]['title'] = 'id';		 $fields[0]['field'] = 'id';		$fields[0]['width'] = '30';

        $fields[1]['title'] = 'Имя';		 $fields[1]['field'] = 'name';		$fields[1]['width'] = '150';		$fields[1]['link'] = '?view=components&do=config&id='.(int)$_REQUEST['id'].'&opt=edit_user&user_id=%id%';
        $fields[1]['filter'] = 15;
        
        $fields[2]['title'] = 'E-Mail';		 $fields[2]['field'] = 'email';		$fields[2]['width'] = '120';

        $fields[3]['title'] = 'Группа';		 $fields[3]['field'] = 'cat_id';        $fields[3]['width'] = '200';
        $fields[3]['prc']   = 'cpMailerCatById'; $fields[3]['filter']= '1';		$fields[3]['filterlist'] = cpGetList('cms_postmailer_cats');

        $fields[5]['title'] = 'Дата добавления'; $fields[5]['field'] = 'regdate';       $fields[5]['width'] = '140';		

        $fields[7]['title'] = 'IP';		 $fields[7]['field'] = 'ip';            $fields[7]['width'] = '100';
        
        $fields[8]['title'] = 'Активирован?';	 $fields[8]['field'] = 'published';	$fields[8]['width'] = '95';
        $fields[8]['do']    = 'opt';             $fields[8]['do_suffix'] = '_user';

        //ACTIONS
        $actions = array();

        $actions[0]['title']   = 'Редактировать';
        $actions[0]['icon']    = 'edit.gif';
        $actions[0]['link']    = '?view=components&do=config&id='.(int)$_REQUEST['id'].'&opt=edit_user&user_id=%id%';

        $actions[1]['title']   = 'Удалить';
        $actions[1]['icon']    = 'delete.gif';
        $actions[1]['confirm'] = 'Удалить подписчика?';
        $actions[1]['link']    = '?view=components&do=config&id='.(int)$_REQUEST['id'].'&opt=delete_user&user_id=%id%';

        //Print table
        cpListTable('cms_postmailer_users', $fields, $actions, '', 'regdate DESC');

    }
    
/* ==================================================================================================== */
/* ======================== УПРАВЛЕНИЕ РАССЫЛКАМИ ===================================================== */
/* ==================================================================================================== */

    if ($opt == 'show_item'){
        if (!isset($_REQUEST['item'])){
            if (isset($_REQUEST['item_id'])){ dbShow('cms_postmailer_mails', (int)$_REQUEST['item_id']);  }
            echo '1'; exit;
        } else {
            dbShowList('cms_postmailer_mails', $_REQUEST['item']);
            $opt = 'list_items';				
        }			
    }

    if ($opt == 'hide_item'){
        if (!isset($_REQUEST['item'])){
            if (isset($_REQUEST['item_id'])){ dbHide('cms_postmailer_mails', (int)$_REQUEST['item_id']);  }
            echo '1'; exit;
        } else {
            dbHideList('cms_postmailer_mails', $_REQUEST['item']);				
            $opt = 'list_items';				
        }		
    }
    
    if ($opt == 'move_up'){
        
        if (isset($_REQUEST['item_id'])) { $item_id = (int)$_REQUEST['item_id']; } else { $item_id = -1; }
	if (isset($_REQUEST['co'])) { $co = $_REQUEST['co']; } else { $co = -1; }

        if ($item_id >= 0){ dbMoveUp('cms_postmailer_mails', $item_id, $co); }

        $opt = 'list_items';
    }

    if ($opt == 'move_down'){
        
        if (isset($_REQUEST['item_id'])) { $item_id = (int)$_REQUEST['item_id']; } else { $item_id = -1; }
	if (isset($_REQUEST['co'])) { $co = $_REQUEST['co']; } else { $co = -1; }
        
        if ($item_id >= 0){ dbMoveDown('cms_postmailer_mails', $item_id, $co); }
        $opt = 'list_items';
    }

    if ($opt == 'saveorder'){
        if(isset($_REQUEST['ordering'])) {
            
            $ord = $_REQUEST['ordering'];
            $ids = $_REQUEST['ids'];

            foreach ($ord as $id=>$ordering){			
                dbQuery("UPDATE cms_postmailer_mails SET ordering = $ordering WHERE id = ".$ids[$id]) ;						
            }
        }
        
        header('location:?view=components&do=config&id='.(int)$_REQUEST['id'].'&opt=list_items');
    }

    if ($opt == 'submit_item'){	
        $item = array();
        $item['title']     = $_REQUEST['title'];
        $item['message']   = $_REQUEST['message'];
        $item['prior']     = (int)$_REQUEST['prior'];
        $item['cat_id']    = (int)$_REQUEST['cat_id'];
        $item['published'] = (int)$_REQUEST['published'];
        
        $model->addMail($item);

        header('location:?view=components&do=config&id='.(int)$_REQUEST['id'].'&opt=list_items');
    }	
    
    if ($opt == 'autoorder'){
        
        $sql = "SELECT * FROM cms_postmailer_mails ORDER BY ordering";
        $rs = dbQuery($sql) ;

        if (mysql_num_rows($rs)){
                $ord = 1;
                while ($item = mysql_fetch_assoc($rs)){
                    dbQuery("UPDATE cms_postmailer_mails SET ordering = ".$ord." WHERE id=".$item['id']) ;
                    $ord += 1;
                }				
        }

        header('location:?view=components&do=config&id='.(int)$_REQUEST['id'].'&opt=list_items');		
    }
	
    if ($opt == 'update_item'){
        if(isset($_REQUEST['item_id'])) { 
            
            $item = array();
            $item['id']        = (int)$_REQUEST['item_id'];
            $item['title']     = $_REQUEST['title'];
            $item['message']   = $_REQUEST['message'];
            $item['prior']     = (int)$_REQUEST['prior'];
            $item['cat_id']    = (int)$_REQUEST['cat_id'];
            $item['published'] = (int)$_REQUEST['published'];

            $model->updateMail($item);
            
        }
        if (!isset($_SESSION['editlist']) || @sizeof($_SESSION['editlist'])==0){
                header('location:?view=components&do=config&id='.(int)$_REQUEST['id'].'&opt=list_items');
        } else {
                header('location:?view=components&do=config&id='.(int)$_REQUEST['id'].'&opt=edit_item');
        }
    }
    
    if($opt == 'delete_item'){
        if (!isset($_REQUEST['item'])){
            if (isset($_REQUEST['item_id'])){ $model->deleteMail((int)$_REQUEST['item_id']); }
        } else {
            $model->deleteMails($_REQUEST['item']);			
        }
            header('location:?view=components&do=config&id='.(int)$_REQUEST['id'].'&opt=list_items');
    }
    
    if ($opt == 'add_item' || $opt == 'edit_item'){
        if ($opt=='add_item'){
            echo '<h3>Добавить рассылку</h3>';
            $mod['published'] = 1;
            cpAddPathway('Добавить рассылку', '?view=components&do=config&id='.(int)$_REQUEST['id'].'&opt=add_item');
        } else {
            if(isset($_REQUEST['multiple'])){				 
                if (isset($_REQUEST['item'])){					
                    $_SESSION['editlist'] = $_REQUEST['item'];
                } else {
                    echo '<p class="error">Нет выбранных объектов!</p>';
                    return;
                }				 
            }
						
            $ostatok = '';
					
            if (isset($_SESSION['editlist'])){
                $id = array_shift($_SESSION['editlist']);
                if (sizeof($_SESSION['editlist'])==0) { unset($_SESSION['editlist']); } else 
                { $ostatok = '(На очереди: '.sizeof($_SESSION['editlist']).')'; }
            } else { $id = (int)$_REQUEST['item_id']; }

            $sql = "SELECT * FROM cms_postmailer_mails WHERE id = $id LIMIT 1";
            $result = dbQuery($sql) ;
            if (mysql_num_rows($result)){
                $mod = mysql_fetch_assoc($result);
            }

            echo '<h3>Рассылка: '.$mod['title'].' '.$ostatok.'</h3>';
            cpAddPathway('Почтовая рассылка', '?view=components&do=config&id='.(int)$_REQUEST['id'].'&opt=list_items');
            cpAddPathway($mod['title'], '?view=components&do=config&id='.(int)$_REQUEST['id'].'&opt=edit_item&item_id='.$id);
        }

    ?>
    <form action="index.php?view=components&amp;do=config&amp;id=<?php echo (int)$_REQUEST['id'];?>" method="post" enctype="multipart/form-data" name="addform" id="addform">
        <table width="620" border="0" cellpadding="0" cellspacing="10" class="proptable">
        <tr>
            <td width="220">
                <strong>Тема рассылки:</strong><br />
                <span class="hinttext"><strong> Поддерживаемые теги:</strong>
                    <br />%NAME% - имя подписчика
                </span>
            </td>
            <td>
                <input name="title" id="title" type="text" style="width:320px" value="<?php echo htmlspecialchars($mod['title']); ?>">
            </td>
        </tr>
        <tr>
            <td><strong>Категория подписчиков:</strong></td>
            <td><select name="cat_id" id="cat_id" style="width:220px">
                    <option value="0" <?php if (@$mod['cat_id']==0) { echo 'selected=""'; } ?>>Общая</option>
                <?php
                    echo $inCore->getListItems('cms_postmailer_cats', $mod['cat_id']);
                ?>
            </select></td>
          </tr>
          <tr>
            <td><strong>Публиковать рассылку?</strong></td>
            <td>
                <label>
                    <input name="published" type="radio" value="1" checked="checked" <?php if (@$mod['published']) { echo 'checked="checked"'; } ?> /> Да
                </label>
                <label>
                    <input name="published" type="radio" value="0"  <?php if (@!$mod['published']) { echo 'checked="checked"'; } ?> /> Нет
                </label>
            </td>
          </tr>
          <tr>
            <td colspan="2">
                <div style="margin-bottom:10px"><strong>Текст рассылки:</strong></div>
                <div>
                    <?php $inCore->insertEditor('message', $mod['message'], '300', '605'); ?>
                </div>	
                <span class="hinttext"><strong> Поддерживаемые теги:</strong>
                    <br />%NAME% - имя подписчика,
                    <br />%DAYS% - количество дней на активацию подписки,
                    <br />%CONFIRM% - ссылка для подтверждения рассылки,
                    <br />%UNSUB% - ссылка для удаления рассылки,
                    <br />%SERVER_NAME% - адрес сайта
                </span>
            </td>
          </tr>
          <tr>
            <td><strong>Прикрепить файл</strong></td>
            <td>
                <input type="file" name="mail_file_0" size="30">
            </td>
          </tr>
            <tr>
            <td><strong>Важность</strong></td>
            <td>
                <label>
                    <input name="prior" type="radio" value="1" <?php if (@$mod['prior']) { echo 'checked="checked"'; } ?> /> Высокая
                </label>
                <label>
                    <input name="prior" type="radio" value="0"  <?php if (@!$mod['prior']) { echo 'checked="checked"'; } ?> /> Низкая
                </label>
            </td>
          </tr>
        </table>
        <p>
          <label>
          <input name="add_mod" type="submit" id="add_mod" <?php if ($opt=='add_item') { echo 'value="Добавить рассылку"'; } else { echo 'value="Сохранить изменения"'; } ?> />
          </label>
          <label>
          <input name="back2" type="button" id="back2" value="Отмена" onclick="window.location.href='index.php?view=components&do=config&id=<?php echo $_REQUEST['id']; ?>';"/>
          </label>
          <input name="opt" type="hidden" id="do" <?php if ($opt=='add_item') { echo 'value="submit_item"'; } else { echo 'value="update_item"'; } ?> />
          <?php
            if ($opt=='edit_item'){
                echo '<input name="item_id" type="hidden" value="'.$mod['id'].'" />';
            } ?>
        </p>
</form>
<?php

    }

    if ($opt == 'list_items'){
        cpAddPathway('Рассылки', '?view=components&do=config&id='.(int)$_REQUEST['id'].'&opt=list_items');
        
        //TABLE COLUMNS
        $fields = array();

        $fields[0]['title'] = 'id';		$fields[0]['field'] = 'id';		$fields[0]['width'] = '30';

        $fields[1]['title']  = 'Тема';	$fields[1]['field'] = 'title';	$fields[1]['width'] = '';
        $fields[1]['link']   = '?view=components&do=config&id='.(int)$_REQUEST['id'].'&opt=edit_item&item_id=%id%';
        $fields[1]['filter'] = 15;
        $fields[1]['maxlen'] = 120;
        
        $fields[2]['title']  = 'Категория подписчиков';	   $fields[2]['field']  = 'cat_id';       $fields[2]['width'] = '200';
        $fields[2]['prc']    = 'cpMailerCatById';  $fields[2]['filter'] = 1;              $fields[2]['filterlist'] = cpGetList('cms_postmailer_cats');
        
        $fields[3]['title'] = 'Порядок';	$fields[3]['field'] = 'id';	$fields[3]['width'] = '100';
        $fields[3]['prc']   = 'cpOrderMails';
        
        $fields[4]['title'] = 'Дата создания';	$fields[4]['field'] = 'pubdate';        $fields[4]['width'] = '120';
        
        $fields[5]['title'] = 'Активность';	$fields[5]['field'] = 'published';	$fields[5]['width'] = '80';
        $fields[5]['do'] = 'opt';               $fields[5]['do_suffix'] = '_item';

        //ACTIONS
        $actions = array();
        
        $actions[0]['title']   = 'Разослать подписчикам';
        $actions[0]['icon']    = 'message.gif';
        $actions[0]['link']    = '?view=components&do=config&id='.(int)$_REQUEST['id'].'&opt=sendmail&item_id=%id%';
        
        $actions[1]['title']   = 'Редактировать';
        $actions[1]['icon']    = 'edit.gif';
        $actions[1]['link']    = '?view=components&do=config&id='.(int)$_REQUEST['id'].'&opt=edit_item&item_id=%id%';

        $actions[2]['title']   = 'Удалить';
        $actions[2]['icon']    = 'delete.gif';
        $actions[2]['confirm'] = 'Удалить рассылку?';
        $actions[2]['link']    = '?view=components&do=config&id='.(int)$_REQUEST['id'].'&opt=delete_item&item_id=%id%';

        //Print table
        cpListTable('cms_postmailer_mails', $fields, $actions, '', 'ordering ASC');
    }
    
/* ==================================================================================================== */
/* ======================== УПРАВЛЕНИЕ КАТЕГОРИЯМИ ==================================================== */
/* ==================================================================================================== */
    
    if ($opt == 'submit_cat') {
        $title = $_REQUEST['title'];
        $sql = "INSERT INTO cms_postmailer_cats (title) VALUES ('$title')";
        dbQuery($sql);
        header('location:?view=components&do=config&id=' . (int) $_REQUEST['id'] . '&opt=list_cats');
    }

    if ($opt == 'delete_cat') {
        if (isset($_REQUEST['item_id'])) {
            $id = (int) $_REQUEST['item_id'];
            //DELETE CATEGORY
            $sql = "DELETE FROM cms_postmailer_cats WHERE id = $id LIMIT 1";
            dbQuery($sql);
        }
        header('location:?view=components&do=config&id=' . (int) $_REQUEST['id'] . '&opt=list_cats');
    }
	
    if ($opt == 'update_cat') {
        if (isset($_REQUEST['item_id'])) {
            $id = (int) $_REQUEST['item_id'];

            $title = $_REQUEST['title'];

            $sql = "UPDATE cms_postmailer_cats
                                SET title='$title' 
                                WHERE id = $id 
                                LIMIT 1";
            dbQuery($sql);

            header('location:?view=components&do=config&id=' . (int) $_REQUEST['id'] . '&opt=list_cats');
        }
    }
	
	
    if ($opt == 'list_cats') {
        cpAddPathway('Категории подписчиков', '?view=components&do=config&id='.(int) $_REQUEST['id'].'&opt=list_cats');
        echo '<h3>Категории подписчиков</h3>';

        //TABLE COLUMNS
        $fields = array();

        $fields[0]['title'] = 'id';
        $fields[0]['field'] = 'id';
        $fields[0]['width'] = '30';

        $fields[1]['title'] = 'Название';
        $fields[1]['field'] = 'title';
        $fields[1]['width'] = '';
        $fields[1]['filter'] = 20;
        $fields[1]['link'] = '?view=components&do=config&id='.(int)$_REQUEST['id'].'&opt=edit_cat&item_id=%id%';

        //ACTIONS
        $actions = array();
       
        $actions[0]['title'] = 'Редактировать';
        $actions[0]['icon'] = 'edit.gif';
        $actions[0]['link'] = '?view=components&do=config&id='.(int)$_REQUEST['id'].'&opt=edit_cat&item_id=%id%';

        $actions[1]['title'] = 'Удалить';
        $actions[1]['icon'] = 'delete.gif';
        $actions[1]['confirm'] = 'Удалить категорию подписчиков?';
        $actions[1]['link'] = '?view=components&do=config&id='.(int)$_REQUEST['id'].'&opt=delete_cat&item_id=%id%';

        //Print table
        cpListTable('cms_postmailer_cats', $fields, $actions);
    }

    if ($opt == 'add_cat' || $opt == 'edit_cat'){
        
        if ($opt=='add_cat'){
            echo '<h3>Добавить категорию</h3>';
            cpAddPathway('Добавить категорию', '?view=components&do=config&id='.(int)$_REQUEST['id'].'&opt=add_cat');
        } else {
            if(isset($_REQUEST['item_id'])){
                $id = (int)$_REQUEST['item_id'];
                $sql = "SELECT * FROM cms_postmailer_cats WHERE id = $id LIMIT 1";
                $result = dbQuery($sql) ;
                if (mysql_num_rows($result)){
                    $mod = mysql_fetch_assoc($result);
                }
            }

            echo '<h3>Категория: '.$mod['title'].'</h3>';
            cpAddPathway('Категории подписчиков', '?view=components&do=config&id='.(int)$_REQUEST['id'].'&opt=list_cats');
            cpAddPathway($mod['title'], '?view=components&do=config&id='.(int)$_REQUEST['id'].'&opt=edit_cat&item_id='.(int)$_REQUEST['item_id']);
        }
    ?>
    <form id="addform" name="addform" method="post" enctype="multipart/form-data" action="index.php?view=components&amp;do=config&amp;id=<?php echo (int)$_REQUEST['id'];?>">
        <table width="620" border="0" cellpadding="0" cellspacing="10" class="proptable">
            <tr>
                <td><strong>Название категории: </strong></td>
                <td width="220"><input name="title" type="text" id="title" style="width:220px" value="<?php echo htmlspecialchars($mod['title']); ?>"/></td>
            </tr>
        </table>
        <p>
            <label>
            <input name="add_mod" type="submit" id="add_mod" <?php if ($do=='add_cat') { echo 'value="Создать категорию"'; } else { echo 'value="Сохранить изменения"'; } ?> />
            </label>
            <label>
            <input name="back3" type="button" id="back3" value="Отмена" onclick="window.location.href='index.php?view=components&amp;do=config&amp;id=<?php echo (int)$_REQUEST['id']; ?>';"/>
            </label>
            <input name="opt" type="hidden" id="do" <?php if ($opt=='add_cat') { echo 'value="submit_cat"'; } else { echo 'value="update_cat"'; } ?> />
            <?php
                if ($opt=='edit_cat'){
                    echo '<input name="item_id" type="hidden" value="'.$mod['id'].'" />';
                }
            ?>
        </p>
    </form>
<?php } if ($opt == 'cron') {
    
?><br><a target="_blank" href="/components/postmailer/cron_makemail.php">Запустить крон создания писем</a><br><br>
 <a target="_blank" href="/components/postmailer/cron.php">Запустить крон рассылки писем</a><br><br>
<?php } ?>
 <?php

 function cpMailerCatById($id){

	$result = dbQuery("SELECT title FROM cms_postmailer_cats WHERE id = $id") ;

	if (mysql_num_rows($result)) {
		$cat = mysql_fetch_assoc($result);
		return '<a href="index.php?view=components&do=config&id='.$_REQUEST['id'].'&opt=edit_cat&item_id='.$id.'">'.$cat['title'].'</a>';
	} else { return 'Общая'; }

}

function cpOrderMails($id){
    
    $inDB = cmsDatabase::getInstance();
    $sql = "SELECT ordering FROM cms_postmailer_mails WHERE id = $id LIMIT 1";
    $rs = dbQuery($sql) ;
    $item = mysql_fetch_assoc($rs);
    $ordering = $item['ordering'];
    
    $html .= '<a title="Вниз" href="?view=components&do=config&id='.(int)$_REQUEST['id'].'&opt=move_down&co='.$ordering.'&item_id='.$id.'"><img src="images/actions/down.gif" border="0"/></a>';
    $html .= '<input class="lt_input" type="text" size="4" name="ordering[]" value="'.$ordering.'" />';
    $html .= '<input name="ids[]" type="hidden" value="'.$id.'" />';
    $html .= '<a title="Вверх" href="?view=components&do=config&id='.(int)$_REQUEST['id'].'&opt=move_up&co='.$ordering.'&item_id='.$id.'"><img src="images/actions/top.gif" border="0"/></a>';

    return $html;
}

 ?>