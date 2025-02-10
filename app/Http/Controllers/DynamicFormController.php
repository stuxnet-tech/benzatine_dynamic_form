<?php

namespace App\Http\Controllers;

use App\Models\DynamicForm;
use App\Models\FormSubmission;
use Illuminate\Http\Request;

class DynamicFormController extends Controller
{
    public function index()
    {
        $forms = DynamicForm::all();
        return view('admin.forms.index', compact('forms'));
    }

    public function create()
    {
        return view('admin.forms.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'label' => 'required|string',
            'is_required' => 'boolean',
            'field_type' => 'required|string',
            'field_options' => 'nullable|string'
        ]);
        if (in_array($data['field_type'], ['radio', 'checkbox', 'dropdown'])) {
            $data['field_options'] = json_encode(explode(',', $request->field_options));
        } else {
            $data['field_options'] = null;
        }
        DynamicForm::create($data);
        return redirect()->route('dynamic-forms.index');
    }

    public function edit(DynamicForm $form)
    {
        return view('admin.forms.edit', compact('form'));
    }

    public function update(Request $request, DynamicForm $form)
    {
        $data = $request->validate([
            'label' => 'required|string',
            'is_required' => 'boolean',
            'field_type' => 'required|string',
            'field_options' => 'nullable|string'
        ]);

        if (in_array($data['field_type'], ['radio', 'checkbox', 'dropdown'])) {
            $data['field_options'] = json_encode(explode(',', $request->field_options));
        } else {
            $data['field_options'] = null;
        }

        $form->update($data);

        return redirect()->route('dynamic-forms.index')->with('success', 'Form field updated successfully.');
    }

    public function destroy(DynamicForm $form)
    {
        $form->delete();
        return redirect()->route('dynamic-forms.index');
    }

    public function showForm()
    {
        $forms = DynamicForm::all();
        return view('user.form', compact('forms'));
    }

    public function submitForm(Request $request)
    {
        $data = $request->all();
        FormSubmission::create(['form_data' => json_encode($data)]);
        return redirect()->route('form.thankyou');
    }

    public function thankYou()
    {
        return view('user.thankyou');
    }
}
