<x-app-layout>
    <div class="container">
        <h2>Fill the Form</h2>
        <form action="{{ route('form.submit') }}" method="POST">
            @csrf
            @foreach($forms as $form)
                <div class="mb-3">
                    <label class="form-label">{{ $form->label }}</label>
                    @if($form->field_type == 'text')
                        <input type="text" name="{{ $form->label }}" class="form-control" required>
                    @elseif($form->field_type == 'textarea')
                        <textarea name="{{ $form->label }}" class="form-control" required></textarea>
                    @elseif($form->field_type == 'radio')
                        @foreach(json_decode($form->field_options ?? '[]', true) as $option)
                            <input type="radio" name="{{ $form->label }}" value="{{ $option }}"> {{ $option }}
                        @endforeach
                    @elseif($form->field_type == 'checkbox')
                        @foreach(json_decode($form->field_options ?? '[]', true) as $option)
                            <input type="checkbox" name="{{ $form->label }}[]" value="{{ $option }}"> {{ $option }}
                        @endforeach
                    @elseif($form->field_type == 'dropdown')
                        <select name="{{ $form->label }}" class="form-control">
                            @foreach(json_decode($form->field_options ?? '[]', true) as $option)
                                <option value="{{ $option }}">{{ $option }}</option>
                            @endforeach
                        </select>
                    @endif
                </div>
            @endforeach
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
</x-app-layout>