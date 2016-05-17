define [
  'marionette'
  'backbone'
  'app/albums/views/item'
  'text!app/albums/templates/collection.html'
], (Marionette, Backbone, ItemView, Template) ->

  class ListView extends Marionette.CollectionView
    template: Template
    tagName: 'div'
    className: 'row'
    itemView: ItemView
    itemViewEventPrefix: 'item'