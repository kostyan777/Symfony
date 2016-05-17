define [
  'marionette'
  'text!app/images/templates/item.html'
], (Marionette
    Template) ->

  class ItemView extends Marionette.ItemView
    template: Template
    tagName: 'div'
    className: 'gallery-image'
