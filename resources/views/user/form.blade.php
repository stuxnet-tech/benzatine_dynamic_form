<x-app-layout>
    <div class="max-w-4xl mx-auto py-10 px-6 bg-white shadow rounded-lg">
        <h2 class="text-2xl font-bold text-gray-800 mb-6">Fill the Form</h2>
        <form action="{{ route('form.submit') }}" method="POST" class="space-y-4">
            @csrf
            @foreach($forms as $form)
                <div>
                    <label class="block text-gray-700 font-medium">{{ $form->label }}</label>
                    @if($form->field_type == 'text')
                        <input type="text" name="{{ $form->label }}" class="w-full border-gray-300 rounded-lg shadow-sm p-2 focus:ring-blue-500 focus:border-blue-500" required>
                    @elseif($form->field_type == 'textarea')
                        <textarea name="{{ $form->label }}" class="w-full border-gray-300 rounded-lg shadow-sm p-2 focus:ring-blue-500 focus:border-blue-500" required></textarea>
                    @elseif($form->field_type == 'radio')
                        <div class="flex space-x-4">
                            @foreach(json_decode($form->field_options ?? '[]', true) as $option)
                                <label class="flex items-center space-x-2">
                                    <input type="radio" name="{{ $form->label }}" value="{{ $option }}" class="text-blue-600 border-gray-300 focus:ring-blue-500">
                                    <span>{{ $option }}</span>
                                </label>
                            @endforeach
                        </div>
                    @elseif($form->field_type == 'checkbox')
                        <div class="flex space-x-4">
                            @foreach(json_decode($form->field_options ?? '[]', true) as $option)
                                <label class="flex items-center space-x-2">
                                    <input type="checkbox" name="{{ $form->label }}[]" value="{{ $option }}" class="text-blue-600 border-gray-300 focus:ring-blue-500">
                                    <span>{{ $option }}</span>
                                </label>
                            @endforeach
                        </div>
                    @elseif($form->field_type == 'dropdown')
                        <select name="{{ $form->label }}" class="w-full border-gray-300 rounded-lg shadow-sm p-2 focus:ring-blue-500 focus:border-blue-500">
                            @foreach(json_decode($form->field_options ?? '[]', true) as $option)
                                <option value="{{ $option }}">{{ $option }}</option>
                            @endforeach
                        </select>
                    @endif
                </div>
            @endforeach
            <button type="submit" class="w-full bg-green-600 text-white py-2 rounded-lg shadow hover:bg-green-700">Submit</button>
        </form>
    </div>
</x-app-layout>