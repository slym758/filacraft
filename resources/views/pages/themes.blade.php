<x-filament-panels::page>
    {{-- Preload Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <div x-data="filacraftThemes()" class="space-y-8">

        {{-- Language Switcher --}}
        <div class="flex justify-end -mb-4">
            <div class="inline-flex items-center rounded-lg ring-1 ring-gray-200 dark:ring-gray-700 overflow-hidden text-xs font-medium">
                <button
                    x-on:click="setLang('tr')"
                    :class="lang === 'tr' ? 'bg-primary-500 text-white' : 'bg-white dark:bg-gray-900 text-gray-600 dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-800'"
                    class="px-3 py-1.5 transition-colors"
                >TR</button>
                <button
                    x-on:click="setLang('en')"
                    :class="lang === 'en' ? 'bg-primary-500 text-white' : 'bg-white dark:bg-gray-900 text-gray-600 dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-800'"
                    class="px-3 py-1.5 transition-colors"
                >EN</button>
            </div>
        </div>

        {{-- Section: Theme Style --}}
        <div>
            <h2 class="text-lg font-semibold text-gray-900 dark:text-white mb-1" x-text="t.themeStyle"></h2>
            <p class="text-sm text-gray-500 dark:text-gray-400 mb-4" x-text="t.themeStyleDesc"></p>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-3xl">
                {{-- Ege Esintisi --}}
                <div
                    x-on:click="selectTheme('brisk')"
                    :class="currentTheme === 'brisk' ? 'ring-2 ring-primary-500' : 'ring-1 ring-gray-200 dark:ring-gray-700'"
                    class="group relative cursor-pointer rounded-2xl bg-white dark:bg-gray-900 overflow-hidden transition-all duration-200 hover:shadow-lg hover:-translate-y-0.5"
                >
                    <div class="aspect-[4/3] bg-gradient-to-br from-orange-50 via-amber-50 to-orange-100 dark:from-gray-800 dark:via-gray-800 dark:to-gray-700 p-5 flex flex-col gap-2">
                        <div class="flex gap-2">
                            <div class="h-2.5 w-14 rounded-full bg-primary-400/60"></div>
                            <div class="h-2.5 w-8 rounded-full bg-gray-300/60 dark:bg-gray-600/60"></div>
                        </div>
                        <div class="flex-1 rounded-3xl bg-white/70 dark:bg-gray-900/50 p-3 flex flex-col gap-2">
                            <div class="h-1.5 w-16 rounded-full bg-gray-300 dark:bg-gray-600"></div>
                            <div class="h-1.5 w-24 rounded-full bg-gray-200 dark:bg-gray-700"></div>
                            <div class="flex gap-2 mt-auto">
                                <div class="h-5 w-12 rounded-full bg-primary-400/80"></div>
                                <div class="h-5 w-12 rounded-full bg-gray-200 dark:bg-gray-700"></div>
                            </div>
                        </div>
                    </div>
                    <div class="p-4">
                        <div class="flex items-center justify-between">
                            <div>
                                <h3 class="font-semibold text-gray-900 dark:text-white" x-text="t.egeTitle"></h3>
                                <p class="text-sm text-gray-500 dark:text-gray-400" x-text="t.egeDesc"></p>
                            </div>
                            <div x-show="currentTheme === 'brisk'" x-transition class="flex-shrink-0 h-6 w-6 rounded-full bg-primary-500 text-white flex items-center justify-center">
                                <svg class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Akdeniz Ruhu --}}
                <div
                    x-on:click="selectTheme('akdeniz')"
                    :class="currentTheme === 'akdeniz' ? 'ring-2 ring-primary-500' : 'ring-1 ring-gray-200 dark:ring-gray-700'"
                    class="group relative cursor-pointer rounded-2xl bg-white dark:bg-gray-900 overflow-hidden transition-all duration-200 hover:shadow-lg hover:-translate-y-0.5"
                >
                    <div class="aspect-[4/3] bg-gray-100 dark:bg-gray-800 p-5 flex flex-col gap-2">
                        <div class="flex gap-3 flex-1">
                            <div class="w-12 rounded-lg flex flex-col gap-1.5 p-1.5 bg-primary-50">
                                <div class="h-2 w-full rounded-md bg-primary-100"></div>
                                <div class="h-2 w-full rounded-md bg-primary-200/60 border border-primary-200"></div>
                                <div class="h-2 w-8 rounded-md bg-primary-100/60"></div>
                                <div class="h-2 w-10 rounded-md bg-primary-100/60"></div>
                            </div>
                            <div class="flex-1 rounded-tl-2xl rounded-tr-lg rounded-b-lg bg-white dark:bg-gray-900/70 overflow-hidden flex flex-col">
                                <div class="h-4 bg-primary-50 flex items-center px-2 gap-1 border-b border-primary-100/50">
                                    <div class="h-1.5 w-6 rounded-full bg-primary-200"></div>
                                    <div class="h-1.5 w-4 rounded-full bg-primary-100"></div>
                                </div>
                                <div class="flex-1 p-2 flex flex-col gap-1.5">
                                    <div class="flex gap-1.5">
                                        <div class="h-5 flex-1 rounded-md bg-gray-50 dark:bg-gray-700 border border-gray-200/50"></div>
                                        <div class="h-5 flex-1 rounded-md bg-gray-50 dark:bg-gray-700 border border-gray-200/50"></div>
                                    </div>
                                    <div class="flex-1 rounded-md bg-gray-50 dark:bg-gray-700 border border-gray-200/50 p-1.5 flex flex-col gap-1">
                                        <div class="h-1 w-12 rounded-full bg-gray-200 dark:bg-gray-600"></div>
                                        <div class="h-1 w-20 rounded-full bg-gray-100 dark:bg-gray-700"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-4">
                        <div class="flex items-center justify-between">
                            <div>
                                <h3 class="font-semibold text-gray-900 dark:text-white" x-text="t.akdenizTitle"></h3>
                                <p class="text-sm text-gray-500 dark:text-gray-400" x-text="t.akdenizDesc"></p>
                            </div>
                            <div x-show="currentTheme === 'akdeniz'" x-transition class="flex-shrink-0 h-6 w-6 rounded-full bg-primary-500 text-white flex items-center justify-center">
                                <svg class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Divider --}}
        <div class="border-t border-gray-200 dark:border-gray-700"></div>

        {{-- Section: Color Palette --}}
        <div>
            <h2 class="text-lg font-semibold text-gray-900 dark:text-white mb-1" x-text="t.colorPalette"></h2>
            <p class="text-sm text-gray-500 dark:text-gray-400 mb-5" x-text="t.colorPaletteDesc"></p>

            <div class="flex flex-wrap gap-5">
                <template x-for="(palette, key) in palettes" :key="key">
                    <button
                        x-on:click="selectColor(key)"
                        :title="palette.label"
                        class="group relative flex flex-col items-center gap-2.5"
                    >
                        <div
                            class="h-12 w-12 rounded-full transition-all duration-200 group-hover:scale-110 group-hover:shadow-lg"
                            :class="currentColor === key
                                ? 'ring-2 ring-offset-2 ring-offset-white dark:ring-offset-gray-900 scale-110 shadow-lg'
                                : 'ring-1 ring-black/10 dark:ring-white/10'"
                            :style="'background-color:' + palette.hex"
                        >
                            <div x-show="currentColor === key" x-transition class="h-full w-full flex items-center justify-center">
                                <svg class="h-5 w-5 text-white drop-shadow-md" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>
                            </div>
                        </div>
                        <span
                            class="text-xs transition-colors duration-200"
                            :class="currentColor === key ? 'font-semibold text-gray-900 dark:text-white' : 'text-gray-500 dark:text-gray-400'"
                            x-text="t.paletteLabels[key]"
                        ></span>
                    </button>
                </template>
            </div>
        </div>

        {{-- Divider --}}
        <div class="border-t border-gray-200 dark:border-gray-700"></div>

        {{-- Section: Font Picker --}}
        <div>
            <h2 class="text-lg font-semibold text-gray-900 dark:text-white mb-1" x-text="t.fontPicker"></h2>
            <p class="text-sm text-gray-500 dark:text-gray-400 mb-5" x-text="t.fontPickerDesc"></p>

            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-3 max-w-4xl">
                <template x-for="(font, key) in fonts" :key="key">
                    <button
                        x-on:click="selectFont(key)"
                        :class="currentFont === key
                            ? 'ring-2 ring-primary-500 bg-primary-50 dark:bg-primary-950/30'
                            : 'ring-1 ring-gray-200 dark:ring-gray-700 bg-white dark:bg-gray-900 hover:ring-gray-300 dark:hover:ring-gray-600'"
                        class="relative rounded-xl p-4 text-center transition-all duration-200 hover:-translate-y-0.5"
                    >
                        <div class="text-lg font-semibold text-gray-900 dark:text-white mb-1">Aa</div>
                        <div class="text-xs text-gray-500 dark:text-gray-400" x-text="font.label"></div>
                        <div x-show="currentFont === key" x-transition class="absolute top-2 right-2 h-4 w-4 rounded-full bg-primary-500 text-white flex items-center justify-center">
                            <svg class="h-2.5 w-2.5" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>
                        </div>
                    </button>
                </template>
            </div>
        </div>

        {{-- Divider --}}
        <div class="border-t border-gray-200 dark:border-gray-700"></div>

        {{-- Section: Border Radius --}}
        <div>
            <h2 class="text-lg font-semibold text-gray-900 dark:text-white mb-1" x-text="t.borderRadius"></h2>
            <p class="text-sm text-gray-500 dark:text-gray-400 mb-5" x-text="t.borderRadiusDesc"></p>

            <div class="flex flex-wrap gap-4 max-w-2xl">
                <template x-for="(opt, key) in radiusOptions" :key="key">
                    <button
                        x-on:click="selectRadius(key)"
                        :class="currentRadius === key
                            ? 'ring-2 ring-primary-500 bg-primary-50 dark:bg-primary-950/30'
                            : 'ring-1 ring-gray-200 dark:ring-gray-700 bg-white dark:bg-gray-900 hover:ring-gray-300 dark:hover:ring-gray-600'"
                        class="relative flex flex-col items-center gap-3 rounded-xl p-5 w-28 transition-all duration-200 hover:-translate-y-0.5"
                    >
                        <div class="flex gap-1.5">
                            <div class="h-6 w-6 bg-primary-400" :style="opt.style1"></div>
                            <div class="h-6 w-10 bg-primary-300" :style="opt.style2"></div>
                        </div>
                        <span class="text-xs font-medium text-gray-700 dark:text-gray-300" x-text="t.radiusLabels[key]"></span>
                    </button>
                </template>
            </div>
        </div>

        {{-- Divider --}}
        <div class="border-t border-gray-200 dark:border-gray-700"></div>

        {{-- Section: Density --}}
        <div>
            <h2 class="text-lg font-semibold text-gray-900 dark:text-white mb-1" x-text="t.density"></h2>
            <p class="text-sm text-gray-500 dark:text-gray-400 mb-5" x-text="t.densityDesc"></p>

            <div class="flex flex-wrap gap-4 max-w-2xl">
                <template x-for="(opt, key) in densityOptions" :key="key">
                    <button
                        x-on:click="selectDensity(key)"
                        :class="currentDensity === key
                            ? 'ring-2 ring-primary-500 bg-primary-50 dark:bg-primary-950/30'
                            : 'ring-1 ring-gray-200 dark:ring-gray-700 bg-white dark:bg-gray-900 hover:ring-gray-300 dark:hover:ring-gray-600'"
                        class="relative flex flex-col items-center gap-2 rounded-xl p-5 w-36 transition-all duration-200 hover:-translate-y-0.5"
                    >
                        <div class="w-full flex flex-col" :class="opt.gap">
                            <div class="h-1.5 w-full rounded-full bg-primary-300"></div>
                            <div class="h-1.5 w-3/4 rounded-full bg-primary-200"></div>
                            <div class="h-1.5 w-5/6 rounded-full bg-primary-300"></div>
                        </div>
                        <div class="mt-1">
                            <span class="text-xs font-medium text-gray-700 dark:text-gray-300 block" x-text="t.densityLabels[key]"></span>
                            <span class="text-[10px] text-gray-400 dark:text-gray-500 block" x-text="t.densityDescs[key]"></span>
                        </div>
                    </button>
                </template>
            </div>
        </div>

        {{-- Divider --}}
        <div class="border-t border-gray-200 dark:border-gray-700"></div>

        {{-- Section: Error Page Style --}}
        <div>
            <h2 class="text-lg font-semibold text-gray-900 dark:text-white mb-1" x-text="t.errorPageStyle"></h2>
            <p class="text-sm text-gray-500 dark:text-gray-400 mb-5" x-text="t.errorPageStyleDesc"></p>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-5 max-w-4xl">
                <template x-for="(opt, key) in errorStyles" :key="key">
                    <div
                        x-on:click="selectErrorStyle(key)"
                        :class="currentErrorStyle === key
                            ? 'ring-2 ring-primary-500'
                            : 'ring-1 ring-gray-200 dark:ring-gray-700 hover:ring-gray-300 dark:hover:ring-gray-600'"
                        class="group relative cursor-pointer rounded-2xl bg-white dark:bg-gray-900 overflow-hidden transition-all duration-200 hover:shadow-lg hover:-translate-y-0.5"
                    >
                        <div class="aspect-[4/3] flex items-center justify-center p-6" :style="opt.bgStyle">
                            <div :style="opt.cardStyle" class="text-center w-full rounded-xl p-4">
                                <div class="text-3xl font-bold mb-1" :style="opt.numStyle">404</div>
                                <div class="text-[10px] opacity-60" :style="opt.textStyle" x-text="t.pageNotFound"></div>
                            </div>
                        </div>
                        <div class="p-4">
                            <div class="flex items-center justify-between">
                                <div>
                                    <h3 class="font-semibold text-gray-900 dark:text-white text-sm" x-text="t.errorLabels[key]"></h3>
                                    <p class="text-xs text-gray-500 dark:text-gray-400" x-text="t.errorDescs[key]"></p>
                                </div>
                                <div class="flex items-center gap-2">
                                    <button
                                        x-on:click.stop="previewError(key)"
                                        class="inline-flex items-center gap-1 px-2.5 py-1 rounded-lg text-xs font-medium bg-gray-100 dark:bg-gray-800 text-gray-600 dark:text-gray-300 hover:bg-gray-200 dark:hover:bg-gray-700 transition-colors"
                                    >
                                        <svg class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" /><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                                        <span x-text="t.preview"></span>
                                    </button>
                                    <div x-show="currentErrorStyle === key" x-transition class="flex-shrink-0 h-5 w-5 rounded-full bg-primary-500 text-white flex items-center justify-center">
                                        <svg class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </template>
            </div>

            {{-- Error Preview Modal --}}
            <div x-show="errorPreviewUrl" x-transition.opacity class="fixed inset-0 z-50 flex items-center justify-center bg-black/60 backdrop-blur-sm" x-on:click.self="errorPreviewUrl = null" x-on:keydown.escape.window="errorPreviewUrl = null">
                <div class="relative w-full max-w-5xl mx-4" x-show="errorPreviewUrl" x-transition.scale.origin.center>
                    <button x-on:click="errorPreviewUrl = null" class="absolute -top-10 right-0 text-white/80 hover:text-white transition-colors flex items-center gap-1.5 text-sm">
                        <span x-text="t.close"></span>
                        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" /></svg>
                    </button>
                    <div class="rounded-2xl overflow-hidden shadow-2xl bg-white">
                        <div class="flex items-center gap-2 px-4 py-2 bg-gray-100 border-b border-gray-200">
                            <div class="flex gap-1.5">
                                <div class="h-3 w-3 rounded-full bg-red-400"></div>
                                <div class="h-3 w-3 rounded-full bg-yellow-400"></div>
                                <div class="h-3 w-3 rounded-full bg-green-400"></div>
                            </div>
                            <div class="flex-1 flex justify-center">
                                <div class="px-4 py-0.5 rounded-md bg-white text-xs text-gray-400 border border-gray-200" x-text="errorPreviewUrl"></div>
                            </div>
                            <div class="flex gap-2">
                                <template x-for="ec in ['404', '403', '500']" :key="ec">
                                    <button
                                        x-on:click="switchPreviewCode(ec)"
                                        :class="errorPreviewCode === ec ? 'bg-primary-500 text-white' : 'bg-white text-gray-600 hover:bg-gray-50'"
                                        class="px-2.5 py-0.5 rounded-md text-xs font-medium border border-gray-200 transition-colors"
                                        x-text="ec"
                                    ></button>
                                </template>
                            </div>
                        </div>
                        <iframe :src="errorPreviewUrl" class="w-full h-[70vh] border-0"></iframe>
                    </div>
                </div>
            </div>
        </div>

        {{-- Divider --}}
        <div class="border-t border-gray-200 dark:border-gray-700"></div>

        {{-- Section: Table Row Style --}}
        <div>
            <h2 class="text-lg font-semibold text-gray-900 dark:text-white mb-1" x-text="t.tableStyle"></h2>
            <p class="text-sm text-gray-500 dark:text-gray-400 mb-5" x-text="t.tableStyleDesc"></p>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 max-w-3xl">
                <template x-for="(opt, key) in tableStyleOptions" :key="key">
                    <button
                        x-on:click="selectTableStyle(key)"
                        :class="currentTableStyle === key
                            ? 'ring-2 ring-primary-500 bg-primary-50 dark:bg-primary-950/30'
                            : 'ring-1 ring-gray-200 dark:ring-gray-700 bg-white dark:bg-gray-900 hover:ring-gray-300 dark:hover:ring-gray-600'"
                        class="relative flex flex-col items-center gap-3 rounded-xl p-4 transition-all duration-200 hover:-translate-y-0.5"
                    >
                        {{-- Mini table preview --}}
                        <div class="w-full space-y-0">
                            <template x-for="(row, i) in [0,1,2,3]" :key="i">
                                <div
                                    class="flex gap-1 py-1.5 px-2"
                                    :class="opt.rowClass(i)"
                                >
                                    <div class="h-1.5 w-6 rounded-full" :class="i === 0 ? 'bg-gray-400 dark:bg-gray-500' : 'bg-gray-300 dark:bg-gray-600'"></div>
                                    <div class="h-1.5 flex-1 rounded-full" :class="i === 0 ? 'bg-gray-400 dark:bg-gray-500' : 'bg-gray-200 dark:bg-gray-700'"></div>
                                    <div class="h-1.5 w-4 rounded-full" :class="i === 0 ? 'bg-gray-400 dark:bg-gray-500' : 'bg-gray-200 dark:bg-gray-700'"></div>
                                </div>
                            </template>
                        </div>
                        <span class="text-xs font-medium text-gray-700 dark:text-gray-300" x-text="t.tableStyleLabels[key]"></span>
                    </button>
                </template>
            </div>
        </div>

        {{-- Divider --}}
        <div class="border-t border-gray-200 dark:border-gray-700"></div>

        {{-- Section: Card/Section Style --}}
        <div>
            <h2 class="text-lg font-semibold text-gray-900 dark:text-white mb-1" x-text="t.cardStyle"></h2>
            <p class="text-sm text-gray-500 dark:text-gray-400 mb-5" x-text="t.cardStyleDesc"></p>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 max-w-3xl">
                <template x-for="(opt, key) in cardStyleOptions" :key="key">
                    <button
                        x-on:click="selectCardStyle(key)"
                        :class="currentCardStyle === key
                            ? 'ring-2 ring-primary-500 bg-primary-50 dark:bg-primary-950/30'
                            : 'ring-1 ring-gray-200 dark:ring-gray-700 bg-white dark:bg-gray-900 hover:ring-gray-300 dark:hover:ring-gray-600'"
                        class="relative flex flex-col items-center gap-3 rounded-xl p-5 transition-all duration-200 hover:-translate-y-0.5"
                    >
                        {{-- Card preview --}}
                        <div class="w-16 h-12 rounded-lg" :class="opt.previewClass" :style="opt.previewStyle"></div>
                        <span class="text-xs font-medium text-gray-700 dark:text-gray-300" x-text="t.cardStyleLabels[key]"></span>
                    </button>
                </template>
            </div>
        </div>

        {{-- Divider --}}
        <div class="border-t border-gray-200 dark:border-gray-700"></div>

        {{-- Section: Reset --}}
        <div>
            <h2 class="text-lg font-semibold text-gray-900 dark:text-white mb-1" x-text="t.themeSettings"></h2>
            <p class="text-sm text-gray-500 dark:text-gray-400 mb-5" x-text="t.themeSettingsDesc"></p>

            <button
                x-on:click="resetSettings()"
                class="inline-flex items-center gap-2 px-5 py-2.5 rounded-xl bg-red-50 dark:bg-red-950/30 ring-1 ring-red-200 dark:ring-red-800 text-sm font-medium text-red-600 dark:text-red-400 hover:ring-red-300 dark:hover:ring-red-700 hover:-translate-y-0.5 transition-all duration-200"
            >
                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182" /></svg>
                <span x-text="t.resetAll"></span>
            </button>
        </div>
    </div>

    <script>
        var filacraftTranslations = {
            tr: {
                themeStyle: 'Tema Stili',
                themeStyleDesc: 'Panelin genel gorunumunu secin',
                egeTitle: 'Ege Esintisi',
                egeDesc: 'Yumusak & yuvarlak pill stili',
                akdenizTitle: 'Akdeniz Ruhu',
                akdenizDesc: 'Pastel sidebar & navbar',
                colorPalette: 'Renk Paleti',
                colorPaletteDesc: 'Ana rengi secin — tum panel bu renge gore sekillenecek',
                fontPicker: 'Yazi Tipi',
                fontPickerDesc: 'Panel genelinde kullanilacak fontu secin',
                borderRadius: 'Kose Yuvarlaklik',
                borderRadiusDesc: 'Bilesenlerin kose yuvarlakligi',
                density: 'Yogunluk',
                densityDesc: 'Icerik araligi ve bosluk miktari',
                errorPageStyle: 'Hata Sayfasi Stili',
                errorPageStyleDesc: '404, 403, 500 hata sayfalarinin gorunumu',
                pageNotFound: 'Sayfa Bulunamadi',
                themeSettings: 'Tema Ayarlari',
                themeSettingsDesc: 'Tum ayarlari varsayilana dondur',
                resetAll: 'Tum Ayarlari Sifirla',
                resetConfirm: 'Tum tema ayarlarini sifirlamak istediginize emin misiniz?',
                preview: 'Goster',
                close: 'Kapat',
                paletteLabels: {
                    'default': 'Varsayilan', 'turquoise': 'Turkuaz', 'ocean': 'Okyanus', 'emerald': 'Zumrut',
                    'violet': 'Mor', 'rose': 'Gul', 'amber': 'Amber', 'indigo': 'Indigo',
                    'slate': 'Celik', 'cyan': 'Cyan', 'fuchsia': 'Fusya', 'red': 'Kirmizi',
                    'lime': 'Yesil', 'sky': 'Gok'
                },
                radiusLabels: { 'sharp': 'Keskin', 'small': 'Hafif', 'default': 'Normal', 'large': 'Yuvarlak' },
                densityLabels: { 'compact': 'Sikisik', 'default': 'Normal', 'comfortable': 'Ferah' },
                densityDescs: { 'compact': 'Daha az bosluk', 'default': 'Varsayilan aralik', 'comfortable': 'Daha fazla bosluk' },
                errorLabels: { 'default': 'Varsayilan', 'minimal': 'Minimal', 'illustrated': 'Illustrasyonlu', 'gradient': 'Gradient' },
                errorDescs: { 'default': 'Laravel varsayilani', 'minimal': 'Sade ve temiz', 'illustrated': 'Canli ve renkli', 'gradient': 'Modern ve etkileyici' },
                tableStyle: 'Tablo Satir Stili',
                tableStyleDesc: 'Tablolardaki satirlarin gorunum bicimi',
                tableStyleLabels: { 'default': 'Varsayilan', 'striped': 'Cizgili', 'bordered': 'Cevrelemeli', 'minimal': 'Minimal' },
                cardStyle: 'Kart Stili',
                cardStyleDesc: 'Kartlarin ve section\'larin gorunum bicimi',
                cardStyleLabels: { 'default': 'Varsayilan', 'flat': 'Duz', 'raised': 'Kabarik', 'bordered': 'Cevrelemeli' },
            },
            en: {
                themeStyle: 'Theme Style',
                themeStyleDesc: 'Choose the overall look of the panel',
                egeTitle: 'Aegean Breeze',
                egeDesc: 'Soft & rounded pill style',
                akdenizTitle: 'Mediterranean Soul',
                akdenizDesc: 'Pastel sidebar & navbar',
                colorPalette: 'Color Palette',
                colorPaletteDesc: 'Pick a primary color — the entire panel adapts to it',
                fontPicker: 'Font',
                fontPickerDesc: 'Choose the font used across the panel',
                borderRadius: 'Border Radius',
                borderRadiusDesc: 'Corner roundness of components',
                density: 'Density',
                densityDesc: 'Content spacing and gap amount',
                errorPageStyle: 'Error Page Style',
                errorPageStyleDesc: 'Appearance of 404, 403, 500 error pages',
                pageNotFound: 'Page Not Found',
                themeSettings: 'Theme Settings',
                themeSettingsDesc: 'Reset all settings to defaults',
                resetAll: 'Reset All Settings',
                resetConfirm: 'Are you sure you want to reset all theme settings?',
                preview: 'Preview',
                close: 'Close',
                paletteLabels: {
                    'default': 'Default', 'turquoise': 'Turquoise', 'ocean': 'Ocean', 'emerald': 'Emerald',
                    'violet': 'Violet', 'rose': 'Rose', 'amber': 'Amber', 'indigo': 'Indigo',
                    'slate': 'Slate', 'cyan': 'Cyan', 'fuchsia': 'Fuchsia', 'red': 'Red',
                    'lime': 'Lime', 'sky': 'Sky'
                },
                radiusLabels: { 'sharp': 'Sharp', 'small': 'Slight', 'default': 'Normal', 'large': 'Rounded' },
                densityLabels: { 'compact': 'Compact', 'default': 'Normal', 'comfortable': 'Comfortable' },
                densityDescs: { 'compact': 'Less spacing', 'default': 'Default spacing', 'comfortable': 'More spacing' },
                errorLabels: { 'default': 'Default', 'minimal': 'Minimal', 'illustrated': 'Illustrated', 'gradient': 'Gradient' },
                errorDescs: { 'default': 'Laravel default', 'minimal': 'Clean and simple', 'illustrated': 'Vivid and colorful', 'gradient': 'Modern and striking' },
                tableStyle: 'Table Row Style',
                tableStyleDesc: 'Appearance of table rows',
                tableStyleLabels: { 'default': 'Default', 'striped': 'Striped', 'bordered': 'Bordered', 'minimal': 'Minimal' },
                cardStyle: 'Card Style',
                cardStyleDesc: 'Appearance of cards and sections',
                cardStyleLabels: { 'default': 'Default', 'flat': 'Flat', 'raised': 'Raised', 'bordered': 'Bordered' },
            }
        };

        function filacraftThemes() {
            return {
                lang: localStorage.getItem('filacraft-lang') || 'tr',

                get t() {
                    return filacraftTranslations[this.lang] || filacraftTranslations.tr;
                },

                setLang(l) {
                    this.lang = l;
                    localStorage.setItem('filacraft-lang', l);
                    this.saveToDb();
                },

                currentTheme: (() => { var t = localStorage.getItem('filacraft-theme'); if (t === 'ege') { localStorage.setItem('filacraft-theme', 'brisk'); return 'brisk'; } return t || 'brisk'; })(),
                currentColor: localStorage.getItem('filacraft-color') || 'default',
                currentFont: localStorage.getItem('filacraft-font') || 'default',
                currentRadius: localStorage.getItem('filacraft-radius') || 'default',
                currentDensity: localStorage.getItem('filacraft-density') || 'default',
                currentTableStyle: localStorage.getItem('filacraft-table-style') || 'default',
                currentCardStyle: localStorage.getItem('filacraft-card-style') || 'default',
                currentErrorStyle: (() => {
                    var match = document.cookie.match(/filacraft-error-style=([^;]+)/);
                    return match ? match[1] : 'default';
                })(),

                fonts: {
                    'default':       { label: 'Kumbh Sans' },
                    'Inter':         { label: 'Inter' },
                    'Poppins':       { label: 'Poppins' },
                    'Nunito':        { label: 'Nunito' },
                    'Plus+Jakarta+Sans': { label: 'Jakarta Sans' },
                    'DM+Sans':       { label: 'DM Sans' },
                    'Outfit':        { label: 'Outfit' },
                    'Manrope':       { label: 'Manrope' },
                    'Space+Grotesk': { label: 'Space Grotesk' },
                    'Sora':          { label: 'Sora' },
                    'Lexend':        { label: 'Lexend' },
                },

                radiusOptions: {
                    'sharp':   { label: 'Keskin',   style1: 'border-radius:2px', style2: 'border-radius:2px' },
                    'small':   { label: 'Hafif',    style1: 'border-radius:4px', style2: 'border-radius:4px' },
                    'default': { label: 'Normal',   style1: 'border-radius:8px', style2: 'border-radius:8px' },
                    'large':   { label: 'Yuvarlak', style1: 'border-radius:50%', style2: 'border-radius:9999px' },
                },

                densityOptions: {
                    'compact':     { label: 'Sikisik',  desc: 'Daha az bosluk',     gap: 'gap-0.5' },
                    'default':     { label: 'Normal',   desc: 'Varsayilan aralik',   gap: 'gap-1.5' },
                    'comfortable': { label: 'Ferah',    desc: 'Daha fazla bosluk',   gap: 'gap-3' },
                },

                errorStyles: {
                    'default': {
                        label: 'Varsayilan',
                        desc: 'Laravel / Filament varsayilani',
                        bgStyle: 'background:#f3f4f6',
                        cardStyle: '',
                        numStyle: 'color:#6b7280; font-size:3rem',
                        textStyle: 'color:#9ca3af'
                    },
                    'minimal': {
                        label: 'Minimal',
                        desc: 'Sade ve temiz',
                        bgStyle: 'background:#fff',
                        cardStyle: '',
                        numStyle: 'color:#e5e7eb; font-size:3rem',
                        textStyle: 'color:#9ca3af'
                    },
                    'illustrated': {
                        label: 'Illustrasyonlu',
                        desc: 'Canli ve renkli',
                        bgStyle: 'background:linear-gradient(135deg,#fff7ed,#fff,#fffbeb)',
                        cardStyle: '',
                        numStyle: 'color:#f97316; font-size:3rem',
                        textStyle: 'color:#6b7280'
                    },
                    'gradient': {
                        label: 'Gradient',
                        desc: 'Modern ve etkileyici',
                        bgStyle: 'background:linear-gradient(135deg,#1e1b4b,#4338ca,#818cf8)',
                        cardStyle: 'background:rgba(255,255,255,0.1); backdrop-filter:blur(10px); border:1px solid rgba(255,255,255,0.15)',
                        numStyle: 'color:rgba(255,255,255,0.9); font-size:3rem',
                        textStyle: 'color:rgba(255,255,255,0.6)'
                    },
                },

                tableStyleOptions: {
                    'default': {
                        rowClass: function(i) { return ''; }
                    },
                    'striped': {
                        rowClass: function(i) { return i > 0 && i % 2 === 0 ? 'bg-gray-100/60 dark:bg-gray-800/40 rounded' : ''; }
                    },
                    'bordered': {
                        rowClass: function(i) { return 'border-b border-gray-200 dark:border-gray-700' + (i > 0 ? ' border-x' : ''); }
                    },
                    'minimal': {
                        rowClass: function(i) { return i === 0 ? 'opacity-50' : ''; }
                    },
                },

                cardStyleOptions: {
                    'default': {
                        previewClass: 'bg-white dark:bg-gray-800 shadow-sm border border-gray-200 dark:border-gray-700',
                        previewStyle: ''
                    },
                    'flat': {
                        previewClass: 'bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700',
                        previewStyle: 'box-shadow: none'
                    },
                    'raised': {
                        previewClass: 'bg-white dark:bg-gray-800',
                        previewStyle: 'box-shadow: 0 10px 25px -5px rgba(0,0,0,0.15)'
                    },
                    'bordered': {
                        previewClass: 'bg-white dark:bg-gray-800',
                        previewStyle: 'border: 2px solid #d1d5db; box-shadow: none'
                    },
                },

                palettes: {
                    'default':   { label: 'Varsayilan', hex: '#d97234', shades: { '50':'oklch(0.977 0.014 48.67)', '100':'oklch(0.950 0.033 48.67)', '200':'oklch(0.905 0.063 48.67)', '300':'oklch(0.840 0.106 48.67)', '400':'oklch(0.754 0.150 48.67)', '500':'oklch(0.683 0.170 48.67)', '600':'oklch(0.598 0.169 48.67)', '700':'oklch(0.515 0.149 48.67)', '800':'oklch(0.446 0.123 48.67)', '900':'oklch(0.395 0.100 48.67)', '950':'oklch(0.278 0.071 48.67)' }},
                    'turquoise': { label: 'Turkuaz',    hex: '#1FB6B2', shades: { '50':'oklch(0.977 0.014 191.96)', '100':'oklch(0.950 0.033 191.96)', '200':'oklch(0.905 0.063 191.96)', '300':'oklch(0.840 0.106 191.96)', '400':'oklch(0.754 0.150 191.96)', '500':'oklch(0.683 0.170 191.96)', '600':'oklch(0.598 0.169 191.96)', '700':'oklch(0.515 0.149 191.96)', '800':'oklch(0.446 0.123 191.96)', '900':'oklch(0.395 0.100 191.96)', '950':'oklch(0.278 0.071 191.96)' }},
                    'ocean':     { label: 'Okyanus',    hex: '#3B82F6', shades: { '50':'oklch(0.977 0.014 259.82)', '100':'oklch(0.950 0.033 259.82)', '200':'oklch(0.905 0.063 259.82)', '300':'oklch(0.840 0.106 259.82)', '400':'oklch(0.754 0.150 259.82)', '500':'oklch(0.683 0.170 259.82)', '600':'oklch(0.598 0.169 259.82)', '700':'oklch(0.515 0.149 259.82)', '800':'oklch(0.446 0.123 259.82)', '900':'oklch(0.395 0.100 259.82)', '950':'oklch(0.278 0.071 259.82)' }},
                    'emerald':   { label: 'Zumrut',     hex: '#10B981', shades: { '50':'oklch(0.977 0.014 162.48)', '100':'oklch(0.950 0.033 162.48)', '200':'oklch(0.905 0.063 162.48)', '300':'oklch(0.840 0.106 162.48)', '400':'oklch(0.754 0.150 162.48)', '500':'oklch(0.683 0.170 162.48)', '600':'oklch(0.598 0.169 162.48)', '700':'oklch(0.515 0.149 162.48)', '800':'oklch(0.446 0.123 162.48)', '900':'oklch(0.395 0.100 162.48)', '950':'oklch(0.278 0.071 162.48)' }},
                    'violet':    { label: 'Mor',        hex: '#8B5CF6', shades: { '50':'oklch(0.977 0.014 292.72)', '100':'oklch(0.950 0.033 292.72)', '200':'oklch(0.905 0.063 292.72)', '300':'oklch(0.840 0.106 292.72)', '400':'oklch(0.754 0.150 292.72)', '500':'oklch(0.683 0.170 292.72)', '600':'oklch(0.598 0.169 292.72)', '700':'oklch(0.515 0.149 292.72)', '800':'oklch(0.446 0.123 292.72)', '900':'oklch(0.395 0.100 292.72)', '950':'oklch(0.278 0.071 292.72)' }},
                    'rose':      { label: 'Gul',        hex: '#F43F5E', shades: { '50':'oklch(0.977 0.014 16.44)', '100':'oklch(0.950 0.033 16.44)', '200':'oklch(0.905 0.063 16.44)', '300':'oklch(0.840 0.106 16.44)', '400':'oklch(0.754 0.150 16.44)', '500':'oklch(0.683 0.170 16.44)', '600':'oklch(0.598 0.169 16.44)', '700':'oklch(0.515 0.149 16.44)', '800':'oklch(0.446 0.123 16.44)', '900':'oklch(0.395 0.100 16.44)', '950':'oklch(0.278 0.071 16.44)' }},
                    'amber':     { label: 'Amber',      hex: '#F59E0B', shades: { '50':'oklch(0.977 0.014 70.08)', '100':'oklch(0.950 0.033 70.08)', '200':'oklch(0.905 0.063 70.08)', '300':'oklch(0.840 0.106 70.08)', '400':'oklch(0.754 0.150 70.08)', '500':'oklch(0.683 0.170 70.08)', '600':'oklch(0.598 0.169 70.08)', '700':'oklch(0.515 0.149 70.08)', '800':'oklch(0.446 0.123 70.08)', '900':'oklch(0.395 0.100 70.08)', '950':'oklch(0.278 0.071 70.08)' }},
                    'indigo':    { label: 'Indigo',     hex: '#6366F1', shades: { '50':'oklch(0.977 0.014 277.12)', '100':'oklch(0.950 0.033 277.12)', '200':'oklch(0.905 0.063 277.12)', '300':'oklch(0.840 0.106 277.12)', '400':'oklch(0.754 0.150 277.12)', '500':'oklch(0.683 0.170 277.12)', '600':'oklch(0.598 0.169 277.12)', '700':'oklch(0.515 0.149 277.12)', '800':'oklch(0.446 0.123 277.12)', '900':'oklch(0.395 0.100 277.12)', '950':'oklch(0.278 0.071 277.12)' }},
                    'slate':     { label: 'Celik',      hex: '#64748B', shades: { '50':'oklch(0.977 0.014 257.42)', '100':'oklch(0.950 0.033 257.42)', '200':'oklch(0.905 0.063 257.42)', '300':'oklch(0.840 0.106 257.42)', '400':'oklch(0.754 0.150 257.42)', '500':'oklch(0.683 0.170 257.42)', '600':'oklch(0.598 0.169 257.42)', '700':'oklch(0.515 0.149 257.42)', '800':'oklch(0.446 0.123 257.42)', '900':'oklch(0.395 0.100 257.42)', '950':'oklch(0.278 0.071 257.42)' }},
                    'cyan':      { label: 'Cyan',       hex: '#06B6D4', shades: { '50':'oklch(0.977 0.014 205.00)', '100':'oklch(0.950 0.033 205.00)', '200':'oklch(0.905 0.063 205.00)', '300':'oklch(0.840 0.106 205.00)', '400':'oklch(0.754 0.150 205.00)', '500':'oklch(0.683 0.170 205.00)', '600':'oklch(0.598 0.169 205.00)', '700':'oklch(0.515 0.149 205.00)', '800':'oklch(0.446 0.123 205.00)', '900':'oklch(0.395 0.100 205.00)', '950':'oklch(0.278 0.071 205.00)' }},
                    'fuchsia':   { label: 'Fusya',      hex: '#D946EF', shades: { '50':'oklch(0.977 0.014 330.00)', '100':'oklch(0.950 0.033 330.00)', '200':'oklch(0.905 0.063 330.00)', '300':'oklch(0.840 0.106 330.00)', '400':'oklch(0.754 0.150 330.00)', '500':'oklch(0.683 0.170 330.00)', '600':'oklch(0.598 0.169 330.00)', '700':'oklch(0.515 0.149 330.00)', '800':'oklch(0.446 0.123 330.00)', '900':'oklch(0.395 0.100 330.00)', '950':'oklch(0.278 0.071 330.00)' }},
                    'red':       { label: 'Kirmizi',    hex: '#EF4444', shades: { '50':'oklch(0.977 0.014 25.00)', '100':'oklch(0.950 0.033 25.00)', '200':'oklch(0.905 0.063 25.00)', '300':'oklch(0.840 0.106 25.00)', '400':'oklch(0.754 0.150 25.00)', '500':'oklch(0.683 0.170 25.00)', '600':'oklch(0.598 0.169 25.00)', '700':'oklch(0.515 0.149 25.00)', '800':'oklch(0.446 0.123 25.00)', '900':'oklch(0.395 0.100 25.00)', '950':'oklch(0.278 0.071 25.00)' }},
                    'lime':      { label: 'Yesil',      hex: '#84CC16', shades: { '50':'oklch(0.977 0.014 131.00)', '100':'oklch(0.950 0.033 131.00)', '200':'oklch(0.905 0.063 131.00)', '300':'oklch(0.840 0.106 131.00)', '400':'oklch(0.754 0.150 131.00)', '500':'oklch(0.683 0.170 131.00)', '600':'oklch(0.598 0.169 131.00)', '700':'oklch(0.515 0.149 131.00)', '800':'oklch(0.446 0.123 131.00)', '900':'oklch(0.395 0.100 131.00)', '950':'oklch(0.278 0.071 131.00)' }},
                    'sky':       { label: 'Gok',        hex: '#0EA5E9', shades: { '50':'oklch(0.977 0.014 230.00)', '100':'oklch(0.950 0.033 230.00)', '200':'oklch(0.905 0.063 230.00)', '300':'oklch(0.840 0.106 230.00)', '400':'oklch(0.754 0.150 230.00)', '500':'oklch(0.683 0.170 230.00)', '600':'oklch(0.598 0.169 230.00)', '700':'oklch(0.515 0.149 230.00)', '800':'oklch(0.446 0.123 230.00)', '900':'oklch(0.395 0.100 230.00)', '950':'oklch(0.278 0.071 230.00)' }},
                },

                selectTheme(id) {
                    this.currentTheme = id;
                    localStorage.setItem('filacraft-theme', id);
                    document.documentElement.classList.remove('filacraft-brisk', 'filacraft-akdeniz');
                    if (id !== 'brisk') {
                        document.documentElement.classList.add('filacraft-' + id);
                    }
                    this.saveToDb();
                },

                selectColor(id) {
                    this.currentColor = id;
                    localStorage.setItem('filacraft-color', id);
                    this.applyColor(id);
                    this.saveToDb();
                },

                applyColor(id) {
                    var root = document.documentElement;
                    var shadeKeys = ['50','100','200','300','400','500','600','700','800','900','950'];
                    if (id === 'default') {
                        shadeKeys.forEach(function(s) { root.style.removeProperty('--primary-' + s); });
                        return;
                    }
                    var palette = this.palettes[id];
                    if (!palette) return;
                    Object.keys(palette.shades).forEach(function(shade) {
                        root.style.setProperty('--primary-' + shade, palette.shades[shade]);
                    });
                },

                selectFont(id) {
                    this.currentFont = id;
                    localStorage.setItem('filacraft-font', id);
                    if (id === 'default') {
                        document.documentElement.style.removeProperty('--font-family');
                        return;
                    }
                    var existing = document.querySelector('link[data-filacraft-font]');
                    if (existing) existing.remove();
                    var link = document.createElement('link');
                    link.rel = 'stylesheet';
                    link.setAttribute('data-filacraft-font', '');
                    link.href = 'https://fonts.googleapis.com/css2?family=' + id.replace(/\+/g, '+') + ':wght@300;400;500;600;700&display=swap';
                    document.head.appendChild(link);
                    var fontName = id.replace(/\+/g, ' ');
                    document.documentElement.style.setProperty('--font-family', fontName + ', sans-serif');
                    this.saveToDb();
                },

                selectRadius(id) {
                    this.currentRadius = id;
                    localStorage.setItem('filacraft-radius', id);
                    if (id === 'default') {
                        document.documentElement.removeAttribute('data-radius');
                    } else {
                        document.documentElement.setAttribute('data-radius', id);
                    }
                    this.saveToDb();
                },

                selectDensity(id) {
                    this.currentDensity = id;
                    localStorage.setItem('filacraft-density', id);
                    if (id === 'default') {
                        document.documentElement.removeAttribute('data-density');
                    } else {
                        document.documentElement.setAttribute('data-density', id);
                    }
                    this.saveToDb();
                },

                errorPreviewUrl: null,
                errorPreviewCode: '404',
                errorPreviewStyle: null,

                selectTableStyle(id) {
                    this.currentTableStyle = id;
                    localStorage.setItem('filacraft-table-style', id);
                    if (id === 'default') {
                        document.documentElement.removeAttribute('data-table-style');
                    } else {
                        document.documentElement.setAttribute('data-table-style', id);
                    }
                    this.saveToDb();
                },

                selectCardStyle(id) {
                    this.currentCardStyle = id;
                    localStorage.setItem('filacraft-card-style', id);
                    if (id === 'default') {
                        document.documentElement.removeAttribute('data-card-style');
                    } else {
                        document.documentElement.setAttribute('data-card-style', id);
                    }
                    this.saveToDb();
                },

                selectErrorStyle(id) {
                    this.currentErrorStyle = id;
                    if (id === 'default') {
                        document.cookie = 'filacraft-error-style=;path=/;max-age=0';
                    } else {
                        document.cookie = 'filacraft-error-style=' + id + ';path=/;max-age=31536000';
                    }
                    this.saveToDb();
                },

                previewError(styleKey) {
                    this.errorPreviewStyle = styleKey;
                    this.errorPreviewCode = '404';
                    this.errorPreviewUrl = '/error-preview/404/' + styleKey;
                },

                switchPreviewCode(code) {
                    this.errorPreviewCode = code;
                    this.errorPreviewUrl = '/error-preview/' + code + '/' + this.errorPreviewStyle;
                },

                _saveTimer: null,

                saveToDb() {
                    var self = this;
                    clearTimeout(this._saveTimer);
                    this._saveTimer = setTimeout(function() {
                        var csrfToken = document.querySelector('meta[name="csrf-token"]');
                        if (!csrfToken) return;
                        fetch('/api/theme-settings', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': csrfToken.getAttribute('content'),
                                'Accept': 'application/json',
                            },
                            body: JSON.stringify({
                                settings: {
                                    theme: self.currentTheme,
                                    color: self.currentColor,
                                    font: self.currentFont,
                                    radius: self.currentRadius,
                                    density: self.currentDensity,
                                    tableStyle: self.currentTableStyle,
                                    cardStyle: self.currentCardStyle,
                                    errorStyle: self.currentErrorStyle,
                                    lang: self.lang,
                                }
                            })
                        });
                    }, 500);
                },

                loadFromDb() {
                    var self = this;
                    fetch('/api/theme-settings', {
                        headers: { 'Accept': 'application/json' }
                    })
                    .then(function(r) { return r.json(); })
                    .then(function(s) {
                        if (!s || !s.theme) return;
                        var changed = false;
                        if (s.theme && s.theme !== self.currentTheme) { self.selectTheme(s.theme); changed = true; }
                        if (s.color && s.color !== self.currentColor) { self.selectColor(s.color); changed = true; }
                        if (s.font && s.font !== self.currentFont) { self.selectFont(s.font); changed = true; }
                        if (s.radius && s.radius !== self.currentRadius) { self.selectRadius(s.radius); changed = true; }
                        if (s.density && s.density !== self.currentDensity) { self.selectDensity(s.density); changed = true; }
                        if (s.tableStyle && s.tableStyle !== self.currentTableStyle) { self.selectTableStyle(s.tableStyle); changed = true; }
                        if (s.cardStyle && s.cardStyle !== self.currentCardStyle) { self.selectCardStyle(s.cardStyle); changed = true; }
                        if (s.errorStyle && s.errorStyle !== self.currentErrorStyle) { self.selectErrorStyle(s.errorStyle); changed = true; }
                        if (s.lang && s.lang !== self.lang) { self.setLang(s.lang); changed = true; }
                    })
                    .catch(function() {});
                },

                resetSettings() {
                    if (!confirm(this.t.resetConfirm)) return;
                    localStorage.removeItem('filacraft-theme');
                    localStorage.removeItem('filacraft-color');
                    localStorage.removeItem('filacraft-font');
                    localStorage.removeItem('filacraft-radius');
                    localStorage.removeItem('filacraft-density');
                    localStorage.removeItem('filacraft-table-style');
                    localStorage.removeItem('filacraft-card-style');
                    localStorage.removeItem('filacraft-lang');
                    document.cookie = 'filacraft-error-style=;path=/;max-age=0';
                    var csrfToken = document.querySelector('meta[name="csrf-token"]');
                    if (csrfToken) {
                        fetch('/api/theme-settings', {
                            method: 'DELETE',
                            headers: {
                                'X-CSRF-TOKEN': csrfToken.getAttribute('content'),
                                'Accept': 'application/json',
                            }
                        });
                    }
                    location.reload();
                },

                init() {
                    if (this.currentColor && this.currentColor !== 'default') {
                        this.applyColor(this.currentColor);
                    }
                    if (this.currentFont && this.currentFont !== 'default') {
                        this.selectFont(this.currentFont);
                    }
                    if (this.currentRadius && this.currentRadius !== 'default') {
                        document.documentElement.setAttribute('data-radius', this.currentRadius);
                    }
                    if (this.currentDensity && this.currentDensity !== 'default') {
                        document.documentElement.setAttribute('data-density', this.currentDensity);
                    }
                    if (this.currentTableStyle && this.currentTableStyle !== 'default') {
                        document.documentElement.setAttribute('data-table-style', this.currentTableStyle);
                    }
                    if (this.currentCardStyle && this.currentCardStyle !== 'default') {
                        document.documentElement.setAttribute('data-card-style', this.currentCardStyle);
                    }
                    this.loadFromDb();
                }
            };
        }
    </script>
</x-filament-panels::page>
