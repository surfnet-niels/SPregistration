(function($) {
	
	function hasContents(e) {
		if (!e) return false;
		for(var k in e) {
			if (!e.hasOwnProperty(k)) continue;
			return true;
		}
		return false;
	}
	
	SAMLmetaJS.plugins.attributes = {
		tabClick: function (handler) {
			handler($("a[href='#attributes']"));
		},

		addTab: function (pluginTabs) {
			pluginTabs.list.push('<li><a href="#attributes">User attrs</a></li>');
			pluginTabs.content.push(
				'<div id="attributes" class="tabContent">' +
                    '<div><p>Please select the attributes you require for your service.<br>Attributes are passed along with the authentication to provide additional information on a user.<br>Please note that the request of attributes must be in line with the purpose of the service.</p><p>For a short description of the attribute, hover over the specific attribute. For a full explanation, pleas visit <a href="">Get Conexted Wiki page on use of attributes</a></p></div>' +
					'<div class="content"></div>' +

					'<div>' +
						'<button class="selectall">Select all</button>' +
						'<button class="unselectall">Unselect all</button>' +
					'</div>' +

				'</div>'
			);
		},

		setUp: function () {
            //console.log("Calling setUp function of attributes plugin");

            $("div#attributes button.selectall").click(function(e) {
				e.preventDefault();
				$("div#attributes div.content input:checkbox").each(function(index, box) {
					$(box).attr('checked', 'checked');
				});
			});
			$("div#attributes button.unselectall").click(function(e) {
				e.preventDefault();
				$("div#attributes div.content input:checkbox").each(function(index, box) {
					$(box).removeAttr('checked');
				});
			});
		},

		fromXML: function (entitydescriptor) {
            //console.log("Calling fromXML function of attributes plugin with eID " + entitydescriptor.entityid);

            var attributeHTML, checked, attrname, attributes;
			
			
			attributes = {};
			if (entitydescriptor && entitydescriptor.saml2sp && entitydescriptor.saml2sp.acs && entitydescriptor.saml2sp.acs.attributes) {
				attributes = entitydescriptor.saml2sp.acs.attributes;
			}

			// Set attributes
			attributeHTML = '';
			rightattributelistHTML = '<div style="float: right; width: 48%; border: dashed 1px grey; padding: 3px;" title="OIDattrlist"><strong>MACE Dir based Attributes</strong><br/><br/>';
			leftattributelistHTML = '<div style="float: left; width: 48%; border: dashed 1px grey; padding: 3px;" title="MACEattrlist"><strong>OID based Attributes (Preferred)</strong><br/><br/>';
			
			
			for(attrname in SAMLmetaJS.Constants.attributes) {
				if (SAMLmetaJS.Constants.attributes.hasOwnProperty(attrname)) {
					checked = (attributes[attrname] ? 'checked="checked"' : '');
					console.log(SAMLmetaJS.Constants.attributes[attrname]);
					console.log(SAMLmetaJS.Constants.attributes[attrname].indexOf("oid"));
					console.log(SAMLmetaJS.Constants.attributes[attrname].indexOf("mace"));
					 
					if (SAMLmetaJS.Constants.attributes[attrname].indexOf("mace") > 0) {
						rightattributelistHTML += '<input type="checkbox" id="' + attrname + '-id" name="' + attrname + '" ' + checked + '/> ' + SAMLmetaJS.Constants.attributes[attrname];
					} else {
						leftattributelistHTML += '<input type="checkbox" id="' + attrname + '-id" name="' + attrname + '" ' + checked + '/> ' + SAMLmetaJS.Constants.attributes[attrname];
					}
					
					//attributeHTML += '<div style="float: '+pos+'; width: 400px" title="' + SAMLmetaJS.Constants.attributeDescriptions[attrname] +'">';
					//attributeHTML += '<input type="checkbox" id="' + attrname + '-id" name="' + attrname + '" ' + checked + '/>';
					//attributeHTML +=  SAMLmetaJS.Constants.attributes[attrname] + '</div>';
					//attributeHTML += '<label for="' + attrname + '-id">' + SAMLmetaJS.Constants.attributes[attrname] + '</label></div>';
				}
			}
			leftattributelistHTML += '</div>';
			rightattributelistHTML += '</div>';
			
			attributeHTML +=  rightattributelistHTML + leftattributelistHTML;
			
			attributeHTML += '<br style="height: 0px; clear: both" />';
			$("div#attributes > div.content").empty();
			$("div#attributes > div.content").append(attributeHTML);
		},
		toXML: function (entitydescriptor) {
            //console.log("Calling toXML function of attributes plugin with eID " + entitydescriptor.entityid);

            var
				atleastone = false,
				attributes = {};
			
			$('div#attributes div').each(function(index, element) {
				$(element).find('input:checked').each(function(index2, element2) {
					attributes[$(element2).attr('name')] = 1;
					atleastone = true;
				});
			});
			
			if (atleastone) {
					
				if (!entitydescriptor.saml2sp) entitydescriptor.saml2sp = {};
				if (!entitydescriptor.saml2sp.acs) entitydescriptor.saml2sp.acs = {};
				if (!entitydescriptor.saml2sp.acs.attributes) entitydescriptor.saml2sp.acs.attributes = attributes;
				if (!SAMLmetaJS.tools.hasContents(entitydescriptor.name)) entitydescriptor.name = {'en': 'Unnamed'};
				
			} else {
				
				if (entitydescriptor && entitydescriptor.saml2sp && 
					entitydescriptor.saml2sp.acs && entitydescriptor.saml2sp.acs.attributes) {
					delete(entitydescriptor.saml2sp.acs.attributes);	
				}
				
			}

		},
		validate: function () {
            //console.log("Calling validate function of attributes plugin");

			return true;  // This plugin does not allow invalid inputs
		}
	};

}(jQuery));
