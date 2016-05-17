define [
  'marionette'
  'backbone'
  'app/images/views/item'
  'text!app/images/templates/collection.html'
], (Marionette, Backbone, ItemView, Template) ->

  class ShowView extends Marionette.CollectionView
    template: Template
    tagName: 'div'
    className: 'row'
    itemView: ItemView
    itemViewEventPrefix: 'item'