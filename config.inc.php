<?php
/**
 * Typecho Blog Platform
 *
 * @copyright  Copyright (c) 2008 Typecho team (http://www.typecho.org)
 * @license    GNU General Public License 2.0
 * @version    $Id$
 */

/** ����https */
define('__TYPECHO_SECURE__',true);

/** �����Ŀ¼ */
define('__TYPECHO_ROOT_DIR__', dirname(__FILE__));

/** ������Ŀ¼(���·��) */
define('__TYPECHO_PLUGIN_DIR__', '/usr/plugins');

/** ����ģ��Ŀ¼(���·��) */
define('__TYPECHO_THEME_DIR__', '/usr/themes');

/** ��̨·��(���·��) */
define('__TYPECHO_ADMIN_DIR__', '/admin/');

/** ���ð���·�� */
@set_include_path(get_include_path() . PATH_SEPARATOR .
__TYPECHO_ROOT_DIR__ . '/var' . PATH_SEPARATOR .
__TYPECHO_ROOT_DIR__ . __TYPECHO_PLUGIN_DIR__);

/** ����API֧�� */
require_once 'Typecho/Common.php';

/** �����ʼ�� */
Typecho_Common::init();

/** �������ݿ���� */
$db = new Typecho_Db('Pdo_Mysql', 'typecho_');
$db->addServer(array (
  'host' => '74.48.17.20',
  'port' => 3306,
  'user' => 'typecho',
  'password' => 'typecho123',
  'charset' => 'utf8mb4',
  'database' => 'typecho',
  'engine' => 'InnoDB',
  'sslCa' => '',
  'sslVerify' => true,
), Typecho_Db::READ | Typecho_Db::WRITE);
Typecho_Db::set($db);