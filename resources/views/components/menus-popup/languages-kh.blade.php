<!-- Dropdown -->
<div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 "
    id="language-dropdown-kh">
    <ul class="py-2 font-medium" role="none" aria-labelledby="dropdownKh">
        <li>
            <a href="{{ route('locale','kh') }}" onclick="onClickLangKh()"
                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                role="menuitem">
                <div class="inline-flex items-center">
                    <img class="rounded-full w-5 h-5 mt-1 mr-2" src="{{ url('assets/img/icons/kh-flag.png') }}" alt="khmer">
                    ភាសាខ្មែរ
                </div>
            </a>
        </li>
        <li>
            <a href="{{ route('locale',"en") }}" onclick="onClickLangEn()"
                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                role="menuitem">
                <div class="inline-flex items-center">
                    <img class="rounded-full w-5 h-5 mt-1 mr-2" src="{{ url('assets/img/icons/en-flag.png') }}" alt="khmer">
                    English
                </div>
            </a>
        </li>
    </ul>
</div>
