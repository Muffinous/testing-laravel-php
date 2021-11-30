<head>
  <link rel="stylesheet" type="text/css" href="{{ URL::to('/css/header.css') }}">
  <title>Home</title>  
</head>

<body>
  @extends('header')

  <div id="content" class="content">

    <div class="title"> Hola caracola </div>
      <p> 🐌🐌 </p>
    <div class="buttons">
      <!-- <button class="fill">Fill In</button> -->
      <!-- <button class="pulse">Pulse</button> -->
      <!-- <button class="close">Close</button> -->
      
      <button class="raise" onclick="window.location='{{ url("join") }}'">Join a party</button>
      <button class="raise">Create a party</button>
      <!-- <button class="up">Fill Up</button> -->
      <!-- <button class="slide">Slide</button> -->
      <!-- <button class="offset">Offset</button> -->
    </div>
  </div>  
</body>