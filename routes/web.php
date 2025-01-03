<?php
use App\Http\Controllers\Admin\FounderController;
use App\Http\Controllers\Admin\missioncontroller;
use App\Http\Controllers\Admin\purposecontroller;
use App\Http\Controllers\Admin\SiteConfigurationController;
use App\Http\Controllers\Admin\visioncontroller;
use App\Http\Controllers\AnalyticsController;
use App\Http\Controllers\AuditController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BonkConsultationController;
use App\Http\Controllers\BrainstormController;
// use App\Http\Controllers\RoleController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ForceChangeController;
use App\Http\Controllers\Log_in_and_out_Controller;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProspectusController;
use App\Http\Controllers\ProspectusRequestController;
use App\Http\Controllers\QuestionnaireController;
use App\Http\Controllers\ReplyController;
use App\Http\Controllers\RolesAndPermissionController;
use App\Http\Controllers\SeminarController;
use App\Http\Controllers\SubscribeSeminarsController;
use App\Http\Controllers\UserAccountController;
use App\Models\Blog;
use App\Models\Founder;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
 */

// Route::get('/', function () {
//     return view('welcome');
// });

//Sending Emails through contact page

Route::post('/contact-submit', [ContactController::class, 'submit'])->name('contact.submit');

Route::get('/', function () {
    return view('website.index');
})->name('home');

Route::get('contact', function () {
    return view('website.contact');
})->name('contact');

Route::post('/contact/send', [ContactUsController::class, 'send'])->name('contact.send');

// Route::get('news/{uuid}', function ($uuid) {
//     $blog = Blog::findOrFail($uuid);
//     return view('website.newssingle', compact('blog'));
// })->name('newssingle');

// Route::get('news-details', function () {
//     return view('website.newssingle');
// })->name('newssingle');

Route::get('partners', function () {
    return view('website.partners');
})->name('partners');

Route::group(['prefix' => 'about/', 'as' => 'about.'], function () {

    Route::get('founder', function () {
        $founder = Founder::first();
        return view('website.about.founder', compact('founder'));
    })->name('founder');

    Route::get('mission', function () {
        return view('website.about.mission');
    })->name('mission');

    Route::get('vision', function () {
        return view('website.about.vision');
    })->name('vision');

    Route::get('purpose', function () {
        return view('website.about.purpose');
    })->name('purpose');

});

Route::group(['prefix' => 'advisory/', 'as' => 'advisory.'], function () {
    Route::get('brainstorm', function () {
        return view('website.advisory.brainstorm');
    })->name('brainstorm');
    Route::get('analytic', function () {
        return view('website.advisory.analytic');
    })->name('analytic');

    Route::get('seminar', function () {
        return view('website.advisory.seminar');
    })->name('seminar');
    Route::get('seminar-registration', function () {
        return view('website.advisory.register_seminar');
    })->name('register-seminar');

});

Route::group(['prefix' => 'features/', 'as' => 'features.'], function () {
    Route::get('book', function () {
        return view('website.features.book');
    })->name('book');
    Route::get('consultation', function () {
        return view('website.features.consult');
    })->name('consult');
    Route::get('thank-you', function () {
        return view('website.features.thankyou');
    })->name('thank_you');
});

Route::get('/request-prospectus', function () {
    return view('website.request-prospectus.request_prospectus');
})->name('request-prospectus');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');
Route::post('/user-account', [RegisterController::class, 'register'])->name('user-account');
Route::post('user-login', [Log_in_and_out_Controller::class, 'Log_in'])->name('login-user');
Route::get('logout', [Log_in_and_out_Controller::class, 'Logout'])->name('logout')
    ->middleware('auth');
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});
Route::get('news', function () {
    $latest_blogs = Blog::latest()->paginate(6);
    return view('website.news', compact('latest_blogs'));
})->name('news');

// Route::post('/prospectus', [ProspectusRequestController::class, 'store'])->name('prospectus.store');
Route::post('/prospectus', [ProspectusRequestController::class, 'store'])->name('prospectus.store');
Route::resource('seminars', SubscribeSeminarsController::class);
Route::get('/subscribe-serminars', [SubscribeSeminarsController::class, 'index'])->name('seminarsindex');
Route::post('/subscribed-users', [SubscribeSeminarsController::class, 'users_subscribed_semiars'])->name('subscribed-users');
Route::get('/users/subscribed/seminars', [SubscribeSeminarsController::class, 'users_subscribed'])->name('users-subscribed-semiars');
Route::get('/all-seminars-videos', [SubscribeSeminarsController::class, 'all_seminars_record'])->name('all-seminars-videos');
// Route for deleting seminar video
Route::get('/seminar/{uuid}/delete', [SubscribeSeminarsController::class, 'delete_seminar_video'])->name('seminar-video-delete');
Route::get('seminars/{seminar}/subscribe', [SubscribeSeminarsController::class, 'subscribe'])->name('seminars.subscribe');
Route::post('news/comment/{comment}/reply', [CommentController::class, 'reply'])->name('news.reply');
Route::post('news/{uuid}/comment', [CommentController::class, 'store'])->name('news.comment');
Route::get('news/{uuid}', [BlogController::class, 'show'])->name('newssingle');

Route::get('/questionnaire', [QuestionnaireController::class, 'index'])->name('questionnaires-book-consultations');
Route::post('/submit-questionnaire', [QuestionnaireController::class, 'submitQuestionnaire'])->name('submit-questionnaire');
Route::get('/trg-africa-brainstorm', [PostController::class, 'index'])->name('posts.index');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
Route::post('/posts/{post}/replies', [ReplyController::class, 'store'])->name('replies.store');
Route::get('/register', [Log_in_and_out_Controller::class, 'register'])->name('register-user');
// routes/web.php

Route::prefix('contact-us')->group(function () {
    Route::post('contact-us', [ContactUsController::class, 'store'])->name('site-store-contact-us');
    Route::get('/', [ContactUsController::class, 'index'])->name('contact-us');
    Route::get('/thank-you-for-contacting-tgr', [ContactUsController::class, 'thankyoucontact'])->name('contact-thank-you-message');
});
// Route::prefix('seminars')->group(function () {
//     Route::post('seminar-registration', [SeminarRegistrationController::class, 'store'])->name('site-store-seminar-registration');
//     Route::get('/', [SeminarRegistrationController::class, 'index'])->name('contact-us');
// });
Route::prefix('admin')->name('admin.')->group(function () {
    // Route::resource('blogs', BlogController::class);
    Route::get('/', [BlogController::class, 'index'])->name('blogs.index');
    Route::get('/add', [BlogController::class, 'create'])->name('blogs.create');
    Route::post('/store', [BlogController::class, 'store'])->name('blogs.store');
    Route::get('/edit/{uuid}', [BlogController::class, 'edit'])->name('blogs.edit');
    Route::post('/update', [BlogController::class, 'update'])->name('blogs.update');
    Route::get('/delete/{uuid}', [BlogController::class, 'delete'])->name('blogs.destroy');
});
Route::prefix('site-configuration')->group(function () {
    Route::prefix('prospectus')->group(function () {
        Route::get('/requested/list', [ProspectusRequestController::class, 'index'])->name('requested-list');
        Route::get('/', [ProspectusController::class, 'index'])->name('prospectus-index');
        Route::get('/add', [ProspectusController::class, 'create'])->name('add-prospectus');
        Route::post('/store', [ProspectusController::class, 'store'])->name('store-prospectus');
        Route::get('/delete/{uuid}', [ProspectusController::class, 'delete'])->name('site-delete-tgrbrainstorm');
    });
    Route::prefix('purpose')->group(function () {
        Route::get('/', [purposecontroller::class, 'index'])->name('site-index-purpose');
        Route::get('/add', [SiteConfigurationController::class, 'create_purpose'])->name('site-purpose');
        Route::post('/store', [purposecontroller::class, 'store'])->name('site-store-purpose');
        Route::get('/edit/{uuid}', [purposecontroller::class, 'edit'])->name('site-edit-purpose');
        Route::post('/update', [purposecontroller::class, 'update'])->name('site-update-purpose');
        Route::get('/delete/{uuid}', [purposecontroller::class, 'delete'])->name('site-delete-purpose');
    });
    Route::prefix('vision')->group(function () {
        Route::get('/', [visioncontroller::class, 'index'])->name('site-index-vision');
        Route::get('/add', [SiteConfigurationController::class, 'create_vision'])->name('site-vision');
        Route::post('/store', [visioncontroller::class, 'store'])->name('site-store-vision');
        Route::get('/edit/{uuid}', [visioncontroller::class, 'edit'])->name('site-edit-vision');
        Route::post('/update', [visioncontroller::class, 'update'])->name('site-update-vision');
        Route::get('/delete/{uuid}', [visioncontroller::class, 'delete'])->name('site-delete-vision');
    });
    Route::prefix('mission')->group(function () {
        Route::get('/', [missioncontroller::class, 'index'])->name('site-index-mission');
        Route::get('/add', [SiteConfigurationController::class, 'create_mission'])->name('site-mission');
        Route::post('/store', [missioncontroller::class, 'store'])->name('site-store-mission');
        Route::get('/edit/{uuid}', [missioncontroller::class, 'edit'])->name('site-edit-mission');
        Route::post('/update', [missioncontroller::class, 'update'])->name('site-update-mission');
        Route::get('/delete/{uuid}', [missioncontroller::class, 'delete'])->name('site-delete-mission');
    });

    Route::prefix('founder')->group(function () {
        Route::get('/', [FounderController::class, 'index'])->name('site-index-founder');
        Route::get('/add', [SiteConfigurationController::class, 'founder_profile'])->name('founder-profile');
        Route::post('/store', [FounderController::class, 'store'])->name('site-store-founder');
        Route::get('/edit/{uuid}', [FounderController::class, 'edit'])->name('site-edit-founder');
        Route::post('/update', [FounderController::class, 'update'])->name('site-update-founder');
        Route::get('/delete/{uuid}', [FounderController::class, 'delete'])->name('site-delete-founder');
    });
    Route::prefix('tgr-brainstorm')->group(function () {
        Route::get('/', [BrainstormController::class, 'index'])->name('site-index-tgrbrainstorm');
        Route::get('/add', [SiteConfigurationController::class, 'tgrbrainstorm_add'])->name('tgr-brainstorm-add');
        Route::post('/store', [BrainstormController::class, 'store'])->name('site-store-tgrbrainstorm');
        Route::get('/edit/{uuid}', [BrainstormController::class, 'edit'])->name('site-edit-tgrbrainstorm');
        Route::post('/update', [BrainstormController::class, 'update'])->name('site-update-tgrbrainstorm');
        Route::get('/delete/{uuid}', [BrainstormController::class, 'delete'])->name('site-delete-tgrbrainstorm');
    });
    Route::prefix('tgr-seminars')->group(function () {
        Route::get('/', [SeminarController::class, 'index'])->name('site-index-tgrseminar');
        Route::get('/add', [SiteConfigurationController::class, 'tgrseminar_add'])->name('tgr-seminars-add');
        Route::post('/store', [SeminarController::class, 'store'])->name('site-store-tgrseminar');
        Route::get('/edit/{uuid}', [SeminarController::class, 'edit'])->name('site-edit-tgrseminar');
        Route::post('/update', [SeminarController::class, 'update'])->name('site-update-tgrseminar');
        Route::get('/delete/{uuid}', [SeminarController::class, 'delete'])->name('site-delete-tgrseminar');
    });
    Route::prefix('tgr-analytics')->group(function () {
        Route::get('/', [AnalyticsController::class, 'index'])->name('site-index-tgranalytic');
        Route::get('/add', [SiteConfigurationController::class, 'tgranalytic_add'])->name('tgr-analytic-add');
        Route::post('/store', [AnalyticsController::class, 'store'])->name('site-store-tgranalytic');
        Route::get('/edit/{uuid}', [AnalyticsController::class, 'edit'])->name('site-edit-tgranalytic');
        Route::post('/update', [AnalyticsController::class, 'update'])->name('site-update-tgranalytic');
        Route::get('/delete/{uuid}', [AnalyticsController::class, 'delete'])->name('site-delete-tgranalytic');
    });

    Route::prefix('book-a-consultation')->group(function () {
        Route::get('/', [BonkConsultationController::class, 'index'])->name('site-index-bookaconsultation');
        Route::get('/add', [SiteConfigurationController::class, 'book_a_consultation_add'])->name('tgr-bookaconsultation-add');
        Route::post('/store', [BonkConsultationController::class, 'store'])->name('site-store-bookaconsultation');
        Route::get('/edit/{uuid}', [BonkConsultationController::class, 'edit'])->name('site-edit-bookaconsultation');
        Route::post('/update', [BonkConsultationController::class, 'update'])->name('site-update-bookaconsultation');
        Route::get('/delete/{uuid}', [BonkConsultationController::class, 'delete'])->name('site-delete-bookaconsultation');
    });
    Route::get('/footer', [SiteConfigurationController::class, 'create_footer'])->name('site-footer');
    Route::get('/contact-us', [SiteConfigurationController::class, 'create_contact_us'])->name('site-contact-us');

});

Route::group(['prefix' => 'settings'], function () {
    Route::prefix('roles')->group(function () {
        Route::get('/', [RolesAndPermissionController::class, 'index'])->name('index-roles');
        Route::get('/add', [RolesAndPermissionController::class, 'create'])->name('create-roles');
        Route::post('/store', [RolesAndPermissionController::class, 'store'])->name('store-roles');
        Route::get('/edit/{uuid}', [RolesAndPermissionController::class, 'edit'])->name('edit-roles');
        Route::post('/update', [RolesAndPermissionController::class, 'update'])->name('update-roles');
        Route::get('/delete{uuid}', [RolesAndPermissionController::class, 'destroy'])->name('destroy-roles');
    });

    Route::prefix('user')->group(function () {
        Route::get('/', [UserAccountController::class, 'index'])->name('index-user');
        Route::get('/add', [UserAccountController::class, 'create'])->name('create-user');
        Route::post('/store', [UserAccountController::class, 'store'])->name('store-user');
        Route::get('/edit/{uuid}', [UserAccountController::class, 'edit'])->name('edit-user');
        Route::post('/update', [UserAccountController::class, 'update'])->name('update-user');
        Route::get('/delete{uuid}', [UserAccountController::class, 'destroy'])->name('destroy-user');
    });

    Route::get('/forgot-password', [Log_in_and_out_Controller::class, 'resetpassword'])->name('forgot-password');
    Route::get('/change-password', [Log_in_and_out_Controller::class, 'verifyaccount'])->name('verify-password');
    Route::post('/password-changed', [ForceChangeController::class, 'changePassword'])->name('changed-password');
    Route::prefix('Profile')->group(function () {
        Route::get('/', [ProfileController::class, 'ProfileView'])->name('profileview');
        Route::get('/edit', [ProfileController::class, 'ProfileEdit'])->name('profile.edit');
        Route::post('/store', [ProfileController::class, 'ProfileStore'])->name('profile.store');
        Route::get('/password/view', [ProfileController::class, 'PasswordView'])->name('password.view');
        Route::post('/password/update', [ProfileController::class, 'PasswordUpdate'])->name('password.update');
        Route::get('/inactivation{id}', [ProfileController::class, 'Inactive'])->name('user.inactive');
        Route::get('/activation{id}', [ProfileController::class, 'Active'])->name('user.active');
    });

    Route::prefix('audit-trail')->group(function () {
        Route::get('/', [AuditController::class, 'ViewAudit'])->name('audit.trail');
        Route::get('/user-audit', [AuditController::class, 'AuthAudit'])->name('user-audit-trail');
    });
});
