<div>
    <div class="overflow-x-auto">
        <div class="flex justify-between mb-4">
            <div class="w-1/2 pr-2">
                <label for="perPage" class="block text-sm font-medium">Items per page:</label>
                <select wire:model.live='paginate'
                    class="mt-1 pl-3 pr-10 py-2 text-gray-700 border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                    <option value="5">5</option>
                    <option value="10">10</option>
                    <option value="20">20</option>
                    <option value="100">100</option>
                </select>
            </div>
            <div class="w-1/2 pl-2">
                <label for="search" class="block text-sm font-medium">Search:</label>
                <input type="text" wire:model.live='search' id="search"
                    class="mt-1 pl-3 pr-10 py-2 text-gray-700 border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md"
                    placeholder="Search products...">
            </div>
        </div>

        <table class="w-full text-left table-auto min-w-max">
            <thead>
                <tr>
                    <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">
                        <p class="block font-sans text-sm antialiased font-normal leading-none opacity-70">
                            #
                        </p>
                    </th>
                    <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">
                        <p class="block font-sans text-sm antialiased font-normal leading-none opacity-70">
                            Name
                        </p>
                    </th>
                    <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">
                        <p class="block font-sans text-sm antialiased font-normal leading-none opacity-70">
                            Description
                        </p>
                    </th>
                    <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">
                        <p class="block font-sans text-sm antialiased font-normal leading-none opacity-70">
                            Price
                        </p>
                    </th>
                    <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">
                        <p class="block font-sans text-sm antialiased font-normal leading-none opacity-70">
                        </p>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $key => $item)
                    <tr>
                        <td class="p-4">
                            <p class="block font-sans text-sm antialiased font-normal leading-normal">
                                {{ $products->firstItem() + $key }}
                            </p>
                        </td>
                        <td class="p-4">
                            <p class="block font-sans text-sm antialiased font-normal leading-normal">
                                {{ $item->title }}
                            </p>
                        </td>
                        <td class="p-4">
                            <p class="font-sans text-sm antialiased font-normal leading-normal">
                                {{ $item->description }}
                            </p>
                        </td>
                        <td class="p-4">
                            <p class="block font-sans text-sm antialiased font-normal leading-normal">
                                Rp. {{ number_format($item->price, 0, ',', '.') }}
                            </p>
                        </td>
                        <td class="p-4">
                            <a href="#"
                                class="ml-2 px-4 py-2 bg-blue-500 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75">
                                Edit
                            </a>
                            <a href="#"
                                class="ml-2 px-4 py-2 bg-red-500 text-white font-semibold rounded-lg shadow-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-400 focus:ring-opacity-75">
                                Delete
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $products->links() }}
    </div>
</div>
