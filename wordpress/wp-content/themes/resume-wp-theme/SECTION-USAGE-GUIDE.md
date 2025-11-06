# Section Template Usage Guide

This guide shows how to use the reusable section templates.

## Available Templates

1. **hero.php** - Hero/About section
2. **paragraph.php** - Paragraph-based sections (Interests, CTA)
3. **resume.php** - Resume-style sections (Experience, Education)
4. **bullet-list.php** - Bullet list sections (Skills, Awards)

## Usage Examples

### 1. Hero Section

```php
<?php
resume_wp_theme_render_section('hero', array(
    'hero_label' => 'Hello, I am',
    'hero_first_name' => 'Peter',
    'hero_last_name' => 'Gorgone',
    'hero_title' => 'Freelance Web Developer',
    'hero_locations' => 'Las Vegas · Orlando · Chicago',
    'hero_email' => 'peter@peltronic.com',
    'hero_summary' => '<p>Professional Custom Web Development...</p>',
    'social_links' => array(
        array('url' => 'https://linkedin.com/in/petergorgone', 'icon' => 'fa-linkedin'),
        array('url' => 'https://github.com/peltronic', 'icon' => 'fa-github'),
    ),
));
?>
```

### 2. Paragraph Section (Interests)

```php
<?php
resume_wp_theme_render_section('paragraph', array(
    'section_title' => 'Interests',
    'section_id' => 'interests',
    'content' => '<p>Apart from being a web developer, I enjoy most of my time being outdoors...</p>',
));
?>
```

### 3. Paragraph Section (Call to Action)

```php
<?php
resume_wp_theme_render_section('paragraph', array(
    'section_title' => 'Let\'s Work Together',
    'section_id' => 'call-to-action',
    'content' => '<p>Ready to start your project? <a href="/contact">Get in touch</a> today!</p>',
));
?>
```

### 4. Resume Section (Experience)

```php
<?php
resume_wp_theme_render_section('resume', array(
    'section_title' => 'Experience',
    'section_id' => 'experience',
    'intro_text' => 'I have over 10 years experience writing software...',
    'items' => array(
        array(
            'title' => 'Senior Web Developer',
            'subtitle' => 'Intelitec Solutions',
            'subtitle_url' => 'https://example.com',
            'date_range' => 'March 2013 - Present',
            'description' => '<p>Bring to the table win-win survival strategies...</p>',
        ),
        array(
            'title' => 'Web Developer',
            'subtitle' => 'Intelitec Solutions',
            'date_range' => 'December 2011 - March 2013',
            'description' => '<p>Capitalize on low hanging fruit...</p>',
        ),
    ),
));
?>
```

### 5. Resume Section (Education)

```php
<?php
resume_wp_theme_render_section('resume', array(
    'section_title' => 'Education',
    'section_id' => 'education',
    'items' => array(
        array(
            'title' => 'University of Colorado Boulder',
            'subtitle' => 'Bachelor of Science',
            'subtitle_url' => 'https://www.colorado.edu',
            'date_range' => 'August 2006 - May 2010',
            'description' => 'Computer Science - Web Development Track<br>GPA: 3.23',
        ),
    ),
));
?>
```

### 6. Bullet List Section (Skills - Grouped)

```php
<?php
resume_wp_theme_render_section('bullet-list', array(
    'section_title' => 'Skills',
    'section_id' => 'skills',
    'bullet_icon' => 'fa-check',
    'grouped' => true,
    'items' => array(
        array(
            'category_title' => 'Programming Languages & Tools',
            'category_class' => 'skills-languages',
            'items' => array(
                array('text' => 'MERN-like stacks: NodeJS + Express + NestJS | React | MongoDB'),
                array('text' => 'LAMP Stack: Laravel + PHP7 | Linux+CLI | Apache | MySQL'),
            ),
        ),
        array(
            'category_title' => 'Workflow',
            'category_class' => 'skills-workflow',
            'items' => array(
                array('text' => 'Rapid prototyping using Agile Development'),
                array('text' => 'Test-Driven Design (TDD)'),
            ),
        ),
    ),
));
?>
```

### 7. Bullet List Section (Awards - Simple List)

```php
<?php
resume_wp_theme_render_section('bullet-list', array(
    'section_title' => 'Awards & Certifications',
    'section_id' => 'awards',
    'bullet_icon' => 'fa-trophy',
    'grouped' => false,
    'items' => array(
        'Google Analytics Certified Developer',
        'Mobile Web Specialist - Google Certification',
        '1st Place - University of Colorado Boulder - Emerging Tech Competition 2009',
        '1st Place - University of Colorado Boulder - Adobe Creative Jam 2008',
    ),
));
?>
```

## Using with ACF Flexible Content

For maximum flexibility, use ACF Flexible Content field:

```php
<?php
// In your template (e.g., front-page.php)
if (have_rows('page_sections')) {
    while (have_rows('page_sections')) {
        the_row();
        $layout = get_row_layout();

        switch ($layout) {
            case 'hero_section':
                resume_wp_theme_render_section('hero', array(
                    'hero_first_name' => get_sub_field('hero_first_name'),
                    'hero_last_name' => get_sub_field('hero_last_name'),
                    // ... etc
                ));
                break;

            case 'paragraph_section':
                resume_wp_theme_render_section('paragraph', array(
                    'section_title' => get_sub_field('section_title'),
                    'section_id' => get_sub_field('section_id'),
                    'content' => get_sub_field('content'),
                ));
                break;

            case 'resume_section':
                // Build items array from ACF repeater
                $items = array();
                if (have_rows('items')) {
                    while (have_rows('items')) {
                        the_row();
                        $items[] = array(
                            'title' => get_sub_field('title'),
                            'subtitle' => get_sub_field('subtitle'),
                            'subtitle_url' => get_sub_field('subtitle_url'),
                            'date_range' => get_sub_field('date_range'),
                            'description' => get_sub_field('description'),
                        );
                    }
                }
                resume_wp_theme_render_section('resume', array(
                    'section_title' => get_sub_field('section_title'),
                    'section_id' => get_sub_field('section_id'),
                    'intro_text' => get_sub_field('intro_text'),
                    'items' => $items,
                ));
                break;

            case 'bullet_list_section':
                // Similar pattern for bullet lists
                break;
        }
    }
}
?>
```

## Direct Template Part Usage

You can also use `get_template_part()` directly:

```php
<?php
get_template_part('template-parts/sections/paragraph', null, array(
    'section_title' => 'Interests',
    'section_id' => 'interests',
    'content' => '<p>My interests...</p>',
));
?>
```
