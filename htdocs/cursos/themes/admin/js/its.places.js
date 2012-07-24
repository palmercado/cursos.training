var its = its || {};

(function($) 
{
    its.places = function( options ) {
        function Places( options )
        {
            options = options || {};
            return {
                //Se pasa el id del curso al que se pretende asignar el instructor
                showDialog: function( )
                {
                    its.createTemplate( templates.places.modal );
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


jQuery().ready(function(){
    its.courses().get();
});

function showDialogInstructor()
{
    its.courses().get().showDialogInstructor({courseId: 1});
}


