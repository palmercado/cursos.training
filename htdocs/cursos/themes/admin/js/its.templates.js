var its = its || {};
var data = {};
var contentHTML = ':D';

var templates = {
    instructors: { modal: '<div class="modal hide" id="modal"><div class="modal-header"><button type="button" class="close" data-dismiss="modal">×</button><h3>' + its.lang[ 'instructors' ][ 'create' ] + '</h3></div><div class="modal-body"><p>{contentHTML}</p></div><div class="modal-footer"><a href="#" class="btn" data-dismiss="modal">' + its.lang[ 'instructors' ][ 'close' ] + '</a><a href="#" class="btn btn-primary">' + its.lang[ 'instructors' ][ 'save' ] + '</a></div></div>' },
    places: { modal: '<div class="modal hide" id="modal"><div class="modal-header"><button type="button" class="close" data-dismiss="modal">×</button><h3>' + its.lang[ 'places' ][ 'create' ] + '</h3></div><div class="modal-body"><p>{contentHTML}</p></div><div class="modal-footer"><a href="#" class="btn" data-dismiss="modal">' + its.lang[ 'places' ][ 'close' ] + '</a><a href="#" class="btn btn-primary">' + its.lang[ 'places' ][ 'save' ] + '</a></div></div>' }
};

its.templates = {};

(function($){
    its.templates.createTemplate = function( templateHTML, urlText )
    {
            if($( '#modal' ))
                $( '#modal' ).remove();
            
            $.ajax(
            {
                url: urlText + '/ajax/true'
            }).done(function( data ) 
            {
                $( 'body' ).append( templateHTML.replace( '{contentHTML}', data ) );
                $( '#modal' ).modal('toggle');
                its.templates.initEvents();
            });
    }
    its.templates.initEvents = function( )
    {            
            $('#modal').on('hidden', function( e )
            {
            });
    }
})(jQuery);