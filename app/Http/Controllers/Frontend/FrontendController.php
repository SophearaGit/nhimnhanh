<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    private function getProjects()
    {
        return [
            [
                'id' => 1,
                'title' => 'E-commerce web application',
                'client' => 'Local Client',
                'date' => 'January, 2024',
                'service' => 'Web Development',
                'address' => 'Phnom Penh, Cambodia',
                'tags' => ['E-Commerce', 'Web'],
                'thumbnail' => 'frontend/assets/img/projects/lokruproject/ecom.jpg',
                'images' => [
                    'frontend/assets/img/projects/lokruproject/ecom.jpg',
                    'frontend/assets/img/projects/lokruproject/ecom1.jpg',
                    'frontend/assets/img/projects/lokruproject/ecom2.jpg',
                    'frontend/assets/img/projects/lokruproject/ecomlaptop.jpg',
                ],
                'description' => 'A full-featured e-commerce platform with product listings, shopping cart, and checkout flow.',
                'background' => 'The client needed an online store to expand their retail business digitally.',
                'challenges' => 'Designing a smooth user experience across both mobile and desktop while keeping performance high.',
                'solution' => 'Built a responsive e-commerce site with an intuitive UI, fast load times, and a simple checkout process.',
            ],
            [
                'id' => 2,
                'title' => 'Hotel management system',
                'client' => 'Local Client',
                'date' => 'March, 2024',
                'service' => 'Web Development',
                'address' => 'Phnom Penh, Cambodia',
                'tags' => ['Web', 'Management'],
                'thumbnail' => 'frontend/assets/img/projects/lokruproject/hotelmanagementsystem1.jpg',
                'images' => [
                    'frontend/assets/img/projects/lokruproject/hotelmanagementsystem1.jpg',
                    'frontend/assets/img/projects/lokruproject/hotelmanagementsystem2.jpg',
                    'frontend/assets/img/projects/lokruproject/hotelmanagementsystem3.jpg',
                ],
                'description' => 'A hotel management system for handling room bookings, guest records, and staff operations.',
                'background' => 'The hotel needed a centralized system to replace manual paper-based processes.',
                'challenges' => 'Coordinating real-time room availability and booking conflicts across multiple room types.',
                'solution' => 'Developed a clean dashboard system with booking management, room status tracking, and reporting.',
            ],
            [
                'id' => 3,
                'title' => 'Library management website',
                'client' => 'Local Client',
                'date' => 'April, 2024',
                'service' => 'Web Development',
                'address' => 'Phnom Penh, Cambodia',
                'tags' => ['Web', 'Software'],
                'thumbnail' => 'frontend/assets/img/projects/lokruproject/libraryweb1.jpg',
                'images' => [
                    'frontend/assets/img/projects/lokruproject/libraryweb1.jpg',
                    'frontend/assets/img/projects/lokruproject/libraryweb2.jpg',
                ],
                'description' => 'A digital library system for managing books, members, and borrow/return records.',
                'background' => 'The library wanted to modernize its catalog and lending process.',
                'challenges' => 'Building a search system that works fast across a large catalog of books and authors.',
                'solution' => 'Created a web-based system with member login, book search, and borrowing history tracking.',
            ],
            [
                'id' => 4,
                'title' => 'Café mobile app UI/UX design',
                'client' => 'Local Client',
                'date' => 'May, 2024',
                'service' => 'UI/UX Design',
                'address' => 'Phnom Penh, Cambodia',
                'tags' => ['Mobile', 'UX/UI'],
                'thumbnail' => 'frontend/assets/img/projects/lokruproject/uxuimobilecafe.jpg',
                'images' => [
                    'frontend/assets/img/projects/lokruproject/uxuimobilecafe.jpg',
                ],
                'description' => 'A mobile app UI/UX design for a café, covering menu browsing, ordering, and loyalty features.',
                'background' => 'The café wanted a branded mobile experience to boost customer engagement.',
                'challenges' => 'Designing a warm, inviting interface that makes ordering feel effortless.',
                'solution' => 'Delivered high-fidelity Figma prototypes with a cozy color palette and smooth user flows.',
            ],
            [
                'id' => 5,
                'title' => 'Restaurant mobile app UI/UX',
                'client' => 'Local Client',
                'date' => 'June, 2024',
                'service' => 'UI/UX Design',
                'address' => 'Phnom Penh, Cambodia',
                'tags' => ['Mobile', 'UX/UI'],
                'thumbnail' => 'frontend/assets/img/projects/lokruproject/uxuimobilerestaurant.jpg',
                'images' => [
                    'frontend/assets/img/projects/lokruproject/uxuimobilerestaurant.jpg',
                ],
                'description' => 'Mobile UI/UX design for a restaurant app with table reservations and digital menu.',
                'background' => 'The restaurant needed a modern app to streamline dine-in and takeaway ordering.',
                'challenges' => 'Balancing information density — menu items, prices, photos — without overwhelming users.',
                'solution' => 'Designed a clean, photo-first layout with clear category navigation and a simple cart flow.',
            ],
            [
                'id' => 6,
                'title' => 'Real estate platform',
                'client' => 'Local Client',
                'date' => 'July, 2024',
                'service' => 'Web Development',
                'address' => 'Phnom Penh, Cambodia',
                'tags' => ['Web', 'Design'],
                'thumbnail' => 'frontend/assets/img/projects/lokruproject/realestate.jpg',
                'images' => [
                    'frontend/assets/img/projects/lokruproject/realestate.jpg',
                ],
                'description' => 'A real estate listing platform for browsing properties with filters and contact forms.',
                'background' => 'The agency needed an online presence to showcase their property listings.',
                'challenges' => 'Making property search intuitive with filters for location, price, and property type.',
                'solution' => 'Built a responsive listing site with advanced filters, photo galleries, and inquiry forms.',
            ],
            [
                'id' => 7,
                'title' => 'ICT mobile app UI/UX',
                'client' => 'Local Client',
                'date' => 'August, 2024',
                'service' => 'UI/UX Design',
                'address' => 'Phnom Penh, Cambodia',
                'tags' => ['Mobile', 'UX/UI'],
                'thumbnail' => 'frontend/assets/img/projects/lokruproject/uxuimobileict1.jpg',
                'images' => [
                    'frontend/assets/img/projects/lokruproject/uxuimobileict1.jpg',
                    'frontend/assets/img/projects/lokruproject/uxuimobileict2.jpg',
                    'frontend/assets/img/projects/lokruproject/uxuimobileict3.jpg',
                ],
                'description' => 'A multi-screen mobile UI/UX design for an ICT services company.',
                'background' => 'The company needed a professional app design to present their services digitally.',
                'challenges' => 'Communicating complex technical services in a simple, approachable mobile layout.',
                'solution' => 'Designed a clean, professional app with clear service categories and easy contact flows.',
            ],
            [
                'id' => 8,
                'title' => 'LMS mobile app UI/UX',
                'client' => 'Local Client',
                'date' => 'September, 2024',
                'service' => 'UI/UX Design',
                'address' => 'Phnom Penh, Cambodia',
                'tags' => ['Mobile', 'UX/UI'],
                'thumbnail' => 'frontend/assets/img/projects/lokruproject/uxuimobilelms.jpg',
                'images' => [
                    'frontend/assets/img/projects/lokruproject/uxuimobilelms.jpg',
                ],
                'description' => 'A learning management system mobile app design for students and instructors.',
                'background' => 'An education provider wanted a mobile-first LMS to reach more students.',
                'challenges' => 'Designing course navigation and progress tracking that feels simple for all age groups.',
                'solution' => 'Created an accessible, student-friendly UI with clear course layouts and progress indicators.',
            ],
            [
                'id' => 9,
                'title' => 'Instagram mobile UI redesign',
                'client' => 'Personal Project',
                'date' => 'October, 2024',
                'service' => 'UI/UX Design',
                'address' => 'Phnom Penh, Cambodia',
                'tags' => ['Mobile', 'Design'],
                'thumbnail' => 'frontend/assets/img/projects/lokruproject/uxuimobileinstagram.jpg',
                'images' => [
                    'frontend/assets/img/projects/lokruproject/uxuimobileinstagram.jpg',
                ],
                'description' => 'A personal UI redesign concept for Instagram with a refreshed visual style.',
                'background' => 'A self-initiated project to explore modern social media UI patterns.',
                'challenges' => 'Reimagining a familiar app while keeping it instantly recognizable to existing users.',
                'solution' => 'Produced a concept redesign with cleaner typography, updated iconography, and improved spacing.',
            ],
            [
                'id' => 10,
                'title' => 'Nivea product poster design',
                'client' => 'Personal Project',
                'date' => 'November, 2024',
                'service' => 'Graphic Design',
                'address' => 'Phnom Penh, Cambodia',
                'tags' => ['Design', 'Branding'],
                'thumbnail' => 'frontend/assets/img/projects/lokruproject/niveaposter.jpg',
                'images' => [
                    'frontend/assets/img/projects/lokruproject/niveaposter.jpg',
                ],
                'description' => 'A product poster design for Nivea with a clean, minimal aesthetic.',
                'background' => 'A graphic design exercise focused on product advertising and visual composition.',
                'challenges' => 'Balancing brand color guidelines with a fresh, eye-catching layout.',
                'solution' => 'Designed a minimal poster that highlights the product with strong typography and brand colors.',
            ],
            [
                'id' => 11,
                'title' => 'Pizza restaurant poster',
                'client' => 'Personal Project',
                'date' => 'November, 2024',
                'service' => 'Graphic Design',
                'address' => 'Phnom Penh, Cambodia',
                'tags' => ['Design', 'Branding'],
                'thumbnail' => 'frontend/assets/img/projects/lokruproject/pizzaposter.png',
                'images' => [
                    'frontend/assets/img/projects/lokruproject/pizzaposter.png',
                ],
                'description' => 'A vibrant food poster design for a pizza restaurant.',
                'background' => 'Created as a graphic design practice piece for food and beverage marketing.',
                'challenges' => 'Making food look appetizing through layout, color, and typography choices.',
                'solution' => 'Designed a bold, warm-toned poster with strong visual hierarchy and appetite appeal.',
            ],
            [
                'id' => 12,
                'title' => 'Personal portfolio website',
                'client' => 'Personal Project',
                'date' => 'December, 2024',
                'service' => 'Web Design',
                'address' => 'Phnom Penh, Cambodia',
                'tags' => ['Web', 'Design'],
                'thumbnail' => 'frontend/assets/img/projects/lokruproject/portfolionhimnhanh.jpg',
                'images' => [
                    'frontend/assets/img/projects/lokruproject/portfolionhimnhanh.jpg',
                ],
                'description' => 'A personal portfolio website showcasing design and development work.',
                'background' => 'Needed a professional online presence to present skills and past projects.',
                'challenges' => 'Making a portfolio that stands out while staying clean and easy to navigate.',
                'solution' => 'Designed and built a fast, minimal portfolio site with smooth navigation and clear project showcases.',
            ],
        ];
    }

    public function index()
    {
        $data = [
            'page_title' => 'Home',
            'projects' => collect($this->getProjects())->take(6)->all(),
        ];
        return view('frontend.pages.Home.index', $data);
    }

    public function projectDetail($id)
    {
        $projects = $this->getProjects();

        $project = collect($projects)->firstWhere('id', (int) $id);

        if (!$project)
            abort(404);

        $prev = collect($projects)->firstWhere('id', (int) $id - 1);
        $next = collect($projects)->firstWhere('id', (int) $id + 1);

        return view('frontend.pages.Home.project-detail', compact('project', 'prev', 'next'));
        //                                    ↑ no longer inside partials/
    }



}


