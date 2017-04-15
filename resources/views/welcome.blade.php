<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <meta name="_token" content="{{ csrf_token() }}" />
        <!-- Fonts -->
        <link href="{{url('/')}}/css/style.css" rel="stylesheet" type="text/css">
        <link href="{{url('/')}}/vendor/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="{{url('/')}}/js/custom.js"></script>
        <!-- Styles -->
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 col-block">
                        <div class="panel panel-default">
                            <div class="panel-heading"></div>
                            <div class="panel-body">
                                <div id="static_block">
                                    <form class="form-horizontal">
                                        <input type="hidden" id="csrf_token" value="{{csrf_token()}}">
                                        <div class="form-group">
                                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>
                                            <div class="col-md-6">
                                                <input type="email" placeholder="Your BEST email" class="form-control" id="email">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-md-6 col-md-offset-4">
                                                <button id="email_submit"  class="btn btn-primary">
                                                    Alert Me
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
