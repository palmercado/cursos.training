var its = its || {};

(function($) 
{
    its.courses = function( options ) {
        function Courses( options )
        {
            options = options || {};
            return {
                //Se pasa el id del curso al que se pretende asignar el instructor
                showDialogInstructor: function( data )
                {
                    its.instructors().get().showDialog( data );
                },
                showDialogPlace: function( data )
                {
                    its.places().get().showDialog( data );
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


function showDialogPlace()
{
    its.courses().get().showDialogPlace({courseId: 1});
}