<?php


class NI_Testimonials {
    
    
    /**
     * Main Construct for the Whole Application
     * Sets Registry and Default Values (if none present)
     *
     * @return null
     * @added 2.0
     */
    
    public function __construct() {
        
        
        if( !get_option( 'NI_Testimonials_Ver' ) ) :
                add_option( 'NI_Testimonials_Ver', NI_Testimonials_Registry::get( 'config', 'current_version' ) );
        endif;
        
        NI_Testimonials_Registry::set( 'version', get_option( 'NI_Testimonials_Ver' ) );

        
    }
    
        
    /**
     * The main application run function, this sets up all the magic and grunt
     * work of the application, firing off all the different controllers.
     *
     * @return null
     * @added 2.0
     */
    
    public function run() {
        

        new NI_Testimonials_InstallController;
        new NI_Testimonials_UpgradeController;
        new NI_Testimonials_CSSController;
        new NI_Testimonials_GlobalController;
        new NI_Testimonials_PostTypeFactory( new NI_Testimonials_PostType );
        new NI_Testimonials_Shortcodes();

     
    }
    
    
}