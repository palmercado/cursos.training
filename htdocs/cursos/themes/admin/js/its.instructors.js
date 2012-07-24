var its = its || {};

(function($) 
{
    its.instructors = function( options ) {
        function Instructors( options )
        {
            options = options || {};
            return {
                //Se pasa el id del curso al que se pretende asignar el instructor
                showDialog: function( data )
                {
                    data.courseId = parseInt( data.courseId ) || parseInt( data.courseId );
                    
                    if( data.courseId == 0 )
                    {
                        return false; //Si no hay un id de curso no se puede continuar
                    }
                    
                    its.createTemplate( templates.instructors.modal );
                }
            };
        }
        
        var instance;
        
        var _static = {
            get: function( options ) 
            {
                if( instance === undefined )
                {
                    instance = new Instructors( options );
                }
                return instance;
            }
        };
        
        return _static;
    };
})(jQuery);