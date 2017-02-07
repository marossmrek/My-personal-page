<?php

/**
 * Shortcodes
 */

// [ mouse_con ]
add_shortcode('mouse', 'smrek_mouse_shortcode');
function smrek_mouse_shortcode()
{
    $html = '<div class="col-md-6 col-md-offset-3 arrow"> <div class="mouse"><div class="scroll">&darr;</div></div></div>';
    return $html;
}

// [ welcome ]
add_shortcode('welcome', 'smrek_welcome_shortcode');
function smrek_welcome_shortcode($atts)
{
    $html =  '
                <div class="col-md-6 col-md-offset-3 developer"><div class="wells"><h1>'.$atts['h1'].'</h1><p class="front">'.$atts['p'].'</p></div></div>
              ';
    return $html;
}

// [ table ]
add_shortcode('table', 'smrek_table_shortcode');
function smrek_table_shortcode($atts)
{
    $html =  '
            <div class="col-md-4 my_price">
                <div class="pricing-table pricing-table-start">
                    <h3 class="pricing-title">'.$atts['nazov'].'</h3>
                    <h4 class="pricing-price">
                        <p></p>'.$atts['cena'].'</p>
                    </h4>
                    <ul class="pricing-body">
                        <li>'.$atts['technologa'].'</li>
                        <li>'.$atts['ponuka'].'</li>
                        <li>'.$atts['obsah'].'</li>
                    </ul>
                </div>
           </div>';
    return $html;
}

// [ contact ]
add_shortcode('contact', 'smrek_contact_shortcode');
function smrek_contact_shortcode($atts)
{
    $html =  '<div class="col-md-5 slogan"><h2 class="call_me">'.$atts['oslovenie'].'</h2>
                                    <ul class="contact_phone">
                                        <li class="con_f"><i class="Phone is-animating"></i><p class="number">'.$atts['telko'].'</p></li>
                                    </ul>
             </div>';
    return $html;
}


