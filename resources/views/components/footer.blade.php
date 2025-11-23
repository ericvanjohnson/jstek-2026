<!-- Footer -->
<footer
    class="bg-white dark:bg-[#141827] py-12 border-t border-gray-200 dark:border-slate-700 transition-colors duration-300">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <div class="md:col-span-1">
                <a href="#" class="flex items-center mb-4">
                    <span class="text-2xl font-display font-bold text-tek-blue-800 dark:text-tek-blue-400">JSTek</span>
                    <span
                        class="ml-1 bg-tek-orange-900 dark:bg-tek-orange-600 text-white text-xs font-bold py-1 px-2 rounded">2026</span>
                </a>
                <p class="text-gray-600 dark:text-slate-300 text-sm mb-6">
                    The inaugural JavaScript conference of 2026, bringing together developers, experts, and community
                    leaders.
                </p>
                <div class="flex space-x-4">
                    <a href="https://x.com/js_tek"
                       class="text-gray-600 dark:text-slate-300 hover:text-tek-blue-700 dark:hover:text-tek-blue-400 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                             fill="currentColor"
                             class="h-5 w-5">
                            <path
                                d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                        </svg>
                    </a>
                    <a href="https://mastodon.social/@jstek"
                       class="text-gray-600 dark:text-slate-300 hover:text-tek-blue-700 dark:hover:text-tek-blue-400 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                             fill="currentColor"
                             class="h-5 w-5">
                            <path
                                d="M23.268 5.313c-.35-2.578-2.617-4.61-5.304-5.004C17.51.242 15.792 0 11.813 0h-.03c-3.98 0-4.835.242-5.288.309C3.882.692 1.496 2.518.917 5.127.64 6.412.61 7.837.661 9.143c.074 1.874.088 3.745.26 5.611.118 1.24.325 2.47.62 3.68.55 2.237 2.777 4.098 4.96 4.857 2.336.792 4.849.923 7.256.38.265-.061.527-.132.786-.213.585-.184 1.27-.39 1.774-.753a.057.057 0 0 0 .023-.043v-1.809a.052.052 0 0 0-.02-.041.053.053 0 0 0-.046-.01 20.282 20.282 0 0 1-4.709.545c-2.73 0-3.463-1.284-3.674-1.818a5.593 5.593 0 0 1-.319-1.433.053.053 0 0 1 .066-.054c1.517.363 3.072.546 4.632.546.376 0 .75 0 1.125-.01 1.57-.044 3.224-.124 4.768-.422.038-.008.077-.015.11-.024 2.435-.464 4.753-1.92 4.989-5.604.008-.145.03-1.52.03-1.67.002-.512.167-3.63-.024-5.545zm-3.748 9.195h-2.561V8.29c0-1.309-.55-1.976-1.67-1.976-1.23 0-1.846.79-1.846 2.35v3.403h-2.546V8.663c0-1.56-.617-2.35-1.848-2.35-1.112 0-1.668.668-1.67 1.977v6.218H4.822V8.102c0-1.31.337-2.35 1.011-3.12.696-.77 1.608-1.164 2.74-1.164 1.311 0 2.302.5 2.962 1.498l.638 1.06.638-1.06c.66-.999 1.65-1.498 2.96-1.498 1.13 0 2.043.395 2.74 1.164.675.77 1.012 1.81 1.012 3.12z"/>
                        </svg>
                    </a>
                    <a href="https://bsky.app/profile/jstek.io"
                       class="text-gray-600 dark:text-slate-300 hover:text-tek-blue-700 dark:hover:text-tek-blue-400 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                             viewBox="0 0 16 16" aria-label="Bluesky logo">
                            <path
                                d="M3.468 1.948C5.303 3.325 7.276 6.118 8 7.616c.725-1.498 2.698-4.29 4.532-5.668C13.855.955 16 .186 16 2.632c0 .489-.28 4.105-.444 4.692-.572 2.04-2.653 2.561-4.504 2.246 3.236.551 4.06 2.375 2.281 4.2-3.376 3.464-4.852-.87-5.23-1.98-.07-.204-.103-.3-.103-.218 0-.081-.033.014-.102.218-.379 1.11-1.855 5.444-5.231 1.98-1.778-1.825-.955-3.65 2.28-4.2-1.85.315-3.932-.205-4.503-2.246C.28 6.737 0 3.12 0 2.632 0 .186 2.145.955 3.468 1.948"/>
                        </svg>
                    </a>
                </div>
            </div>

            <div>
                <h4 class="font-bold text-lg mb-4">Quick Links</h4>
                <ul class="space-y-2">
                    <li><a href="#about"
                           class="text-gray-600 dark:text-slate-300 hover:text-tek-blue-700 dark:hover:text-tek-blue-400 transition-colors">About</a>
                    </li>
                    <li><a href="#speakers"
                           class="text-gray-600 dark:text-slate-300 hover:text-tek-blue-700 dark:hover:text-tek-blue-400 transition-colors">Speakers</a>
                    </li>
                    {{--                    <li><a href="#schedule"--}}
                    {{--                           class="text-gray-600 dark:text-slate-300 hover:text-tek-blue-700 dark:hover:text-tek-blue-400 transition-colors">Schedule</a>--}}
                    {{--                    </li>--}}
                    <li><a href="#venue"
                           class="text-gray-600 dark:text-slate-300 hover:text-tek-blue-700 dark:hover:text-tek-blue-400 transition-colors">Venue</a>
                    </li>
                    <li><a href="#partners"
                           class="text-gray-600 dark:text-slate-300 hover:text-tek-blue-700 dark:hover:text-tek-blue-400 transition-colors">Partners</a>
                    </li>
                    <li><a href="#register"
                           class="text-gray-600 dark:text-slate-300 hover:text-tek-blue-700 dark:hover:text-tek-blue-400 transition-colors">Register</a>
                    </li>
                </ul>
            </div>

            <div>
                <h4 class="font-bold text-lg mb-4">Resources</h4>
                <ul class="space-y-2">
                    <li>
                        <button type="button"
                                onclick="window.dispatchEvent(new CustomEvent('open-coc-modal'))"
                                class="text-gray-600 dark:text-slate-300 hover:text-tek-blue-700 dark:hover:text-tek-blue-400 transition-colors cursor-pointer text-left">
                            Code
                            of Conduct
                        </button>
                    </li>
                    <li>
                        <button type="button"
                                onclick="window.dispatchEvent(new CustomEvent('open-travel-modal'))"
                                class="text-gray-600 dark:text-slate-300 hover:text-tek-blue-700 dark:hover:text-tek-blue-400 transition-colors cursor-pointer text-left">
                            Travel Information
                        </button>
                    </li>
                </ul>
            </div>

            <div>
                <h4 class="font-bold text-lg mb-4">Contact Us</h4>
                <ul class="space-y-2">
                    <li class="flex items-start">
                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="h-5 w-5 text-gray-600 dark:text-slate-400 mr-2 mt-0.5" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        <span class="text-gray-600 dark:text-slate-300"><a href="mailto:info@jstek.io"
                                                                           target="_blank">info@jstek.io</a></span>
                    </li>
                    <li class="flex items-start">
                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="h-5 w-5 text-gray-600 dark:text-slate-400 mr-2 mt-0.5" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        <span class="text-gray-600 dark:text-slate-300">
                            9245 Twin Trails Drive<br>
                            #720503<br>
                            San Diego, CA 92129<br>
                            United States
                        </span>
                    </li>
                </ul>
            </div>
        </div>

        <div
            class="border-t border-gray-200 dark:border-slate-600 mt-10 pt-6 flex flex-col md:flex-row justify-between items-center">
            <p class="text-gray-600 dark:text-slate-300 text-sm">
                &copy; {{ date('Y') }} JS TEK Conference. All rights reserved.
            </p>
            <div class="mt-4 md:mt-0 flex space-x-6">
                <button type="button"
                        onclick="window.dispatchEvent(new CustomEvent('open-privacy-policy-modal'))"
                        class="text-gray-600 dark:text-slate-300 hover:text-tek-blue-700 dark:hover:text-tek-blue-400 transition-colors cursor-pointer text-left">
                    Privacy Policy
                </button>
                <button type="button"
                        onclick="window.dispatchEvent(new CustomEvent('open-cookie-policy-modal'))"
                        class="text-gray-600 dark:text-slate-300 hover:text-tek-blue-700 dark:hover:text-tek-blue-400 transition-colors cursor-pointer text-left">
                    Cookie Policy
                </button>
            </div>
        </div>
    </div>
</footer>
