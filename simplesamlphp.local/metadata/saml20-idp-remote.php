<?php
/**
 * SAML 2.0 remote IdP metadata for simpleSAMLphp.
 *
 * Remember to remove the IdPs you don't use from this file.
 *
 * See: https://rnd.feide.no/content/idp-remote-metadata-reference
 */

/*
 * SURFconext Proxy IdP
 */


$metadata['https://engine.surfconext.nl/authentication/idp/metadata'] = array (
  'entityid' => 'https://engine.surfconext.nl/authentication/idp/metadata',
  'name' => 
  array (
    'en' => 'Login with an account of a Dutch Institution',
  ),
  'description' => 
  array (
    'en' => 'an institution account provided by SURFconext',
  ),
  'OrganizationName' => 
  array (
    'en' => 'SURFconext',
  ),
  'OrganizationDisplayName' => 
  array (
    'en' => 'SURFconext',
  ),
  'url' => 
  array (
    'en' => 'http://www.surfnet.nl',
  ),
  'OrganizationURL' => 
  array (
    'en' => 'http://www.surfnet.nl',
  ),
  'contacts' => 
  array (
    0 => 
    array (
      'contactType' => 'administrative',
      'givenName' => 'SURFconext-beheer',
      'emailAddress' => 
      array (
        0 => 'SURFconext-beheer@surfnet.nl',
      ),
    ),
    1 => 
    array (
      'contactType' => 'technical',
      'givenName' => 'SURFconext-beheer',
      'emailAddress' => 
      array (
        0 => 'SURFconext-beheer@surfnet.nl',
      ),
    ),
    2 => 
    array (
      'contactType' => 'support',
      'givenName' => 'SURFconext support',
      'emailAddress' => 
      array (
        0 => 'help@surfconext.nl',
      ),
    ),
  ),
  'metadata-set' => 'saml20-idp-remote',
  //'expire' => 1378209567,
  'SingleSignOnService' => 
  array (
    0 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' => 'https://engine.surfconext.nl/authentication/idp/single-sign-on',
    ),
  ),
  'SingleLogoutService' => 
  array (
  ),
  'ArtifactResolutionService' => 
  array (
  ),
  'keys' => 
  array (
    0 => 
    array (
      'encryption' => false,
      'signing' => true,
      'type' => 'X509Certificate',
      'X509Certificate' => 'MIIDyzCCArOgAwIBAgIJAMzixtXMUH1NMA0GCSqGSIb3DQEBBQUAMHwxCzAJBgNV
BAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYD
VQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxHTAbBgNVBAMM
FGVuZ2luZS5zdXJmY29uZXh0Lm5sMB4XDTExMDEyNDEwMTg1N1oXDTIxMDEyMzEw
MTg1N1owfDELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcM
B1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNv
bmV4dDEdMBsGA1UEAwwUZW5naW5lLnN1cmZjb25leHQubmwwggEiMA0GCSqGSIb3
DQEBAQUAA4IBDwAwggEKAoIBAQDMJ6v+f3owS3KR5IXSil+3XFwGvCVeYx3jDOFK
AnwvXlDpTu+t730b8/spHtlopyJVAlb6qBIPN7R4TGTLqiu0zebYsYx/PtqCk5cb
u9qs3h+p2BBoTXVwXA/ZYi0tqtxp04hcNrRj1TAgLyC0S+KASTF+zzccAcjTBid5
EMioo+YllgSEobWJ4X33XVRqNrikAPDsNmDrdKUi257JSO2xhVIG5lbtmDaL5ORC
D56oRmVdp7VQTEQ3Yass8J5Rn+Ub6WmRBYeG+KzFBvtyBput2o0/gvtJn9L+NWeD
B0LyUPaUYG/X4GF14FcmFQfz7I5jBCNHtPcLJbPYbZKQNhz/AgMBAAGjUDBOMB0G
A1UdDgQWBBS9QqP8gtMM6nm4oYzNbgqhEDP1aDAfBgNVHSMEGDAWgBS9QqP8gtMM
6nm4oYzNbgqhEDP1aDAMBgNVHRMEBTADAQH/MA0GCSqGSIb3DQEBBQUAA4IBAQBH
2qyYwLwesIOxUTj+NJ0VXRBDH8VecNLiUUs9Np4x8A0pxLvlNnv5TdJAruEg1LSV
mAqqPUdAB2m7CKDeUVM9cwOB7vqelV2GNgOfevXi+DZRMffyyE8qyIcnTqvDOgcR
8qGTPSVT+SIsOkV9bYrjltrbnal7cJermsA8SC5w/pjLaOHI1xIZHquZzymWoN3Z
fz2CQg2r5o+AURYd74GrHhHqVa9VrdWtcimB+vTQQihoLt8YciehpJjOMpx2D66e
FfpC8ix31RRdjAVIo1y33h1yU3gEHePDbOthZE+lpXi2WJqO85H85LqJOtgn2WPI
3P2Tx32Cq1WXCYkxLaPI
',
    ),
  ),
  'UIInfo' => 
  array (
    'DisplayName' => 
    array (
      'nl' => 'SURFconext',
      'en' => 'SURFconext',
    ),
    'Description' => 
    array (
      'nl' => 'SURFconext',
      'en' => 'SURFconext',
    ),
    'InformationURL' => 
    array (
    ),
    'PrivacyStatementURL' => 
    array (
    ),
    'Keywords' => 
    array (
      'nl' => 
      array (
        0 => 'SURFconext',
      ),
      'en' => 
      array (
        0 => 'SURFconext',
      ),
    ),
    'Logo' => 
    array (
      0 => 
      array (
        'url' => 'https://support.surfconext.nl/simplesaml/surfconext.png',
        'height' => 100,
        'width' => 186,
      ),
    ),
  ),
);



/*
 * GUEST IdPs
 */


$metadata['https://surfguest.nl'] = array (
  'entityid' => 'https://surfguest.nl',
  'name' => 
  array (
    'en' => 'SURFguest | SURFnet',
  ),
  'description' => 
  array (
    'en' => 'SURFguest provided by SURFnet',
  ),
  'OrganizationName' => 
  array (
    'en' => 'SURFguest',
  ),
  'OrganizationDisplayName' => 
  array (
    'en' => 'SURFguest',
  ),
  'url' => 
  array (
    'en' => 'https://www.surfguest.nl/',
  ),
  'OrganizationURL' => 
  array (
    'en' => 'https://www.surfguest.nl/',
  ),
  'contacts' => 
  array (
    0 => 
    array (
      'contactType' => 'administrative',
      'givenName' => 'SURFconext-beheer',
      'emailAddress' => 
      array (
        0 => 'SURFconext-beheer@surfnet.nl',
      ),
    ),
    1 => 
    array (
      'contactType' => 'technical',
      'givenName' => 'SURFconext-beheer',
      'emailAddress' => 
      array (
        0 => 'SURFconext-beheer@surfnet.nl',
      ),
    ),
    2 => 
    array (
      'contactType' => 'support',
      'givenName' => 'SURFconext support',
      'emailAddress' => 
      array (
        0 => 'help@surfconext.nl',
      ),
    ),
  ),
  'metadata-set' => 'saml20-idp-remote',
//  'expire' => 1378204460,
  'SingleSignOnService' => 'https://engine.surfconext.nl/authentication/idp/single-sign-on/30b61f54ce26e69e555d504342eb176c',
  'SingleLogoutService' => 
  array (
  ),
  'ArtifactResolutionService' => 
  array (
  ),
  'keys' => 
  array (
    0 => 
    array (
      'encryption' => false,
      'signing' => true,
      'type' => 'X509Certificate',
      'X509Certificate' => 'MIIDyzCCArOgAwIBAgIJAMzixtXMUH1NMA0GCSqGSIb3DQEBBQUAMHwxCzAJBgNV
BAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYD
VQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxHTAbBgNVBAMM
FGVuZ2luZS5zdXJmY29uZXh0Lm5sMB4XDTExMDEyNDEwMTg1N1oXDTIxMDEyMzEw
MTg1N1owfDELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcM
B1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNv
bmV4dDEdMBsGA1UEAwwUZW5naW5lLnN1cmZjb25leHQubmwwggEiMA0GCSqGSIb3
DQEBAQUAA4IBDwAwggEKAoIBAQDMJ6v+f3owS3KR5IXSil+3XFwGvCVeYx3jDOFK
AnwvXlDpTu+t730b8/spHtlopyJVAlb6qBIPN7R4TGTLqiu0zebYsYx/PtqCk5cb
u9qs3h+p2BBoTXVwXA/ZYi0tqtxp04hcNrRj1TAgLyC0S+KASTF+zzccAcjTBid5
EMioo+YllgSEobWJ4X33XVRqNrikAPDsNmDrdKUi257JSO2xhVIG5lbtmDaL5ORC
D56oRmVdp7VQTEQ3Yass8J5Rn+Ub6WmRBYeG+KzFBvtyBput2o0/gvtJn9L+NWeD
B0LyUPaUYG/X4GF14FcmFQfz7I5jBCNHtPcLJbPYbZKQNhz/AgMBAAGjUDBOMB0G
A1UdDgQWBBS9QqP8gtMM6nm4oYzNbgqhEDP1aDAfBgNVHSMEGDAWgBS9QqP8gtMM
6nm4oYzNbgqhEDP1aDAMBgNVHRMEBTADAQH/MA0GCSqGSIb3DQEBBQUAA4IBAQBH
2qyYwLwesIOxUTj+NJ0VXRBDH8VecNLiUUs9Np4x8A0pxLvlNnv5TdJAruEg1LSV
mAqqPUdAB2m7CKDeUVM9cwOB7vqelV2GNgOfevXi+DZRMffyyE8qyIcnTqvDOgcR
8qGTPSVT+SIsOkV9bYrjltrbnal7cJermsA8SC5w/pjLaOHI1xIZHquZzymWoN3Z
fz2CQg2r5o+AURYd74GrHhHqVa9VrdWtcimB+vTQQihoLt8YciehpJjOMpx2D66e
FfpC8ix31RRdjAVIo1y33h1yU3gEHePDbOthZE+lpXi2WJqO85H85LqJOtgn2WPI
3P2Tx32Cq1WXCYkxLaPI
',
    ),
  ),
  'UIInfo' => 
  array (
    'DisplayName' => 
    array (
      'nl' => 'SURFguest',
      'en' => 'SURFguest',
    ),
    'Description' => 
    array (
      'nl' => 'SURFguest',
      'en' => 'SURFguest',
    ),
    'InformationURL' => 
    array (
    ),
    'PrivacyStatementURL' => 
    array (
    ),
    'Keywords' => 
    array (
      'nl' => 
      array (
        0 => 'SURFguest',
        1 => 'Guest',
        2 => '',
      ),
      'en' => 
      array (
        0 => 'SURFguest',
        1 => 'Guest',
        2 => '',
      ),
    ),
    'Logo' => 
    array (
      0 => 
      array (
        'url' => 'https://static.surfconext.nl/media/idp/surfguest.png',
        'height' => 51,
        'width' => 107,
      ),
    ),
  ),
);


$metadata['https://www.onegini.me'] = array (
  'entityid' => 'https://www.onegini.me',
  'name' => 
  array (
    'nl' => 'Social ID | Onegini',
    'en' => 'Social ID | Onegini',
  ),
  'description' => 
  array (
    'nl' => 'Social ID provided by Onegini',
    'en' => 'Social ID provided by Onegini',
  ),
  'OrganizationName' => 
  array (
    'nl' => 'Social ID | Onegini',
    'en' => 'Social ID | Onegini',
  ),
  'OrganizationDisplayName' => 
  array (
    'nl' => 'Social ID | Onegini',
    'en' => 'Social ID | Onegini',
  ),
  'url' => 
  array (
    'nl' => 'https://www.onegini.me',
    'en' => 'https://www.onegini.me',
  ),
  'OrganizationURL' => 
  array (
    'nl' => 'https://www.onegini.me',
    'en' => 'https://www.onegini.me',
  ),
  'contacts' => 
  array (
    0 => 
    array (
      'contactType' => 'administrative',
      'givenName' => 'SURFconext-beheer',
      'emailAddress' => 
      array (
        0 => 'SURFconext-beheer@surfnet.nl',
      ),
    ),
    1 => 
    array (
      'contactType' => 'technical',
      'givenName' => 'SURFconext-beheer',
      'emailAddress' => 
      array (
        0 => 'SURFconext-beheer@surfnet.nl',
      ),
    ),
    2 => 
    array (
      'contactType' => 'support',
      'givenName' => 'SURFconext support',
      'emailAddress' => 
      array (
        0 => 'help@surfconext.nl',
      ),
    ),
  ),
  'metadata-set' => 'saml20-idp-remote',
//  'expire' => 1378204460,
  'SingleSignOnService' => 
  array (
    0 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' => 'https://engine.surfconext.nl/authentication/idp/single-sign-on/3cf3bf617d0e74a8a017da40ff10ff5d',
    ),
  ),
  'SingleLogoutService' => 
  array (
  ),
  'ArtifactResolutionService' => 
  array (
  ),
  'keys' => 
  array (
    0 => 
    array (
      'encryption' => false,
      'signing' => true,
      'type' => 'X509Certificate',
      'X509Certificate' => 'MIIDyzCCArOgAwIBAgIJAMzixtXMUH1NMA0GCSqGSIb3DQEBBQUAMHwxCzAJBgNV
BAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYD
VQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxHTAbBgNVBAMM
FGVuZ2luZS5zdXJmY29uZXh0Lm5sMB4XDTExMDEyNDEwMTg1N1oXDTIxMDEyMzEw
MTg1N1owfDELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcM
B1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNv
bmV4dDEdMBsGA1UEAwwUZW5naW5lLnN1cmZjb25leHQubmwwggEiMA0GCSqGSIb3
DQEBAQUAA4IBDwAwggEKAoIBAQDMJ6v+f3owS3KR5IXSil+3XFwGvCVeYx3jDOFK
AnwvXlDpTu+t730b8/spHtlopyJVAlb6qBIPN7R4TGTLqiu0zebYsYx/PtqCk5cb
u9qs3h+p2BBoTXVwXA/ZYi0tqtxp04hcNrRj1TAgLyC0S+KASTF+zzccAcjTBid5
EMioo+YllgSEobWJ4X33XVRqNrikAPDsNmDrdKUi257JSO2xhVIG5lbtmDaL5ORC
D56oRmVdp7VQTEQ3Yass8J5Rn+Ub6WmRBYeG+KzFBvtyBput2o0/gvtJn9L+NWeD
B0LyUPaUYG/X4GF14FcmFQfz7I5jBCNHtPcLJbPYbZKQNhz/AgMBAAGjUDBOMB0G
A1UdDgQWBBS9QqP8gtMM6nm4oYzNbgqhEDP1aDAfBgNVHSMEGDAWgBS9QqP8gtMM
6nm4oYzNbgqhEDP1aDAMBgNVHRMEBTADAQH/MA0GCSqGSIb3DQEBBQUAA4IBAQBH
2qyYwLwesIOxUTj+NJ0VXRBDH8VecNLiUUs9Np4x8A0pxLvlNnv5TdJAruEg1LSV
mAqqPUdAB2m7CKDeUVM9cwOB7vqelV2GNgOfevXi+DZRMffyyE8qyIcnTqvDOgcR
8qGTPSVT+SIsOkV9bYrjltrbnal7cJermsA8SC5w/pjLaOHI1xIZHquZzymWoN3Z
fz2CQg2r5o+AURYd74GrHhHqVa9VrdWtcimB+vTQQihoLt8YciehpJjOMpx2D66e
FfpC8ix31RRdjAVIo1y33h1yU3gEHePDbOthZE+lpXi2WJqO85H85LqJOtgn2WPI
3P2Tx32Cq1WXCYkxLaPI
',
    ),
  ),
  'UIInfo' => 
  array (
    'DisplayName' => 
    array (
    ),
    'Description' => 
    array (
      'nl' => 'In Onegini kunt u uw digitale identiteit aanmaken en beheren. U kunt in Onegini inloggen met een account dat u vaker gebruikt en daarom eenvoudiger te onthouden is.',
      'en' => 'In Onegini you can create and maintain your digital identity. You can log in with Onegini using an account you use more often so it\'s easier to remember.',
    ),
    'InformationURL' => 
    array (
    ),
    'PrivacyStatementURL' => 
    array (
    ),
    'Keywords' => 
    array (
      'nl' => 
      array (
        0 => 'onegini',
        1 => 'gini',
        2 => 'gast',
        3 => 'guest',
        4 => 'gastgebruik',
        5 => 'gastaccount',
        6 => 'SURFguest',
        7 => 'Facebook',
        8 => 'Twitter',
        9 => 'LinkedIn',
      ),
      'en' => 
      array (
        0 => 'onegini',
        1 => 'gini',
        2 => 'guest',
        3 => 'SURFguest',
        4 => 'Facebook',
        5 => 'Twitter',
        6 => 'LinkedIn',
      ),
    ),
    'Logo' => 
    array (
      0 => 
      array (
        'url' => 'https://static.surfconext.nl/media/idp/Onegini.png',
        'height' => 48,
        'width' => 108,
      ),
    ),
  ),
);

$metadata['https://openidp.feide.no'] = array (
  'entityid' => 'https://openidp.feide.no',
  'name' => 
  array (
    'en' => 'OpenIDP | Provided by Feide',
  ),
  'description' => 
  array (
    'en' => 'OpenIdP provided by Feide.no',
  ),
  'OrganizationName' => 
  array (
    'en' => 'Feide.no',
  ),
  'OrganizationDisplayName' => 
  array (
    'en' => 'OpenIDP | Provided by Feide',
  ),
  'url' => 
  array (
    'en' => 'https://openidp.feide.no',
  ),
  'OrganizationURL' => 
  array (
    'en' => 'https://openidp.feide.no',
  ),
  'contacts' => 
  array (
    0 => 
    array (
      'contactType' => 'administrative',
      'givenName' => 'SURFconext-beheer',
      'emailAddress' => 
      array (
        0 => 'SURFconext-beheer@surfnet.nl',
      ),
    ),
    1 => 
    array (
      'contactType' => 'technical',
      'givenName' => 'SURFconext-beheer',
      'emailAddress' => 
      array (
        0 => 'SURFconext-beheer@surfnet.nl',
      ),
    ),
    2 => 
    array (
      'contactType' => 'support',
      'givenName' => 'SURFconext support',
      'emailAddress' => 
      array (
        0 => 'help@surfconext.nl',
      ),
    ),
  ),
  'metadata-set' => 'saml20-idp-remote',
//  'expire' => 1378204460,
  'SingleSignOnService' => 
  array (
    0 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' => 'https://engine.surfconext.nl/authentication/idp/single-sign-on/0b7a0833f06d1ad3dca72caa47e0de4c',
    ),
  ),
  'SingleLogoutService' => 
  array (
  ),
  'ArtifactResolutionService' => 
  array (
  ),
  'keys' => 
  array (
    0 => 
    array (
      'encryption' => false,
      'signing' => true,
      'type' => 'X509Certificate',
      'X509Certificate' => 'MIIDyzCCArOgAwIBAgIJAMzixtXMUH1NMA0GCSqGSIb3DQEBBQUAMHwxCzAJBgNV
BAYTAk5MMRAwDgYDVQQIDAdVdHJlY2h0MRAwDgYDVQQHDAdVdHJlY2h0MRUwEwYD
VQQKDAxTVVJGbmV0IEIuVi4xEzARBgNVBAsMClNVUkZjb25leHQxHTAbBgNVBAMM
FGVuZ2luZS5zdXJmY29uZXh0Lm5sMB4XDTExMDEyNDEwMTg1N1oXDTIxMDEyMzEw
MTg1N1owfDELMAkGA1UEBhMCTkwxEDAOBgNVBAgMB1V0cmVjaHQxEDAOBgNVBAcM
B1V0cmVjaHQxFTATBgNVBAoMDFNVUkZuZXQgQi5WLjETMBEGA1UECwwKU1VSRmNv
bmV4dDEdMBsGA1UEAwwUZW5naW5lLnN1cmZjb25leHQubmwwggEiMA0GCSqGSIb3
DQEBAQUAA4IBDwAwggEKAoIBAQDMJ6v+f3owS3KR5IXSil+3XFwGvCVeYx3jDOFK
AnwvXlDpTu+t730b8/spHtlopyJVAlb6qBIPN7R4TGTLqiu0zebYsYx/PtqCk5cb
u9qs3h+p2BBoTXVwXA/ZYi0tqtxp04hcNrRj1TAgLyC0S+KASTF+zzccAcjTBid5
EMioo+YllgSEobWJ4X33XVRqNrikAPDsNmDrdKUi257JSO2xhVIG5lbtmDaL5ORC
D56oRmVdp7VQTEQ3Yass8J5Rn+Ub6WmRBYeG+KzFBvtyBput2o0/gvtJn9L+NWeD
B0LyUPaUYG/X4GF14FcmFQfz7I5jBCNHtPcLJbPYbZKQNhz/AgMBAAGjUDBOMB0G
A1UdDgQWBBS9QqP8gtMM6nm4oYzNbgqhEDP1aDAfBgNVHSMEGDAWgBS9QqP8gtMM
6nm4oYzNbgqhEDP1aDAMBgNVHRMEBTADAQH/MA0GCSqGSIb3DQEBBQUAA4IBAQBH
2qyYwLwesIOxUTj+NJ0VXRBDH8VecNLiUUs9Np4x8A0pxLvlNnv5TdJAruEg1LSV
mAqqPUdAB2m7CKDeUVM9cwOB7vqelV2GNgOfevXi+DZRMffyyE8qyIcnTqvDOgcR
8qGTPSVT+SIsOkV9bYrjltrbnal7cJermsA8SC5w/pjLaOHI1xIZHquZzymWoN3Z
fz2CQg2r5o+AURYd74GrHhHqVa9VrdWtcimB+vTQQihoLt8YciehpJjOMpx2D66e
FfpC8ix31RRdjAVIo1y33h1yU3gEHePDbOthZE+lpXi2WJqO85H85LqJOtgn2WPI
3P2Tx32Cq1WXCYkxLaPI
',
    ),
  ),
  'UIInfo' => 
  array (
    'DisplayName' => 
    array (
      'nl' => 'OpenIDP | Provided by Feide',
      'en' => 'OpenIDP | Provided by Feide',
    ),
    'Description' => 
    array (
      'nl' => 'OpenIdP (Feide.no)',
      'en' => 'OpenIdP (Feide.no)',
    ),
    'InformationURL' => 
    array (
    ),
    'PrivacyStatementURL' => 
    array (
    ),
    'Keywords' => 
    array (
      'nl' => 
      array (
        0 => 'OpenIdP',
        1 => '(Feide.no)',
      ),
      'en' => 
      array (
        0 => 'OpenIdP',
        1 => '(Feide.no)',
      ),
    ),
    'Logo' => 
    array (
      0 => 
      array (
        'url' => 'https://static.surfconext.nl/media/idp/OpenIdP.png',
        'height' => 38,
        'width' => 165,
      ),
    ),
  ),
);

?>
