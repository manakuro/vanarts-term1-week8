$(function() {



  /*---------------------------
      Utility
  ---------------------------*/

    /**
     * Get a random integer between `min` and `max`.
     * 
     * @param {number} min - min number
     * @param {number} max - max number
     * @return {int} a random integer
     */
    function getRandomInt(min, max) {
      return Math.floor(Math.random() * (max - min + 1) + min);
    }

     function objectize(inputs, options) {

        var self = this,
            result = {};
        
        options = options || {};

        _.each( inputs, function(input){

            if ( options.escape ) {
                input.value = self.escape( input.value );
            }

            if ( options.trim ) {
                input.value = self.trim( input.value );
            }

            if ( input.name.indexOf(".") !== -1 ) {

                input.name = input.name.split(".");

                if ( result[input.name[0]] === undefined ) {
                    result[input.name[0]] = {};
                }

                result[input.name[0]][input.name[1]] = input.value;

            } else {
                result[input.name] = input.value;
            }
        });
        return result;
    }

});