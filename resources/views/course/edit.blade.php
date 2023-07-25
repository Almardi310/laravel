<x-master>
    <form action="{{ route('course.update', $myCourse) }}" method="post" class=" m-10">
        @method('PUT')
        @csrf


        <div class="col-span-6 sm:col-span-4">
            <label for="code" class="mt-4 block font-medium text-sm text-gray-700">{{ __('Code') }}</label>
            <input type="text" name="code" id="code" autocomplete="code" value="{{ $myCourse->code }}" class="mt-2 w-full border-gray-300 focus:border-emerald-500 focus:ring-emerald-500 rounded-md shadow-sm" >
            @error('code')
                <div class="mt-2 text-sm text-red-600">{{ $message }}</div>
            @enderror
        </div>


        <div class="col-span-6 sm:col-span-4">
            <label for="name" class="mt-4 block font-medium text-sm text-gray-700">{{ __('Name') }}</label>
            <input type="text" name="name" id="name" autocomplete="name" value="{{ $myCourse->name }}" class="mt-2 w-full border-gray-300 focus:border-emerald-500 focus:ring-emerald-500 rounded-md shadow-sm" >
            @error('name')
                <div class="mt-2 text-sm text-red-600">{{ $message }}</div>
            @enderror
        </div>


        <div class="col-span-6 sm:col-span-4">
            <label for="description" class="mt-4 block font-medium text-sm text-gray-700">{{ __('custom.description') }}</label>
            <input type="text" name="description" id="description" autocomplete="description" value="{{ $myCourse->description }}" class="mt-2 w-full border-gray-300 focus:border-emerald-500 focus:ring-emerald-500 rounded-md shadow-sm" >
            @error('description')
                <div class="mt-2 text-sm text-red-600">{{ $message }}</div>
            @enderror
        </div>



        <button type="submit" class="mt-4 text-white bg-gradient-to-r from-emerald-400 via-emerald-500 to-emerald-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-emerald-300 dark:focus:ring-emerald-800 shadow-lg shadow-emerald-500/50 dark:shadow-lg dark:shadow-emerald-800/80 font-medium rounded-lg text-sm px-5 py-2 text-center mr-2">{{__(('Edit'))}}</button>

    </form>

</x-master>
