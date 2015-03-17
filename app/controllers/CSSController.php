<?php


class NI_Testimonials_CSSController extends NI_Testimonials_BaseController {
    
        
    /**
     * Prepare our Global Options
     *
     * @return null
     * @added 1.0
     */
    
    public function __construct() {
        
        
        add_action( 'wp_head', array( &$this, 'addCSS' ) );

         
    }
    

    /**
     * Add CSS to pages
     *
     * @return null
     * @added 1.0
     */
    
    public function addCSS() {
        
        
        echo '    
                <style>

                    .my-testimonials-container
                    {
                        width: 100%;
                        position: relative;
                        margin: 15px 0px;
                        transition: 0.7s all;
                    }

                    .my-testimonials-container .my-testimonial
                    {
                        position: absolute;
                        top: 0px;
                        left: 0px;
                        right: 0px;
                        display: none;
                    }

                    .my-testimonials-container .my-testimonial h4
                    {
                        font-weight: bold;
                        margin: 10px 0px;
                    }

                    .my-testimonial#my-testimonial-hidden,
                    .my-testimonial#my-testimonial-1
                    {
                        display: block;
                    }

                    .my-testimonial#my-testimonial-hidden
                    {
                        visibility: hidden;
                        position: relative;
                    }

                </style>
                
        ';
        
        
    }
    
}