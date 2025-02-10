<x-app-layout>
    <div class="max-w-6xl mx-auto py-10 px-6">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold text-gray-800">Dynamic Forms</h2>
            <a href="{{ route('forms.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded-lg shadow hover:bg-blue-700">Create New Form</a>
        </div>

        <div class="bg-white shadow rounded-lg p-6">
            <table class="w-full border-collapse border border-gray-200 rounded-lg overflow-hidden">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-4 py-2 border border-gray-200 text-left text-gray-700">Label</th>
                        <th class="px-4 py-2 border border-gray-200 text-left text-gray-700">Field Type</th>
                        <th class="px-4 py-2 border border-gray-200 text-center text-gray-700">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($forms as $form)
                        <tr class="border-b border-gray-200 hover:bg-gray-50">
                            <td class="px-4 py-3 border border-gray-200">{{ $form->label }}</td>
                            <td class="px-4 py-3 border border-gray-200">{{ $form->field_type }}</td>
                            <td class="px-4 py-3 border border-gray-200 text-center flex justify-center space-x-2">
                                <a href="{{ route('forms.edit', $form) }}" class="bg-yellow-500 text-white px-3 py-1 rounded-lg hover:bg-yellow-600">Edit</a>
                                <form action="{{ route('forms.destroy', $form) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded-lg hover:bg-red-600">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
