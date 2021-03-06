requirejs.config
  urlArgs: new Date().getTime().toString()
  paths:
    backbone: 'vendor/backbone'
    syphon: 'vendor/syphon'
    underscore: 'vendor/underscore'
    jquery: 'vendor/jquery'
    'jquery.cookie': 'vendor/jquery.cookie'
    magnific: 'vendor/magnific-popup'
    'fine-uploader': 'vendor/fine-uploader'
    spin: 'vendor/spin'
    'jquery.spin': 'vendor/jquery.spin'
    bootstrap: 'vendor/bootstrap'
    marionette: 'vendor/marionette'
    'backbone.babysitter': 'vendor/babysitter'
    'backbone.wreqr': 'vendor/wreqr'
    text: 'vendor/text'
    handlebars: 'vendor/handlebars'
    moment: 'vendor/moment'
    'backbone.queryparams': 'vendor/backbone.queryparams'

  shim:
    'bootstrap':
      deps: ['jquery']
    'fine-uploader':
      deps: ['jquery']
      exports: 'qq'
    'jquery.fileupload-ui':
      deps: ['load-image']

require [
  'application'
  'core/renderer'
  'core/sync'
  'backbone.queryparams'
], (App) ->

  App.start()
