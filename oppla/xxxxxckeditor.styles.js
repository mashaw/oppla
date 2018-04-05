/*
Copyright (c) 2003-2013, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.html or http://ckeditor.com/license
*/

/*
 * This file is used/requested by the 'Styles' button.
 * The 'Styles' button is not enabled by default in DrupalFull and DrupalFiltered toolbars.
 */
if(typeof(CKEDITOR) !== 'undefined') {
    CKEDITOR.addStylesSet( 'drupal',
    [
            
            /* Image Styles */

            
         
        {
                name : 'Case Study table,
                element : 'table',
                attributes :
                {
                        'class' : 'case-study'
                }
        },
        {
                name : 'Half column image',
                element : 'p',
                attributes :
                {
                        'class' : 'half_column'
                }
       }
    ]);
}