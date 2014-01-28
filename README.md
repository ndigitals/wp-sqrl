# SQRL WordPress Plugin [![Build Status](https://travis-ci.org/timnolte/sql-wp-plugin.png?branch=master)](https://travis-ci.org/timnolte/sql-wp-plugin)

A [WordPress](http://wordpress.org) plugin that implements the [SQRL](https://www.grc.com/sqrl/sqrl.htm) login system as presented by [Steve Gibson](http://grc.com).

## Initial Plugin Thoughts

1. Can we use the [WordPress built-in nonce](http://codex.wordpress.org/WordPress_Nonces) functionality to generate the SQRL nonce?
2. What libraries will we need to implement the server side crypto & key verification?
3. What user meta fields will we need to store the public key?
4. How will we create users on-the-fly without an email address prior to logging in?