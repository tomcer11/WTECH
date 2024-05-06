<!DOCTYPE html>
<html lang="sk">
<head>
    <title>Bike shop - Admin page</title>
    
    @include('layout.partials.head')

    <link rel="stylesheet" href="{{ asset('/css/ADMIN_login.css') }}">
    
<body>
    @can('admin', $user)
        
        @include('layout.partials.admin-navbar')

        <main>
            <section class="container-fluid mt-3">
                    @yield('content')  
            </section>
        </main>
        

        @include('layout.partials.script')
    @else

    @endcan

</body>


</html>
