@extends('admin.master')

@section('content')

<main class="h-full pb-16 overflow-y-auto">
    <div class="container px-6 mx-auto grid">
      <h2
        class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
      >
      Frequently Asked questions
      </h2>

      <form action="{{route('faq.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div
        class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800"
        >
        <label class="block mt-6 text-sm">
            <span class="text-gray-700 dark:text-gray-400">Question Asked</span>
            <textarea
              class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
              rows="3"
              placeholder="Enter the question"
              name="question"
            >{{old('question')}}</textarea>
            @if($errors->has('question'))
            <span class="text-xs text-red-600 dark:text-red-400">{{$errors->first('question')}}</span>
            @endif
        </label>

        <label class="block mt-6 mb-4 text-sm">
            <span class="text-gray-700 dark:text-gray-400">Answer Provided</span>
            <textarea
              class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
              rows="3"
              id="ckeditor_textarea"
              placeholder="Enter the answer"
              name="answer"
            >{{old('answer')}}</textarea>
            @if($errors->has('answer'))
            <span class="text-xs text-red-600 dark:text-red-400">{{$errors->first('answer')}}</span>
            @endif
        </label>
    </div>

        <div class="flex justify-start p-2 mb-4">
            <button type="submit" class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                Add FAQ
            </button>
        </div>

    </form>
    </div>
</main>

@endsection


@section('scripts')
<script>
    ClassicEditor
        .create( document.querySelector( '#ckeditor_textarea' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
@endsection
