@include('components.navbar')
<div class="w-full min-h-[100vh]">
    <div class="">
        <div class="flex gap-10 justify-evenly flex-wrap items-center">
            @foreach ($data as $item)
<div class="w-full max-w-[486px] max-h-[706px] mb-5 bg-white border border-gray-200 rounded-2xl shadow dark:bg-gray-800 dark:border-gray-700">
                    <div class="pb-10 flex-col relative px-5 justify-between items-center">
                        <div class="flex">
                        <img class="w-14 top-0 h-14 mb-3" src="{{ asset('image/6.svg')}}" alt=""/>
                        <h1 class="text-2xl mt-3 ml-12 font-bold text-[#755E5E]">{{ $item->book_name }}</h1>
                        </div>
                        <form method="POST" action="{{ url("/tasks/$item->id") }}">
                            @csrf
                            @method('DELETE')
                            @if (Auth::user()->role == 'admin')
                            <button><img class="w-10  absolute right-[15px] top-[10px] h-10" src="{{ asset('image/7.svg')}}" alt="">
                            @endif
                        </button>
                        @if (Auth::user()->role == 'admin')
                        <a href="{{ url("/tasks/$item->id/edit") }}"><img class="w-10  absolute right-[15px] top-[55px] h-9" src="{{ asset('image/8.svg')}}" alt=""></a>
                        @endif
                        <img class="w-[370px] mb-3 mt-[10px] ml-[20px]" src="{{ asset('image/9.png')}}" alt="">
                        </form>
                        <h1 class="ml-[20px] text-[#755E5E] mb-1 t text-xl font-bold">{{ $item->pengarang_book }}</h1>
                        <h1 class="ml-[20px] text-[#755E5E] mb-1 t text-xl font-bold">{{ $item->rate_book }}</h1>
                        <h1 class="ml-[20px] text-[#755E5E]">{{ $item->synopsis }}</h1>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>