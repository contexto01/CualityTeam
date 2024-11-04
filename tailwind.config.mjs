/** @type {import('tailwindcss').Config} */
export default {
  content: ['./src/**/*.{astro,html,js,jsx,md,mdx,svelte,ts,tsx,vue}'],
  theme: {
    extend: {
      colors: {
        'primary-color': '#2898ee',
        'secondary-color': '#eeeeee',
        'tertiary-color': '#13151a',
        'quaternary-color': '#111'
      }
    }
  },
  plugins: []
}
