<% _.each(plants, function(plant) { %>
    <p><%= plant.ID %></p>
    <p><%= plant.moisture %></p>
    <p><%= plant.temp %></p>
    <p><%= plant.lumens %></p>
    <p><%= plant.timestamp %></p>
    <hr>
<% }); %>

<%= plants.getMoisture %>
