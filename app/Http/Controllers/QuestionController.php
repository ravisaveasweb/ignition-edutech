<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Answer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class QuestionController extends Controller
{
    private const CATEGORIES = [
        'Admissions',
        'College Fees',
        'Placements',
        'Campus Life',
        'Faculty',
        'Hostel & Accommodation',
    ];

    /**
     * Display questions fetched from the database.
     */
    public function index(Request $request)
    {
        $query = Question::with('user')
            ->withCount('answers')
            ->where('status', 'open');

        // Search questions by title, description, or college.
        if ($request->filled('search')) {
            $search = trim($request->input('search'));

            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                    ->orWhere('description', 'like', "%{$search}%")
                    ->orWhere('college_name', 'like', "%{$search}%");
            });
        }

        // Filter questions by category.
        if (
            $request->filled('category') &&
            in_array($request->input('category'), self::CATEGORIES, true)
        ) {
            $query->where('category', $request->input('category'));
        }

        // Sort questions.
        switch ($request->input('sort', 'latest')) {
            case 'unanswered':
                $query->has('answers', '=', 0)
                    ->orderByDesc('created_at');
                break;

            case 'most-answered':
            case 'most_answered':
                $query->orderByDesc('answers_count')
                    ->orderByDesc('created_at');
                break;

            default:
                $query->orderByDesc('created_at');
                break;
        }

        // Paginate database results.
        $questions = $query->paginate(10)->withQueryString();

        return view('questions.index', [
            'questions' => $questions,
            'categories' => self::CATEGORIES,
            'selectedCategory' => $request->input('category', ''),
            'search' => $request->input('search', ''),
            'sort' => $request->input('sort', 'latest'),
        ]);
    }

    /**
     * Display the ask-question form.
     */
    public function create()
    {
        return view('questions.create', [
            'categories' => self::CATEGORIES,
        ]);
    }

    /**
     * Validate and store a question in the database.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:180'],
            'description' => ['required', 'string', 'max:5000'],
            'category' => ['required', Rule::in(self::CATEGORIES)],
            'college_name' => ['nullable', 'string', 'max:255'],
        ]);

        $baseSlug = Str::slug($validated['title']);

        if ($baseSlug === '') {
            $baseSlug = 'question';
        }

        do {
            $slug = $baseSlug . '-' . Str::lower(Str::random(6));
        } while (Question::where('slug', $slug)->exists());

        $question = Question::create([
            'user_id' => Auth::id(),
            'title' => $validated['title'],
            'slug' => $slug,
            'description' => $validated['description'],
            'category' => $validated['category'],
            'college_name' => $validated['college_name'] ?? null,
            'status' => 'open',
        ]);

        return redirect()
            ->route('questions.show', $question->slug)
            ->with('success', 'Your question has been posted successfully.');
    }

    /**
     * Validate and store an answer in the database.
     */
    public function storeAnswer(Request $request, string $slug)
    {
        $validated = $request->validate([
            'body' => ['required', 'string', 'min:2', 'max:10000'],
        ]);

        $question = Question::where('slug', $slug)
            ->where('status', 'open')
            ->firstOrFail();

        Answer::create([
            'question_id' => $question->id,
            'user_id' => Auth::id(),
            'body' => $validated['body'],
        ]);

        return redirect()
            ->route('questions.show', $question->slug)
            ->with('success', 'Your answer has been posted successfully.');
    }

    /**
     * Display a question and its database answers.
     */
    public function show(string $slug)
    {
        $question = Question::with(['user', 'answers.user'])
            ->withCount('answers')
            ->where('slug', $slug)
            ->firstOrFail();

        return view('questions.show', compact('question'));
    }
}
