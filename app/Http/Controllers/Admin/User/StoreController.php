<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User\StoreRequest;
use App\Jobs\StoreUserJob;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\Mail\User\PasswordMail;
use Illuminate\Auth\Events\Registered;

class StoreController extends Controller
{
   public function __invoke(StoreRequest $request)
   {
      $data = $request->validated();
      StoreUserJob::dispatch($data);
      // $password = Str::random(10);
      // $data['password'] = Hash::make($password);
      // $user = User::firstOrCreate(['email' => $data['email']], $data);
      // Mail::to($data['email'])->send(new PasswordMail($password));
      // event(new Registered($user));
      return redirect()->route('admin.user.index');
   }
}
