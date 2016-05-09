<?php
error_reporting(0);
#error_reporting(E_ALL ^ E_NOTICE);

$CONF = $TMPL = array();

// The MySQL credentials
$CONF['host'] = 'localhost';
$CONF['user'] = 'root';
$CONF['pass'] = '';
$CONF['name'] = 'plugg2';

// The Installation URL
$CONF['url'] = 'http://192.168.1.2/plugg';

// The Notifications e-mail
$CONF['email'] = 'notifications@yourdomain.com';

// The themes directory
$CONF['theme_path'] = 'themes';

$action = array('admin'			=> 'admin',
				'feed'			=> 'feed',
				'settings'		=> 'settings',
				'messages'		=> 'messages',
				'post'			=> 'post',
				'recover'		=> 'recover',
				'timeline'		=> 'timeline',
				'profile'		=> 'profile',
				'notifications'	=> 'notifications',
				'search'		=> 'search',
				'page'			=> 'page'
				);
?>
