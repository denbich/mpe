<?php

namespace App\Console\Commands;

use App\Models\User;
use App\Models\Official;
use Illuminate\Support\Str;
use Illuminate\Console\Command;
use function Laravel\Prompts\text;
use Illuminate\Support\Facades\DB;
use function Laravel\Prompts\select;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;

class CreateOfficialUser extends Command
{
    protected $signature = 'make:official-user';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Tworzenie konta urzędnika';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $name = text(
            label: 'Podaj nazwę użytkownika',
            placeholder: 'Np. urzednik1',
            hint: 'To będzie wyświetlane na twoim profilu.'
        );

        $firstname = text(
            label: 'Podaj imię użytkownika',
            placeholder: 'Np. Jan',
            hint: 'To będzie wyświetlane na twoim profilu.'
        );

        $lastname = text(
            label: 'Podaj nazwisko użytkownika',
            placeholder: 'Np. Kowalski',
            hint: 'To będzie wyświetlane na twoim profilu.'
        );

        $email = text(
            label: 'Podaj adres email użytkownika',
            placeholder: 'Np. jan@budogrucha.tech',
            hint: 'To będzie wyświetlane na twoim profilu.'
        );

        $telephone = text(
            label: 'Podaj numer telefonu użytkownika (Z prefixem np. +48)',
            placeholder: 'Np. +48123456789',
            hint: 'To będzie wyświetlane na twoim profilu.'
        );

        $jobtitle = text(
            label: 'Podaj nazwę stanowiska',
            placeholder: 'Np. Naczelnik',
            hint: 'To będzie wyświetlane na twoim profilu.'
        );

        $department = text(
            label: 'Podaj nazwę departamentu',
            placeholder: 'Np. Wydział bezpieczeństwa',
            hint: 'To będzie wyświetlane na twoim profilu.'
        );

        $gender = select(
            label: 'Wybierz płeć użytkownika',
            options: ['Kobieta', 'Mężczyzna'],
        );

        DB::transaction(function () use($firstname, $lastname, $name, $email, $telephone, $gender, $jobtitle, $department){
            $user = User::create([
                'firstname' => $firstname,
                'lastname' => $lastname,
                'name' => $name,
                'role' => 'official',
                'email' => $email,
                'telephone' => $telephone,
                'gender' => ($gender == 'Kobieta') ? 'k' : 'm',
                'password' => Hash::make('password'),
                'condition' => 1,
            ]);

            Official::create([
                'user_id' => $user->id,
                'department' => $department,
                'title' => $jobtitle,
            ]);

            Password::sendResetLink(['email' => $email]);
        });

        $this->info("New owner named $firstname with password  has been created!");
    }
}
