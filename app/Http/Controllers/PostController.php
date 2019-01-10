<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kris\LaravelFormBuilder\FormBuilder;
use App\Person;

class PostController extends Controller
{
    public function create(FormBuilder $formBuilder)
    {
        $form = $formBuilder->create(\App\Post::class, [
            'method' => 'POST',
            'url' => route('post.store')
        ]);

        return view('post.create', compact('form'));
    }

    public function store(FormBuilder $formBuilder)
    {
        $form = $formBuilder->create(\App\Post::class);

        if (!$form->isValid()) {
            return redirect()->back()->withErrors($form->getErrors())->withInput();
        }

        $person = new Person();
        $requests = $form->getRequest()->all();
        $person->fill($requests);
        $person->save();

        return redirect()->route('post.show');
    }

    public function show()
    {
        $person = new Person();
        $data = $person::all()->toArray();
        var_dump($data);
    }
}
