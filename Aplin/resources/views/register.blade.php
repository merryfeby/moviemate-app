<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Moviemate </title>
		<script src="https://cdn.tailwindcss.com"></script>
		<link rel="preconnect" href="https://fonts.bunny.net">
		<link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
		<script src="https://kit.fontawesome.com/fcd689d6ac.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/@themesberg/flowbite@latest/dist/flowbite.bundle.js"></script>
		<!-- Styles -->
		<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
		* {
			font-family: 'Poppins', sans-serif;
		}
		</style>
</head>
<body class="bg-gray-100 text-gray-900 min-h-screen w-100">

  @if(session('error'))
        <div class="p-4 mb-4 mx-4 mt-4 text-sm text-red-800 rounded-lg bg-red-200" role="alert">
            <span class="font-medium">{{ session('error') }}</span> try submitting again.
        </div>
    @endif

    @if(session('success'))
        <div class="p-4 mb-4 mx-4 mt-4 text-sm text-green-800 rounded-lg bg-green-200" role="alert">
            <span class="font-medium">{{ session('success') }}</span>
        </div>
    @endif

    @if ($errors->any())
        <div class="p-4 mb-4 mx-4 mt-4 text-sm text-red-800 rounded-lg bg-red-200" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

  <div class="flex justify-center place-items-center w-100 min-h-screen ">
    <div class="wrapper lg:w-6/12  sm:w-4/5 flex flex-row bg-white  shadow sm:rounded-lg">
      <div class="lg:w-6/12 sm:w-3/6 flex flex-col justify-center place-items-center rounded-l-lg shadow-lg bg-gradient-to-tr from-indigo-600 via-indigo-300 to-slate-50 p-[4rem]">
        <h2 class="text-3xl font-bold text-white text-center my-8">Welcome <span class="text-indigo-500">Moviematers!</span></h2>
        <p class="text-sm font-light  text-justify text-white">Welcome to MovieMate, your ultimate destination for seamless movie ticket booking online! Whether you're a cinephile seeking the latest blockbusters or craving the nostalgia of classic films, MovieMate is your trusted companion for an unparalleled cinematic experience.</p>
      </div>
      <div class=" lg:w-6/12  p-[4rem]">
        <form action="/user/register" method="post">
          @csrf
          <div class="flex flex-row justify-center items-center">
            <i class="fa-solid fa-ticket text-indigo-500"></i>
            <h1 class="font-semibold text-indigo-500 pb-1 ml-2">MovieMate</h1>
          </div>
          <div>
            <h2 class="text-3xl font-bold text-black text-center my-8">Create Account</h2>
          </div>
          <div class="">
            <input type="text" name="username" class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white" placeholder="Enter your Username" required>
          </div>
          <div class="mt-5">
            <input type="password" name="password" class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white" placeholder="Password" required>
          </div>
          <div class="mt-5">
            <input type="email" name="email" class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white" placeholder="Enter your email" required>
          </div>
          <div class="mt-5">
            <input type="text" name="phone" class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white" placeholder="Enter your phone" required>
          </div>
          <div class="text-center flex flex-col">
            <button type="submit" name="register" class="mt-5 tracking-wide font-semibold bg-indigo-500 text-gray-100 w-full py-4 rounded-lg hover:bg-indigo-700 transition-all duration-300 ease-in-out flex items-center justify-center focus:shadow-outline focus:outline-none"><span><i class="fa-solid fa-user-plus mr-4"></i></span>Register</button>
          <div>
            <p class="mt-6 text-xs text-gray-600 text-center">
              Already have an account?
              <a href="/" class="border-b border-indigo-500 border-dotted text-indigo-500 font-semibold">
                  Login here
              </a>
            </p>
          </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>