@props(['disabled' => false])

{{-- <input @disabled($disabled) {{ $attributes->merge(['class' => 'border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm']) }}> --}}


<input @disabled($disabled) {{ $attributes->merge(['class' => 'border-gray-300 dark:border-gray-700 dark:bg-[#33694F] text-white dark:text-white-300 focus:border-[#1E352A] dark:focus:border-[#1E352A] focus:ring-[#1E352A] dark:focus:bg-[#b2dac8]  rounded-xl shadow-sm '] )}} ">


{{-- <input @disabled($disabled) {{ $attributes->merge(['class' => 'border-gray-300 dark:border-gray-700 dark:bg-[#1E352A] dark:text-gray-300 focus:border-[#1E352A] dark:focus:border-gray-100 focus:ring-gray-100 dark:focus:bg-[#33694F]  rounded-xl shadow-sm'] )}} "> --}}