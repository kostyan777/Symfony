define [
  'core/bus',
  'models/albums'
  'models/images'
  ], (Bus, Albums, Images) ->

  Bus.reqres.setHandler 'albums:models', (success = null) ->
    albums = new Albums
    albums.fetch
      reset: true
      success: success
    albums

  Bus.reqres.setHandler 'images:models', (albumId, page = 1, success = null) ->
    albums = new Images
    data = {}

    data.albumId = albumId
    data.page = page
    albums.fetch
      reset: true
      data: data
      success: success
    albums