=== Bugatti Clone Theme ===
Contributors: Antigravity
Tags: dark, minimalist, photography, luxury
Requires at least: 6.0
Tested up to: 6.4
Stable tag: 1.0.0
License: GPLv2 or later

A pixel-perfect clone of the Bugatti website, built as a WordPress theme.

== Installation ==

1. Upload the `bugatti-clone` folder to the `/wp-content/themes/` directory.
2. Activate the theme through the 'Appearance' menu in WordPress.

== Configuration ==

1. **Homepage Setup**:
   - Go to Pages > Add New, create a page named "Home".
   - Go to Settings > Reading.
   - Set "Your homepage displays" to "A static page".
   - Select "Home" as the Homepage.

2. **Menus**:
   - Go to Appearance > Menus.
   - Create a new menu and assign it to "Primary Menu" (displayed in the overlay).
   - Create another menu and assign it to "Footer Menu".

3. **Multilingual Support**:
   - Install a plugin like Polylang or WPML.
   - Go to Languages settings and add English (en_US) and Vietnamese (vi).
   - The theme includes a `.pot` file and a `vi.po` stub in the `/languages` folder. You can scan the theme with the plugin to register strings.

4. **Assets**:
   - This theme uses placeholder images (Unsplash) and videos (Pexels) due to copyright.
   - To use real Bugatti assets, upload them to your Media Library and update the URLs in `front-page.php`.

== Fonts ==

This theme loads 'Inter', 'Roboto Mono', and 'Dancing Script' from Google Fonts to mimic the original typography.
