<?php
defined('B_PROLOG_INCLUDED') and (B_PROLOG_INCLUDED === true) or die();
use Bitrix\Main\Localization\Loc;
Loc::loadMessages(__FILE__);
$aMenu = array(
    array(
        'parent_menu' => 'global_menu_content',
        'sort' => 400,
        'text' => "Тестовый модуль",
        'title' => "",
        'url' => 'perfmon_table.php?lang=ru&table_name=brainkit_test'
    ),
);
return $aMenu;