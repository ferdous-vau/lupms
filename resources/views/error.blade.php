<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>420 Error</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="{{asset('public/frontend')}}/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="{{asset('public/frontend')}}/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <div class="content-fluid">
    <section class="content">
      <div class="error-page">
        <h2 class="headline text-danger">400</h2>
        <div class="error-content">
          <h3><i class="fas fa-exclamation-triangle text-danger"></i> <b>Ooooooops!</b> You Are Not Eligible For This Page.</h3>
          <p>
            We will work on fixing that right away.
            Meanwhile, you may <a href="{{action('AdminController@dashboard')}}">return to dashboard</a> or try using the search form.
          </p>
        </div>
      </div>
    </section>
  </div>
</div>


<script src="{{asset('public/frontend')}}/plugins/jquery/jquery.min.js"></script>
<script src="{{asset('public/frontend')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('public/frontend')}}/dist/js/adminlte.min.js"></script>
<script src="{{asset('public/frontend')}}/dist/js/demo.js"></script>
</body>
</html>
