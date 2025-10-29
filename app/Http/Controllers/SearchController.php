<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('q');
        
        if (empty($query)) {
            return redirect()->back();
        }
        
        // Define searchable content
        $searchableContent = [
            [
                'title' => 'Precision Agriculture',
                'description' => 'Advanced farming techniques using GPS, sensors, and data analytics to optimize crop yields and reduce waste.',
                'category' => 'service',
                'url' => route('services') . '#precision-agriculture',
                'keywords' => ['precision', 'gps', 'sensors', 'data', 'analytics', 'farming', 'technology']
            ],
            [
                'title' => 'Smart Irrigation Systems',
                'description' => 'Automated irrigation solutions that conserve water while ensuring optimal crop hydration.',
                'category' => 'service',
                'url' => route('services') . '#smart-irrigation',
                'keywords' => ['irrigation', 'water', 'automated', 'smart', 'conservation', 'hydration']
            ],
            [
                'title' => 'Crop Monitoring & Analytics',
                'description' => 'Real-time monitoring and analysis of crop health, growth patterns, and potential issues.',
                'category' => 'service',
                'url' => route('services') . '#crop-monitoring',
                'keywords' => ['monitoring', 'analytics', 'crop', 'health', 'growth', 'analysis', 'real-time']
            ],
            [
                'title' => 'Soil Health Management',
                'description' => 'Comprehensive soil testing and management solutions to maintain optimal soil conditions.',
                'category' => 'service',
                'url' => route('services') . '#soil-health',
                'keywords' => ['soil', 'health', 'testing', 'management', 'conditions', 'nutrients']
            ],
            [
                'title' => 'About AgrisSol',
                'description' => 'Learn about our mission to revolutionize agriculture in Tunisia through innovative technology.',
                'category' => 'page',
                'url' => route('about'),
                'keywords' => ['about', 'company', 'mission', 'tunisia', 'agriculture', 'innovation']
            ],
            [
                'title' => 'Our Portfolio',
                'description' => 'Explore our successful agricultural projects and client testimonials across Tunisia.',
                'category' => 'page',
                'url' => route('portfolio'),
                'keywords' => ['portfolio', 'projects', 'testimonials', 'success', 'clients', 'case studies']
            ],
            [
                'title' => 'Contact Us',
                'description' => 'Get in touch with our team for consultations, support, or partnership opportunities.',
                'category' => 'page',
                'url' => route('contact'),
                'keywords' => ['contact', 'support', 'consultation', 'partnership', 'help', 'reach']
            ],
        ];
        
        // Search logic
        $results = collect($searchableContent)->filter(function ($item) use ($query) {
            $searchTerm = strtolower($query);
            
            // Search in title
            if (str_contains(strtolower($item['title']), $searchTerm)) {
                return true;
            }
            
            // Search in description
            if (str_contains(strtolower($item['description']), $searchTerm)) {
                return true;
            }
            
            // Search in keywords
            foreach ($item['keywords'] as $keyword) {
                if (str_contains(strtolower($keyword), $searchTerm)) {
                    return true;
                }
            }
            
            return false;
        });
        
        return view('search', [
            'query' => $query,
            'results' => $results,
            'resultsCount' => $results->count()
        ]);
    }
}

