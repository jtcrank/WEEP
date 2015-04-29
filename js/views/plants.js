/*  Copyright (C) <2015>
*  Josh Crank - crank.5@wright.edu
*  This program is free software: you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation, either version 3 of the License, or
*  (at your option) any later version.
*
*  This program is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  You should have received a copy of the GNU General Public License
*  along with this program.  If not, see <http://www.gnu.org/licenses/>.

-------------------------------------------------------------------------
File Description:
<<<<<<<<<<< DEPRICATED!!! >>>>>>>>>>>
View file for the plant data from a plant collection.

Dependencies:
* backbone.js
* chart.js
* models/plans.js
* collections/plants.js
* text!template plant.php
-------------------------------------------------------------------------*/
define(
   ['backbone', 'chartjs', 'models/plant', 'collections/plants', 'text!templates/plant.php'],
   function(Backbone, CJS, PlantModel, PlantCollection, PlantTemplate) {
      return Backbone.View.extend({
         el: $('#charts'),

         template: _.template(PlantTemplate),

         initialize: function()
         {
            var self = this;
            p = this.collection;
            console.log(p.toJSON());

            /*
            <<<<<<<< DEPRICATED!!! >>>>>>>>>>>>

            plants = new PlantCollection();

            plants.fetch({
               success: function(collection) {
                  self.PlantCollection = collection;
                  self.render();
                },
                error: function() {
                    alert('Error in fetch!');
                }
            });
            <<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>
            */

            self.render();
         },

         render: function()
         {
             //console.log(p.toJSON);
            this.$el.html(this.template({ plants: p.toJSON() }));
            return this;
         }

      });
   }
);
