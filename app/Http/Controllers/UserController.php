<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller {
    /**
        * Deze functie geeft de login-pagina op voor de gebruiker.
        * @return View - Een view met de login pagina.
    */
    public function index(): View {
        return view('login-modal');
    }

    /**
        * Deze functie geeft aan of een gebruiker ingelogd is.
        * @return bool - Een boolean die aangeeft of de gebruiker ingelogd is.
    */
    public function IsLoggedIn(): bool {
        return auth()->user() !== null;
    }

    /**
        * Deze functie maakt een nieuwe gebruiker aan.
        * @return RedirectResponse - Een redirect terug naar de login pagina.
    */
    public function register(): RedirectResponse {
        
        // Bekijk eerst of er geen gebruiker bestaat met deze email:
        $userExists = count( User::all()->where('email', request("email"))) != 0;

        if(!$userExists) {
            $user = new User();
            $user->password = Hash::make(request('password'));
            $user->email = request('email');
            $user->name = sprintf("%s %s", request('voornaam'), request('achternaam'));
            $user->role_id = 1;
            $user->save();

            return redirect('login')->with(['message' => 'Uw account is aangemaakt!']);
        } else {
            return redirect('login')->with(['message' => "Er ging iets fout terwijl we uw account aan het opzetten waren."]);
        }
    }

    /**
        * Deze functie probeert een gebruiker in te loggen.
        * @return RedirectResponse - Een redirect terug naar de login pagina, als alles gelukt is.
    */
    public function login(): RedirectResponse {
        $email = request('email');
        $plainPassword = request('password');

        $user = User::all()->where('email', $email)->first();
        $userExits = isset($user);

        // Bekijk eerst of de gebruiker bestaat voordat we verder gaan.
        // Dit is om ervoor te zorgen dat er geen fouten in laravel komen.
        if($userExits) {
            $passwordMatches = Hash::check($plainPassword, $user->password);

            // Als de hash van het wachtwoord hetzelfde is, kunnen we er van uit gaan de de gebruiker
            // De login gegevens goed ingevult heeft.
            if($passwordMatches) {
                Auth::login($user, true);
                return redirect('login')->with(['login_success' => 'Welkom terug!']);
            }
        }

        return redirect('login')->with(['error' => 'Aanmelden mislukt.']);
    }

    /**
        * Deze functie logt de gebruiker uit van hun sessie.
        * @return RedirectResponse - Een redirect terug naar de login pagina.
    */
    public function logout(): RedirectResponse {
        Auth::logout();
        return redirect('login');
    }
}