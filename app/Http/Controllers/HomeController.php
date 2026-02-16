<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiteSetting;
use App\Models\Slider;
use App\Models\Testimonial;
use App\Models\Blog;
use App\Models\HomeSetting;
use App\Models\StaticPage;
use App\Models\ServicePage;
use App\Models\CaseStudy;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    protected $site_settings;

    public function __construct()
    {
        $this->site_settings = SiteSetting::find(1);
    }

    public function index()
    {
        $data["site"] = $this->site_settings;
        $data["banners"] = Slider::where('status', 1)->limit(100)->get();
        $data["testimonials"] = Testimonial::where('display', 1)->limit(3)->get();
        $data['recent_blogs'] = Blog::where('display', '1')->orderBy('date', 'DESC')->limit(6)->get();
        $data['home'] = HomeSetting::first();

        $data["meta_title"] = $data['site']->meta_title;
        $data["meta_keywords"] = $data['site']->meta_keywords;
        $data["meta_descr"] = $data['site']->meta_descr;

        return view('home', $data);
    }

    public function blog(Request $request)
    {
        $query = Blog::where('display', '1');

        if ($request->has('types') && is_array($request->types)) {
            $query->whereIn('type', $request->types);
        }

        $blogs = $query->orderBy('id', 'DESC')->paginate(6);

        if ($request->ajax()) {
            $html = '';
            foreach ($blogs as $blog) {
                $image = $blog->image ? asset('assets/images/' . $blog->image) : asset('assets/images/article-1.jpg');
                $date = \Carbon\Carbon::parse($blog->date)->format('M d Y');
                $url = url('blog/' . $blog->seokey);
                $title = $blog->title;
                $text = strip_tags($blog->text);
                
                $html .= '
                <div class="article-card">
                    <img src="' . $image . '" alt="' . $title . '">
                    <div class="card-content">
                        <div class="category-label">Blog Post</div>
                        <h3>' . $title . '</h3>
                        <p>' . $text . '</p>
                    </div>
                    <div class="card-footer">
                        <span class="date">' . $date . '</span>
                        <a href="' . $url . '" class="read-more-btn">Read More »</a>
                    </div>
                </div>';
            }
            return response()->json([
                'html' => $html,
                'next_page' => $blogs->nextPageUrl()
            ]);
        }

        $data['data'] = $blogs;
        $data['recent_blogs'] = Blog::where('display', '1')->orderBy('date', 'DESC')->limit(6)->get();
        $data["site"] = $this->site_settings;
        
        $data['meta_title'] = 'Blog: Latest News of AmdSol';
        $data['meta_keywords'] = 'Blog: Latest News of AmdSol';
        $data['meta_descr'] = 'We as AMDSol are considered one of the most prestigious medical billing companies in the city. With our new reserves and strategies, we offer the best of all EHR, 24/7 patient live support with 32 specialties';

        return view('blogs', $data);
    }

    public function blog_post($seokey)
    {
        $blog = Blog::where('seokey', $seokey)->firstOrFail();
        
        $data['data'] = $blog;
        $data['recent_blogs'] = Blog::where('display', '1')->orderBy('date', 'DESC')->limit(6)->get();
        $data['site'] = $this->site_settings;

        $data['meta_title'] = $blog->meta_title . ' | FCP Medical';
        $data['meta_keywords'] = $blog->meta_keywords;
        $data['meta_descr'] = $blog->meta_description;

        return view('blog_post', $data);
    }

    public function case_studies(Request $request)
    {
        $query = CaseStudy::where('display', 1);

        if ($request->has('q') && $request->q != '') {
            $q = $request->q;
            $query->where(function($w) use ($q) {
                $w->where('title', 'LIKE', "%$q%")
                  ->orWhere('text', 'LIKE', "%$q%");
            });
        }

        $case_studies = $query->orderBy('date', 'DESC')->paginate(8);
        
        $data["case_studies"] = $case_studies;
        $data["meta_title"] = "Case Studies | AMD SOL";
        $data["meta_keywords"] = "Case Studies, Medical Billing, Healthcare Solutions";
        $data["meta_descr"] = "Explore our success stories and detailed case studies on how we help healthcare providers.";
        $data["site"] = $this->site_settings;

        return view('case_studies', $data);
    }

    public function case_study_detail($seokey)
    {
        $case_study = CaseStudy::where('seokey', $seokey)->firstOrFail();
        
        $data['data'] = $case_study;
        $data['recent_case_studies'] = CaseStudy::where('display', 1)->where('id', '!=', $case_study->id)->limit(5)->get();
        $data['site'] = $this->site_settings;

        $data['meta_title'] = $case_study->meta_title ?? $case_study->title;
        $data['meta_keywords'] = $case_study->meta_keywords;
        $data['meta_descr'] = $case_study->meta_description;

        return view('case_study_detail', $data);
    }

    public function check_page($seokey)
    {
        $static_page = StaticPage::where('seokey', $seokey)->first();
        if ($static_page) {
            return $this->view_static_page(request(), $static_page);
        }

        $service = ServicePage::where('seokey', $seokey)->first();
        if ($service) {
            return $this->services_page(request(), $seokey);
        }

        abort(404);
    }

    protected function view_static_page(Request $request, $page_data)
    {
        if ($request->isMethod('post')) {
            $this->submit_registration_form($request->all());
            return redirect()->back()->with('success', 'Your message is successfully sent. We will get back to you very soon!');
        }

        $data['data'] = $page_data;
        $data['meta_title'] = $page_data->meta_title;
        $data['meta_keywords'] = $page_data->meta_keywords;
        $data['meta_descr'] = $page_data->meta_description;
        $data["site"] = $this->site_settings;

        return view('static_page', $data);
    }

    public function services_page(Request $request, $seokey)
    {
        // Custom view for Electronic Health Records
        if ($seokey === 'electronic-health-records') {
            return view('electronic_health_records');
        }

        // Custom view for Practice Management
        if ($seokey === 'practice-management') {
            return view('practice_management');
        }

        // Custom view for Specialty EHR
        if ($seokey === 'specialty-ehr') {
            return view('specialty_ehr');
        }

        // Custom view for Patient Services
        if ($seokey === 'patient-services') {
            return view('patient_services');
        }

        // Custom view for Live Support
        if ($seokey === 'live-support') {
            return view('live_support');
        }

        $service = ServicePage::where('seokey', $seokey)->firstOrFail();
        
        if ($request->isMethod('post')) {
            $this->submit_registration_form($request->all());
            return redirect()->back()->with('success', 'Your message is successfully sent. We will get back to you very soon!');
        }

        $data['data'] = $service;
        $data['meta_title'] = $service->meta_title;
        $data['meta_keywords'] = $service->meta_keywords;
        $data['meta_descr'] = $service->meta_description;
        $data["site"] = $this->site_settings;

        return view('services_page', $data);
    }

    public function content_page($seokey)
    {
        $seokey = str_replace(".php", "", $seokey);
        $page = StaticPage::where('seokey', $seokey)->firstOrFail();

        $data["data"] = $page;
        $data["meta_title"] = $page->meta_title;
        $data["meta_keywords"] = $page->meta_keywords;
        $data["meta_descr"] = $page->meta_description;
        $data["site"] = $this->site_settings;

        return view('static_page', $data);
    }

    public function sitemap()
    {
        $blogs = Blog::where('display', '1')->get();
        $services = ServicePage::where('display', '1')->get();
        $static = StaticPage::all();

        return response()->view('sitemap', compact('blogs', 'services', 'static'))->header('Content-Type', 'text/xml');
    }

    public function services()
    {
        $data["services"] = ServicePage::where('display', '1')->orderBy('id', 'ASC')->get();
        $data["meta_title"] = "Our Services | AMD SOL";
        $data["meta_keywords"] = "Medical Billing Services, Healthcare Solutions, RCM Services";
        $data["meta_descr"] = "Explore our comprehensive range of medical billing and healthcare management services tailored to optimize your practice's revenue cycle.";
        $data["site"] = $this->site_settings;

        return view('services', $data);
    }

    public function specialties()
    {
        $data["meta_title"] = "Medical Billing Services for All Specialties | AMD SOL";
        $data["meta_keywords"] = "Medical Billing Specialties, OB/GYN, Neurology, Orthopedics, Pediatrics";
        $data["meta_descr"] = "We offer accurate, compliant, and revenue-driven billing solutions for healthcare providers across all medical specialties.";
        $data["site"] = $this->site_settings;

        return view('specialties', $data);
    }

    public function cardiology()
    {
        $data["meta_title"] = "Expert Cardiology Billing Services | AMD SOL";
        $data["meta_keywords"] = "Cardiology Billing, Medical Billing for Cardiologists, Cardiology RCM";
        $data["meta_descr"] = "Streamline your cardiology practice with our expert billing services. We handle complex cardiac procedure coding, insurance verification, and denial management.";
        $data["site"] = $this->site_settings;

        return view('cardiology', $data);
    }

    public function outsource_billing()
    {
        $data["meta_title"] = "Medical Billing Outsourcing Services | AMD SOL";
        $data["meta_keywords"] = "Medical Billing Outsourcing, RCM Outsourcing, Healthcare Billing Solutions";
        $data["meta_descr"] = "Maximize your practice collections and reduce errors by outsourcing your medical billing to AMD SOL's expert team.";
        $data["site"] = $this->site_settings;

        return view('outsource', $data);
    }

    public function denial_management()
    {
        $data["meta_title"] = "Effective Denial Management Services | AMD SOL";
        $data["meta_keywords"] = "Denial Management, Claim Denials, Medical Billing Denials, Healthcare RCM";
        $data["meta_descr"] = "Reduce claim denials and recover revenue faster with AMD SOL's comprehensive denial management services. We identify root causes and resolve issues promptly.";
        $data["site"] = $this->site_settings;

        return view('denial_management', $data);
    }

    public function large_practices()
    {
        $data["meta_title"] = "Medical Billing for Large Practices | AMD SOL";
        $data["meta_keywords"] = "Large Medical Practice Billing, Multi-provider Billing, Clinic Revenue Optimization";
        $data["meta_descr"] = "Optimized medical billing solutions for large practices and multi-provider clinics. Handle high claim volumes and complex workflows with precision.";
        $data["site"] = $this->site_settings;

        return view('large_practices', $data);
    }

    public function small_practices()
    {
        $data["meta_title"] = "Medical Billing for Small Practices | AMD SOL";
        $data["meta_keywords"] = "Small Medical Practice Billing, Solo Provider Billing, Independent Clinic RCM";
        $data["meta_descr"] = "Scale your small practice with our dedicated billing services. We handle the paperwork so you can focus on patient care.";
        $data["site"] = $this->site_settings;

        return view('small_practices', $data);
    }

    public function hospital_billing()
    {
        $data["meta_title"] = "Full-Service Hospital Billing Solutions | AMD SOL";
        $data["meta_keywords"] = "Hospital Billing Services, Hospital RCM, Medical Billing for Hospitals";
        $data["meta_descr"] = "Streamline your hospital's revenue cycle with our expert billing services. Maximize reimbursements, reduce denials, and ensure compliance.";
        $data["site"] = $this->site_settings;

        return view('hospital_billing', $data);
    }

    public function pediatric()
    {
        $data["meta_title"] = "Pediatric Billing Services | AMD SOL";
        $data["meta_keywords"] = "Pediatric Medical Billing, Childcare Billing Services, Pediatric RCM";
        $data["meta_descr"] = "Optimized billing solutions for pediatric practices. We handle claims, reimbursements, and compliance so you can focus on child care.";
        $data["site"] = $this->site_settings;

        return view('pediatric', $data);
    }

    public function neurology()
    {
        $data["meta_title"] = "Specialized Neurology Medical Billing Services | AMD SOL";
        $data["meta_keywords"] = "Neurology Billing Services, Neurology Coding, Neurology RCM, Medical Billing for Neurologists";
        $data["meta_descr"] = "Maximize your neurology practice revenue with our specialized billing and coding services. We handle complex neurology claims, reduce denials, and ensure compliance.";
        $data["site"] = $this->site_settings;

        return view('neurology', $data);
    }

    public function radiology()
    {
        $data["meta_title"] = "Radiology Billing Services & RCM Solutions | AMD SOL";
        $data["meta_keywords"] = "Radiology Billing Services, Radiology Coding, Medical Billing for Radiologists, Imaging Center RCM";
        $data["meta_descr"] = "Expert radiology billing services to streamline your imaging center's revenue cycle. We handle complex radiology coding, claim submissions, and denial management.";
        $data["site"] = $this->site_settings;

        return view('radiology', $data);
    }

    public function physician_billing()
    {
        $data["meta_title"] = "Expert Physician Billing Services | AMD SOL";
        $data["meta_keywords"] = "Physician Billing Services, Physician RCM, Medical Billing for Physicians";
        $data["meta_descr"] = "Optimize your practice's revenue with our comprehensive physician billing services. We ensure accurate claims, faster reimbursements, and reduced denials.";
        $data["site"] = $this->site_settings;

        return view('physician_billing', $data);
    }

    public function about()
    {
        $data["meta_title"] = "About Us | AMD SOL";
        $data["meta_keywords"] = "About AMD SOL, Medical Billing, Healthcare Solutions";
        $data["meta_descr"] = "Learn more about AMD SOL, a leading medical billing company providing top-notch healthcare solutions.";
        $data["site"] = $this->site_settings;

        return view('about_us', $data);
    }

    public function contact(Request $request)
    {
        if ($request->isMethod('post')) {
            // Implement contact form logic here
            // In CI it was: submit_contact_form($form);
            $this->submit_contact_form($request->all());
            return redirect('contact-us.php')->with('green_msg', 'We Have Received Your Message Will Respond You Soon.');
        }

        $data["meta_title"] = "Contact Us | AMD SOL";
        $data["meta_keywords"] = "Contact Us | AMD SOL";
        $data["meta_descr"] = "Contact Us | AMD SOL";
        $data["site"] = $this->site_settings;

        return view('contact', $data);
    }

    public function demo(Request $request)
    {
        if ($request->isMethod('post')) {
            $this->submit_demo_form($request->all());
            return redirect('request-demo')->with('green_msg', 'Thank you for your interest! We will contact you shortly to schedule your demo.');
        }

        $data["meta_title"] = "Request a Demo | AMD SOL";
        $data["meta_keywords"] = "Request a Demo, Medical Billing Demo, AMD SOL Demo";
        $data["meta_descr"] = "Experience streamlined billing and optimized workflows. Request a demo to see how AMD SOL can transform your practice's revenue cycle.";
        $data["site"] = $this->site_settings;

        return view('demo', $data);
    }

    protected function submit_demo_form($form)
    {
        $firstName = $form['firstName'] ?? '';
        $lastName = $form['lastName'] ?? '';
        $name = trim("$firstName $lastName");
        $email = $form['email'] ?? '';
        $phone = $form['phone'] ?? '';
        $practice = $form['practiceName'] ?? '';
        $physicians = $form['physicians'] ?? '';
        $comments = $form['message'] ?? '';

        $messageText = "$name requested a Demo <br><br>Name  : $name<br>Email : $email<br>Phone : $phone<br>Practice : $practice<br>Physicians: $physicians<br>Message : $comments";
        
        Mail::html($messageText, function ($message) use ($name, $email) {
            $message->to('info@amdsol.com')
                    ->subject("Demo Request From $name - AMD SOL")
                    ->from($email, $name);
        });
    }

    protected function submit_contact_form($form)
    {
        $firstName = $form['first_name'] ?? '';
        $lastName = $form['last_name'] ?? '';
        
        if ($firstName || $lastName) {
            $name = trim("$firstName $lastName");
        } else {
            $name = $form['name'] ?? '';
        }

        $email = $form['email'] ?? '';
        $subject = $form['subject'] ?? 'Website Inquiry';
        $phone = $form['phone'] ?? '';
        $comments = $form['message'] ?? ($form['comments'] ?? '');

        $messageText = "$name From Contact Us <br><br>Name  : $name<br>Phone : $phone<br>Subject : $subject<br>Email : $email<br>Message : $comments";
        
        Mail::html($messageText, function ($message) use ($name, $email, $subject) {
            $message->to('info@amdsol.com')
                    ->subject("Contact Us From $name - AMD SOL")
                    ->from($email, $name);
        });
    }

    protected function submit_registration_form($form)
    {
        $name = $form['name'] ?? '';
        $email = $form['email'] ?? '';
        $phone = $form['phone'] ?? '';
        $company = $form['company'] ?? '';
        $comments = $form['message'] ?? '';

        $messageText = "<h4>Name: <b>$name</b></h4><br>" .
                       "<h4>Phone: <b>$phone</b></h4><br>" .
                       "<h4>Email: <b>$email</b></h4><br>" .
                       "<h4>Company: <b>$company</b></h4><br>" .
                       "<p>Message: $comments</p>";
        
        Mail::html($messageText, function ($message) use ($name, $email) {
            $message->to('info@amdsol.com')
                    ->subject("New Registration/Message from $name - AMD SOL")
                    ->from($email, $name);
        });
    }
}
