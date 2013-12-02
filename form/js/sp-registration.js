$(function () {

    var spRegistrationModule = {

        requiredInput: "The {0} information is required.",

        init: function () {
            this.validate();
        },

        validate: function () {
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
        }
    };

    spRegistrationModule.init();


});

