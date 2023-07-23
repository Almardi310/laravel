<x-master>
    <div class="m-4">
        <div class="grid grid-cols-1 gap-4 lg:grid-cols-4 lg:gap-8">
            @foreach ($links as $link)
                <div class="rounded-lg bg-white p-4">
                    <i class="text-amber-600 fa-solid fa-chalkboard-user fa-6x mb-3"></i>
                    <div >
                        <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">{{ $link['name'] }}</h5>
                    </div>
                    <p class="mb-6 font-normal text-gray-500 dark:text-gray-400">{{ $link['description'] }}</p>
                    <a href="{{ $link['link'] }}" class="text-white bg-emerald-700 hover:bg-emerald-800 focus:ring-4 focus:ring-emerald-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-emerald-600 dark:hover:bg-emerald-700 focus:outline-none dark:focus:ring-emerald-800">
                        مشاهدة
                    </a>
                    <a href="{{ route('usefulLink.edit', $link['id'] ) }}" class="text-white bg-emerald-700 hover:bg-emerald-800 focus:ring-4 focus:ring-emerald-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-emerald-600 dark:hover:bg-emerald-700 focus:outline-none dark:focus:ring-emerald-800">
                        تعديل
                    </a>
                    <a href="{{ route('usefulLink.destroy',$link['id'] ) }}" class="text-white bg-emerald-700 hover:bg-emerald-800 focus:ring-4 focus:ring-emerald-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-emerald-600 dark:hover:bg-emerald-700 focus:outline-none dark:focus:ring-emerald-800">
                        حذف
                    </a>
                </div>
            @endforeach
        </div>
    </div>


    </x-master>
