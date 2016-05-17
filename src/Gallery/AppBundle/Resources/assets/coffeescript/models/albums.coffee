define ['backbone'], (Backbone) ->

  class Albums extends Backbone.Collection
    url: 'api/albums'
    parse: (response) ->
      @.paginationData = '[]'
      response
