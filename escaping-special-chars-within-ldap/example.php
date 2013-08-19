<?php
require 'Library/Ldap.php';
use Library\Ldap;


$user = '*)(username=test+1234@gpierrerambaud.com)';
var_dump("cn=" . Ldap::escape($user));
//string(64) "cn=\5c2a\5c29\5c28username\3dtest\2b1234@gpierrerambaud.com\5c29"
var_dump("cn=" . Ldap::escape($user, true));
//string(52) "cn=\2a\29\28username=test+1234@gpierrerambaud.com\29"
var_dump("cn=" . Ldap::escape($user, false));
//string(48) "cn=*)(username\3dtest\>2b1234@gpierrerambaud.com)"
