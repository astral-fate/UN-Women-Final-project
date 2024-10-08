<?php

   namespace App\Http\Middleware;

   use Closure;
   use Illuminate\Http\Request;
   use Illuminate\Support\Facades\Redirect;
   use Illuminate\Contracts\Auth\MustVerifyEmail;

   class EnsureEmailIsVerified
   {
       public function handle(Request $request, Closure $next)
       {
           if (!$request->user() ||
               ($request->user() instanceof MustVerifyEmail &&
               !$request->user()->hasVerifiedEmail())) {
               return $request->expectsJson()
                   ? abort(403, 'Your email address is not verified.')
                   : Redirect::route('verification.notice');
           }

           return $next($request);
       }
   }