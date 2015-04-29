define(
   ['backbone',
    'models/plant'],
    function( Backbone, PlantModel) {
      'use strict';

      return Backbone.Collection.extend({
         url: '/get_plants.php',
         model: PlantModel
      });
  }
);
