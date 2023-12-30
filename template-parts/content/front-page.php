
  <div class="page-wrapper">
    <div class="global-styles w-embed" sym="true">
      <style>
/* Get rid of top margin on first element in any rich text element */
.w-richtext > :not(div):first-child, .w-richtext > div:first-child > :first-child {
  margin-top: 0 !important;
}
/* Get rid of bottom margin on last element in any rich text element */
.w-richtext>:last-child, .w-richtext ol li:last-child, .w-richtext ul li:last-child {
	margin-bottom: 0 !important;
}
/* 
Make the following elements inherit typography styles from the parent and not have hardcoded values. 
Important: You will not be able to style for example "All Links" in Designer with this CSS applied.
Uncomment this CSS to use it in the project. Leave this message for future hand-off.
*/
/*
a,
.w-input,
.w-select,
.w-tab-link,
.w-nav-link,
.w-dropdown-btn,
.w-dropdown-toggle,
.w-dropdown-link {
  color: inherit;
  text-decoration: inherit;
  font-size: inherit;
}
*/
/* Prevent all click and hover interaction with an element */
.pointer-events-off {
	pointer-events: none;
}
/* Enables all click and hover interaction with an element */
.pointer-events-on {
  pointer-events: auto;
}
/* Snippet enables you to add class of div-square which creates and maintains a 1:1 dimension of a div.*/
.div-square::after {
  content: "";
  display: block;
  padding-bottom: 100%;
}
/*Hide focus outline for main content element*/
    main:focus-visible {
    outline: -webkit-focus-ring-color auto 0px;
}
/* Make sure containers never lose their center alignment*/
.container-medium, .container-small, .container-large {
  margin-right: auto !important;
  margin-left: auto !important;
}
/*Reset selects, buttons, and links styles*/
.w-input, .w-select, a {
color: inherit;
text-decoration: inherit;
font-size: inherit;
}
/*Apply "..." after 3 lines of text */
.text-style-3lines {
    display: -webkit-box;
    overflow: hidden;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
}
/* Apply "..." after 2 lines of text */
.text-style-2lines {
    display: -webkit-box;
    overflow: hidden;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
}
/* Apply "..." at 100% width */
.truncate-width { 
		width: 100%; 
    white-space: nowrap; 
    overflow: hidden; 
    text-overflow: ellipsis; 
}
/* Removes native scrollbar */
.no-scrollbar {
    -ms-overflow-style: none;  // IE 10+
    overflow: -moz-scrollbars-none;  // Firefox
}
.no-scrollbar::-webkit-scrollbar {
    display: none; // Safari and Chrome
}
/* Adds inline flex display */
.display-inlineflex {
  display: inline-flex;
}
/* These classes are never overwritten */
.hide {
  display: none !important;
}
@media screen and (max-width: 991px) {
    .hide, .hide-tablet {
        display: none !important;
    }
}
  @media screen and (max-width: 767px) {
    .hide-mobile-landscape{
      display: none !important;
    }
}
  @media screen and (max-width: 479px) {
    .hide-mobile{
      display: none !important;
    }
}
.margin-0 {
  margin: 0rem !important;
}
.padding-0 {
  padding: 0rem !important;
}
.spacing-clean {
padding: 0rem !important;
margin: 0rem !important;
}
.margin-top {
  margin-right: 0rem !important;
  margin-bottom: 0rem !important;
  margin-left: 0rem !important;
}
.padding-top {
  padding-right: 0rem !important;
  padding-bottom: 0rem !important;
  padding-left: 0rem !important;
}
.margin-right {
  margin-top: 0rem !important;
  margin-bottom: 0rem !important;
  margin-left: 0rem !important;
}
.padding-right {
  padding-top: 0rem !important;
  padding-bottom: 0rem !important;
  padding-left: 0rem !important;
}
.margin-bottom {
  margin-top: 0rem !important;
  margin-right: 0rem !important;
  margin-left: 0rem !important;
}
.padding-bottom {
  padding-top: 0rem !important;
  padding-right: 0rem !important;
  padding-left: 0rem !important;
}
.margin-left {
  margin-top: 0rem !important;
  margin-right: 0rem !important;
  margin-bottom: 0rem !important;
}
.padding-left {
  padding-top: 0rem !important;
  padding-right: 0rem !important;
  padding-bottom: 0rem !important;
}
.margin-horizontal {
  margin-top: 0rem !important;
  margin-bottom: 0rem !important;
}
.padding-horizontal {
  padding-top: 0rem !important;
  padding-bottom: 0rem !important;
}
.margin-vertical {
  margin-right: 0rem !important;
  margin-left: 0rem !important;
}
.padding-vertical {
  padding-right: 0rem !important;
  padding-left: 0rem !important;
}
</style>
    </div>
    <main class="main-wrapper background-color-black">
      <header class="section_hero">
        <div class="hero_logo-wrapper">
          <div class="padding-global">
            <div class="div-block container"><svg class="svgflow-rmzd8" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev/svgjs" version="1.1" width="255" height="1500" viewBox="0 0 1500 1500" app="svgflow">
                <g transform="matrix(0.6666666666666666,0,0,0.6666666666666666,249.39393939393938,598.7350603587548)" app="svgflow"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 396 120" data-background-color="#fafafa" preserveAspectRatio="xMidYMid meet" height="454" width="1500" app="svgflow">
                    <g transform="matrix(1,0,0,1,0.2400000000000091,-0.027116441797033985)" app="svgflow">
                      <rect width="395.52" height="120.05423288359404" fill="none" stroke="none" visibility="hidden" app="svgflow"></rect><svg viewBox="0 0 395.52 120.05423288359404" height="120.05423288359404" width="395.52" app="svgflow">
                        <defs app="svgflow"></defs>
                        <g app="svgflow"><svg viewBox="0 0 395.52 120.05423288359404" height="120.05423288359404" width="395.52" app="svgflow">
                            <g app="svgflow"><svg viewBox="0 0 395.52 120.05423288359404" height="120.05423288359404" width="395.52" app="svgflow">
                                <g app="svgflow"><svg viewBox="0 0 395.52 120.05423288359404" height="120.05423288359404" width="395.52" app="svgflow">
                                    <g app="svgflow"><svg viewBox="0 0 395.52 120.05423288359404" height="120.05423288359404" width="395.52" app="svgflow">
                                        <g app="svgflow"><svg viewBox="0 0 395.52 92.23314368578123" height="92.23314368578123" width="395.52" app="svgflow">
                                            <g transform="matrix(1,0,0,1,23.607599999999998,23.607599999999998)" app="svgflow"><svg width="348.3048" viewBox="1.4 -35.35 277.34222222222235 35.85" height="45.01794368578123" data-palette-color="#000000" app="svgflow">
                                                <path class="path-i4x0y" d="M11.2 0.5L11.2 0.5Q8.55 0.5 6.3-0.88 4.05-2.25 2.73-4.55 1.4-6.85 1.4-9.6L1.4-9.6 1.5-34.6Q1.5-34.8 1.7-34.8L1.7-34.8 7.3-34.8Q7.5-34.8 7.5-34.6L7.5-34.6 7.5-9.6Q7.5-7.9 8.58-6.73 9.65-5.55 11.2-5.55L11.2-5.55Q12.8-5.55 13.88-6.73 14.95-7.9 14.95-9.6L14.95-9.6 14.95-34.6Q14.95-34.8 15.15-34.8L15.15-34.8 20.75-34.8Q20.95-34.8 20.95-34.6L20.95-34.6 21.05-9.6Q21.05-6.8 19.73-4.5 18.4-2.2 16.18-0.85 13.95 0.5 11.2 0.5ZM30.45 0L25.45 0Q25.05 0 25.05-0.35L25.05-0.35 25-34.4Q25-34.8 25.4-34.8L25.4-34.8 29.9-34.8 38.35-15.1 38.1-34.4Q38.1-34.8 38.55-34.8L38.55-34.8 43.5-34.8Q43.8-34.8 43.8-34.4L43.8-34.4 43.85-0.3Q43.85 0 43.6 0L43.6 0 39.2 0 30.55-18.4 30.9-0.4Q30.9 0 30.45 0L30.45 0ZM58.85 0L53.2 0Q53 0 53-0.25L53-0.25 53-28.75 46.5-28.75Q46.25-28.75 46.25-29L46.25-29 46.3-34.6Q46.3-34.8 46.5-34.8L46.5-34.8 65.5-34.8Q65.75-34.8 65.75-34.6L65.75-34.6 65.75-29Q65.75-28.75 65.55-28.75L65.55-28.75 59-28.75 59.05-0.25Q59.05 0 58.85 0L58.85 0ZM74.09 0L68.44 0Q68.19 0 68.19-0.25L68.19-0.25 68.24-34.6Q68.24-34.8 68.44-34.8L68.44-34.8 74.04-34.8Q74.24-34.8 74.24-34.6L74.24-34.6 74.29-0.25Q74.29 0 74.09 0L74.09 0ZM89.34 0L83.69 0Q83.49 0 83.49-0.25L83.49-0.25 83.49-28.75 76.99-28.75Q76.74-28.75 76.74-29L76.74-29 76.79-34.6Q76.79-34.8 76.99-34.8L76.99-34.8 95.99-34.8Q96.24-34.8 96.24-34.6L96.24-34.6 96.24-29Q96.24-28.75 96.04-28.75L96.04-28.75 89.49-28.75 89.54-0.25Q89.54 0 89.34 0L89.34 0ZM116.04 0L99.89 0Q99.69 0 99.69-0.25L99.69-0.25 99.74-34.55Q99.74-34.8 99.99-34.8L99.99-34.8 105.54-34.8Q105.79-34.8 105.79-34.55L105.79-34.55 105.74-6.15 116.04-6.15Q116.29-6.15 116.29-5.9L116.29-5.9 116.29-0.25Q116.29 0 116.04 0L116.04 0ZM135.89 0L119.74 0Q119.54 0 119.54-0.25L119.54-0.25 119.59-34.6Q119.59-34.8 119.79-34.8L119.79-34.8 135.84-34.8Q136.04-34.8 136.04-34.55L136.04-34.55 136.04-28.95Q136.04-28.75 135.84-28.75L135.84-28.75 125.59-28.75 125.59-20.95 135.84-20.95Q136.04-20.95 136.04-20.75L136.04-20.75 136.09-15.1Q136.09-14.9 135.89-14.9L135.89-14.9 125.59-14.9 125.59-6.15 135.89-6.15Q136.09-6.15 136.09-5.9L136.09-5.9 136.09-0.2Q136.09 0 135.89 0L135.89 0ZM149.73-0.05L140.78 0Q140.53 0 140.53-0.25L140.53-0.25 140.63-34.6Q140.63-34.8 140.83-34.8L140.83-34.8 150.18-34.85Q152.93-34.9 155.21-33.55 157.48-32.2 158.83-29.93 160.18-27.65 160.18-24.9L160.18-24.9 160.18-10.55Q160.18-7.65 158.78-5.28 157.38-2.9 155.03-1.5 152.68-0.1 149.73-0.05L149.73-0.05ZM146.68-28.8L146.63-6.15 149.73-6.15Q151.58-6.15 152.86-7.45 154.13-8.75 154.13-10.55L154.13-10.55 154.13-24.95Q154.13-26.55 152.96-27.73 151.78-28.9 150.18-28.85L150.18-28.85 146.68-28.8ZM180.68 0L171.73 0Q171.53 0 171.53-0.25L171.53-0.25 171.63-34.6Q171.63-34.8 171.83-34.8L171.83-34.8 181.43-34.8Q184.28-34.8 186.53-33.43 188.78-32.05 190.08-29.8 191.38-27.55 191.38-24.9L191.38-24.9Q191.38-22.75 190.4-20.9 189.43-19.05 188.08-17.9L188.08-17.9Q189.53-16.45 190.33-14.55 191.13-12.65 191.13-10.55L191.13-10.55Q191.13-7.65 189.73-5.25 188.33-2.85 185.95-1.43 183.58 0 180.68 0L180.68 0ZM177.63-28.85L177.63-21 181.43-21Q183.18-21 184.25-22.23 185.33-23.45 185.33-24.9L185.33-24.9Q185.33-26.5 184.18-27.68 183.03-28.85 181.43-28.85L181.43-28.85 177.63-28.85ZM177.63-14.95L177.58-6.1 180.68-6.1Q182.48-6.1 183.78-7.43 185.08-8.75 185.08-10.55L185.08-10.55Q185.08-12.35 183.78-13.65 182.48-14.95 180.68-14.95L180.68-14.95 177.63-14.95ZM211.08 0L194.93 0Q194.73 0 194.73-0.25L194.73-0.25 194.78-34.55Q194.78-34.8 195.03-34.8L195.03-34.8 200.58-34.8Q200.83-34.8 200.83-34.55L200.83-34.55 200.78-6.15 211.08-6.15Q211.33-6.15 211.33-5.9L211.33-5.9 211.33-0.25Q211.33 0 211.08 0L211.08 0ZM212.87-0.25L212.87-0.25 219.07-34.6Q219.12-34.8 219.32-34.8L219.32-34.8 226.57-34.8Q226.77-34.8 226.82-34.6L226.82-34.6 232.77-0.25Q232.82 0 232.57 0L232.57 0 227.02 0Q226.82 0 226.77-0.25L226.77-0.25 226.22-3.9 219.42-3.9 218.87-0.25Q218.82 0 218.62 0L218.62 0 213.07 0Q212.87 0 212.87-0.25ZM222.67-23.3L220.42-9.25 225.22-9.25 223.17-23.3 222.87-25.15 222.67-23.3ZM244.07 0.5L244.07 0.5Q241.32 0.5 239.09-0.88 236.87-2.25 235.57-4.55 234.27-6.85 234.27-9.7L234.27-9.7 234.32-25.3Q234.32-28.05 235.59-30.33 236.87-32.6 239.09-33.98 241.32-35.35 244.07-35.35L244.07-35.35Q246.82-35.35 249.02-34 251.22-32.65 252.52-30.38 253.82-28.1 253.82-25.3L253.82-25.3 253.82-23Q253.82-22.8 253.62-22.8L253.62-22.8 248.02-22.8Q247.82-22.8 247.82-23L247.82-23 247.82-25.3Q247.82-26.95 246.75-28.15 245.67-29.35 244.07-29.35L244.07-29.35Q242.27-29.35 241.32-28.13 240.37-26.9 240.37-25.3L240.37-25.3 240.37-9.7Q240.37-7.85 241.44-6.7 242.52-5.55 244.07-5.55L244.07-5.55Q245.67-5.55 246.75-6.83 247.82-8.1 247.82-9.7L247.82-9.7 247.82-12Q247.82-12.2 248.02-12.2L248.02-12.2 253.67-12.2Q253.87-12.2 253.87-12L253.87-12 253.87-9.7Q253.87-6.85 252.55-4.55 251.22-2.25 249.02-0.88 246.82 0.5 244.07 0.5ZM263.37 0L257.72 0Q257.52 0 257.52-0.25L257.52-0.25 257.62-34.55Q257.62-34.8 257.82-34.8L257.82-34.8 263.42-34.8Q263.62-34.8 263.62-34.55L263.62-34.55 263.62-22.7 271.47-34.6Q271.62-34.8 271.82-34.8L271.82-34.8 277.57-34.8Q277.77-34.8 277.67-34.6L277.67-34.6 269.02-20.8 278.72-0.2Q278.82 0 278.47 0L278.47 0 272.37 0Q272.12 0 272.07-0.2L272.07-0.2 265.32-14.9 263.57-12.15 263.57-0.25Q263.57 0 263.37 0L263.37 0Z" opacity="1" transform="matrix(1,0,0,1,0,0)" fill="currentColor" data-fill-palette-color="primary" app="svgflow"></path>
                                              </svg></g>
                                          </svg></g>
                                        <g app="svgflow">
                                          <rect class="rect-gwqg1" width="395.52" height="92.23314368578123" fill="none" stroke-width="9" stroke="currentColor" data-fill-palette-color="none" data-stroke-palette-color="tertiary" app="svgflow"></rect>
                                            <rect class="rect-lx78l" width="395.52" height="27.821089197812803" y="92.23314368578123" fill="currentColor" data-fill-palette-color="tertiary" app="svgflow"></rect>
                                        </g>
                                      </svg></g>
                                  </svg></g>
                              </svg></g>
                          </svg></g>
                      </svg>
                    </g>
                  </svg></g>
              </svg></div>
          </div>
        </div>
        <div class="padding-global">
          <div class="container-large">
            <div class="header-100vh">
              <div class="padding-section-large z-index-1">
                <div class="max-width-medium">
                  <div data-w-id="556a46bf-9c25-2598-ad94-d3adac903e14" style="opacity:0" class="margin-bottom margin-small">
                    <div class="gradient-wrapper">
                      <h1 class="heading-2" data-text="t4f4dd61d"><?php echo _u('t4f4dd61d','text'); ?></h1>
                    </div>
                  </div>
                  <p data-w-id="556a46bf-9c25-2598-ad94-d3adac903e17" style="opacity:0" class="text-size-medium text-color-white" data-text="t3fc1b1ee"><?php echo _u('t3fc1b1ee','text'); ?></p>
                  <div class="margin-top margin-medium">
                    <div data-w-id="556a46bf-9c25-2598-ad94-d3adac903e1a" style="opacity:0" class="button-group">
                      <div data-w-id="01002dcc-687d-75ff-e0b8-f89d35a07686" class="click_wrapper">
                        <div css-pointer-events="none" class="click_bg-wrapper"></div>
                        <a href="<?php echo _u('a14e15f14','link'); ?>" class="click w-button" data-text="t7f274abe" data-link="a14e15f14"><?php echo _u('t7f274abe','text'); ?></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="hero_background-image-wrapper"><img src="<?php echo udesly_get_image(_u('i1403a634', 'img'))->src ?>" loading="lazy" sizes="100vw" srcset="<?php echo udesly_get_image(_u('i1403a634', 'img'))->srcset ?>" alt="<?php echo udesly_get_image(_u('i1403a634', 'img'))->alt ?>" class="hero_background-image" data-img="i1403a634"></div>
      </header>
      <section class="section_features">
        <section id="capability" class="section_capability">
          <div class="capability_background-image-wrapper">
            <div class="image-overlay-layer"></div><img src="<?php echo udesly_get_image(_u('in6dbfb3c2', 'img'))->src ?>" loading="eager" alt="<?php echo udesly_get_image(_u('in6dbfb3c2', 'img'))->alt ?>" class="capability_background-image" data-img="in6dbfb3c2" srcset="<?php echo udesly_get_image(_u('in6dbfb3c2', 'img'))->srcset ?>">
          </div>
          <div class="padding-global-2">
            <div class="container-large-3">
              <div class="padding-section-large-2">
                <div class="capability_component">
                  <div class="margin-bottom margin-xxlarge">
                    <div class="text-align-center-3">
                      <div class="max-width-medium-2">
                        <h2 data-text="t32cd0dd1"><?php echo _u('t32cd0dd1','text'); ?></h2>
                      </div>
                    </div>
                  </div>
                  <div class="w-layout-grid capability_list">
                    <div class="capability_item">
                      <div class="margin-bottom margin-custom1"><img src="<?php echo udesly_get_image(_u('in47fcd707', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('in47fcd707', 'img'))->alt ?>" class="capability_icon-image" data-img="in47fcd707" srcset="<?php echo udesly_get_image(_u('in47fcd707', 'img'))->srcset ?>"></div>
                      <div class="margin-bottom margin-xsmall">
                        <h3 data-text="tn6d413633"><?php echo _u('tn6d413633','text'); ?></h3>
                      </div>
                      <p data-text="t400c0bd5"><?php echo _u('t400c0bd5','text'); ?></p>
                    </div>
                    <div class="capability_item">
                      <div class="margin-bottom margin-custom1"><img src="<?php echo udesly_get_image(_u('in2cadb6b', 'img'))->src ?>" loading="lazy" width="48" alt="<?php echo udesly_get_image(_u('in2cadb6b', 'img'))->alt ?>" data-img="in2cadb6b" srcset="<?php echo udesly_get_image(_u('in2cadb6b', 'img'))->srcset ?>"><img src="<?php echo udesly_get_image(_u('in2cadb6b', 'img'))->src ?>" loading="lazy" width="23" alt="<?php echo udesly_get_image(_u('in2cadb6b', 'img'))->alt ?>" class="image-40" data-img="in2cadb6b" srcset="<?php echo udesly_get_image(_u('in2cadb6b', 'img'))->srcset ?>"><img src="<?php echo udesly_get_image(_u('in122eefd0', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('in122eefd0', 'img'))->alt ?>" class="capability_icon-image" data-img="in122eefd0" srcset="<?php echo udesly_get_image(_u('in122eefd0', 'img'))->srcset ?>"></div>
                      <div class="margin-bottom margin-xsmall">
                        <h3 data-text="t5603451b"><?php echo _u('t5603451b','text'); ?></h3>
                      </div>
                      <p data-text="t219dc1bb"><?php echo _u('t219dc1bb','text'); ?></p>
                    </div>
                    <div class="capability_item">
                      <div class="margin-bottom margin-custom1"><img src="<?php echo udesly_get_image(_u('i5319a3d9', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('i5319a3d9', 'img'))->alt ?>" class="capability_icon-image" data-img="i5319a3d9" srcset="<?php echo udesly_get_image(_u('i5319a3d9', 'img'))->srcset ?>"></div>
                      <div class="margin-bottom margin-xsmall">
                        <h3 data-text="t3a7ce14e"><?php echo _u('t3a7ce14e','text'); ?></h3>
                      </div>
                      <p data-text="tn50e28b56"><?php echo _u('tn50e28b56','text'); ?></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <section id="work" data-w-id="a4a30922-e762-17df-4712-888c5187a7b0" class="section_portfolio">
            <div style="width:100%" class="padding-global-portfolio">
              <div class="padding-section-large-2">
                <div class="portfolio_wrapper">
                  <div class="padding-top padding-section-large">
                    <div class="margin-bottom margin-xlarge">
                      <div class="text-align-center-3">
                        <div class="max-width-large-2 align-center">
                          <div class="margin-bottom margin-small">
                            <h2 class="heading" data-text="t4e8f5f7a"><?php echo _u('t4e8f5f7a','text'); ?></h2>
                          </div>
                          <p class="text-size-medium-2" data-text="t3eb64a79"><?php echo _u('t3eb64a79','text'); ?></p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div data-w-id="a4a30922-e762-17df-4712-888c5187a7bd" class="portfolio_component">
                    <div class="portfolio_list-wrapper">
                      <div class="w-layout-grid portfolio_list">
                        <a id="w-node-a4a30922-e762-17df-4712-888c5187a7c0-0809aa89" href="<?php echo _u('a-b833a00','link'); ?>" target="_blank" class="portfolio_item hide-tablet w-inline-block" data-link="a-b833a00">
                          <div class="portfolio_image-overlay-layer"></div><img class="portfolio_image" src="<?php echo udesly_get_image(_u('i44af105c', 'img'))->src ?>" alt="<?php echo udesly_get_image(_u('i44af105c', 'img'))->alt ?>" data-sizes="[{&quot;max&quot;:767,&quot;size&quot;:&quot;100vw&quot;},{&quot;max&quot;:991,&quot;size&quot;:&quot;317.21875px&quot;},{&quot;max&quot;:10000,&quot;size&quot;:&quot;32vw&quot;}]" sizes="(max-width: 767px) 100vw, (max-width: 991px) 317.1528015136719px, 32vw" loading="lazy" srcset="<?php echo udesly_get_image(_u('i44af105c', 'img'))->srcset ?>" data-img="i44af105c">
                          <div class="button-2 is-portfolio">
                            <div class="button_text-small" data-text="t4132989e"><?php echo _u('t4132989e','text'); ?></div>
                            <div class="icon-1x1-small-2 w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 15 15" fill="none" preserveAspectRatio="xMidYMid meet" aria-hidden="true" role="img">
                                <g clip-path="url(#clip0_614_1002)">
                                  <path d="M3.854 11.146L11.146 3.85396" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                  <path d="M11.146 9.82019L11.146 3.85398L5.17978 3.85398" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                </g>
                                <defs>
                                  <clipPath id="clip0_614_1002">
                                    <rect width="15" height="15" fill="currentColor" transform="translate(0 15) rotate(-90)"></rect>
                                  </clipPath>
                                </defs>
                              </svg></div>
                          </div>
                        </a>
                        <a id="w-node-a4a30922-e762-17df-4712-888c5187a7c7-0809aa89" href="<?php echo _u('a-598707c1','link'); ?>" target="_blank" class="portfolio_item w-inline-block" data-link="a-598707c1">
                          <div class="portfolio_image-overlay-layer"></div><img class="portfolio_image" src="<?php echo udesly_get_image(_u('i34d15b20', 'img'))->src ?>" alt="<?php echo udesly_get_image(_u('i34d15b20', 'img'))->alt ?>" data-sizes="[{&quot;max&quot;:767,&quot;size&quot;:&quot;100vw&quot;},{&quot;max&quot;:991,&quot;size&quot;:&quot;317.21875px&quot;},{&quot;max&quot;:10000,&quot;size&quot;:&quot;32vw&quot;}]" sizes="(max-width: 991px) 55vw, 32vw" loading="lazy" srcset="<?php echo udesly_get_image(_u('i34d15b20', 'img'))->srcset ?>" data-img="i34d15b20">
                          <div class="button-2 is-portfolio is-right">
                            <div class="button_text-small hide-tablet" data-text="t4132989e"><?php echo _u('t4132989e','text'); ?></div>
                            <div class="icon-1x1-small-2 w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 15 15" fill="none" preserveAspectRatio="xMidYMid meet" aria-hidden="true" role="img">
                                <g clip-path="url(#clip0_614_1002)">
                                  <path d="M3.854 11.146L11.146 3.85396" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                  <path d="M11.146 9.82019L11.146 3.85398L5.17978 3.85398" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                </g>
                                <defs>
                                  <clipPath id="clip0_614_1002">
                                    <rect width="15" height="15" fill="currentColor" transform="translate(0 15) rotate(-90)"></rect>
                                  </clipPath>
                                </defs>
                              </svg></div>
                          </div>
                        </a>
                        <a id="w-node-a4a30922-e762-17df-4712-888c5187a7ce-0809aa89" href="<?php echo _u('aae757ce','link'); ?>" target="_blank" class="portfolio_item w-inline-block" data-link="aae757ce">
                          <div class="portfolio_image-overlay-layer"></div><img class="portfolio_image" src="<?php echo udesly_get_image(_u('i449b0402', 'img'))->src ?>" alt="<?php echo udesly_get_image(_u('i449b0402', 'img'))->alt ?>" data-sizes="[{&quot;max&quot;:991,&quot;size&quot;:&quot;55vw&quot;},{&quot;max&quot;:10000,&quot;size&quot;:&quot;32vw&quot;}]" sizes="(max-width: 991px) 55vw, 32vw" loading="lazy" srcset="<?php echo udesly_get_image(_u('i449b0402', 'img'))->srcset ?>" data-img="i449b0402">
                          <div class="button-2 is-portfolio">
                            <div class="button_text-small hide-tablet" data-text="t4132989e"><?php echo _u('t4132989e','text'); ?></div>
                            <div class="icon-1x1-small-2 w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 15 15" fill="none" preserveAspectRatio="xMidYMid meet" aria-hidden="true" role="img">
                                <g clip-path="url(#clip0_614_1002)">
                                  <path d="M3.854 11.146L11.146 3.85396" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                  <path d="M11.146 9.82019L11.146 3.85398L5.17978 3.85398" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                </g>
                                <defs>
                                  <clipPath id="clip0_614_1002">
                                    <rect width="15" height="15" fill="currentColor" transform="translate(0 15) rotate(-90)"></rect>
                                  </clipPath>
                                </defs>
                              </svg></div>
                          </div>
                        </a>
                        <a id="w-node-a4a30922-e762-17df-4712-888c5187a7d5-0809aa89" href="<?php echo _u('a-5f264af8','link'); ?>" target="_blank" class="portfolio_item hide-tablet w-inline-block" data-link="a-5f264af8">
                          <div class="portfolio_image-overlay-layer"></div><img class="portfolio_image" src="<?php echo udesly_get_image(_u('ib3df032', 'img'))->src ?>" alt="<?php echo udesly_get_image(_u('ib3df032', 'img'))->alt ?>" data-sizes="[{&quot;max&quot;:991,&quot;size&quot;:&quot;55vw&quot;},{&quot;max&quot;:10000,&quot;size&quot;:&quot;32vw&quot;}]" sizes="(max-width: 767px) 100vw, (max-width: 991px) 317.1528015136719px, 32vw" loading="lazy" srcset="<?php echo udesly_get_image(_u('ib3df032', 'img'))->srcset ?>" data-img="ib3df032">
                          <div class="button-2 is-portfolio is-right">
                            <div class="button_text-small hide-tablet" data-text="t4132989e"><?php echo _u('t4132989e','text'); ?></div>
                            <div class="icon-1x1-small-2 w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 15 15" fill="none" preserveAspectRatio="xMidYMid meet" aria-hidden="true" role="img">
                                <g clip-path="url(#clip0_614_1002)">
                                  <path d="M3.854 11.146L11.146 3.85396" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                  <path d="M11.146 9.82019L11.146 3.85398L5.17978 3.85398" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                </g>
                                <defs>
                                  <clipPath id="clip0_614_1002">
                                    <rect width="15" height="15" fill="currentColor" transform="translate(0 15) rotate(-90)"></rect>
                                  </clipPath>
                                </defs>
                              </svg></div>
                          </div>
                        </a>
                      </div>
                    </div>
                    <div class="portfolio_list-wrapper is-bottom">
                      <div class="w-layout-grid portfolio_list">
                        <a id="w-node-a4a30922-e762-17df-4712-888c5187a7de-0809aa89" href="<?php echo _u('a521e031a','link'); ?>" target="_blank" class="portfolio_item hide-tablet w-inline-block" data-link="a521e031a">
                          <div class="portfolio_image-overlay-layer"></div><img class="portfolio_image" src="<?php echo udesly_get_image(_u('in4378f64f', 'img'))->src ?>" alt="<?php echo udesly_get_image(_u('in4378f64f', 'img'))->alt ?>" data-sizes="[{&quot;max&quot;:767,&quot;size&quot;:&quot;100vw&quot;},{&quot;max&quot;:991,&quot;size&quot;:&quot;317.21875px&quot;},{&quot;max&quot;:10000,&quot;size&quot;:&quot;32vw&quot;}]" sizes="(max-width: 767px) 100vw, (max-width: 991px) 317.1528015136719px, 32vw" loading="lazy" srcset="<?php echo udesly_get_image(_u('in4378f64f', 'img'))->srcset ?>" data-img="in4378f64f">
                          <div class="button-2 is-portfolio">
                            <div class="button_text-small" data-text="t4132989e"><?php echo _u('t4132989e','text'); ?></div>
                            <div class="icon-1x1-small-2 w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 15 15" fill="none" preserveAspectRatio="xMidYMid meet" aria-hidden="true" role="img">
                                <g clip-path="url(#clip0_614_1002)">
                                  <path d="M3.854 11.146L11.146 3.85396" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                  <path d="M11.146 9.82019L11.146 3.85398L5.17978 3.85398" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                </g>
                                <defs>
                                  <clipPath id="clip0_614_1002">
                                    <rect width="15" height="15" fill="currentColor" transform="translate(0 15) rotate(-90)"></rect>
                                  </clipPath>
                                </defs>
                              </svg></div>
                          </div>
                        </a>
                        <a id="w-node-a4a30922-e762-17df-4712-888c5187a7e5-0809aa89" data-w-id="a4a30922-e762-17df-4712-888c5187a7e5" href="<?php echo _u('a-1073105f','link'); ?>" target="_blank" class="portfolio_item w-inline-block" data-link="a-1073105f">
                          <div class="portfolio_image-overlay-layer"></div><img class="portfolio_image" src="<?php echo udesly_get_image(_u('in15e419fc', 'img'))->src ?>" alt="<?php echo udesly_get_image(_u('in15e419fc', 'img'))->alt ?>" data-sizes="[{&quot;max&quot;:991,&quot;size&quot;:&quot;55vw&quot;},{&quot;max&quot;:10000,&quot;size&quot;:&quot;32vw&quot;}]" sizes="(max-width: 991px) 55vw, 32vw" loading="lazy" srcset="<?php echo udesly_get_image(_u('in15e419fc', 'img'))->srcset ?>" data-img="in15e419fc">
                          <div class="button-2 is-portfolio is-right">
                            <div class="button_text-small hide-tablet" data-text="t4132989e"><?php echo _u('t4132989e','text'); ?></div>
                            <div class="icon-1x1-small-2 w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 15 15" fill="none" preserveAspectRatio="xMidYMid meet" aria-hidden="true" role="img">
                                <g clip-path="url(#clip0_614_1002)">
                                  <path d="M3.854 11.146L11.146 3.85396" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                  <path d="M11.146 9.82019L11.146 3.85398L5.17978 3.85398" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                </g>
                                <defs>
                                  <clipPath id="clip0_614_1002">
                                    <rect width="15" height="15" fill="currentColor" transform="translate(0 15) rotate(-90)"></rect>
                                  </clipPath>
                                </defs>
                              </svg></div>
                          </div>
                        </a>
                        <a id="w-node-a4a30922-e762-17df-4712-888c5187a7ec-0809aa89" href="<?php echo _u('a-2ec9c3a4','link'); ?>" target="_blank" class="portfolio_item w-inline-block" data-link="a-2ec9c3a4">
                          <div class="portfolio_image-overlay-layer"></div><img class="portfolio_image" src="<?php echo udesly_get_image(_u('in2729e1da', 'img'))->src ?>" alt="<?php echo udesly_get_image(_u('in2729e1da', 'img'))->alt ?>" data-sizes="[{&quot;max&quot;:767,&quot;size&quot;:&quot;100vw&quot;},{&quot;max&quot;:991,&quot;size&quot;:&quot;317.21875px&quot;},{&quot;max&quot;:10000,&quot;size&quot;:&quot;32vw&quot;}]" sizes="(max-width: 991px) 55vw, 32vw" loading="lazy" srcset="<?php echo udesly_get_image(_u('in2729e1da', 'img'))->srcset ?>" data-img="in2729e1da">
                          <div class="button-2 is-portfolio">
                            <div class="button_text-small" data-text="t4132989e"><?php echo _u('t4132989e','text'); ?></div>
                            <div class="icon-1x1-small-2 w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 15 15" fill="none" preserveAspectRatio="xMidYMid meet" aria-hidden="true" role="img">
                                <g clip-path="url(#clip0_614_1002)">
                                  <path d="M3.854 11.146L11.146 3.85396" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                  <path d="M11.146 9.82019L11.146 3.85398L5.17978 3.85398" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                </g>
                                <defs>
                                  <clipPath id="clip0_614_1002">
                                    <rect width="15" height="15" fill="currentColor" transform="translate(0 15) rotate(-90)"></rect>
                                  </clipPath>
                                </defs>
                              </svg></div>
                          </div>
                        </a>
                        <a id="w-node-a4a30922-e762-17df-4712-888c5187a7f3-0809aa89" href="<?php echo _u('a-6b3bc843','link'); ?>" target="_blank" class="portfolio_item hide-tablet w-inline-block" data-link="a-6b3bc843">
                          <div class="portfolio_image-overlay-layer"></div><img class="portfolio_image" src="<?php echo udesly_get_image(_u('i65146592', 'img'))->src ?>" alt="<?php echo udesly_get_image(_u('i65146592', 'img'))->alt ?>" data-sizes="[{&quot;max&quot;:991,&quot;size&quot;:&quot;55vw&quot;},{&quot;max&quot;:10000,&quot;size&quot;:&quot;32vw&quot;}]" sizes="(max-width: 767px) 100vw, (max-width: 991px) 317.1528015136719px, 32vw" loading="lazy" srcset="<?php echo udesly_get_image(_u('i65146592', 'img'))->srcset ?>" data-img="i65146592">
                          <div class="button-2 is-portfolio">
                            <div class="button_text-small hide-tablet" data-text="t4132989e"><?php echo _u('t4132989e','text'); ?></div>
                            <div class="icon-1x1-small-2 w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 15 15" fill="none" preserveAspectRatio="xMidYMid meet" aria-hidden="true" role="img">
                                <g clip-path="url(#clip0_614_1002)">
                                  <path d="M3.854 11.146L11.146 3.85396" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                  <path d="M11.146 9.82019L11.146 3.85398L5.17978 3.85398" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                </g>
                                <defs>
                                  <clipPath id="clip0_614_1002">
                                    <rect width="15" height="15" fill="currentColor" transform="translate(0 15) rotate(-90)"></rect>
                                  </clipPath>
                                </defs>
                              </svg></div>
                          </div>
                        </a>
                      </div>
                    </div>
                    <div class="portfolio_list-wrapper">
                      <div class="w-layout-grid portfolio_list">
                        <a id="w-node-a4a30922-e762-17df-4712-888c5187a7fc-0809aa89" href="<?php echo _u('a4ed1226','link'); ?>" target="_blank" class="portfolio_item hide-tablet w-inline-block" data-link="a4ed1226">
                          <div class="portfolio_image-overlay-layer"></div><img class="portfolio_image" src="<?php echo udesly_get_image(_u('i77d5ecc9', 'img'))->src ?>" alt="<?php echo udesly_get_image(_u('i77d5ecc9', 'img'))->alt ?>" data-sizes="[{&quot;max&quot;:767,&quot;size&quot;:&quot;100vw&quot;},{&quot;max&quot;:991,&quot;size&quot;:&quot;317.21875px&quot;},{&quot;max&quot;:10000,&quot;size&quot;:&quot;32vw&quot;}]" sizes="(max-width: 767px) 100vw, (max-width: 991px) 317.1528015136719px, 32vw" loading="lazy" srcset="<?php echo udesly_get_image(_u('i77d5ecc9', 'img'))->srcset ?>" data-img="i77d5ecc9">
                          <div class="button-2 is-portfolio">
                            <div class="button_text-small" data-text="t4132989e"><?php echo _u('t4132989e','text'); ?></div>
                            <div class="icon-1x1-small-2 w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 15 15" fill="none" preserveAspectRatio="xMidYMid meet" aria-hidden="true" role="img">
                                <g clip-path="url(#clip0_614_1002)">
                                  <path d="M3.854 11.146L11.146 3.85396" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                  <path d="M11.146 9.82019L11.146 3.85398L5.17978 3.85398" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                </g>
                                <defs>
                                  <clipPath id="clip0_614_1002">
                                    <rect width="15" height="15" fill="currentColor" transform="translate(0 15) rotate(-90)"></rect>
                                  </clipPath>
                                </defs>
                              </svg></div>
                          </div>
                        </a>
                        <a id="w-node-a4a30922-e762-17df-4712-888c5187a803-0809aa89" href="<?php echo _u('a-2abb0548','link'); ?>" target="_blank" class="portfolio_item w-inline-block" data-link="a-2abb0548">
                          <div class="portfolio_image-overlay-layer"></div><img class="portfolio_image" src="<?php echo udesly_get_image(_u('in2adf614f', 'img'))->src ?>" alt="<?php echo udesly_get_image(_u('in2adf614f', 'img'))->alt ?>" data-sizes="[{&quot;max&quot;:991,&quot;size&quot;:&quot;55vw&quot;},{&quot;max&quot;:10000,&quot;size&quot;:&quot;32vw&quot;}]" sizes="(max-width: 991px) 55vw, 32vw" loading="lazy" srcset="<?php echo udesly_get_image(_u('in2adf614f', 'img'))->srcset ?>" data-img="in2adf614f">
                          <div class="button-2 is-portfolio is-right">
                            <div class="button_text-small hide-tablet" data-text="t4132989e"><?php echo _u('t4132989e','text'); ?></div>
                            <div class="icon-1x1-small-2 w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 15 15" fill="none" preserveAspectRatio="xMidYMid meet" aria-hidden="true" role="img">
                                <g clip-path="url(#clip0_614_1002)">
                                  <path d="M3.854 11.146L11.146 3.85396" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                  <path d="M11.146 9.82019L11.146 3.85398L5.17978 3.85398" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                </g>
                                <defs>
                                  <clipPath id="clip0_614_1002">
                                    <rect width="15" height="15" fill="currentColor" transform="translate(0 15) rotate(-90)"></rect>
                                  </clipPath>
                                </defs>
                              </svg></div>
                          </div>
                        </a>
                        <a id="w-node-a4a30922-e762-17df-4712-888c5187a80a-0809aa89" href="<?php echo _u('a36b238c','link'); ?>" target="_blank" class="portfolio_item w-inline-block" data-link="a36b238c">
                          <div class="portfolio_image-overlay-layer"></div><img class="portfolio_image" src="<?php echo udesly_get_image(_u('i5a527c09', 'img'))->src ?>" alt="<?php echo udesly_get_image(_u('i5a527c09', 'img'))->alt ?>" data-sizes="[{&quot;max&quot;:991,&quot;size&quot;:&quot;55vw&quot;},{&quot;max&quot;:10000,&quot;size&quot;:&quot;32vw&quot;}]" sizes="(max-width: 991px) 55vw, 32vw" loading="lazy" srcset="<?php echo udesly_get_image(_u('i5a527c09', 'img'))->srcset ?>" data-img="i5a527c09">
                          <div class="button-2 is-portfolio">
                            <div class="button_text-small hide-tablet" data-text="t4132989e"><?php echo _u('t4132989e','text'); ?></div>
                            <div class="icon-1x1-small-2 w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 15 15" fill="none" preserveAspectRatio="xMidYMid meet" aria-hidden="true" role="img">
                                <g clip-path="url(#clip0_614_1002)">
                                  <path d="M3.854 11.146L11.146 3.85396" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                  <path d="M11.146 9.82019L11.146 3.85398L5.17978 3.85398" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                </g>
                                <defs>
                                  <clipPath id="clip0_614_1002">
                                    <rect width="15" height="15" fill="currentColor" transform="translate(0 15) rotate(-90)"></rect>
                                  </clipPath>
                                </defs>
                              </svg></div>
                          </div>
                        </a>
                        <a id="w-node-a4a30922-e762-17df-4712-888c5187a811-0809aa89" href="<?php echo _u('a-48a0f52e','link'); ?>" target="_blank" class="portfolio_item hide-tablet w-inline-block" data-link="a-48a0f52e">
                          <div class="portfolio_image-overlay-layer"></div><img class="portfolio_image" src="<?php echo udesly_get_image(_u('i58806dce', 'img'))->src ?>" alt="<?php echo udesly_get_image(_u('i58806dce', 'img'))->alt ?>" data-sizes="[{&quot;max&quot;:767,&quot;size&quot;:&quot;100vw&quot;},{&quot;max&quot;:991,&quot;size&quot;:&quot;317.21875px&quot;},{&quot;max&quot;:10000,&quot;size&quot;:&quot;32vw&quot;}]" sizes="(max-width: 767px) 100vw, (max-width: 991px) 317.1528015136719px, 32vw" loading="lazy" srcset="<?php echo udesly_get_image(_u('i58806dce', 'img'))->srcset ?>" data-img="i58806dce">
                          <div class="button-2 is-portfolio">
                            <div class="button_text-small" data-text="t4132989e"><?php echo _u('t4132989e','text'); ?></div>
                            <div class="icon-1x1-small-2 w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 15 15" fill="none" preserveAspectRatio="xMidYMid meet" aria-hidden="true" role="img">
                                <g clip-path="url(#clip0_614_1002)">
                                  <path d="M3.854 11.146L11.146 3.85396" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                  <path d="M11.146 9.82019L11.146 3.85398L5.17978 3.85398" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                </g>
                                <defs>
                                  <clipPath id="clip0_614_1002">
                                    <rect width="15" height="15" fill="currentColor" transform="translate(0 15) rotate(-90)"></rect>
                                  </clipPath>
                                </defs>
                              </svg></div>
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <section class="section_logo-2">
              <div class="padding-global-3">
                <div class="container-large-5">
                  <div class="padding-section-medium">
                    <div class="margin-bottom margin-large">
                      <div class="text-align-center-3">
                        <div class="max-width-large-2 align-center">
                          <div class="text-size-medium-2 text-style-allcaps" data-textarea="ta2cbf4646"><?php echo _u('ta2cbf4646', 'textarea'); ?></div>
                        </div>
                      </div>
                    </div>
                    <div class="logo_list-2">
                      <a href="<?php echo _u('a-125628c7','link'); ?>" target="_blank" class="logo_list-link w-inline-block" data-link="a-125628c7">
                        <div id="w-node-d28fe8a2-7652-84b9-7fcc-cfb469b8a7c8-0809aa89" class="logo_wrapper-2"><img src="<?php echo udesly_get_image(_u('i503fb312', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('i503fb312', 'img'))->alt ?>" class="logo_logo-2" data-img="i503fb312" srcset="<?php echo udesly_get_image(_u('i503fb312', 'img'))->srcset ?>"></div>
                      </a>
                      <a href="<?php echo _u('a5f97e8a7','link'); ?>" target="_blank" class="logo_list-link w-inline-block" data-link="a5f97e8a7">
                        <div id="w-node-d28fe8a2-7652-84b9-7fcc-cfb469b8a7cb-0809aa89" class="logo_wrapper-2"><img src="<?php echo udesly_get_image(_u('i5327d15a', 'img'))->src ?>" loading="lazy" data-sizes="[{&quot;max&quot;:479,&quot;size&quot;:&quot;100vw&quot;},{&quot;max&quot;:10000,&quot;size&quot;:&quot;76.34375px&quot;}]" alt="<?php echo udesly_get_image(_u('i5327d15a', 'img'))->alt ?>" class="logo_logo-2" data-img="i5327d15a" srcset="<?php echo udesly_get_image(_u('i5327d15a', 'img'))->srcset ?>"></div>
                      </a>
                      <a href="<?php echo _u('a-6f5a5e58','link'); ?>" target="_blank" class="logo_list-link w-inline-block" data-link="a-6f5a5e58">
                        <div id="w-node-d28fe8a2-7652-84b9-7fcc-cfb469b8a7ce-0809aa89" class="logo_wrapper-2"><img src="<?php echo udesly_get_image(_u('i1ddbc839', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('i1ddbc839', 'img'))->alt ?>" class="logo_logo-2" data-img="i1ddbc839" srcset="<?php echo udesly_get_image(_u('i1ddbc839', 'img'))->srcset ?>"></div>
                      </a>
                      <a href="<?php echo _u('a-5d494434','link'); ?>" target="_blank" class="logo_list-link w-inline-block" data-link="a-5d494434">
                        <div id="w-node-d28fe8a2-7652-84b9-7fcc-cfb469b8a7d1-0809aa89" class="logo_wrapper-2"><img src="<?php echo udesly_get_image(_u('i3627e18a', 'img'))->src ?>" loading="lazy" data-sizes="[{&quot;max&quot;:479,&quot;size&quot;:&quot;100vw&quot;},{&quot;max&quot;:10000,&quot;size&quot;:&quot;134.89584350585938px&quot;}]" alt="<?php echo udesly_get_image(_u('i3627e18a', 'img'))->alt ?>" class="logo_logo-2" data-img="i3627e18a" srcset="<?php echo udesly_get_image(_u('i3627e18a', 'img'))->srcset ?>"></div>
                      </a>
                      <a href="<?php echo _u('a-742f93e4','link'); ?>" target="_blank" class="logo_list-link w-inline-block" data-link="a-742f93e4">
                        <div id="w-node-d28fe8a2-7652-84b9-7fcc-cfb469b8a7d4-0809aa89" class="logo_wrapper-2"><img src="<?php echo udesly_get_image(_u('in7fdfc083', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('in7fdfc083', 'img'))->alt ?>" class="logo_logo-2" data-img="in7fdfc083" srcset="<?php echo udesly_get_image(_u('in7fdfc083', 'img'))->srcset ?>"></div>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <div class="margin-top-2 margin-medium">
              <div class="button-group-2 is-center is-testimonial">
                <div class="header_testimonail-wrapper">
                  <a href="<?php echo _u('a-2abb0548','link'); ?>" target="_blank" class="header_testimonail-link w-inline-block" data-link="a-2abb0548"><img src="<?php echo udesly_get_image(_u('ia6b1e22', 'img'))->src ?>" loading="eager" data-sizes="[{&quot;max&quot;:10000,&quot;size&quot;:&quot;51.19791793823242px&quot;}]" alt="<?php echo udesly_get_image(_u('ia6b1e22', 'img'))->alt ?>" class="header_testimonial-image" data-img="ia6b1e22" srcset="<?php echo udesly_get_image(_u('ia6b1e22', 'img'))->srcset ?>"></a>
                  <a href="<?php echo _u('a-5d494434','link'); ?>" target="_blank" class="header_testimonail-link w-inline-block" data-link="a-5d494434"><img src="<?php echo udesly_get_image(_u('in3e2affe', 'img'))->src ?>" loading="eager" data-sizes="[{&quot;max&quot;:10000,&quot;size&quot;:&quot;51.19791793823242px&quot;}]" alt="<?php echo udesly_get_image(_u('in3e2affe', 'img'))->alt ?>" class="header_testimonial-image" data-img="in3e2affe" srcset="<?php echo udesly_get_image(_u('in3e2affe', 'img'))->srcset ?>"></a>
                  <a href="<?php echo _u('a-125628c7','link'); ?>" target="_blank" class="header_testimonail-link w-inline-block" data-link="a-125628c7"><img src="<?php echo udesly_get_image(_u('i18b8ec42', 'img'))->src ?>" loading="eager" data-sizes="[{&quot;max&quot;:10000,&quot;size&quot;:&quot;51.19791793823242px&quot;}]" alt="<?php echo udesly_get_image(_u('i18b8ec42', 'img'))->alt ?>" class="header_testimonial-image" data-img="i18b8ec42" srcset="<?php echo udesly_get_image(_u('i18b8ec42', 'img'))->srcset ?>"></a>
                </div>
                <div class="header_testimonial-content">
                  <div class="text-size-regular" data-textarea="tan3fa51da1"><?php echo _u('tan3fa51da1', 'textarea'); ?></div>
                  <a href="<?php echo _u('a23','link'); ?>" class="button-2 read-testimonial w-inline-block" data-link="a23">
                    <div class="button_text-small" data-text="tn81e1622"><?php echo _u('tn81e1622','text'); ?></div>
                    <div class="icon-1x1-xsmall-2 w-embed"><svg width="12px" height="12px" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3 1.5L5.5 4L3 6.5" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                      </svg></div>
                  </a><img src="<?php echo udesly_get_image(_u('i201b15d8', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('i201b15d8', 'img'))->alt ?>" class="header_testimonial-arrow" data-img="i201b15d8" srcset="<?php echo udesly_get_image(_u('i201b15d8', 'img'))->srcset ?>">
                  <div class="header_testimonial-arrow-text w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 196 50" fill="none" preserveAspectRatio="xMidYMid meet" aria-hidden="true" role="img">
                      <path d="M26.043 34.75V35C25.843 35.3333 25.5596 35.5 25.193 35.5C24.7263 35.5 24.4263 35.4166 24.293 35.25C24.0263 33.8833 21.7763 31.7166 17.543 28.75C13.3096 25.75 10.443 24.25 8.94296 24.25C7.04296 24.25 6.09297 24.25 6.09297 24.25V27.3499C6.09297 27.7833 6.20963 28.7833 6.44296 30.3499C6.64296 32.0166 6.80963 32.9333 6.94296 33.0999C7.50963 33.9999 7.79297 34.4166 7.79297 34.3499C7.79297 35.1166 7.35963 35.5 6.49297 35.5C5.5263 35.5 4.79297 35.15 4.29297 34.45C3.79297 33.75 3.54297 30.4833 3.54297 24.65C3.54297 24.1833 2.95964 23.7666 1.79297 23.4C0.626302 23.0333 0.0429688 22.6 0.0429688 22.1C0.0429688 21.3666 1.10963 20.7 3.24297 20.1C3.4763 18.9 3.6263 17.3 3.69296 15.3C3.8263 12.8 3.9263 11.1833 3.99297 10.45C4.0263 10.0833 4.1763 9.08328 4.44296 7.44995C4.6763 6.21662 4.7763 5.19995 4.74297 4.39995C4.5763 4.29995 4.12631 4.24995 3.39297 4.24995C2.69297 4.24995 2.34297 3.96662 2.34297 3.39995C2.34297 2.69995 2.67631 2.26662 3.34297 2.09995C3.80964 1.96662 4.29297 1.83328 4.79297 1.69995C4.89297 1.36662 5.10963 0.999952 5.44296 0.599952C5.74296 0.499952 6.00963 0.449951 6.24297 0.449951C6.60963 0.449951 6.97631 0.633285 7.34297 0.999952C7.74297 1.36662 8.09297 1.54995 8.39297 1.54995C8.55964 1.54995 8.79297 1.53328 9.09297 1.49995C9.39297 1.43328 9.6263 1.39995 9.79297 1.39995C13.493 1.39995 16.6096 2.16662 19.143 3.69995C22.243 5.49995 23.793 8.13328 23.793 11.6C23.793 14.4666 22.943 16.8 21.243 18.6C20.1763 19.7666 18.1096 21.1833 15.043 22.85C14.843 22.8833 14.6096 22.9666 14.343 23.1C15.0096 23.7333 16.5096 24.8166 18.843 26.3499C21.1763 27.8833 22.843 29.1333 23.843 30.0999C25.3763 31.6333 26.1096 33.1833 26.043 34.75ZM21.193 11.4C21.193 8.86662 20.043 6.91662 17.743 5.54995C15.843 4.41662 13.543 3.84995 10.843 3.84995C9.8763 3.84995 9.0763 3.91662 8.44296 4.04995L7.79297 5.04995C7.3263 5.81662 7.05963 6.83328 6.99297 8.09995C6.9263 9.93328 6.85964 11.0166 6.79297 11.35C6.39297 13.25 6.1263 16.2666 5.99297 20.4C8.45963 21.3333 9.99297 21.8 10.593 21.8C11.0596 21.8 11.7263 21.6666 12.593 21.4C15.0596 20.6666 17.0596 19.45 18.593 17.75C20.3263 15.9166 21.193 13.8 21.193 11.4Z" fill="currentColor"></path>
                      <path d="M41.8883 30.0499C41.8883 31.5166 40.905 32.8333 38.9383 34C37.1716 35.0666 35.505 35.5999 33.9383 35.5999C29.4716 35.5999 27.2383 32.7666 27.2383 27.0999C27.2383 24.5999 27.6883 21.9166 28.5883 19.05C29.7883 15.3166 31.3216 13.45 33.1883 13.45C34.7883 13.45 36.5383 14.2666 38.4383 15.9C40.3383 17.5 41.2883 19.1 41.2883 20.7C41.2883 22.7666 40.4549 24.5666 38.7883 26.0999C37.1216 27.6333 35.2383 28.4 33.1383 28.4C32.9383 28.4 32.505 28.2333 31.8383 27.9C31.205 27.5666 30.7716 27.4 30.5383 27.4C30.1049 27.4 29.8883 27.5333 29.8883 27.7999C29.8883 31.6333 31.155 33.5499 33.6883 33.5499C34.9883 33.5499 36.1883 33.1166 37.2883 32.25C37.9549 31.75 38.6883 30.9666 39.4883 29.9C40.1216 29.0666 40.5383 28.65 40.7383 28.65C41.5049 28.65 41.8883 29.1166 41.8883 30.0499ZM38.4383 20.85C38.4383 19.6833 38.105 18.6 37.4383 17.6C36.7716 16.5666 35.8883 16.0499 34.7883 16.0499C33.4549 16.0499 32.3716 16.8833 31.5383 18.5499C30.8383 19.9499 30.4883 21.4 30.4883 22.9C30.4883 23.8666 30.7883 24.6833 31.3883 25.35C32.0216 25.9833 32.8216 26.2999 33.7883 26.2999C35.1549 26.2999 36.2883 25.7166 37.1883 24.55C38.0216 23.4833 38.4383 22.25 38.4383 20.85Z" fill="currentColor"></path>
                      <path d="M59.3117 36.45C59.3117 36.9166 58.9451 37.15 58.2117 37.15C57.4117 37.15 56.9284 36.8166 56.7617 36.15C56.7284 36.05 56.7117 35.4 56.7117 34.2C56.7117 33.8666 56.6617 33.6 56.5617 33.4C54.695 34.7666 52.6784 35.45 50.5117 35.45C49.0117 35.45 47.5617 35.0333 46.1617 34.2C44.5617 33.2666 43.7617 32.1 43.7617 30.7C43.7617 29.3333 44.7117 28 46.6117 26.7C48.3451 25.5 49.945 24.9 51.4117 24.9H56.3617C56.5617 24.7 56.6617 24.35 56.6617 23.85C56.6617 21.6166 56.4784 19.9333 56.1117 18.7999C55.5117 16.8999 54.3284 15.95 52.5617 15.95C51.295 15.95 50.1284 16.75 49.0617 18.35C48.095 19.8166 47.6117 21.2166 47.6117 22.5499C47.6117 22.6166 47.6117 22.7166 47.6117 22.85C47.6117 22.9833 47.6117 23.0666 47.6117 23.1C47.6117 23.3666 47.4784 23.5 47.2117 23.5C46.8784 23.5 46.5117 23.3 46.1117 22.9C45.7117 22.5 45.5117 22.15 45.5117 21.85C45.5117 20.9166 45.7951 19.75 46.3617 18.35C46.9284 16.9166 47.5451 15.8333 48.2117 15.1C49.0451 14.2 50.0784 13.75 51.3117 13.75C53.2117 13.75 54.9617 14.35 56.5617 15.55C58.2617 16.85 59.1284 18.4166 59.1617 20.25L59.3117 36.45ZM56.6617 28.5C56.6617 27.1666 55.6284 26.5 53.5617 26.5C51.9284 26.5 50.4951 26.7833 49.2617 27.3499C47.6951 28.0833 46.9117 29.1833 46.9117 30.65C46.9117 31.55 47.3284 32.25 48.1617 32.75C48.8617 33.1833 49.695 33.4 50.6617 33.4C52.095 33.4 53.4451 32.9333 54.7117 32C56.0117 31.0666 56.6617 29.9 56.6617 28.5Z" fill="currentColor"></path>
                      <path d="M66.5633 34.5C66.5633 35.3666 66.0966 35.7999 65.1633 35.7999C63.6966 35.7999 62.9799 32.7833 63.0133 26.75L63.1633 4.29995C63.1633 3.93328 63.1133 3.41662 63.0133 2.74995C62.9133 2.04995 62.8633 1.53328 62.8633 1.19995C63.4966 0.733285 64.03 0.499952 64.4633 0.499952C64.93 0.499952 65.3966 0.666619 65.8633 0.999952C66.3299 1.33328 66.5633 1.73328 66.5633 2.19995C66.5633 2.53328 66.48 2.96662 66.3133 3.49995C66.1133 4.16662 65.9966 4.58329 65.9633 4.74995C65.5633 7.01662 65.3633 10.1833 65.3633 14.25C65.3633 20.8166 65.3466 23.9833 65.3133 23.75C65.4133 27.85 65.6799 30.9333 66.1133 33C66.1133 33.1 66.18 33.3333 66.3133 33.7C66.48 34.0333 66.5633 34.3 66.5633 34.5Z" fill="currentColor"></path>
                      <path d="M94.6211 22.75C94.6211 26.05 94.1377 28.8166 93.1711 31.0499C91.8711 34.1499 89.8211 35.7 87.0211 35.7C85.1878 35.7 83.5878 34.85 82.2211 33.15C81.9878 33.25 81.8711 34.2833 81.8711 36.25C81.8711 40.5833 82.0878 43.65 82.5211 45.45C82.5544 45.6166 82.7044 46.0166 82.9711 46.65C83.2711 47.2833 83.4211 47.6666 83.4211 47.7999C83.4211 48.3333 83.0877 48.5999 82.4211 48.5999C81.6211 48.5999 81.0544 48.4833 80.7211 48.25C80.4211 48.0166 80.1544 47.25 79.9211 45.95C79.7211 44.85 79.6211 43.9833 79.6211 43.3499V30.65C79.6211 29.4833 79.6878 27.9166 79.8211 25.95C79.9544 23.65 80.0378 22.0833 80.0711 21.25C80.1044 20.35 80.1044 19.1833 80.0711 17.75C80.0378 15.9166 80.0211 14.7333 80.0211 14.2C80.0211 11.9 80.6211 10.75 81.8211 10.75C82.4211 10.75 82.7211 10.9666 82.7211 11.4C82.7211 12.2333 82.6544 13.45 82.5211 15.0499C82.3878 16.6499 82.3211 17.85 82.3211 18.65H82.5211C83.2878 17.6166 84.0544 16.5666 84.8211 15.5C85.7211 14.3333 86.8377 13.75 88.1711 13.75C90.4044 13.75 92.0878 14.7499 93.2211 16.75C94.1544 18.35 94.6211 20.35 94.6211 22.75ZM92.1711 22.95C92.1711 21.1833 91.9878 19.6666 91.6211 18.4C91.0544 16.5333 90.1378 15.6 88.8711 15.6C87.9378 15.6 86.8044 16.4166 85.4711 18.05C84.3044 19.4833 83.4878 20.95 83.0211 22.45C82.6544 23.5833 82.3544 25.25 82.1211 27.45C81.9544 29.05 81.8711 29.8166 81.8711 29.75C81.8711 29.85 82.0211 30.0166 82.3211 30.25C82.5211 30.3833 82.7211 30.5333 82.9211 30.7C83.4544 31.4666 83.9878 32.2499 84.5211 33.0499C85.0878 33.8166 85.9211 34.2 87.0211 34.2C88.8544 34.2 90.2377 32.7 91.1711 29.7C91.8377 27.5666 92.1711 25.3166 92.1711 22.95Z" fill="currentColor"></path>
                      <path d="M108.221 17.2C108.221 17.3333 108.204 17.6166 108.171 18.05C107.738 18.7166 107.321 19.05 106.921 19.05C106.654 19.05 106.421 18.8833 106.221 18.5499C106.121 16.4499 105.254 15.4 103.621 15.4C102.554 15.4 101.504 17.3666 100.471 21.2999C100.071 22.7333 99.8711 24.6499 99.8711 27.0499C99.8711 30.1166 99.9544 32 100.121 32.7C100.154 32.8 100.238 33.0166 100.371 33.3499C100.504 33.6499 100.571 33.8833 100.571 34.0499C100.571 34.7833 100.071 35.15 99.0711 35.15C97.9378 35.15 97.3711 34.5666 97.3711 33.4C97.3711 33.2333 97.4044 33 97.4711 32.7C97.5711 32.3666 97.6211 32.1166 97.6211 31.95C97.6211 30.1166 97.5378 27.3666 97.3711 23.7C97.2044 20.0333 97.1211 17.2833 97.1211 15.45C97.1211 14.7833 97.2378 14.3833 97.4711 14.25C97.7044 14.0833 98.1544 14 98.8211 14C99.6544 14 100.138 14.3 100.271 14.9C100.304 15.5666 100.338 16.2166 100.371 16.85C101.238 15.5166 101.738 14.7666 101.871 14.6C102.604 13.7666 103.371 13.35 104.171 13.35C104.771 13.35 105.371 13.5333 105.971 13.9C106.304 14.1 106.754 14.6166 107.321 15.45C107.921 16.2833 108.221 16.8666 108.221 17.2Z" fill="currentColor"></path>
                      <path d="M124.573 25.15C124.573 28.0166 123.939 30.5166 122.673 32.65C121.173 35.2166 119.089 36.5 116.423 36.5C113.723 36.5 111.706 35.4499 110.373 33.3499C109.273 31.6166 108.723 29.3166 108.723 26.45C108.723 23.6166 109.356 20.8333 110.623 18.1C112.223 14.7333 114.256 13.05 116.723 13.05C117.356 13.05 118.256 13.4166 119.423 14.15C122.856 16.2833 124.573 19.9499 124.573 25.15ZM122.173 25.1C122.173 22.9666 121.889 21.05 121.323 19.35C120.489 16.9833 119.206 15.8 117.473 15.8C115.473 15.8 113.906 17.1166 112.773 19.75C111.906 21.7833 111.473 23.9666 111.473 26.2999C111.473 28.3999 111.773 30.1666 112.373 31.5999C113.239 33.5666 114.589 34.5499 116.423 34.5499C118.423 34.5499 119.939 33.4166 120.973 31.15C121.773 29.3833 122.173 27.3666 122.173 25.1Z" fill="currentColor"></path>
                      <path d="M133.482 10.35C133.482 10.8166 133.265 11.2166 132.832 11.5499C132.432 11.8833 131.999 12.05 131.532 12.05C131.032 12.05 130.315 11.45 129.382 10.25C129.382 10.1166 129.382 9.88328 129.382 9.54995C129.382 8.54995 129.882 8.04995 130.882 8.04995C131.549 8.04995 132.149 8.26662 132.682 8.69995C133.215 9.13328 133.482 9.68328 133.482 10.35ZM133.182 15.45C132.615 17.1166 132.332 18.6666 132.332 20.1C132.332 22.3666 132.382 25.7666 132.482 30.2999C132.582 34.7999 132.632 38.1833 132.632 40.45C132.632 42.65 132.099 44.5833 131.032 46.25C129.765 48.1833 128.099 49.15 126.032 49.15C124.932 49.15 123.332 48.6666 121.232 47.7C118.899 46.6666 117.732 45.6833 117.732 44.75C117.732 44.1833 118.082 43.9 118.782 43.9C119.015 43.9 119.182 43.9166 119.282 43.95C120.815 45.8166 122.715 46.75 124.982 46.75C128.449 46.75 130.182 43.7333 130.182 37.7C130.182 37.5333 130.065 30.2166 129.832 15.75L130.232 15.3C131.265 15.0333 131.849 14.9 131.982 14.9C132.415 14.9 132.815 15.0833 133.182 15.45Z" fill="currentColor"></path>
                      <path d="M150.638 30.0499C150.638 31.5166 149.655 32.8333 147.688 34C145.922 35.0666 144.255 35.5999 142.688 35.5999C138.222 35.5999 135.988 32.7666 135.988 27.0999C135.988 24.5999 136.438 21.9166 137.338 19.05C138.538 15.3166 140.072 13.45 141.938 13.45C143.538 13.45 145.288 14.2666 147.188 15.9C149.088 17.5 150.038 19.1 150.038 20.7C150.038 22.7666 149.205 24.5666 147.538 26.0999C145.872 27.6333 143.988 28.4 141.888 28.4C141.688 28.4 141.255 28.2333 140.588 27.9C139.955 27.5666 139.522 27.4 139.288 27.4C138.855 27.4 138.638 27.5333 138.638 27.7999C138.638 31.6333 139.905 33.5499 142.438 33.5499C143.738 33.5499 144.938 33.1166 146.038 32.25C146.705 31.75 147.438 30.9666 148.238 29.9C148.872 29.0666 149.288 28.65 149.488 28.65C150.255 28.65 150.638 29.1166 150.638 30.0499ZM147.188 20.85C147.188 19.6833 146.855 18.6 146.188 17.6C145.522 16.5666 144.638 16.0499 143.538 16.0499C142.205 16.0499 141.122 16.8833 140.288 18.5499C139.588 19.9499 139.238 21.4 139.238 22.9C139.238 23.8666 139.538 24.6833 140.138 25.35C140.772 25.9833 141.572 26.2999 142.538 26.2999C143.905 26.2999 145.038 25.7166 145.938 24.55C146.772 23.4833 147.188 22.25 147.188 20.85Z" fill="currentColor"></path>
                      <path d="M168.602 29.7999C168.602 30.5999 167.919 31.6833 166.552 33.0499C165.186 34.3833 164.069 35.1666 163.202 35.4C162.036 35.7666 161.069 35.95 160.302 35.95C157.869 35.95 156.002 35.0666 154.702 33.2999C153.502 31.7333 152.902 29.7 152.902 27.2C152.902 24.6333 153.452 21.7666 154.552 18.6C155.919 14.6666 157.619 12.7 159.652 12.7C160.619 12.7 161.902 13.1833 163.502 14.15C165.102 15.0833 166.002 15.9833 166.202 16.85C166.436 17.8833 166.552 18.9 166.552 19.9C166.552 23.5666 166.002 25.4 164.902 25.4C164.636 25.4 164.319 25.3 163.952 25.1C163.586 24.9 163.402 24.6666 163.402 24.4C163.402 24.2666 163.469 24.1 163.602 23.9C163.736 23.6666 163.819 23.5166 163.852 23.45C163.986 23.0166 164.052 22.0166 164.052 20.45C164.052 16.75 163.219 14.9 161.552 14.9C159.719 14.9 158.219 16.5833 157.052 19.95C156.186 22.55 155.752 25.0166 155.752 27.3499C155.752 29.1499 156.036 30.6499 156.602 31.8499C157.369 33.4166 158.552 34.2 160.152 34.2C161.119 34.2 162.252 33.7 163.552 32.7C164.719 31.8 165.586 30.8499 166.152 29.8499C166.286 29.5166 166.486 29.05 166.752 28.45C166.919 28.2166 167.152 28.0999 167.452 28.0999C167.652 28.0999 167.886 28.3333 168.152 28.7999C168.452 29.2333 168.602 29.5666 168.602 29.7999Z" fill="currentColor"></path>
                      <path d="M178.704 19.25C178.437 19.45 177.804 19.6166 176.804 19.75C175.704 19.8833 175.071 20 174.904 20.1C174.871 20.4666 174.854 22.3166 174.854 25.65C174.854 28.2499 174.887 30 174.954 30.9C174.954 31.2666 175.037 31.85 175.204 32.65C175.371 33.45 175.454 34.0666 175.454 34.5C175.454 34.7666 175.287 35.0333 174.954 35.2999C174.621 35.5666 174.321 35.7 174.054 35.7C173.387 35.7 172.854 35.0166 172.454 33.65C172.187 32.65 172.054 31.6999 172.054 30.7999C172.054 26.0999 172.087 22.6333 172.154 20.4C171.954 20.2333 171.187 20.2333 169.854 20.4C168.787 20.5333 168.254 20.15 168.254 19.25C168.254 17.9833 169.604 17.4 172.304 17.5L172.954 8.44995C172.954 8.34995 172.904 8.19995 172.804 7.99995C172.737 7.76662 172.704 7.59995 172.704 7.49995C172.704 7.29995 172.837 7.11662 173.104 6.94995C173.371 6.74995 173.687 6.66662 174.054 6.69995C175.221 6.79995 175.804 7.38329 175.804 8.44995C175.804 9.28328 175.687 10.5333 175.454 12.2C175.221 13.8666 175.104 15.1 175.104 15.9C175.104 16.3 175.137 16.6833 175.204 17.05L177.954 16.9C178.887 16.9 179.354 17.2666 179.354 18C179.354 18.5333 179.137 18.9499 178.704 19.25Z" fill="currentColor"></path>
                      <path d="M195.205 32.0499C195.205 33.2166 194.322 34.2 192.555 35C191.089 35.6333 189.672 35.95 188.305 35.95C187.405 35.95 186.372 35.7333 185.205 35.2999C184.572 35.0333 183.555 34.3333 182.155 33.2C180.622 31.9666 179.855 31.1166 179.855 30.65C179.855 29.6166 180.472 29.15 181.705 29.25H182.005C182.072 30.25 183.139 31.3333 185.205 32.5C187.072 33.5666 188.572 34.0999 189.705 34.0999C191.172 34.0999 191.905 33.5999 191.905 32.5999C191.905 31.9999 191.005 31.1666 189.205 30.0999C186.739 28.6666 185.055 27.5166 184.155 26.65C182.322 24.8833 181.405 22.85 181.405 20.55C181.405 18.8166 181.855 17.1666 182.755 15.6C183.789 13.7333 185.089 12.7999 186.655 12.7999C187.789 12.7999 189.155 13.3333 190.755 14.4C192.355 15.4333 193.289 16.4833 193.555 17.5499C193.822 18.4499 193.955 19.5 193.955 20.7C193.955 22 193.722 23.4166 193.255 24.95C192.955 25.1833 192.605 25.3 192.205 25.3C191.972 25.3 191.605 25.2166 191.105 25.0499C190.605 24.8499 190.355 24.65 190.355 24.45C190.355 24.5833 190.539 24.2166 190.905 23.35C191.172 22.7833 191.305 21.75 191.305 20.25C191.305 16.6833 190.189 14.9 187.955 14.9C186.789 14.9 185.855 15.6833 185.155 17.25C184.555 18.5166 184.255 19.8 184.255 21.1C184.255 22.7333 185.205 24.3166 187.105 25.85C187.739 26.3833 189.489 27.5333 192.355 29.2999C194.255 30.4666 195.205 31.3833 195.205 32.0499Z" fill="currentColor"></path>
                    </svg></div>
                </div>
              </div>
            </div>
          </section>
        </section>
        <div class="padding-global-3">
          <div class="container-large-4">
            <div class="padding-section-large-2">
              <div class="margin-bottom margin-xlarge">
                <div class="text-align-center-3">
                  <div class="max-width-large-2 align-center">
                    <div class="max-width-medium-2 align-center">
                      <div class="margin-bottom">
                        <h2 data-text="tn75867d73"><?php echo _u('tn75867d73','text'); ?></h2>
                      </div>
                    </div>
                    <p class="text-size-medium-2" data-text="t48000730"><?php echo _u('t48000730','text'); ?></p>
                  </div>
                </div>
              </div>
              <div class="w-layout-grid process_component">
                <div id="w-node-_5a326a0f-5bfc-d012-e7c2-f79f02048c73-0809aa89" class="w-layout-grid process_row">
                  <div class="process_card">
                    <div class="process_card-content">
                      <div class="process_card-content-top">
                        <div class="margin-bottom margin-custom1"><img src="<?php echo udesly_get_image(_u('i3f839254', 'img'))->src ?>" loading="lazy" data-sizes="[{&quot;max&quot;:479,&quot;size&quot;:&quot;100vw&quot;},{&quot;max&quot;:10000,&quot;size&quot;:&quot;102.95833587646484px&quot;}]" alt="<?php echo udesly_get_image(_u('i3f839254', 'img'))->alt ?>" class="process_card-image" data-img="i3f839254" srcset="<?php echo udesly_get_image(_u('i3f839254', 'img'))->srcset ?>"></div>
                        <div class="margin-bottom margin-xsmall">
                          <div class="text-color-green" data-text="t601"><?php echo _u('t601','text'); ?></div>
                        </div>
                        <div class="margin-bottom margin-xsmall">
                          <h5 data-text="tn5b787591"><?php echo _u('tn5b787591','text'); ?></h5>
                        </div>
                        <p class="text-size-small-2" data-text="tn6f756576"><?php echo _u('tn6f756576','text'); ?></p>
                      </div>
                    </div>
                  </div>
                  <div class="process_card">
                    <div class="process_card-content">
                      <div class="process_card-content-top">
                        <div class="margin-bottom margin-custom1"><img src="<?php echo udesly_get_image(_u('i5af45f74', 'img'))->src ?>" loading="lazy" data-sizes="[{&quot;max&quot;:479,&quot;size&quot;:&quot;100vw&quot;},{&quot;max&quot;:10000,&quot;size&quot;:&quot;102.45833587646484px&quot;}]" alt="<?php echo udesly_get_image(_u('i5af45f74', 'img'))->alt ?>" class="process_card-image" data-img="i5af45f74" srcset="<?php echo udesly_get_image(_u('i5af45f74', 'img'))->srcset ?>"></div>
                        <div class="margin-bottom margin-xsmall">
                          <div class="text-color-green" data-text="t602"><?php echo _u('t602','text'); ?></div>
                        </div>
                        <div class="margin-bottom margin-xsmall">
                          <h5 data-text="tn70f576b8"><?php echo _u('tn70f576b8','text'); ?></h5>
                        </div>
                        <p class="text-size-small-2" data-text="t3608c0d0"><?php echo _u('t3608c0d0','text'); ?></p>
                      </div>
                    </div>
                  </div>
                  <div class="process_card">
                    <div class="process_card-content">
                      <div class="process_card-content-top">
                        <div class="margin-bottom margin-custom1"><img src="<?php echo udesly_get_image(_u('in2721f0d6', 'img'))->src ?>" loading="lazy" data-sizes="[{&quot;max&quot;:479,&quot;size&quot;:&quot;100vw&quot;},{&quot;max&quot;:10000,&quot;size&quot;:&quot;126.44792175292969px&quot;}]" alt="<?php echo udesly_get_image(_u('in2721f0d6', 'img'))->alt ?>" class="process_card-image" data-img="in2721f0d6" srcset="<?php echo udesly_get_image(_u('in2721f0d6', 'img'))->srcset ?>"></div>
                        <div class="margin-bottom margin-xsmall">
                          <div class="text-color-green" data-text="t603"><?php echo _u('t603','text'); ?></div>
                        </div>
                        <div class="margin-bottom margin-xsmall">
                          <h5 data-text="t33f39b2d"><?php echo _u('t33f39b2d','text'); ?></h5>
                        </div>
                        <p class="text-size-small-2" data-text="t2d77a8bf"><?php echo _u('t2d77a8bf','text'); ?></p>
                      </div>
                    </div>
                  </div>
                  <div class="process_card">
                    <div class="process_card-content">
                      <div class="process_card-content-top">
                        <div class="margin-bottom margin-custom1"><img src="<?php echo udesly_get_image(_u('i5c4c911a', 'img'))->src ?>" loading="lazy" data-sizes="[{&quot;max&quot;:479,&quot;size&quot;:&quot;100vw&quot;},{&quot;max&quot;:10000,&quot;size&quot;:&quot;117.45833587646484px&quot;}]" alt="<?php echo udesly_get_image(_u('i5c4c911a', 'img'))->alt ?>" class="process_card-image" data-img="i5c4c911a" srcset="<?php echo udesly_get_image(_u('i5c4c911a', 'img'))->srcset ?>"></div>
                        <div class="margin-bottom margin-xsmall">
                          <div class="text-color-green" data-text="t604"><?php echo _u('t604','text'); ?></div>
                        </div>
                        <div class="margin-bottom margin-xsmall">
                          <h5 class="heading-4" data-text="t3194081"><?php echo _u('t3194081','text'); ?></h5>
                        </div>
                        <p class="text-size-small-2" data-text="t4e237d67"><?php echo _u('t4e237d67','text'); ?></p>
                      </div>
                    </div>
                  </div>
                  <div class="process_card">
                    <div class="process_card-content">
                      <div class="process_card-content-top">
                        <div class="margin-bottom margin-custom1"><img src="<?php echo udesly_get_image(_u('i1f07abe0', 'img'))->src ?>" loading="lazy" data-sizes="[{&quot;max&quot;:479,&quot;size&quot;:&quot;100vw&quot;},{&quot;max&quot;:10000,&quot;size&quot;:&quot;157.4375px&quot;}]" alt="<?php echo udesly_get_image(_u('i1f07abe0', 'img'))->alt ?>" class="process_card-image" data-img="i1f07abe0" srcset="<?php echo udesly_get_image(_u('i1f07abe0', 'img'))->srcset ?>"></div>
                        <div class="margin-bottom margin-xsmall">
                          <div class="text-color-green" data-text="t605"><?php echo _u('t605','text'); ?></div>
                        </div>
                        <div class="margin-bottom margin-xsmall">
                          <h5 data-text="tn405b5efb"><?php echo _u('tn405b5efb','text'); ?></h5>
                        </div>
                        <p class="text-size-small-2" data-text="t26b0c49e"><?php echo _u('t26b0c49e','text'); ?></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section_pricing">
        <div class="padding-global hide-tablet">
          <div class="container-large">
            <div class="margin-bottom margin-xlarge">
              <div class="text-align-center-3">
                <div class="max-width-large-2 align-center">
                  <div class="max-width-medium-2 align-center">
                    <div class="margin-bottom">
                      <h2 data-text="t507137a6"><?php echo _u('t507137a6','text'); ?></h2>
                      <p class="text-size-medium-2" data-text="t3bfcd32b"><?php echo _u('t3bfcd32b','text'); ?></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="padding-section-large">
              <div class="pricing_component">
                <div class="w-layout-grid pricing_top-row">
                  <div class="pricing_empty-space"></div>
                  <div data-w-id="4e2c023f-f5ca-e4fa-82ab-16b51ce95020" style="opacity:0" class="pricing_top-row-content">
                    <div class="pricing_top-row-wrapper">
                      <div class="text-size-large" data-text="t3cfe40e"><?php echo _u('t3cfe40e','text'); ?></div>
                      <div class="margin-vertical margin-xsmall">
                        <div class="gradient-wrapper">
                          <div class="heading-style-h1" data-text="t113a75"><?php echo _u('t113a75','text'); ?></div>
                        </div>
                      </div>
                      <div data-text="t11792ebb"><?php echo _u('t11792ebb','text'); ?></div>
                    </div>
                    <div class="pricing_top-button-wrapper">
                      <div class="margin-top margin-medium">
                        <div data-w-id="a60bf510-2cd6-b1d7-83d6-f299f419cacc" style="opacity:0" class="button-group">
                          <div data-w-id="a60bf510-2cd6-b1d7-83d6-f299f419cacd" class="click_wrapper">
                            <div css-pointer-events="none" class="click_bg-wrapper"></div>
                            <a href="<?php echo _u('a14e15f14','link'); ?>" class="click w-button" data-text="t7f274abe" data-link="a14e15f14"><?php echo _u('t7f274abe','text'); ?></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div data-w-id="4e2c023f-f5ca-e4fa-82ab-16b51ce9502e" style="opacity:0" class="pricing_top-row-content">
                    <div class="pricing_top-row-wrapper">
                      <div class="text-size-large" data-text="tn4080dc20"><?php echo _u('tn4080dc20','text'); ?></div>
                      <div class="margin-vertical margin-xsmall">
                        <div class="gradient-wrapper">
                          <div class="heading-style-h1" data-text="t212716c"><?php echo _u('t212716c','text'); ?></div>
                        </div>
                      </div>
                      <div data-text="tn755d01ed"><?php echo _u('tn755d01ed','text'); ?></div>
                    </div>
                    <div class="pricing_top-button-wrapper">
                      <div class="margin-top margin-medium">
                        <div data-w-id="ceb41435-c5cb-f017-46b0-cdb1aed5d478" style="opacity:0" class="button-group">
                          <div data-w-id="ceb41435-c5cb-f017-46b0-cdb1aed5d479" class="click_wrapper">
                            <div css-pointer-events="none" class="click_bg-wrapper"></div>
                            <a href="<?php echo _u('a14e15f14','link'); ?>" class="click w-button" data-text="t7f274abe" data-link="a14e15f14"><?php echo _u('t7f274abe','text'); ?></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div data-w-id="4e2c023f-f5ca-e4fa-82ab-16b51ce9503c" style="opacity:0" class="pricing_top-row-content">
                    <div class="pricing_top-row-wrapper">
                      <div class="text-size-large" data-text="t46f90f81"><?php echo _u('t46f90f81','text'); ?></div>
                      <div class="margin-vertical margin-xsmall">
                        <div class="gradient-wrapper">
                          <div class="heading-style-h1" data-text="tn60a1ea6d"><?php echo _u('tn60a1ea6d','text'); ?></div>
                        </div>
                      </div>
                      <div data-text="tn2834de6d"><?php echo _u('tn2834de6d','text'); ?></div>
                    </div>
                    <div class="pricing_top-button-wrapper">
                      <div class="margin-top margin-medium">
                        <div data-w-id="74900635-764e-c306-5e8c-1ca02395f541" style="opacity:0" class="button-group">
                          <div data-w-id="74900635-764e-c306-5e8c-1ca02395f542" class="click_wrapper">
                            <div css-pointer-events="none" class="click_bg-wrapper"></div>
                            <a href="<?php echo _u('a14e15f14','link'); ?>" class="click w-button" data-text="t7f274abe" data-link="a14e15f14"><?php echo _u('t7f274abe','text'); ?></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="w-layout-grid pricing_row is-other-row">
                  <div id="w-node-_4e2c023f-f5ca-e4fa-82ab-16b51ce9504e-0809aa89" class="pricing_feature">
                    <div data-text="tn2fbc3638"><?php echo _u('tn2fbc3638','text'); ?></div>
                  </div>
                  <div class="pricing_row-content">
                    <div class="pricing_checkmark w-embed"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--carbon" width="100%" height="100%" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32">
                        <path fill="currentColor" d="m13 24l-9-9l1.414-1.414L13 21.171L26.586 7.586L28 9L13 24z"></path>
                      </svg></div>
                  </div>
                  <div class="pricing_row-content"></div>
                  <div class="pricing_row-content"></div>
                </div>
                <div class="w-layout-grid pricing_row">
                  <div id="w-node-_4e2c023f-f5ca-e4fa-82ab-16b51ce9505b-0809aa89" class="pricing_feature">
                    <div data-text="tn3d3b013e"><?php echo _u('tn3d3b013e','text'); ?></div>
                  </div>
                  <div class="pricing_row-content">
                    <div class="pricing_checkmark w-embed"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--carbon" width="100%" height="100%" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32">
                        <path fill="currentColor" d="m13 24l-9-9l1.414-1.414L13 21.171L26.586 7.586L28 9L13 24z"></path>
                      </svg></div>
                  </div>
                  <div class="pricing_row-content">
                    <div class="pricing_checkmark w-embed"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--carbon" width="100%" height="100%" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32">
                        <path fill="currentColor" d="m13 24l-9-9l1.414-1.414L13 21.171L26.586 7.586L28 9L13 24z"></path>
                      </svg></div>
                  </div>
                  <div class="pricing_row-content">
                    <div class="pricing_checkmark w-embed"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--carbon" width="100%" height="100%" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32">
                        <path fill="currentColor" d="m13 24l-9-9l1.414-1.414L13 21.171L26.586 7.586L28 9L13 24z"></path>
                      </svg></div>
                  </div>
                </div>
                <div class="w-layout-grid pricing_row is-other-row">
                  <div id="w-node-_905fdbc0-d60b-6d04-8133-5fc92674d1b0-0809aa89" class="pricing_feature">
                    <div data-text="tn1a128ff5"><?php echo _u('tn1a128ff5','text'); ?></div>
                  </div>
                  <div class="pricing_row-content">
                    <div class="pricing_checkmark w-embed"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--carbon" width="100%" height="100%" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32">
                        <path fill="currentColor" d="m13 24l-9-9l1.414-1.414L13 21.171L26.586 7.586L28 9L13 24z"></path>
                      </svg></div>
                  </div>
                  <div class="pricing_row-content">
                    <div class="pricing_checkmark w-embed"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--carbon" width="100%" height="100%" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32">
                        <path fill="currentColor" d="m13 24l-9-9l1.414-1.414L13 21.171L26.586 7.586L28 9L13 24z"></path>
                      </svg></div>
                  </div>
                  <div class="pricing_row-content">
                    <div class="pricing_checkmark w-embed"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--carbon" width="100%" height="100%" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32">
                        <path fill="currentColor" d="m13 24l-9-9l1.414-1.414L13 21.171L26.586 7.586L28 9L13 24z"></path>
                      </svg></div>
                  </div>
                </div>
                <div class="w-layout-grid pricing_row">
                  <div id="w-node-_82a29de5-dc69-6971-db9c-9b7b9dd8160d-0809aa89" class="pricing_feature">
                    <div data-text="tn352d835c"><?php echo _u('tn352d835c','text'); ?></div>
                  </div>
                  <div class="pricing_row-content">
                    <div class="pricing_checkmark w-embed"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--carbon" width="100%" height="100%" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32">
                        <path fill="currentColor" d="m13 24l-9-9l1.414-1.414L13 21.171L26.586 7.586L28 9L13 24z"></path>
                      </svg></div>
                  </div>
                  <div class="pricing_row-content">
                    <div class="pricing_checkmark w-embed"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--carbon" width="100%" height="100%" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32">
                        <path fill="currentColor" d="m13 24l-9-9l1.414-1.414L13 21.171L26.586 7.586L28 9L13 24z"></path>
                      </svg></div>
                  </div>
                  <div class="pricing_row-content">
                    <div class="pricing_checkmark w-embed"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--carbon" width="100%" height="100%" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32">
                        <path fill="currentColor" d="m13 24l-9-9l1.414-1.414L13 21.171L26.586 7.586L28 9L13 24z"></path>
                      </svg></div>
                  </div>
                </div>
                <div class="w-layout-grid pricing_row is-other-row">
                  <div id="w-node-_4e2c023f-f5ca-e4fa-82ab-16b51ce95083-0809aa89" class="pricing_feature">
                    <div data-text="tn790843b2"><?php echo _u('tn790843b2','text'); ?></div>
                  </div>
                  <div class="pricing_row-content"></div>
                  <div class="pricing_row-content">
                    <div class="pricing_checkmark w-embed"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--carbon" width="100%" height="100%" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32">
                        <path fill="currentColor" d="m13 24l-9-9l1.414-1.414L13 21.171L26.586 7.586L28 9L13 24z"></path>
                      </svg></div>
                  </div>
                  <div class="pricing_row-content">
                    <div class="pricing_checkmark w-embed"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--carbon" width="100%" height="100%" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32">
                        <path fill="currentColor" d="m13 24l-9-9l1.414-1.414L13 21.171L26.586 7.586L28 9L13 24z"></path>
                      </svg></div>
                  </div>
                </div>
                <div class="w-layout-grid pricing_row">
                  <div id="w-node-_4e2c023f-f5ca-e4fa-82ab-16b51ce95090-0809aa89" class="pricing_feature">
                    <div data-text="tn635572e2"><?php echo _u('tn635572e2','text'); ?></div>
                  </div>
                  <div class="pricing_row-content"></div>
                  <div class="pricing_row-content">
                    <div class="pricing_checkmark w-embed"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--carbon" width="100%" height="100%" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32">
                        <path fill="currentColor" d="m13 24l-9-9l1.414-1.414L13 21.171L26.586 7.586L28 9L13 24z"></path>
                      </svg></div>
                  </div>
                  <div class="pricing_row-content">
                    <div class="pricing_checkmark w-embed"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--carbon" width="100%" height="100%" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32">
                        <path fill="currentColor" d="m13 24l-9-9l1.414-1.414L13 21.171L26.586 7.586L28 9L13 24z"></path>
                      </svg></div>
                  </div>
                </div>
                <div class="w-layout-grid pricing_row is-other-row">
                  <div id="w-node-de908cab-dbc5-da5f-0548-ec517181e068-0809aa89" class="pricing_feature">
                    <div data-text="t498c38b5"><?php echo _u('t498c38b5','text'); ?></div>
                  </div>
                  <div class="pricing_row-content"></div>
                  <div class="pricing_row-content">
                    <div class="pricing_checkmark w-embed"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--carbon" width="100%" height="100%" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32">
                        <path fill="currentColor" d="m13 24l-9-9l1.414-1.414L13 21.171L26.586 7.586L28 9L13 24z"></path>
                      </svg></div>
                  </div>
                  <div class="pricing_row-content">
                    <div class="pricing_checkmark w-embed"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--carbon" width="100%" height="100%" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32">
                        <path fill="currentColor" d="m13 24l-9-9l1.414-1.414L13 21.171L26.586 7.586L28 9L13 24z"></path>
                      </svg></div>
                  </div>
                </div>
                <div class="w-layout-grid pricing_row">
                  <div id="w-node-_4d377e79-1fba-c5ee-25f2-ecd5910894ae-0809aa89" class="pricing_feature">
                    <div data-text="tn2f22c7a6"><?php echo _u('tn2f22c7a6','text'); ?></div>
                  </div>
                  <div class="pricing_row-content">
                    <div class="pricing_checkmark is-disabled w-embed"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--carbon" width="100%" height="100%" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32">
                        <path fill="currentColor" d="m13 24l-9-9l1.414-1.414L13 21.171L26.586 7.586L28 9L13 24z"></path>
                      </svg></div>
                  </div>
                  <div class="pricing_row-content">
                    <div class="pricing_checkmark w-embed"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--carbon" width="100%" height="100%" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32">
                        <path fill="currentColor" d="m13 24l-9-9l1.414-1.414L13 21.171L26.586 7.586L28 9L13 24z"></path>
                      </svg></div>
                  </div>
                  <div class="pricing_row-content">
                    <div class="pricing_checkmark w-embed"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--carbon" width="100%" height="100%" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32">
                        <path fill="currentColor" d="m13 24l-9-9l1.414-1.414L13 21.171L26.586 7.586L28 9L13 24z"></path>
                      </svg></div>
                  </div>
                </div>
                <div class="w-layout-grid pricing_row is-other-row">
                  <div id="w-node-_0000c902-428e-eaa5-6c6d-224d2424a2bf-0809aa89" class="pricing_feature">
                    <div data-text="tn674d429a"><?php echo _u('tn674d429a','text'); ?></div>
                  </div>
                  <div class="pricing_row-content">
                    <div class="pricing_checkmark is-disabled w-embed"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--carbon" width="100%" height="100%" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32">
                        <path fill="currentColor" d="m13 24l-9-9l1.414-1.414L13 21.171L26.586 7.586L28 9L13 24z"></path>
                      </svg></div>
                  </div>
                  <div class="pricing_row-content"></div>
                  <div class="pricing_row-content">
                    <div class="pricing_checkmark w-embed"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--carbon" width="100%" height="100%" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32">
                        <path fill="currentColor" d="m13 24l-9-9l1.414-1.414L13 21.171L26.586 7.586L28 9L13 24z"></path>
                      </svg></div>
                  </div>
                </div>
                <div class="w-layout-grid pricing_row">
                  <div id="w-node-_46658e83-11e8-d72d-3b92-7ba0f81dbc7e-0809aa89" class="pricing_feature">
                    <div data-text="tn790843b2"><?php echo _u('tn790843b2','text'); ?></div>
                  </div>
                  <div class="pricing_row-content">
                    <div class="pricing_checkmark is-disabled w-embed"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--carbon" width="100%" height="100%" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32">
                        <path fill="currentColor" d="m13 24l-9-9l1.414-1.414L13 21.171L26.586 7.586L28 9L13 24z"></path>
                      </svg></div>
                  </div>
                  <div class="pricing_row-content"></div>
                  <div class="pricing_row-content">
                    <div class="pricing_checkmark w-embed"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--carbon" width="100%" height="100%" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32">
                        <path fill="currentColor" d="m13 24l-9-9l1.414-1.414L13 21.171L26.586 7.586L28 9L13 24z"></path>
                      </svg></div>
                  </div>
                </div>
                <div class="w-layout-grid pricing_row is-other-row">
                  <div id="w-node-_4e2c023f-f5ca-e4fa-82ab-16b51ce950e2-0809aa89" class="pricing_feature">
                    <div data-text="tn7c520f41"><?php echo _u('tn7c520f41','text'); ?></div>
                  </div>
                  <div class="pricing_row-content">
                    <div class="pricing_checkmark is-disabled w-embed"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--carbon" width="100%" height="100%" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32">
                        <path fill="currentColor" d="m13 24l-9-9l1.414-1.414L13 21.171L26.586 7.586L28 9L13 24z"></path>
                      </svg></div>
                  </div>
                  <div class="pricing_row-content">
                    <div class="pricing_checkmark is-disabled w-embed"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--carbon" width="100%" height="100%" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32">
                        <path fill="currentColor" d="m13 24l-9-9l1.414-1.414L13 21.171L26.586 7.586L28 9L13 24z"></path>
                      </svg></div>
                  </div>
                  <div class="pricing_row-content">
                    <div class="pricing_checkmark w-embed"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--carbon" width="100%" height="100%" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32">
                        <path fill="currentColor" d="m13 24l-9-9l1.414-1.414L13 21.171L26.586 7.586L28 9L13 24z"></path>
                      </svg></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <section class="contact-form">
          <div class="container">
            <div class="margin-bottom margin-xlarge">
              <div class="text-align-center-3">
                <div class="max-width-large-2 align-center">
                  <div class="max-width-medium-2 align-center">
                    <div class="margin-bottom">
                      <h2 data-text="tn13f6fc6f"><?php echo _u('tn13f6fc6f','text'); ?></h2>
                    </div>
                  </div>
                  <p class="text-size-medium-2" data-text="tn4f45c123"><?php echo _u('tn4f45c123','text'); ?></p>
                </div>
              </div>
            </div>
            <div class="live_wrapper">
              <div class="live_block">
                <div class="live_heading">
                  <h2 class="heading-3" data-text="t7f2746de"><?php echo _u('t7f2746de','text'); ?></h2>
                </div>
                <div class="form-block w-form">
                  <form id="email-form-2" name="email-form-2" data-name="Email Form 2" method="get" class="hs-form" data-wf-page-id="6566f34d0e7954710809aa89" data-wf-element-id="eac7a6bb-4d77-0fbf-2560-20812df7abf0" data-ajax-action="contact">
                    <div class="form-columns-2">
                      <div class="hs-form-field"><label for="contact[first-name-]">First name</label><input type="text" class="hs-input w-input" maxlength="256" name="contact[first-name-]" data-name="First Name 6" placeholder="First Name" id="First-Name-6"></div>
                      <div class="hs-form-field"><label for="contact[last-name]">Last name</label><input type="text" class="hs-input w-input" maxlength="256" name="contact[last-name]" data-name="Last name" placeholder="Last name" id="Last-name"></div>
                    </div>
                    <div class="form-columns-1">
                      <div class="hs-form-field"><label for="Email">Email</label><input type="email" class="hs-input w-input" maxlength="256" name="contact[email]" data-name="Email 2" placeholder="Email" id="Email-2"></div>
                      <div class="hs-form-field"><label for="contact[message]">Message</label><input type="text" class="hs-input w-input" maxlength="256" name="contact[message]" data-name="Message" placeholder="Message" id="Message"></div>
                    </div>
                    <div class="hs_submit"><input type="submit" value="Submit" data-wait="Please wait..." class="hs-button w-button"></div>
                  <?php udesly_honeypot_field() ?></form>
                  <div class="w-form-done">
                    <div data-text="t5a0ea5a1"><?php echo _u('t5a0ea5a1','text'); ?></div>
                  </div>
                  <div class="w-form-fail">
                    <div data-text="tn7c112e99"><?php echo _u('tn7c112e99','text'); ?></div>
                  </div>
                </div>
              </div>
              <div class="live_block">
                <div class="live_heading">
                  <h2 data-text="tn8fa0833"><?php echo _u('tn8fa0833','text'); ?></h2>
                  <div data-text="tn4926ba0b"><?php echo _u('tn4926ba0b','text'); ?></div>
                </div>
                <div class="hubspot_form-embed w-embed w-script">
                  <script charset="utf-8" type="text/javascript" src="https://js.hsforms.net/forms/embed/v2.js"></script>
                  <script>
  hbspt.forms.create({
    region: "na1",
    portalId: "44544053",
    formId: "29a8019d-d5ac-474d-bdbf-e33c5a900550"
  });
</script>
                </div>
                <div id="hubspot-success" class="custom-success-message"><img src="<?php echo udesly_get_image(_u('in7abe8101', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('in7abe8101', 'img'))->alt ?>" data-img="in7abe8101" srcset="<?php echo udesly_get_image(_u('in7abe8101', 'img'))->srcset ?>">
                  <h2 data-text="tn7632db62"><?php echo _u('tn7632db62','text'); ?></h2>
                  <div data-text="t4859da66"><?php echo _u('t4859da66','text'); ?></div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </section>
      <footer class="footer_component">
        <div class="padding-global">
          <div class="container-large">
            <div class="padding-bottom padding-xlarge">
              <div data-w-id="b88a015a-cf19-8156-6b9b-61d39cbe0400" style="opacity:0" class="w-layout-grid footer_top-wrapper">
                <div class="footer_left-wrapper">
                  <div class="margin-bottom margin-medium">
                    <a href="<?php echo _u('a23','link'); ?>" class="footer_logo-link w-nav-brand" data-link="a23"><img src="<?php echo udesly_get_image(_u('in68dba72', 'img'))->src ?>" loading="lazy" sizes="131.73611450195312px" srcset="<?php echo udesly_get_image(_u('in68dba72', 'img'))->srcset ?>" alt="<?php echo udesly_get_image(_u('in68dba72', 'img'))->alt ?>" class="logo" data-img="in68dba72"></a>
                  </div>
                  <div class="margin-bottom margin-medium">
                    <div class="footer_details-wrapper">
                      <div class="text-size-small" data-text="tcbf6139"><?php echo _u('tcbf6139','text'); ?></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </main>
  </div>
  
  