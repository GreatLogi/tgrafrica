<?php
declare (strict_types = 1);
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class SiteConfigurationController extends Controller
{
    public function create_footer()
    {
        return view('admin.layouts.aboutus.footer.footer');
    }

    public function create_mission()
    {
        return view('admin.layouts.aboutus.mission.mission');
    }
    public function create_purpose()
    {
        return view('admin.layouts.aboutus.purpose.purpose');
    }
    public function create_vision()
    {
        return view('admin.layouts.aboutus.vision.vision');
    }
    public function create_contact_us()
    {
        return view('admin.layouts.aboutus.contactus.contact_us');
    }
    public function site_logo()
    {
        return view('admin.layouts.aboutus.footer.logo');
    }

    public function founder_profile()
    {
        return view('admin.layouts.aboutus.founder.founder');
    }
}
