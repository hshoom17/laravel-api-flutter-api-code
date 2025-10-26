<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <style>
            body {
                font-family: 'Instrument Sans', sans-serif;
                background: #FDFDFC;
                color: #1b1b18;
                padding: 2rem;
            }
            .container {
                max-width: 1200px;
                margin: 0 auto;
            }
            h1 {
                margin-bottom: 2rem;
            }
            table {
                width: 100%;
                border-collapse: collapse;
                background: white;
                border-radius: 8px;
                overflow: hidden;
                box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            }
            th, td {
                padding: 1rem;
                text-align: left;
                border-bottom: 1px solid #e3e3e0;
            }
            th {
                background: #f5f5f5;
                font-weight: 600;
            }
            tr:hover {
                background: #f9f9f9;
            }
            .no-users {
                text-align: center;
                padding: 3rem;
                color: #706f6c;
            }
        </style>
    </head>
    <body>
        <header class="container">
            @if (Route::has('login'))
                <nav style="display: flex; justify-content: flex-end; gap: 1rem; margin-bottom: 2rem;">
                    @auth
                        <a href="{{ url('/dashboard') }}" style="padding: 0.5rem 1rem; border: 1px solid #19140035; border-radius: 4px; text-decoration: none; color: #1b1b18;">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" style="padding: 0.5rem 1rem; text-decoration: none; color: #1b1b18;">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" style="padding: 0.5rem 1rem; border: 1px solid #19140035; border-radius: 4px; text-decoration: none; color: #1b1b18;">Register</a>
                        @endif
                    @endauth
                </nav>
            @endif
        </header>

        <div class="container">
            <h1>Users List</h1>

            @if($users->count() > 0)
                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $user->name ?? 'N/A' }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->phone ?? 'N/A' }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <div class="no-users">
                    <p>No users found.</p>
                </div>
            @endif
        </div>
    </body>
</html>
