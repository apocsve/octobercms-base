/*
 * The trigger API
 *
 * - Documentation: ../docs/input-trigger.md
 */
+function ($) { "use strict";

    var TriggerOn = function (element, options) {

        var $el = this.$el = $(element);

        this.options = options || {};

        if (this.options.triggerCondition === false) {
            throw new Error('Trigger condition is not specified.');
        }

        if (this.options.trigger === false) {
            throw new Error('Trigger selector is not specified.');
        }

        if (this.options.triggerAction === false) {
            throw new Error('Trigger action is not specified.');
        }

        this.triggerCondition = this.options.triggerCondition;

        if (this.options.triggerCondition.indexOf('value') == 0) {
            var match = this.options.triggerCondition.match(/[^[\]]+(?=])/g);
            this.triggerCondition = 'value';
            this.triggerConditionValue = (match) ? match : [""];
        }

        this.triggerParent = undefined;
        if (this.options.triggerClosestParent !== undefined) {
            var closestParentElements = this.options.triggerClosestParent.split(',');
            for (var i = 0; i < closestParentElements.length; i++) {
                var $triggerElement = $el.closest(closestParentElements[i]);
                if ($triggerElement.length) {
                    this.triggerParent = $triggerElement;
                    break;
                }
            }
        }

        if (
            this.triggerCondition == 'checked' ||
            this.triggerCondition == 'unchecked' ||
            this.triggerCondition == 'value'
        ) {
            $(document).on('change', this.options.trigger, $.proxy(this.onConditionChanged, this));
        }

        var self = this;
        $el.on('oc.triggerOn.update', function(e){
            e.stopPropagation();
            self.onConditionChanged();
        });

        if (oc.changeMonitor) {
            oc.changeMonitor.disable();
        }

        self.onConditionChanged();

        if (oc.changeMonitor) {
            oc.changeMonitor.enable();
        }
    }

    TriggerOn.prototype.onConditionChanged = function() {
        if (this.triggerCondition == 'checked') {
            this.updateTarget(!!$(this.options.trigger + ':checked', this.triggerParent).length);
        }
        else if (this.triggerCondition == 'unchecked') {
            this.updateTarget(!$(this.options.trigger + ':checked', this.triggerParent).length);
        }
        else if (this.triggerCondition == 'value') {
            var trigger, triggered = false;

            trigger = $(this.options.trigger, this.triggerParent)
                .not('input[type=checkbox], input[type=radio], input[type=button], input[type=submit]');

            if (!trigger.length) {
                trigger = $(this.options.trigger, this.triggerParent)
                    .not(':not(input[type=checkbox]:checked, input[type=radio]:checked)');
            }

            var self = this;
            trigger.each(function() {
                var triggerValue = $(this).val();

                $.each($.isArray(triggerValue) ? triggerValue : [triggerValue], function(key, val) {
                    triggered = $.inArray(val, self.triggerConditionValue) != -1
                    return !triggered;
                })

                return !triggered;
            })

            this.updateTarget(triggered);
        }
    }

    TriggerOn.prototype.updateTarget = function(status) {
        var self = this,
            actions = this.options.triggerAction.split('|');

        $.each(actions, function(index, action) {
            self.updateTargetAction(action, status);
        });

        $(window).trigger('resize');

        this.$el.trigger('oc.triggerOn.afterUpdate', status);
    }

    TriggerOn.prototype.updateTargetAction = function(action, status) {
        if (action == 'show') {
            this.$el
                .toggleClass('oc-hide', !status)
                .trigger('hide.oc.triggerapi', [!status]);

            oc.Events.dispatch('trigger:hide', { target: this.$el.get(0), status: !status });
        }
        else if (action == 'hide') {
            this.$el
                .toggleClass('oc-hide', status)
                .trigger('hide.oc.triggerapi', [status]);

            oc.Events.dispatch('trigger:hide', { target: this.$el.get(0), detail: { status: status } });
        }
        else if (action == 'enable') {
            this.$el
                .prop('disabled', !status)
                .toggleClass('control-disabled', !status)
                .trigger('disable.oc.triggerapi', [!status]);

            oc.Events.dispatch('trigger:disable', { target: this.$el.get(0), detail: { status: !status } });
        }
        else if (action == 'disable') {
            this.$el
                .prop('disabled', status)
                .toggleClass('control-disabled', status)
                .trigger('disable.oc.triggerapi', [status]);

            oc.Events.dispatch('trigger:disable', { target: this.$el.get(0), detail: { status: status } });
        }
        else if (action.indexOf('fill') == 0 && status) {
            var fillMatch = action.match(/[^[\]]+(?=])/g),
                fillValue = fillMatch ? fillMatch[0] : '1';
            this.$el
                .not('input[type=checkbox], input[type=radio], input[type=button], input[type=submit]')
                .val(fillValue);

            this.$el
                .not(':not(input[type=checkbox], input[type=radio])')
                .prop('checked', true);

            this.$el
                .trigger('fill.oc.triggerapi')
                .trigger('change');

            oc.Events.dispatch('trigger:fill', { target: this.$el.get(0), detail: { fillValue: fillValue } });
        }
        else if (action == 'empty' && status) {
            this.$el
                .not('input[type=checkbox], input[type=radio], input[type=button], input[type=submit]')
                .val('');

            this.$el
                .not(':not(input[type=checkbox], input[type=radio])')
                .prop('checked', false);

            this.$el
                .trigger('empty.oc.triggerapi')
                .trigger('change');

            oc.Events.dispatch('trigger:empty', { target: this.$el.get(0) });
        }

        if (action == 'show' || action == 'hide') {
            this.fixButtonClasses();
        }
    }

    TriggerOn.prototype.fixButtonClasses = function() {
        var group = this.$el.closest('.btn-group');

        if (group.length > 0 && this.$el.is(':last-child')) {
            this.$el.prev().toggleClass('last', this.$el.hasClass('oc-hide'));
        }
    }

    TriggerOn.DEFAULTS = {
        triggerAction: false,
        triggerCondition: false,
        triggerClosestParent: undefined,
        trigger: false
    }

    // TRIGGERON PLUGIN DEFINITION
    // ============================

    var old = $.fn.triggerOn;

    $.fn.triggerOn = function (option) {
        return this.each(function () {
            var $this = $(this);
            var data  = $this.data('oc.triggerOn');
            var options = $.extend({}, TriggerOn.DEFAULTS, $this.data(), typeof option == 'object' && option);

            if (!data) $this.data('oc.triggerOn', (data = new TriggerOn(this, options)));
        })
    }

    $.fn.triggerOn.Constructor = TriggerOn;

    // TRIGGERON NO CONFLICT
    // =================

    $.fn.triggerOn.noConflict = function () {
        $.fn.triggerOn = old;
        return this;
    }

    // TRIGGERON DATA-API
    // ===============

    $(document).render(function(){
        $('[data-trigger]').triggerOn();
    })

}(window.jQuery);
