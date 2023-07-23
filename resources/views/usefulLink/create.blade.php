<x-master>
    <form action="{{ route('usefulLink.store') }}" method="post" class="m-6">
        @csrf


        <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Name</label>
        <input type="text" name="name" id="name" autocomplete="name"  ><br>
        @error('name')
            <div>{{ $message }}</div>
        @enderror


        <label for="description" class="block text-sm font-medium leading-6 text-gray-900">description</label>
        <input type="text" name="description" id="description" autocomplete="description"  ><br>
        @error('description')
            <div>{{ $message }}</div>
        @enderror

        <label for="link" class="block text-sm font-medium leading-6 text-gray-900">link</label>
        <input type="text" name="link" id="link" autocomplete="link"  ><br><br><br>
        @error('link')
            <div>{{ $message }}</div>
        @enderror

        <button type="submit">Save</button><br>

    </form>

</x-master>
