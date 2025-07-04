<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <section class="py-10">
        <div class="max-w-7xl mx-auto mt-20 bg-[#FEF8EF] p-6">
            <div class="flex items-center gap-4">
                <div class="relative">
                    <div class="p-4 rounded-full bg-[#FBD7A2]"><svg width="38" height="42" viewBox="0 0 38 42"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M35.6668 39.75V35.5833C35.6668 33.3732 34.7889 31.2536 33.2261 29.6908C31.6633 28.128 29.5436 27.25 27.3335 27.25H10.6668C8.45669 27.25 6.33708 28.128 4.77427 29.6908C3.21147 31.2536 2.3335 33.3732 2.3335 35.5833V39.75M27.3335 10.5833C27.3335 15.1857 23.6025 18.9167 19.0002 18.9167C14.3978 18.9167 10.6668 15.1857 10.6668 10.5833C10.6668 5.98096 14.3978 2.25 19.0002 2.25C23.6025 2.25 27.3335 5.98096 27.3335 10.5833Z"
                                stroke="#1E1E1E" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <label for="profile_picture" class="absolute bottom-0 right-0 cursor-pointer">
                        <div class="p-2 rounded-full bg-white hover:bg-slate-200">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M2.16667 13.8333H3.35417L11.5 5.6875L10.3125 4.5L2.16667 12.6458V13.8333ZM0.5 15.5V11.9583L11.5 0.979167C11.6667 0.826389 11.8507 0.708333 12.0521 0.625C12.2535 0.541667 12.4653 0.5 12.6875 0.5C12.9097 0.5 13.125 0.541667 13.3333 0.625C13.5417 0.708333 13.7222 0.833333 13.875 1L15.0208 2.16667C15.1875 2.31944 15.309 2.5 15.3854 2.70833C15.4618 2.91667 15.5 3.125 15.5 3.33333C15.5 3.55556 15.4618 3.76736 15.3854 3.96875C15.309 4.17014 15.1875 4.35417 15.0208 4.52083L4.04167 15.5H0.5ZM10.8958 5.10417L10.3125 4.5L11.5 5.6875L10.8958 5.10417Z"
                                    fill="#1D1B20" />
                            </svg>
                        </div>
                    </label>
                    <input type="file" id="profile_picture" name="profile_picture" class="hidden">
                </div>
                <div>
                    <h2 class="font-bold text-xl text-gray-700">Edit Profile</h2>
                    <p class="font-medium text-md text-gray-700">Update your personal information</p>
                </div>
            </div>

            <form method="POST" action="{{ route('user.update') }}" enctype="multipart/form-data" class="mt-6">
                @csrf
                @method('PUT')
                
                @if(session('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                        {{ session('success') }}
                    </div>
                @endif
                
                @if($errors->any())
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                
                <hr class="my-6">
                <div class="flex justify-between items-center">
                    <label for="name" class="font-medium text-md text-gray-700">Username :</label>
                    <input type="text" id="name" name="username" value="{{ $user->username }}" 
                        class="border border-gray-300 rounded-md p-2 w-1/2 focus:outline-none focus:ring-2 focus:ring-[#FBD7A2]">
                </div>
                
                <hr class="my-6">
                <div class="flex justify-between items-center">
                    <label for="email" class="font-medium text-md text-gray-700">Email :</label>
                    <input type="email" id="email" name="email" value="{{ $user->email }}" 
                        class="border border-gray-300 rounded-md p-2 w-1/2 focus:outline-none focus:ring-2 focus:ring-[#FBD7A2]">
                </div>
                
                <hr class="my-6">
                <div class="flex justify-between items-center">
                    <label for="no_hp" class="font-medium text-md text-gray-700">Phone Number :</label>
                    <input type="text" id="no_hp" name="phonenumber" value="{{ $user->phonenumber }}" 
                        class="border border-gray-300 rounded-md p-2 w-1/2 focus:outline-none focus:ring-2 focus:ring-[#FBD7A2]">
                </div>
                
                <div class="mt-8 flex justify-end">
                    <button type="submit" class="bg-[#FBD7A2] hover:bg-[#f8c980] text-gray-800 font-medium py-2 px-6 rounded-md">
                        Save Changes
                    </button>
                </div>
            </form>
        </div>
    </section>
</x-layout>
