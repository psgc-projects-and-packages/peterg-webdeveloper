# Section Architecture Plan

Based on the [Start Bootstrap Resume theme](https://startbootstrap.com/previews/resume), this document outlines the reusable section template architecture.

## Current State Analysis

### ✅ Already Implemented:

1. **HERO Format** (Custom)

   - Location: `front-page.php` lines 14-104
   - Uses: ACF fields (hero_first_name, hero_last_name, hero_title, etc.)
   - Status: ✅ Complete, but not yet reusable

2. **Resume Format** (Partially Reusable)

   - Experience section: `front-page.php` lines 106-212
   - Education section: `front-page.php` lines 424-464
   - Format: Title/Company on left, Date on right, Description below
   - Uses: ACF Repeater fields
   - Status: ✅ Exists but hardcoded per section

3. **Bullet List Format** (Partially Reusable)

   - Skills section: `front-page.php` lines 268-390 (uses Font Awesome check icons)
   - About FAQ section: `front-page.php` lines 466-505 (uses standard bullets)
   - Status: ✅ Exists but different implementations

4. **Custom Format**
   - GitHub section: Custom project cards
   - References section: Image with intro text
   - Status: ✅ Exists but not generalized

### ❌ Missing:

1. **Paragraph Format** - For Interests, Call to Action, etc.
2. **Generalized Resume Format** - Reusable template part
3. **Generalized Bullet List Format** - Reusable template part

## Proposed Architecture

### Template Parts Structure

```
template-parts/
├── sections/
│   ├── hero.php              # HERO format (About section)
│   ├── paragraph.php         # Paragraph format (Interests, CTA)
│   ├── resume.php            # Resume format (Experience, Education)
│   ├── bullet-list.php       # Bullet list format (Skills, Awards)
│   └── custom.php            # Custom format (flexible)
```

### Implementation Options

#### Option 1: ACF Flexible Content (Recommended)

- **Pros:**
  - Drag-and-drop section ordering
  - Multiple instances of same format
  - Visual in admin
  - Standard WordPress pattern
- **Cons:**
  - Requires ACF Pro (paid) or ACF (free) with Flexible Content addon
- **Best for:** Maximum flexibility, WYSIWYG experience

#### Option 2: ACF Repeater with Layout Field

- **Pros:**
  - Works with free ACF
  - Multiple instances possible
- **Cons:**
  - Less visual than Flexible Content
- **Best for:** Free ACF users

#### Option 3: WordPress Block Editor (Gutenberg)

- **Pros:**
  - Native WordPress, no plugins needed
  - True WYSIWYG
  - Reusable blocks
- **Cons:**
  - More complex to implement
  - Requires block development
- **Best for:** Long-term, plugin-free solution

## Recommended Implementation: ACF Flexible Content

### Field Structure

```
Page Sections (Flexible Content)
├── Hero Section
│   ├── hero_label
│   ├── hero_first_name
│   ├── hero_last_name
│   ├── hero_title
│   ├── hero_locations
│   ├── hero_summary
│   └── hero_social_links (repeater)
│
├── Paragraph Section
│   ├── section_title
│   ├── section_id (for anchor links)
│   └── content (WYSIWYG)
│
├── Resume Section
│   ├── section_title
│   ├── section_id
│   ├── intro_text (optional)
│   └── items (repeater)
│       ├── title
│       ├── subtitle/company
│       ├── subtitle_url
│       ├── date_range
│       └── description (WYSIWYG)
│
├── Bullet List Section
│   ├── section_title
│   ├── section_id
│   ├── bullet_icon (select: check, star, trophy, circle, etc.)
│   └── items (repeater)
│       └── item_text (WYSIWYG)
│
└── Custom Section
    ├── section_title
    ├── section_id
    └── custom_content (WYSIWYG)
```

## Usage Examples

### Multiple Paragraph Sections

```
1. Paragraph Section (id: "interests")
   - Title: "Interests"
   - Content: "Apart from being a web developer..."

2. Paragraph Section (id: "call-to-action")
   - Title: "Let's Work Together"
   - Content: "Ready to start your project..."
```

### Multiple Resume Sections

```
1. Resume Section (id: "experience")
   - Title: "Experience"
   - Items: [Job 1, Job 2, ...]

2. Resume Section (id: "education")
   - Title: "Education"
   - Items: [School 1, School 2, ...]
```

## Implementation Plan

1. ✅ Create template part files in `template-parts/sections/`
2. ✅ Create helper function to render sections
3. ✅ Refactor `front-page.php` to use Flexible Content
4. ✅ Update ACF field groups
5. ✅ Test all section types
6. ✅ Document usage in ACF-SETUP-GUIDE.md
