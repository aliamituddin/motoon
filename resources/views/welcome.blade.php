<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>متون : نظام لضبط المرويات الإسلامية</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

  <!-- Styles -->
  <link href="/css/app.css" rel="stylesheet" type="text/css">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <script>
  window.Laravel = <?php echo json_encode([
    'csrfToken' => csrf_token(),
  ]); ?>
  </script>

</head>
<body>
  <div class="flex-center position-ref full-height">


    <div class="content">
      <div class="title m-b-md">
        متون : لضبط وتنظيم المرويات الإسلامية
      </div>

    </div>
  </div>

  <div id="app">
    <example> </example>
  </div>
  <script src="/js/app.js"></script>
</body>
</html>
