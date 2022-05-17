<div>
    <div class="inline-flex overflow-hidden mb-4 w-full bg-white rounded-lg shadow-md">
        <div class="px-4 py-2 -mx-3">
            <div class="mx-3">
                <form>
                    <label for="">
                        Search:
                        <input wire:model="name" type="text">
                    </label>
                </form>


            </div>
        </div>
    </div>

    <div class="overflow-hidden mb-8 w-full rounded-lg border shadow-xs">
        <div class="overflow-x-auto w-full">
            <table class="w-full whitespace-no-wrap">
                <thead>
                <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase bg-gray-50 border-b">
                    <th class="px-4 py-3">Name</th>
                    <th class="px-4 py-3">Email</th>
                    <th class="px-4 py-3">Roles</th>
                </tr>
                </thead>
                <tbody class="bg-white divide-y">
                @foreach($users as $user)
                    <tr class="text-gray-700">
                        <td class="px-4 py-3 text-sm">
                            {{ $user->name }}
                        </td>
                        <td class="px-4 py-3 text-sm">
                            {{ $user->email }}
                        </td>
                        <td class="px-4 py-3 text-sm">
                            @foreach($user->roles as $role)
                                {{ $role->name }}
                            @endforeach
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
