<!-- Dropdown -->
<div class="z-50 absolute left-32 top-[46%] lg:left-auto lg:top-auto transition delay-150 duration-300 ease-in-out" x-show="open" @click.outside="open = false">
    <div class="bg-white shadow-lg rounded-2xl">
        <div class="flex">
            <div>
                <p class="px-6 py-2 text-lg text-gray-700 border-b font-bold text-center tracking-[-1%]">
                    @lang('messages.products')
                </p>
                <div class="my-2">
                    <ul class="-mt-1 px-6 py-2 text-sm">
                        <li>
                            <a class="flex items-center py-2" href="{{ route('invoicing.index') }}"><span
                                    class="font-medium text-[15px] tracking-[-1%] text-gray-600 hover:text-black transition">@lang('messages.invoicing')</span></a>
                        </li>
                        <li>
                            <a class="flex items-center py-2" href="{{ route('accounting.index') }}"><span
                                    class="font-medium text-[15px] tracking-[-1%] text-gray-600 hover:text-black transition">@lang('messages.accounting')</span></a>
                        </li>
                        <li>
                            <a class="flex items-center py-2" href="{{ route('inventories.index') }}"><span
                                    class="font-medium text-[15px] tracking-[-1%] text-gray-600 hover:text-black transition">@lang('messages.inventory_2')</span></a></li>
                        <li>
                            <a class="flex items-center py-2" href="{{ route('manufacturing.index') }}"><span
                                    class="font-medium text-[15px] tracking-[-1%] text-gray-600 hover:text-black transition">@lang('messages.manufacturing')</span></a>
                        </li>
                    </ul>
                </div>
            </div>
            {{-- <div>
                <p
                    class="px-6 py-4.5 text-neutrals-opaque-8 text-sm border-b border-neutrals-opaque-2 font-medium tracking-[-1%]">
                    By Use Case</p>
                <div class="my-2">
                    <ul class="space-y-2.5 -mt-1 px-6 py-4 text-sm">
                        <li><a class="flex items-center py-3 nav-xl:py-1 group" href="/use-cases/portals"><span
                                    class="font-medium text-[15px] tracking-[-1%] text-neutrals-opaque-12 hover:text-black transition">Portals</span></a>
                        </li>
                        <li><a class="flex items-center py-3 nav-xl:py-1 group" href="/use-cases/dashboards"><span
                                    class="font-medium text-[15px] tracking-[-1%] text-neutrals-opaque-12 hover:text-black transition">Dashboards</span></a>
                        </li>
                        <li><a class="flex items-center py-3 nav-xl:py-1 group" href="/use-cases/crm"><span
                                    class="font-medium text-[15px] tracking-[-1%] text-neutrals-opaque-12 hover:text-black transition">CRM</span></a>
                        </li>
                        <li><a class="flex items-center py-3 nav-xl:py-1 group" href="/use-cases/mobile-event-app"><span
                                    class="font-medium text-[15px] tracking-[-1%] text-neutrals-opaque-12 hover:text-black transition">Events</span></a>
                        </li>
                        <li><a class="flex items-center py-3 nav-xl:py-1 group"
                                href="/use-cases/work-order-management"><span
                                    class="font-medium text-[15px] tracking-[-1%] text-neutrals-opaque-12 hover:text-black transition">Work
                                    Orders</span></a></li>
                        <li><a class="flex items-center py-3 nav-xl:py-1 group" href="/use-cases/inspection-tools"><span
                                    class="font-medium text-[15px] tracking-[-1%] text-neutrals-opaque-12 hover:text-black transition">Inspections</span></a>
                        </li>
                        <li><a class="flex items-center py-3 nav-xl:py-1 group" href="/use-cases/inventory-management"><span
                                    class="font-medium text-[15px] tracking-[-1%] text-neutrals-opaque-12 hover:text-black transition">Inventory</span></a>
                        </li>
                        <li><a class="flex items-center py-3 nav-xl:py-1 group" href="/use-cases/field-sales"><span
                                    class="font-medium text-[15px] tracking-[-1%] text-neutrals-opaque-12 hover:text-black transition">Field
                                    Sales</span></a></li>
                        <li><a class="flex items-center py-3 nav-xl:py-1 group" href="/use-cases/knowledge-management"><span
                                    class="font-medium text-[15px] tracking-[-1%] text-neutrals-opaque-12 hover:text-black transition">Knowledge
                                    Management</span></a></li>
                    </ul>
                </div>
            </div>
            <div class="m-1 bg-neutrals-opaque-2 w-60 rounded-xl">
                <a
                    class="flex items-center justify-between pl-5 p-[7px] border-b border-neutrals-opaque-3 group"
                    href="/customers">
                    <p class="text-sm font-medium text-neutrals-opaque-8">Customers</p><button variant="secondary"
                        class="text-sm px-4 h-9 bg-alpha-light-2 hover:bg-alpha-light-3 text-neutrals-opaque-13 focus-visible:shadow-button-focus-gray group font-semibold whitespace-nowrap tracking-[-0.01em] transition focus:outline-none inline-flex items-center justify-center rounded-full">Read
                        more</button>
                </a><a class="inline-block p-5 rounded-md group" href="/customers/centerline-business-services">
                    <div class="bg-neutrals-opaque-6 aspect-w-16 aspect-h-9 rounded-[10.85px] overflow-hidden z-0"><img
                            alt="How Centerline Business Services saves 80 hours a week with custom apps powered by Glide AI"
                            fetchpriority="high" decoding="async" data-nimg="fill" sizes="100vw"
                            srcset="/_next/image?url=http%3A%2F%2Fres.cloudinary.com%2Fglide%2Fimage%2Fupload%2Fv1718794199%2Fglideapps.com%2Fszhhyzef4odpyv9syawy.png&amp;w=640&amp;q=75 640w, /_next/image?url=http%3A%2F%2Fres.cloudinary.com%2Fglide%2Fimage%2Fupload%2Fv1718794199%2Fglideapps.com%2Fszhhyzef4odpyv9syawy.png&amp;w=750&amp;q=75 750w, /_next/image?url=http%3A%2F%2Fres.cloudinary.com%2Fglide%2Fimage%2Fupload%2Fv1718794199%2Fglideapps.com%2Fszhhyzef4odpyv9syawy.png&amp;w=828&amp;q=75 828w, /_next/image?url=http%3A%2F%2Fres.cloudinary.com%2Fglide%2Fimage%2Fupload%2Fv1718794199%2Fglideapps.com%2Fszhhyzef4odpyv9syawy.png&amp;w=1080&amp;q=75 1080w, /_next/image?url=http%3A%2F%2Fres.cloudinary.com%2Fglide%2Fimage%2Fupload%2Fv1718794199%2Fglideapps.com%2Fszhhyzef4odpyv9syawy.png&amp;w=1200&amp;q=75 1200w, /_next/image?url=http%3A%2F%2Fres.cloudinary.com%2Fglide%2Fimage%2Fupload%2Fv1718794199%2Fglideapps.com%2Fszhhyzef4odpyv9syawy.png&amp;w=1920&amp;q=75 1920w, /_next/image?url=http%3A%2F%2Fres.cloudinary.com%2Fglide%2Fimage%2Fupload%2Fv1718794199%2Fglideapps.com%2Fszhhyzef4odpyv9syawy.png&amp;w=2048&amp;q=75 2048w, /_next/image?url=http%3A%2F%2Fres.cloudinary.com%2Fglide%2Fimage%2Fupload%2Fv1718794199%2Fglideapps.com%2Fszhhyzef4odpyv9syawy.png&amp;w=3840&amp;q=75 3840w"
                            src="/_next/image?url=http%3A%2F%2Fres.cloudinary.com%2Fglide%2Fimage%2Fupload%2Fv1718794199%2Fglideapps.com%2Fszhhyzef4odpyv9syawy.png&amp;w=3840&amp;q=75"
                            style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                        <div class="transition duration-300 bg-black/0 group-hover:bg-black/30"></div>
                    </div>
                    <p class="mt-4 text-sm font-semibold">How Centerline Business Services saves 80 hours a week with custom
                        apps powered by Glide AI</p>
                </a>
            </div> --}}
        </div>
    </div>
</div>
