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
                name : 'Image Right 50%',
                element : 'img',
                attributes :
                {
                        'class' : 'imgtoright'
                }
        },
        {
                name : 'Image Left 50%',
                element : 'img',
                attributes :
                {
                        'class' : 'imgtoleft'
                }
        },
        {
                name : 'Image Right 25%',
                element : 'img',
                attributes :
                {
                        'class' : 'imgtoright-quarter'
                }
        },
        {
                name : 'Image Left 25%',
                element : 'img',
                attributes :
                {
                        'class' : 'imgtoleft-quarter'
                }
        },
        {
                name : 'Image Middle',
                element : 'img',
                attributes :
                {
                        'class' : 'imgtomiddle'
                }
        },
        {
                name : 'External link',
                element : 'a',
                attributes :
                {
                        'class' : 'external-link'
                }
        },
        {
                name : 'Download link',
                element : 'a',
                attributes :
                {
                        'class' : 'download'
                }
        },
        {
                name : 'Colorbox pop-up',
                element : 'a',
                attributes :
                {
                        'class' : 'colorbox'
                }
        }
    ]);
}