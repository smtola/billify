
<div class="flex justify-center items-center pt-12">
    <div class="max-w-screen-xl px-5 lg:px-16">
        <div class="mt-24 wow bounceInUp" data-wow-duration="2s" data-wow-delay="0.1s"
            x-data="{ annual: false, month:'@lang('messages.billed_monthly')', year: '@lang('messages.billed_yearly')' }">
            <h2 class="text-3xl text-gray-800 font-bold text-center mb-4">@lang('messages.plans_pricing')</h2>
            <!-- Toggle switch -->
            <div class="flex justify-center wow bounceInUp" data-wow-duration="2s" data-wow-delay="0.2s">
                <div class="flex items-center space-x-3 mb-8">
                    <div class="text-sm text-gray-500 font-medium min-w-[20px]">@lang('messages.yearly') <span
                            class="text-blue-500">(-25%)</span></div>
                    <div class="relative select-none w-[44px]">
                        <label class="inline-flex items-center cursor-pointer mt-2">
                            <input type="checkbox" value="" class="sr-only peer" x-model="annual">
                            <div
                                class="relative w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600">
                            </div>
                            <span class="ms-3 text-sm font-medium text-gray-900 dark:text-gray-300 sr-only">Toggle me</span>
                        </label>
                    </div>
                    <div class="text-sm text-gray-500 font-medium min-w-[20px] text-right">@lang('messages.monthly')</div>
                </div>
            </div>
            <!-- Pricing tabs -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 transition ease">
                <!-- Tab 1 -->
                <div class="relative col-span-full md:col-span-1 bg-[#f5f1f180] backdrop-blur-lg bg-opacity-10 shadow-sm rounded-lg border border-gray-200 wow bounceInUp"
                    data-wow-duration="2s" data-wow-delay="0.3s">
                    <div class="absolute top-0 left-0 right-0 h-0.5" aria-hidden="true"></div>
                    <div class="px-5 pt-5 pb-6 border-gray-200">
                        <header class="flex items-center mb-2">
                            <h3 class="text-lg text-gray-800 font-semibold">Starter</h3>
                        </header>
                        <!-- Price -->
                        <div class="flex text-gray-800 font-bold mb-4">
                            <span class="text-3xl">$</span>
                            <span class="text-5xl" x-text="annual ? '16' : '216'">
                                16
                            </span>
                            <div class="flex flex-col mt-2 mx-2">
                                <span class="text-gray-500 font-medium text-sm">
                                    @lang('messages.per_month')
                                </span>
                                <span class="text-gray-500 font-medium text-sm" x-text="annual ? month : year">
                                    @lang('messages.billed_monthly')
                                </span>
                            </div>
                        </div>
                        <!-- CTA -->
                        <button class="
                            font-medium
                            text-sm inline-flex
                            items-center
                            justify-center
                            px-3 py-2 border
                                border-gray-200
                                rounded-full
                                leading-5
                                shadow-sm
                                transition
                                duration-150
                                ease-in-out
                                bg-indigo-600
                                hover:bg-indigo-500
                                focus:outline-none
                                focus-visible:ring-2
                                hover:border-gray-300
                                text-white
                            w-full">Get Started</button>
                    </div>
                    <div class="px-5 pt-4 pb-5">
                        <div class="text-xs text-gray-800 font-semibold uppercase mb-4">Usage</div>
                        <!-- List -->
                        <ul>
                            <li class="flex items-center py-1">
                                <svg class="w-3 h-3 flex-shrink-0 fill-current text-blue-500 mr-2" viewBox="0 0 12 12">
                                    <path
                                        d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z" />
                                </svg>
                                <div class="text-sm wow fadeInUp" data-wow-duration="2s" data-wow-delay="1s">Customer Data
                                    Management</div>
                            </li>
                            <li class="flex items-center py-1">
                                <svg class="w-3 h-3 flex-shrink-0 fill-current text-blue-500 mr-2" viewBox="0 0 12 12">
                                    <path
                                        d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z" />
                                </svg>
                                <div class="text-sm wow fadeInUp" data-wow-duration="2s" data-wow-delay="1.5s">Invoice
                                    Generation</div>
                            </li>
                            <li class="flex items-center py-1">
                                <svg class="w-3 h-3 flex-shrink-0 fill-current text-blue-500 mr-2" viewBox="0 0 12 12">
                                    <path
                                        d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z" />
                                </svg>
                                <div class="text-sm wow fadeInUp" data-wow-duration="2s" data-wow-delay="1.6s">Telegram
                                    Automation</div>
                            </li>
                            <li class="flex items-center py-1">
                                <svg class="w-3 h-3 flex-shrink-0 fill-current text-blue-500 mr-2" viewBox="0 0 12 12">
                                    <path
                                        d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z" />
                                </svg>
                                <div class="text-sm wow fadeInUp" data-wow-duration="2s" data-wow-delay="1.7s">Mobile Access
                                </div>
                            </li>
                            <li class="flex items-center py-1">
                                <svg class="w-3 h-3 flex-shrink-0 fill-current text-blue-500 mr-2" viewBox="0 0 12 12">
                                    <path
                                        d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z" />
                                </svg>
                                <div class="text-sm wow fadeInUp" data-wow-duration="2s" data-wow-delay="1.8s">Customize Invoice
                                    Template</div>
                            </li>
                            <li class="flex items-center py-1">
                                <svg class="w-3 h-3 flex-shrink-0 fill-current text-blue-500 mr-2" viewBox="0 0 12 12">
                                    <path
                                        d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z" />
                                </svg>
                                <div class="text-sm wow fadeInUp" data-wow-duration="2s" data-wow-delay="1.9s">Account
                                    Receivable and Aging</div>
                            </li>
                            <li class="flex items-center py-1">
                                <svg class="w-3 h-3 flex-shrink-0 fill-current text-blue-500 mr-2" viewBox="0 0 12 12">
                                    <path
                                        d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z" />
                                </svg>
                                <div class="text-sm wow fadeInUp" data-wow-duration="2s" data-wow-delay="2s">Report and
                                    Analytics</div>
                            </li>
                            <li class="flex items-center py-1">
                                <svg class="w-3 h-3 flex-shrink-0 fill-current text-blue-500 mr-2" viewBox="0 0 12 12">
                                    <path
                                        d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z" />
                                </svg>
                                <div class="text-sm wow fadeInUp" data-wow-duration="2s" data-wow-delay="2.5s">Users :
                                    <strong>5</strong> Users
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Tab 2 -->
                <div class="relative col-span-full md:col-span-1 bg-[#f5f1f180] backdrop-blur-lg bg-opacity-10 shadow-sm rounded-lg border border-gray-200 wow bounceInUp"
                    data-wow-duration="2s" data-wow-delay="0.4s">
                    <div class="absolute top-0 left-0 right-0 h-0.5" aria-hidden="true"></div>
                    <div class="px-5 pt-5 pb-6 border-gray-200">
                        <header class="flex items-center mb-2">
                            <h3 class="text-lg text-gray-800 font-semibold">Basic</h3>
                        </header>
                        <!-- Price -->
                        <div class="flex text-gray-800 font-bold mb-4">
                            <span class="text-3xl">$</span>
                            <span class="text-5xl" x-text="annual ? '21' : '192'">
                                21
                            </span>
                            <div class="flex flex-col mt-2 mx-2">
                                <span class="text-gray-500 font-medium text-sm">
                                    @lang('messages.per_month')
                                </span>
                                <span class="text-gray-500 font-medium text-sm" x-text="annual ? month : year">
                                    @lang('messages.billed_monthly')
                                </span>
                            </div>
                        </div>
                        <!-- CTA -->
                        <button class="
                            font-medium
                            text-sm inline-flex
                            items-center
                            justify-center
                            px-3 py-2 border
                                border-gray-200
                                rounded-full
                                leading-5
                                shadow-sm
                                transition
                                duration-150
                                ease-in-out
                            bg-indigo-600
                                hover:bg-indigo-500
                                focus:outline-none
                                focus-visible:ring-2
                                hover:border-gray-300
                                text-white
                            w-full">Get Started</button>
                    </div>
                    <div class="px-5 pt-4 pb-5">
                        <div class="text-xs text-gray-800 font-semibold uppercase mb-4">Everything in Starter, plus
                        </div>
                        <!-- List -->
                        <ul>
                            <li class="flex items-center py-1">
                                <svg class="w-3 h-3 flex-shrink-0 fill-current text-blue-500 mr-2" viewBox="0 0 12 12">
                                    <path
                                        d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z" />
                                </svg>
                                <div class="text-sm wow fadeInUp" data-wow-duration="2s" data-wow-delay="1.5s">Customize
                                    Quotation Templates</div>
                            </li>
                            <li class="flex items-center py-1">
                                <svg class="w-3 h-3 flex-shrink-0 fill-current text-blue-500 mr-2" viewBox="0 0 12 12">
                                    <path
                                        d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z" />
                                </svg>
                                <div class="text-sm wow fadeInUp" data-wow-duration="2s" data-wow-delay="1.6s">Quotation
                                    Generation</div>
                            </li>
                            <li class="flex items-center py-1">
                                <svg class="w-3 h-3 flex-shrink-0 fill-current text-blue-500 mr-2" viewBox="0 0 12 12">
                                    <path
                                        d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z" />
                                </svg>
                                <div class="text-sm wow fadeInUp" data-wow-duration="2s" data-wow-delay="1.7s">Sales Receipt
                                </div>
                            </li>
                            <li class="flex items-center py-1">
                                <svg class="w-3 h-3 flex-shrink-0 fill-current text-blue-500 mr-2" viewBox="0 0 12 12">
                                    <path
                                        d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z" />
                                </svg>
                                <div class="text-sm wow fadeInUp" data-wow-duration="2s" data-wow-delay="1.8s">Report and
                                    Analytics</div>
                            </li>
                            <li class="flex items-center py-1">
                                <svg class="w-3 h-3 flex-shrink-0 fill-current text-blue-500 mr-2" viewBox="0 0 12 12">
                                    <path
                                        d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z" />
                                </svg>
                                <div class="text-sm wow fadeInUp" data-wow-duration="2s" data-wow-delay="1.9s">Users :
                                    <strong>5</strong> Users
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Tab 3 -->
                <div class="relative col-span-full md:col-span-1 bg-[#f5f1f180] backdrop-blur-lg bg-opacity-10 shadow-sm rounded-lg border border-gray-200 wow bounceInUp"
                    data-wow-duration="2s" data-wow-delay="0.5s">
                    <div class="absolute top-0 left-0 right-0 h-0.5" aria-hidden="true"></div>
                    <div class="px-5 pt-5 pb-6 border-gray-200">
                        <header class="flex items-center mb-2">
                            <h3 class="text-lg text-gray-800 font-semibold">Standard</h3>
                        </header>
                        <!-- Price -->
                        <div class="flex text-gray-800 font-bold mb-4">
                            <span class="text-3xl">$</span>
                            <span class="text-5xl" x-text="annual ? '45' : '396'">
                                45
                            </span>
                            <div class="flex flex-col mt-2 mx-2">
                                <span class="text-gray-500 font-medium text-sm">
                                    @lang('messages.per_month')
                                </span>
                                <span class="text-gray-500 font-medium text-sm" x-text="annual ? month : year">
                                    @lang('messages.billed_monthly')
                                </span>
                            </div>
                        </div>
                        <!-- CTA -->
                        <button class="
                            font-medium
                            text-sm inline-flex
                            items-center
                            justify-center
                            px-3 py-2 border
                                border-gray-200
                                rounded-full
                                leading-5
                                shadow-sm
                                transition
                                duration-150
                                ease-in-out
                            bg-indigo-600
                                hover:bg-indigo-500
                                focus:outline-none
                                focus-visible:ring-2
                                hover:border-gray-300
                                text-white
                            w-full">Get Started</button>
                    </div>
                    <div class="px-5 pt-4 pb-5">
                        <div class="text-xs text-gray-800 font-semibold uppercase mb-4">Everything in Basic, plus</div>
                        <!-- List -->
                        <ul>
                            <li class="flex items-center py-1">
                                <svg class="w-3 h-3 flex-shrink-0 fill-current text-blue-500 mr-2" viewBox="0 0 12 12">
                                    <path
                                        d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z" />
                                </svg>
                                <div class="text-sm wow fadeInUp" data-wow-duration="2s" data-wow-delay="1.5s">Billing and
                                    Purchasing</div>
                            </li>
                            <li class="flex items-center py-1">
                                <svg class="w-3 h-3 flex-shrink-0 fill-current text-blue-500 mr-2" viewBox="0 0 12 12">
                                    <path
                                        d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z" />
                                </svg>
                                <div class="text-sm wow fadeInUp" data-wow-duration="2s" data-wow-delay="1.6s">Expense Tracker
                                </div>
                            </li>
                            <li class="flex items-center py-1">
                                <svg class="w-3 h-3 flex-shrink-0 fill-current text-blue-500 mr-2" viewBox="0 0 12 12">
                                    <path
                                        d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z" />
                                </svg>
                                <div class="text-sm wow fadeInUp" data-wow-duration="2s" data-wow-delay="1.7s">Account Payable
                                    and Aging</div>
                            </li>
                            <li class="flex items-center py-1">
                                <svg class="w-3 h-3 flex-shrink-0 fill-current text-blue-500 mr-2" viewBox="0 0 12 12">
                                    <path
                                        d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z" />
                                </svg>
                                <div class="text-sm wow fadeInUp" data-wow-duration="2s" data-wow-delay="1.8s">Profit and Loss
                                    Statement</div>
                            </li>
                            <li class="flex items-center py-1">
                                <svg class="w-3 h-3 flex-shrink-0 fill-current text-blue-500 mr-2" viewBox="0 0 12 12">
                                    <path
                                        d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z" />
                                </svg>
                                <div class="text-sm wow fadeInUp" data-wow-duration="2s" data-wow-delay="1.9s">Telegram
                                    Automation</div>
                            </li>
                            <li class="flex items-center py-1">
                                <svg class="w-3 h-3 flex-shrink-0 fill-current text-blue-500 mr-2" viewBox="0 0 12 12">
                                    <path
                                        d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z" />
                                </svg>
                                <div class="text-sm wow fadeInUp" data-wow-duration="2s" data-wow-delay="2s">Report and
                                    Analytics</div>
                            </li>
                            <li class="flex items-center py-1">
                                <svg class="w-3 h-3 flex-shrink-0 fill-current text-blue-500 mr-2" viewBox="0 0 12 12">
                                    <path
                                        d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z" />
                                </svg>
                                <div class="text-sm wow fadeInUp" data-wow-duration="2s" data-wow-delay="2.5s">Mobile Access
                                </div>
                            </li>
                            <li class="flex items-center py-1">
                                <svg class="w-3 h-3 flex-shrink-0 fill-current text-blue-500 mr-2" viewBox="0 0 12 12">
                                    <path
                                        d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z" />
                                </svg>
                                <div class="text-sm wow fadeInUp" data-wow-duration="2s" data-wow-delay="2.6s">Users :
                                    <strong>10</strong> Users
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Tab 4 -->
                <div class="relative col-span-full md:col-span-1 bg-[#f5f1f180] backdrop-blur-lg bg-opacity-10 shadow-sm rounded-lg border border-gray-200 wow bounceInUp"
                    data-wow-duration="2s" data-wow-delay="0.5s">
                    <div class="absolute top-0 left-0 right-0 h-0.5" aria-hidden="true"></div>
                    <div class="px-5 pt-5 pb-6 border-gray-200">
                        <header class="flex items-center mb-2">
                            <h3 class="text-lg text-gray-800 font-semibold">Business</h3>
                        </header>
                        <!-- Price -->
                        <div class="flex text-gray-800 font-bold mb-4">
                            <span class="text-3xl">$</span>
                            <span class="text-5xl" x-text="annual ? '54' : '492'">
                                54
                            </span>
                            <div class="flex flex-col mt-2 mx-2">
                                <span class="text-gray-500 font-medium text-sm">
                                    @lang('messages.per_month')
                                </span>
                                <span class="text-gray-500 font-medium text-sm" x-text="annual ? month : year">
                                    @lang('messages.billed_monthly')
                                </span>
                            </div>
                        </div>
                        <!-- CTA -->
                        <button class="
                            font-medium
                            text-sm inline-flex
                            items-center
                            justify-center
                            px-3 py-2 border
                                border-gray-200
                                rounded-full
                                leading-5
                                shadow-sm
                                transition
                                duration-150
                                ease-in-out
                            bg-indigo-600
                                hover:bg-indigo-500
                                focus:outline-none
                                focus-visible:ring-2
                                hover:border-gray-300
                                text-white
                            w-full">Get Started</button>
                    </div>
                    <div class="px-5 pt-4 pb-5">
                        <div class="text-xs text-gray-800 font-semibold uppercase mb-4">Everything in Standard, plus
                        </div>
                        <!-- List -->
                        <ul>
                            <li class="flex items-center py-1">
                                <svg class="w-3 h-3 flex-shrink-0 fill-current text-blue-500 mr-2" viewBox="0 0 12 12">
                                    <path
                                        d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z" />
                                </svg>
                                <div class="text-sm wow fadeInUp" data-wow-duration="2s" data-wow-delay="1.5s">Inventory
                                    Mamagement</div>
                            </li>
                            <li class="flex items-center py-1">
                                <svg class="w-3 h-3 flex-shrink-0 fill-current text-blue-500 mr-2" viewBox="0 0 12 12">
                                    <path
                                        d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z" />
                                </svg>
                                <div class="text-sm wow fadeInUp" data-wow-duration="2s" data-wow-delay="1.6s">Barcode and QR
                                    Code Scanner</div>
                            </li>
                            <li class="flex items-center py-1">
                                <svg class="w-3 h-3 flex-shrink-0 fill-current text-blue-500 mr-2" viewBox="0 0 12 12">
                                    <path
                                        d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z" />
                                </svg>
                                <div class="text-sm wow fadeInUp" data-wow-duration="2s" data-wow-delay="1.7s">Restock Level and
                                    Low Stock Alert</div>
                            </li>
                            <li class="flex items-center py-1">
                                <svg class="w-3 h-3 flex-shrink-0 fill-current text-blue-500 mr-2" viewBox="0 0 12 12">
                                    <path
                                        d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z" />
                                </svg>
                                <div class="text-sm wow fadeInUp" data-wow-duration="2s" data-wow-delay="1.8s">Cashflow
                                    Statement</div>
                            </li>
                            <li class="flex items-center py-1">
                                <svg class="w-3 h-3 flex-shrink-0 fill-current text-blue-500 mr-2" viewBox="0 0 12 12">
                                    <path
                                        d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z" />
                                </svg>
                                <div class="text-sm wow fadeInUp" data-wow-duration="2s" data-wow-delay="1.9s">Telegram
                                    Automation</div>
                            </li>
                            <li class="flex items-center py-1">
                                <svg class="w-3 h-3 flex-shrink-0 fill-current text-blue-500 mr-2" viewBox="0 0 12 12">
                                    <path
                                        d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z" />
                                </svg>
                                <div class="text-sm wow fadeInUp" data-wow-duration="2s" data-wow-delay="2s">Report and
                                    Analytics</div>
                            </li>
                            <li class="flex items-center py-1">
                                <svg class="w-3 h-3 flex-shrink-0 fill-current text-blue-500 mr-2" viewBox="0 0 12 12">
                                    <path
                                        d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z" />
                                </svg>
                                <div class="text-sm wow fadeInUp" data-wow-duration="2s" data-wow-delay="2.5s">Mobile Access
                                </div>
                            </li>
                            <li class="flex items-center py-1">
                                <svg class="w-3 h-3 flex-shrink-0 fill-current text-blue-500 mr-2" viewBox="0 0 12 12">
                                    <path
                                        d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z" />
                                </svg>
                                <div class="text-sm wow fadeInUp" data-wow-duration="2s" data-wow-delay="2.6s">Users :
                                    <strong>10</strong> Users
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="my-6">
            <div class="grid items-center lg:grid-cols-3 wow bounceInUp" data-wow-duration="2s" data-wow-delay="0.5s">
                <p
                    class="font-semibold  focus:outline-none text-center sm:text-lg md:text-lg max-lg:text-md lg:text-left lg:max-w-[360px] text-gray-600">
                    Join the 50+ small and medium businesses already benefiting from smoother billing and happier
                    customers.</p>
                <div class="lg:grid-cols-2 mt-5 lg:col-span-2 max-lg:mt-6">
                    <div
                        class="grid items-center grid-cols-3 lg:gap-5 max-xl:gap-6 xl:grid-cols-2 xl:flex justify-items-center">
                        <img class="h-fit lg:h-8 xl:h-7"
                            src="https://www.glideapps.com/_next/image?url=%2Fimages%2Fhomepage-2023%2Flogos%2Fmercury.png&w=384&q=75"
                            alt="">
                        <img class="h-fit lg:h-8 xl:h-7"
                            src="https://www.glideapps.com/_next/image?url=%2Fimages%2Fhomepage-2023%2Flogos%2Fgeneral-electric.png&w=384&q=75"
                            alt="">
                        <img class="h-fit lg:h-8 xl:h-7"
                            src="https://www.glideapps.com/_next/image?url=%2Fimages%2Fhomepage-2023%2Flogos%2Fliberty.png&w=384&q=75"
                            alt="">
                        <img class="h-fit lg:h-8 xl:h-7"
                            src="https://www.glideapps.com/_next/image?url=%2Fimages%2Fhomepage-2023%2Flogos%2Feagle.png&w=384&q=75"
                            alt="">
                        <img class="h-fit lg:h-8 xl:h-7"
                            src="https://www.glideapps.com/_next/image?url=%2Fimages%2Fhomepage-2023%2Flogos%2Fhilton.png&w=384&q=75"
                            alt="">
                        <img class="h-fit lg:h-8 xl:h-7"
                            src="https://www.glideapps.com/_next/image?url=%2Fimages%2Fhomepage-2023%2Flogos%2Fpga.png&w=384&q=75"
                            alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

