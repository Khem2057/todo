<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class DashboardController extends Controller
{
    public function index()
    {
        $totalTasks = Task::count();
        $pendingTasks = Task::where('status', 'pending')->count();
        $inProgressTasks = Task::where('status', 'in progress')->count();
        $completedTasks = Task::where('status', 'completed')->count();
        
        return view('dashboard', compact('totalTasks', 'pendingTasks', 'inProgressTasks', 'completedTasks'));
    }
}
