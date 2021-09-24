@if(session('status'))
    <div class="alert alert-success m-0 contactSuccess text-center"><h5 class="m-0">{{ session('status') }}</h5></div>
@section('page_scripts')
    <script src="{{ mix('assets/js/web/web.js') }}"></script>
@endsection
<!DOCTYPE html>
<html lang="zxx">
   <head>
      <meta charset="UTF-8">
      <meta name="description" content="Aesthetic Template">
      <meta name="keywords" content="Aesthetic, unica, creative, html">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Aesthetic | Template</title>
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
      <link rel="stylesheet" href="css/bootstrap.min.css%2bfont-awesome.min.css%2bflaticon.css%2bnice-select.css%2bjquery-ui.min.css%2bmagnific-popup.css%2bowl.carousel.min.css%2bslicknav.min.css%2bstyle.css.pagespeed.cc.09wynWjoAw.css" type="text/css" />
   </head>
<body>
<div class="infy-loader d-none" id="overlay-screen-lock">
    @include('loader')
</div>
@include('web.newLayouts.header')
@yield('content')
@include('web.newLayouts.footer')

<script src="js/jquery-3.3.1.min.js"></script>
 <script src="js/bootstrap.min.js%2bjquery.magnific-popup.min.js.pagespeed.jc.K7q7hdhZug.js"></script><script>eval(mod_pagespeed_EVlumlgnJP);</script>
 <script>eval(mod_pagespeed_eKY_SkytwE);</script>
 <script src="js/masonry.pkgd.min.js"></script>
 <script src="js/jquery-ui.min.js"></script>
 <script src="js/jquery.nice-select.min.js%2bjquery.slicknav.js%2bowl.carousel.min.js.pagespeed.jc.ESW7qhlnQy.js"></script><script>eval(mod_pagespeed_9dshK98WrC);</script>
 <script>eval(mod_pagespeed_AN6tQqj0PZ);</script>
 <script>eval(mod_pagespeed_BVsSn6ORa3);</script>
 <script src="js/main.js"></script>
 <script defer src="https://static.cloudflareinsights.com/beacon.min.js" data-cf-beacon='{"rayId":"691ad9118f402e00","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.8.1","si":10}'></script>
</body>
</html>
