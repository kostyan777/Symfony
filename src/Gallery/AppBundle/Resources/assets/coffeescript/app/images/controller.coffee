define [
  'marionette'
  'syphon'
  'core/bus'
  'core/controller'
  'app/images/views/collection'
  'layout/main/template'
  'layout/pagination/pagination'
  'models/repository'
], (
  Marionette
  Syphon
  Bus
  Controller
  ImagesView
  LayoutView 
  PaginationView
) ->

  class ImagesController extends Controller

    initialize: (options) ->
      @page = if options.page? then options.page else 1
      if options.id?
        @collection = Bus.reqres.request 'images:models', options.id, @page, =>
          @album = @collection.items[0].album
          Bus.commands.execute 'show:albums:header'
          @showViews @collection

    showViews : (collection) ->
      @LayoutView = @getLayoutView()

      @listenTo @LayoutView, 'show', =>
        @showImagesView collection

      @show @LayoutView
      @showPaginationView(collection, 1)


    showImagesView: (collection) ->
      ImagesView = @getImagesView collection

      @listenTo ImagesView, 'item:show:image:clicked', (view) ->
        Bus.commands.execute 'image:redirect', view.model.id, view.model

      @LayoutView.content.show ImagesView

    showPaginationView: (collection, page) ->
      paginationView = @getPaginationView @album, @collection.paginator
      @listenTo paginationView, 'images:page:changed', (page) ->
        Bus.commands.execute 'images:navigate', @album, page
        @collection.fetch
          reset: true
          data:
            albumId: @album.id
            page: page

      @LayoutView.pagination.show paginationView

    getLayoutView: ->
      new LayoutView @album

    getImagesView: (collection) ->
      new ImagesView
        collection: collection

    getPaginationView: (album, paginator) ->
      new PaginationView album, paginator