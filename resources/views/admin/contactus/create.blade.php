@extends('admin.master')

@section('content')

<main class="h-full pb-16 overflow-y-auto">
    <div class="container px-6 mx-auto grid">
      <h2
        class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
      >
        Contact Us
      </h2>


      <form action="{{route('contactus.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
      <div
        class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800"
      >

      <label class="mt-2 block text-sm">
        <span class="text-gray-700 dark:text-gray-400">Name</span>
        <input
          class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
          placeholder="Enter your name"
          name="name"
          value="{{old('name')}}"
        />
        @if($errors->has('name'))
        <span class="text-xs text-red-600 dark:text-red-400">{{$errors->first('name')}}</span>
        @endif
      </label>

      <label class="mt-6 block text-sm">
        <span class="text-gray-700 dark:text-gray-400">Phone</span>
        <input
          class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
          placeholder="Enter your phone number"
          name="phone"
          value="{{old('phone')}}"
        />
        @if($errors->has('phone'))
        <span class="text-xs text-red-600 dark:text-red-400">{{$errors->first('phone')}}</span>
        @endif
      </label>

      <label class="mt-6 block text-sm">
        <span class="text-gray-700 dark:text-gray-400">Email</span>
        <input
          class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
          placeholder="Enter your email"
          name="email"
          value="{{old('email')}}"
        />
        @if($errors->has('email'))
        <span class="text-xs text-red-600 dark:text-red-400">{{$errors->first('email')}}</span>
        @endif
      </label>

      <label class="block mt-6 text-sm">
        <span class="text-gray-700 dark:text-gray-400">
          Interest
        </span>
        <select
          class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
         name="interest"
        >
          <option value="">Select your interest</option>
          <option value="Web Development">Web Development</option>
          <option value="FrontEnd">FrontEnd</option>
          <option value="Laravel Development">Laravel Development</option>
          <option value="UI/UX design">UI/UX design</option>
        </select>
      </label>


        <label class="block mt-6 text-sm">
            <span class="text-gray-700 dark:text-gray-400">Message</span>
            <textarea
              class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
              rows="3"
              placeholder="Enter the message"
              name="message"
            >{{old('message')}}</textarea>
            @if($errors->has('message'))
            <span class="text-xs text-red-600 dark:text-red-400">{{$errors->first('message')}}</span>
            @endif
        </label>

    </div>

        <div class="flex justify-start p-2 mb-4">
            <button type="submit" class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                Add Contacts
            </button>
        </div>
    </form>
    </div>
</main>

@endsection
