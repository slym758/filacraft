<p align="center">
    <img src="https://raw.githubusercontent.com/slym758/filacraft/main/resources/img/atlas.png" alt="FilaCraft Banner" width="100%">
</p>

<h1 align="center">FilaCraft</h1>

<p align="center">
    <strong>The ultimate theming & customization toolkit for Filament admin panels.</strong>
</p>

<p align="center">
    <a href="https://packagist.org/packages/slym758/filacraft"><img src="https://img.shields.io/packagist/v/slym758/filacraft.svg?style=flat-square" alt="Latest Version"></a>
    <a href="https://packagist.org/packages/slym758/filacraft"><img src="https://img.shields.io/packagist/dt/slym758/filacraft.svg?style=flat-square" alt="Total Downloads"></a>
    <img src="https://img.shields.io/badge/PHP-8.2%2B-blue?style=flat-square" alt="PHP 8.2+">
    <img src="https://img.shields.io/badge/Filament-4.x%20%7C%205.x-orange?style=flat-square" alt="Filament 4.x | 5.x">
    <a href="LICENSE"><img src="https://img.shields.io/badge/license-MIT-green?style=flat-square" alt="License"></a>
</p>

---

## About

FilaCraft transforms your Filament admin panel into a fully customizable, visually stunning experience. It provides a built-in theme customization page where each user can personalize their panel — from layout presets and color palettes to fonts, spacing, table styles, and more. All settings are persisted per user, so every team member gets their own look and feel.

---

## Theme Presets

FilaCraft ships with **5 professionally designed theme presets**, each with its own layout and aesthetic:

<table>
  <tr>
    <td align="center" width="50%">
      <img src="https://raw.githubusercontent.com/slym758/filacraft/main/resources/img/ege_esintisi.png" alt="Ege Esintisi" width="100%"><br>
      <strong>Ege Esintisi</strong><br>
      <em>Classic sidebar layout with clean lines</em>
    </td>
    <td align="center" width="50%">
      <img src="https://raw.githubusercontent.com/slym758/filacraft/main/resources/img/akdeniz_ruhu.png" alt="Akdeniz Ruhu" width="100%"><br>
      <strong>Akdeniz Ruhu</strong><br>
      <em>Soft pastel tones with rounded corners</em>
    </td>
  </tr>
  <tr>
    <td align="center" width="50%">
      <img src="https://raw.githubusercontent.com/slym758/filacraft/main/resources/img/kutup_ışığı.png" alt="Kutup Işığı" width="100%"><br>
      <strong>Kutup Işığı</strong><br>
      <em>Top navigation with frosted glass effect</em>
    </td>
    <td align="center" width="50%">
      <img src="https://raw.githubusercontent.com/slym758/filacraft/main/resources/img/atlas.png" alt="Atlas" width="100%"><br>
      <strong>Atlas</strong><br>
      <em>Layered surfaces with premium elevation</em>
    </td>
  </tr>
  <tr>
    <td align="center" width="50%">
      <img src="https://raw.githubusercontent.com/slym758/filacraft/main/resources/img/gün_batımı.png" alt="Gün Batımı" width="100%"><br>
      <strong>Gün Batımı</strong><br>
      <em>Warm sunset tones with expressive styling</em>
    </td>
    <td align="center" width="50%">
    </td>
  </tr>
</table>

---

## Features

### Theming & Layout
- **5 Theme Presets** — Each preset transforms the entire panel layout, sidebar, topbar, and overall aesthetic
- **Top Navigation Support** — The "Kutup Işığı" preset automatically switches to a top navigation layout
- **Frosted Glass Effects** — Backdrop blur and translucent surfaces for a modern look

### Color & Typography
- **13 Color Palettes** — Turquoise, Ocean, Emerald, Violet, Rose, Amber, Indigo, Slate, Cyan, Fuchsia, Red, Lime, Sky
- **OKLCH Color Space** — Every palette includes precise shade variations from 50 to 950
- **Google Fonts Integration** — Pick any Google Font family; weights are loaded dynamically

### UI Customization
- **Border Radius** — Sharp, Small, Default, or Large
- **Density / Spacing** — Compact, Default, or Comfortable
- **Table Styles** — Default, Striped, Bordered, or Minimal
- **Card Styles** — Default, Flat, Raised, or Bordered
- **Error Page Styles** — Default, Minimal, Illustrated, or Gradient (for 403, 404, 500 pages)

### Per-User Persistence
- Settings stored in the database per user
- Instant sync via `localStorage` for zero-latency UI updates
- Automatic fallback to database when `localStorage` is empty

### Developer Experience
- **One-command installer** — Registers the plugin, publishes assets, runs migrations
- **Filament 4 & 5 compatible**
- **Multi-language support** — Turkish & English built-in
- **Zero configuration required** — Works out of the box after install

---

## Requirements

| Requirement | Version |
|-------------|---------|
| PHP         | 8.2+    |
| Laravel     | 11+     |
| Filament    | 4.x or 5.x |

---

## Installation

### 1. Install via Composer

```bash
composer require slym758/filacraft
```

### 2. Run the installer

```bash
php artisan filacraft:install
```

The installer will automatically:

1. Register `FilaCraftPlugin` in your `AdminPanelProvider`
2. Add the required CSS import and `@source` directive to your theme file
3. Publish custom error page views (403, 404, 500)
4. Run the database migration to create the `user_theme_settings` table

### 3. Build your assets

```bash
npm run build
```

That's it — you're ready to go.

---

## Usage

Once installed, a **"Themes"** menu item appears in the user menu (bottom-left corner of your panel). Clicking it opens the full customization page where users can:

1. **Select a theme preset** — Preview and apply any of the 5 built-in themes
2. **Choose a primary color** — Pick from 13 carefully crafted color palettes
3. **Set a font** — Search and apply any Google Font
4. **Adjust border radius** — From sharp edges to pill-shaped corners
5. **Control density** — Compact, default, or comfortable spacing
6. **Style tables** — Striped rows, bordered cells, or minimal headers
7. **Style cards** — Flat, raised, or bordered sections
8. **Customize error pages** — Choose from 4 different error page designs
9. **Switch language** — Toggle between Turkish and English

All changes are applied **instantly** with no page reload and persisted to the database automatically.

---

## How It Works

```
User selects theme → JavaScript applies CSS classes & data attributes → Settings saved to localStorage + database
                                                                          ↓
                                            Next page load → Read from localStorage (instant) → Fallback to DB API
```

- **CSS data attributes** (`data-radius`, `data-density`, `data-table-style`, `data-card-style`) control styling
- **CSS custom properties** set the primary color shades dynamically
- **Middleware** handles layout switching (e.g., top navigation for Kutup Işığı)
- **Google Fonts** are loaded dynamically via `<link>` injection

---

## API Endpoints

FilaCraft exposes the following authenticated API routes:

| Method   | Endpoint                | Description                      |
|----------|-------------------------|----------------------------------|
| `GET`    | `/api/theme-settings`   | Retrieve current user's settings |
| `POST`   | `/api/theme-settings`   | Save/update user's settings      |
| `DELETE` | `/api/theme-settings`   | Reset user's settings to default |

---

## Customization Options Reference

<details>
<summary><strong>Theme Presets</strong></summary>

| Key         | Name          | Description                                      |
|-------------|---------------|--------------------------------------------------|
| `ege`       | Ege Esintisi  | Classic sidebar layout, clean and minimal         |
| `akdeniz`   | Akdeniz Ruhu  | Pastel tones, rounded corners, shadow effects     |
| `kutup`     | Kutup Işığı   | Top navigation, gradient background, glass effect |
| `atlas`     | Atlas         | Layered surfaces, premium shadows, silk feel      |
| `gunbatimi` | Gün Batımı    | Warm color temperature, expressive borders        |

</details>

<details>
<summary><strong>Color Palettes</strong></summary>

`turquoise` · `ocean` · `emerald` · `violet` · `rose` · `amber` · `indigo` · `slate` · `cyan` · `fuchsia` · `red` · `lime` · `sky`

</details>

<details>
<summary><strong>Border Radius</strong></summary>

| Key       | Style                              |
|-----------|------------------------------------|
| `sharp`   | Minimal rounding (0.25rem)         |
| `small`   | Subtle rounding (0.5–0.75rem)      |
| `default` | Standard rounding (1–2rem)         |
| `large`   | Extra round / pill shapes (9999px) |

</details>

<details>
<summary><strong>Density</strong></summary>

| Key           | Style                    |
|---------------|--------------------------|
| `compact`     | Tight spacing, minimal padding  |
| `default`     | Standard spacing               |
| `comfortable` | Extra breathing room           |

</details>

<details>
<summary><strong>Table Styles</strong></summary>

| Key        | Style                                |
|------------|--------------------------------------|
| `default`  | Standard table appearance            |
| `striped`  | Alternating row backgrounds          |
| `bordered` | Visible cell borders                 |
| `minimal`  | Clean, borderless, uppercase headers |

</details>

<details>
<summary><strong>Card Styles</strong></summary>

| Key        | Style                        |
|------------|------------------------------|
| `default`  | Standard card styling        |
| `flat`     | No shadow, minimal look      |
| `raised`   | Prominent shadow (elevated)  |
| `bordered` | Border-focused styling       |

</details>

<details>
<summary><strong>Error Page Styles</strong></summary>

| Key            | Style                                |
|----------------|--------------------------------------|
| `default`      | Standard error design                |
| `minimal`      | Clean, text-focused                  |
| `illustrated`  | Visual design with illustrations     |
| `gradient`     | Gradient background effects          |

</details>

---

## Database Structure

FilaCraft creates a single `user_theme_settings` table:

```
user_theme_settings
├── id
├── user_id (foreign key → users, unique, cascade on delete)
├── settings (JSON)
├── created_at
└── updated_at
```

The `settings` JSON stores all user preferences in a single field for efficient read/write operations.

---

## Troubleshooting

### Theme not applying after install?

Make sure you rebuilt your frontend assets:

```bash
npm run build
```

### Plugin not registered?

The installer auto-registers the plugin, but you can also add it manually in your `AdminPanelProvider`:

```php
use Slym7\FilaCraft\FilaCraftPlugin;

public function panel(Panel $panel): Panel
{
    return $panel
        // ...
        ->plugins([
            FilaCraftPlugin::make(),
        ]);
}
```

### Styles not loading?

Ensure your theme CSS file includes the FilaCraft import. The installer adds this automatically, but you can verify it exists in your `resources/css/filament/admin/theme.css`:

```css
@import '/vendor/slym758/filacraft/resources/css/theme.css';
@source '/vendor/slym758/filacraft/resources/**/*.php';
```

---

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.

---

<p align="center">
    Built with care for the <a href="https://filamentphp.com">Filament</a> community.
</p>
