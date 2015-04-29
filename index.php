<!--

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


File Description:
Homepage for the IN PROGRESS WEEP (Web Enabled Electronic Plant) project.
This includes navigation, chat functions, and graphing of data.

-->


<!DOCTYPE html>
<html lang="en" class="page_view">
<head>
  <title>Dev Zone</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
   <link href="css/main.css" rel="stylesheet">
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar">
  <div class="container-fluid nav_container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <a class="navbar-brand" id="logo_box" href="#">
          <div id="weep_logo">
              <span class="glyphicon glyphicon-leaf" id="leaf_logo">WEEP</span>
              <br><span id="logo_subtext">Web-Enabled Electronic Plant</span>
          </div>
      </a>

    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="nav-link active"><a href="#">Meet WEEP!</a></li>
        <li><a class="nav-link" href="#">How To</a></li>
        <li><a class="nav-link" href="#">About</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid">
    <div class="row padded_row gradient_bg" style="height: 100%;">
        <div class="col-md-4 center">
            <img src="/images/plant.png" class="img"  height="350" alt="Plant_Image" style="margin-bottom: 10px;">
        </div>
        <div class="col-md-5 center">
            <div class="bubble" id="chat_bubble">
                <div id="messages_wrapper">
                    <div id="bubble_messages">

                    </div>
                </div>
            </div>
            <!-- Minimized Viewport Button Bar -->
            <div class="row gray_gradient" id="sm-btnbar">
                <div class="col-md-2">
                    <div style="width: 100%;"><button type="button" class="btn btn-default btn-sm chatbtn chatbtn-sm" id="greet">Hello WEEP!</button></div>
                </div>
                <div class="col-md-2">
                    <div style="width: 100%;"><button type="button" class="btn btn-default btn-sm chatbtn chatbtn-sm" id="status">How are you?</button></div>
                </div>
                <div class="col-md-2">
                    <div style="width: 100%;"><button type="button" class="btn btn-default btn-sm chatbtn chatbtn-sm" id="who">Tell me about yourself.</button></div>
                </div>
                <div class="col-md-2">
                    <div style="width: 100%;"><button type="button" class="btn btn-default btn-sm chatbtn chatbtn-sm" id="how">How do you work?</button></div>
                </div>
                <div class="col-md-2">
                    <div style="width: 100%;"><button type="button" class="btn btn-default btn-sm chatbtn chatbtn-sm" id="joke">Have any good jokes?</button></div>
                </div>
                <div class="col-md-2">
                    <div style="width: 100%;"><button type="button" class="btn btn-default btn-sm chatbtn chatbtn-sm" id="music" disabled>What are you listening to?</button></div>
                </div>
            </div>
        </div>
        <div class="col-md-3 center">
            <div class="row">
                <div class="col-md-12">
                    <div class="rounded_top" id="twitter_header"><img src="images/twitter_logo.png" id="twitter_logo" alt="Twitter Logo">&nbsp&nbspWEEP's Twitter</div>
                    <div class="rounded_bottom" id="twitter_body">(WEEP is still in the seedling stages of his online transformation, therefore he hasn't established his Twitter presence just yet. Stay tuned...)</div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row gray_gradient" id="lg-btnbar">
    <div class="col-md-2">
        <div style="width: 100%;"><button type="button" class="btn btn-default btn-sm chatbtn-lg chatbtn" id="greet2">Hello WEEP!</button></div>
    </div>
    <div class="col-md-2">
        <div style="width: 100%;"><button type="button" class="btn btn-default btn-sm chatbtn-lg chatbtn" id="status2">How are you?</button></div>
    </div>
    <div class="col-md-2">
        <div style="width: 100%;"><button type="button" class="btn btn-default btn-sm chatbtn-lg chatbtn" id="who2">Tell me about yourself.</button></div>
    </div>
    <div class="col-md-2">
        <div style="width: 100%;"><button type="button" class="btn btn-default btn-sm chatbtn-lg chatbtn" id="how2">How do you work?</button></div>
    </div>
    <div class="col-md-2">
        <div style="width: 100%;"><button type="button" class="btn btn-default btn-sm chatbtn-lg chatbtn" id="joke2">Have any good jokes?</button></div>
    </div>
    <div class="col-md-2">
        <div style="width: 100%;"><button type="button" class="btn btn-default btn-sm chatbtn-lg chatbtn" id="music2" disabled>What are you listening to?</button></div>
    </div>
</div>

<div class="container-fluid">
    <!-- TEMPLATE DIVS HERE -->
    <!-- <script id="charts" type="text/template"></script> -->
    <!-- GRAPHS -->
    <div class="row padded_row">
        <!-- Moisture Graph -->
        <div class="col-md-4">
            <div class="row light_border graph_heading rounded_top margin_upper gradient_bg">
                <div class="col-md-12">
                    <h1><span class="glyphicon glyphicon-tint circle_bg" style="color: #5C8AA6;"></span>&nbspMoisture</h1>
                </div>
            </div>
            <div class="row light_border rounded_bottom margin_lower" style="margin-bottom: 10px;">
                <div class="col-md-12">
                    <div>
                        <canvas id="moistureGraph"></canvas>
                    </div>
                </div>
            </div>
        </div> <!-- end Moisture Graph-->

        <!-- Light Graph -->
        <div class="col-md-4">
            <div class="row light_border graph_heading rounded_top margin_upper gradient_bg">
                <div class="col-md-12">
                    <h1><span class="glyphicon glyphicon-certificate" style="color: #F9F79E;"></span>&nbspLight</h1>
                </div>
            </div>
            <div class="row light_border rounded_bottom margin_lower" style="margin-bottom: 10px;">
                <div class="col-md-12">
                    <div>
                        <canvas id="lightGraph"></canvas>
                    </div>
                </div>
            </div>
        </div> <!-- end Light Graph-->

        <!-- Temperature Graph -->
        <div class="col-md-4">
            <div class="row light_border graph_heading rounded_top margin_upper gradient_bg">
                <div class="col-md-12">
                    <h1><span class="glyphicon glyphicon-dashboard circle_bg" style="color: #f7933d;"></span>&nbspTemperature</h1>
                </div>
            </div>
            <div class="row light_border rounded_bottom margin_lower" style="margin-bottom: 10px;">
                <div class="col-md-12">
                    <div>
                        <canvas id="tempGraph"></canvas>
                    </div>
                </div>
            </div>
        </div> <!-- end Temperature Graph-->

    </div><!-- end Graph Rows -->
</div><!-- end Container -->

<script src="js/libs/require.js"></script>
<script>
requirejs.config({
   baseUrl: '/js',
   paths: {
      jquery:     'https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min',
      bootstrap:  'http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.mins',
      underscore: 'libs/underscore',
      backbone:   'libs/backbone',
      chartjs:    'libs/CJS/Chart',
      text:       'libs/text'
   },

   shim: {
      underscore: {
         exports: '_'
      },
      chartjs: {
        exports: 'CJS'
      },
      backbone: {
         deps: ['underscore', 'jquery'],
         exports: 'Backbone'
      }
   }
});

requirejs(
      ['backbone', 'chartjs', 'collections/plants', 'models/plant', 'views/moistureGraph', 'views/lightGraph', 'views/tempGraph'],
      function (Backbone, CJS, PlantCollection, PlantModel, MoistureView, LightView, TempView){
         'use strict';
         var plants = new PlantCollection();
         plants.fetch({
            success: function() {
                // fetch successfully completed
                // Render Graph Views
                var mView = new MoistureView({collection: plants});
                var lView = new LightView({collection: plants});
                var tView = new TempView({collection: plants});
            },
            error: function() {
                console.log('Failed to fetch!');
            }
        });
      }
);
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
$(document).ready(function(){
    if($(window).width() <= 992 && !$("#sm-btnbar").is(":visible"))
    {
        $("#sm-btnbar").toggle();
        $("#lg-btnbar").toggle();
    }

    if($(window).width() > 992 && !$("#lg-btnbar").is(":visible"))
    {
        $("#sm-btnbar").toggle();
        $("#lg-btnbar").toggle();
    }

    $("#bubble_messages").width($("#messages_wrapper").width());

    $("#bubble_messages").append('<div class="chat_response">Welcome!</div><div style="clear: both;"></div>');

    $(".chatbtn").click(function() {

        $("#bubble_messages").append('<div class="chat_msg">' + $(this).text() + '</div><div style="clear: both;"></div>');

        var message = this.id;
        $.ajax({
             type: 'POST',
             url: 'chat_handler.php',
             data: { msg: message },
             success: function(response) {
                 $("#bubble_messages").append('<div class="chat_response">' + response + '</div><div style="clear: both;"></div>');
             }
         });


         $("#messages_wrapper").animate({scrollTop: $("#bubble_messages").height()}, 300);



     });


    $(window).bind('resize', function() {

        var bubble_width = $("#messages_wrapper").width();
        $("#bubble_messages").width(bubble_width);

        if($(window).width() <= 992 && !$("#sm-btnbar").is(":visible"))
        {
            $("#sm-btnbar").toggle();
            $("#lg-btnbar").toggle();
        }

        if($(window).width() > 992 && !$("#lg-btnbar").is(":visible"))
        {
            $("#sm-btnbar").toggle();
            $("#lg-btnbar").toggle();
        }
    });

});

</script>
</body>
</html>
