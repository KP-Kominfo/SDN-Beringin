@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'border-gray-300 px-3 border-2 py-2
px-3 py-2 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm']) }}>
