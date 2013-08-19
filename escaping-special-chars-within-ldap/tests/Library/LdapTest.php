<?php
namespace Library;

/**
 * @backupGlobals disabled
 * @backupStaticAttributes disabled
 */
class LdapTest extends \PHPUnit_Framework_TestCase
{
    public function testEscapeWithDnAsNull()
    {
        $this->assertEquals('$\5c28\2b\3e\3b\5c29', Ldap::escape('$(+>;)'));
    }

    public function testEscapeWithDnAsTrue()
    {
        $this->assertEquals('$\28+>;\29', Ldap::escape('$(+>;)', true));
    }

    public function testEscapeWithDnAsfalse()
    {
        $this->assertEquals('$(\2b\3e\3b)', Ldap::escape('$(+>;)', false));
    }
}
