@extends('layouts.master_authen')
@section('content')

<div class="container position-sticky z-index-sticky top-0">
    <div class="row">
      <div class="col-12">

      </div>
    </div>
  </div>
  <main class="main-content  mt-0">
    <div class="page-header align-items-start min-vh-100" style="background-image: url('https://images.unsplash.com/photo-1497294815431-9365093b7331?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1950&q=80');">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-4 col-md-8 col-12 mx-auto">
            <div class="card z-index-0 fadeIn3 fadeInBottom">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                  <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Sign up</h4>
                  <div class="row mt-3">

                  </div>
                </div>
              </div>
              <div class="card-body">
                <form role="form" method="POST" action="{{ route('register') }}">
                  @csrf
                  <div class="input-group input-group-outline my-3">
                    <input type="text" name="name" class="form-control text-dark" placeholder="Name" />
                  </div>
                  <div class="input-group input-group-outline my-3">
                    <!-- <label class="form-label">Email</label> -->
                    <input type="email" name="email" class="form-control text-dark" placeholder="Email" />
                  </div>
                  <div class="input-group input-group-outline mb-3">
                    <!-- <label class="form-label">Password</label> -->
                    <input type="password" name="password" class="form-control" placeholder="Password" />
                  </div>
                  <div class="input-group input-group-outline mb-3">
                    <!-- <label class="form-label">Password</label> -->
                    <input type="password" name="password_confirmation" class="form-control" placeholder="Password Confirm" />
                  </div>
                  <div class="text-center">
                    <input type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2" value="Sign up">
                  </div>

                  <p class="mt-4 text-sm text-center">
                    Go to?
                    <a href="{{route('login')}}" class="text-primary text-gradient font-weight-bold">Sign in</a>
                  </p>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

@end
