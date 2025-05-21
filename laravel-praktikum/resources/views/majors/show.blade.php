<x-default-layout title="Edit Major" section_title="Update Major">
    <form action="{{ route('majors.update', $major->id) }}" method="POST"
        class="flex flex-col gap-4 px-6 py-4 bg-white border border-zinc-300 shadow col-span-3 md:col-span-2">
        @csrf
        @method('PUT')

        <div class="flex flex-col gap-2">
            <label for="id" class="block font-semibold">ID</label>
            <div class="px-3 py-2 border border-zinc-300">{{ $major->id }}</div>
        </div>

        <div class="flex flex-col gap-2">
            <label for="name" class="block font-semibold">Major Name</label>
            <input type="text" name="name" id="name" value="{{ old('name', $major->name) }}"
                class="px-3 py-2 border border-zinc-300 bg-slate-50 w-full"
                placeholder="e.g. Teknik Informatika">
        </div>

        <div class="flex flex-col gap-2">
            <label for="code" class="block font-semibold">Major Code</label>
            <input type="text" name="code" id="code" value="{{ old('code', $major->code) }}"
                class="px-3 py-2 border border-zinc-300 bg-slate-50 w-full"
                placeholder="e.g. TI001">
        </div>

        <div class="flex flex-col gap-2">
            <label for="description" class="block font-semibold">Description</label>
            <textarea name="description" id="description" rows="4"
                class="px-3 py-2 border border-zinc-300 bg-slate-50 w-full"
                placeholder="Enter a brief description...">{{ old('description', $major->description) }}</textarea>
        </div>

        <div class="flex justify-start gap-2 pt-4">
            <a href="{{ route('majors.index') }}"
                class="bg-slate-50 border border-slate-500 text-slate-500 px-3 py-2 rounded cursor-pointer">
                Cancel
            </a>
            <button type="submit"
                class="bg-yellow-500 text-white px-4 py-2 rounded cursor-pointer">
                Update
            </button>
        </div>
    </form>
</x-default-layout>
