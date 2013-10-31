This is a fork of the gpEasy cms with LDAP support.

List of changes : 
(1) Added file include/tool/ldap.php : contains ldap configuration
(2) Added support for LDAP within the session login without creating any gpEasy user 
    a. Changes were made directly to include/tool/session.php
    b. The login will first check for gpEasy existing users and then for LDAP users.
    c. Configuration of the LDAP server can be found in include/tool/ldap.php
(3) Removed the checked box "encrypted" by default so that the LDAP can manage password.
    a. No password is stored.

#gpEasy-CMS#

Open source CMS written in PHP focused on ease of use with true WYSIWYG editing and flat-file storage.
* [gpEasy Home](http://gpeasy.com)
* [gpEasy Download](http://gpeasy.com/Download)
* [gpEasy Demo](http://gpeasy.com/Demo)
* [gpEasy Forum](http://gpeasy.com/Special_Forum)

##Contribute##
Submitting bug fixes and enhancements is easy:

1. Log in to GitHub

2. Fork the gpEasy Repository
  * https://github.com/oyejorge/gpEasy-CMS
  * Click "Fork" and you'll have your very own copy of the gpEasy source code at http://github.com/{your-username}/gpEasy-CMS

3. Edit files within your fork.
  This can be done directly on GitHub.com at http://github.com/{your-username}/gpEasy-CMS

4. Submit a Pull Request (tell gpEasy about your changes)
  * Click "Pull Prequest"
  * Enter a Message that will go with your commit to be reviewed by core committers
  * Click “Send Pull Request”

###Multiple Pull Requests and Edits###
When submitting pull requests, it is extremely helpful to isolate the changes you want included from other unrelated changes you may have made to your fork of gpEasy. The easiest way to accomplish this is to use a different branch for each pull request. There are a number of ways to create branches within your fork, but GitHub makes the process very easy:

1. Start by finding the file you want to edit in gpEasy's code repository at https://github.com/oyejorge/gpEasy-CMS.
2. Once you have located the file, navigate to the code view and click "Edit". For example, if you want to change the /include/common.php file, the "Edit" button would appear on this page: https://github.com/oyejorge/gpEasy-CMS/blob/master/include/common.php
3. Now, edit the file as you like then click "Propose File Change"
