define [
  'marionette'
  'text!layout/main/template.html'
], (Marionette, Template) ->
  class MainView extends Marionette.Layout
    template: Template
    regions:
      content: '#content-region'
      pagination: '#pagination-region'

    initialize: (album) ->
      @album = album

    templateHelpers: ->
      if(@album)
        albumName: @album.title