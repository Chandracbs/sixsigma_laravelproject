@extends('admin.master')

@section('content')

<main class="h-full pb-16 overflow-y-auto">
    <div class="container px-6 mx-auto grid">
      <h2
        class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
      >
      Testimonials
      </h2>

      <form action="{{route('testimonial.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div
        class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800"
        >

        <label class="block mt-6 text-sm">
            <span class="text-gray-700 dark:text-gray-400">Testimonials</span>
            <textarea
              class="mb-4 block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
              rows="3"
              placeholder="Enter the testimonials"
              name="testimonials"
            >{{old('testimonials')}}</textarea>
            @if($errors->has('testimonials'))
            <span class="text-xs text-red-600 dark:text-red-400">{{$errors->first('testimonials')}}</span>
            @endif
        </label>

        <label class="mt-6 block text-sm">
            <span class="text-gray-700 dark:text-gray-400">Name</span>
            <input
              class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
              placeholder="Enter the name"
              name="name"
              value="{{old('name')}}"
            />
            @if($errors->has('name'))
            <span class="text-xs text-red-600 dark:text-red-400">{{$errors->first('name')}}</span>
            @endif
        </label>

        <label class="mt-6 block text-sm">
            <span class="text-gray-700 dark:text-gray-400">Position</span>
            <input
              class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
              placeholder="Enter the position"
              name="position"
              value="{{old('position')}}"
            />
            @if($errors->has('position'))
            <span class="text-xs text-red-600 dark:text-red-400">{{$errors->first('position')}}</span>
            @endif
          </label>


        <label class="mt-6 block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="user_avatar">Upload Image</label>
        <input type="file" name="image" class="mb-4 block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" >
        @if($errors->has('image'))
        <span class="text-xs text-red-600 dark:text-red-400">{{$errors->first('image')}}</span>
        @endif



    </div>

        <div class="flex justify-start p-2 mb-4">
            <button type="submit" class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                Add Testimonial
            </button>
        </div>
    </form>
    </div>
</main>

@endsection

{{--
@section('scripts')
<script>
    ClassicEditor
        .create( document.querySelector( '#ckeditor_textarea' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
@endsection --}}
