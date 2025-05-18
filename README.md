# Shortcode Plugin

A simple WordPress plugin to demonstrate shortcode functionality.

## Overview

**Shortcode Plugin** is a lightweight WordPress plugin created for demonstrating how to build and use shortcodes. It provides two example shortcodes: one for displaying employee information with customizable attributes, and another for listing recent posts dynamically using WP_Query.

---

## Features

- Register custom shortcodes for WordPress.
- Display employee information with customizable name and email.
- List a configurable number of recent posts.
- Clean and simple code for learning or quick use.

---

## Installation

1. Download or clone this repository:
   ```bash
   git clone https://github.com/KishanVyas308/Shortcode-Plugin.git
   ```
2. Upload the `shortcode-plugin.php` file to your `/wp-content/plugins/` directory.
3. Go to your WordPress admin dashboard, then **Plugins** > **Installed Plugins**.
4. Activate **Shortcode Plugin**.

---

## Usage

### Employee Shortcode

Displays a styled box with employee name and email.

**Shortcode:**
```[employee name="John Doe" email="john.doe@example.com"]```

**Parameters:**
- `name` (optional): Defaults to "Kishan Vyas"
- `email` (optional): Defaults to "kishan.vyas@example.com"

**Example Output:**
```
[employee name="Jane Smith" email="jane.smith@example.com"]
```

### List All Posts Shortcode

Displays a list of recent published posts.

**Shortcode:**
```[list-all-posts number="5"]```

**Parameters:**
- `number` (optional): Number of posts to display (default: 4)

**Example Output:**
```
[list-all-posts number="3"]
```

---

## Customization

You can modify the plugin code to add more attributes, change the layout, or register additional shortcodes.

---

## Screenshots

![image](https://github.com/user-attachments/assets/093b2d3f-485c-488d-a094-bc8f6bd00047)

![image](https://github.com/user-attachments/assets/2bcb4c1f-849c-496b-abc3-99a4d4c85707)

![image](https://github.com/user-attachments/assets/2ab036d1-2518-4187-9878-68a9a0258a3b)

![image](https://github.com/user-attachments/assets/f0bdd55d-bd54-4b59-b39c-c66c49c1251c)

![image](https://github.com/user-attachments/assets/56487161-971d-4e22-907c-84165251db7d)



---

## Credits

Developed by [Kishan Vyas](https://kishanvyas.tech)

---

## License

This project is licensed under the MIT License.
