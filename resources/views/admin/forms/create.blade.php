<x-app-layout>
    <div class="container py-6">
        <h2>Create Dynamic Form</h2>
        <form action="{{ route('dynamic-forms.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Label</label>
                <input type="text" name="label" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Field Type</label>
                <select name="field_type" class="form-control" id="field_type" required>
                    <option value="text">Text</option>
                    <option value="textarea">Textarea</option>
                    <option value="radio">Radio Button</option>
                    <option value="checkbox">Checkbox</option>
                    <option value="dropdown">Dropdown</option>
                </select>
            </div>
            <div class="mb-3" id="options-container" style="display: none;">
                <label class="form-label">Field Options (comma-separated)</label>
                <input type="text" name="field_options" id="field_options" class="form-control">
                <small>Example: Option1, Option2, Option3</small>
            </div>
            <div class="mb-3">
                <label class="form-label">Required?</label>
                <input type="checkbox" name="is_required" value="1">
            </div>
            <button type="submit" class="btn btn-success">Create</button>
        </form>
    </div>

    <script>
        document.getElementById('field_type').addEventListener('change', function () {
            const optionsContainer = document.getElementById('options-container');
            if (['radio', 'checkbox', 'dropdown'].includes(this.value)) {
                optionsContainer.style.display = 'block';
            } else {
                optionsContainer.style.display = 'none';
            }
        });
    </script>
</x-app-layout>
