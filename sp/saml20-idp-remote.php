<?php
/**
 * SAML 2.0 remote IdP metadata for simpleSAMLphp.
 *
 * Remember to remove the IdPs you don't use from this file.
 *
 * See: https://simplesamlphp.org/docs/stable/simplesamlphp-reference-idp-remote
 */

/*
 * Following part is to be regenerated. Use the meta data converter and put the XML of the IDP metadata
 */
 $metadata['http://'.getenv('IDPHOST').'/adfs/services/trust'] = array (
   'entityid' => 'http://'.getenv('IDPHOST').'/adfs/services/trust',
   'contacts' =>
   array (
   ),
   'metadata-set' => 'saml20-idp-remote',
   'SingleSignOnService' =>
   array (
     0 =>
     array (
       'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
       'Location' => 'https://'.getenv('IDPHOST').'/adfs/ls/',
     ),
     1 =>
     array (
       'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
       'Location' => 'https://'.getenv('IDPHOST').'/adfs/ls/',
     ),
   ),
   'SingleLogoutService' =>
   array (
     0 =>
     array (
       'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
       'Location' => 'https://'.getenv('IDPHOST').'/adfs/ls/',
     ),
     1 =>
     array (
       'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
       'Location' => 'https://'.getenv('IDPHOST').'/adfs/ls/',
     ),
   ),
   'ArtifactResolutionService' =>
   array (
   ),
   'NameIDFormats' =>
   array (
     0 => 'urn:oasis:names:tc:SAML:1.1:nameid-format:emailAddress',
     1 => 'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
     2 => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
   ),
   'keys' =>
   array (
     0 =>
     array (
       'encryption' => true,
       'signing' => false,
       'type' => 'X509Certificate',
       'X509Certificate' => getenv('IDP_ENCRYPTION_CERT'),
     ),
     1 =>
     array (
       'encryption' => false,
       'signing' => true,
       'type' => 'X509Certificate',
       'X509Certificate' => getenv('IDP_SIGN_CERT'),
     ),
   ),
 );
