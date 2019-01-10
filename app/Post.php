<?php

namespace App;

use Kris\LaravelFormBuilder\Form;

class Post extends Form
{
    public function buildForm()
    {
        $this
            ->add('name', 'text')
            ->add('address', 'text')
            ->add('tel', 'text')
            ->add('submit', 'submit', ['label' => 'save']);
    }
}
