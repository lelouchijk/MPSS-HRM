@props(['disabled' => false])

{{-- <input @disabled($disabled) {{ $attributes->merge(['class' => 'border-gray-300 dark:border-gray-700 dark:bg-[#33694F] text-white dark:text-[#33694F] focus:border-[#33694F] dark:focus:border-[#33694F] focus:ring-[#33694F] focus:bg-[#b2dac8] dark:focus:bg-[#b2dac8] active:border-[#33694F] dark:active:border-[#33694F] active:ring-[#33694F] active:bg-[#b2dac8] dark-active:bg-[#b2dac8] rounded-xl shadow-sm '] )}} "> --}}


{{-- <input @disabled($disabled) {{ $attributes->merge(['class' => 'border-gray-300 dark:border-gray-700 dark:bg-[#33694F] text-white dark:text-[#33694F] focus:border-[#33694F] dark:focus:border-[#33694F] focus:ring-[#33694F] focus:bg-[rgba(230,243,237,0.25)] dark:focus:bg-[rgba(230,243,237,0.25)] active:border-[#33694F] dark:active:border-[#33694F] rounded-xl shadow-sm invalid:border-[#b2dac8] invalid:text-[#33694F] '] )}} "> --}}
{{-- [rgba(230,243,237,0.25)] --}}

{{-- bg-[#b2dac8] --}}


<input @disabled($disabled) {{ $attributes->merge(['class' => 'border-gray-300 dark:border-gray-700 dark:bg-[#b2dac8] text-white dark:text-[#33694F] focus:border-[#33694F] dark:focus:border-[#33694F] focus:ring-[#33694F] focus:bg-[rgba(230,243,237,0.25)] dark:focus:bg-[rgba(230,243,237,0.25)]  rounded-xl shadow-sm invalid:border-[#33694F] invalid:bg-[#33694F] dark:invalid:bg-[#33694F]invalid:text-[#33694F] '] )}} ">

