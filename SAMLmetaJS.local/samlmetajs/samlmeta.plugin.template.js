// To add this plugin to your form, add it to the index.html js calls.

(function($) {
	var UI = {
		"clearTemplate": function() {
			$("div#template > div.content").empty();
		},
		"addTemplate": function(template) {
			// This function can be used to add content to the page if a button is pressed.
			var templateHTML = "Your HTML content here";

			// Add the templateHTML to the content div 
			$(templateHTML).appendTo("div#template > div.content").find('button.remove').click( function(e) {
				e.preventDefault();
				$(e.target).closest('fieldset').remove();
			});
		}
	};

// Funtions in the template plugin
	SAMLmetaJS.plugins.template = {
		// What should happen if the tab is clicked? 	
		tabClick: function (handler) {
			console.log("Calling tabClick function of template plugin");			
			
			handler($("a[href='#template']"));
		},

		// This function is called when the tab is created
		addTab: function (pluginTabs) {
			console.log("Calling addTab function of template plugin");			
			
			pluginTabs.list.push('<li><a href="#template">Template</a></li>');
			pluginTabs.content.push(
				'<div id="template" class="tabContent">' +
					'<div class="content"></div>' +
						'<div><button class="addTemplate">Template Button</button></div>' +
				'</div>'
			);
		},

		// This funtion is called to create the initial content of a tab
		setUp: function () {
			console.log("Calling Setup function of template plugin");			
			
			var templateHTML ="";
			
			templateHTML += '<fieldset><legend>Template Header</legend>' +
					'<div><p>A template info text</p>' +
					'Template content</br>' +
					'</fieldset>';
					

			$(templateHTML).appendTo("div#template > div.content");

			$("div#template button.addConext").click(function(e) {
				e.preventDefault();

				UI.addConext({});
			});

		},

		fromXML: function () {
			// This function is called whenever a tab is being accessed. It should fill content element based on XML metadata
			console.log("Calling fromXML function of template plugin");
		},

		toXML: function () {
			// This function is called whenever a tab is left accessed(if another tab is selected). 
			// It should use content elements to create XML metadata, likely after validation
			console.log("Calling toXML function of template plugin");
		},
		
		validate: function () {
			// Validat the contents of this tab
			console.log("Calling validate function of template plugin");			
						
			return true;
		}
	};

}(jQuery));
