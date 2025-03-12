<x-layout>
    <x-slot:heading>Register</x-slot:heading>
    <form action="/register" method="POST" class="space-y-8 divide-y divide-gray-900/10">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-form-field>
                        <x-form-label for="first_name" :value="__('first_name')">First Name</x-form-label>
                        <div class="mt-2">
                            <div
                                class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                                <x-form-input name="first_name" id="first_name" placeholder="Bob" required />
                            </div>
                            <x-form-error name="first_name" />
                        </div>
                    </x-form-field>
                </div>
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-form-field>
                        <x-form-label for="last_name" :value="__('last_name')">Last Name</x-form-label>
                        <div class="mt-2">
                            <div
                                class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                                <x-form-input name="last_name" id="last_name" placeholder="Smith" required />
                            </div>
                            <x-form-error name="last_name" />
                        </div>
                    </x-form-field>
                </div>
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-form-field>
                        <x-form-label for="email" :value="__('email')">Email</x-form-label>
                        <div class="mt-2">
                            <div
                                class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                                <x-form-input name="email" id="email" placeholder="bob@smith.com" type="email"
                                    required />
                            </div>
                            <x-form-error name="email" />
                        </div>
                    </x-form-field>
                </div>
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-form-field>
                        <x-form-label for="password" :value="__('password')">Password</x-form-label>
                        <div class="mt-2">
                            <div
                                class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                                <x-form-input name="password" id="password" required type="password" />
                                <x-form-error name="password" />
                            </div>
                        </div>
                    </x-form-field>
                </div>
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-form-field>
                        <x-form-label for="password_confirmation" :value="__('password_confirmation')">Confirm Password</x-form-label>
                        <div class="mt-2">
                            <div
                                class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                                <x-form-input name="password_confirmation" id="password_confirmation" required
                                    type="password" />
                                <x-form-error name="password_confirmation" />
                            </div>
                        </div>
                    </x-form-field>
                </div>
            </div>
        </div>
        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="/" class="text-sm/6 font-semibold text-gray-900 underline">Cancel</a>
            <x-form-button type="submit">Register</x-form-button>
        </div>
    </form>

</x-layout>
