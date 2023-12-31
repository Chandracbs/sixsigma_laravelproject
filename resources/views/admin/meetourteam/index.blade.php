@extends('admin.master')

@section('content')
<main class="h-full pb-16 overflow-y-auto">
    <div class="container grid px-6 mx-auto">
      <h2
        class="mt-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
      >
        Meet Our Team
      </h2>
      {{-- <div class="flex justify-end p-4 mb-4">
        <a href="{{route('meetourteam.create')}}">
            <button class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                Add Team
              </button>
        </a>
      </div> --}}

      <div class="flex justify-between p-4 mb-4">
        <label class="block mr-4 text-sm">
          <div class="relative text-gray-500 focus-within:text-purple-600">
            <form action="">
                <input name="search" type="search" class="block w-full pr-20 mt-1 text-sm text-black dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input" placeholder="Search" />
                <button class="absolute inset-y-0 right-0 px-4 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-r-md active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                Search
                </button>
            </form>
          </div>
        </label>
        <a href="{{route('meetourteam.create')}}">
          <button class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
            Add Team
          </button>
        </a>
      </div>


      {{-- TABLE CODE BELOW --}}
      <div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs">
        <div class="w-full overflow-x-auto">
          <table class="w-full whitespace-no-wrap">
            <thead>
              <tr
                class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
              >
                <th class="px-4 py-3">
                    <div class="flex items-center">
                        <span class="mr-2">ID</span>
                        <span>
                            <?php
                                $orderBy = 'id';
                                $direction = request()->get('direction') === 'asc' ? 'desc' : 'asc';
                                $route = route('meetourteam.index', ['orderBy' => $orderBy, 'direction' => $direction]);
                            ?>
                            <a href="{{ $route }}">
                                <svg class="h-4 w-4 text-red-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <?php if ($direction === 'asc' && $orderBy === 'id'): ?>
                                        <polyline points="6 9 12 15 18 9"></polyline>
                                    <?php else: ?>
                                        <polyline points="18 15 12 9 6 15"></polyline>
                                    <?php endif; ?>
                                </svg>
                            </a>
                        </span>
                    </div>
                </th>
                <th class="px-4 py-3">Image</th>
                <th class="px-4 py-3">
                    <div class="flex items-center">
                        <span class="mr-2">Name</span>
                        <span>
                            <?php
                                $orderBy = 'name';
                                $route = route('meetourteam.index', ['orderBy' => $orderBy, 'direction' => $direction]);
                            ?>
                            <a href="{{ $route }}">
                                <svg class="h-4 w-4 text-red-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <?php if ($direction === 'asc' && $orderBy === 'id'): ?>
                                        <polyline points="6 9 12 15 18 9"></polyline>
                                    <?php else: ?>
                                        <polyline points="18 15 12 9 6 15"></polyline>
                                    <?php endif; ?>
                                </svg>
                            </a>
                        </span>
                    </div>
                </th>
                <th class="px-4 py-3">Position Name</th>
                <th class="px-4 py-3">Description</th>
                <th class="px-4 py-3">
                    <div class="flex items-center">
                        <span class="mr-2">Created At</span>
                        <span>
                            <?php
                                $orderBy = 'created_at';
                                $route = route('meetourteam.index', ['orderBy' => $orderBy, 'direction' => $direction]);
                            ?>
                            <a href="{{ $route }}">
                                <svg class="h-4 w-4 text-red-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <?php if ($direction === 'asc' && $orderBy === 'id'): ?>
                                        <polyline points="6 9 12 15 18 9"></polyline>
                                    <?php else: ?>
                                        <polyline points="18 15 12 9 6 15"></polyline>
                                    <?php endif; ?>
                                </svg>
                            </a>
                        </span>
                    </div>
                </th>
                <th class="px-4 py-3">Updated At</th>
                <th class="px-4 py-3">Action</th>
              </tr>
            </thead>
            <tbody
              class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800"
            >
            @if ($meetourteam->count()>0)
            @foreach ($meetourteam as $value )
            <tr class="text-gray-700 dark:text-gray-400">

                <td class="px-4 py-3 text-sm">
                    {{$value->id}}
                </td>

                <td class="px-4 py-3 text-sm">
                    {{-- removed hidden from class --}}
                    <div
                       class="relative  w-8 h-8 mr-3 rounded-full md:block"
                     >
                     @if (!empty($value->image))
                       <img
                         class="object-cover w-full h-full rounded-full"
                         src = "{{asset($value->image->image_location.'/'.$value->image->image_name)}}"
                         alt="image.jpg"
                         loading="lazy"
                       />
                       @endif
                       <div
                         class="absolute inset-0 rounded-full shadow-inner"
                         aria-hidden="true"
                       ></div>
                </td>

                <td class="px-4 py-3 text-sm">
                    {!!$value->name!!}
                </td>


                <td class="px-4 py-3 text-sm">
                    {{$value->position_name}}
                </td>

                <td class="px-4 py-3 text-sm">
                    {{Str::limit($value->description,30)}}
                </td>


                <td class="px-4 py-3 text-sm">
                    {{$value->created_at}}
                </td>

                <td class="px-4 py-3 text-sm">
                    {{$value->updated_at}}
                </td>

                {{-- Buttons --}}
                <td class="px-4 py-3">
                    <div class="flex items-center space-x-4 text-sm">
                        <a href="{{route('meetourteam.edit',$value->id)}}">
                            <button
                              class="flex items-center justify-between text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                              aria-label="Edit"
                            >
                              <svg
                                class="w-5 h-5"
                                aria-hidden="true"
                                fill="currentColor"
                                viewBox="0 0 20 20"
                              >
                                <path
                                  d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"
                                ></path>
                              </svg>
                            </button>
                        </a>
                            <form action="{{route('meetourteam.destroy',$value->id)}}" method="POST" onclick="return confirm('Are you sure you want to delete?');">
                            @csrf
                            @method('DELETE')
                            <button
                              class="flex items-center justify-between text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                              aria-label="Delete"
                            >
                              <svg
                                class="w-5 h-5"
                                aria-hidden="true"
                                fill="currentColor"
                                viewBox="0 0 20 20"
                              >
                                <path
                                  fill-rule="evenodd"
                                  d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                  clip-rule="evenodd"
                                ></path>
                              </svg>
                            </button>
                        </form>
                    </div>
                  </td>
              </tr>
              @endforeach
              @else
              <td style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; text-align:center;" colspan="8">Data Not Found.</td>
              @endif

            </tbody>
          </table>
        </div>


        {{-- PAGINATION SECTION --}}
        {{-- <div
          class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800"
            >
          <span class="flex items-center col-span-3">
            Showing 21-30 of 100
          </span>
          <span class="col-span-2"></span>


          <span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">
            <nav aria-label="Table navigation">
              <ul class="inline-flex items-center">
                <li>
                  <button
                    class="px-3 py-1 rounded-md rounded-l-lg focus:outline-none focus:shadow-outline-purple"
                    aria-label="Previous"
                  >
                    <svg
                      aria-hidden="true"
                      class="w-4 h-4 fill-current"
                      viewBox="0 0 20 20"
                    >
                      <path
                        d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                        clip-rule="evenodd"
                        fill-rule="evenodd"
                      ></path>
                    </svg>
                  </button>
                </li>
                <li>
                  <button
                    class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
                  >
                    1
                  </button>
                </li>
                <li>
                  <button
                    class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
                  >
                    2
                  </button>
                </li>
                <li>
                  <button
                    class="px-3 py-1 text-white transition-colors duration-150 bg-purple-600 border border-r-0 border-purple-600 rounded-md focus:outline-none focus:shadow-outline-purple"
                  >
                    3
                  </button>
                </li>
                <li>
                  <button
                    class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
                  >
                    4
                  </button>
                </li>
                <li>
                  <span class="px-3 py-1">...</span>
                </li>
                <li>
                  <button
                    class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
                  >
                    8
                  </button>
                </li>
                <li>
                  <button
                    class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
                  >
                    9
                  </button>
                </li>
                <li>
                  <button
                    class="px-3 py-1 rounded-md rounded-r-lg focus:outline-none focus:shadow-outline-purple"
                    aria-label="Next"
                  >
                    <svg
                      class="w-4 h-4 fill-current"
                      aria-hidden="true"
                      viewBox="0 0 20 20"
                    >
                      <path
                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                        clip-rule="evenodd"
                        fill-rule="evenodd"
                      ></path>
                    </svg>
                  </button>
                </li>
              </ul>
            </nav>
          </span>
        </div> --}}




      </div>

      </div>
    </div>
  </main>
@endsection
