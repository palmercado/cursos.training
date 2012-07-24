var its = its || {};

(function($) 
{
    its.courses = function( options ) {
        function Courses( options )
        {
            options = options || {};
            return {
                initEvents: function()
                {
                    $( '#showPlaces, #showInstructors' ).unbind();
                    
                    $( '#showPlaces' ).click( function( e ) {
                        its.courses().get().showDialogPlace(jQuery( this ));
                        e.preventDefault();
                    });
                    
                    $( '#showInstructors' ).click( function( e ) {
                        its.courses().get().showDialogInstructor({courseId: 1}, jQuery( this ));
                        e.preventDefault();
                    });
                },
                //Se pasa el id del curso al que se pretende asignar el instructor
                showDialogInstructor: function( data, obj )
                {
                    its.instructors().get().showDialog( data, obj );
                },
                showDialogPlace: function( obj )
                {
                    its.places().get().showDialog( obj );
                }
            };
        }
        
        var instance;
        
        var _static = {
            get: function( options ) 
            {
                if( instance === undefined )
                {
                    instance = new Courses( options );
                    instance.initEvents();
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