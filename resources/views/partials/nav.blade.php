<nav class="lg:col-start-1 ml-4 my-4 py-36">
    <h1></h1>

    @php($selected = true)

    <ul class="flex flex-col list-none mb-0 pl-0 space-y-4">

        <li class="w-full antialiased">
            <a class="mx-4 py-2.5 px-4 flex items-center flex-nowrap text-sm text-slate-500 font-medium transition-all rounded-lg @if($selected) bg-white shadow-sm hover:bg-slate-200 @else hover:bg-white @endif" href="/test">
                <div class="bg-gradient-to-tl from-[#CB0C9F] to-[#CB0C9F] p-1.5 rounded-lg h-10 w-10 text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="opacity-80">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 7.125C2.25 6.504 2.754 6 3.375 6h6c.621 0 1.125.504 1.125 1.125v3.75c0 .621-.504 1.125-1.125 1.125h-6a1.125 1.125 0 01-1.125-1.125v-3.75zM14.25 8.625c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v8.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 01-1.125-1.125v-8.25zM3.75 16.125c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v2.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 01-1.125-1.125v-2.25z" />
                    </svg>                      
                </div>
                <span class="ms-4 text-md">Dashboard</span>
            </a>
        </li>
        
        <li class="w-full antialiased">
            <a class="mx-4 py-2.5 px-4 flex items-center flex-nowrap text-sm text-slate-500 font-medium transition-all rounded-lg @if($selected) bg-white shadow-sm hover:bg-slate-200 @else hover:bg-white @endif" href="/test">
                <div class="bg-gradient-to-tl from-orange-400 to-orange-400 p-1.5 rounded-lg h-10 w-10 text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="opacity-80">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z" />
                    </svg>                       
                </div>
                <span class="ms-4 text-md">Production en temps réel</span>
            </a>
        </li>
        
        <li class="w-full antialiased">
            <a class="mx-4 py-2.5 px-4 flex items-center flex-nowrap text-sm text-slate-500 font-medium transition-all rounded-lg @if($selected) bg-white shadow-sm hover:bg-slate-200 @else hover:bg-white @endif" href="/test">
                <div class="bg-gradient-to-tl from-green-400 to-green-400 p-1.5 rounded-lg h-10 w-10 text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="opacity-80">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 14.25v2.25m3-4.5v4.5m3-6.75v6.75m3-9v9M6 20.25h12A2.25 2.25 0 0020.25 18V6A2.25 2.25 0 0018 3.75H6A2.25 2.25 0 003.75 6v12A2.25 2.25 0 006 20.25z" />
                    </svg>                                            
                </div>
                <span class="ms-4 text-md">Historique de production</span>
            </a>
        </li>

    </ul>


</nav>