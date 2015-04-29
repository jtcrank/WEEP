<?php

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
This script handles the chat functions of the WEEP web interface.  It
receives an incoming message, pulls data, and responds accordingly.
-------------------------------------------------------------------------*/

// Prompt received from the web interface of WEEP's chat feature
$msg = $_POST['msg'];

// Temporary values for sensor data
$temp = '0';
$moisture = '0';
$lumens = '0';

// MySQL Database link and query
$query = "SELECT * FROM CONDITIONS ORDER BY timestamp DESC LIMIT 1";

/* ATTN!!!! The connection line is a placeholder only. All connection
 credentials should be handled via a config file to secure information */
$link = mysqli_connect("XX.XXX.XXX.XX", "XXXXXXXX", "XXXXXXXX", "XXXXXXXXX");

$results = mysqli_query($link, $query);

foreach($results as $result){
    $temp = $result['temperature'];
    $moisture = $result['moisture'];
    $lumens = $result['luminosity'];
}

// Message Options (Moisture)
$goodMoisture = array('I have plenty of water.', 'My water levels are perfect', 'I am not really thirsty.', 'I have been drinking plenty of water.', 'Water is not really needed right now.');
$lowMoisture = array('I am very thirsty.', 'I could use some water.', 'It would be nice to have some more water.', 'My soil is pretty dry right now.', 'I need something to drink.');
$highMoisture = array('There is way too much water.', 'I think my roommate is trying to drown me...', 'I can not believe I am saying this, but I have too much water.', 'I had a little too much to drink.', 'I have too much water. I am practically swimming!');

// Message Options (Temp)
$goodTemperature = array('I am not too hot or too cold.', 'The temperature is just right.', 'I am quite comfy.', 'Temperature is spot on.', 'The temp here feels good.');
$lowTemperature = array('III ammmm fffrreeeezzzing...', 'It is way too cold.', 'My roommate is freezing me!', 'Its chilly in here.', 'The temp is a bit low here.');
$highTemperature = array('I am burning in here!', 'I think my roommate is trying to cook me.', 'Its way to hot in here.', 'Its getting hot in here, so take... sorry, where was I?', 'Just like that musician from the Caribbean, Im feeling hot hot hot...');

// Message Options (Light)
$goodLight = array('Its not too bright or not too dark.', 'Theres sufficient light here.', 'Light levels are all good.', 'Im all good where light is conserned', 'Its not too bright.');
$lowLight = array('Its dark in here.', 'Im scared. I dont like the dark...', 'I could use some sun.', 'I have too much shade.', 'The light is a bit too low here.');
$highLight = array('Its so bright!', 'I need some sunglasses.', 'The sun is a bit much.', 'Light levels are way to high.', 'Im baking in the sun. Do you have sun block?');

// Message Options (Greetings)
$greetings = array('Hey there. My name is WEEP. That stands for Web Enabled Electronic Plant.', 'Im WEEP the Web Enabled Electronic Plant.', 'Hola, my friend! I am WEEP, the Web Enabled Electronic Plant.', 'Yes, Im WEEP. WEEP. You know, the Web Enabled Electronic Plant? You HAVE heard of me, right?', 'Greetings. The name is Web Enabled Electronic Plant, or WEEP for short.');

// About WEEP message
$about = 'I am your common ragweed. I prefer a moderate soil temperature around 50-80 degrees. I like a fair amount of water.  Mostly in the 2-300 range. I also like a good amount of sunlight. Look for ranges in the range of 2-320 range.';

// Message Options (Jokes)
$jokes = ['Why did the cabbage win the race?<br>(Because it was ahead!)', 'How do trees get on the Internet?<br>(They log in!)', 'Why is a tree like a big dog?<br>(They both have lot of bark!)', 'Why is the mushroom always invited to parties?<br>(Because he is a fungi!)<br>Get it? Fun-Guy?', 'What kind of flower grows on your face?<br>(Tulips!)', ];

// How it works message
$howMsg = 'My creator gave me these great sensors that can read if I have enough water, how much light I have, and how hot/cold it is in here.  Then he gave me a brain, which he calls an "Arduino Yun", that gives the information to my internet presence.  My brain is uses code written in C, along with web technologies like PHP and JavaScript.';


// Construct Messages based off of prompt
if($msg == 'how' or $msg == 'how2'){
    echo $howMsg;
}

if($msg == 'who' or $msg == 'who2'){
    echo $about;
}

if($msg == 'joke' or $msg == 'joke2'){
    echo $jokes[rand(0,4)];
}

if($msg == 'greet' or $msg == 'greet2'){
    echo $greetings[rand(0,4)];
}

if($msg == 'status' or $msg == 'status2'){
    if($temp < 50){
        echo '<br>'.$lowTemperature[rand(0,4)];
    }elseif($temp > 80){
        echo '<br>'.$highTemperature[rand(0,4)];
    }else{
        echo '<br>'.$goodTemperature[rand(0,4)];
    }

    if($lumens < 200){
        echo '<br>'.$lowLight[rand(0,4)];
    }elseif($lumens > 320){
        echo '<br>'.$highLight[rand(0,4)];
    }else{
        echo '<br>'.$goodLight[rand(0,4)];
    }

    if($moisture < 200){
        echo '<br>'.$lowMoisture[rand(0,4)];
    }elseif($moisture > 300){
        echo '<br>'.$highMoisture[rand(0,4)];
    }else{
        echo '<br>'.$goodMoisture[rand(0,4)];
    }
}

?>
