# Resume WordPress Theme

A WordPress conversion of the Start Bootstrap Resume theme, customized for freelance web developer portfolio and blog.

## Installation

1. Copy this entire folder to your WordPress installation's `wp-content/themes/` directory
2. Rename the folder to something like `resume-wp-theme` (if it isn't already)
3. Log into your WordPress admin panel
4. Navigate to **Appearance > Themes**
5. Activate the "Resume WordPress Theme"

## Theme Structure

### Core Files
- `style.css` - Required WordPress theme file with theme header
- `functions.php` - Theme setup, script/style enqueuing, and WordPress hooks
- `header.php` - Site header and navigation
- `footer.php` - Site footer and closing scripts
- `index.php` - Default blog archive template
- `front-page.php` - Homepage template (displays portfolio sections)
- `single.php` - Single blog post template
- `archive.php` - Archive pages (categories, tags, dates)
- `search.php` - Search results page
- `404.php` - 404 error page

### Template Parts
- `template-parts/modal.php` - Reusable modal component for portfolio images

## Features

### Homepage Sections
The homepage (`front-page.php`) includes all your portfolio sections:
- **Home** - Introduction and social links
- **Experience** - Work history with portfolio images
- **Github** - Code examples and repositories
- **Skills** - Technical skills and workflow
- **References** - LinkedIn references
- **Education** - Educational background
- **About** - FAQ section

### Blog Functionality
- Full blog support with archive, single post, and search templates
- Category and tag support
- Post pagination
- Featured images support

### Assets
All original assets are preserved:
- CSS files in `/css/`
- JavaScript files in `/js/`
- Images in `/img/`
- Vendor libraries in `/vendor/`

## WordPress Settings

### Setting Up the Blog

1. Go to **Settings > Reading** in WordPress admin
2. Set "Your homepage displays" to:
   - **A static page** - Select a page for your homepage (or leave blank to use front-page.php)
   - **Your latest posts** - This will use index.php instead of front-page.php

### Recommended Setup

For best results:
1. Create a new page called "Blog" (or any name you prefer)
2. Go to **Settings > Reading**
3. Set "Posts page" to your "Blog" page
4. Leave "Homepage" blank or set to a static page if you want a separate landing page

The theme will automatically:
- Use `front-page.php` for the homepage (showing your portfolio)
- Use `index.php` for the blog archive when you visit `/blog`

## Customization

### Updating Content

Most homepage content is in `front-page.php`. You can:
- Edit the HTML directly in `front-page.php`
- Or use WordPress Custom Fields to make sections dynamic (requires additional development)

### Styling

- Main styles: `/css/resume.min.css`
- Additional styles: `/css/more-styles.css`
- Theme stylesheet: `style.css` (mostly empty, for WordPress requirements)

### Navigation

The navigation menu is in `header.php`. The theme currently uses hardcoded menu items, but you can:
- Modify `header.php` to use `wp_nav_menu()` with a registered menu
- Or keep the current structure for simplicity

## Notes

- The original `index.php` has been converted to WordPress format. A backup exists as `index.html-bak`
- All asset paths have been updated to use `get_template_directory_uri()`
- Google Tag Manager code is included in the theme functions
- The theme is ready for personal use and can be extended for more CMS functionality as needed

## Future Enhancements

Consider adding:
- WordPress Customizer options for homepage content
- Custom post types for portfolio items
- Widget areas for sidebar content
- Theme options page for easier content management
- Translation support (i18n)

