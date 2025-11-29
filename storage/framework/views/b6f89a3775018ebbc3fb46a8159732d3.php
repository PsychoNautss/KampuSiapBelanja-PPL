<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login </title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
        <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
    </head>
    <body class="bg-gradient-to-r from-red-600 via-white to-red-600 min-h-screen flex items-center justify-center p-6 relative overflow-hidden">
        <!-- Decorative background elements -->
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <div class="absolute -top-40 -right-40 w-80 h-80 bg-red-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob"></div>
            <div class="absolute -bottom-40 -left-40 w-80 h-80 bg-rose-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob animation-delay-2000"></div>
            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-80 h-80 bg-pink-200 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob animation-delay-4000"></div>
        </div>

        <div class="w-full max-w-md relative z-10">
            <div class="text-center mb-8">
                <h1 class="text-red-900 text-3xl font-semibold mb-2">PLEASE LOGIN</h1>
                <p class="text-sm text-red-700 mt-2">Welcome back! Please login to your account</p>
            </div>

            <div class="p-6 sm:p-8 rounded-2xl bg-white border border-red-100 shadow-xl shadow-red-100/50 backdrop-blur-sm">
            <h2 class="text-red-900 text-center text-2xl font-semibold mb-8">Sign in</h2>
            <form class="space-y-6">
              <div>
                <label class="text-red-900 text-sm font-medium mb-2 block">User name</label>
                <div class="relative flex items-center">
                  <input name="username" type="text" required class="w-full text-slate-900 text-sm border border-red-200 px-4 py-3 pr-8 rounded-md outline-red-500 focus:border-red-400 transition-colors" placeholder="Enter user name" />
                  <svg xmlns="http://www.w3.org/2000/svg" fill="#dc2626" stroke="#dc2626" class="w-4 h-4 absolute right-4" viewBox="0 0 24 24">
                    <circle cx="10" cy="7" r="6" data-original="#000000"></circle>
                    <path d="M14 15H6a5 5 0 0 0-5 5 3 3 0 0 0 3 3h12a3 3 0 0 0 3-3 5 5 0 0 0-5-5zm8-4h-2.59l.3-.29a1 1 0 0 0-1.42-1.42l-2 2a1 1 0 0 0 0 1.42l2 2a1 1 0 0 0 1.42 0 1 1 0 0 0 0-1.42l-.3-.29H22a1 1 0 0 0 0-2z" data-original="#000000"></path>
                  </svg>
                </div>
              </div>
              <div>
                <label class="text-red-900 text-sm font-medium mb-2 block">Password</label>
                <div class="relative flex items-center">
                  <input name="password" type="password" required class="w-full text-slate-900 text-sm border border-red-200 px-4 py-3 pr-8 rounded-md outline-red-500 focus:border-red-400 transition-colors" placeholder="Enter password" />
                  <svg xmlns="http://www.w3.org/2000/svg" fill="#dc2626" stroke="#dc2626" class="w-4 h-4 absolute right-4 cursor-pointer" viewBox="0 0 128 128">
                    <path d="M64 104C22.127 104 1.367 67.496.504 65.943a4 4 0 0 1 0-3.887C1.367 60.504 22.127 24 64 24s62.633 36.504 63.496 38.057a4 4 0 0 1 0 3.887C126.633 67.496 105.873 104 64 104zM8.707 63.994C13.465 71.205 32.146 96 64 96c31.955 0 50.553-24.775 55.293-31.994C114.535 56.795 95.854 32 64 32 32.045 32 13.447 56.775 8.707 63.994zM64 88c-13.234 0-24-10.766-24-24s10.766-24 24-24 24 10.766 24 24-10.766 24-24 24zm0-40c-8.822 0-16 7.178-16 16s7.178 16 16 16 16-7.178 16-16-7.178-16-16-16z" data-original="#000000"></path>
                  </svg>
                </div>
              </div>
              <div class="flex flex-wrap items-center justify-between gap-4">
                <div class="flex items-center">
                  <input id="remember-me" name="remember-me" type="checkbox" class="h-4 w-4 shrink-0 text-red-600 focus:ring-red-500 border-red-300 rounded" />
                  <label for="remember-me" class="ml-3 block text-sm text-red-900">
                    Remember me
                  </label>
                </div>
                <div class="text-sm">
                  <a href="jajvascript:void(0);" class="text-red-600 hover:text-red-700 hover:underline font-semibold transition-colors">
                    Forgot your password?
                  </a>
                </div>
              </div>

              <div class="!mt-8">
                <button type="button" class="w-full py-3 px-4 text-[15px] font-medium tracking-wide rounded-md text-white bg-gradient-to-r from-red-600 to-rose-600 hover:from-red-700 hover:to-rose-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 cursor-pointer transition-all shadow-lg shadow-red-500/30">
                  Sign in
                </button>
              </div>
              <p class="text-red-900 text-sm !mt-6 text-center">Don't have an account? <a href="<?php echo e(route('register')); ?>" class="text-red-600 hover:text-red-700 hover:underline ml-1 whitespace-nowrap font-semibold transition-colors">Register here</a></p>
            </form>
          </div>

          <!-- Back to Home -->
          <div class="text-center mt-6">
              <a href="/" class="text-sm text-red-700 hover:text-red-900 hover:underline transition-colors">← Back to Home</a>
          </div>
        </div>
    </body>
</html>


<?php /**PATH /Users/radityasaputra/pplWeb/resources/views/login.blade.php ENDPATH**/ ?>