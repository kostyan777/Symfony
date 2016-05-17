define [
  'marionette'
  'text!layout/pagination/pagination.html'
], (
  Marionette
  Template
) ->
  class PaginationView extends Marionette.ItemView
    template: Template
    tagName: 'div'
    className: 'row text-center'
    pagination: {}

    events:
      'click a': 'changePage'

    initialize: (album, pagination) ->
      @album = album
      @pagination = pagination

    render: ->
      if @pagination.pageCount > 1
        html = $('<ul class="pagination">')
        for i in @pagination.pagesInRange
          css=''
          if(parseInt(@pagination.current) == i)
            css='active'
          url = '#album/' + @album.id
          if(i > 1)
            url = url + '/page/' + i
          link = $('<a>')
                  .attr('href', url)
                  .attr('data-page', i)
                  .html(i)
          li = $('<li>').addClass(css).html(link)
          html.append(li)
        $(@.el).html(html)

    changePage: (ev) ->
      ev.preventDefault()
      a = $(ev.currentTarget)
      if(a.parent('li').hasClass('active') == false)
        $(@.el).find('li').removeClass('active')
        a.parent('li').addClass('active')
        page = a.attr('data-page')
        @.trigger('images:page:changed', page)
