@extends('layouts.auth.login_base')

<div class="row">
    <div class="col right-side-container">
        <img src="{{asset('/image/register-illustration.svg')}}" alt="" class="login-image">
    </div>
    <div class="col left-side-container">
        <div class="login-card">
            <div class="card-header">
                <h2>Svara</h2>
               <span>Ready to dive into a another world?</span>
            </div>
            <form action="" method="POST">
                @csrf
                <div class="form-controller">
                    <label for="fullname">Fullname</label>
                    <input type="fullname" name="fullname" id="fullname" class="form-control" placeholder="fullname">
                </div>
                <div class="form-controller">
                    <label for="numPhome">Number Phone</label>
                    <input type="numPhome" name="numPhome" id="numPhome" class="form-control" placeholder="Number Phone">
                </div>
                <div class="form-controller">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                </div>
                <div class="form-controller">
                    <label for="gender">Gender</label>
                    <select name="gender" id="gender" class="form-select">
                        <option value="0" selected disabled>Gender</option>
                        @for ($i = 0; $i < 2; $i++)
                        <option value="{{$genders->alias[$i]}}">{{$genders->gender[$i]}}</option>
                        @endfor
                    </select>
                </div>
                <div class="form-controller">
                    <label for="pass">Password</label>
                    <input type="password" name="password" id="pass" class="form-control" placeholder="Password">
                    <button class="btn btn-show-pass d-block" type="button" id="showPass" data-id="showPass">
                        <i class="bi bi-eye-fill" data-id="showPass"></i>
                    </button>
                    <button class="btn btn-show-pass d-none" type="button" data-id="hidePass" id="hidePass">
                        <i class="bi bi-eye-slash-fill" data-id="hidePass"></i>
                    </button>
                </div>
                <div class="form-controller">
                    <label for="confpass">Confirm Password</label>
                    <input type="password" name="confPass" id="confPass" class="form-control" placeholder="Confirm Password">
                    <button class="btn btn-show-pass" type="button" data-id="showConfPass" id="showConfPass">
                        <i class="bi bi-eye-fill" data-id="showConfPass"></i>
                    </button>
                    <button class="btn btn-show-pass d-none" type="button" data-id="hideConfPass" id="hideConfPass">
                        <i class="bi bi-eye-slash-fill" data-id="hideConfPass"></i>
                    </button>
                </div>
                <div class="form-footer">
                    <button type="submit" class="btn btn-primary">Sign Up</button>
                    <span>Already have account? click <a href="{{route('route.login_view')}}">here</a></span>
                </div>
            </form>
        </div>
    </div>
</div>
