@extends('layout.app')
@section('main')

<section class="h-screen  w-full bg-[#D9D9D9]">
    <form action="{{ route('password.email') }}" method="POST">
      @csrf
      <div class="flex justify-center w-full">
      <img class="w-32 mt-32" src="{{ asset('image/2.svg')}}" alt="">
    </div>
    <div class="flex mt-10 justify-center items-center">
        <div class="relative">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" width="15" height="150" viewBox="0 0 183 183" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="91.5" cy="91.5" r="91.5" fill="#8F5F5F"/>
                    <path d="M91.5 91.5C96.5557 91.5 101.404 89.4916 104.979 85.9167C108.554 82.3418 110.562 77.4932 110.562 72.4375C110.562 67.3818 108.554 62.5332 104.979 58.9583C101.404 55.3834 96.5557 53.375 91.5 53.375C86.4443 53.375 81.5957 55.3834 78.0208 58.9583C74.4459 62.5332 72.4375 67.3818 72.4375 72.4375C72.4375 77.4932 74.4459 82.3418 78.0208 85.9167C81.5957 89.4916 86.4443 91.5 91.5 91.5ZM91.5 101.031C72.3994 101.031 56.8444 113.841 56.8444 129.625C56.8444 130.693 57.6831 131.531 58.7506 131.531H124.249C125.317 131.531 126.156 130.693 126.156 129.625C126.156 113.841 110.601 101.031 91.5 101.031Z" fill="white"/>
                    </svg>
                </div>
            <input name="name" type="text" value="{{old('name')}}"  id="input-group-1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-none border-none focus:ring-0 block w-[340px] pl-10 p-2.5  dark:placeholder-gray-400 dark:text-white" placeholder="Username">
          </div>
      </div>
      <div class="flex mt-4 justify-center items-center">
        <div class="relative">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
              <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path><path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path></svg>
            </div>
            <input name="email" type="email" value="{{old('email')}}"  id="input-group-1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-none border-none focus:ring-0 block w-[340px] pl-10 p-2.5  dark:placeholder-gray-400 dark:text-white" placeholder="example@gmail.com">   
          </div>
      </div>
      </div>
      <div class="flex mt-4 justify-center items-center">
      <button class="border-none bg-[#333333] block w-[340px] py-2 text-white font-base focus:ring-0 px-14 rounded-lg focus:outline-none" type="submit">
        Send Reset Password
    </button>
      </div>
      @if (session('status'))
      <div class="text-center mt-3 block">
          {{session('status')}}
      </div>
      @endif   
    </form>
  </section>
@endsection
