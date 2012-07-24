var its = its || {};
var data = {};
var contentHTML = ':D';

var templates = {
    instructors: { modal: '<div class="modal hide" id="modal"><div class="modal-header"><button type="button" class="close" data-dismiss="modal">×</button><h3>' + its.lang[ 'instructors' ][ 'create' ] + '</h3></div><div class="modal-body"><p>{contentHTML}</p></div><div class="modal-footer"><a href="#" class="btn" data-dismiss="modal">' + its.lang[ 'instructors' ][ 'close' ] + '</a><a href="#" class="btn btn-primary">' + its.lang[ 'instructors' ][ 'save' ] + '</a></div></div>' },
    places: { modal: '<div class="modal hide" id="modal"><div class="modal-header"><button type="button" class="close" data-dismiss="modal">×</button><h3>' + its.lang[ 'places' ][ 'create' ] + '</h3></div><div class="modal-body"><p>{contentHTML}</p></div><div class="modal-footer"><a href="#" class="btn" data-dismiss="modal">' + its.lang[ 'places' ][ 'close' ] + '</a><a href="#" class="btn btn-primary">' + its.lang[ 'places' ][ 'save' ] + '</a></div></div>' }
};

(function($){
    its.createTemplate = function( templatesHTML )
    {
            if($( '#modal' ))
                $( '#modal' ).remove();
            
            
            
            /*var templatesHTML = its.parserTemplate( templateName );*/
            
            $( 'body' ).append( templatesHTML );
            $( '#modal' ).modal();
    }
    
    its.parserTemplate = function( templateName )
    {
            var contentHTML = templates[templateName][ 'modal' ];
            var contentURL  = templates[templateName][ 'url' ];
            
            contentHTML.replace( '/{contentHTML}/i', content )
    }
})(jQuery);