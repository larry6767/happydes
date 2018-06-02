/**
 * Modal window
 */

(function($) {
    var defaults = {
        'modalShowClass'    : 'ui-modal--show',
        'confirmText'       : '',
    };

    $.fn.extend({
        /**
         * Initializes the plugin
         */
        uiModal: function(settings) {
            return this.each(function(){
                settings = $.extend({}, defaults, settings);
                var generalContext = this;

                $('.x-modal-close', generalContext).on('click', function() {
                    $(generalContext).uiCloseModal(settings);
                })

            })
        },

        uiToggleModal: function(settings) {
            return this.each(function(){
                settings = $.extend({}, defaults, settings);
                var generalContext = this;

                if ($(generalContext).hasClass(settings.modalShowClass)) {
                   $(generalContext).uiCloseModal(settings);
                } else {
                    $(generalContext).uiShowModal(settings);
                }
            })
        },

        uiShowModal: function(settings) {
            return this.each(function(){
                settings = $.extend({}, defaults, settings);
                var generalContext = this;

                $('.ui-modal').removeClass(settings.modalShowClass); // fix not x- class
                $(generalContext).addClass(settings.modalShowClass);
            })
        },

        uiCloseModal: function(settings) {
            return this.each(function(){
                settings = $.extend({}, defaults, settings);
                var generalContext = this;

                if (settings.confirmText) {
                    if (confirm(settings.confirmText)) {
                        $(generalContext).removeClass(settings.modalShowClass);
                    }
                } else {
                    $(generalContext).removeClass(settings.modalShowClass);
                }
            })
        }
    });

})(jQuery);

