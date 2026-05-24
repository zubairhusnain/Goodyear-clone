$(document).ready(function () {



    // Global
    $('.wd_formbuilder .wd_form_field_pos_right').each(function () {
        if( $('input[type="text"]', this)[0] ) {
            $(this).addClass('wd_input-text');
        }
        if( $('a[href*="unsub=1"]', this)[0] ) {
            $(this).addClass('wd_unsub');
        }
    });
    $('.wd_input-text').wrapAll("<div class='wd_input-wrap'></div>");
    $('.wd_search_form_advanced .wd_form_field_pos_right').each(function () {
        if( $('input[type="text"]', this)[0] ) {
            $(this).addClass('wd_input-text');
        } else if($('select', this)[0]) {
            $(this).addClass('wd_input-select');
        }
    });

    $('.cmp-sub-nav__item[data-target="INVESTORS"] .cmp-sub-nav__link').each(function () {
        let link = $(this).attr('href');
        if(link.includes("corporate-reports")) {
            $(this).append(`<p>Corporate responsibility, financial reports and governance documents</p>`);
        }
    });

    $('#wd_printable_content form select').wrap("<div class='wd_select'></div>");
    $('.breadcrumb').append( $('.wd_current-page') );

    $('.wd_form_footer').append($('.wd_unsub'));

    $('.wd_search_form_advanced .wd_form_buttons input[type="submit"]').replaceWith(`<button type="submit" class="wd_search_button" value="Search">Search</button>`);

    $('.cmp-sub-nav__item[data-target="Newsroom"] .cmp-sub-nav__link[href*="corporate-reports"]').attr('href', 'https://corporate.goodyear.com/us/en/commitments/reports-and-policies.html');

    $('.wd_tool_icon a[title="Twitter Share"]').each(function () {
        let link = $(this).attr('href');
        $(this).attr('href', link.replace('//twitter.com', '//x.com'));
        $(this).attr('title', 'X Share');
        $('.wd_sr-only', this).text('Share this page on X');
    });

    // Corporate Reports
    if( $('.wd_pageid_20301')[0] ) {
        $('.wd_category_items .item').each(function () {
            let link = $('.item_name a').attr('href');
            $(this).wrap(`<a class="wd_item_link" href="${link}"></a>`);
        });
    }

    // Homepage
    if( $('.wd_pageid_20303')[0] ) {

        $('.wd_newsfeed_releases-teaser .item').each(function () {
            let img
            let link = $('.wd_title a', this).attr('href');
            $(this).wrap(`<a class="wd_link_item" href="${link}"></a>`);

            $('.item-inner', this).prepend(`<div class="arrow-white">Read Article</div>`);
            if( !($('.wd_thumbnail', this)[0]) ) {
                $(this).parent().css('background-image', 'url(images/goodyear-logo.jpg)');
            } else {
                img = $('.wd_thumbnail img', this).attr('src');
                $(this).parent().css('background-image', `url(${img})`);
                $('.wd_thumbnail', this).remove();
            }
        });

        $('.wd_featureboxes_middle .wd_imagetable img').addClass('wd_desktop');
        $('.wd_featureboxes_middle .wd_featurebox').prepend( $('.wd_featureboxes_middle .wd_imagetable img') );
        $('.wd_featureboxes_middle .wd_imagetable').remove();
        $('.wd_featureboxes_middle .wd_featurebox').prepend(`<img class="wd_tablet" src="images/right-sign-tablet.png" />`);
        $('.wd_featureboxes_middle > div').prepend(`<img class="wd_mobile" src="images/right-sign-mobile.png" />`);
        $('.wd_featureboxes_top p.more a').text(`read all news`);


    }

    // News Release Details
    if( $('.wd_pageid_20295.wd_item_page')[0] ) {

        if ( $('.wd_newsfeed_releases-detail .wd_category_link_list')[0] ) {
            let cat = $('.wd_category_link_list > li:first-child > a').attr('href');
            cat = cat.split("category=")[1];
            $('body').addClass(`wd_category_${cat}`);
        }

        $('.wd_content > .wd_featureboxes_right_side').before( $('.wd_newsfeed_releases-detail .wd_asset_inline_list') );
        $('.header-wrap').append( $('.wd_newsfeed_releases-detail .wd_date') );
        $('.header-wrap').append( $('.wd_newsfeed_releases-detail .wd_title') );
        $('.wd_featureboxes_right_side').prepend( $('.wd_toolbar.wd_toolbar-detail') );
        $('.wd_featureboxes_right_side .wd_toolbar-detail').prepend(`<div class="wd_featurebox_title">Share Article</div>`);
        $('.wd_body > p').each(function () {
            let text = $(this).text();
            if( text.includes('SOURCE  The Goodyear Tire & Rubber Company') ) {
                $(this).remove();
            }
        });

        $('.wd_featureboxes_right_side .item').each(function () {
            let link = $('.wd_title a').attr('href');
            $(this).wrap(`<a class="wd_link-wrap" href="${link}"></a>`);
        });

        $('.wd_asset_inline_list .wd_item').each(function () {
            let view = $('.wd_link_underlay', this).attr('href');
            let download = $('.fa-download', this).parent().attr('href');
            $('.wd_gallery_asset', this).append(`
            <div class="wd_asset-btn-wrap">
                <a href="${view}"><img src="images/icons/view-icon.svg">View</a>
                <a href="${download}"><img src="images/icons/download-icon.svg">Download</a>
            </div>
            `);
            $('.wd_videos_asset', this).append(`
            <div class="wd_asset-btn-wrap">
                <a href="${view}"><img src="images/icons/view-icon.svg">View</a>
            </div>
            `);
        });

        $('.wd_content').append(`
        <div class="wd_alert-cta">
            <h3>Get News Alerts</h3>
            <p>Sign up to receive automatic email alerts for breaking Goodyear news and updates.</p>
            <a href="https://news.goodyear.com/news-alerts" class="wd_anim wd_primary">sign up</a>
        </div>
        `);


        function FullScreenBTN() {
            let limit = 0;
            let get_btn = window.setInterval(function() {

                console.log(limit);
                let myElement = $('.wd_body button.fullscreen-button');
                if(myElement.length != 0) {
                    clearInterval(get_btn);
                    $('.wd_body').append( $('.wd_body button.fullscreen-button')[0] );

                }
                if (limit >= 10) {
                    clearInterval(get_btn);
                }
                limit++;
            
            }, 500)
        };
        FullScreenBTN();



    }

    // News Release
    $('.wd_pageid_20295:not(.wd_item_page) .wd_current-page,.wd_pageid_20295:not(.wd_item_page) .header-title').text('All News');
    $(`.wd_pageid_20295.wd_item_page .breadcrumb a[href*=".com/news"]`).text('All News');
    if( $('.wd_newsfeed_releases')[0]  ) {
        
        $('.wd_item').each(function () {
            let link = $('.wd_title a', this).attr('href');
            $('.wd_item-inner', this).append(`<div class="link-primary-arrow">Read Article</div>`);
            if( !($('.wd_thumbnail', this)[0]) ) {
                $('.wd_item_wrapper', this).prepend(`<div class="wd_thumbnail"><a href="${link}"><img src="images/goodyear-logo.jpg" border="0"></a></div>`);
            } else {
                let img = $('img', this).attr('src');
                if( img.includes('thumbnail=') || img.includes('=thumbnail') ) {
                    img = img.split("thumbnail")[0];
                    $('img', this).attr('src', img);
                }
            }
            $(this).wrap(`<a class="wd_link_item" href="${link}"></a>`);
            
        });
        $('.wd_featureboxes_bottom > div').prepend( $('.wd_featureboxes_bottom .wd_imagetable img') );
        $('.wd_featureboxes_bottom').append( $('.more-dark') );
        $('.wd_featureboxes_bottom .wd_imagetable').remove();
        $('.wd_item_list').append(`<div class="wd_link_item wd_alert-item"></div>`);
        $('.wd_alert-item').append( $('.wd_featureboxes_bottom') );


    }


    if( $('.wd_subscribe2')[0] ) {
        $('input[type="text"][name*="first_name"]', this).attr('placeholder', 'First Name')
        $('input[type="text"][name*="last_name"]', this).attr('placeholder', 'Last Name')
        $('input[type="text"][name*="email"]', this).attr('placeholder', 'Email Address')
        $('input[type="text"][name*="company"]', this).attr('placeholder', 'Company')
        $('input[type="text"][name*="telephone"]', this).attr('placeholder', 'XXX-XXX-XXXX')

        $('.wd_subscribe2 input[value="_All_"] + label').text('All News');
        $('.wd_subscribe2 .wd_formbuilder').append( $(`.wd_subscribe2 .wd_form_field_input a[href*="unsub=1"]`).parent().parent() );
        $('.wd_subscribe2 input[value="771"]').attr('type', 'radio');
        $('.wd_subscribe2 input[value="771"]').removeAttr('disabled');
        $('.wd_subscribe2 input[value="771"] + label').text('Financial News Only');
        $('.wd_subscribe2 input[value="771"]').prop('checked', false);
        $('.wd_subscribe2 input[value="771"]').parent().wrap("<div class='wd_parent_category wd_fin-radio'></div>");
        $('.wd_category_checkboxes').append( $('.wd_fin-radio') );
        $('#subscribe_specific_categories').parent().remove();

        $('.wd_parent_category input').on('click', function () {
            $('.wd_parent_category input').prop('checked', false);
            $(this).prop('checked', true);
        });
    }

    // Submitted Page
    if( $('.wd_subscribe2')[0] && !($('.wd_subscribe2 .wd_formbuilder')[0]) ) {
        let url = window.location.href;
        let link = '/';
        if( url.includes('test.mediaroom.com') || url.includes('stage.mediaroom.com') ) {
            link = '/goodyear';
        } 
        $('.wd_subscribe2').append(`<p class="more"><a href="${link}">Return to newsroom</a></p>`);
    }

    // Unsub Page
    if( $('.wd_subscribe2')[0] && ($('.wd_subscribe2 input[value="Unsubscribe"]')[0]) ) {
        $('.header-title').text('Unsubscribe from News Alerts');
        $('.header-desc').remove();
    }

    // Gallery
    if( $('.wd_gallery')[0] ) {

        $('.wd_item_list .wd_item').each(function () {
            let view = $('.wd_gallery_item', this).attr('href');
            let download = $('.wd_hi_res_link', this).attr('href');
            $('.wd_item_wrapper', this).append(`
            <div class="wd_asset-btn-wrap">
                <a href="${view}">View</a>
                <a href="${download}">Download</a>
            </div>
            `);
        });

    }

    // Button animation
    $('p.more a, button.wd_search_button, .wd_gallery .wd_asset-btn-wrap a:first-child').addClass('wd_anim wd_primary');
    $('.more-dark a, .wd_gallery .wd_asset-btn-wrap a:last-child').addClass('wd_anim wd_dark');
    $('#wd_printable_content input[type="submit"]').each(function () {
        let text = $(this).attr('value');
        let name = $(this).attr('name');
        let type = $(this).attr('type');
        $(this).after(`<button class="wd_anim wd_primary" type="${type}" name="${name}">${text}</button>`);
        $(this).remove();
    });
    $('.wd_subscribe2 .wd_unsub a').text('Unsubscribe From News Alerts');
    $(`.wd_subscribe2 .wd_unsub a, .wd_featureboxes_middle p a, .arrow-white`).addClass('link-primary-arrow');
    $('.link-primary-arrow').append(`<i class="link-arrow"></i>`);

    // function LoadModalImg() {
    //     let get_img = window.setInterval(function() {
            
    //         let myElement = $('.wd_modal-overlay .wd_image');
            
    //         if(myElement.length != 0) {
    //             clearInterval(get_img);
                
    //             $('.wd_modal-overlay .wd_image').each(function() {
    //                 $(this).find('img').attr('src', function() {
    //                     if (this.src.indexOf('?') > 0) {
    //                         return this.src.substring(0, this.src.indexOf('?'));
    //                     }
    //                 });
    //             });
    //         }
            
    //     }, 250)
    // }

    // if($('.wd_modal-overlay ')[0]) {
    //     console.log('tsetedfk');
    //     LoadModalImg();
    // } else {
    //     $('.wd_item').on('click', function () {
    //         LoadModalImg();
    //     });
    // }



});