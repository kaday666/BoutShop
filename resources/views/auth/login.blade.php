@extends('layouts.user')
@section("content")
      <section class="login">
          <form action="#" class="form login__form">
               <div class="form__email">
                  <label for="email">Email</label>
                   <input type="email" name="email" >
               </div>
               <div class="form__password">
                  <label for="password">Password</label>
                   <input type="password" name="password" >
               </div>
               <button class="login__form__btn">
                  Login
               </button>
               <p class="login__form__notice">if you dont have a account please consider 
                  <a href="#">register</a></p>

          </form>
      
      </section>
@endsection