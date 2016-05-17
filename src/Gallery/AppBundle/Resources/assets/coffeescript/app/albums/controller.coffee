define [
  'marionette'
  'syphon'
  'core/bus'
  'core/controller'
  'app/albums/views/collection'
  'layout/main/template'
  'models/repository'
], (
  Marionette
  Syphon
  Bus
  Controller
  AlbumsView
  LayoutView
) ->

  class AlbumsController extends Controller

    initialize: () ->
      @collection = Bus.reqres.request 'albums:models', =>
        Bus.commands.execute 'show:albums:header'
        @showViews @collection

    showViews: (collection) ->
      @LayoutView = @getLayoutView()

      @listenTo @LayoutView, 'show', =>
        @showAlbumsView collection

      @show @LayoutView

    showAlbumsView: (collection) ->
      AlbumsView = @getAlbumsView collection

      @listenTo AlbumsView, 'item:show:album:clicked', (view) ->
        Bus.commands.execute 'album:redirect:show', view.model.id, view.model

      @LayoutView.content.show AlbumsView

    getLayoutView: ->
      new LayoutView

    getAlbumsView: (collection) ->
      new AlbumsView
        collection: collection