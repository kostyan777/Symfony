define [
  'marionette'
  'core/bus'
  'app/albums/controller'
  'app/images/controller'
], (Marionette, Bus, AlbumsController, ImagesController) ->

  class AppRouter extends Marionette.AppRouter
    appRoutes:
      '': 'albums'
      ':page': 'albums'
      'album/:id': 'images'
      'album/:id/page/:page': 'images'

  API =
    albums: (page) ->
      new AlbumsController
        region: Bus.reqres.request 'main_region'
        page: page

    images: (id, page=1) ->
      new ImagesController
        id: id
        page: page
        region: Bus.reqres.request 'main_region'

  Bus.commands.setHandler 'album:redirect:show', (id = null) ->
    if id == null
      Backbone.history.navigate '/'
    else
      Backbone.history.navigate 'album/' + id
    API.images id

  Bus.commands.setHandler 'images:navigate', (album, page=null) ->
    if page == ''
      route = '/album/' + album.id
    else
      route = '/album/' + album.id + '/page/' + page

    Backbone.history.navigate route

  albumsApp = new Marionette.Application

  albumsApp.addInitializer ->
    new AppRouter
      controller: API

  albumsApp
