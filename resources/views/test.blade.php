<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="description" content="Meta description goes here">
<title>Title goes here</title>
<link type="text/css" rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<div id="app">
<h1 class="text-3xl font-bold underline">
    Hello world!
  </h1>
  <button class="btn w-64 rounded-full">Button</button>
  <!-- The button to open modal -->
<label for="my-modal" class="btn modal-button">open modal</label>

<!-- Put this part before </body> tag -->
<input type="checkbox" id="my-modal" class="modal-toggle">
<div class="modal">
  <div class="modal-box">
    <h3 class="font-bold text-lg">Congratulations random Interner user!</h3>
    <p class="py-4">You've been selected for a chance to get one year of subscription to use Wikipedia for free!</p>
    <div class="modal-action">
      <label for="my-modal" class="btn">Yay!</label>
    </div>
  </div>
</div>
</div>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

