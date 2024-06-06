<?php
use App\Http\Controllers\Admin\FounderController;
use App\Http\Controllers\Admin\missioncontroller;
use App\Http\Controllers\Admin\purposecontroller;
use App\Http\Controllers\Admin\SiteConfigurationController;
use App\Http\Controllers\Admin\visioncontroller;
use App\Http\Controllers\AnalyticsController;
use App\Http\Controllers\AuditController;
use App\Http\Controllers\BrainstormController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\ForceChangeController;
use App\Http\Controllers\Log_in_and_out_Controller;
// use App\Http\Controllers\RoleController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RolesAndPermissionController;
use App\Http\Controllers\SeminarController;
// use App\Http\Controllers\UserController;
use App\Http\Controllers\UserAccountController;
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

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });

Route::get('/', function () {
    return view('website.index');
})->name('home');

Route::get('contact', function () {
    return view('website.contact');
})->name('contact');

Route::get('partners', function () {
    return view('website.partners');
})->name('partners');

Route::group(['prefix' => 'about/', 'as' => 'about.'], function () {

    Route::get('founder', function () {
        return view('website.about.founder');
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
Route::prefix('contact-us')->group(function () {
    Route::post('contact-us', [ContactUsController::class, 'store'])->name('site-store-contact-us');
    Route::get('/', [ContactUsController::class, 'index'])->name('contact-us');
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

});

Route::group(['prefix' => 'features/', 'as' => 'features.'], function () {
    Route::get('book', function () {
        return view('website.features.book');
    })->name('book');
    Route::get('consult', function () {
        return view('website.features.consult');
    })->name('consult');

});
Route::get('/@.charcoal.trg.@tgrafrica', function () {
    return view('auth.login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.layouts.index');
    })->name('dashboard');
});
Route::post('login', [Log_in_and_out_Controller::class, 'Log_in'])->name('login-admin');
Route::get('logout', [Log_in_and_out_Controller::class, 'Logout'])->name('logout')
    ->middleware('auth');

Route::prefix('site-configuration')->group(function () {
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
    // Route::get('/login-activities', [LogactivityController::class, 'login_and_logout_activities'])->name('login_and_logout');
    Route::prefix('audit-trail')->group(function () {
        Route::get('/', [AuditController::class, 'ViewAudit'])->name('audit.trail');
        Route::get('/user-audit', [AuditController::class, 'AuthAudit'])->name('user-audit-trail');
    });
});
