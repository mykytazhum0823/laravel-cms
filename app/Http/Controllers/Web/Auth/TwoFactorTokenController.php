<?php

namespace Vanguard\Http\Controllers\Web\Auth;

use Auth;
use Authy;
use Session;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Vanguard\Events\User\LoggedIn;
use Vanguard\Http\Controllers\Controller;
use Vanguard\Repositories\User\UserRepository;
use Vanguard\Services\Auth\ThrottlesLogins;

class TwoFactorTokenController extends Controller
{
    use ThrottlesLogins;

    /**
     * @var UserRepository
     */
    private $users;

    /**
     * Create a new authentication controller instance.
     * @param UserRepository $users
     */
    public function __construct(UserRepository $users)
    {
        $this->users = $users;
    }

    /**
     * Show Two-Factor Token form.
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function show()
    {
        if (! session('auth.2fa.id')) {
            return redirect('login');
        }
        else{
            $user = $this->users->find(
                session('auth.2fa.id')
            );
            return view('auth.token', compact('user'));
        }
    }

    /**
     * Handle Two-Factor token form submission.
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request)
    {
        $this->validate($request, ['token' => 'required']);

        if (! session('auth.2fa.id')) {
            return redirect('login');
        }

        $user = $this->users->find(
            $request->session()->pull('auth.2fa.id')
        );

        if (! $user) {
            throw new NotFoundHttpException;
        }
        \Log::info(Session::get('user.2fa.code'));
        \Log::info($request->token);

        if(Session::get('user.2fa.code') != $request->token){
            \Log::info('diff');
            $request->session()->put('auth.2fa.id', $user->id);
            \Log::debug(session('auth.2fa.id'));

            return redirect()->route('auth.token')
                ->withErrors(__('2FA Code is invalid!'));
        }
        /*
        if (! Authy::tokenIsValid($user, $request->token)) {
            return redirect()->to('login')
                ->withErrors(__('2FA Token is invalid!'));
        }
        */
        Session::put('user.2fa.success', 1);
        Auth::login($user);

        event(new LoggedIn);

        return redirect()->intended('/');
    }
}
