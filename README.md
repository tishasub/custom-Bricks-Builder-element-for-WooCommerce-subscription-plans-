# LinkedIn Post

## Post Text

🚀 Just built a custom Bricks Builder element for WooCommerce subscription plans!

This fully-featured element makes it easy to display subscription options with dynamic pricing, perfect for e-commerce stores using WooCommerce Subscriptions.

✨ Key Features:
• 4 customizable subscription plans (one-time, monthly, quarterly, semi-annual)
• Dynamic pricing integration with WooCommerce products
• WooCommerce Subscriptions All The Things (WCS ATT) support
• Fully customizable via Bricks Builder controls
• Responsive design that works on all devices
• Visual plan selection with real-time updates
• Automatic savings calculations

🛠️ Tech Stack:
PHP | JavaScript | WooCommerce | Bricks Builder | WordPress

The element integrates seamlessly with Bricks Builder's visual editor, allowing you to customize colors, pricing, badges, and text without touching code. Perfect for subscription-based businesses looking to optimize their checkout experience.

💡 The code is clean, well-documented, and follows WordPress coding standards. It's designed to be easily maintainable and extensible.

Available on GitHub! Link in comments 👇

#WordPress #WooCommerce #BricksBuilder #WebDevelopment #PHP #JavaScript #Ecommerce #OpenSource #WebDesign #SubscriptionBusiness

---

## Alternative Shorter Version

Built a custom Bricks Builder element for WooCommerce subscription plans! 🎯

Features:
✅ Dynamic pricing from WooCommerce
✅ 4 customizable subscription tiers
✅ WCS ATT integration
✅ Fully responsive design
✅ Visual plan selector

Perfect for subscription-based e-commerce stores. Clean code, well-documented, and easy to customize through Bricks Builder.

Check it out on GitHub! 🔗

#WordPress #WooCommerce #BricksBuilder #WebDev #OpenSource

---

## GitHub Repository Description

**Bricks Builder Subscription Plans Element**

A custom Bricks Builder element for WordPress that creates beautiful, interactive subscription plan selectors with WooCommerce integration.

**Features:**
- 4 customizable subscription plans (one-time purchase, 1 month, 4 months, 6 months)
- Dynamic pricing support - fetch prices automatically from WooCommerce products
- WooCommerce Subscriptions All The Things (WCS ATT) integration
- Fully customizable via Bricks Builder visual controls
- Responsive design optimized for mobile and desktop
- Automatic savings calculations and display
- Visual plan selection with hover effects
- Badge support for highlighting popular plans

**Installation:**
1. Copy the `elements` folder to your child theme directory
2. Add the registration code from `functions.php` to your child theme's functions.php
3. The element will appear in Bricks Builder under "Custom" category

**Requirements:**
- WordPress 5.0+
- Bricks Builder
- WooCommerce
- WooCommerce Subscriptions (optional, for subscription functionality)
- WooCommerce Subscriptions All The Things (optional, for advanced subscription options)

**Tech Stack:**
PHP, JavaScript, WooCommerce, Bricks Builder, WordPress

---

## README.md Content

# Bricks Builder Subscription Plans Element

A professional, fully-featured custom element for Bricks Builder that creates beautiful subscription plan selectors with WooCommerce integration.

![Subscription Plans Preview](preview.png)

## Features

### Core Functionality
- **4 Subscription Plans**: One-time purchase, 1 month, 4 months, and 6 months
- **Dynamic Pricing**: Automatically fetch prices from WooCommerce products
- **Manual Pricing**: Set custom prices directly in Bricks Builder
- **WCS ATT Integration**: Full support for WooCommerce Subscriptions All The Things
- **Automatic Calculations**: Savings amounts and percentages calculated automatically

### Customization Options
- Customizable titles, subtitles, and shipping information for each plan
- Badge support with custom colors for highlighting plans
- Adjustable card styling (border radius, gaps, colors)
- Custom button text and colors
- Special styling for featured plans
- Guarantee text for each plan

### User Experience
- Visual plan selection with hover effects
- Selected state indication
- Responsive design for all screen sizes
- Smooth animations and transitions
- Mobile-optimized layout

## Installation

### Step 1: Copy Files
Copy the `elements` folder to your child theme directory:
\`\`\`
your-child-theme/
  └── elements/
      └── class-element-subscription-plans.php
\`\`\`

### Step 2: Register Element
Add this code to your child theme's `functions.php`:

\`\`\`php
function register_custom_bricks_elements() {
    if (class_exists('\\Bricks\\Elements')) {
        $element_file = get_stylesheet_directory() . '/elements/class-element-subscription-plans.php';
        
        if (file_exists($element_file)) {
            \Bricks\Elements::register_element($element_file);
        }
    }
}
add_action('init', 'register_custom_bricks_elements', 11);
\`\`\`

### Step 3: Use in Bricks Builder
1. Open Bricks Builder editor
2. Find "Subscription Plans" in the elements panel under "Custom" category
3. Drag and drop onto your page
4. Configure settings in the element panel

## Configuration

### General Settings
- **WooCommerce Product ID**: Set the product ID or leave empty for auto-detection on product pages
- **Button Text**: Customize the add to cart button text
- **Use Dynamic Pricing**: Toggle to fetch prices from WooCommerce products

### Plan Settings
Each plan (1-4) has the following settings:
- **Product ID**: For dynamic pricing (optional)
- **Title**: Main plan title
- **Subtitle**: Secondary text
- **Shipping Info**: Delivery schedule
- **Original Price**: Regular price (manual mode)
- **Sale Price**: Discounted price (manual mode)
- **Price Each**: Additional pricing info (for multi-month plans)
- **Guarantee Text**: Money-back guarantee period
- **Badge Text**: Highlight label (e.g., "MOST POPULAR")
- **Badge Color**: Custom badge background color
- **WCS ATT Value**: Subscription scheme identifier

### Styling Settings
- **Card Border Radius**: Rounded corners for plan cards
- **Card Gap**: Spacing between cards
- **Button Background**: Add to cart button color

## Requirements

- WordPress 5.0 or higher
- Bricks Builder (latest version recommended)
- WooCommerce
- WooCommerce Subscriptions (optional, for subscription functionality)
- WooCommerce Subscriptions All The Things (optional, for advanced features)

## Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Mobile browsers (iOS Safari, Chrome Mobile)

## Technical Details

### File Structure
\`\`\`
elements/
  └── class-element-subscription-plans.php  # Main element class
js/
  └── subscription-plans.js                 # JavaScript functionality (optional)
functions.php                               # Registration code
\`\`\`

### How It Works
1. Element registers with Bricks Builder on initialization
2. Renders a form with hidden WooCommerce subscription fields
3. JavaScript handles visual plan selection
4. Updates hidden form fields based on user selection
5. Submits to WooCommerce with proper subscription parameters

## Customization

### Modifying Styles
All styles are inline in the element for easy customization. You can:
- Edit colors in the element settings
- Modify CSS in the `render()` method
- Override styles in your theme's CSS

### Adding More Plans
To add additional plans:
1. Add new control group in `set_control_groups()`
2. Add controls in `set_controls()`
3. Add plan data in the `render()` method
4. Update the grid layout if needed

## Troubleshooting

### Element Not Appearing
- Ensure Bricks Builder is installed and activated
- Check that the file path in functions.php is correct
- Verify the element file exists in the correct location

### Prices Not Updating
- Confirm WooCommerce product IDs are correct
- Check that products exist and have prices set
- Enable dynamic pricing in element settings

### Subscription Not Working
- Install WooCommerce Subscriptions plugin
- Install WCS ATT plugin for subscription conversion
- Verify WCS ATT values match your subscription schemes

## Contributing

Contributions are welcome! Please feel free to submit a Pull Request.

## License

This project is open source and available under the MIT License.

## Support

For issues, questions, or suggestions:
- Open an issue on GitHub
- Connect with me on LinkedIn

## Credits

Built with ❤️ for the WordPress and Bricks Builder community.

---

**Keywords**: WordPress, Bricks Builder, WooCommerce, Subscriptions, Custom Element, E-commerce, PHP, JavaScript
\`\`\`
