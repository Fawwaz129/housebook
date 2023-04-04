@extends('layout.app')
@section('main')
<div class="h-screen w-full bg-[#D9D9D9] flex justify-center">
    <div class="bg-white px-64 mt-24 rounded-xl h-[700px]">
    <h1 class="text-7xl mt-14 font-bold text-[#333333]">Create Book</h1>
    <form action="{{ url('/tasks') }}" method="POST">
        @csrf
    <div class="flex mt-10 justify-center items-center">
        <input name="book_name" placeholder="Nama Buku" type="text" value="{{ old('book_name') }}" class="bg-[#504F48] border  border-gray-300 placeholder:text-gray-400 text-sm rounded-lg focus:outline-none border-none focus:ring-0 block w-[340px] py-2.5  dark:placeholder-gray-400 text-white">
    </div>
    <div class="flex mt-4 justify-center items-center">
        <input name="rate_book" value="{{ old('rate_book') }}" class="bg-[#504F48] border  border-gray-300 placeholder:text-gray-400 text-sm rounded-lg focus:outline-none border-none focus:ring-0 block w-[340px] py-2.5  dark:placeholder-gray-400 text-white" placeholder="Rating Buku" type="text">
    </div>
    <div class="flex mt-4 justify-center items-center">
        <input name="pengarang_book" value="{{ old('pengarang_book') }}" class="bg-[#504F48] border  border-gray-300 placeholder:text-gray-400 text-sm rounded-lg focus:outline-none border-none focus:ring-0 block w-[340px] py-2.5  dark:placeholder-gray-400 text-white" placeholder="Pengarang Buku" type="text">
    </div>
    <div class="flex mt-4 justify-center items-center">
        <textarea name="synopsis" value="{{ old('synopsis') }}" placeholder="Synopsis" class="border-none bg-[#504F48] w-[340px] placeholder:text-gray-400 rounded-lg" name="" id="" cols="30" rows="10"></textarea>
    </div>
    <div class="flex mt-4 justify-center items-center">
        <button type="submit" class="w-[340px] bg-[#504F48] block text-white rounded-lg py-2.5">Create</button>
    </div>
    </form>
</div>
@endsection