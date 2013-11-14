	SAMLmetaJS.Constants = {
		'ns' : {
			'md': "urn:oasis:names:tc:SAML:2.0:metadata",
			'mdui': "urn:oasis:names:tc:SAML:metadata:ui",
			'mdattr': "urn:oasis:names:tc:SAML:metadata:attribute",
			'saml': "urn:oasis:names:tc:SAML:2.0:assertion",
			'init': "urn:oasis:names:tc:SAML:profiles:SSO:request-init",
			'idpdisc': "urn:oasis:names:tc:SAML:profiles:SSO:idp-discovery-protocol",
			'xsd': "http://www.w3.org/2001/XMLSchema",
			'ds': "http://www.w3.org/2000/09/xmldsig#",
			'xenc': "http://www.w3.org/2001/04/xmlenc#"
		},
		'certusage': {
			'both': 'Both',
			'signing': 'Signing',
			'encryption': 'Encryption'
		},
		'algorithms': {
			'http://www.w3.org/2001/04/xmlenc#tripledes-cbc': 'TRIPLEDES',
			'http://www.w3.org/2001/04/xmlenc#aes128-cbc': 'AES-128',
			'http://www.w3.org/2001/04/xmlenc#aes256-cbc': 'AES-256',
			'http://www.w3.org/2001/04/xmlenc#aes192-cbc': 'AES-192',
			'http://www.w3.org/2001/04/xmlenc#rsa-1_5': 'RSA-v1.5',
			'http://www.w3.org/2001/04/xmlenc#rsa-oaep-mgf1p': 'RSA-OAEP',
			'http://www.w3.org/2001/04/xmlenc#dh': 'Diffie-Hellman',
			'http://www.w3.org/2001/04/xmlenc#kw-tripledes': 'TRIPLEDES KeyWrap',
			'http://www.w3.org/2001/04/xmlenc#kw-aes128': 'AES-128 KeyWrap',
			'http://www.w3.org/2001/04/xmlenc#kw-aes256': 'AES-256 KeyWrap',
			'http://www.w3.org/2001/04/xmlenc#kw-aes192': 'AES-192 KeyWrap',
			'http://www.w3.org/2000/09/xmldsig#sha1': 'SHA1',
			'http://www.w3.org/2001/04/xmlenc#sha256': 'SHA256',
			'http://www.w3.org/2001/04/xmlenc#sha512': 'SHA512',
			'http://www.w3.org/2001/04/xmlenc#ripemd160': 'RIPEMD-160',
			'http://www.w3.org/2000/09/xmldsig#': 'XML Digital Signature',
			'http://www.w3.org/TR/2001/REC-xml-c14n-20010315': 'Canonical XML (omits comments)',
			'http://www.w3.org/TR/2001/REC-xml-c14n-20010315#WithComments': 'Canonical XML with Comments',
			'http://www.w3.org/2001/10/xml-exc-c14n#': 'Exclusive XML Canonicalization (omits comments)',
			'http://www.w3.org/2001/10/xml-exc-c14n#WithComments': 'Exclusive XML Canonicalization with Comments',
			'http://www.w3.org/2000/09/xmldsig#base64': 'base64'
		},
		'languages': {
			'en': 'English',
			'nl': 'Nederlands'
		},
		'contactTypes' : {
			'administrative' : 'Administrative',
			'technical': 'Technical',
			'support': 'Support',
			'billing': 'Billing',
			//'other': 'Other'
		},
		'endpointTypes' : {
			'sp': {
				'ArtifactResolutionService': 'ArtifactResolutionService',
				'AssertionConsumerService': 'AssertionConsumerService',
				'ManageNameIDService': 'ManageNameIDService',
				'SingleLogoutService': 'SingleLogoutService',
				// Extensions defined at Service Provider Request Initiation Protocol and Profile Version 1.0
				'RequestInitiator': 'RequestInitiator',
				'DiscoveryResponse': 'DiscoveryResponse'
			},
			'idp' : {
				'ArtifactResolutionService': 'ArtifactResolutionService',
				'AssertionIDRequestService': 'AssertionIDRequestService',
				'ManageNameIDService': 'ManageNameIDService',
				'NameIDMappingService': 'NameIDMappingService',
				'SingleLogoutService': 'SingleLogoutService',
				'SingleSignOnService': 'SingleSignOnService'
			}
		},
		'bindings': {
			'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect': 'HTTP Redirect',
			'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST': 'HTTP POST',
			'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Artifact': 'HTTP Artifact',
		},
		'attributes' : {
			'urn:oid:0.9.2342.19200300.100.1.1': '&nbsp;<b>UID</b><br>&nbsp;&nbsp;&nbsp;&nbsp;(urn:oid:0.9.2342.19200300.100.1.1)<br>&nbsp;&nbsp;&nbsp;&nbsp;(urn:mace:dir:attribute-def:uid)<br>&nbsp;',
			'urn:oid:0.9.2342.19200300.100.1.3': '&nbsp;<b>Mail</b><br>&nbsp;&nbsp;&nbsp;&nbsp;(urn:oid:0.9.2342.19200300.100.1.3)<br>&nbsp;&nbsp;&nbsp;&nbsp;(urn:mace:dir:attribute-def:mail)<br>&nbsp;',
			'urn:oid:2.16.840.1.113730.3.1.241': '&nbsp;<b>Display Name</b><br>&nbsp;&nbsp;&nbsp;&nbsp;(urn:oid:2.16.840.1.113730.3.1.241)<br>&nbsp;&nbsp;&nbsp;&nbsp;(urn:mace:dir:attribute-def:displayName)<br>&nbsp;',
			'urn:oid:2.5.4.3': '&nbsp;<b>Common Name</b><br>&nbsp;&nbsp;&nbsp;&nbsp;(urn:oid:2.5.4.3)<br>&nbsp;&nbsp;&nbsp;&nbsp;(urn:mace:dir:attribute-def:cn)<br>&nbsp;',
			'urn:oid:2.5.4.4': '&nbsp;<b>Surname</b><br>&nbsp;&nbsp;&nbsp;&nbsp;(urn:oid:2.5.4.4)<br>&nbsp;&nbsp;&nbsp;&nbsp;(urn:mace:dir:attribute-def:sn)<br>&nbsp;',
			'urn:oid:2.5.4.42': '&nbsp;<b>Given Name</b><br>&nbsp;&nbsp;&nbsp;&nbsp;(urn:oid:2.5.4.42)<br>&nbsp;&nbsp;&nbsp;&nbsp;(urn:mace:dir:attribute-def:givenName)<br>&nbsp;',
			'urn:oid:1.3.6.1.4.1.5923.1.1.1.1': '&nbsp;<b>eduPersonAffiliation</b><br>&nbsp;&nbsp;&nbsp;&nbsp;(urn:oid:1.3.6.1.4.1.5923.1.1.1.1)<br>&nbsp;&nbsp;&nbsp;&nbsp;(urn:mace:dir:attribute-def:eduPersonAffiliation)<br>&nbsp;',
			'urn:oid:1.3.6.1.4.1.5923.1.1.1.10': '&nbsp;<b>eduPersonTargetedID</b><br>&nbsp;&nbsp;&nbsp;&nbsp;(urn:oid:1.3.6.1.4.1.5923.1.1.1.10)<br>&nbsp;&nbsp;&nbsp;&nbsp;(urn:mace:dir:attribute-def:eduPersonTargetedID)<br>&nbsp;',
			'urn:oid:1.3.6.1.4.1.5923.1.1.1.6': '&nbsp;<b>eduPersonPrincipalName</b><br>&nbsp;&nbsp;&nbsp;&nbsp;(urn:oid:1.3.6.1.4.1.5923.1.1.1.6)<br>&nbsp;&nbsp;&nbsp;&nbsp;(urn:mace:dir:attribute-def:eduPersonPrincipalName)<br>&nbsp;',
			'urn:oid:1.3.6.1.4.1.5923.1.1.1.7': '&nbsp;<b>eduPersonEntitlement</b><br>&nbsp;&nbsp;&nbsp;&nbsp;(urn:oid:1.3.6.1.4.1.5923.1.1.1.7)<br>&nbsp;&nbsp;&nbsp;&nbsp;(urn:mace:dir:attribute-def:eduPersonEntitlement)<br>&nbsp;',
			'urn:oid:1.3.6.1.4.1.5923.1.5.1.1': '&nbsp;<b>isMemberOf</b><br>&nbsp;&nbsp;&nbsp;&nbsp;(urn:oid:1.3.6.1.4.1.5923.1.5.1.1)<br>&nbsp;&nbsp;&nbsp;&nbsp;(urn:mace:dir:attribute-def:eduPersonEntitlement)<br>&nbsp;',
			'urn:oid:1.3.6.1.4.1.25178.1.2.9': '&nbsp;<b>Home Organisation</b><br>&nbsp;&nbsp;&nbsp;&nbsp;(urn:oid:1.3.6.1.4.1.25178.1.2.9)<br>&nbsp;&nbsp;&nbsp;&nbsp;(urn:mace:terena.org:attribute-def:schacHomeOrganization)<br>&nbsp;',
			'urn:oid:1.3.6.1.4.1.25178.1.2.10': '&nbsp;<b>Home Organisation Type</b><br>&nbsp;&nbsp;&nbsp;&nbsp;(urn:oid:1.3.6.1.4.1.25178.1.2.9)<br>&nbsp;&nbsp;&nbsp;&nbsp;(urn:mace:terena.org:attribute-def:schacHomeOrganizationType)<br>&nbsp;',
			'urn:oid:2.16.840.1.113730.3.1.39': '&nbsp;<b>Preferred Language</b><br>&nbsp;&nbsp;&nbsp;&nbsp;(urn:oid:1.3.6.1.4.1.25178.1.2.9)<br>&nbsp;&nbsp;&nbsp;&nbsp;(urn:mace:terena.org:attribute-def:schacHomeOrganization)<br>&nbsp;',
		},
		'attributeDescriptions' : {
			'urn:oid:0.9.2342.19200300.100.1.1': 'UID: The unique code for a person that is used as the login name within the institution.',
			'urn:oid:0.9.2342.19200300.100.1.3': 'Mail: The mail (rfc822mailbox) attribute type holds Internet mail addresses in Mailbox [RFC2821] form (e.g., user@example.com).',
			'urn:oid:2.16.840.1.113730.3.1.241': 'Display Name: Preferred name of a person to be used when displaying entries',
			'urn:oid:2.5.4.3': 'Common Name: Contains names of an object. Typically the person\'s full name.',
			'urn:oid:2.5.4.4': 'Surname: Surname or family name.',
			'urn:oid:2.5.4.42': 'Given Name: The part of a person\'s name that is not their surname.',
			'urn:oid:1.3.6.1.4.1.5923.1.1.1.1': 'eduPersonAffiliation: Specifies the person\'s relationship(s) to the institution in broad categories such as student, employee, staff, etc.',
			'urn:oid:1.3.6.1.4.1.5923.1.1.1.10': 'eduPersonTargetedID: A persistent, non-reassigned, opaque identifier for a principal.',
			'urn:oid:1.3.6.1.4.1.5923.1.1.1.6': 'eduPersonPrincipalName: A scoped identifier for a person. It should be represented in the form "user@scope" where "user" is a name-based identifier for the person and where "scope" defines a local security domain. NOT an email adress!',
			'urn:oid:1.3.6.1.4.1.5923.1.1.1.7': 'eduPersonEntitlement: URI (either URN or URL) that indicates a set of rights to specific resources.',
			'urn:oid:1.3.6.1.4.1.5923.1.5.1.1': 'isMemberOf: An "isMemberOf" attribute associated with an entity is a collection of values each of which identifies a group in which that entity is a member.',
			'urn:oid:1.3.6.1.4.1.25178.1.2.9': 'Home Organisation: Specifies a person\'s home organization using the domain name (RFC 1035) of the organization',
			'urn:oid:1.3.6.1.4.1.25178.1.2.10': 'Home Organisation Type: Type of a Home Organization',
			'urn:oid:2.16.840.1.113730.3.1.39': 'Preferred Language: Used to indicate an individual\'s preferred written or spoken language',
			
		},
	};
