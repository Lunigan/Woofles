<?php

namespace Shopware\Themes\Woofles;

use Shopware\Components\Form as Form;

class Theme extends \Shopware\Components\Theme
{
    protected $extend = 'Responsive';

    protected $name = <<<'SHOPWARE_EOD'
Woofles theme
SHOPWARE_EOD;

    protected $description = <<<'SHOPWARE_EOD'
Custom theme
SHOPWARE_EOD;

    protected $author = <<<'SHOPWARE_EOD'
Martin DvoĹ™Ăˇk & Jan Rieger
SHOPWARE_EOD;

    protected $license = <<<'SHOPWARE_EOD'

SHOPWARE_EOD;


    /** @var array Defines the files which should be compiled by the javascript compressor */
    protected $javascript = array(
        'src/js/navigation.js',
        'src/js/account.js',
        'src/js/flyin.js',
        'src/js/woofles.js'
    );
    

    public function createConfig(Form\Container\TabContainer $container)
    {
        /** Main configuration tab */
        $wooflesTheme = $this->createTab(
            'woofles_theme',
            'Woofles'
        );        
        $container->addTab($wooflesTheme);

        /** Tab panel for child-tabs */
        $wooflesTabPanel = $this->createTabPanel(
            'woofles_tab_panel',
            [
                'attributes' => [
                    'plain' => true,
                ],
            ]
        );
        $wooflesTheme->addElement($wooflesTabPanel);

        /** General configuration tab */
        $wooflesTabPanel->addTab($this->createGeneralTabConfig());

        /** Header configuration tab */
        $wooflesTabPanel->addTab($this->createHeaderTabConfig());

        /** Footer configuration tab */
        $wooflesTabPanel->addTab($this->createFooterTabConfig());

        /** Homepage configuration tab */        
        $wooflesTabPanel->addTab($this->createHomepageTabConfig());

        /** Listing configuration tab */
        $wooflesTabPanel->addTab($this->createListingTabConfig());

        /** Detail configuration tab */
        $wooflesTabPanel->addTab($this->createDetailTabConfig());

        /** Static pages configuration tab */
        $wooflesTabPanel->addTab($this->createStaticPagesTabConfig());

        /** Checkout configuration tab */
        $wooflesTabPanel->addTab($this->createCheckoutTabConfig());

        /** Forms configuration tab */
        $wooflesTabPanel->addTab($this->createFormsTabConfig());
        
        /** Fly-in configuration tab */
        $wooflesTabPanel->addTab($this->createFlyinPoopupTabConfig());
    }
    
    /**
     * Helper function to create the tab ("Static pages").
     *
     * @return Form\Container\Tab
     */
    private function createGeneralTabConfig(){
        
        $woofles_general = $this->createTab(
            'woofles_general',
            'General',
            [
                'attributes' => [
                    'autoScroll' => true,
                ],
            ]
        );

        // Create the fieldset which is the container of our field
        $woofles_basic_settings = $this->createFieldSet(
            'woofles_basic_settings',
            'Basic settings',
            array(
                'attributes' => array(
                    'layout' => 'column',
                    'height' => 240,
                    'flex' => 0,
                    'defaults' => array(
                        'columnWidth' => 1,
                        'labelWidth' => 250,
                        'margin' => '2 15 2 0'
                    )
                )
            )
        );

        $woofles_service_link_color = $this->createColorPickerField(
            'woofles_service_link_color',
            "Color field",
            "@brand-primary"
        );
        
        // Create the fieldset which is the container of our field
        $woofles_login_popup_settings = $this->createFieldSet(
            'woofles_login_popup_settings',
            'Login pop-up settings',
            array(
                'attributes' => array(
                    'layout' => 'column',
                    'height' => 240,
                    'flex' => 0,
                    'defaults' => array(
                        'columnWidth' => 1,
                        'labelWidth' => 250,
                        'margin' => '2 15 2 0'
                    )
                )
            )
        );

        $woofles_login_popup_enabled = $this->createCheckboxField(
            'woofles_login_popup_enabled',
            "Login by pop-up",
            true
        );

        $woofles_login_popup_type = $this->createSelectField(
            'woofles_login_popup_type',
            'Select login pop-up variant',
            'off_canvas',
            array(
                ['text' => 'Pop-up', 'value' => 'popup'],
                ['text' => 'Fly-In off canvas', 'value' => 'off_canvas']
                )
            
        );

        $woofles_login_popup_bg_color = $this->createColorPickerField(
            'woofles_login_popup_bg_color',
            "Login pop-up background color",
            "@brand-primary"
        );

        $woofles_login_popup_border_color = $this->createColorPickerField(
            'woofles_login_popup_border_color',
            "Login pop-up border color",
            "@brand-primary"
        );

        $woofles_login_popup_text_color = $this->createColorPickerField(
            'woofles_login_popup_text_color',
            "Login pop-up text color",
            "#FFF"
        );

        $woofles_login_popup_width = $this->createTextField(
            'woofles_login_popup_width',
            "Login pop-up width",
            "400px"
        );
        
        //////////////////////////////////////////////////////////////////////////////////////////////////////
        
        $woofles_general_scroll_to_top_settings = $this->createFieldSet(
            'woofles_general_scroll_to_top_settings',
            'Scroll-To-Top settings',
            array(
                'attributes' => array(
                    'layout' => 'column',
                    'height' => 500,
                    'flex' => 0,
                    'defaults' => array(
                        'columnWidth' => 1,
                        'labelWidth' => 250,
                        'margin' => '2 15 2 0'
                    )
                )
            )
        );
        
        $woofles_general_scroll_to_top_is_enabled = $this->createCheckboxField(
            'woofles_general_scroll_to_top_is_enabled',
            "Scroll-To-Top is enabled",
            true
        );
        
        $woofles_general_scroll_to_top_width = $this->createTextField(
            'woofles_general_scroll_to_top_width',
            "Scroll-To-Top width",
            "40px"
        );
        
        $woofles_general_scroll_to_top_height = $this->createTextField(
            'woofles_general_scroll_to_top_height',
            "Scroll-To-Top height",
            "40px"
        );
        
        $woofles_general_scroll_to_top_bottom = $this->createTextField(
            'woofles_general_scroll_to_top_bottom',
            "Scroll-To-Top bottom margin",
            "50px"
        );
        
        $woofles_general_scroll_to_top_right = $this->createTextField(
            'woofles_general_scroll_to_top_right',
            "Scroll-To-Top right margin",
            "50px"
        );
        
        $woofles_general_scroll_to_top_radius = $this->createTextField(
            'woofles_general_scroll_to_top_radius',
            "Scroll-To-Top border-radius",
            "50%"
        );
        $woofles_general_scroll_to_top_radius->setHelp('50% = circle | 0 = Rectangle');

        $woofles_general_scroll_to_top_bg_color = $this->createColorPickerField(
            'woofles_general_scroll_to_top_bg_color',
            "Scroll-To-Top background color",
            "#FFF"
        );
        
        $woofles_general_scroll_to_top_bg_color_hover = $this->createColorPickerField(
            'woofles_general_scroll_to_top_bg_color_hover',
            "Scroll-To-Top background-color hover",
            "@brand-primary"
        );
        
        $woofles_general_scroll_to_top_icon_color = $this->createColorPickerField(
            'woofles_general_scroll_to_top_icon_color',
            "Scroll-To-Top icon color",
            "@brand-primary"
        );
        
        $woofles_general_scroll_to_top_icon_color_hover = $this->createColorPickerField(
            'woofles_general_scroll_to_top_icon_color_hover',
            "Scroll-To-Top icon color hover",
            "#FFF"
        );
        
        $woofles_general_scroll_to_top_border_color = $this->createColorPickerField(
            'woofles_general_scroll_to_top_border_color',
            "Scroll-To-Top border color",
            "@brand-primary"
        );
        
        $woofles_general_scroll_to_top_border_color_hover = $this->createColorPickerField(
            'woofles_general_scroll_to_top_border_color_hover',
            "Scroll-To-Top border-color hover",
            "#FFF"
        );

        $woofles_general_scroll_to_top_font_size = $this->createTextField(
            'woofles_general_scroll_to_top_font_size',
            "Icon font-size",
            "8px"
        );
        
        //////////////////////////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////////////////////////

        // Adding the fields to the fieldset
        $woofles_basic_settings->addElement($woofles_service_link_color);
        
        $woofles_login_popup_settings->addElement($woofles_login_popup_enabled);
        $woofles_login_popup_settings->addElement($woofles_login_popup_type);
        $woofles_login_popup_settings->addElement($woofles_login_popup_bg_color);
        $woofles_login_popup_settings->addElement($woofles_login_popup_border_color);
        $woofles_login_popup_settings->addElement($woofles_login_popup_text_color);
        $woofles_login_popup_settings->addElement($woofles_login_popup_width);

        $woofles_general_scroll_to_top_settings->addElement($woofles_general_scroll_to_top_is_enabled);
        $woofles_general_scroll_to_top_settings->addElement($woofles_general_scroll_to_top_width);
        $woofles_general_scroll_to_top_settings->addElement($woofles_general_scroll_to_top_height);
        $woofles_general_scroll_to_top_settings->addElement($woofles_general_scroll_to_top_bottom);
        $woofles_general_scroll_to_top_settings->addElement($woofles_general_scroll_to_top_right);
        $woofles_general_scroll_to_top_settings->addElement($woofles_general_scroll_to_top_radius);
        $woofles_general_scroll_to_top_settings->addElement($woofles_general_scroll_to_top_bg_color);
        $woofles_general_scroll_to_top_settings->addElement($woofles_general_scroll_to_top_bg_color_hover);
        $woofles_general_scroll_to_top_settings->addElement($woofles_general_scroll_to_top_icon_color);
        $woofles_general_scroll_to_top_settings->addElement($woofles_general_scroll_to_top_icon_color_hover);
        $woofles_general_scroll_to_top_settings->addElement($woofles_general_scroll_to_top_border_color);
        $woofles_general_scroll_to_top_settings->addElement($woofles_general_scroll_to_top_border_color_hover);
        $woofles_general_scroll_to_top_settings->addElement($woofles_general_scroll_to_top_font_size);

        // Adding the fieldset to the tab
        $woofles_general->addElement($woofles_basic_settings);
        $woofles_general->addElement($woofles_login_popup_settings);
        $woofles_general->addElement($woofles_general_scroll_to_top_settings);
        
        return $woofles_general;
    }

    /**
     * Helper function to create the tab ("Header").
     *
     * @return Form\Container\Tab
     */
    private function createHeaderTabConfig(){
        
        $woofles_header = $this->createTab(
            'woofles_header',
            'Header',
            [
                'attributes' => [
                    'autoScroll' => true,
                ],
            ]
        );

        /////////////////////////////////////////////////////////////////////////////////////////////////////////////
        
        // Create the fieldset which is the container of our field
        $woofles_header_basic_settings = $this->createFieldSet(
            'woofles_header_basic_settings',
            'Header basic settings',
            array(
                'attributes' => array(
                    'layout' => 'column',
                    'height' => 150,
                    'flex' => 0,
                    'defaults' => array(
                        'columnWidth' => 1,
                        'labelWidth' => 250,
                        'margin' => '2 15 2 0'
                    )
                )
            )
        );

        // Create the checkbox
        $woofles_header_homepage_in_navigation = $this->createCheckboxField(
            'woofles_header_homepage_in_navigation',
            'Add homepage to navigation',
            true
        );

        /////////////////////////////////////////////////////////////////////////////////////////////////////////////
        
        // Create the fieldset which is the container of our field
        $woofles_header_sticky_settings = $this->createFieldSet(
            'woofles_header_sticky_settings',
            'Sticky-header settings',
            array(
                'attributes' => array(
                    'layout' => 'column',
                    'height' => 120,
                    'flex' => 0,
                    'defaults' => array(
                        'columnWidth' => 1,
                        'labelWidth' => 250,
                        'margin' => '2 15 2 0'
                    )
                )
            )
        );
        
        // Create the checkbox
        $woofles_sticky_header_is_enabled = $this->createCheckboxField(
            'woofles_sticky_header_is_enabled',
            'Enable sticky-header',
            true
        );
        
        // Create the checkbox
        $woofles_sticky_header_hide_navigation = $this->createCheckboxField(
            'woofles_sticky_header_hide_navigation',
            'Hide navigation on scroll-down',
            true
        );

        /////////////////////////////////////////////////////////////////////////////////////////////////////////////

        // Create the fieldset which is the container of our field
        $woofles_header_icons_settings = $this->createFieldSet(
            'woofles_header_icons_settings',
            'Header icons settings',
            array(
                'attributes' => array(
                    'layout' => 'column',
                    'height' => 120,
                    'flex' => 0,
                    'defaults' => array(
                        'columnWidth' => 1,
                        'labelWidth' => 250,
                        'margin' => '2 15 2 0'
                    )
                )
            )
        );
        
        // Create the checkbox
        $woofles_header_account_icon_only = $this->createCheckboxField(
            'woofles_header_account_icon_only',
            'My account icon-only',
            true
        );
        
        // Create the checkbox
        $woofles_header_service_in_topbar = $this->createCheckboxField(
            'woofles_header_service_in_topbar',
            'Show "Service/Help" in Topbar',
            true
        );

        /////////////////////////////////////////////////////////////////////////////////////////////////////////////
        
        $woofles_sticky_header_hide_navigation->setHelp("Works ONLY with sticky-header turned ON");

        // Adding the fields to the fieldset
        $woofles_header_basic_settings->addElement($woofles_header_homepage_in_navigation);
        
        $woofles_header_sticky_settings->addElement($woofles_sticky_header_is_enabled);
        $woofles_header_sticky_settings->addElement($woofles_sticky_header_hide_navigation);

        $woofles_header_icons_settings->addElement($woofles_header_account_icon_only);
        $woofles_header_icons_settings->addElement($woofles_header_service_in_topbar);
        
        // Adding the fieldset to the tab
        $woofles_header->addElement($woofles_header_basic_settings);
        $woofles_header->addElement($woofles_header_sticky_settings);
        $woofles_header->addElement($woofles_header_icons_settings);
        
        return $woofles_header;
    }
    
    /**
     * Helper function to create the tab ("Footer").
     *
     * @return Form\Container\Tab
     */
    private function createFooterTabConfig(){
        
        $woofles_footer = $this->createTab(
            'woofles_footer',
            'Footer',
            [
                'attributes' => [
                    'autoScroll' => true,
                ],
            ]
        );
        
        // Create the fieldset which is the container of our field
        $woofles_footer_basic_settings = $this->createFieldSet(
            'woofles_footer_basic_settings',
            'Footer basic settings',
            array(
                'attributes' => array(
                    'layout' => 'column',
                    'flex' => 0,
                    'defaults' => array(
                        'columnWidth' => 1,
                        'labelWidth' => 250,
                        'margin' => '2 15 2 0'
                    )
                )
            )
        );

        $woofles_footer_headlines_size = $this->createTextField(
            'woofles_footer_headlines_size',
            'Column headlines font-size',
            '18px'
        );

        $woofles_footer_headlines_weight = $this->createTextField(
            'woofles_footer_headlines_weight',
            'Column headlines font-weight',
            '600'
        );

        $woofles_footer_headlines_color = $this->createColorPickerField(
            'woofles_footer_headlines_color',
            'Column headlines color',
            '@brand-primary'
        );

        $woofles_footer_links_size = $this->createTextField(
            'woofles_footer_links_size',
            'Links font-size',
            '16px'
        );

        $woofles_footer_links_weight = $this->createTextField(
            'woofles_footer_links_weight',
            'Links font-weight',
            '100'
        );

        $woofles_footer_links_color = $this->createColorPickerField(
            'woofles_footer_links_color',
            'Links color',
            'darken(@brand-primary, 20%)'
        );

        $woofles_footer_links__hover_color = $this->createColorPickerField(
            'woofles_footer_links__hover_color',
            'Links hover-color',
            '@brand-primary'
        );

        $woofles_footer_phone_size = $this->createTextField(
            'woofles_footer_phone_size',
            'Phone font-size',
            '18px'
        );

        $woofles_footer_phone_weight = $this->createTextField(
            'woofles_footer_phone_weight',
            'Phone font-size',
            '600'
        );

        $woofles_footer_newsletter_text_size = $this->createTextField(
            'woofles_footer_newsletter_text_size',
            'Newsletter text font-size',
            '14px'
        );

        $woofles_footer_bg_color = $this->createColorPickerField(
            'woofles_footer_bg_color',
            'Footer background-color',
            'lighten(@brand-secondary, 30%)'
        );
        

        // Adding the fields to the fieldset
        $woofles_footer_basic_settings->addElement($woofles_footer_headlines_size);
        $woofles_footer_basic_settings->addElement($woofles_footer_headlines_weight);
        $woofles_footer_basic_settings->addElement($woofles_footer_headlines_color);
        $woofles_footer_basic_settings->addElement($woofles_footer_links_size);
        $woofles_footer_basic_settings->addElement($woofles_footer_links_weight);
        $woofles_footer_basic_settings->addElement($woofles_footer_links_color);
        $woofles_footer_basic_settings->addElement($woofles_footer_links__hover_color);
        $woofles_footer_basic_settings->addElement($woofles_footer_phone_size);
        $woofles_footer_basic_settings->addElement($woofles_footer_phone_weight);
        $woofles_footer_basic_settings->addElement($woofles_footer_newsletter_text_size);
        $woofles_footer_basic_settings->addElement($woofles_footer_bg_color);

        // Adding the fieldset to the tab
        $woofles_footer->addElement($woofles_footer_basic_settings);
        
        return $woofles_footer;
    }
    
    /**
     * Helper function to create the tab ("Homepage").
     *
     * @return Form\Container\Tab
     */
    private function createHomepageTabConfig(){
        
        $woofles_homepage = $this->createTab(
            'woofles_homepage',
            'Homepage',
            [
                'attributes' => [
                    'autoScroll' => true,
                ],
            ]
        );
        
        // Create the fieldset which is the container of our field
        $woofles_homepage_basic_settings = $this->createFieldSet(
            'woofles_homepage_basic_settings',
            'Homepage basic settings',
            array(
                'attributes' => array(
                    'layout' => 'column',
                    'flex' => 0,
                    'defaults' => array(
                        'columnWidth' => 1,
                        'labelWidth' => 250,
                        'margin' => '2 15 2 0'
                    )
                )
            )
        );
        
        // Create the checkbox
        $woofles_homepage_emotion_is_full_width = $this->createCheckboxField(
            'woofles_homepage_emotion_is_full_width',
            "100% width emotions on homepage",
            true
        );

        // Create the textfield
        $woofles_homepage_emotion_width = $this->createTextField(
            'woofles_homepage_emotion_width',
            'Shopping worlds width on homepage',
            '100%'
        );

        // Adding the fields to the fieldset
        $woofles_homepage_basic_settings->addElement($woofles_homepage_emotion_is_full_width);
        $woofles_homepage_basic_settings->addElement($woofles_homepage_emotion_width);
        // Adding the fieldset to the tab
        $woofles_homepage->addElement($woofles_homepage_basic_settings);
        
        return $woofles_homepage;
    }
    
    /**
     * Helper function to create the tab ("Listing").
     *
     * @return Form\Container\Tab
     */
    private function createListingTabConfig(){
        
        $woofles_listing = $this->createTab(
            'woofles_listing',
            'Product listing',
            [
                'attributes' => [
                    'autoScroll' => true,
                ],
            ]
        );
        
        // Create the fieldset which is the container of our field
        $woofles_listing_topseller_settings = $this->createFieldSet(
            'woofles_listing_topseller_settings',
            'Listing topseller settings',
            array(
                'attributes' => array(
                    'layout' => 'column',
                    'height' => 120,
                    'flex' => 0,
                    'defaults' => array(
                        'columnWidth' => 1,
                        'labelWidth' => 250,
                        'margin' => '2 15 2 0'
                    )
                )
            )
        );
        
        // Create the fieldset which is the container of our field
        $woofles_listing_boxes_settings = $this->createFieldSet(
            'woofles_listing_boxes_settings',
            'Listing product-boxes settings',
            array(
                'attributes' => array(
                    'layout' => 'column',
                    'height' => 150,
                    'flex' => 0,
                    'defaults' => array(
                        'columnWidth' => 1,
                        'labelWidth' => 250,
                        'margin' => '2 15 2 0'
                    )
                )
            )
        );

        
        $woofles_listing_display_topseller_on_firstpage = $this->createCheckboxField(
            'woofles_listing_display_topseller_on_firstpage',
            'Show TopSeller on first page of listing',
            true
        );
        
        $woofles_listing_display_topseller_on_firstpage_only = $this->createCheckboxField(
            'woofles_listing_display_topseller_on_firstpage_only',
            'Show TopSeller ONLY on first page of listing',
            true
        );
        
        $woofles_listing_boxes_price_color = $this->createColorPickerField(
            'woofles_listing_boxes_price_color',
            'Product-box price color',
            ''
        );
        
        $woofles_listing_boxes_pseudoprice_color = $this->createColorPickerField(
            'woofles_listing_boxes_pseudoprice_color',
            'Product-box pseudo-price color',
            ''
        );
        
        $woofles_listing_boxes_default_price_color = $this->createColorPickerField(
            'woofles_listing_boxes_default_price_color',
            'Product-box default-price color',
            ''
        );

        // Adding the fields to the fieldset
        $woofles_listing_topseller_settings->addElement($woofles_listing_display_topseller_on_firstpage);
        $woofles_listing_topseller_settings->addElement($woofles_listing_display_topseller_on_firstpage_only);
        
        $woofles_listing_boxes_settings->addElement($woofles_listing_boxes_price_color);
        $woofles_listing_boxes_settings->addElement($woofles_listing_boxes_pseudoprice_color);
        $woofles_listing_boxes_settings->addElement($woofles_listing_boxes_default_price_color);
        
        // Adding the fieldset to the tab
        $woofles_listing->addElement($woofles_listing_topseller_settings);
        $woofles_listing->addElement($woofles_listing_boxes_settings);
        
        return $woofles_listing;
    }
    
    /**
     * Helper function to create the tab ("Detail").
     *
     * @return Form\Container\Tab
     */
    private function createDetailTabConfig(){
        
        $woofles_detail = $this->createTab(
            'woofles_detail',
            'Product detail',
            [
                'attributes' => [
                    'autoScroll' => true,
                ],
            ]
        );
        
        // Create the fieldset which is the container of our field
        $woofles_detail_basic_settings = $this->createFieldSet(
            'woofles_detail_basic_settings',
            'Detail basic settings',
            array(
                'attributes' => array(
                    'layout' => 'column',
                    'flex' => 0,
                    'defaults' => array(
                        'columnWidth' => 1,
                        'labelWidth' => 250,
                        'margin' => '2 15 2 0'
                    )
                )
            )
        );
        
        // Create the checkbox
        $woofles_detail_hide_similar_products_stream = $this->createCheckboxField(
            'woofles_detail_hide_similar_products_stream',
            'Hide \'Similar products\' stream',
            false
        );
        
        // Create the checkbox
        $woofles_detail_hide_accessory_products_stream = $this->createCheckboxField(
            'woofles_detail_hide_accessory_products_stream',
            'Hide \'Accessory products\' stream',
            false
        );
        
        // Create the checkbox
        $woofles_detail_hide_also_viewed_products_stream = $this->createCheckboxField(
            'woofles_detail_hide_also_viewed_products_stream',
            'Hide \'Also viewed products\' stream',
            false
        );

        // Create the textfield
        $woofles_detail_product_name_size = $this->createTextField(
            'woofles_detail_product_name_size',
            'Product name font-size',
            ''
        );
        
        // Create the textfield
        $woofles_detail_product_price_size = $this->createTextField(
            'woofles_detail_product_price_size',
            'Product price font-size',
            ''
        );
        
        // Create the textfield
        $woofles_detail_product_pseudoprice_size = $this->createTextField(
            'woofles_detail_product_pseudoprice_size',
            'Product pseudo-price font-size',
            ''
        );
        
        // Create the textfield
        $woofles_detail_product_default_price_size = $this->createTextField(
            'woofles_detail_product_default_price_size',
            'Product default-price font-size',
            ''
        );

        // Adding the fields to the fieldset
        $woofles_detail_basic_settings->addElement($woofles_detail_hide_similar_products_stream);
        $woofles_detail_basic_settings->addElement($woofles_detail_hide_accessory_products_stream);
        $woofles_detail_basic_settings->addElement($woofles_detail_hide_also_viewed_products_stream);
        $woofles_detail_basic_settings->addElement($woofles_detail_product_name_size);
        $woofles_detail_basic_settings->addElement($woofles_detail_product_price_size);
        $woofles_detail_basic_settings->addElement($woofles_detail_product_pseudoprice_size);
        $woofles_detail_basic_settings->addElement($woofles_detail_product_default_price_size);
        
        // Adding the fieldset to the tab
        $woofles_detail->addElement($woofles_detail_basic_settings);
        
        return $woofles_detail;
    }
    
    /**
     * Helper function to create the tab ("Static pages").
     *
     * @return Form\Container\Tab
     */
    private function createStaticPagesTabConfig(){
        
        $woofles_static_pages = $this->createTab(
            'woofles_static_pages',
            'Static pages',
            [
                'attributes' => [
                    'autoScroll' => true,
                ],
            ]
        );
        
        // Create the fieldset which is the container of our field
        $woofles_static_pages_basic_settings = $this->createFieldSet(
            'woofles_static_pages_basic_settings',
            'Static pages basic settings',
            array(
                'attributes' => array(
                    'layout' => 'column',
                    'flex' => 0,
                    'defaults' => array(
                        'columnWidth' => 1,
                        'labelWidth' => 250,
                        'margin' => '2 15 2 0'
                    )
                )
            )
        );
        
        // Create the checkbox
        $woofles_static_pages_paragraphs_bottom_margin = $this->createTextField(
            'woofles_static_pages_paragraphs_bottom_margin',
            "margin-bottom of paragraphs",
            ''
        );

        // Create the textfield
        $woofles_homepage_emotion_width = $this->createTextField(
            'woofles_homepage_emotion_width',
            'Shopping worlds width on homepage',
            '100%'
        );

        // Adding the fields to the fieldset
        $woofles_static_pages_basic_settings->addElement($woofles_static_pages_paragraphs_bottom_margin);
        // Adding the fieldset to the tab
        $woofles_static_pages->addElement($woofles_static_pages_basic_settings);
        
        return $woofles_static_pages;
    }
    
    /**
     * Helper function to create the tab ("Checkout").
     *
     * @return Form\Container\Tab
     */
    private function createCheckoutTabConfig(){
        
        $woofles_checkout = $this->createTab(
            'woofles_checkout',
            'Checkout',
            [
                'attributes' => [
                    'autoScroll' => true,
                ],
            ]
        );
        
        // Create the fieldset which is the container of our field
        $woofles_checkout_shipping_logo_settings = $this->createFieldSet(
            'woofles_checkout_shipping_logo_settings',
            'Checkout shipping-logo settings',
            array(
                'attributes' => array(
                    'layout' => 'column',
                    'flex' => 0,
                    'defaults' => array(
                        'columnWidth' => 1,
                        'labelWidth' => 250,
                        'margin' => '2 15 2 0'
                    )
                )
            )
        );
        
        // Create the fieldset which is the container of our field
        $woofles_checkout_payment_logo_settings = $this->createFieldSet(
            'woofles_checkout_payment_logo_settings',
            'Checkout payment-logo settings',
            array(
                'attributes' => array(
                    'layout' => 'column',
                    'flex' => 0,
                    'defaults' => array(
                        'columnWidth' => 1,
                        'labelWidth' => 250,
                        'margin' => '2 15 2 0'
                    )
                )
            )
        );
        
        // Create the checkbox
        $woofles_checkout_add_custom_shipping_logos = $this->createCheckboxField(
            'woofles_checkout_add_custom_shipping_logos',
            "Add custom shipping-methods logo",
            false
        );

        // Create the textfield
        $woofles_checkout_custom_shipping_logos = $this->createMediaField(
            'woofles_checkout_custom_shipping_logos',
            'Custom shipping-methods logo',
            ''
        );
        
        // Create the checkbox
        $woofles_checkout_add_custom_payment_logos = $this->createCheckboxField(
            'woofles_checkout_add_custom_payment_logos',
            "Add custom payment-methods logo",
            false
        );

        // Create the textfield
        $woofles_checkout_custom_payment_logos = $this->createMediaField(
            'woofles_checkout_custom_payment_logos',
            'Custom payment-methods logo',
            ''
        );

        // Adding the fields to the fieldset
        $woofles_checkout_shipping_logo_settings->addElement($woofles_checkout_add_custom_shipping_logos);
        $woofles_checkout_shipping_logo_settings->addElement($woofles_checkout_custom_shipping_logos);
        $woofles_checkout_payment_logo_settings->addElement($woofles_checkout_add_custom_payment_logos);
        $woofles_checkout_payment_logo_settings->addElement($woofles_checkout_custom_payment_logos);
        // Adding the fieldset to the tab
        $woofles_checkout->addElement($woofles_checkout_shipping_logo_settings);
        $woofles_checkout->addElement($woofles_checkout_payment_logo_settings);
        
        return $woofles_checkout;
    }
    
    /**
     * Helper function to create the tab ("Forms").
     *
     * @return Form\Container\Tab
     */
    private function createFormsTabConfig(){
        
        $woofles_forms = $this->createTab(
            'woofles_forms',
            'Forms',
            [
                'attributes' => [
                    'autoScroll' => true,
                ],
            ]
        );
        
        // Create the fieldset which is the container of our field
        $woofles_forms_basic_settings = $this->createFieldSet(
            'woofles_forms_basic_settings',
            'Forms basic settings',
            array(
                'attributes' => array(
                    'layout' => 'column',
                    'flex' => 0,
                    'defaults' => array(
                        'columnWidth' => 1,
                        'labelWidth' => 250,
                        'margin' => '2 15 2 0'
                    )
                )
            )
        );
        
        $woofles_forms_label_margin_bottom = $this->createTextField(
            'woofles_forms_label_margin_bottom',
            "Label's margin-bottom",
                ''
        );

        $woofles_forms_input_margin_bottom = $this->createTextField(
            'woofles_forms_input_margin_bottom',
            'Input\'s margin-bottom',
                ''
        );

        // Adding the fields to the fieldset
        $woofles_forms_basic_settings->addElement($woofles_forms_label_margin_bottom);
        $woofles_forms_basic_settings->addElement($woofles_forms_input_margin_bottom);
        // Adding the fieldset to the tab
        $woofles_forms->addElement($woofles_forms_basic_settings);
        
        return $woofles_forms;
    }
    
    /**
     * Helper function to create the tab ("Fly-in").
     * Warning: Easter-egg below! LOOL
     *
     * @return Form\Container\Tab
     */
    private function createFlyinPoopupTabConfig(){
        
        $woofles_flyin = $this->createTab(
            'woofles_flyin',
            'Fly-in',
            [
                'attributes' => [
                    'autoScroll' => true,
                ],
            ]
        );
        
        
        ///////////////////////////////////////////////////////////////////////////////////////////////////////////

        // Create the fieldset which is the container of our field
        $woofles_flyin_basic_settings = $this->createFieldSet(
            'woofles_flyin_basic_settings',
            'Fly-in basic settings',
            array(
                'attributes' => array(
                    'layout' => 'column',
                    'height' => 390,
                    'flex' => 0,
                    'defaults' => array(
                        'columnWidth' => 1,
                        'labelWidth' => 250,
                        'margin' => '2 15 2 0'
                    )
                )
            )
        );
        
        $woofles_flyin_is_enabled = $this->createCheckboxField(
            'woofles_flyin_is_enabled',
            "Enable fly-in",
            false
        );

        $woofles_flyin_content_type = $this->createSelectField(
            'woofles_flyin_content_type',
            'Select fly-in content type',
            'img',
            array(
                ['text' => 'Image', 'value' => 'img'],
                ['text' => 'Digital publishing', 'value' => 'dig_punishing'],
                ['text' => 'Custom content', 'value' => 'custom']
                )
            
        );

        $woofles_flyin_position = $this->createSelectField(
            'woofles_flyin_position',
            'Select fly-in position',
            'bottom_right',
            array(
                ['text' => 'Left', 'value' => 'left'],
                ['text' => 'Right', 'value' => 'right'],
                ['text' => 'Bottom left', 'value' => 'bottom_left'],
                ['text' => 'Bottom right', 'value' => 'bottom_right']
                )
            
        );

        $woofles_flyin_margin = $this->createTextField(
            'woofles_flyin_margin',
            "Margin",
            '120px'
        );

        $woofles_flyin_content_width = $this->createTextField(
            'woofles_flyin_content_width',
            "Content width",
            '320px'
        );

        $woofles_flyin_content_height = $this->createTextField(
            'woofles_flyin_content_height',
            "Content height",
            '450px'
        );

        $woofles_flyin_link_href = $this->createTextAreaField(
            'woofles_flyin_link_href',
            "Link",
            '',
            ['attributes' => ['xtype' => 'textarea', 'lessCompatible' => false, 'height' => 50], 'help' => '__woofles_flyin_link_href__']
        );

        $woofles_flyin_is_date_limited = $this->createCheckboxField(
            'woofles_flyin_is_date_limited',
            "Is limited by date",
            false
        );

        $woofles_flyin_date_start = $this->createDateField(
            'woofles_flyin_date_start',
            "Start date",
            date('%d/%m/%Y', time())
        );

        $startDate = time();
        $woofles_flyin_date_end = $this->createDateField(
            'woofles_flyin_date_end',
            "End date",
            date('%d/%m/%Y', strtotime('+1 month', $startDate))
        );

        ///////////////////////////////////////////////////////////////////////////////////////////////////////////
        $woofles_flyin_label_settings = $this->createFieldSet(
            'woofles_flyin_label_settings',
            'Fly-in label settings',
            array(
                'attributes' => array(
                    'layout' => 'column',
                    'height' => 270,
                    'flex' => 0,
                    'defaults' => array(
                        'columnWidth' => 1,
                        'labelWidth' => 250,
                        'margin' => '2 15 2 0'
                    )
                )
            )
        );

        $woofles_flyin_label_content = $this->createTextField(
            'woofles_flyin_label_content',
            "Label content",
            'Woofles fly-in'
        );

        $woofles_flyin_label_font_size = $this->createTextField(
            'woofles_flyin_label_font_size',
            "Label font-size",
            '18px'
        );

        $woofles_flyin_label_font_weight = $this->createTextField(
            'woofles_flyin_label_font_weight',
            "Label font-weight",
            '600'
        );

        $woofles_flyin_label_uppercase = $this->createCheckboxField(
            'woofles_flyin_label_uppercase',
            "Label is uppercase",
            true
        );

        $woofles_flyin_label_font_color = $this->createColorPickerField(
            'woofles_flyin_label_font_color',
            "Label font-color",
            '@brand-primary'
        );

        $woofles_flyin_label_bg_color = $this->createColorPickerField(
            'woofles_flyin_label_bg_color',
            "Label background-color",
            '@brand-secondary'
        );

        $woofles_flyin_label_height = $this->createTextField(
            'woofles_flyin_label_height',
            "Label height",
            '40px'
        );
        
        ///////////////////////////////////////////////////////////////////////////////////////////////////////////


        ///////////////////////////////////////////////////////////////////////////////////////////////////////////
        $woofles_flyin_img_content_settings = $this->createFieldSet(
            'woofles_flyin_img_content_settings',
            'Fly-in image-content settings',
            array(
                'attributes' => array(
                    'layout' => 'column',
                    'height' => 170,
                    'flex' => 0,
                    'defaults' => array(
                        'columnWidth' => 1,
                        'labelWidth' => 250,
                        'margin' => '2 15 2 0'
                    )
                )
            )
        );

        $woofles_flyin_img_content = $this->createMediaField(
            'woofles_flyin_img_content',
            "Image content",
            ''
        );
        
        ///////////////////////////////////////////////////////////////////////////////////////////////////////////


        ///////////////////////////////////////////////////////////////////////////////////////////////////////////
        $woofles_flyin_dig_pub_content_settings = $this->createFieldSet(
            'woofles_flyin_dig_pub_content_settings',
            'Fly-in digital publishing settings',
            array(
                'attributes' => array(
                    'layout' => 'column',
                    'height' => 100,
                    'flex' => 0,
                    'defaults' => array(
                        'columnWidth' => 1,
                        'labelWidth' => 250,
                        'margin' => '2 15 2 0'
                    )
                )
            )
        );

        $woofles_flyin_dig_pub_content = $this->createTextField(
            'woofles_flyin_dig_pub_content',
            "Digital publishing banner ID",
            ''
        );
        $woofles_flyin_dig_pub_content->setHelp('Source of data example: {action module=widgets controller=SwagDigitalPublishing bannerId=11}; ID..bannerId=11');
        
        ///////////////////////////////////////////////////////////////////////////////////////////////////////////


        ///////////////////////////////////////////////////////////////////////////////////////////////////////////
        $woofles_flyin_custom_content_settings = $this->createFieldSet(
            'woofles_flyin_custom_content_settings',
            'Fly-in custom-content settings',
            array(
                'attributes' => array(
                    'layout' => 'column',
                    'height' => 280,
                    'flex' => 0,
                    'defaults' => array(
                        'columnWidth' => 1,
                        'labelWidth' => 250,
                        'margin' => '2 15 2 0'
                    )
                )
            )
        );

        $woofles_flyin_custom_content = $this->createTextAreaField(
            'woofles_flyin_custom_content',
            "Custom content",
            '',
            ['attributes' => ['xtype' => 'textarea', 'lessCompatible' => false, 'height' => 200], 'help' => '__woofles_flyin_custom_content__']
        );
        $woofles_flyin_custom_content->setHelp('Inserting custom html structure is also possible.');
        
        ///////////////////////////////////////////////////////////////////////////////////////////////////////////

        

        // Adding the fields to the fieldset
        $woofles_flyin_basic_settings->addElement($woofles_flyin_is_enabled);
        $woofles_flyin_basic_settings->addElement($woofles_flyin_content_type);
        $woofles_flyin_basic_settings->addElement($woofles_flyin_position);
        $woofles_flyin_basic_settings->addElement($woofles_flyin_margin);
        $woofles_flyin_basic_settings->addElement($woofles_flyin_content_width);
        $woofles_flyin_basic_settings->addElement($woofles_flyin_content_height);
        $woofles_flyin_basic_settings->addElement($woofles_flyin_link_href);
        $woofles_flyin_basic_settings->addElement($woofles_flyin_is_date_limited);
        $woofles_flyin_basic_settings->addElement($woofles_flyin_date_start);
        $woofles_flyin_basic_settings->addElement($woofles_flyin_date_end);

        $woofles_flyin_label_settings->addElement($woofles_flyin_label_content);
        $woofles_flyin_label_settings->addElement($woofles_flyin_label_font_size);
        $woofles_flyin_label_settings->addElement($woofles_flyin_label_font_weight);
        $woofles_flyin_label_settings->addElement($woofles_flyin_label_uppercase);
        $woofles_flyin_label_settings->addElement($woofles_flyin_label_font_color);
        $woofles_flyin_label_settings->addElement($woofles_flyin_label_bg_color);
        $woofles_flyin_label_settings->addElement($woofles_flyin_label_height);

        $woofles_flyin_img_content_settings->addElement($woofles_flyin_img_content);
        
        $woofles_flyin_dig_pub_content_settings->addElement($woofles_flyin_dig_pub_content);
        
        $woofles_flyin_custom_content_settings->addElement($woofles_flyin_custom_content);

        // Adding the fieldset to the tab
        $woofles_flyin->addElement($woofles_flyin_basic_settings);
        $woofles_flyin->addElement($woofles_flyin_label_settings);
        $woofles_flyin->addElement($woofles_flyin_img_content_settings);
        $woofles_flyin->addElement($woofles_flyin_dig_pub_content_settings);
        $woofles_flyin->addElement($woofles_flyin_custom_content_settings);

        
        return $woofles_flyin;
    }
}