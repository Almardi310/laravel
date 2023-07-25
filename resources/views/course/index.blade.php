<x-master>
    <a href="{{ route('course.create') }}" class="m-6 relative inline-flex items-center justify-center p-0.5 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-cyan-500 to-emerald-500 group-hover:from-cyan-500 group-hover:to-emerald-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-cyan-200 dark:focus:ring-cyan-800">
        <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
            {{ __('custom.AddNewCorse') }}
        </span>
    </a>
    <div class="m-6 relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        {{__(('Code'))}}
                    </th>
                    <th scope="col" class="px-6 py-3">
                        {{__(('Name'))}}
                    </th>
                    <th scope="col" class="px-6 py-3">
                        {{__(('custom.description'))}}
                    </th>
                    <th scope="col" class="px-6 py-3">
                        {{__(('Edit'))}}
                    </th>
                    <th scope="col" class="px-6 py-3">
                        {{__(('Delete'))}}
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($myCourses as $myCourse)
                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $myCourse->code }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $myCourse->name }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $myCourse->description }}
                        </td>
                        <td class="px-6 py-4">
                            <a href="{{ route('course.edit', $myCourse ) }}" ><i class="text-emerald-600 fa-solid fa-pen-to-square"></i></a>
                        </td>
                        <td class="px-6 py-4">
                            <form action="{{ route('course.destroy',$myCourse ) }}" method="post">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class=""><i class="text-red-600 fa-solid fa-trash-can"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</x-master>
