<?php
namespace Library;

class Ldap
{
    static function escape($string, $dn = null)
    {
        $escapeDn = array('\\', '*', '(', ')', "\x00");
        $escape   = array('\\', ',', '=', '+', '<', '>', ';', '"', '#');

        $search = array();
        if ($dn === null) {
            $search = array_merge($search, $escapeDn, $escape);
        } elseif ($dn === false) {
            $search = array_merge($search, $escape);
        } else {
            $search = array_merge($search, $escapeDn);
        }

        $replace = array();
        foreach ($search as $char) {
            $replace[] = sprintf('\\%02x', ord($char));
        }

        return str_replace($search, $replace, $string);
    }
}
