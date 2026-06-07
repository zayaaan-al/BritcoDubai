<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display the home page with all section data.
     */
    public function index()
    {
        $stats = $this->getStats();
        $whyCards = $this->getWhyCards();
        $services = $this->getServices();
        $courses = $this->getCourses();
        $clientTargets = $this->getClientTargets();
        $techFeatures = $this->getTechFeatures();
        $testimonials = $this->getTestimonials();
        $contactInfo = $this->getContactInfo();

        return view('home', compact(
            'stats',
            'whyCards',
            'services',
            'courses',
            'clientTargets',
            'techFeatures',
            'testimonials',
            'contactInfo'
        ));
    }

    /**
     * Handle contact form submission.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:100',
            'email'   => 'required|email|max:150',
            'phone'   => 'required|string|max:20',
            'message' => 'required|string|max:2000',
            'service' => 'nullable|string|max:100',
        ]);

        // TODO: Send email or store in DB — currently returning success response
        return response()->json([
            'success' => true,
            'message' => 'Thank you, ' . $validated['name'] . '! We will contact you within 2 business hours.',
        ]);
    }

    // ─────────────────────────────────────────────────────────
    // DATA METHODS
    // ─────────────────────────────────────────────────────────

    private function getStats(): array
    {
        return [
            ['value' => '25',   'label' => '+ Years Experience',       'counter' => true],
            ['value' => '5000', 'label' => '+ Students Trained',        'counter' => true],
            ['value' => '1000', 'label' => '+ Successful Placements',   'counter' => true],
            ['value' => 'UAE',  'label' => 'Wide Support',              'counter' => false],
        ];
    }

    private function getWhyCards(): array
    {
        return [
            ['icon' => 'fas fa-user-tie',   'title' => 'Industry Expert Trainers',    'desc' => 'Learn from certified professionals with real-world experience.'],
            ['icon' => 'fas fa-tools',       'title' => 'Practical Hands-On Learning', 'desc' => '80% practical training on real devices and live projects.'],
            ['icon' => 'fas fa-flask',       'title' => 'Modern Repair Lab',           'desc' => 'Equipped with the latest tools and diagnostic equipment.'],
            ['icon' => 'fas fa-globe',       'title' => 'International Standards',     'desc' => 'Curriculum aligned with global repair industry benchmarks.'],
            ['icon' => 'fas fa-briefcase',   'title' => 'Career Support',              'desc' => 'Job placement assistance and industry networking support.'],
            ['icon' => 'fas fa-award',       'title' => 'Professional Certification',  'desc' => 'Recognized certificates enhancing your career prospects.'],
        ];
    }

    private function getServices(): array
    {
        return [
            ['icon' => 'fas fa-mobile-alt',       'title' => 'Smartphone Repair Training',  'desc' => 'Full course covering diagnosis, disassembly, and component-level repair of all major smartphones.'],
            ['icon' => 'fab fa-android',           'title' => 'Android Repair',               'desc' => 'Specialized training in Android device repair covering all brands — Samsung, Huawei, Xiaomi and more.'],
            ['icon' => 'fab fa-apple',             'title' => 'iPhone Repair',                'desc' => 'In-depth iPhone repair training covering all iPhone models from hardware to iOS software solutions.'],
            ['icon' => 'fas fa-microchip',         'title' => 'Hardware Troubleshooting',     'desc' => 'Advanced diagnostics using professional test equipment to identify and solve hardware faults.'],
            ['icon' => 'fas fa-atom',              'title' => 'Chip-Level Repair',            'desc' => 'Expert training in motherboard-level diagnosis and integrated circuit replacement techniques.'],
            ['icon' => 'fas fa-burn',              'title' => 'Microsoldering',               'desc' => 'Precision soldering skills for micro-component work under microscope using hot air stations.'],
            ['icon' => 'fas fa-project-diagram',   'title' => 'PCB Repair',                   'desc' => 'Circuit board tracing, jumper wiring, and PCB layer repair for advanced-level technicians.'],
            ['icon' => 'fas fa-memory',            'title' => 'IC Replacement',               'desc' => 'Integrated circuit identification, removal and reballing/replacement on mobile motherboards.'],
            ['icon' => 'fas fa-code',              'title' => 'Software Flashing',            'desc' => 'Firmware flashing, stock ROM installation, and IMEI repair across all major device platforms.'],
            ['icon' => 'fas fa-unlock-alt',        'title' => 'Device Unlocking',             'desc' => 'Network unlocking, FRP bypass, and activation lock removal using professional software tools.'],
            ['icon' => 'fas fa-database',          'title' => 'Data Recovery',                'desc' => 'Advanced data recovery techniques from physically and logically damaged mobile devices.'],
            ['icon' => 'fas fa-laptop',            'title' => 'Laptop & Tablet Repair',       'desc' => 'Comprehensive training for laptop and tablet hardware/software repair including motherboard-level work.'],
        ];
    }

    private function getCourses(): array
    {
        return [
            [
                'badge'    => 'Bestseller',
                'icon'     => 'fas fa-mobile-alt',
                'title'    => 'Mobile Repair Master Course',
                'desc'     => 'The ultimate comprehensive course covering all aspects of smartphone repair from basic to advanced chip-level techniques with live project practice.',
                'duration' => '3 Months',
                'level'    => 'Beginner–Pro',
                'skills'   => ['Practical Training', 'Live Projects', 'Certification', 'Job Support'],
            ],
            [
                'badge'    => 'Advanced',
                'icon'     => 'fas fa-atom',
                'title'    => 'Advanced Chip Level Course',
                'desc'     => 'Deep-dive into motherboard-level diagnostics, microsoldering, IC replacement, and BGA reballing for expert-level mobile repair professionals.',
                'duration' => '2 Months',
                'level'    => 'Intermediate+',
                'skills'   => ['Microsoldering', 'PCB Repair', 'IC Replacement', 'BGA Reballing'],
            ],
            [
                'badge'    => 'Specialist',
                'icon'     => 'fab fa-apple',
                'title'    => 'iPhone Repair Specialist Course',
                'desc'     => 'Master iPhone repair from all generations — covering hardware disassembly, screen replacement, battery, software issues, and chip-level board repair.',
                'duration' => '6 Weeks',
                'level'    => 'All Levels',
                'skills'   => ['All iPhone Models', 'iOS Solutions', 'Face ID Repair', 'Board Repair'],
            ],
            [
                'badge'    => 'Professional',
                'icon'     => 'fas fa-laptop',
                'title'    => 'Laptop Repair Course',
                'desc'     => 'Comprehensive laptop repair training covering hardware diagnostics, motherboard repair, data recovery, OS installation, and professional servicing skills.',
                'duration' => '6 Weeks',
                'level'    => 'Beginner+',
                'skills'   => ['Hardware Repair', 'Data Recovery', 'OS Setup', 'Diagnostics'],
            ],
        ];
    }

    private function getClientTargets(): array
    {
        return [
            ['icon' => 'fas fa-store',    'label' => 'Mobile Shops & Retail Stores'],
            ['icon' => 'fas fa-wrench',   'label' => 'Authorized Service Centers'],
            ['icon' => 'fas fa-microchip','label' => 'Electronics Businesses'],
            ['icon' => 'fas fa-building', 'label' => 'Corporate Repair Teams'],
        ];
    }

    private function getTechFeatures(): array
    {
        return [
            ['icon' => 'fas fa-shield-alt', 'title' => 'Verified Professionals', 'desc' => 'Background-checked and skills-verified technicians ready for immediate deployment.'],
            ['icon' => 'fas fa-star',        'title' => 'Skilled Workforce',       'desc' => 'Certified technicians trained to international repair standards with proven expertise.'],
            ['icon' => 'fas fa-flag',        'title' => 'UAE Ready',               'desc' => 'Visa-processed, locally compliant technicians familiar with the UAE market demands.'],
            ['icon' => 'fas fa-bolt',        'title' => 'Quick Deployment',        'desc' => 'Fast turnaround — deploy skilled technicians to your business within days, not weeks.'],
        ];
    }

    private function getTestimonials(): array
    {
        return [
            [
                'stars'    => 5,
                'text'     => 'The Mobile Repair Master Course at Britco Dubai completely changed my career. Within 3 months I had a job in a top mobile service center. The trainers are incredibly knowledgeable and patient.',
                'initials' => 'AK',
                'name'     => 'Ahmed Khalid',
                'role'     => 'Mobile Technician, Dubai',
            ],
            [
                'stars'    => 5,
                'text'     => 'I enrolled in the iPhone Specialist course with zero knowledge. Now I run my own repair shop! Britco\'s practical approach and career support made all the difference. Highly recommended.',
                'initials' => 'MF',
                'name'     => 'Muhammad Fahad',
                'role'     => 'iPhone Repair Specialist, Sharjah',
            ],
            [
                'stars'    => 5,
                'text'     => 'The Chip Level Repair course is exceptional. The microsoldering training is top-notch and the instructors ensure you master every technique. Best investment in my tech career.',
                'initials' => 'RP',
                'name'     => 'Ravi Patel',
                'role'     => 'Board-Level Technician, Abu Dhabi',
            ],
            [
                'stars'    => 5,
                'text'     => 'As a business owner, I hired 3 technicians through Britco\'s supply service. All were professional, skilled and UAE-ready. The placement was fast and the quality of work is outstanding.',
                'initials' => 'SA',
                'name'     => 'Sameer Al-Rashid',
                'role'     => 'Service Center Owner, Dubai',
            ],
            [
                'stars'    => 5,
                'text'     => 'Britco Dubai is hands-down the best training institute in the UAE. The trainers are pros, the lab is modern, and the support after graduation is unmatched. I now earn 3x my previous salary!',
                'initials' => 'JT',
                'name'     => 'John Thomas',
                'role'     => 'Senior Technician, Ajman',
            ],
            [
                'stars'    => 5,
                'text'     => 'Excellent training environment with state-of-the-art equipment. The laptop repair course equipped me with skills to handle high-end repairs. Got placed within 2 weeks of completing the course!',
                'initials' => 'NK',
                'name'     => 'Nidhin Kumar',
                'role'     => 'Laptop Technician, Fujairah',
            ],
        ];
    }

    private function getContactInfo(): array
    {
        return [
            ['icon' => 'fas fa-map-marker-alt', 'label' => 'Office Address',  'value' => "Britco Dubai Training Center\nAl Qusais Industrial Area, Dubai, UAE"],
            ['icon' => 'fas fa-phone-alt',       'label' => 'Phone Number',    'value' => "+971 50 XXX XXXX\n+971 4 XXX XXXX"],
            ['icon' => 'fas fa-envelope',        'label' => 'Email Address',   'value' => "info@britcodubai.com\nadmissions@britcodubai.com"],
            ['icon' => 'fas fa-clock',           'label' => 'Business Hours',  'value' => "Monday – Saturday: 9:00 AM – 7:00 PM\nSunday: 10:00 AM – 4:00 PM"],
        ];
    }
}
