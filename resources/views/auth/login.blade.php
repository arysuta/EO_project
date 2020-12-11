<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script src="https://www.recaptcha.net/recaptcha/api.js" async defer></script>
            <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                     <h4 class="modal-title" id="LoginLabel">Login</h4>
            </div>
                
    
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login.custom') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('captcha') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Captcha</label>
                            <div class="col-md-6">
                                <div class="captcha">
                                    <span>{!! captcha_img() !!}</span>
                                    <button type="button" class="btn btn-success btn-refresh"><i class="fa fa-refresh"></i></button>
                                </div>
                                <input id="captcha" type="text" class="form-control" placeholder="Enter Captcha" name="captcha" required>
                                @if ($errors->has('captcha'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('captcha') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                     

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}" data-toggle="modal" data-target="#ForgotModal" data-dismiss="modal">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>

                <script type="text/javascript">
                    @if ($errors->has('email'))
                            alert('{{ $errors->first('email') }}');
                    @endif
                    @if ($errors->has('password'))
                            alert('{{ $errors->first('password') }}');
                    @endif
                </script>

                <script type="text/javascript">
                    $(".btn-refresh").click(function(){
                        $.ajax({
                            type:'GET',
                            url:'/refresh_captcha',
                            success:function(data){
                                $(".captcha span").html(data.captcha);
                            }
                        });
                    });
                </script>