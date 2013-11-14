/*jslint rhino: true, browser: true, onevar: false */
if (typeof console === "undefined" || typeof console.log === "undefined") {var console = { log: function() {} }}

// Hack to initiatlize a DOMParser in browser that do not support this natively.
// Hack found here:
//	https://sites.google.com/a/van-steenbeek.net/archive/explorer_domparser_parsefromstring
//
if(typeof(DOMParser) === 'undefined') {
	DOMParser = function() {};
	DOMParser.prototype.parseFromString = function(str, contentType) {
		var xmldata = null;

		if (typeof(ActiveXObject) !== 'undefined') {
			xmldata = new ActiveXObject('MSXML.DomDocument');

			xmldata.async = false;
			xmldata.loadXML(str);
			return xmldata;

		} else if(typeof(XMLHttpRequest) !== 'undefined') {
			xmldata = new XMLHttpRequest();
			if(!contentType) {
				contentType = 'application/xml';
			}

			xmldata.open('GET', 'data:' + contentType + ';charset=utf-8,' + encodeURIComponent(str), false);
			if(xmldata.overrideMimeType) {
				xmldata.overrideMimeType(contentType);
			}

			xmldata.send(null);
			return xmldata.responseXML;
		}
	};
}

var SAMLmetaJS = {};

(function($) {

	SAMLmetaJS.plugins = {};

	SAMLmetaJS.pluginEngine = {
		execute: function(hook, parameters) {
			var plugin;
			if (!SAMLmetaJS.plugins) {
				return;
			}
			if (SAMLmetaJS.plugins.endpoints) {
				// Always define first the endpoint, because other plugins may
				// add information to it, and therefore they require it to exist
				SAMLmetaJS.pluginEngine.executeOne('endpoints', hook, parameters);
			}
			for (plugin in SAMLmetaJS.plugins) {
				if (plugin !== 'endpoints') {
					SAMLmetaJS.pluginEngine.executeOne(plugin, hook, parameters);
				}
			}
		},
		executeOne: function (plugin, hook, parameters) {
			if (!SAMLmetaJS.plugins) {
				return;
			}
			if (SAMLmetaJS.plugins[plugin] && SAMLmetaJS.plugins[plugin][hook]) {
				// console.log('Executing hook [' + hook + '] in plugin [' + plugin + ']');
				return SAMLmetaJS.plugins[plugin][hook].apply(null, parameters);
			}
		}
	};

	SAMLmetaJS.TestEngine = function(ruleset) {
		if (
			(typeof ruleset === 'undefined') ||
			(ruleset === null)
			){

			this.ruleset = {}
		} else {
			this.ruleset = ruleset;
		}
		this.tests = [];
	}

	SAMLmetaJS.TestEngine.prototype.addTest = function(test) {
		if (this.ruleset.hasOwnProperty(test.id)) {
			console.log('Overriding significance from [' + test.significance + '] to [' + this.ruleset[test.id] + '] for [' + test.id + ']');
			test.significance = this.ruleset[test.id];
		}
		this.tests.push(test);
	}

	SAMLmetaJS.TestEngine.prototype.getResult = function() {
		return this.tests;
	}

	SAMLmetaJS.TestEngine.prototype.reset = function() {
		this.tests = [];
	}

	SAMLmetaJS.validatorManager = function (validationContext) {
		var
			hideErrors = function (element) {
				$(element).find('ul.errors').html('');
			},
			showErrors = function (element, errors) {
				var output = $.map(errors, function (e) {
					return '<li>' + e + '</li>';
				});
				$(element).find('ul.errors').html(output.join(''));
			};

		return function () {
			var errors = 0;

			$.each(validationContext, function (selector, validator) {
				$(selector).each(function (index, element) {
					var result = validator(element);
					hideErrors(element);
					if (result.errors.length > 0) {
						showErrors(element, result.errors);
						errors += result.errors.length;
					}
				});
			});

			return errors === 0;
		};
	};

	SAMLmetaJS.l10nValidator = function (element, errorMessage) {
		var value = null, lang = null, errors = [];
		value = $(element).children('input').attr('value');
		lang = $(element).children('select').val();

		if (!value) {
			errors.push(errorMessage);
		}
		return {
			value: value,
			lang: lang,
			errors: errors
		};
	};

	SAMLmetaJS.sync = function(node, options) {

		console.log('Runnign Sync');
		var
			currentTab = 'xml',
			mdreaderSetup = undefined,
			showValidation = false,
			showValidationLevel = {
				'info': true,
				'warning': true,
				'error': true,
				'ok': true
			};

		var setEntityID = function (entityid) {
			$("input#entityid").val(entityid);
		};

		var testEngine;


		var showTestResults = function(testEngine, showLevel) {
			var
				result = testEngine.getResult(),
				i = 0,
				testnode;

			testnode = $(node).parent().parent().find('div#samlmetajs_testresults');

			$(testnode).empty();

			for(i = 0; i < result.length; i ++) {
				if (showLevel[result[i].getLevel()]) {
					$(testnode).append(result[i].html() );
				}
			}

		}


		// This section extracts the information from the Metadata XML document,
		// and updates the UI elements to reflect that.
		var fromXML = function () {
			if (currentTab !== 'xml') return;
			currentTab = 'other';

			console.log('fromXML()');

			testEngine.reset();
			entitydescriptor = mdreader.parseFromString($(node).val());
			setEntityID(entitydescriptor.entityid);

			console.log(entitydescriptor);

			if (showValidation === true) {
				showTestResults(testEngine, showValidationLevel);
			}

			SAMLmetaJS.pluginEngine.execute('fromXML', [entitydescriptor]);
		};


		// This section extracts the information from the Metadata UI elements,
		// and applies this to the XML metadata document.
		var toXML = function() {
			if (currentTab !== 'other') return;
			currentTab = 'xml';
			console.log('toXML()');

			var entitydescriptor = new MDEntityDescriptor();

			entitydescriptor.entityid = $('input#entityid').val();

			SAMLmetaJS.pluginEngine.execute('toXML', [entitydescriptor]);

			console.log(entitydescriptor);

			// ---
			// Now the JSON object is created, and now we will apply this to the Metadata XML document
			// in the textarea.

			var parser = SAMLmetaJS.xmlupdater($(node).val());
			parser.updateDocument(entitydescriptor);

			var xmlstring = parser.getXMLasString();
			xmlstring = SAMLmetaJS.XML.prettifyXML(xmlstring);
			$(node).val(xmlstring);

			/*
			 * Then parse the generated XML again, to perform the validation..
			 */
			if (showValidation === true) {
				testEngine.reset();
				entitydescriptor = mdreader.parseFromString($(node).val());
				setEntityID(entitydescriptor.entityid);
				showTestResults(testEngine, showValidationLevel);

				console.log(entitydescriptor);
			}
			// ---

		};

		var selectTab = function (event, ui) {
			var
				isValid = true,
				$tabs = $(event.target),
				selected = $tabs.tabs("option", "selected"),
				tab = $tabs.find('.ui-tabs-panel').eq(selected).attr('id');

			if (tab !== 'rawmetadata') {
				isValid = SAMLmetaJS.pluginEngine.executeOne(tab, 'validate', []);
				if (typeof isValid === 'undefined') {
				    isValid = true;
				}
			}

			if (isValid && ui.index === 0) {  // rawmetadata tab
				toXML();
			}

			return isValid;
		};


		// Add content
		var embrace = function () {
			$(node).wrap('<div id="rawmetadata"></div>');
			$(node).parent().wrap('<div id="tabs" />');

			var metatab = $(node).parent();
			var tabnode = $(node).parent().parent();

			var pluginTabs = {'list': [], 'content': []};
			SAMLmetaJS.pluginEngine.execute('addTab', [pluginTabs]);

			metatab.append('<div>' +
						   '<button class="prettify">Pretty format</button>' +
						   '<button class="validate">Validate</button>' +
						   '<button class="wipe">Wipe</button>' +
						   '</div>');

			tabnode.prepend('<ul>' +
							'<li><a href="#rawmetadata">Metadata</a></li>' +
							pluginTabs.list.join('') +
							'</ul>');
			tabnode.prepend('<div id="samlmetajs_testresults"></div>');
			tabnode.append(pluginTabs.content.join(''));

			tabnode.tabs({select: selectTab});
		};


		embrace();

		if (options.ruleset) {
			mdreaderSetup = options.ruleset;
		}

		if (options.showValidation) {
			showValidation = options.showValidation;
		}
		if (options.showValidationLevel) {
			showValidationLevel = options.showValidationLevel;
		}

		testEngine = new SAMLmetaJS.TestEngine(mdreaderSetup);

		mdreader.setup({
			testProcessor: function(t) {
				testEngine.addTest(t);
			}
		});

		SAMLmetaJS.pluginEngine.execute('tabClick', [
			function(node) {
				$(node).click(fromXML);
			}
		]);

		if (options && options.savehook) {
			$(options.savehook).submit(toXML);
		}

		// Adding handlers to the other buttons.

		$("div#rawmetadata button.prettify").click(function(e) {
			e.preventDefault();
			$(node).val(SAMLmetaJS.XML.prettifyXML($(node).val()));
		});
		$("div#rawmetadata button.wipe").click(function(e) {
			e.preventDefault();
			$(node).val('');
		});
		$("div#rawmetadata button.validate").click(function(e) {
			e.preventDefault();
			fromXML();
			
		});

		SAMLmetaJS.pluginEngine.execute('setUp', []);
	};


	$.vari = "$.vari";
	$.fn.foo = "$.fn.vari";

	// $.fn is the object we add our custom functions to
	$.fn.SAMLmetaJS = function(options) {

		return this.each(function() {
			SAMLmetaJS.sync(this, options);
		});
	};
}(jQuery));
