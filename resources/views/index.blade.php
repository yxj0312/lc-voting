<x-app-layout>
    <div class="filters flex space-x-6">
        <div class="w-1/3">
            <select name="category" id="category" class="w-full rounded-xl border-none px-4 py-2">
                <option value="Category One" class="">Category One</option>
                <option value="Category One" class="">Category One</option>
                <option value="Category One" class="">Category One</option>
                <option value="Category One" class="">Category One</option>
            </select>
        </div>

        <div class="w-1/3">
            <select name="other_filters" id="other_filters" class="w-full rounded-xl border-none px-4 py-2">
                <option value="Filter One" class="">Filter One</option>
                <option value="Filter One" class="">Filter One</option>
                <option value="Filter One" class="">Filter One</option>
                <option value="Filter One" class="">Filter One</option>
            </select>
        </div>

        <div class="w-1/3 relative">
            <input type="search" placeholder="Find an idea" class="w-full rounded-xl bg-white border-none placeholder-gray-900 px-4 py-2 pl-8">
            <div class="absolute top-0 flex items-center h-full ml-2">
                <svg class="w-4 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </div>
        </div>
    </div><!-- end filter -->

    <div class="ideas-container space-y-6 my-6">
        <div class="idea-container bg-white rounded-xl flex">
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-seminbold text-2xl">12</div>
                    <div class="text-gray-200">Votes</div>

                    <div class="mt-8">
                        <button class="w-20 bg-gray-200 border border-gray-200 hover:border-gray-400 transition duration-150 ease-in font-bold text-xxs uppercase rounded-xl px-4 py-3">Vote</button>
                    </div>

                </div>
            </div>
        </div><!-- end idea-container -->
    </div><!-- end ideas-container -->
</x-app-layout>