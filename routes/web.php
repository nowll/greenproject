    <?php

    use App\Http\Controllers\ProfileController;
    use Illuminate\Support\Facades\Route;

    use App\Http\Controllers\AirQualityController;

    Route::get('/', function () {
        return view('welcome');
    });
    // Route::get('/home', function () {
    //     return view(   'home');
    // })->name('home');

    // Route::get('/forum', function () {
    //     return view('discussions.index');
    // });

    Route::get('/education', function () {
        return view('news');
    });


    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');

    Route::middleware('auth')->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });

    require __DIR__.'/auth.php';


    Route::resource('discussions',\App\Http\Controllers\DiscussionsController::class);
    Route::resource('discussions/{discussion}/replies',\App\Http\Controllers\RepliesController::class);

    Route::get('/', [AirQualityController::class, 'fetchAirQuality'])->name('home');

    Route::get('/sdg',function(){
        return view('news.one');
    });

    Route::get('/carbon-footprint',function(){
        return view('news.two');
    })->name('two');

    Route::get('/sustainable-system',function(){
        return view('news.three');
    })->name('three');

    Route::get('/business-prod',function(){
        return view('news.four');
    })->name('four');

    Route::get('/waste-management',function(){
        return view('news.five');
    })->name('five');

    Route::get('/community-power',function(){
        return view('news.six');
    })->name('six');
