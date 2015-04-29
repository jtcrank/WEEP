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
Model for an instance of a plant (i.e. the status of a plant at a given time)
-------------------------------------------------------------------------*/

define(
   ['backbone'],
   function(Backbone){

      return Backbone.Model.extend({
         url: '/get_plants.php',
         defaults: {
            ID: '0',
            moisture: '0',
            temp: '0',
            lumens: '0',
            timestamp: 'mm/dd/yy 00:00:00'
         }

      });
   }
);
