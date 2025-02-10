<x-app-layout>
    <div class="container py-6">
        <h2>Dynamic Forms</h2>
        <a href="{{ route('dynamic-forms.create') }}" class="btn btn-primary">Create New Form</a>
        <table class="table mt-3">
            <tr><th>Label</th><th>Field Type</th><th>Actions</th></tr>
            @foreach($forms as $form)
                <tr>
                    <td>{{ $form->label }}</td>
                    <td>{{ $form->field_type }}</td>
                    <td>
                        <a href="{{ route('dynamic-forms.edit', $form) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('dynamic-forms.destroy', $form) }}" method="POST" style="display:inline;">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</x-app-layout>
