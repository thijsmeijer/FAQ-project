<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class QuestionController extends Controller
{

    protected $slug;
    public function __invoke(Request $request)
    {
        $questions = Question::latest()->filter($request->get('search'))->get();

        return view('faqs', [
            'questions' => $questions,
        ]);
    }

    public function show($question)
    {
        $this->slug = $question;
        $update = Question::where('slug', $question)->first();
        Question::where('slug', $question)->update(['importance' => $update->importance + 1]);

        return view('faq', [
            'question' => Question::all()->where('slug', str::slug($this->slug))->first()
        ]);
    }

    public function update($question, Request $request)
    {
        $this->slug = $question;

        if (request('textUpdate')) {
            $input = request('textUpdate');
            Question::where('slug', $question)->update(['answer' => $input]);
        }

        if (request('titleUpdate')) {
            $input = request('titleUpdate');
            $this->slug = strip_tags(request('titleUpdate'));
            Question::where('slug', $question)->update(['title' => $this->slug]);
            Question::where('slug', $question)->update(['question' => $input]);
            Question::where('slug', $question)->update(['slug' => str::slug($this->slug)]);

            return redirect('/faqs/' . str::slug($this->slug));
        }

        return view('faq', [
            'question' => Question::all()->where('slug', str::slug($this->slug))->first()
        ]);
    }
}