<x-default-layout title="Add Major" section_title="Create Major">
    <div>
        <form action="{{ route('majors.store') }}" method="POST"
            class="flex flex-col gap-4 px-6 py-4 bg-white border border-zinc-300 shadow col-span-3 md:col-span-2">
            @csrf
            @method('POST')
            
            <div class="grid sm:grid-cols-1 gap-4">
                <div class="flex flex-col gap-2">
                    <label for="name">Major Name</label>
                    <input type="text" name="name" id="name" 
                        class="px-3 py-2 border border-zinc-300 bg-slate-50"
                        placeholder="e.g. Teknik Informatika">
                </div>

                <div class="flex flex-col gap-2">
                    <label for="code">Major Code</label>
                    <input type="text" name="code" id="code" 
                        class="px-3 py-2 border border-zinc-300 bg-slate-50"
                        placeholder="e.g. TI001">
                </div>

                <div class="flex flex-col gap-2">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" rows="4"
                        class="px-3 py-2 border border-zinc-300 bg-slate-50"
                        placeholder="Enter a brief description of the major..."></textarea>
                </div>

                <div class="self-end flex gap-2">
                    <a href="{{ route('majors.index') }}"
                        class="bg-slate-50 border border-slate-500 text-slate-500 px-3 py-2 cursor-pointer">
                        <span>Cancel</span>
                    </a>
                    <button type="submit"
                        class="bg-green-50 border border-green-500 text-green-500 px-3 py-2 flex items-center gap-2 cursor-pointer">
                        <i class="ph ph-floppy-disk block text-green-500"></i>
                        <span>Save</span>
                    </button>
                </div>
            </div>
        </form>
    </div>
</x-default-layout>
