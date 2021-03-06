<?php

namespace App\Http\Controllers\Tune;

use App\Http\Controllers\Controller;
use App\Models\Issue;
use Illuminate\Http\Request;

class IssueController extends Controller
{
    public function __construct() {
        $this->middleware('project')
            ->except([]);
    }

    public function index(Request $request)
    {
        $value = [
            'project' => $request->project
        ];
        return view('tunes.project.issue.index', $value);
    }


}
