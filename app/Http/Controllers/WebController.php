<?php

namespace App\Http\Controllers;

class WebController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function about()
    {
        return view('pages.about-me');
    }


    public function projects()
    {

        $projects = [
            [
                'title' => 'Login Authentication System',
                'description' => ' A PHP-based laravel authentication system ensuring secure user and admin logins. It employs encryption techniques and session management for heightened security, providing a seamless and protected user experience.',
                'key_language' => 'PHP'
            ],
            [
                'title' => 'Expense tracker',
                'description' => 'Utilizing JavaScript, this Expense Tracker enables users to manage their finances efficiently. It allows tracking and categorizing expenses, providing a clear overview of spending habits. The interface is intuitive, ensuring a user-friendly experience.',
                'key_language' => 'JavaScript'
            ],
            [
                'title' => 'To do listing',
                'description' => 'HTML and CSS power this simple yet effective To-Do Listing application. It offers a clean and responsive design, making task management easy and visually appealing. Users can add, edit, and mark tasks as completed, enhancing productivity.',
                'key_language' => 'Html,CSS'
            ],
            [
                'title' => 'Super Shop Management',
                'description' => 'This JavaScript-driven project focuses on optimizing the state management of a super shop. It enhances efficiency in inventory tracking, order processing, and customer management. The system ensures smooth operations, contributing to an organized and streamlined super shop experience.',
                'key_language' => 'Javasript'
            ]
        ];
        return view('pages.projects',['data'=>$projects]);
    }

    public function contract()
    {
        return view('pages.contact');
    }
}
