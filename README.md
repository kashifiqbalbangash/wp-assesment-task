# Custom WordPress Theme: Project Showcase

## Overview

This WordPress theme is created from scratch to showcase a portfolio of projects. It demonstrates both front-end and back-end development skills, including custom post types, custom templates, custom fields, API development, and filtering functionalities, template parts based approach and Block base both are used. This theme follows WordPress best practices for theme development.

## Features

- **Custom WordPress Theme**: Built entirely from scratch without page builders like Elementor or WPBakery.
- **Custom Post Type (CPT)**: A custom post type for "Projects" with custom fields like project name, description, start and end dates, and project URL.
- **Custom Fields**: Utilizes the ACF plugin or code to add fields such as:
  - Project Name
  - Project Description
  - Project Start Date
  - Project End Date
  - Project URL
- **Custom Archive Page**: A custom template for listing all projects with filtering options based on Start and End Dates.
- **Both Required Pages**: Both pages created,the home page is dynamic by using custom ACF Block based approach, while blog page is static and divided by using template parts approach.
- **Custom Single Post Template**: A template to display individual project details in a visually appealing manner.
- **Dynamic Navigation Menu**: A dynamic navigation menu supporting multi-level dropdowns.
- **Custom REST API Endpoint**: A custom API endpoint that returns project data in JSON format.
- **Responsive Design**: The theme is responsive and works well across devices using CSS media queries and minimal JavaScript.
- **Basic Security**: Input sanitization and output escaping are implemented to ensure security best practices.

## Installation

### Step 1: Set up WordPress

Ensure that you have a local WordPress installation set up. You can use tools like MAMP, XAMPP, or Docker to set up WordPress on your local environment.

### Step 2: Upload the Theme

1. Download the theme files from this repository.
2. Navigate to `wp-content/themes/` in your WordPress installation.
3. Upload the theme folder to this directory.

### Step 3: Activate the Theme

1. Log in to your WordPress admin dashboard.
2. Go to **Appearance** > **Themes**.
3. Locate the custom theme and click **Activate**.

### Step 4: Install ACF Plugin (Optional)

If you are using Advanced Custom Fields (ACF) for custom fields:
1. Go to **Plugins** > **Add New**.
2. Search for "Advanced Custom Fields" and install the plugin.

### Step 5: Create Projects

1. After activating the theme, navigate to **Projects** in the WordPress dashboard.
2. Click **Add New** to create a new project.
3. Fill in the fields for project name, description, start date, end date, and project URL.
4. Publish the project.

## Custom Post Type: Projects

- **Post Type Name**: `project`
- **Custom Fields** (ACF):
  - `Project Name` (Text)
  - `Project Description` (Textarea)
  - `Project Start Date` (Date Picker)
  - `Project End Date` (Date Picker)
  - `Project URL` (URL)

## API Endpoint

A custom REST API endpoint is available to fetch project data in JSON format.

### Endpoint URL

`GET /wp-json/custom/v1/projects`

### Parameters

- `start_date` (optional): Filter projects by start date (YYYY-MM-DD).
- `end_date` (optional): Filter projects by end date (YYYY-MM-DD).

### Example Response

```json
[
  {
    "title": "Project 1",
    "url": "https://example.com/project-1",
    "start_date": "2024-01-01",
    "end_date": "2024-06-01"
  },
  {
    "title": "Project 2",
    "url": "https://example.com/project-2",
    "start_date": "2023-05-01",
    "end_date": "2023-12-01"
  }
]
