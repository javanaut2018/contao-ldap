<?php

namespace Refulgent\ContaoLDAPSupportBundle\Legacy\Ldap;

class LdapUserGroupModel extends LdapPersonGroupModel
{
    protected static $strPrefix          = 'User';
    protected static $strLocalModel      = '\UserModel';
    protected static $strLocalGroupModel = '\UserGroupModel';
    protected static $strLdapModel       = 'Refulgent\ContaoLDAPSupportBundle\Legacy\Ldap\LdapUserModel';
    protected static $strLdapGroupModel  = 'Refulgent\ContaoLDAPSupportBundle\Legacy\Ldap\LdapUserGroupModel';
}