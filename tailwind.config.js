// tailwind.config.js
const defaultTheme = require("tailwindcss/defaultTheme");
const colors = require("tailwindcss/colors");
const themeSwapper = require("tailwindcss-theme-swapper");
const plugin = require("tailwindcss/plugin");

module.exports = {
    darkMode: "class",
    theme: {
        screens: {
            sm: "640px",
            md: "768px",
            lg: "1024px",
            xl: "1280px",
            "2xl": "1600px",
        },
        extend: {
            animation: {
                slowping: "ping 1s cubic-bezier(0, 0, 0.2, 1) infinite",
                slowspin: "spin 5s linear infinite;",
                drone: "drone 3s linear infinite",
                defib: "defib 3s linear infinite",
                defib2: "defib2 3s linear infinite",
                wobble: "wobble 2s linear infinite",
                marquee: "marquee 60s linear infinite",
                marquee2: "marquee2 60s linear infinite",
                "marquee-rev": "marquee-rev 60s linear infinite",
                "marquee2-rev": "marquee2-rev 60s linear infinite",
            },
            keyframes: {
                wobble: {
                    "0%": { transform: "rotate(0deg)" },
                    "25%": { transform: "rotate(6deg)" },
                    "50%": { transform: "rotate(0deg)" },
                    "75%": { transform: "rotate(-3deg)" },
                    "100%": { transform: "rotate(0deg)" },
                },
                marquee: {
                    "0%": { transform: "translateX(0%)" },
                    "100%": { transform: "translateX(-100%)" },
                },
                marquee2: {
                    "0%": { transform: "translateX(100%)" },
                    "100%": { transform: "translateX(0%)" },
                },
                "marquee-rev": {
                    "0%": { transform: "translateX(0%)" },
                    "100%": { transform: "translateX(100%)" },
                },
                "marquee2-rev": {
                    "0%": { transform: "translateX(-100%)" },
                    "100%": { transform: "translateX(0%)" },
                },
                drone: {
                    "0%": { transform: "translateX(0%)" },
                    "40%": { transform: "translateX(45%)" },
                    "50%": { transform: "translateX(45%)" },
                    "100%": { transform: "translateX(100%)" },
                },
                defib: {
                    "0%": { opacity: 0, transform: "translate(0%, -150%)" },
                    "40%": { opacity: 0, transform: "translate(45%, -150%)" },
                    "50%": { opacity: 1, transform: "translate(45%, 40%)" },
                    "52%": { opacity: 1, transform: "translate(45%, 25%)" },
                    "55%": { opacity: 1, transform: "translate(45%, 40%)" },
                    "57%": { opacity: 1, transform: "translate(45%, 30%)" },
                    "60%": { opacity: 1, transform: "translate(45%, 40%)" },
                    "90%": { opacity: 1, transform: "translate(45%, 40%)" },
                    "100%": { opacity: 0, transform: "translate(45%, 40%)" },
                },
                defib2: {
                    "0%": { transform: "rotate(0deg)" },
                    "42%": { transform: "rotate(0deg)" },
                    "50%": { transform: "rotate(360deg)" },
                    "100%": { transform: "rotate(360deg)" },
                },
            },
            boxShadow: {
                "glow-sm": "0 0 10px 2px",
                glow: "0 0 10px 5px",
                "glow-lg": "0 0 20px 10px",
                "glow-xl": "0 0 30px 15px",
            },
            cursor: {
                crosshair: "crosshair",
            },
            fontFamily: {
                sans: ["Ubuntu", ...defaultTheme.fontFamily.sans],
            },
            gridTemplateColumns: {
                13: "repeat(13, minmax(0, 1fr))",
                28: "repeat(28, minmax(0, 1fr))",
            },
            spacing: {
                120: "30rem",
                128: "32rem",
                144: "36rem",
                192: "48rem",
            },
            transitionDuration: {
                DEFAULT: "400ms",
            },
            transitionTimingFunction: {
                DEFAULT: "cubic-bezier(0.4, 0, 0.2, 1)",
            },
            minHeight: {
                16: "4rem",
            },
            screens: {
                print: { raw: "print" },
            },
        },
    },
    content: [
        "./config/livewire-datatables.php",
        "./vendor/laravel/jetstream/**/*.blade.php",
        "./vendor/mediconesystems/**/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./app/Providers/AppServiceProvider.php",
        "./app/Http/Livewire/*.php",
        "./app/Enums/*.php",
    ],
    plugins: [
        require("@tailwindcss/forms"),
        require("@tailwindcss/typography"),
        plugin(function ({ addUtilities }) {
            addUtilities({
                ".text-glow": {
                    "text-shadow": "0 0 5px",
                },
                ".text-glow-sm": {
                    "text-shadow": "0 0 2px",
                },
            });
        }),
        themeSwapper({
            themes: [
                {
                    name: "base",
                    selectors: [":root"],
                    theme: {
                        colors: {
                            primary: colors.blue,
                            secondary: colors.amber,
                            tertiary: colors.pink,
                            "on-primary": "#FFFFFF",
                            "on-secondary": "#FFFFFF",
                            "on-tertiary": "#FFFFFF",
                            rag: {
                                red: "#e6223d",
                                amber: "#cbad16",
                                green: "#009999",
                            },
                            base: colors.zinc,
                        },
                    },
                },
            ],
        }),
        function ({ addBase }) {
            addBase({
                body: {
                    "--tw-text-opacity": "1",
                    color: `rgba(255, 255, 255, var(--tw-text-opacity))`,
                },
            });
        },
    ],
};
