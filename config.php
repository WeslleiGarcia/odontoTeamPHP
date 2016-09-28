<?php
/** caminho absoluto para a pasta do sistema **/
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** caminho no server para o sistema **/
if ( !defined('BASEURL') )
	define('BASEURL', '/OdontoTeam/');

	/** caminhos dos templates de header e footer **/
define('HEAD_TEMPLATE', ABSPATH . 'inc/head.php');
define('HEADER_TEMPLATE', ABSPATH . 'inc/header.php');
define('FOOTER_TEMPLATE', ABSPATH . 'inc/footer.php');
define('NAV_ADMIN_TEMPLATE', ABSPATH . 'inc/navbarAdmin.php');
define('NAV_INDEX_TEMPLATE', ABSPATH . 'inc/navbarIndex.php');
define('MODAL_LOGIN_TEMPLATE', ABSPATH . 'inc/modalLogin.php');