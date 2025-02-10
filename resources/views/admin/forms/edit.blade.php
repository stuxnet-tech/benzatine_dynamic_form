<x-app-layout>
    <div class="max-w-4xl mx-auto py-10 px-6 bg-white shadow rounded-lg">
        <h2 class="text-2xl font-bold text-gray-800 mb-6">Edit Dynamic Form</h2>
        <form action="{{ route('forms.update', $form) }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')
            <div>
                <label class="block text-gray-700 font-medium">Label</label>
                <input type="text" name="label" class="w-full border-gray-300 rounded-lg shadow-sm p-2 focus:ring-blue-500 focus:border-blue-500" value="{{ $form->label }}" required>
            </div>
            <div>
                <label class="block text-gray-700 font-medium">Field Type</label>
                <select name="field_type" class="w-full border-gray-300 rounded-lg shadow-sm p-2 focus:ring-blue-500 focus:border-blue-500" required>
                    <option value="text" {{ $form->field_type == 'text' ? 'selected' : '' }}>Text</option>
                    <option value="textarea" {{ $form->field_type == 'textarea' ? 'selected' : '' }}>Textarea</option>
                    <option value="radio" {{ $form->field_type == 'radio' ? 'selected' : '' }}>Radio Button</option>
                    <option value="checkbox" {{ $form->field_type == 'checkbox' ? 'selected' : '' }}>Checkbox</option>
                    <option value="dropdown" {{ $form->field_type == 'dropdown' ? 'selected' : '' }}>Dropdown</option>
                </select>
            </div>
            <button type="submit" class="w-full bg-green-600 text-white py-2 rounded-lg shadow hover:bg-green-700">Update</button>
        </form>
    </div>
</x-app-layout>
