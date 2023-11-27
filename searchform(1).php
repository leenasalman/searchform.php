<?php 
/**
 * Template Name: Search Page
 */
?>
<?php get_header(); ?>
<main id="site-content" role="main">
    <section class="wp-block-group section-group is-layout-flow wp-block-group-is-layout-flow">
    <div class="wp-block-columns is-layout-flex wp-container-15 wp-block-columns-is-layout-flex">
        <div class="wp-block-column is-layout-flow wp-block-column-is-layout-flow">
            <div class="post-template wp-block-lazyblock-car-block search-result-car-block">
                <div class="car-block__search-result">
                  <div class="car-block__image">
                      <?php the_post_thumbnail(); ?>
                  </div>
                  
                  <a href="<?php the_permalink(); ?>" class="car-link">
                    <div class="car-block__title__search-result">
                        <h4>
                            <?php the_title(); ?>
                        </h4>
                    </div>
                  </a>
                  
                  <div class="car-block__price__search-result">
                    <p>
                      AED <?php 
                      $car_price = get_field('car-price');
                      // Check if the custom field has a value
                      if ($car_price) {
                        echo esc_html($car_price);
                        } ?> / Daily
                    </p>
                  </div>
                 
                    <div class="car-block__specs__search-result">
                        <div class="car-block-spec car-block__specs-engine">
                            <svg width="24px" height="24px" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg" fill="#FFF"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path class="a" d="M28.4126,30.8566V23.3285h1.6939A3.2936,3.2936,0,0,1,33.4,26.622v.941a3.2936,3.2936,0,0,1-3.2935,3.2936Z"></path><path class="a" d="M14.6,28.3629a2.4937,2.4937,0,0,0,4.9874,0V25.8222a2.4937,2.4937,0,0,0-4.9874,0Z"></path><path class="b" d="M24.696,27.0925a1.8821,1.8821,0,0,1,0,3.7641H21.5906V23.3285H24.696a1.882,1.882,0,0,1,0,3.764Z"></path><line class="b" x1="24.696" y1="27.0925" x2="21.5906" y2="27.0925"></line><path class="a" d="M18.1425,14.7025a1.7,1.7,0,0,1,0-3.39h12a1.7,1.7,0,1,1,0,3.39Z"></path><path class="a" d="M7.8925,31.5725a1.7,1.7,0,0,1-3.39,0h0v-10.17a1.7,1.7,0,1,1,3.39,0Z"></path><line class="a" x1="7.8925" y1="26.4825" x2="10.0025" y2="26.4825"></line><line class="a" x1="24.1425" y1="17.4625" x2="24.1425" y2="14.7025"></line><path class="a" d="M36.7725,25.0625h2.3v-3.26h2.11l2.32,7.2-2.33,7.2h-2.1v-3.14h-2.3l.02,2.05a1.58,1.58,0,0,1-1.58,1.58h-13.56a1.17,1.17,0,0,1-.66-.2l-4.99-3.47h-4.21a1.79,1.79,0,0,1-1.79-1.79c0-.0135,0-.027,0-.0405h0v-9.4a1.8,1.8,0,0,1,1.79-1.77h1.4l2.66-2.26a1.13,1.13,0,0,1,.73-.27h15.26a1.59,1.59,0,0,1,1.58,1.53v2.15h1.79a1.59,1.59,0,0,1,1.58,1.59h0Z"></path></g></svg>
                                <p>
                                    <!-- engine specs-->
                                </p>
                        </div>
                        <div class="car-block-spec car-block__specs-year">
                            <svg width="24px" height="24px" viewBox="0 0 24 24" fill="#FFF" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M3 9H21M7 3V5M17 3V5M6 12H8M11 12H13M16 12H18M6 15H8M11 15H13M16 15H18M6 18H8M11 18H13M16 18H18M6.2 21H17.8C18.9201 21 19.4802 21 19.908 20.782C20.2843 20.5903 20.5903 20.2843 20.782 19.908C21 19.4802 21 18.9201 21 17.8V8.2C21 7.07989 21 6.51984 20.782 6.09202C20.5903 5.71569 20.2843 5.40973 19.908 5.21799C19.4802 5 18.9201 5 17.8 5H6.2C5.0799 5 4.51984 5 4.09202 5.21799C3.71569 5.40973 3.40973 5.71569 3.21799 6.09202C3 6.51984 3 7.07989 3 8.2V17.8C3 18.9201 3 19.4802 3.21799 19.908C3.40973 20.2843 3.71569 20.5903 4.09202 20.782C4.51984 21 5.07989 21 6.2 21Z" stroke="#000000" stroke-width="2" stroke-linecap="round"></path> </g></svg>
                                <p>
                                    <!--year-->
                                </p>
                        </div>
                        <div class="car-block-spec car-block__specs-door">
                            <svg width="24px" height="24px" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" fill="#FFF"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path fill="#FFF" d="M71.47 18.38l-.01.01c-6.58-.1-14.25.79-21.52 2.41-8.31 1.84-16.18 4.69-21.3 7.56-2.57 1.44-4.42 2.9-5.24 3.8l25.86 90.54c7.22-9.1 15.41-16.6 23.75-22.2 9.69-6.44 19.19-10.67 27.89-12.47 0-13.14-.3-25.92-1.8-36.76-1.9-13.05-5.6-23.03-11.5-28.91-1.3-1.35-6.28-3.44-13.39-3.88-.89 0-1.81-.1-2.74-.1zm29.03 92.12c-6.7.4-14.2 3.5-21.1 8.7-13.68 10.3-24.04 28.7-24.34 40.2l45.74 240.3c7.6-9.5 19.2-15.7 32.2-15.7 11.5 0 22 4.9 29.5 12.7 5.1-1.1 10.5-2.2 16.4-3.3 1.5-.3 3.1-.5 4.7-.8-13.5-92.5-35.3-199.6-65.2-275.3-5.2-4.8-10.3-6.7-15.6-6.8h-2.3zm283 39.5l-53.6 167.4 17.2 5.4 24-75.1 117.1 37.5 5.4-17.2-117-37.4 24.1-75.2-17.2-5.4zm-38.7 245.3c-21.5.1-46.3 1.4-71 3.7-33 2.9-66 7.4-91.6 12.1-3.5.6-6.8 1.3-10 1.9 1.2 3.8 1.8 7.8 1.8 12 0 22.5-18.5 41-41 41-5.6 0-11-1.2-15.9-3.2-3.1 8.9-5.4 17.6-6.7 24.2H398c5 0 7.7-1.8 10.7-6.4 3.1-4.7 5.4-12.4 6.3-21.5 1.9-18.1-2.1-41.2-9.1-55.1.3.5-2.8-2.5-10.2-4.4-7.4-1.9-18.1-3.3-30.7-3.9-6.3-.3-13.1-.4-20.2-.4zM133 402c-12.8 0-23 10.2-23 23s10.2 23 23 23 23-10.2 23-23-10.2-23-23-23z"></path></g></svg>
                                <p>2</p>
                        </div>
                    </div>
            
                  
                  <div class="car-block__btn">
                    <div class="btn-primary-cl btn-primary-orange-full p-4">
                      <a href="tel:+971585521050">
                        Call Now
                      </a>
                    </div>
                    <div class="btn-primary-cl btn-primary-green-full p-4">
                      <a href="https://wa.me/971585521050">
                        WhatsApp
                      </a>
                    </div>
                  </div>
                  
                </div>
            </div>
        </div>
    </div>
</section>
<?php 