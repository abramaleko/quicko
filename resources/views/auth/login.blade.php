<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Log in</title>

    
    <!-- Fonts -->
     <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
     <link rel="preconnect" href="https://fonts.gstatic.com">
     <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
     
     <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <link rel="icon" href="{{asset('images/favicon.ico')}}" type="image/x-icon" sizes="32x32">

</head>
<body class="font-sans antialiased bg-gray-100">
    <div class="min-h-screen ">
        <main class="sm:container sm:mx-auto sm:max-w-lg sm:mt-10">
            <div class="flex">
                <div class="w-full">
                    <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">
        
                        <header class=" bg-gray-100  py-5  flex justify-center sm:rounded-t-md">
                            <svg class="lg:w-38 w-24 inline" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"  viewBox="0 0 525.766 120" enable-background="new 0 0 525.766 120" xml:space="preserve" fit="" preserveAspectRatio="xMidYMid meet" focusable="false">
                                <path fill="#2962FF" d="M458.241,97.68c-6.814-3.729-12.166-8.877-16.06-15.452c-3.887-6.573-5.825-13.909-5.825-22.007
                                    c0-8.097,1.938-15.432,5.825-22.006c3.894-6.573,9.24-11.725,16.06-15.453c6.813-3.728,14.471-5.593,22.969-5.593
                                    c8.418,0,16.035,1.865,22.85,5.593c6.813,3.728,12.146,8.858,15.992,15.392c3.853,6.535,5.773,13.89,5.773,22.066
                                    c0,8.178-1.924,15.537-5.773,22.067c-3.848,6.535-9.182,11.665-15.992,15.394c-6.813,3.729-14.432,5.595-22.85,5.595
                                    C472.709,103.271,465.053,101.408,458.241,97.68z M497.866,88.36c4.93-2.806,8.813-6.673,11.664-11.604
                                    c2.846-4.931,4.27-10.438,4.27-16.536c0-6.091-1.424-11.604-4.27-16.536c-2.851-4.93-6.734-8.795-11.664-11.603
                                    c-4.935-2.805-10.482-4.21-16.656-4.21s-11.766,1.405-16.775,4.21c-5.01,2.808-8.938,6.673-11.78,11.603
                                    c-2.851,4.932-4.271,10.444-4.271,16.536c0,6.094,1.422,11.605,4.271,16.536c2.844,4.936,6.771,8.804,11.78,11.604
                                    c5.013,2.808,10.604,4.209,16.775,4.209S492.934,91.168,497.866,88.36z"></path>
                                <path fill="#2962FF" d="M147.558,93.173c-6.252-6.414-9.38-15.635-9.38-27.66V17.651h12.026v47.381
                                    c0,18.038,7.896,27.057,23.689,27.057c7.697,0,13.589-2.226,17.677-6.674c4.09-4.449,6.134-11.242,6.134-20.383V17.651h11.665
                                    v47.861c0,12.104-3.127,21.347-9.381,27.72c-6.252,6.372-14.992,9.56-26.214,9.56C162.549,102.792,153.812,99.587,147.558,93.173z"></path>
                                <path fill="#2962FF" d="M234.02,18.133h12.025v84.178H234.02V18.133z"></path>
                                <path fill="#2962FF" d="M286.15,97.686c-6.774-3.729-12.086-8.857-15.936-15.396c-3.85-6.527-5.771-13.889-5.771-22.067
                                    c0-8.176,1.926-15.531,5.771-22.066c3.85-6.533,9.182-11.665,15.992-15.392c6.813-3.728,14.434-5.593,22.848-5.593
                                    c6.574,0,12.586,1.104,18.041,3.307c5.449,2.207,10.104,5.473,13.947,9.802l-7.813,7.576c-6.336-6.655-14.232-9.982-23.691-9.982
                                    c-6.254,0-11.903,1.405-16.955,4.21c-5.051,2.807-9,6.674-11.844,11.604c-2.85,4.93-4.271,10.443-4.271,16.534
                                    c0,6.095,1.422,11.605,4.271,16.54c2.844,4.932,6.793,8.799,11.844,11.604c5.053,2.807,10.701,4.209,16.955,4.209
                                    c9.379,0,17.275-3.366,23.691-10.102l7.813,7.574c-3.848,4.329-8.52,7.615-14.008,9.858c-5.494,2.246-11.527,3.367-18.102,3.367
                                    C300.521,103.277,292.924,101.414,286.15,97.686z"></path>
                                <path fill="#2962FF" d="M385.659,64.908l-15.396,15.633v21.771h-12.021v-84.18h12.021v47.018l45.697-47.018h13.709L393.713,56.01
                                    l38.242,46.298h-14.068L385.659,64.908z"></path>
                                <path fill="#2962FF" d="M481.09,15.963c-24.44,0-44.258,19.816-44.258,44.258c0,24.444,19.814,44.258,44.258,44.258
                                    c24.441,0,44.256-19.814,44.256-44.258C525.346,35.779,505.532,15.963,481.09,15.963z M481.09,92.636
                                    c-17.902,0-32.414-14.517-32.414-32.417c0-17.9,14.512-32.413,32.414-32.413c17.9,0,32.412,14.512,32.412,32.413
                                    C513.502,78.124,498.991,92.636,481.09,92.636z"></path>
                                <g>
                                    <path fill="#2962FF" d="M120,60.223c0,33.136-26.864,59.999-60,59.999c-33.136,0-60-26.863-60-59.999
                                        C0,27.083,26.864,0.222,60,0.222C93.136,0.222,120,27.083,120,60.223z"></path>
                                    <path fill="#FFFFFF" d="M60,14.606c-26.215,0-47.469,21.253-47.469,47.467c0,26.219,21.254,47.472,47.469,47.472
                                        c26.218,0,47.469-21.253,47.469-47.472C107.469,35.86,86.218,14.606,60,14.606z M59.674,92.798
                                        c-16.97,0-30.722-13.753-30.722-30.727c0-16.966,13.752-30.724,30.722-30.724c16.97,0,30.725,13.756,30.725,30.724
                                        C90.399,79.045,76.645,92.798,59.674,92.798z"></path>
                                    <path fill="#FFFFFF" d="M78.172,117.412c5.749-1.825,11.117-4.496,15.97-7.861L64.668,80.078L52.752,91.993L78.172,117.412z"></path>
                                </g>
                                </svg>
                        </header>
        
                        <form class="w-full px-6 space-y-6 sm:px-10 sm:space-y-8" method="POST" action="{{ route('login') }}">
                            @csrf
        
                            <div class="flex flex-wrap">
                                <label for="email" class="block text-gray-700 text-base font-bold mb-2 sm:mb-4">
                                    {{ __('E-Mail Address') }}:
                                </label>
        
                                <input id="email" type="email"
                                    class="form-input w-full @error('email') border-red-500 @enderror border-2" name="email"
                                    value="{{ old('email') }}" required autocomplete="email" autofocus>
        
                                @error('email')
                                <p class="text-red-500 text-xs italic mt-4">
                                    {{ $message }}
                                </p>
                                @enderror
                            </div>
        
                            <div class="flex flex-wrap">
                                <label for="password" class="block text-gray-700 text-base font-bold mb-2 sm:mb-4">
                                    {{ __('Password') }}:
                                </label>
        
                                <input id="password" type="password"
                                    class="form-input w-full border-2 @error('password') border-red-500 @enderror" name="password"
                                    required>
        
                                @error('password')
                                <p class="text-red-500 text-xs italic mt-4">
                                    {{ $message }}
                                </p>
                                @enderror
                            </div>
        
                            <div class="flex items-center">
                                <label class="inline-flex items-center text-base text-gray-700" for="remember">
                                    <input type="checkbox" name="remember" id="remember" class="form-checkbox border-2"
                                        {{ old('remember') ? 'checked' : '' }}>
                                    <span class="ml-2">{{ __('Remember Me') }}</span>
                                </label>
        
                                @if (Route::has('password.request'))
                                <a class="text-sm text-blue-500 hover:text-blue-700 whitespace-no-wrap no-underline hover:underline ml-auto"
                                    href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                                @endif
                            </div>
        
                            <div class="">
                                <button type="submit"
                                class="w-full select-none font-bold whitespace-no-wrap p-2 rounded-lg md:text-lg text-base leading-normal no-underline text-gray-100 bg-blue-500 hover:bg-blue-700 sm:py-4">
                                    {{ __('Log in') }}
                                </button>
                                  <p class="text-center py-4 md:text-xl text-lg text-gray-700">OR</p>

                                <a href="" 
                                class="block w-full select-none font-bold whitespace-no-wrap p-3 rounded-lg md:text-lg text-base leading-normal no-underline text-gray-700 bg-gray-300 hover:bg-gray-700 hover:text-white sm:py-4 text-center">
                                <img src="{{asset('images/google.png')}}" alt="google icon" class="md:h-8 h-6 inline float-left md:ml-4 ml-2">
                                    {{ __('Sign in with Google') }}
                                </a>
        
                                 <div class="flex flex-wrap">
                                    @if (Route::has('register'))
                                    <p class="w-full text-xs text-center text-gray-700 my-6 sm:text-sm sm:my-8">
                                        {{ __("Don't have an account?") }}
                                        <a class="text-blue-500 hover:text-blue-700 no-underline hover:underline" href="{{ route('register') }}">
                                            {{ __('Register') }}
                                        </a>
                                    </p>
                                    @endif
                                 </div>
                            </div>
                        </form>
        
                    </section>
                </div>
            </div>
        </main>
    </div>

</body>
</html>
