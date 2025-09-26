import { defineConfig } from 'vite'
import laravel from 'laravel-vite-plugin'

export default defineConfig({
  plugins: [
    laravel({
      input: [
        'resources/scss/custom.scss', // your overrides
        'resources/js/app.js',        // your glue code
      ],
      refresh: true,
    }),
  ],
  resolve: {
    alias: {
      '@': '/resources',
    },
  },
})
