define [
  'config'
  'backbone'
  'marionette'
  'core/bus'
  'app/router'
  'core/dialogregion'
], (
  Config
  Backbone
  Marionette
  Bus
  AlbumsApp
) ->

  app = new Marionette.Application

  app.addRegions
    headerRegion: 'header'
    dialogRegion: Marionette.Region.Dialog.extend el: "#dialog"
    mainRegion: '#main-region'
    footerRegion: 'footer'

  app.addInitializer ->
    AlbumsApp.start()

  app.on 'initialize:after', ->
    if not Backbone.history.started
      Backbone.history.start
        root: Config.baseUrl

  Bus.reqres.setHandler 'main_region', ->
    app.mainRegion

  Bus.reqres.setHandler 'dialog_region', ->
    app.dialogRegion

  Bus.reqres.setHandler 'header_region', ->
    app.headerRegion

  Bus.reqres.setHandler 'footer_region', ->
    app.footerRegion

  app