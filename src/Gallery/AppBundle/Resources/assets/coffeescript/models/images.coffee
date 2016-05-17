define ['backbone'], (Backbone) ->

  class Images extends Backbone.Collection
    url: 'api/images'
    parse: (response) ->
      @.paginator = response.paginationData
      @.items = response.items
    @.items
