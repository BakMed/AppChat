<head>
    <title>Login Page</title>
</head>
<div class="wrapper">
        <div class="logo">
        <img src="https://w7.pngwing.com/pngs/349/273/png-transparent-livechat-online-chat-computer-icons-chat-room-web-chat-others-miscellaneous-blue-text-thumbnail.png" alt="" width=10% height=10%/>

        </div>
        <div id="appchat" class="text-center mt-4 name">
            AppChat
        </div>
    
        <form class="p-3 mt-3" method="POST" action="{{ route('login') }}">
        @csrf
            <div class="form-field d-flex align-items-center">

                <span class="far fa-user"></span>
                <label for="email" :value="__('Email')"></label>
                <input id="email" class="block mt-1 w-full" 
                            type="email" 
                            name="email" :value="old('email')" 
                            required autofocus autocomplete="username"  
                            placeholder="Email">
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <label for="password" :value="__('Password')"></label>
                <input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" 
                            placeholder="Password">
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <button class="btn mt-3">{{ __('Log in') }}</button>
            <div><br></div>
            <div id="nu">
            <a href="{{ url('register') }}" >
                    {{ __('New User?') }}
                </a>
                </div>
        </form>
        <div class="text-center fs-6" id="fp">
        @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" >
                    {{ __('Forgot your password?') }}
                </a>
            @endif
        </div>
        <div><br></div>
        <p align="center" style="margin-top:50px">&copy; AppChat 2023</p>
    </div>
    
    <style>
        /* Importing fonts from Google */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

/* Reseting */

#fp{
    margin-top:10px;
    
}

#appchat{
    text-align: center;
    padding:10px;
}
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body {
    background: #ecf0f3;
}

.wrapper {
    max-width: 350px;
    min-height: 500px;
    margin: 80px auto;
    padding: 40px 30px 30px 30px;
    background-color: #ecf0f3;
    border-radius: 15px;
    box-shadow: 13px 13px 20px #cbced1, -13px -13px 20px #fff;
}

.logo {
    width: 80px;
    margin: auto;
}

.logo img {
    width: 100%;
    height: 80px;
    object-fit: cover;
    border-radius: 50%;
    box-shadow: 0px 0px 3px #5f5f5f,
        0px 0px 0px 5px #ecf0f3,
        8px 8px 15px #a7aaa7,
        -8px -8px 15px #fff;
}

.wrapper .name {
    font-weight: 600;
    font-size: 1.4rem;
    letter-spacing: 1.3px;
    padding-left: 10px;
    color: #555;
}

.wrapper .form-field input {
    width: 100%;
    display: block;
    border: none;
    outline: none;
    background: none;
    font-size: 1.2rem;
    color: #666;
    padding: 10px 15px 10px 10px;
    /* border: 1px solid red; */
}

.wrapper .form-field {
    padding-left: 10px;
    margin-bottom: 20px;
    border-radius: 20px;
    box-shadow: inset 8px 8px 8px #cbced1, inset -8px -8px 8px #fff;
}

.wrapper .form-field .fas {
    color: #555;
}

.wrapper .btn {
    box-shadow: none;
    width: 100%;
    height: 40px;
    background-color: #03A9F4;
    color: #fff;
    border-radius: 25px;
    box-shadow: 3px 3px 3px #b1b1b1,
        -3px -3px 3px #fff;
    letter-spacing: 1.3px;
}

.wrapper .btn:hover {
    background-color: #039BE5;
}

.wrapper a {
    text-decoration: none;
    font-size: 0.8rem;
    color: #03A9F4;
}

.wrapper a:hover {
    color: #039BE5;
}

@media(max-width: 380px) {
    .wrapper {
        margin: 30px 20px;
        padding: 40px 15px 15px 15px;
    }
}
    </style>


<!-- <form > -->


        <!-- Remember Me
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
           

            <x-primary-button class="ml-3">
                
            </x-primary-button>
        </div>
        <div class="flex items-center justify-end mt-4">
        <br>
                
        </div>
    </form> -->