@php
    use App\Http\Controllers\AdminController;
    $tools = new AdminController();
@endphp
@vite(['resources/css/dark_css/Admin/side.css', 'resources/js/Admin/side.js'])
<div id="container">
    <p class='text-center'>Espace administrateur</p>
    <li class='links'><a href='{{ route('home') }}'>Accueil</a></li>
    <li class='links'><a href='{{ route('admin.user.index') }}' class="@php echo $tools->active('user') @endphp">Gestion des utilisateurs</a></li>
    <li class='links'><a href='{{ route('admin.reservation.index') }}' class="@php echo $tools->active('reservation') @endphp">Gestion des reservations</a></li>
    <li class='links'><a href='{{ route('admin.room.index') }}' class="@php echo $tools->active('room') @endphp">Gestion des salles</a></li>
    <li class='links cursor-pointer'>
        <form action="{{ route('home') }}" method="POST">
            @csrf
            <input type='submit' value='Déconnexion' class='cursor-pointer'>
        </form>
    </li>
</div>

<div id="menu" class="active-menu">
    <div></div>
    <div></div>
    <div></div>
</div>
