<?php

//print_r($_SERVER);die();

$sitepad['db_name'] = 'iamglenn_spad443';
$sitepad['db_user'] = 'iamglenn_spad443';
$sitepad['db_pass'] = 'I.5K!8.YqJ';
$sitepad['db_host'] = 'localhost';
$sitepad['db_table_prefix'] = 'p4W5L8r_';
$sitepad['charset'] = 'utf8mb4';
$sitepad['collate'] = 'utf8mb4_unicode_ci';
$sitepad['serving_url'] = 'iamglenn.com/builder';// URL without protocol but with directory as well
$sitepad['url'] = 'https://iamglenn.com/builder';
$sitepad['relativeurl'] = '/builder';
$sitepad['.sitepad'] = '/home/iamglenn';
$sitepad['sitepad_plugin_path'] = '/usr/local/sitepad';
$sitepad['editor_path'] = '/usr/local/sitepad/editor';
$sitepad['path'] = dirname(__FILE__);
$sitepad['AUTH_KEY'] = '5jxKUIBvtaRBV1ZxaJRmtD0Ql4Sipf7DPRtN9I9MTVIiXrjAPeEsJjufDpuFGnFX';
$sitepad['SECURE_AUTH_KEY'] = 'qflBLeszQUZt2CHY9eSepx8gTk08rvejYRDnNqIlCdStVVmtAAvS0ULOHc5KJ5YA';
$sitepad['LOGGED_IN_KEY'] = 'feZMyQb0gblQdwUUfOyiQvDOR3vuLdD9iJBOUSIxNKeIJ0jNS0JtuVV3ykj3VyV5';
$sitepad['NONCE_KEY'] = 'D3qXOOqTDIQcO1j9zkESFHJsvkKh1uYspW8sz4CFVwdIqKfD2TYsNN8ANgg0yMmi';
$sitepad['AUTH_SALT'] = 'tVIzaW9D1Ml4vsT03tUZCYSUIflijzAyZvgEYlleHupx40Ux9GZAiNdImtEV9kXm';
$sitepad['SECURE_AUTH_SALT'] = '5eBLNB9IT2GDAHMcSsbnkdaWnYRzFtrJb0KU7h3rGMNEIhrhrcbjSgAK9dCkxT70';
$sitepad['LOGGED_IN_SALT'] = 'Sjn2W02S691MiGUHuWz2ziMdOxZrqRQ5i4hMK5z9fuZb5MWRpKLUvjYlAtc942Xh';
$sitepad['NONCE_SALT'] = 'S6zcHtegi6803zJrYVtq9e2S8uWhpykDRbjpCEUpxBKvPNuxk9iJku3BUGxLuaah';

if(!include_once($sitepad['editor_path'].'/site-inc/bootstrap.php')){
	die('Could not include the bootstrap.php. One of the reasons could be open_basedir restriction !');
}

