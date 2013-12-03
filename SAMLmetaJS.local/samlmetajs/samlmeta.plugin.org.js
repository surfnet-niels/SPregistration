(function($) {
	var UI = {
		"clearOrgname": function() {
			$("div#org div#orgname").empty();
		},
		"clearOrgdisplayname": function() {
			$("div#org div#orgdisplayname").empty();
		},
		"clearOrgurl": function() {
			$("div#org div#orgurl").empty();
		},

		"addOrgname": function(lang, name) {
			var typeid = 'orgname';
			var randID = typeid + Math.floor(Math.random() * 10000 + 1000);
			var infoHTML = '<div class="' + typeid + 'div">' +
				'<ul class="errors"></ul>' +
				'<select name="' + randID + '-lang-name" id="' + randID + '-lang">';
			var languageFound = false;
			var language, checked;
			for (language in SAMLmetaJS.Constants.languages) {
				if (SAMLmetaJS.Constants.languages.hasOwnProperty(language)) {
					checked = '';
					if (lang === language) {
						checked = ' selected="selected" ';
						languageFound = true;
					}
					infoHTML += '<option value="' + language + '" ' + checked + '>' +
						SAMLmetaJS.Constants.languages[language] +
						'</option>';
				}
			}
			if (!languageFound) {
				infoHTML += '<option value="' + lang + '" selected="selected">Unknown language (' + lang + ')</option>';
			}

			infoHTML += '</select>' +
				'<input type="text" name="' + randID + '-name-name" id="' + randID + '-name" value="' + (name || '') + '" />' +
				'<button style="" class="btn removename">Remove</button>' +
				'</div>';

			$(infoHTML).appendTo("div#org div#" + typeid + "").find('button.removename').click(function (e) {
				e.preventDefault();
				$(e.target).closest('div.' + typeid + 'div').remove();
			});
		},
		"addOrgdisplayname": function(lang, name) {
			var typeid = 'orgdisplayname';
			var randID = typeid + Math.floor(Math.random() * 10000 + 1000);
			var infoHTML = '<div class="' + typeid + 'div">' +
				'<ul class="errors"></ul>' +
				'<select name="' + randID + '-lang-name" id="' + randID + '-lang">';
			var languageFound = false;
			var language, checked;
			for (language in SAMLmetaJS.Constants.languages) {
				if (SAMLmetaJS.Constants.languages.hasOwnProperty(language)) {
					checked = '';
					if (lang === language) {
						checked = ' selected="selected" ';
						languageFound = true;
					}
					infoHTML += '<option value="' + language + '" ' + checked + '>' +
						SAMLmetaJS.Constants.languages[language] +
						'</option>';
				}
			}
			if (!languageFound) {
				infoHTML += '<option value="' + lang + '" selected="selected">Unknown language (' + lang + ')</option>';
			}

			infoHTML += '</select>' +
				'<input type="text" name="' + randID + '-name-name" id="' + randID + '-name" value="' + (name || '') + '" />' +
				'<button style="" class="btn removename">Remove</button>' +
				'</div>';

			$(infoHTML).appendTo("div#org div#" + typeid + "").find('button.removename').click(function (e) {
				e.preventDefault();
				$(e.target).closest('div.' + typeid + 'div').remove();
			});
		},
		"addOrgurl": function(lang, name) {
			var typeid = 'orgurl';
			var randID = typeid + Math.floor(Math.random() * 10000 + 1000);
			var infoHTML = '<div class="' + typeid + 'div">' +
				'<ul class="errors"></ul>' +
				'<select name="' + randID + '-lang-name" id="' + randID + '-lang">';
			var languageFound = false;
			var language, checked;
			for (language in SAMLmetaJS.Constants.languages) {
				if (SAMLmetaJS.Constants.languages.hasOwnProperty(language)) {
					checked = '';
					if (lang === language) {
						checked = ' selected="selected" ';
						languageFound = true;
					}
					infoHTML += '<option value="' + language + '" ' + checked + '>' +
						SAMLmetaJS.Constants.languages[language] +
						'</option>';
				}
			}
			if (!languageFound) {
				infoHTML += '<option value="' + lang + '" selected="selected">Unknown language (' + lang + ')</option>';
			}

			infoHTML += '</select>' +
				'<input type="text" name="' + randID + '-name-name" id="' + randID + '-name" value="' + (name || '') + '" />' +
				'<button style="" class="btn removename">Remove</button>' +
				'</div>';

			$(infoHTML).appendTo("div#org div#" + typeid + "").find('button.removename').click(function (e) {
				e.preventDefault();
				$(e.target).closest('div.' + typeid + 'div').remove();
			});
		},
		validateName: function (element) {
			return SAMLmetaJS.l10nValidator(element, "The name is required");
		},
		validateDisplayname: function (element) {
			return SAMLmetaJS.l10nValidator(element, "The display name is required");
		},
		validateUrl: function (element) {
			return SAMLmetaJS.l10nValidator(element, "The URL is required");
		}		
	};

	SAMLmetaJS.plugins.org = {
		tabClick: function (handler) {
			handler($("a[href='#org']"));
		},

		addTab: function (pluginTabs) {
			pluginTabs.list.push('<li><a href="#org">Organization</a></li>');
			pluginTabs.content.push(
				'<div id="org" class="tabContent">' +

                    '<div><p>Please provide some information of your organisation. You MUST provide information in English; you MAY provide information in Dutch.<br>We prefer if you supply information in both languages, if you cannot provide Dutch, please remove the fields before you continue to the next tab.</p></div>' +

					'<fieldset class="name"><legend>Name of organization</legend>' +
						'<div id="orgname"></div>' +
						'<div>' +
							'<button class="addname btn">Add name in one more language</button>' +
						'</div>' +
					'</fieldset>' +

					'<fieldset class="name"><legend>Displayname of organization</legend>' +
						'<div id="orgdisplayname"></div>' +
						'<div>' +
							'<button class="adddisplayname btn">Add displayname in one more language</button>' +
						'</div>' +
					'</fieldset>' +

					'<fieldset class="entityid"><legend>URL to information about organization</legend>' +
						'<div id="orgurl"></div>' +
						'<div>' +
							'<button class="addurl btn">Add URL in one more language</button>' +
						'</div>' +
					'</fieldset>' +

				'</div>'
			);
		},

		setUp: function () {

           $("div#org button.addname").click(function(e) {
				e.preventDefault();
				UI.addOrgname('en', '');
				UI.addOrgname('nl', '');
			});
			$("div#org button.adddisplayname").click(function(e) {
				e.preventDefault();
				UI.addOrgdisplayname('en', '');
				UI.addOrgdisplayname('nl', '');
			});
			$("div#org button.addurl").click(function(e) {
				e.preventDefault();
				UI.addOrgurl('en', '');
				UI.addOrgurl('nl', '');
			});
		},

		fromXML: function (entitydescriptor) {
            var l;

			UI.clearOrgname();
			UI.clearOrgdisplayname();
			UI.clearOrgurl();

			if (entitydescriptor.organization) {

				if (entitydescriptor.organization.name) {
					for (l in entitydescriptor.organization.name) {
						if (entitydescriptor.organization.name.hasOwnProperty(l)) {
							UI.addOrgname(l, entitydescriptor.organization.name[l]);
						}
					}
				}
				if (entitydescriptor.organization.displayname) {
					for (l in entitydescriptor.organization.displayname) {
						if (entitydescriptor.organization.displayname.hasOwnProperty(l)) {
							UI.addOrgdisplayname(l, entitydescriptor.organization.displayname[l]);
						}
					}
				}
				if (entitydescriptor.organization.url) {
					for (l in entitydescriptor.organization.url) {
						if (entitydescriptor.organization.url.hasOwnProperty(l)) {
							UI.addOrgurl(l, entitydescriptor.organization.url[l]);
						}
					}
				}
			}
		},

		toXML: function (entitydescriptor) {
            //console.log("Calling toXML function of org plugin");

            var
				include = false,
				org = {};

			$('div#orgname > div').each(function (index, element) {
				var result = UI.validateName(element);
				if (result.errors.length > 0) {
					return;
				}
				if (!org.name) {
					org.name = {};
				}
				org.name[result.lang] = result.value;
				include = true;
			});
			$('div#orgdisplayname > div').each(function (index, element) {
				var result = UI.validateDisplayname(element);
				if (result.errors.length > 0) {
					return;
				}
				if (!org.displayname) {
					org.displayname = {};
				}
				org.displayname[result.lang] = result.value;
				include = true;
			});
			$('div#orgurl > div').each(function (index, element) {
				var result = UI.validateUrl(element);
				if (result.errors.length > 0) {
					return;
				}
				if (!org.url) {
					org.url = {};
				}
				org.url[result.lang] = result.value;
				include = true;
			});

			if (include) {
				entitydescriptor.organization = org;
			}
		},
		validate: function () {
			var validator = SAMLmetaJS.validatorManager({
				'div#orgname > div': UI.validateName,
				'div#orgdisplayname > div': UI.validateDisplayname,
				'div#orgurl > div': UI.validateUrl
			});
			return validator();
		}
	};

}(jQuery));
