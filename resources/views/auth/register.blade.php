
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Bracket Plus">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/bracketplus/img/bracketplus-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/bracketplus">
    <meta property="og:title" content="Bracket Plus">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/bracketplus/img/bracketplus-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/bracketplus/img/bracketplus-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>Bracket Plus Responsive Bootstrap 4 Admin Template</title>

    <!-- vendor css -->
    <link href="{{asset('')}}lib/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="{{asset('')}}lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="{{asset('')}}lib/select2/css/select2.min.css" rel="stylesheet">

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="{{asset('')}}css/bracket.css">
  </head>

  <body>

    <div class="d-flex align-items-center justify-content-center bg-br-primary ht-100v">

      <div class="login-wrapper wd-300 wd-xs-400 pd-25 pd-xs-40 bg-white rounded shadow-base">
        <div class="signin-logo tx-center tx-28 tx-bold tx-inverse"><span class="tx-normal">[</span> bracket <span class="tx-info">plus</span> <span class="tx-normal">]</span></div>
        <div class="tx-center mg-b-40">The Admin Template For Perfectionist</div>
        

    <form method="POST" action="{{ route('register') }}">
       @csrf
        <div class="form-group">
          <input type="text" name="name" class="form-control" placeholder="Enter your username">
        </div><!-- form-group -->

        <div class="form-group">
          <input type="email" name="email" class="form-control" placeholder="Enter your email">
        </div><!-- form-group -->

       <div class="form-group">
        <select class="form-control" name="role" id="">
                <option value="">Select Role</option>
                <option value="1">Admin</option>
                <option value="2">User</option>
                <option value="3">Vendor</option>
            </select>
       </div>

        <div class="form-group">
          <input type="hidden" name="authcode" class="form-control" placeholder="Enter your authcode">
        </div><!-- form-group -->

        <div class="form-group">
          <input type="hidden" name="token" class="form-control" placeholder="Enter your Token">
        </div><!-- form-group -->

        <div class="form-group">
            <select type="hidden" class="form-control" name="status" id="status">
                <option value="">Status</option>
                <option value="1">Active</option>
                <option value="2">Inactive</option>
                <option value="3">Pending</option>
            </select>
        </div>
    
        <div class="form-group">
          <input type="password" name="password" class="form-control" placeholder="Enter your password">
        </div><!-- form-group -->

        <div class="form-group">
          <input type="password" name="password_confirmation" class="form-control" placeholder="Enter your confirmation password">
        </div><!-- form-group -->
       
        <button type="submit" class="btn btn-info btn-block">Sign Up</button>
    </form>

        <div class="mg-t-40 tx-center">Not yet a member? <a href="" class="tx-info">Sign Up</a></div>
      </div><!-- login-wrapper -->
    </div><!-- d-flex -->

    <script src="{{asset('')}}lib/jquery/jquery.min.js"></script>
    <script src="{{asset('')}}lib/jquery-ui/ui/widgets/datepicker.js"></script>
    <script src="{{asset('')}}lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('')}}lib/select2/js/select2.min.js"></script>
    <script>
      $(function(){
        'use strict';

        $('.select2').select2({
          minimumResultsForSearch: Infinity
        });
      });
    </script>

  </body>
</html>
