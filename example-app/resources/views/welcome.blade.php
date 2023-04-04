<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css"  rel="stylesheet" />
</head>
<body>
    <div class="bg-[#D9D9D9] w-full justify-between flex fixed">
        <img class=" top-0 w-40 ml-5 mt-5" src="{{ asset('image/1.svg')}}" alt="">
        <div class="flex justify-center items-center mr-5 gap-3 my-5">
        @guest
        <a class="bg-[#8F5F5F] px-10 text-white font-semibold py-2 rounded-full" href="{{ route('login')}}">Sign In</a>
        <a class="bg-[#1BAD04] px-10 text-white font-semibold py-2 rounded-full" href="{{route('register')}}">Sign Up</a>
        @else
        <a href="{{ route('logout')}}" class="button  px-5 py-2.5 text-white bg-[#8F5F5F] text-sm rounded-full " onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
          <span class="flex items-center font-bold justify-center">
              <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-white fill-white transition mr-2 duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>
          </span>
      </a> 
        <form action="{{ route('logout')}}" id="logout-form" method="POST">
            @csrf
        </form>   
        @endguest
    </div>
    </div>
    <section class="h-screen py-[18rem] w-full bg-[#D9D9D9]">
        <div class="text-center">
        <h1 class="text-5xl text-center text-[#8F5F5F] font-bold uppercase">Book House</h1>
        <p class="text-center font-serif font-medium mt-3 text-2xl text-[#49413F]">You can find your favorite book here</p>
        <button class="px-5 py-2 text-white font-semibold rounded-lg mt-5 bg-[#8F5F5F]"><a href="{{url('/tasks')}}">See Library -></a></button>
    </div>

    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
</body> 
</html>
