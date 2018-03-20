<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title> قاعدة بيانات الحديث الشريف | جامعة المدينة العالمية </title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

  <!-- Styles -->
  <link href="/css/app.css" rel="stylesheet" type="text/css">
  <script>
  window.Laravel = <?php echo json_encode([
      'csrfToken' => csrf_token(),
  ]); ?>

</script>

</head>
<body>
<div class = "logo">
<img class = "mediu-logo" src="/images/logo.png" alt="جامعة المدينة العالمية ">
</div>
<div id ="app" class="position-ref full-height" dir = "rtl">
<search> </search>
</div>
  <script src="/js/app.js"></script>
</body>
</html>
