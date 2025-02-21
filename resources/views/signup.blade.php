<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vo Duc Tai - session 1</title>
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/signup.css', 'resources/js/signup.js'])
        @else
        <link rel="stylesheet" href="{{ asset('css/signup.css') }}">
        <!-- <script src="{{ asset('js/app.js') }}"></script> -->
    @endif
</head>
<body>
    <div class="big-container">
        <form action="/signup" method="post" class="sign-form">
            @csrf
            <div>
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="@error('name') is-invalid @enderror">
                @error('name')
                <div class="error"> {{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="age">Age</label>
                <input type="number" name="age" id="age" class="@error('age') is-invalid @enderror">
                @error('age')
                <div class="error"> {{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="date">Date</label>
                <input type="date" name="date" id="date" class="@error('date') is-invalid @enderror">
                @error('date')
                <div class="error"> {{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="phone">Phone</label>
                <input type="tel" name="phone" id="phone" class="@error('phone') is-invalid @enderror">
                @error('phone')
                <div class="error"> {{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="web">Web</label>
                <input type="text" name="web" id="web" class="@error('web') is-invalid @enderror">
                @error('web')
                <div class="error"> {{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="address">Address</label>
                <input type="text" name="address" id="address" class="@error('address') is-invalid @enderror">
                @error('address')
                <div class="error"> {{ $message }}</div>
                @enderror
            </div>
            <input type="submit" value="Ok">
        </form>
        <div id="result">
            @isset($users)
            @foreach ($users as $user)
                <div>Name: <span id="results-Name"> {{ $user['name'] }}</span></div>
                <div>Age: <span id="results-Age"> {{ $user['age'] }}</span></div>
                <div>Date: <span id="results-Date"> {{ $user['date'] }}</span></div>
                <div>Phone: <span id="results-Phone"> {{ $user['phone'] }}</span></div>
                <div>Web: <span id="results-Web"> {{ $user['web'] }}</span></div>
                <div>Address: <span id="results-Address"> {{ $user['address'] }}</span></div>
            @endforeach
            @endisset
        </div>
    </div>
</body>
</html>
