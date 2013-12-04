$(function () {

    var spRegistrationModule = {

        requiredInput: "The {0} information is required.",

        init: function () {
            this.validateAdminInfo();
            this.validateMetaDataInfo();
            this.initializeMetadataWizard();
            this.showHide();
        },

        validateAdminInfo: function () {
            var $confirmation = $('#confirmation_admin_info');
            if ($confirmation.length == 0) {
                return;
            }

            $confirmation.parents('form').submit(function (event) {

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
            $('#submit_metadata_url').click(function(){
                $('p.warning').remove();
                var validUrl = ($('#metadataURL').val().trim() != "");
                if (!validUrl) {
                    spRegistrationModule.appendWarning($('#metadataURL').parent(), 'Metadata URL');
                    event.preventDefault();
                    return false;
                }
                return true;
            });

            $('#submit_metadata_xml').click(function(){
                $('p.warning').remove();
                var validXml = ($('#metadataURL').val().trim() != "");
                if (!validXml) {
                    spRegistrationModule.appendWarning($('#metadataXML').parent(), 'Metadata XML');
                    event.preventDefault();
                    return false;
                }
                return true;
            });

        },

        appendWarning: function ($component, informationType) {
            var $warning = "<p class='warning'>" + spRegistrationModule.formatRequired(informationType) + "</p>"
            $($component).append($warning);
            return true;
        },

        formatRequired: function (str) {
            if (str) {
                return this.requiredInput.replace(/{(\d+)}/g, '<em>' + str + '</em>');
            }
            return false;
        },

        initializeMetadataWizard: function () {
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

            $("div#rawmetadata button.prettify").trigger("click");
            $("div#rawmetadata button.validate").trigger("click");

            $("button").addClass('btn');

        },

        showHide: function () {
            $('a.show-hide').click(function () {
                $(this).next('div').toggle();
            });
        }

    };

    spRegistrationModule.init();

});

