<?php

namespace App\Http\Controllers;

class PortfolioController extends Controller
{
    public function index()
    {
        $profile = config('portfolio.profile');
        $social = config('portfolio.social');
        $seo = config('portfolio.seo');
        $navigation = config('portfolio.navigation');
        $cv = config('portfolio.cv');
        $about = config('portfolio.about');
        $skills = config('portfolio.skills');
        $projects = config('portfolio.projects');
        $experience = config('portfolio.experience');
        $certifications = config('portfolio.certifications');
        $github = config('portfolio.github');
        $contact = config('portfolio.contact');
        $footer = config('portfolio.footer');

        return view('portfolio', compact(
            'profile', 'social', 'seo', 'navigation', 'cv', 'about', 'skills',
            'projects', 'experience', 'certifications', 'github', 'contact', 'footer',
        ));
    }
}
