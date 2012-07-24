var its = its || {};

(function($) 
{
    its.places = function( options ) {
        function Places( options )
        {
            options = options || {};
            return {
                //Se pasa el id del curso al que se pretende asignar el instructor
                showDialog: function( obj )
                {
                    its.templates.createTemplate( templates.places.modal, obj.attr( 'href' ) );
                }
            };
        }
        
        var instance;
        
        var _static = {
            get: function( options ) 
            {
                if( instance === undefined )
                {
                    instance = new Places( options );
                }
                return instance;
            }
        };
        
        return _static;
    };
})(jQuery);