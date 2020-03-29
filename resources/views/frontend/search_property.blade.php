@extends('frontend/property')
@section('search')
	 <div class="col-lg-4 col-md-12">
                <div class="sidebar-right">
                    <!-- Advanced search start -->
                    <div class="sidebar widget advanced-search">
                        <h3 class="sidebar-title">Advanced Search</h3>
                        <div class="s-border"></div>
                        <div class="m-border"></div>
                        <form method="GET">
                            <div class="form-group">
                                <select class="selectpicker search-fields" name="property-sdtatus">
                                    <option>Property Status</option>
                                    <option>For Sale</option>
                                    <option>For Rent</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="selectpicker search-fields" name="property-type">
                                    <option>Property Type</option>
                                    <option>Apartments</option>
                                    <option>Houses</option>
                                    <option>Commercial</option>
                                    <option>Garages</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="selectpicker search-fields" name="commercial">
                                    <option>Commercial</option>
                                    <option>Residential</option>
                                    <option>Land</option>
                                    <option>Hotels</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="selectpicker search-fields" name="location">
                                    <option>location</option>
                                    <option>New York</option>
                                    <option>Bangladesh</option>
                                    <option>India</option>
                                    <option>Canada</option>
                                </select>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <select class="selectpicker search-fields" name="bedrooms">
                                            <option>Bedrooms</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <select class="selectpicker search-fields" name="bathroom">
                                            <option>Bathroom</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <select class="selectpicker search-fields" name="balcony">
                                            <option>Balcony</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <select class="selectpicker search-fields" name="garage">
                                            <option>Garage</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="range-slider">
                                <label>Area</label>
                                <div data-min="0" data-max="10000" data-min-name="min_area" data-max-name="max_area" data-unit="Sq ft" class="range-slider-ui ui-slider" aria-disabled="false"></div>
                                <div class="clearfix"></div>
                            </div>

                            <div class="range-slider">
                                <label>Price</label>
                                <div data-min="0" data-max="150000"  data-min-name="min_price" data-max-name="max_price" data-unit="USD" class="range-slider-ui ui-slider" aria-disabled="false"></div>
                                <div class="clearfix"></div>
                            </div>

                            <a class="show-more-options" data-toggle="collapse" data-target="#options-content">
                                <i class="fa fa-plus-circle"></i> Show More Options
                            </a>
                            <div id="options-content" class="collapse">
                                <label class="margin-t-10">Features</label>
                                <div class="s-border"></div>
                                <div class="m-border"></div>
                                <div class="checkbox checkbox-theme checkbox-circle">
                                    <input id="checkbox1" type="checkbox">
                                    <label for="checkbox1">
                                        Free Parking
                                    </label>
                                </div>
                                <div class="checkbox checkbox-theme checkbox-circle">
                                    <input id="checkbox2" type="checkbox">
                                    <label for="checkbox2">
                                        Air Condition
                                    </label>
                                </div>
                                <div class="checkbox checkbox-theme checkbox-circle">
                                    <input id="checkbox3" type="checkbox">
                                    <label for="checkbox3">
                                        Places to seat
                                    </label>
                                </div>
                                <div class="checkbox checkbox-theme checkbox-circle">
                                    <input id="checkbox4" type="checkbox">
                                    <label for="checkbox4">
                                        Swimming Pool
                                    </label>
                                </div>
                                <div class="checkbox checkbox-theme checkbox-circle">
                                    <input id="checkbox5" type="checkbox">
                                    <label for="checkbox5">
                                        Laundry Room
                                    </label>
                                </div>
                                <div class="checkbox checkbox-theme checkbox-circle">
                                    <input id="checkbox6" type="checkbox">
                                    <label for="checkbox6">
                                        Window Covering
                                    </label>
                                </div>
                                <div class="checkbox checkbox-theme checkbox-circle">
                                    <input id="checkbox7" type="checkbox">
                                    <label for="checkbox7">
                                        Central Heating
                                    </label>
                                </div>
                                <div class="checkbox checkbox-theme checkbox-circle">
                                    <input id="checkbox8" type="checkbox">
                                    <label for="checkbox8">
                                        Alarm
                                    </label>
                                </div>
                            </div>

                            <div class="form-group mb-0">
                                <button class="search-button">Search</button>
                            </div>
                        </form>
                    </div>
                    <!-- Popular posts start -->
                    <div class="widget popular-posts">
                        <h3 class="sidebar-title">Popular Posts</h3>
                        <div class="s-border"></div>
                        <div class="m-border"></div>
                        <div class="media">
                            <div class="media-left">
                                <img class="media-object" src="http://placehold.it/60x60" alt="sub-properties">
                            </div>
                            <div class="media-body align-self-center">
                                <h3 class="media-heading">
                                    <a href="#">Modern Design Building</a>
                                </h3>
                                <p>Apr 15, 2019 | $2041,000</p>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-left">
                                <img class="media-object" src="http://placehold.it/60x60" alt="sub-properties">
                            </div>
                            <div class="media-body align-self-center">
                                <h3 class="media-heading">
                                    <a href="#">Real Eatate Expo 2018</a>
                                </h3>
                                <p>Feb 27, 2019 | $1045,000</p>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-left">
                                <img class="media-object" src="http://placehold.it/60x60" alt="sub-properties">
                            </div>
                            <div class="media-body align-self-center">
                                <h3 class="media-heading">
                                    <a href="#">Villa in Coral Gables</a>
                                </h3>
                                <p>Apr 21, 2019 | $545,000</p>
                            </div>
                        </div>
                    </div>
                    <!-- Posts by category start -->
                    <div class="posts-by-category widget">
                        <h3 class="sidebar-title">Category</h3>
                        <div class="s-border"></div>
                        <div class="m-border"></div>
                        <ul class="list-unstyled list-cat">
                            <li><a href="#">Single Family <span>(45)</span></a></li>
                            <li><a href="#">Apartment <span>(21)</span> </a></li>
                            <li><a href="#">Condo <span>(23)</span></a></li>
                            <li><a href="#">Multi Family <span>(19)</span></a></li>
                            <li><a href="#">Villa <span>(19)</span></a> </li>
                            <li><a href="#">Other <span>(22) </span></a></li>
                        </ul>
                    </div>
                    <!-- Helping Center start -->
                    <div class="widget helping-center">
                        <h3 class="sidebar-title">Helping Center</h3>
                        <div class="s-border"></div>
                        <div class="m-border"></div>
                        <ul class="contact-link">
                            <li>
                                <i class="flaticon-location"></i>
                                20-21 Kathal St. Tampa City, FL
                            </li>
                            <li>
                                <i class="flaticon-technology-1"></i>
                                <a href="tel:+55-417-634-7071">
                                    +55 417 634 7071
                                </a>
                            </li>
                            <li>
                                <i class="flaticon-envelope"></i>
                                <a href="mailto:info@themevessel.com">
                                    info@themevessel.com
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- Latest reviews start -->
                    <div class="widget latest-reviews">
                        <h3 class="sidebar-title">Reviews</h3>
                        <div class="s-border"></div>
                        <div class="m-border"></div>
                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object" src="http://placehold.it/50x50" alt="avatar-1">
                                </a>
                            </div>
                            <div class="media-body">
                                <h3 class="media-heading"><a href="#">Emma Connor</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiamrisus tortor, accumsan</p>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object" src="http://placehold.it/50x50" alt="avatar-2">
                                </a>
                            </div>
                            <div class="media-body">
                                <h3 class="media-heading"><a href="#">Martin Smith</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiamrisus tortor, accumsan</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

@endsection