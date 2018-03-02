<?php

$config = array(
	// This is a authentication source which handles admin authentication.
    'admin' => array(
        // The default is to use core:AdminPassword, but it can be replaced with
        // any authentication source.
        'core:AdminPassword',
    ),

		'default-sp' => array(
				'saml:SP',
				'idp' => 'http://'.getenv('IDPHOST').'/adfs/services/trust',
        'privatekey' => 'saml.pem',
        'certificate' => 'saml.crt',
        'NameIDPolicy' => 'urn:oasis:names:tc:SAML:1.1:nameid-format:unspecified',
		),

);
