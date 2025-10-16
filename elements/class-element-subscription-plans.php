<?php
/**
 * Subscription Plans - Custom Bricks Element
 * 
 * Installation:
 * 1. Place this file in your child theme's /elements/ folder
 * 2. Add the registration code to your child theme's functions.php
 */

if (!defined('ABSPATH')) exit;

class Element_Subscription_Plans extends \Bricks\Element {
    
    // Element properties
    public $category = 'custom';
    public $name = 'subscription-plans';
    public $icon = 'fas fa-credit-card';
    public $css_selector = '';

    // Get element label
    public function get_label() {
        return esc_html__('Subscription Plans', 'bricks');
    }

    // Get element keywords for search
    public function get_keywords() {
        return ['subscription', 'pricing', 'plans', 'woocommerce', 'payment'];
    }

    // Set control groups
    public function set_control_groups() {
        $this->control_groups['general'] = [
            'title' => esc_html__('General', 'bricks'),
            'tab' => 'content',
        ];

        $this->control_groups['plan1'] = [
            'title' => esc_html__('Plan 1 (One Time)', 'bricks'),
            'tab' => 'content',
        ];

        $this->control_groups['plan2'] = [
            'title' => esc_html__('Plan 2 (1 Month)', 'bricks'),
            'tab' => 'content',
        ];

        $this->control_groups['plan3'] = [
            'title' => esc_html__('Plan 3 (4 Months)', 'bricks'),
            'tab' => 'content',
        ];

        $this->control_groups['plan4'] = [
            'title' => esc_html__('Plan 4 (6 Months)', 'bricks'),
            'tab' => 'content',
        ];

        $this->control_groups['styling'] = [
            'title' => esc_html__('Styling', 'bricks'),
            'tab' => 'style',
        ];
    }

    // Set element controls
    public function set_controls() {
        // General Settings
        $this->controls['product_id'] = [
            'tab' => 'content',
            'group' => 'general',
            'label' => esc_html__('WooCommerce Product ID', 'bricks'),
            'type' => 'number',
            'default' => '',
            'description' => esc_html__('Enter the WooCommerce product ID. Leave empty to auto-detect from current product page.', 'bricks'),
        ];

        $this->controls['button_text'] = [
            'tab' => 'content',
            'group' => 'general',
            'label' => esc_html__('Button Text', 'bricks'),
            'type' => 'text',
            'default' => 'Add to Cart',
        ];

        $this->controls['use_dynamic_pricing'] = [
            'tab' => 'content',
            'group' => 'general',
            'label' => esc_html__('Use Dynamic Pricing', 'bricks'),
            'type' => 'checkbox',
            'default' => false,
            'description' => esc_html__('Fetch prices automatically from WooCommerce products using Product IDs', 'bricks'),
        ];

        // Plan 1 Controls
        $this->controls['plan1_product_id'] = [
            'tab' => 'content',
            'group' => 'plan1',
            'label' => esc_html__('Product ID (for dynamic pricing)', 'bricks'),
            'type' => 'number',
            'default' => '',
            'description' => esc_html__('Leave empty to use manual pricing', 'bricks'),
            'required' => ['use_dynamic_pricing', '=', true],
        ];

        $this->controls['plan1_title'] = [
            'tab' => 'content',
            'group' => 'plan1',
            'label' => esc_html__('Title', 'bricks'),
            'type' => 'text',
            'default' => '1TIME PURCHASE',
        ];

        $this->controls['plan1_subtitle'] = [
            'tab' => 'content',
            'group' => 'plan1',
            'label' => esc_html__('Subtitle', 'bricks'),
            'type' => 'text',
            'default' => '(NO SUBSCRIPTION)',
        ];

        $this->controls['plan1_shipping'] = [
            'tab' => 'content',
            'group' => 'plan1',
            'label' => esc_html__('Shipping Info', 'bricks'),
            'type' => 'text',
            'default' => 'Ships Every 30 Days',
        ];

        $this->controls['plan1_original_price'] = [
            'tab' => 'content',
            'group' => 'plan1',
            'label' => esc_html__('Original Price', 'bricks'),
            'type' => 'number',
            'default' => 49.99,
            'required' => ['use_dynamic_pricing', '=', false],
        ];

        $this->controls['plan1_price'] = [
            'tab' => 'content',
            'group' => 'plan1',
            'label' => esc_html__('Sale Price', 'bricks'),
            'type' => 'number',
            'default' => 37.99,
            'required' => ['use_dynamic_pricing', '=', false],
        ];

        $this->controls['plan1_guarantee'] = [
            'tab' => 'content',
            'group' => 'plan1',
            'label' => esc_html__('Guarantee Text', 'bricks'),
            'type' => 'text',
            'default' => '60 DAY GUARANTEE',
        ];

        $this->controls['plan1_wcsatt_value'] = [
            'tab' => 'content',
            'group' => 'plan1',
            'label' => esc_html__('WCS ATT Value', 'bricks'),
            'type' => 'text',
            'default' => '0',
            'description' => esc_html__('WooCommerce Subscriptions All The Things value', 'bricks'),
        ];

        // Plan 2 Controls
        $this->controls['plan2_product_id'] = [
            'tab' => 'content',
            'group' => 'plan2',
            'label' => esc_html__('Product ID (for dynamic pricing)', 'bricks'),
            'type' => 'number',
            'default' => '',
            'description' => esc_html__('Leave empty to use manual pricing', 'bricks'),
            'required' => ['use_dynamic_pricing', '=', true],
        ];

        $this->controls['plan2_title'] = [
            'tab' => 'content',
            'group' => 'plan2',
            'label' => esc_html__('Title', 'bricks'),
            'type' => 'text',
            'default' => '1 MONTH',
        ];

        $this->controls['plan2_subtitle'] = [
            'tab' => 'content',
            'group' => 'plan2',
            'label' => esc_html__('Subtitle', 'bricks'),
            'type' => 'text',
            'default' => 'SUBSCRIPTION',
        ];

        $this->controls['plan2_shipping'] = [
            'tab' => 'content',
            'group' => 'plan2',
            'label' => esc_html__('Shipping Info', 'bricks'),
            'type' => 'text',
            'default' => 'Ships Every 30 Days',
        ];

        $this->controls['plan2_original_price'] = [
            'tab' => 'content',
            'group' => 'plan2',
            'label' => esc_html__('Original Price', 'bricks'),
            'type' => 'number',
            'default' => 59.99,
            'required' => ['use_dynamic_pricing', '=', false],
        ];

        $this->controls['plan2_price'] = [
            'tab' => 'content',
            'group' => 'plan2',
            'label' => esc_html__('Sale Price', 'bricks'),
            'type' => 'number',
            'default' => 37.99,
            'required' => ['use_dynamic_pricing', '=', false],
        ];

        $this->controls['plan2_guarantee'] = [
            'tab' => 'content',
            'group' => 'plan2',
            'label' => esc_html__('Guarantee Text', 'bricks'),
            'type' => 'text',
            'default' => '60 DAY GUARANTEE',
        ];

        $this->controls['plan2_wcsatt_value'] = [
            'tab' => 'content',
            'group' => 'plan2',
            'label' => esc_html__('WCS ATT Value', 'bricks'),
            'type' => 'text',
            'default' => '1_month',
        ];

        // Plan 3 Controls
        $this->controls['plan3_product_id'] = [
            'tab' => 'content',
            'group' => 'plan3',
            'label' => esc_html__('Product ID (for dynamic pricing)', 'bricks'),
            'type' => 'number',
            'default' => '',
            'description' => esc_html__('Leave empty to use manual pricing', 'bricks'),
            'required' => ['use_dynamic_pricing', '=', true],
        ];

        $this->controls['plan3_title'] = [
            'tab' => 'content',
            'group' => 'plan3',
            'label' => esc_html__('Title', 'bricks'),
            'type' => 'text',
            'default' => '4 MONTHS',
        ];

        $this->controls['plan3_subtitle'] = [
            'tab' => 'content',
            'group' => 'plan3',
            'label' => esc_html__('Subtitle', 'bricks'),
            'type' => 'text',
            'default' => 'SUBSCRIPTION',
        ];

        $this->controls['plan3_shipping'] = [
            'tab' => 'content',
            'group' => 'plan3',
            'label' => esc_html__('Shipping Info', 'bricks'),
            'type' => 'text',
            'default' => 'Ships Every 120 Days',
        ];

        $this->controls['plan3_original_price'] = [
            'tab' => 'content',
            'group' => 'plan3',
            'label' => esc_html__('Original Price', 'bricks'),
            'type' => 'number',
            'default' => 239.99,
            'required' => ['use_dynamic_pricing', '=', false],
        ];

        $this->controls['plan3_price'] = [
            'tab' => 'content',
            'group' => 'plan3',
            'label' => esc_html__('Sale Price', 'bricks'),
            'type' => 'number',
            'default' => 119.96,
            'required' => ['use_dynamic_pricing', '=', false],
        ];

        $this->controls['plan3_price_each'] = [
            'tab' => 'content',
            'group' => 'plan3',
            'label' => esc_html__('Price Each Text', 'bricks'),
            'type' => 'text',
            'default' => '(29.99 EACH)',
        ];

        $this->controls['plan3_guarantee'] = [
            'tab' => 'content',
            'group' => 'plan3',
            'label' => esc_html__('Guarantee Text', 'bricks'),
            'type' => 'text',
            'default' => '120 DAY GUARANTEE',
        ];

        $this->controls['plan3_badge'] = [
            'tab' => 'content',
            'group' => 'plan3',
            'label' => esc_html__('Badge Text', 'bricks'),
            'type' => 'text',
            'default' => 'MOST POPULAR',
        ];

        $this->controls['plan3_badge_color'] = [
            'tab' => 'content',
            'group' => 'plan3',
            'label' => esc_html__('Badge Color', 'bricks'),
            'type' => 'color',
            'default' => '#f59e0b',
        ];

        $this->controls['plan3_wcsatt_value'] = [
            'tab' => 'content',
            'group' => 'plan3',
            'label' => esc_html__('WCS ATT Value', 'bricks'),
            'type' => 'text',
            'default' => '4_month',
        ];

        // Plan 4 Controls
        $this->controls['plan4_product_id'] = [
            'tab' => 'content',
            'group' => 'plan4',
            'label' => esc_html__('Product ID (for dynamic pricing)', 'bricks'),
            'type' => 'number',
            'default' => '',
            'description' => esc_html__('Leave empty to use manual pricing', 'bricks'),
            'required' => ['use_dynamic_pricing', '=', true],
        ];

        $this->controls['plan4_title'] = [
            'tab' => 'content',
            'group' => 'plan4',
            'label' => esc_html__('Title', 'bricks'),
            'type' => 'text',
            'default' => '6 MONTHS',
        ];

        $this->controls['plan4_subtitle'] = [
            'tab' => 'content',
            'group' => 'plan4',
            'label' => esc_html__('Subtitle', 'bricks'),
            'type' => 'text',
            'default' => 'SUBSCRIPTION',
        ];

        $this->controls['plan4_shipping'] = [
            'tab' => 'content',
            'group' => 'plan4',
            'label' => esc_html__('Shipping Info', 'bricks'),
            'type' => 'text',
            'default' => 'Ships Every 180 Days',
        ];

        $this->controls['plan4_original_price'] = [
            'tab' => 'content',
            'group' => 'plan4',
            'label' => esc_html__('Original Price', 'bricks'),
            'type' => 'number',
            'default' => 359.94,
            'required' => ['use_dynamic_pricing', '=', false],
        ];

        $this->controls['plan4_price'] = [
            'tab' => 'content',
            'group' => 'plan4',
            'label' => esc_html__('Sale Price', 'bricks'),
            'type' => 'number',
            'default' => 149.96,
            'required' => ['use_dynamic_pricing', '=', false],
        ];

        $this->controls['plan4_price_each'] = [
            'tab' => 'content',
            'group' => 'plan4',
            'label' => esc_html__('Price Each Text', 'bricks'),
            'type' => 'text',
            'default' => '(29.99 EACH)',
        ];

        $this->controls['plan4_guarantee'] = [
            'tab' => 'content',
            'group' => 'plan4',
            'label' => esc_html__('Guarantee Text', 'bricks'),
            'type' => 'text',
            'default' => '365 DAY GUARANTEE',
        ];

        $this->controls['plan4_badge'] = [
            'tab' => 'content',
            'group' => 'plan4',
            'label' => esc_html__('Badge Text', 'bricks'),
            'type' => 'text',
            'default' => 'BEST DEAL',
        ];

        $this->controls['plan4_badge_color'] = [
            'tab' => 'content',
            'group' => 'plan4',
            'label' => esc_html__('Badge Color', 'bricks'),
            'type' => 'color',
            'default' => '#10b981',
        ];

        $this->controls['plan4_bg_color'] = [
            'tab' => 'content',
            'group' => 'plan4',
            'label' => esc_html__('Background Color', 'bricks'),
            'type' => 'color',
            'default' => '#ef4444',
        ];

        $this->controls['plan4_text_color'] = [
            'tab' => 'content',
            'group' => 'plan4',
            'label' => esc_html__('Text Color', 'bricks'),
            'type' => 'color',
            'default' => '#ffffff',
        ];

        $this->controls['plan4_wcsatt_value'] = [
            'tab' => 'content',
            'group' => 'plan4',
            'label' => esc_html__('WCS ATT Value', 'bricks'),
            'type' => 'text',
            'default' => '6_month',
        ];

        // Styling Controls
        $this->controls['card_border_radius'] = [
            'tab' => 'style',
            'group' => 'styling',
            'label' => esc_html__('Card Border Radius', 'bricks'),
            'type' => 'number',
            'units' => true,
            'default' => '16px',
        ];

        $this->controls['card_gap'] = [
            'tab' => 'style',
            'group' => 'styling',
            'label' => esc_html__('Card Gap', 'bricks'),
            'type' => 'number',
            'units' => true,
            'default' => '20px',
        ];

        $this->controls['button_bg_color'] = [
            'tab' => 'style',
            'group' => 'styling',
            'label' => esc_html__('Button Background', 'bricks'),
            'type' => 'color',
            'default' => '#ef4444',
        ];
    }

    // Calculate savings
    private function calculate_savings($original, $sale) {
        $save_amount = $original - $sale;
        $save_percent = $original > 0 ? round(($save_amount / $original) * 100) : 0;
        return [
            'amount' => $save_amount,
            'percent' => $save_percent
        ];
    }

    private function get_dynamic_pricing($product_id) {
        if (!$product_id || !function_exists('wc_get_product')) {
            return false;
        }

        $product = wc_get_product($product_id);
        if (!$product) {
            return false;
        }

        $regular_price = floatval($product->get_regular_price());
        $sale_price = floatval($product->get_sale_price());
        
        // If no sale price, use regular price as current price
        if (!$sale_price) {
            $sale_price = $regular_price;
        }

        return [
            'regular_price' => $regular_price,
            'sale_price' => $sale_price,
            'product_name' => $product->get_name(),
            'product_exists' => true
        ];
    }

    // Render element HTML
    public function render() {
        $settings = $this->settings;
        $unique_id = 'subscription_plans_' . $this->id;
        
        // Get product ID
        $product_id = !empty($settings['product_id']) ? intval($settings['product_id']) : 0;
        
        // If no product ID is set, try to get it from the current page
        if (!$product_id) {
            // Check if we're on a single product page
            if (is_product()) {
                $product_id = get_the_ID();
            } elseif (function_exists('wc_get_product')) {
                // Try to get from query
                $queried_object = get_queried_object();
                if ($queried_object && isset($queried_object->ID)) {
                    $product = wc_get_product($queried_object->ID);
                    if ($product) {
                        $product_id = $queried_object->ID;
                    }
                }
            }
        }
        
        if (!$product_id) {
            echo '<div style="background: #fff3cd; border: 1px solid #ffc107; padding: 15px; border-radius: 8px; margin: 20px 0;">';
            echo '<strong>' . esc_html__('Subscription Plans Element:', 'bricks') . '</strong><br>';
            echo esc_html__('Please set a WooCommerce Product ID in the element settings, or place this element on a product page for auto-detection.', 'bricks');
            echo '</div>';
            return;
        }

        $is_auto_detected = empty($settings['product_id']);
        
        $use_dynamic_pricing = !empty($settings['use_dynamic_pricing']);

        if (isset($_POST['add-to-cart']) && $_POST['add-to-cart'] == $product_id) {
            echo '<div style="background: #fff3cd; border: 1px solid #ffeaa7; padding: 10px; margin: 10px 0; border-radius: 5px;">';
            echo '<strong>Debug - Form Submission Data:</strong><br>';
            echo 'Product ID: ' . esc_html($_POST['add-to-cart']) . '<br>';
            echo 'Subscribe Action: ' . esc_html($_POST['subscribe-to-action-input'] ?? 'not set') . '<br>';
            echo 'Convert Dropdown: ' . esc_html($_POST['convert_to_sub_dropdown' . $product_id] ?? 'not set') . '<br>';
            echo 'Convert Radio: ' . esc_html($_POST['convert_to_sub_' . $product_id] ?? 'not set') . '<br>';
            echo 'All POST data: <pre>' . print_r($_POST, true) . '</pre>';
            echo '</div>';
        }

        $plans = [];
        
        // Plan 1 - One Time Purchase
        $plans[] = [
            'key' => 'one_time',
            'wcsatt_value' => '0',
            'convert_value' => '0',
            'title' => isset($settings['plan1_title']) ? (string)$settings['plan1_title'] : '1TIME PURCHASE',
            'subtitle' => isset($settings['plan1_subtitle']) ? (string)$settings['plan1_subtitle'] : '(NO SUBSCRIPTION)',
            'shipping' => isset($settings['plan1_shipping']) ? (string)$settings['plan1_shipping'] : 'Ships Every 30 Days',
            'guarantee' => isset($settings['plan1_guarantee']) ? (string)$settings['plan1_guarantee'] : '60 DAY GUARANTEE',
            'badge' => '',
            'badge_color' => '',
            'bg_color' => '#f8f9fa',
            'text_color' => '#1f2937',
            'price_each' => '',
            'product_id' => !empty($settings['plan1_product_id']) ? intval($settings['plan1_product_id']) : null,
            'settings_key' => 'plan1'
        ];
        
        // Plan 2 - 1 Month
        $plans[] = [
            'key' => '1_month',
            'wcsatt_value' => '1_month',
            'convert_value' => '1_month',
            'title' => isset($settings['plan2_title']) ? (string)$settings['plan2_title'] : '1 MONTH',
            'subtitle' => isset($settings['plan2_subtitle']) ? (string)$settings['plan2_subtitle'] : 'SUBSCRIPTION',
            'shipping' => isset($settings['plan2_shipping']) ? (string)$settings['plan2_shipping'] : 'Ships Every 30 Days',
            'guarantee' => isset($settings['plan2_guarantee']) ? (string)$settings['plan2_guarantee'] : '60 DAY GUARANTEE',
            'badge' => '',
            'badge_color' => '',
            'bg_color' => '#f8f9fa',
            'text_color' => '#1f2937',
            'price_each' => '',
            'product_id' => !empty($settings['plan2_product_id']) ? intval($settings['plan2_product_id']) : null,
            'settings_key' => 'plan2'
        ];
        
        // Plan 3 - 4 Months
        $plans[] = [
            'key' => '4_months',
            'wcsatt_value' => '4_month',
            'convert_value' => '4_month',
            'title' => isset($settings['plan3_title']) ? (string)$settings['plan3_title'] : '4 MONTHS',
            'subtitle' => isset($settings['plan3_subtitle']) ? (string)$settings['plan3_subtitle'] : 'SUBSCRIPTION',
            'shipping' => isset($settings['plan3_shipping']) ? (string)$settings['plan3_shipping'] : 'Ships Every 120 Days',
            'guarantee' => isset($settings['plan3_guarantee']) ? (string)$settings['plan3_guarantee'] : '120 DAY GUARANTEE',
            'badge' => isset($settings['plan3_badge']) ? (string)$settings['plan3_badge'] : 'MOST POPULAR',
            'badge_color' => isset($settings['plan3_badge_color']) ? (string)$settings['plan3_badge_color'] : '#f59e0b',
            'bg_color' => '#f8f9fa',
            'text_color' => '#1f2937',
            'price_each' => isset($settings['plan3_price_each']) ? (string)$settings['plan3_price_each'] : '(29.99 EACH)',
            'product_id' => !empty($settings['plan3_product_id']) ? intval($settings['plan3_product_id']) : null,
            'settings_key' => 'plan3'
        ];
        
        // Plan 4 - 6 Months
        $plans[] = [
            'key' => '6_months',
            'wcsatt_value' => '6_month',
            'convert_value' => '6_month',
            'title' => isset($settings['plan4_title']) ? (string)$settings['plan4_title'] : '6 MONTHS',
            'subtitle' => isset($settings['plan4_subtitle']) ? (string)$settings['plan4_subtitle'] : 'SUBSCRIPTION',
            'shipping' => isset($settings['plan4_shipping']) ? (string)$settings['plan4_shipping'] : 'Ships Every 180 Days',
            'guarantee' => isset($settings['plan4_guarantee']) ? (string)$settings['plan4_guarantee'] : '365 DAY GUARANTEE',
            'badge' => isset($settings['plan4_badge']) ? (string)$settings['plan4_badge'] : 'BEST DEAL',
            'badge_color' => isset($settings['plan4_badge_color']) ? (string)$settings['plan4_badge_color'] : '#10b981',
            'bg_color' => isset($settings['plan4_bg_color']) ? (string)$settings['plan4_bg_color'] : '#ef4444',
            'text_color' => isset($settings['plan4_text_color']) ? (string)$settings['plan4_text_color'] : '#ffffff',
            'price_each' => isset($settings['plan4_price_each']) ? (string)$settings['plan4_price_each'] : '(29.99 EACH)',
            'product_id' => !empty($settings['plan4_product_id']) ? intval($settings['plan4_product_id']) : null,
            'settings_key' => 'plan4'
        ];

        for ($i = 0; $i < count($plans); $i++) {
            $plan_key = $plans[$i]['settings_key'];
            
            if ($use_dynamic_pricing && $plans[$i]['product_id']) {
                $dynamic_pricing = $this->get_dynamic_pricing($plans[$i]['product_id']);
                if ($dynamic_pricing && $dynamic_pricing['product_exists']) {
                    $plans[$i]['original_price'] = $dynamic_pricing['regular_price'];
                    $plans[$i]['price'] = $dynamic_pricing['sale_price'];
                } else {
                    // Fallback to manual pricing if product not found
                    $plans[$i]['original_price'] = floatval($settings[$plan_key . '_original_price'] ?? 0);
                    $plans[$i]['price'] = floatval($settings[$plan_key . '_price'] ?? 0);
                }
            } else {
                // Use manual pricing
                $plans[$i]['original_price'] = floatval($settings[$plan_key . '_original_price'] ?? 0);
                $plans[$i]['price'] = floatval($settings[$plan_key . '_price'] ?? 0);
            }
        }

        // Set wrapper attributes
        $this->set_attribute('wrapper', 'class', 'subscription-plans-wrapper');
        $this->set_attribute('wrapper', 'id', $unique_id);

        ?>
        <div <?php echo $this->render_attributes('wrapper'); ?>>
            <?php if ($is_auto_detected): ?>
                <div style="background: #d1fae5; border: 1px solid #10b981; padding: 12px; border-radius: 8px; margin-bottom: 20px; font-size: 14px; color: #065f46;">
                    <strong>Auto-Detected Product ID:</strong> <?php echo esc_html($product_id); ?> (from current product page)
                </div>
            <?php endif; ?>

            <?php if ($use_dynamic_pricing): ?>
                <div style="background: #e0f2fe; border: 1px solid #0288d1; padding: 12px; border-radius: 8px; margin-bottom: 20px; font-size: 14px; color: #01579b;">
                    <strong>Dynamic Pricing Enabled:</strong> Prices are automatically fetched from WooCommerce products.
                </div>
            <?php endif; ?>

            <style>
            #<?php echo esc_attr($unique_id); ?> {
                max-width: 1000px;
                margin: 20px auto;
                padding: 0 16px;
                font-family: 'Gilroy', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            }

            #<?php echo esc_attr($unique_id); ?> .subscription-grid {
                display: grid;
                grid-template-columns: repeat(2, 1fr);
                grid-template-rows: repeat(2, 1fr);
                gap: <?php echo esc_attr($settings['card_gap'] ?? '20px'); ?>;
                margin-bottom: 30px;
            }

            #<?php echo esc_attr($unique_id); ?> .subscription-card {
                border: 3px solid #e5e7eb;
                border-radius: <?php echo esc_attr($settings['card_border_radius'] ?? '16px'); ?>;
                padding: 24px;
                text-align: center;
                cursor: pointer;
                transition: all 0.3s ease;
                position: relative;
            }

            #<?php echo esc_attr($unique_id); ?> .subscription-card:hover {
                transform: translateY(-4px);
                box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
            }

            #<?php echo esc_attr($unique_id); ?> .subscription-card.selected {
                border-color: #3b82f6;
                box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
            }

            #<?php echo esc_attr($unique_id); ?> .card-badge {
                position: absolute;
                top: -12px;
                left: 50%;
                transform: translateX(-50%);
                padding: 8px 20px;
                border-radius: 20px;
                font-size: 14px;
                font-weight: 700;
                text-transform: uppercase;
                letter-spacing: 0.5px;
                color: white;
            }

            #<?php echo esc_attr($unique_id); ?> .card-title {
                font-size: 24px;
                font-weight: 900;
                text-transform: uppercase;
                margin-bottom: 4px;
                letter-spacing: 0.5px;
            }

            #<?php echo esc_attr($unique_id); ?> .card-subtitle {
                font-size: 16px;
                font-weight: 600;
                text-transform: uppercase;
                margin-bottom: 8px;
                opacity: 0.8;
            }

            #<?php echo esc_attr($unique_id); ?> .card-shipping {
                font-size: 14px;
                margin-bottom: 20px;
                opacity: 0.9;
            }

            #<?php echo esc_attr($unique_id); ?> .card-pricing {
                margin-bottom: 16px;
            }

            #<?php echo esc_attr($unique_id); ?> .original-price {
                font-size: 20px;
                text-decoration: line-through;
                opacity: 0.6;
                margin-right: 8px;
            }

            #<?php echo esc_attr($unique_id); ?> .current-price {
                font-size: 32px;
                font-weight: 900;
            }

            #<?php echo esc_attr($unique_id); ?> .price-each {
                font-size: 16px;
                margin-left: 8px;
                opacity: 0.8;
            }

            #<?php echo esc_attr($unique_id); ?> .savings {
                font-size: 18px;
                font-weight: 700;
                margin-bottom: 20px;
                text-transform: uppercase;
            }

            #<?php echo esc_attr($unique_id); ?> .guarantee {
                background: #374151;
                color: white;
                padding: 12px;
                border-radius: 0 0 12px 12px;
                margin: 24px -24px -24px -24px;
                font-size: 16px;
                font-weight: 700;
                text-transform: uppercase;
                letter-spacing: 0.5px;
            }

            #<?php echo esc_attr($unique_id); ?> .red-card .guarantee {
                background: rgba(0, 0, 0, 0.3);
            }

            #<?php echo esc_attr($unique_id); ?> .add-to-cart-button {
                width: 100%;
                padding: 16px 24px;
                background: <?php echo esc_attr($settings['button_bg_color'] ?? '#ef4444'); ?>;
                color: white;
                border: none;
                border-radius: 8px;
                font-size: 18px;
                font-weight: 700;
                text-transform: uppercase;
                cursor: pointer;
                transition: all 0.3s ease;
                margin-top: 20px;
                font-family: 'Gilroy', sans-serif;
            }

            #<?php echo esc_attr($unique_id); ?> .add-to-cart-button:hover {
                filter: brightness(0.9);
                transform: translateY(-2px);
            }

            #<?php echo esc_attr($unique_id); ?> .add-to-cart-button:disabled {
                background: #9ca3af;
                cursor: not-allowed;
                transform: none;
            }

            #<?php echo esc_attr($unique_id); ?> .error-message {
                color: #ef4444;
                background: #fef2f2;
                border: 1px solid #fecaca;
                padding: 12px;
                border-radius: 8px;
                margin-bottom: 20px;
                display: none;
            }

            /* WCS ATT specific styles */
            .wcsatt-options-wrapper.wcsatt-options-wrapper-radio .wcsatt-options-product--hidden li {
                display: inline-block;
                margin-right: 10px;
            }
            .wcsatt-options-wrapper.wcsatt-options-wrapper-radio .wcsatt-options-product--hidden label {
                display: inline-block;
                padding: 5px 10px;
                border: 1px solid #ccc;
                border-radius: 4px;
                cursor: pointer;
            }
            .wcsatt-options-wrapper.wcsatt-options-wrapper-radio .wcsatt-options-product--hidden input[type="radio"]:checked + label {
                background-color: #3b82f6;
                color: white;
                border-color: #3b82f6;
            }

            @media (max-width: 768px) {
                #<?php echo esc_attr($unique_id); ?> .subscription-grid {
                    grid-template-columns: repeat(2, 1fr);
                    grid-template-rows: auto;
                    gap: 12px;
                }
                
                #<?php echo esc_attr($unique_id); ?> .subscription-card {
                    padding: 16px 12px;
                }
                
                #<?php echo esc_attr($unique_id); ?> .card-title {
                    font-size: 16px;
                }
                
                #<?php echo esc_attr($unique_id); ?> .card-subtitle {
                    font-size: 13px;
                }
                
                #<?php echo esc_attr($unique_id); ?> .card-shipping {
                    font-size: 12px;
                }
                
                #<?php echo esc_attr($unique_id); ?> .original-price {
                    font-size: 16px;
                }
                
                #<?php echo esc_attr($unique_id); ?> .current-price {
                    font-size: 24px;
                }
                
                #<?php echo esc_attr($unique_id); ?> .price-each {
                    font-size: 13px;
                    display: block;
                    margin-left: 0;
                    margin-top: 4px;
                }
                
                #<?php echo esc_attr($unique_id); ?> .savings {
                    font-size: 14px;
                }
                
                #<?php echo esc_attr($unique_id); ?> .guarantee {
                    font-size: 13px;
                    padding: 10px;
                    margin: 16px -12px -16px -12px;
                }
                
                #<?php echo esc_attr($unique_id); ?> .card-badge {
                    font-size: 11px;
                    padding: 6px 12px;
                }
                
                #<?php echo esc_attr($unique_id); ?> .add-to-cart-button {
                    font-size: 16px;
                    padding: 14px 20px;
                }
            }
            </style>

            <!-- Updated form structure to match WooCommerce subscription form exactly -->
            <form class="cart" action="<?php echo esc_url(apply_filters('woocommerce_add_to_cart_form_action', get_permalink($product_id))); ?>" method="post" enctype="multipart/form-data">
                
                <!-- Subscribe to action radio buttons (required by WCS ATT) -->
                <div class="wcsatt-options-wrapper" style="display: none;">
                    <input type="radio" name="subscribe-to-action-input" value="no" id="subscribe-to-action-no-<?php echo esc_attr($product_id); ?>" checked="checked">
                    <label for="subscribe-to-action-no-<?php echo esc_attr($product_id); ?>">One-time purchase</label>
                    
                    <input type="radio" name="subscribe-to-action-input" value="yes" id="subscribe-to-action-yes-<?php echo esc_attr($product_id); ?>">
                    <label for="subscribe-to-action-yes-<?php echo esc_attr($product_id); ?>">Subscribe</label>
                </div>

                <!-- Subscription options dropdown (required by WCS ATT) -->
                <select name="convert_to_sub_dropdown<?php echo esc_attr($product_id); ?>" style="display: none;">
                    <option value="0">One-time purchase</option>
                    <?php foreach ($plans as $plan): ?>
                        <?php if ($plan['convert_value'] !== '0'): ?>
                            <option value="<?php echo esc_attr($plan['convert_value']); ?>"><?php echo esc_html($plan['title']); ?></option>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </select>

                <!-- Hidden radio inputs for subscription schemes (required by WCS ATT) -->
                <div class="wcsatt-options-product" style="display: none;">
                    <?php foreach ($plans as $plan): ?>
                        <input type="radio" 
                               name="convert_to_sub_<?php echo esc_attr($product_id); ?>" 
                               value="<?php echo esc_attr($plan['convert_value']); ?>"
                               id="convert_to_sub_<?php echo esc_attr($product_id); ?>_<?php echo esc_attr($plan['key']); ?>"
                               data-custom_data="<?php echo esc_attr(json_encode(['key' => $plan['key'], 'title' => $plan['title']])); ?>"
                               <?php echo $plan['key'] === 'one_time' ? 'checked="checked"' : ''; ?>>
                    <?php endforeach; ?>
                </div>

                <!-- Visual Plan Selection Grid -->
                <div class="subscription-grid">
                    <?php 
                    $plan_index = 0;
                    foreach ($plans as $plan): 
                        $savings = $this->calculate_savings($plan['original_price'], $plan['price']);
                        $is_red_card = $plan['bg_color'] === '#ef4444';
                        $plan_index++;
                    ?>
                        <div class="subscription-card <?php echo $is_red_card ? 'red-card' : ''; ?>" 
                             data-plan="<?php echo esc_attr($plan['key']); ?>" 
                             data-convert-value="<?php echo esc_attr($plan['convert_value']); ?>"
                             data-plan-index="<?php echo esc_attr($plan_index); ?>"
                             style="background-color: <?php echo esc_attr($plan['bg_color']); ?>; color: <?php echo esc_attr($plan['text_color']); ?>;">
                            
                            <?php if (!empty($plan['badge'])): ?>
                                <div class="card-badge" style="background-color: <?php echo esc_attr($plan['badge_color']); ?>;">
                                    <?php echo esc_html($plan['badge']); ?>
                                </div>
                            <?php endif; ?>

                            <div class="card-title"><?php echo esc_html($plan['title']); ?></div>
                            <div class="card-subtitle"><?php echo esc_html($plan['subtitle']); ?></div>
                            <div class="card-shipping">(<?php echo esc_html($plan['shipping']); ?>)</div>

                            <div class="card-pricing">
                                <span class="original-price">$<?php echo number_format($plan['original_price'], 2); ?></span>
                                <span class="current-price">$<?php echo number_format($plan['price'], 2); ?></span>
                                <?php if (!empty($plan['price_each'])): ?>
                                    <span class="price-each"><?php echo esc_html($plan['price_each']); ?></span>
                                <?php endif; ?>
                            </div>

                            <div class="savings">
                                SAVE $<?php echo number_format($savings['amount'], 0); ?> (<?php echo $savings['percent']; ?>%)
                            </div>

                            <div class="guarantee"><?php echo esc_html($plan['guarantee']); ?></div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <!-- Standard WooCommerce form fields -->
                <div class="quantity">
                    <input type="number" name="quantity" value="1" min="1" step="1" style="display: none;">
                </div>

                <button type="submit" name="add-to-cart" value="<?php echo esc_attr($product_id); ?>" class="single_add_to_cart_button button alt add-to-cart-button">
                    <?php echo esc_html($settings['button_text'] ?? 'Add to Cart'); ?>
                </button>
            </form>

            <!-- Updated JavaScript to work with proper WooCommerce form structure -->
            <script>
            (function() {
                var uniqueId = '<?php echo esc_js($unique_id); ?>';
                var productId = <?php echo intval($product_id); ?>;

                console.log('[v0] Initializing subscription form for product:', productId);

                // Card selection
                document.querySelectorAll('#' + uniqueId + ' .subscription-card').forEach(function(card) {
                    card.addEventListener('click', function() {
                        // Remove selected class from all cards
                        document.querySelectorAll('#' + uniqueId + ' .subscription-card').forEach(function(c) {
                            c.classList.remove('selected');
                        });
                        
                        // Add selected class to clicked card
                        this.classList.add('selected');
                        
                        // Get the convert value for this plan
                        var convertValue = this.getAttribute('data-convert-value');
                        var planKey = this.getAttribute('data-plan');
                        
                        console.log('[v0] Selected plan:', planKey, 'Convert value:', convertValue);
                        
                        // Update all the required form fields
                        // 1. Update the subscription radio buttons
                        var subscribeRadio = document.querySelector('#' + uniqueId + ' input[name="subscribe-to-action-input"][value="' + (convertValue === '0' ? 'no' : 'yes') + '"]');
                        if (subscribeRadio) {
                            subscribeRadio.checked = true;
                            console.log('[v0] Updated subscribe-to-action-input to:', subscribeRadio.value);
                        }
                        
                        // 2. Update the dropdown
                        var dropdown = document.querySelector('#' + uniqueId + ' select[name="convert_to_sub_dropdown' + productId + '"]');
                        if (dropdown) {
                            dropdown.value = convertValue;
                            console.log('[v0] Updated dropdown to:', convertValue);
                        }
                        
                        // 3. Update the hidden radio button
                        var radioButton = document.querySelector('#' + uniqueId + ' input[name="convert_to_sub_' + productId + '"][value="' + convertValue + '"]');
                        if (radioButton) {
                            radioButton.checked = true;
                            console.log('[v0] Updated convert_to_sub radio to:', convertValue);
                        }
                    });
                });

                // Initialize - select first plan by default
                var firstCard = document.querySelector('#' + uniqueId + ' .subscription-card');
                if (firstCard) {
                    firstCard.click();
                }

                // Debug form submission
                var form = document.querySelector('#' + uniqueId + ' form.cart');
                if (form) {
                    form.addEventListener('submit', function(e) {
                        console.log('[v0] Form submitting with data:');
                        var formData = new FormData(form);
                        for (var pair of formData.entries()) {
                            console.log('[v0]', pair[0] + ':', pair[1]);
                        }
                    });
                }
            })();
            </script>
        </div>
        <?php
    }
}
