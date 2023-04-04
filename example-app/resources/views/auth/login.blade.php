@extends('layout.app')
@section('main')
<section class="h-screen  w-full bg-[#D9D9D9]">
    <form action="{{ route('login')}}" method="POST">
      @csrf
      <div class="flex justify-center w-full">
      <img class="w-32 mt-32" src="{{ asset('image/2.svg')}}" alt="">
    </div>
      <div class="flex mt-10 justify-center items-center">
        <div class="relative">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
              <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path><path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path></svg>
            </div>
            <input name="email" type="email" value="{{old('email')}}"  id="input-group-1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-none border-none focus:ring-0 block w-[340px] pl-10 p-2.5  dark:placeholder-gray-400 dark:text-white" placeholder="example@gmail.com">
          </div>
      </div>
      <div class="flex mt-4 justify-center items-center">
        <div class="relative">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M14.65 7.44H5.12V6.28C5.12 3.35 5.95 1.4 10 1.4C14.33 1.4 14.88 3.51 14.88 5.35C14.88 5.74 15.19 6.05 15.58 6.05C15.97 6.05 16.28 5.74 16.28 5.35C16.28 1.8 14.17 0 10 0C4.37 0 3.72 3.58 3.72 6.28V7.53C0.92 7.88 0 9.3 0 12.79V14.65C0 18.75 1.25 20 5.35 20H14.65C18.75 20 20 18.75 20 14.65V12.79C20 8.69 18.75 7.44 14.65 7.44ZM10 16.74C8.33 16.74 6.98 15.38 6.98 13.72C6.98 12.05 8.34 10.7 10 10.7C10.8001 10.7026 11.5668 11.0217 12.1326 11.5875C12.6983 12.1532 13.0174 12.9199 13.02 13.72C13.02 15.39 11.67 16.74 10 16.74Z" fill="#9D9D9D"/>
                    </svg>      
            </div>
            <input name="password" type="password" value="{{old('password')}}" id="input-group-1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-none border-none focus:ring-0 block w-[340px] pl-10 p-2.5  dark:placeholder-gray-400 dark:text-white" placeholder="Password">
        </div>
        </div>
      </div>
      </div>
      <div class="flex mt-4 justify-center items-center">
      <button class="border-none bg-[#333333] block w-[340px] py-2 text-white font-semibold focus:ring-0 px-14 rounded-lg focus:outline-none" type="submit">
        Login
    </button>
      </div>
      <a class="text-center block align-baseline mt-4 text-sm text-orange-600" href="{{ route('password.request') }}">Forgot Password ?</a>
    </form>
  </section>
@endsection