<x-app-layout>
    <div class="max-w-4xl mx-auto py-10 px-6 bg-white shadow rounded-lg">
        <h2 class="text-2xl font-bold text-gray-800 mb-6">Create Dynamic Form</h2>
        <form action="{{ route('forms.store') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label class="block text-gray-700 font-medium">Label</label>
                <input type="text" name="label" class="w-full border-gray-300 rounded-lg shadow-sm p-2 focus:ring-blue-500 focus:border-blue-500" required>
            </div>
            <div>
                <label class="block text-gray-700 font-medium">Field Type</label>
                <select name="field_type" class="w-full border-gray-300 rounded-lg shadow-sm p-2 focus:ring-blue-500 focus:border-blue-500" id="field_type" required>
                    <option value="text">Text</option>
                    <option value="textarea">Textarea</option>
                    <option value="radio">Radio Button</option>
                    <option value="checkbox">Checkbox</option>
                    <option value="dropdown">Dropdown</option>
                </select>
            </div>
            <div id="options-container" class="hidden">
                <label class="block text-gray-700 font-medium">Field Options (comma-separated)</label>
                <input type="text" name="field_options" id="field_options" class="w-full border-gray-300 rounded-lg shadow-sm p-2 focus:ring-blue-500 focus:border-blue-500">
                <small class="text-gray-500">Example: Option1, Option2, Option3</small>
            </div>
            <div class="flex items-center space-x-2">
                <input type="checkbox" name="is_required" value="1" class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                <label class="text-gray-700">Required?</label>
            </div>
            <button type="submit" class="w-full bg-green-600 text-white py-2 rounded-lg shadow hover:bg-green-700">Create</button>
        </form>
    </div>

    <script>
        document.getElementById('field_type').addEventListener('change', function () {
            const optionsContainer = document.getElementById('options-container');
            if (['radio', 'checkbox', 'dropdown'].includes(this.value)) {
                optionsContainer.classList.remove('hidden');
            } else {
                optionsContainer.classList.add('hidden');
            }
        });
    </script>
</x-app-layout>
