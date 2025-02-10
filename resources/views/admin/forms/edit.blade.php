<x-app-layout>
    <div class="container py-6">
        <h2>Edit Dynamic Form</h2>
        <form action="{{ route('dynamic-forms.update', $form) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="form-label">Label</label>
                <input type="text" name="label" class="form-control" value="{{ $form->label }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Field Type</label>
                <select name="field_type" class="form-control" required>
                    <option value="text" {{ $form->field_type == 'text' ? 'selected' : '' }}>Text</option>
                    <option value="textarea" {{ $form->field_type == 'textarea' ? 'selected' : '' }}>Textarea</option>
                    <option value="radio" {{ $form->field_type == 'radio' ? 'selected' : '' }}>Radio Button</option>
                    <option value="checkbox" {{ $form->field_type == 'checkbox' ? 'selected' : '' }}>Checkbox</option>
                    <option value="dropdown" {{ $form->field_type == 'dropdown' ? 'selected' : '' }}>Dropdown</option>
                </select>
            </div>
            <button type="submit" class="btn btn-success">Update</button>
        </form>
    </div>
</x-app-layout>