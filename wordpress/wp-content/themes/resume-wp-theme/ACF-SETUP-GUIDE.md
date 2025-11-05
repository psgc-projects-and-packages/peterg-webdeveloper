# ACF Field Setup Guide for Resume WP Theme

This guide explains all the ACF (Advanced Custom Fields) fields you need to create in WordPress Admin to make your resume theme fully editable.

## Installation

First, install ACF if you haven't already:

- Go to **Plugins > Add New**
- Search for "Advanced Custom Fields"
- Install and Activate

## Field Groups Setup

### How to Set Location Rules

When creating each Field Group in ACF, you'll see a **"Location"** section at the bottom of the field group editor. This controls where your fields appear.

**Step-by-step:**

1. Go to **Custom Fields > Add New** (or edit an existing field group)
2. Add your fields (see sections below)
3. Scroll down to the **"Location"** section (it's below the fields area)
4. Click **"Add rule group"** if no rules exist yet
5. You'll see three dropdown menus. Set them like this:

**Option 1: Show on Front Page (Recommended)**

- First dropdown: Select **"Page"**
- Second dropdown: Select **"is equal to"**
- Third dropdown: Select **"Front Page"**
- This makes fields appear when editing your site's front page

**Option 2: Show on All Pages with Default Template**

- First dropdown: Select **"Page Template"**
- Second dropdown: Select **"is equal to"**
- Third dropdown: Select **"Default Template"**
- This makes fields appear on any page using the default template

**Option 3: Show on Specific Page**

- First dropdown: Select **"Page"**
- Second dropdown: Select **"is equal to"**
- Third dropdown: Select your front page from the list (e.g., "Home")
- This makes fields appear only on your specific front page

**Visual Guide:**

```
Location Rules Section (at bottom of field group editor)
┌─────────────────────────────────────────┐
│ Show this field group if                │
│ [Page ▼] [is equal to ▼] [Front Page ▼]│
└─────────────────────────────────────────┘
```

**Note:** The "Location" section is at the bottom of the field group editor page, below where you add your fields. You might need to scroll down to see it.

---

### 1. Hero Settings

**Field Group Name:** `Hero Settings`  
**Location:** Use one of the options above (recommend Option 1 or 3)

| Field Name          | Field Type | Default Value                       |
| ------------------- | ---------- | ----------------------------------- |
| `hero_label`        | Text       | (Optional - appears before name)    |
| `hero_first_name`   | Text       | `Peter`                             |
| `hero_last_name`    | Text       | `Gorgone`                           |
| `hero_title`        | Text       | `Freelance Web Developer`           |
| `hero_locations`    | Text       | `Las Vegas · Los Angeles · Chicago` |
| `hero_summary`      | WYSIWYG    | Your paragraph text                 |
| `hero_social_links` | Repeater   | (see below)                         |

**Hero Social Links Repeater (nested):**

- `social_url` (URL field)
- `social_icon` (Text field) - Font Awesome icon class (e.g., `fa-linkedin`, `fa-github`)

---

### 2. Experience Section

**Field Group Name:** `Experience Settings`  
**Location:** Use the same location rule as Hero Settings (above)

| Field Name         | Field Type | Notes                |
| ------------------ | ---------- | -------------------- |
| `experience_intro` | Text       | Intro paragraph text |
| `experience_items` | Repeater   | (see below)          |

**Experience Items Repeater:**

- `job_title` (Text)
- `company_name` (Text)
- `company_url` (URL)
- `date_range` (Text) - e.g., "2016 - Present"
- `description` (WYSIWYG)
- `experience_modals` (Repeater - nested)
- `experience_videos` (Repeater - nested)

**Experience Modals (nested repeater):**

- `modal_image` (Image)
- `modal_title` (Text)
- `modal_alt` (Text)
- `modal_description` (Textarea)

**Experience Videos (nested repeater):**

- `video_url` (URL) - YouTube/Vimeo embed URL
- `video_description` (Text)

---

### 3. Skills Section

**Field Group Name:** `Skills Settings`  
**Location:** Use the same location rule as Hero Settings

| Field Name             | Field Type | Notes           |
| ---------------------- | ---------- | --------------- |
| `skills_categories`    | Repeater   | (see below)     |
| `resume_download_file` | File       | PDF resume file |

**Skills Categories Repeater:**

- `category_title` (Text) - e.g., "Programming Languages & Tools"
- `category_class` (Text) - CSS class (optional, defaults to `skills-languages`)
- `skills_items` (Repeater - nested)

**Skills Items (nested repeater):**

- `skill_text` (WYSIWYG) - Can include HTML/links

---

### 4. GitHub Section

**Field Group Name:** `GitHub Settings`  
**Location:** Use the same location rule as Hero Settings

| Field Name             | Field Type | Notes                            |
| ---------------------- | ---------- | -------------------------------- |
| `github_section_title` | Text       | Default: "Github & Example Code" |
| `github_projects`      | Repeater   | (see below)                      |
| `github_footer_text`   | Text       | e.g., "More coming soon..."      |

**GitHub Projects Repeater:**

- `project_title` (Text)
- `project_description` (WYSIWYG)
- `project_url` (URL)
- `project_image` (Image) - Optional

---

### 5. References Section

**Field Group Name:** `References Settings`  
**Location:** Use the same location rule as Hero Settings

| Field Name                 | Field Type | Notes                  |
| -------------------------- | ---------- | ---------------------- |
| `references_section_title` | Text       | Default: "References"  |
| `references_intro`         | WYSIWYG    | Can include HTML/links |
| `references_image`         | Image      | Screenshot image       |

---

### 6. Education Section

**Field Group Name:** `Education Settings`  
**Location:** Use the same location rule as Hero Settings

| Field Name                | Field Type | Notes                |
| ------------------------- | ---------- | -------------------- |
| `education_section_title` | Text       | Default: "Education" |
| `education_items`         | Repeater   | (see below)          |

**Education Items Repeater:**

- `school_name` (Text)
- `school_url` (URL)
- `degree` (Text)
- `specialization` (Text)

---

### 7. About Section

**Field Group Name:** `About Settings`  
**Location:** Use the same location rule as Hero Settings

| Field Name            | Field Type | Notes            |
| --------------------- | ---------- | ---------------- |
| `about_section_title` | Text       | Default: "About" |
| `about_intro`         | Text       | Intro paragraph  |
| `about_faq_items`     | Repeater   | (see below)      |

**About FAQ Items Repeater:**

- `question` (Text)
- `answer` (WYSIWYG)

---

## Quick Setup Steps

1. **Install ACF Plugin** (if not already installed)
2. Go to **Custom Fields > Add New**
3. Create each Field Group listed above
4. Set Location Rules: **Page Template** → **Default Template** (see "How to Set Location Rules" section above)
5. Add all fields for each group
6. **Save** each field group:
   - Click the **"Save"** or **"Publish"** button in the **top right** of the screen
   - In ACF, clicking "Save" is sufficient - the field group becomes active immediately
   - If you see "Save Draft", click it, then the fields should appear on your pages
   - If editing an existing field group, click **"Update"** to save changes
   - **Note:** Once you see the fields appear on your pages (like "Sample Page"), the field group is active and working!
7. **Important: Configure WordPress Front Page**

   - Go to **Settings > Reading** in WordPress admin
   - Under "Your homepage displays", you have two options:
     - **Option A (Recommended):** Select **"A static page"** → Choose the page where you see your ACF fields (e.g., "Sample Page" or create a new "Home" page)
     - **Option B:** Select **"Your latest posts"** → WordPress will automatically use `front-page.php` template
   - **If you use Option A:** Make sure your ACF Location Rules match the page you selected
   - **If you use Option B:** The `front-page.php` template will be used automatically (no need to set a static page)

8. Go to **Pages** → Edit the page you set as your front page (or the page where you see ACF fields)
9. Scroll down to see the ACF fields
10. Fill in your content and **Update**
11. **View your site's front page** (not the WordPress admin preview) - the Hero section should appear!

**Troubleshooting:**

- If you don't see the Hero section, make sure you're viewing the actual front page of your site (not "Sample Page" in the admin)
- Visit your site's homepage URL directly (e.g., `http://localhost:8080` or your domain)
- The Hero section is built into the template - you don't need to add any blocks!

## Notes

- All fields have fallback defaults in the code, so the site will still work if fields are empty
- Use WYSIWYG fields where HTML is allowed (descriptions, summaries)
- Image fields return arrays - the code handles this automatically
- Repeater fields allow you to add/remove items dynamically
- Nested repeaters (like modals inside experience items) are fully supported

## Testing

After setting up fields:

1. Edit your front page
2. Fill in some test data
3. View the front end
4. Verify content appears correctly
5. Try editing and updating to see changes reflect immediately
