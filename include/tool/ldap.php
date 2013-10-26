<?php
defined('is_running') or die('Not an entry point...');

$ldap_enable = true;            // Enable LDAP user authentication
$ldaphost = "localhost";        // LDAP server
$ldapport = 389;                // Default Port
$ldapadmin= 'admin_user';       // Admin user (like: 'cn=admin,dc=domain,dc=com')
$ldappasswd='admin_password';   // Admin password
$ldapgroup  = "users_group";    // Set the base tree to look for users (Normally 'ou=People,dc=domain,dc=com')
$ldapfilter = "(cn=*)";         // Set the search filter
$ldapfields = array("cn","uid","userpassword","mail");  // Choose what you wish to get from the LDAP database

