# Vite Asset Management Setup

## Overview
Your Laravel project has been successfully configured to use Vite for asset compilation with an organized structure for frontend and backend assets.

## Directory Structure

```
resources/
├── sass/
│   ├── front/                  # Frontend SCSS files
│   │   ├── app.scss            # Main frontend entry point
│   │   ├── _custom.scss        # Custom frontend styles
│   │   ├── _ace-responsive-menu.scss
│   │   ├── _animate.scss
│   │   ├── _flaticon.scss
│   │   ├── _fontawesome.scss
│   │   ├── _googlemap.scss
│   │   ├── _menu.scss
│   │   ├── _responsive.scss
│   │   ├── _slider.scss
│   │   ├── _style.scss
│   │   └── _ud-custom-spacing.scss
│   ├── admin/                  # Backend/Admin SCSS files
│   │   ├── app.scss            # Main admin entry point
│   │   ├── _custom.scss        # Custom admin styles
│   │   ├── _dashbord_navitaion.scss
│   │   └── ... (similar structure to frontend)
│   ├── app.scss                # Common styles
│   └── _variables.scss         # Shared variables
├── js/
│   ├── front/                  # Frontend JavaScript files
│   │   ├── main.js             # Main frontend entry point
│   │   ├── custom.js           # Custom frontend JavaScript
│   │   └── modules/            # JavaScript modules
│   │       ├── ace-responsive-menu.js
│   │       ├── chart-custome.js
│   │       ├── dashboard-script.js
│   │       ├── isotop.js
│   │       ├── jquery-counterup.js
│   │       ├── maps.js
│   │       ├── markerclusterer.js
│   │       ├── owl.js
│   │       ├── parallax.js
│   │       ├── pricing-table.js
│   │       ├── script.js
│   │       ├── scrollbalance.js
│   │       └── swiper.js
│   ├── admin/                  # Backend/Admin JavaScript files
│   │   ├── main.js             # Main admin entry point
│   │   ├── custom.js           # Custom admin JavaScript
│   │   └── modules/            # Admin JavaScript modules
│   │       └── ... (similar structure to frontend)
│   ├── app.js                  # Common JavaScript
│   └── bootstrap.js            # Bootstrap configuration
```

## Configuration Files

### vite.config.js
```javascript
export default defineConfig({
    plugins: [
        laravel({
            input: [
                // Frontend assets
                'resources/sass/front/app.scss',
                'resources/js/front/main.js',
                
                // Backend/Admin assets
                'resources/sass/admin/app.scss',
                'resources/js/admin/main.js',
                
                // Common assets
                'resources/sass/app.scss',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            '@': '/resources',
            '@frontend': '/resources/frontend',
            '@backend': '/resources/backend',
        },
    },
});
```

### package.json
Updated with necessary dependencies including jQuery, Owl Carousel, Swiper, Isotope, and Waypoints.

## Usage in Blade Templates

### Frontend Templates (front_master.blade.php)
```blade
@vite(['resources/sass/front/app.scss', 'resources/js/front/main.js'])
```

### Admin Templates (admin_master.blade.php)
```blade
@vite(['resources/sass/admin/app.scss', 'resources/js/admin/main.js'])
```

### Common Assets (for shared pages)
```blade
@vite(['resources/sass/app.scss', 'resources/js/app.js'])
```

## Development Commands

```bash
# Install dependencies
npm install

# Development server with hot reload
npm run dev

# Build for production
npm run build

# Watch for changes
npm run watch
```

## Benefits

1. **Modular Structure**: Separate frontend and admin assets for better organization
2. **Hot Module Replacement**: Instant updates during development
3. **Optimized Builds**: Vite automatically optimizes assets for production
4. **Modern Tooling**: Uses modern JavaScript and CSS preprocessing
5. **Laravel Integration**: Seamless integration with Laravel's asset compilation
6. **Code Splitting**: Automatic code splitting for better performance

## Asset Resolution Warnings

The build process shows warnings about unresolved font and image paths. These are expected as the assets reference files in the public directory which will be resolved at runtime. The build is successful and functional.

## Customization

- Add custom frontend styles in `resources/sass/front/_custom.scss`
- Add custom admin styles in `resources/sass/admin/_custom.scss`
- Add custom frontend JavaScript in `resources/js/front/custom.js`
- Add custom admin JavaScript in `resources/js/admin/custom.js`

This setup provides a maintainable and scalable asset management system for your Laravel application.