<?php

use App\Http\Controllers\Solutions\ApprovalWorkflowController;
use App\Http\Controllers\Solutions\ArApManagementController;
use App\Http\Controllers\Solutions\AutomationController;
use App\Http\Controllers\Solutions\CustomerManagementController;
use App\Http\Controllers\Solutions\CustomerRetentionController;
use App\Http\Controllers\Solutions\ExpenseTrackController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LocalLange;
use App\Http\Controllers\Solutions\InventoryController;
use App\Http\Controllers\Solutions\MobileInvoiceController;
use App\Http\Controllers\PricesController;
use App\Http\Controllers\Products\InventoriesController;
use App\Http\Controllers\Products\AccountController;
use App\Http\Controllers\Products\InvoicingController;
use App\Http\Controllers\Products\ManufacturingController;
use App\Http\Controllers\Solutions\ProductionManagementController;
use App\Http\Controllers\Solutions\TelegramIntergrationController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

Route::get('/',[HomeController::class, 'index']);

Route::resource('/home',HomeController::class);
Route::resource('/plans', PricesController::class);
Route::resource('/resources', PricesController::class);
Route::resource('/contact-sale', PricesController::class);

// solutions
Route::resource('/solutions/mobile-invoice', MobileInvoiceController::class);
Route::resource('/solutions/expense-tracking', ExpenseTrackController::class);
Route::resource('/solutions/production-management', ProductionManagementController::class);
Route::resource('/solutions/inventory', InventoryController::class);
Route::resource('/solutions/customers-management', CustomerManagementController::class);
Route::resource('/solutions/customers-retention', CustomerRetentionController::class);
Route::resource('/solutions/ar-ap-management', ArApManagementController::class);
Route::resource('/solutions/automation', AutomationController::class);
Route::resource('/solutions/approval-workflow', ApprovalWorkflowController::class);
Route::resource('/solutions/telegram-integration', TelegramIntergrationController::class);

// products
Route::resource('/products/invoicing', InvoicingController::class);
Route::resource('/products/accounting', AccountController::class);
Route::resource('/products/inventories', InventoriesController::class);
Route::resource('/products/manufacturing', ManufacturingController::class);
// resources

Route::get('/resources', function () {
    return view('resources.addletter');
})->name('resources.index');

// lang
Route::get('locale/{lang}', [LocalLange::class, 'setLocale'])->name('locale');
