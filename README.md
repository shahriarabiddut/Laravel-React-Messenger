## About Project

Welcome to **Laravel React Messenger App** Repository.

## Technology Stack

-   Laravel
-   React
-   Tailwind CSS
-   Breeze Authentication ( composer require laravel/breeze --dev)

## Installed Packages

-   [HeadlessUI](https://headlessui.com/).
-   [Hero Icons](https://heroicons.com/).
-   [DaisyUI](https://daisyui.com/).
-   [Emoji Picker React](https://www.npmjs.com/package/emoji-picker-react).
-   [React Mark Down](https://www.npmjs.com/package/react-markdown).
-   [HeadlessUI](url).
-   Command : `npm install @headlessui/react @heroicons/react daisyui emoji-picker-react react-markdown uuid`
-   Laravel Reverb : Reverb is a first-party WebSocket server for Laravel applications, bringing real-time communication between client and server directly to your fingertips.
-   Command : `php artisan install:broadcasting` -> `yes` -> `yes`

## Database

-   `php artisan make:model ModelName -m` (Created Eloquent Models with Database Table Blueprint)
-   Defined Relations in public functions inside Models
-   `php artisan migrate:fresh --seed` ( Drop all existing tables. Run all migration files to recreate the tables. Execute the seeders defined in the DatabaseSeeder class to repopulate data)

## Controller

-   `php artisan make:controller HomeController` - Creating Necessary Controllers
-   Middleware Added to access home
    `Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/', [HomeController::class, 'home'])->name('dashboard');
});`

## React Layouts

-   React Files -> `Resources > js`
-   Creating layout in `Resources > js > Layouts > ChatLayout.jsx`
-   In `App\Http\Middleware\HandleInertiaRequests.php` , share function shares returned variable for every page and can be accessed using `usePage().props.returnedVariable.keyOrIndex`;
    Example : user data can be shared under auth there and can be accessed like `const user = usePage().props.auth.user;
`.
-   Dynamic Title : `<Head title="It is where you control the title" />`
-   [Inertia Persistent Layout](https://inertiajs.com/pages#persistent-layouts)
-   `useEffect(()=>{
    console.log('Mounted')
},[])` - use this to check Persistent Layout is correctly applied or not! If Rerenders then it's not aplied correctly.

## Laravel Reverb Next

-   ......

## Project Timeline

-   All The Necessary Package Installed
-   Generating Models,Tables,Factories,Seeders.
-   Generating Controllers.
-   Generating Layouts.

## Laravel Server Run

-   Laravel - `php artisan serve`
-   React - `npm run dev`
-   Comment out `import './echo';` for websocket errors in console from `Resources > js > bootstrap.js`
