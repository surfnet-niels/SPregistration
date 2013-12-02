$(function () {

    var spRegistrationModule = {

        requiredInput: "The {0} information is required.",

        init: function () {
            this.validateAdminInfo();
            this.validateMetaDataInfo();
            this.initializeMetadataWizard();
        },

        validateAdminInfo: function () {
            var $confirmation = $('#confirmation_admin_info');
            if ($confirmation.length == 0) {
                return;
            }

            $confirmation.parents('form').submit(function(event){

                var foundWarning = false;
                $('p.warning').remove();

                if ($('input[name=ServiceType]:checked').length === 0) {
                    foundWarning = spRegistrationModule.appendWarning($('#service_type'), 'Service Type');
                }
                if ($('#purpose').val().trim() == "") {
                    foundWarning = spRegistrationModule.appendWarning($('#purpose').parent(), 'Purpose');
                }
                if ($('input[name=Experience]:checked').length === 0) {
                    foundWarning = spRegistrationModule.appendWarning($('#experience'), 'Experience');
                }
                if ($('#customers').val().trim() == "") {
                    foundWarning = spRegistrationModule.appendWarning($('#customers').parent(), 'Customers');
                }
                if ($('input[name=State]:checked').length === 0) {
                    foundWarning = spRegistrationModule.appendWarning($('#state'), 'State');
                }
                if ($('#planning').val().trim() == "") {
                    foundWarning = spRegistrationModule.appendWarning($('#planning').parent(), 'Planning');
                }

                if (foundWarning) {
                    event.preventDefault();
                    $confirmation.parent().append("<p class='warning'>Missing information that is required. Please provide all information</p>");
                }
            });
        },

        validateMetaDataInfo: function () {
            var $submit = $('#submit_metadata_xml');
            if ($submit.length == 0) {
                return;
            }
            $("form button[type=submit]").click(function() {
                $(this).parents("form").attr("sourceButton", $(this).attr('id'));
            });

            $submit.parents('form').submit(function(event){
                if ($(this).attr("sourceButton") === 'skip_meta_data_submit') {
                    return true;
                }

                $('p.warning').remove();
                var validXml = ($('#metadataXML').val().trim() != "");
                var validUrl = ($('#metadataURL').val().trim() != "");
                if (!validXml && !validUrl) {
                    spRegistrationModule.appendWarning($('#metadataURL').parent(), 'Metadata URL');
                    event.preventDefault();
                }
            });

        },

        appendWarning: function($component, informationType) {
            var $warning = "<p class='warning'>" + spRegistrationModule.formatRequired(informationType)  + "</p>"
            $($component).append($warning);
            return true;
        },

        formatRequired: function(str) {
            if (str) {
                return this.requiredInput.replace(/{(\d+)}/g,'<em>' + str + '</em>');
            }
            return false;
        },

        initializeMetadataWizard: function() {
            if ($('#metadatavalidation').length == 0) {
                return;
            }

            var options = {
                'showValidation': true,
                'showValidationLevel': {
                    'info': false,
                    'ok': false,
                    'warning': true,
                    'error': true
                }
            };
            var metadataValue = $('textarea#providedmetadata').val();
            $("textarea#metadata").val(metadataValue);

            $("textarea#metadata").SAMLmetaJS(options);

            $("div#rawmetadata button.prettify").trigger( "click" );
            $("div#rawmetadata button.validate").trigger( "click" );

        }

    };

    spRegistrationModule.init();


});

