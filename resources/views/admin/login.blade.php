<div class="container">
 <div class="row vertical-center-row">
  <div class="col-md-4 col-center-block login-widget">
  <form method="post" action="{{URL::route('login')}}">
    <h1 class="text-center"><i class="fa fa-dot-circle-o"></i>Login</h1>
   <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group">
        <div class="input-group">
            <div class="input-group-addon"><i class="fa fa-user fa-fw"></i>
            </div> <input class="form-control" name="users" placeholder="Username" type="text" value="{{old('users')}}">
         </div>
            <span style="color: red">{{(isset($errors) and($errors->has('users')))? $errors->first('users') :''}}</span>
    </div>

    <div class="form-group">
        <div class="input-group">
            <div class="input-group-addon"><i class="fa fa-key fa-fw"></i>
            </div> <input class="form-control"  name="pass" placeholder="******" type="password" >
            <span style="color: red"></span>
        </div>
        <span style="color: red">{{(isset($errors) and($errors->has('pass')))? $errors->first('pass') :''}}</span>
    </div>

    <div class="form-group">
        <div class="checkbox"> <label for="c1"><input id="c1" name="cc" type="checkbox">Nhớ thông tin</label></div>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block">Đăng nhập</button>
        <hr>
        <p class="text-center">Bạn quên mật khẩu? <strong><a href="#" class="blue-text">Liên hệ ngay!</a></strong></p>
    </div>
   </form>
   </div>
  </div>
</div>