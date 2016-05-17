define [
  'backbone'
  'marionette'
  'jquery'
  'magnific'
], (Backbone, Marionette, $) ->

  class Marionette.Region.Dialog extends Marionette.Region

    onShow: (view) ->
      options = _.defaults(
        view.options,
        closable: true
        dialogClassName: ""
      )

      console.log $.magnificPopup

      $.magnificPopup.open
        items:
          src: @$el
          type: 'inline'
        mainClass: options.dialogClassName
        modal: not options.closable
        callbacks:
          beforeClose: =>
            @oldView = @currentView
          close: =>
            if @oldView? && @oldView == @currentView
# VERSION was added in 2.0, so that's enough
# to know if we need close() or destroy()
              if Marionette.VERSION
                @oldView.destroy()
              else
                @oldView.close()

      @listenTo view, 'close', ->
        $.magnificPopup.close()

      @listenTo view, 'destroy', ->
        $.magnificPopup.close()