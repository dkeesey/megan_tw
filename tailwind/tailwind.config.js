// Set the Preflight flag based on the build target.
const includePreflight = 'editor' === process.env._TW_TARGET ? false : true;

module.exports = {
	mode: 'jit',
	presets: [
		// Manage Tailwind Typography's configuration in a separate file.
		require('./tailwind-typography.config.js'),
	],
	content: [
		// Ensure changes to PHP files and `theme.json` trigger a rebuild.
		'./theme/**/*.php',
		'./theme/theme.json',
	],
	safelist: [
		// Add classes used by Builder.io export
		// { pattern: /max-w-\[\d+px\]/ },
		// { pattern: /min-w-\[\d+px\]/ },
		'flex',
		'flex-col',
		'justify-center',
		'items-center',
		'gap-2',
		'gap-4',
		'gap-10',
		'mt-8',
		'mt-10',
		'py-32',
		'px-6',
		'w-full',
		'max-w-full',
		'max-w-[1200px]',
		'min-w-[280px]',
		'max-md:px-5',
		'max-md:py-24',
		'max-md:max-w-full',
		'text-4xl',
		'font-extrabold',
		'leading-10',
		'text-stone-700',
		'text-white',
		'text-lg',
		'leading-7',
		'leading-8',
		'text-violet-500',
		'bg-neutral-200',
		'bg-violet-500',
		'bg-lime-200',
		'text-neutral-500',
		'text-neutral-600',
		'rounded-lg',
		'rounded-full',
		'rounded-2xl',
		'border',
		'border-solid',
		'border-neutral-500',
		'w-[300px]',
		'aspect-square',
		'min-h-[300px]',
		'max-w-[360px]',
		'min-h-[57px]',
		'max-w-[1200px]',
	],
	theme: {
		// Extend the default Tailwind theme.
		extend: {
			fontFamily: {
				inter: ['Inter', 'sans-serif'],
			},
			colors: {
				'lavender-fields': {
					'primary-default': '#815cce',
					'primary-dark': '#6f4bba',
					'primary-light': '#ae90ed',
					'primary-lighter': '#ccbbf0',
					'primary-lightest': '#f1eef6',
					'secondary-default': '#9368ec',
					'secondary-dark': '#6f4bba',
					'secondary-light': '#ae90ed',
					'secondary-lighter': '#ccbbf0',
					'text-default': '#40513b',
					'text-muted': '#6c8f70',
					'text-faint': '#9dc08b',
					'text-highlight': '#a479fd',
					'text-inverted': '#eaf1e2',
					'ui-surface': '#e1ebdc',
					'ui-faint': '#b9d8a9',
					'ui-muted': '#7aac7f',
					'ui-highlight': '#f1eef6',
					'ui-inverted': '#455740',
					'ui-mid': '#6c8366',
					'text-button': '#ffffff',
				},
				magenta: '#ca4050',
				pink: '#e1a196',
			},
			fontSize: {
				'text-9xl': '7.7778rem',
				'text-8xl': '6rem',
				'text-5xl': '3.1111rem',
				'text-4xl': '2.5556rem',
				'text-3xl': '2rem',
				'text-2xl': '1.5556rem',
				'text-xl': '1.3333rem',
				'text-lg': '1.1111rem',
				'text-md': '1rem',
				'text-sm': '0.8889rem',
				'text-xs': '0.6667rem',
			},
			lineHeight: {
				'text-9xl': '8.0889rem',
				'text-8xl': '6.6rem',
				'text-5xl': '3.7333rem',
				'text-4xl': '3.3222rem',
				'text-3xl': '2.6rem',
				'text-2xl': '2.1467rem',
				'text-xl': '1.8667rem',
				'text-lg': '1.6rem',
				'text-md': '1.4rem',
				'text-sm': '1.2rem',
				'text-xs': '1.0667rem',
			},
			fontWeight: {
				'font-light': 300,
				'font-regular': 400,
				'font-semibold': 600,
				'font-bold': 700,
			},
		},
	},
	corePlugins: {
		// Disable Preflight base styles in builds targeting the editor.
		preflight: includePreflight,
	},
	plugins: [
		// Add Tailwind Typography (via _tw fork).
		require('@_tw/typography'),

		// add breakpoints inspector
		require('tailwindcss-breakpoints-inspector'),

		// Extract colors and widths from `theme.json`.
		require('@_tw/themejson'),

		// Uncomment below to add additional first-party Tailwind plugins.
		// require('@tailwindcss/forms'),
		// require('@tailwindcss/aspect-ratio'),
		// require('@tailwindcss/container-queries'),
	],
};
