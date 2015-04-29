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
View file for the graph depicting light sensor data from a plant collection.
This handles all intialization, rendering, and formating.

Dependencies:
* backbone.js
* chart.js
* models/plans.js
* collections/plants.js
-------------------------------------------------------------------------*/
define(
   ['backbone', 'chartjs', 'models/plant', 'collections/plants'],
   function(Backbone, CJS, PlantModel, PlantCollection) {
      return Backbone.View.extend({

         initialize: function()
         {
            var self = this;
            p = this.collection;
            console.log(p.toJSON());
            // Render View
            self.render();
         },

         render: function()
         {
             var lbls = new Array(); // replace with an array of dates from collection
             var lightVals = new Array(); // replace with an array of moisture values from collection

             // Grab data from collection
             this.collection.each(function(label) {
                lbls.push(label.get('timestamp'));
                lightVals.push(label.get('lumens'));
            });

            var data = {
                labels: lbls,
                datasets: [
                    {
                        label: "Moisture Levels",
                        fillColor: "rgba(213, 206, 1, 0.5)",
                        strokeColor: "rgb(255, 200, 0)",
                        pointColor: "rgb(255, 200, 0)",
                        pointStrokeColor: "#fff",
                        pointHighlightFill: "#fff",
                        pointHighlightStroke: "rgb(255, 200, 0)",
                        data: lightVals
                    }
                ]
            };

            var options = {
                //Adjust size to window
                responsive : true,

                ///Boolean - Whether grid lines are shown across the chart
                scaleShowGridLines : true,

                //String - Colour of the grid lines
                scaleGridLineColor : "rgba(0,0,0,.05)",

                //Number - Width of the grid lines
                scaleGridLineWidth : 1,

                //Boolean - Whether to show horizontal lines (except X axis)
                scaleShowHorizontalLines: true,

                //Boolean - Whether to show vertical lines (except Y axis)
                scaleShowVerticalLines: true,

                //Boolean - Whether the line is curved between points
                bezierCurve : true,

                //Number - Tension of the bezier curve between points
                bezierCurveTension : 0.4,

                //Boolean - Whether to show a dot for each point
                pointDot : false,

                //Number - Radius of each point dot in pixels
                pointDotRadius : 4,

                //Number - Pixel width of point dot stroke
                pointDotStrokeWidth : 1,

                //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
                pointHitDetectionRadius : 20,

                //Boolean - Whether to show a stroke for datasets
                datasetStroke : true,

                //Number - Pixel width of dataset stroke
                datasetStrokeWidth : 2,

                //Boolean - Whether to fill the dataset with a colour
                datasetFill : true,

                //String - A legend template
                legendTemplate : "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].strokeColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>"

            };

            var ctx = document.getElementById("lightGraph").getContext("2d");
            var myLineChart = new Chart(ctx).Line(data, options);


         }

      });
   }
);
