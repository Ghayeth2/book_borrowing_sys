
@extends('layouts.homeBase')

@section('title', $data->title)


@section('content')
    <!-- Start: Products Section -->
    <div id="content" class="site-content">
        <div id="primary" class="content-area">
            <main id="main" class="site-main">
                <div class="booksmedia-detail-main">
                    <div class="container">
                        <div class="row">
                            <!-- Start: Search Section -->
                            <section class="search-filters">
                                <div class="container">
                                    <div class="filter-box">
                                        <h3>What are you looking for at the library?</h3>
                                        <form action="http://libraria.demo.presstigers.com/index.html" method="get">
                                            <div class="col-md-4 col-sm-6">
                                                <div class="form-group">
                                                    <label class="sr-only" for="keywords">Search by Keyword</label>
                                                    <input class="form-control" placeholder="Search by Keyword" id="keywords" name="keywords" type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6">
                                                <div class="form-group">
                                                    <select name="catalog" id="catalog" class="form-control">
                                                        <option>Search the Catalog</option>
                                                        <option>Catalog 01</option>
                                                        <option>Catalog 02</option>
                                                        <option>Catalog 03</option>
                                                        <option>Catalog 04</option>
                                                        <option>Catalog 05</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6">
                                                <div class="form-group">
                                                    <select name="category" id="category" class="form-control">
                                                        <option>All Categories</option>
                                                        <option>Category 01</option>
                                                        <option>Category 02</option>
                                                        <option>Category 03</option>
                                                        <option>Category 04</option>
                                                        <option>Category 05</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-6">
                                                <div class="form-group">
                                                    <input class="form-control" type="submit" value="Search">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </section>
                            <!-- End: Search Section -->
                        </div>
                        <div class="row">
                            <div class="col-md-9 col-md-push-3">
                                <div class="booksmedia-detail-box">
                                    <div class="single-book-box">
                                        <div class="post-thumbnail">
                                            <div class="book-list-icon yellow-icon"></div>
                                            <img alt="Book" src="{{\Illuminate\Support\Facades\Storage::url($data->image)}}"
                                                 style="width: 300px; height: 465px;"/>
                                        </div>
                                        <div class="post-detail">
                                            <div class="books-social-sharing">
                                                <ul>
                                                    <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                                    <li><a href="#" target="_blank"><i class="fa fa-rss"></i></a></li>
                                                    <li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="optional-links">
                                                <ul>
                                                    <li>
                                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Add To Cart">
                                                            <i class="fa fa-shopping-cart"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Like">
                                                            <i class="fa fa-heart"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Mail"><i class="fa fa-envelope"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Search">
                                                            <i class="fa fa-search"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Print">
                                                            <i class="fa fa-print"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <header class="entry-header">
                                                <h2 class="entry-title">{{$data->title}}</h2>
                                                <ul>
                                                    <li><strong>Author:</strong> {{$data->author}}</li>
                                                    <li><strong>ISBN:</strong> {{$data->isbn}}</li>
                                                    <li>
                                                        <div class="rating">
                                                            <strong>Rating:</strong>
                                                            <span>☆</span>
                                                            <span>☆</span>
                                                            <span>☆</span>
                                                            <span>☆</span>
                                                            <span>☆</span>
                                                        </div>
                                                    </li>
                                                    <li><strong>Edition:</strong> {{$data->edition}}</li>
                                                </ul>
                                            </header>
                                            <div class="entry-content post-buttons">
                                                <a href="#." class="btn btn-dark-gray">Place a Hold</a>
                                                <a href="#." class="btn btn-dark-gray">View sample</a>
                                                <a href="#." class="btn btn-dark-gray">Find Similar Titles</a>
                                            </div>
                                        </div>
                                    </div>
                                    <p><strong>Summary:</strong> There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. </p>
                                    <ul class="detail-page-listing">
                                        <li><strong>Length:</strong> 518 pages.</li>
                                        <li><strong>Language :</strong> Icelandic dialogue; English subtitles.</li>
                                        <li><strong>Topics:</strong> Friendship, Bullies, Pranks, School</li>
                                    </ul>
                                    <div class="booksmedia-fullwidth booksmedia-popular-list">
                                        <h2 class="section-title text-center">Popular Items</h2>
                                        <span class="underline center"></span>
                                        <p class="lead text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        <ul class="popular-items-detail-v1">
                                            <li>
                                                <div class="book-list-icon blue-icon"></div>
                                                <figure>
                                                    <img src="images/books-media/layout-3/books-media-layout3-01.jpg" alt="Book">
                                                    <figcaption>
                                                        <header>
                                                            <h4><a href="#.">The Great Gatsby</a></h4>
                                                            <p><strong>Author:</strong>  F. Scott Fitzgerald</p>
                                                            <p><strong>ISBN:</strong>  9781581573268</p>
                                                        </header>
                                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Pellentesque dolor turpis, pulvinar varius.</p>
                                                        <div class="actions">
                                                            <ul>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Add To Cart">
                                                                        <i class="fa fa-shopping-cart"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Like">
                                                                        <i class="fa fa-heart"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Mail"><i class="fa fa-envelope"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Search">
                                                                        <i class="fa fa-search"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Print">
                                                                        <i class="fa fa-print"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Print">
                                                                        <i class="fa fa-share-alt"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </li>
                                            <li>
                                                <div class="book-list-icon yellow-icon"></div>
                                                <figure>
                                                    <img src="images/books-media/layout-3/books-media-layout3-02.jpg" alt="Book">
                                                    <figcaption>
                                                        <header>
                                                            <h4><a href="#.">The Great Gatsby</a></h4>
                                                            <p><strong>Author:</strong>  F. Scott Fitzgerald</p>
                                                            <p><strong>ISBN:</strong>  9781581573268</p>
                                                        </header>
                                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Pellentesque dolor turpis, pulvinar varius.</p>
                                                        <div class="actions">
                                                            <ul>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Add To Cart">
                                                                        <i class="fa fa-shopping-cart"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Like">
                                                                        <i class="fa fa-heart"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Mail"><i class="fa fa-envelope"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Search">
                                                                        <i class="fa fa-search"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Print">
                                                                        <i class="fa fa-print"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Print">
                                                                        <i class="fa fa-share-alt"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </li>
                                            <li>
                                                <div class="book-list-icon green-icon"></div>
                                                <figure>
                                                    <img src="images/books-media/layout-3/books-media-layout3-03.jpg" alt="Book">
                                                    <figcaption>
                                                        <header>
                                                            <h4><a href="#.">The Great Gatsby</a></h4>
                                                            <p><strong>Author:</strong>  F. Scott Fitzgerald</p>
                                                            <p><strong>ISBN:</strong>  9781581573268</p>
                                                        </header>
                                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Pellentesque dolor turpis, pulvinar varius.</p>
                                                        <div class="actions">
                                                            <ul>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Add To Cart">
                                                                        <i class="fa fa-shopping-cart"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Like">
                                                                        <i class="fa fa-heart"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Mail"><i class="fa fa-envelope"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Search">
                                                                        <i class="fa fa-search"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Print">
                                                                        <i class="fa fa-print"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Print">
                                                                        <i class="fa fa-share-alt"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </li>
                                            <li>
                                                <div class="book-list-icon blue-icon"></div>
                                                <figure>
                                                    <img src="images/books-media/layout-3/books-media-layout3-01.jpg" alt="Book">
                                                    <figcaption>
                                                        <header>
                                                            <h4><a href="#.">The Great Gatsby</a></h4>
                                                            <p><strong>Author:</strong>  F. Scott Fitzgerald</p>
                                                            <p><strong>ISBN:</strong>  9781581573268</p>
                                                        </header>
                                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Pellentesque dolor turpis, pulvinar varius.</p>
                                                        <div class="actions">
                                                            <ul>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Add To Cart">
                                                                        <i class="fa fa-shopping-cart"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Like">
                                                                        <i class="fa fa-heart"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Mail"><i class="fa fa-envelope"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Search">
                                                                        <i class="fa fa-search"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Print">
                                                                        <i class="fa fa-print"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Print">
                                                                        <i class="fa fa-share-alt"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </li>
                                            <li>
                                                <div class="book-list-icon yellow-icon"></div>
                                                <figure>
                                                    <img src="images/books-media/layout-3/books-media-layout3-02.jpg" alt="Book">
                                                    <figcaption>
                                                        <header>
                                                            <h4><a href="#.">The Great Gatsby</a></h4>
                                                            <p><strong>Author:</strong>  F. Scott Fitzgerald</p>
                                                            <p><strong>ISBN:</strong>  9781581573268</p>
                                                        </header>
                                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Pellentesque dolor turpis, pulvinar varius.</p>
                                                        <div class="actions">
                                                            <ul>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Add To Cart">
                                                                        <i class="fa fa-shopping-cart"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Like">
                                                                        <i class="fa fa-heart"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Mail"><i class="fa fa-envelope"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Search">
                                                                        <i class="fa fa-search"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Print">
                                                                        <i class="fa fa-print"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Print">
                                                                        <i class="fa fa-share-alt"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </li>
                                            <li>
                                                <div class="book-list-icon green-icon"></div>
                                                <figure>
                                                    <img src="images/books-media/layout-3/books-media-layout3-03.jpg" alt="Book">
                                                    <figcaption>
                                                        <header>
                                                            <h4><a href="#.">The Great Gatsby</a></h4>
                                                            <p><strong>Author:</strong>  F. Scott Fitzgerald</p>
                                                            <p><strong>ISBN:</strong>  9781581573268</p>
                                                        </header>
                                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Pellentesque dolor turpis, pulvinar varius.</p>
                                                        <div class="actions">
                                                            <ul>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Add To Cart">
                                                                        <i class="fa fa-shopping-cart"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Like">
                                                                        <i class="fa fa-heart"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Mail"><i class="fa fa-envelope"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Search">
                                                                        <i class="fa fa-search"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Print">
                                                                        <i class="fa fa-print"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Print">
                                                                        <i class="fa fa-share-alt"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-md-pull-9">
                                <aside id="secondary" class="sidebar widget-area" data-accordion-group>
                                    <div class="widget widget_related_search open" data-accordion>
                                        <h4 class="widget-title" data-control>Related Searches</h4>
                                        <div data-content>
                                            <div data-accordion>
                                                <h5 class="widget-sub-title" data-control>Subject</h5>
                                                <div class="widget_categories" data-content>
                                                    <ul>
                                                        <li><a href="#">Love stories <span>(18)</span></a></li>
                                                        <li><a href="#">Texas <span>(04)</span></a></li>
                                                        <li><a href="#">Rich people <span>(03)</span></a></li>
                                                        <li><a href="#">Humorous stories <span>(02)</span></a></li>
                                                        <li><a href="#">Widows <span>(02)</span></a></li>
                                                        <li><a href="#">Women <span>(11)</span></a></li>
                                                        <li><a href="#">Babysitters <span>(25)</span></a></li>
                                                        <li><a href="#">Law firms <span>(09)</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div data-accordion>
                                                <h5 class="widget-sub-title" data-control>Authors</h5>
                                                <div class="widget_categories" data-content>
                                                    <ul>
                                                        <li><a href="#">Love stories <span>(18)</span></a></li>
                                                        <li><a href="#">Texas <span>(04)</span></a></li>
                                                        <li><a href="#">Rich people <span>(03)</span></a></li>
                                                        <li><a href="#">Humorous stories <span>(02)</span></a></li>
                                                        <li><a href="#">Widows <span>(02)</span></a></li>
                                                        <li><a href="#">Women <span>(11)</span></a></li>
                                                        <li><a href="#">Babysitters <span>(25)</span></a></li>
                                                        <li><a href="#">Law firms <span>(09)</span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div data-accordion>
                                                <h5 class="widget-sub-title" data-control>Series</h5>
                                                <div class="widget_categories" data-content>
                                                    <ul>
                                                        <li><a href="#">Love stories <span>(18)</span></a></li>
                                                        <li><a href="#">Texas <span>(04)</span></a></li>
                                                        <li><a href="#">Rich people <span>(03)</span></a></li>
                                                        <li><a href="#">Humorous stories <span>(02)</span></a></li>
                                                        <li><a href="#">Widows <span>(02)</span></a></li>
                                                        <li><a href="#">Women <span>(11)</span></a></li>
                                                        <li><a href="#">Babysitters <span>(25)</span></a></li>
                                                        <li><a href="#">Law firms <span>(09)</span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div data-accordion>
                                                <h5 class="widget-sub-title" data-control>Other Searches</h5>
                                                <div class="widget_categories" data-content>
                                                    <ul>
                                                        <li><a href="#">Love stories <span>(18)</span></a></li>
                                                        <li><a href="#">Texas <span>(04)</span></a></li>
                                                        <li><a href="#">Rich people <span>(03)</span></a></li>
                                                        <li><a href="#">Humorous stories <span>(02)</span></a></li>
                                                        <li><a href="#">Widows <span>(02)</span></a></li>
                                                        <li><a href="#">Women <span>(11)</span></a></li>
                                                        <li><a href="#">Babysitters <span>(25)</span></a></li>
                                                        <li><a href="#">Law firms <span>(09)</span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="widget widget_narrow_search" data-accordion>
                                        <h4 class="widget-title" data-control>Narrow your search</h4>
                                        <div data-content>
                                            <div data-accordion>
                                                <h5 class="widget-sub-title" data-control>Type of Material</h5>
                                                <div class="widget_material" data-content>
                                                    <form action="#">
                                                        <label><input type="checkbox" name="material" value="books"> Books</label>
                                                        <label><input type="checkbox" name="material" value="electronic" checked> Electronic Resources</label>
                                                        <label><input type="checkbox" name="material" value="ebooks"> ebooks</label>
                                                        <label><input type="checkbox" name="material" value="soundrecording" checked> Sound Recording</label>
                                                        <label><input type="checkbox" name="material" value="largeprint"> Large Print</label>
                                                        <label><input type="checkbox" name="material" value="audioebooks" checked> Audio eBooks</label>
                                                    </form>
                                                </div>
                                            </div>
                                            <div data-accordion>
                                                <h5 class="widget-sub-title" data-control>Publishing Date </h5>
                                                <div class="widget widget_material" data-content>
                                                    <form action="#">
                                                        <label><input type="checkbox" name="material" value="books"> Books</label>
                                                        <label><input type="checkbox" name="material" value="electronic" checked> Electronic Resources</label>
                                                        <label><input type="checkbox" name="material" value="ebooks"> ebooks</label>
                                                        <label><input type="checkbox" name="material" value="soundrecording" checked> Sound Recording</label>
                                                        <label><input type="checkbox" name="material" value="largeprint"> Large Print</label>
                                                        <label><input type="checkbox" name="material" value="audioebooks" checked> Audio eBooks</label>
                                                    </form>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div data-accordion>
                                                <h5 class="widget-sub-title" data-control>Popularity </h5>
                                                <div class="widget widget_material" data-content>
                                                    <form action="#">
                                                        <label><input type="checkbox" name="material" value="books"> Books</label>
                                                        <label><input type="checkbox" name="material" value="electronic" checked> Electronic Resources</label>
                                                        <label><input type="checkbox" name="material" value="ebooks"> ebooks</label>
                                                        <label><input type="checkbox" name="material" value="soundrecording" checked> Sound Recording</label>
                                                        <label><input type="checkbox" name="material" value="largeprint"> Large Print</label>
                                                        <label><input type="checkbox" name="material" value="audioebooks" checked> Audio eBooks</label>
                                                    </form>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div data-accordion>
                                                <h5 class="widget-sub-title" data-control>Language </h5>
                                                <div class="widget widget_material" data-content>
                                                    <form action="#">
                                                        <label><input type="checkbox" name="material" value="books"> Books</label>
                                                        <label><input type="checkbox" name="material" value="electronic" checked> Electronic Resources</label>
                                                        <label><input type="checkbox" name="material" value="ebooks"> ebooks</label>
                                                        <label><input type="checkbox" name="material" value="soundrecording" checked> Sound Recording</label>
                                                        <label><input type="checkbox" name="material" value="largeprint"> Large Print</label>
                                                        <label><input type="checkbox" name="material" value="audioebooks" checked> Audio eBooks</label>
                                                    </form>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="widget widget_recent_releases">
                                        <h4 class="widget-title">New Releases</h4>
                                        <ul>
                                            <li><a href="#">Books</a></li>
                                            <li><a href="#">eBooks</a></li>
                                            <li><a href="#">DVDS</a></li>
                                            <li><a href="#">Magazines</a></li>
                                            <li><a href="#">Audio</a></li>
                                            <li><a href="#">eAudio</a></li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="widget widget_recent_entries">
                                        <h4 class="widget-title">On-Order Items</h4>
                                        <ul>

                                                <li>
                                                    <figure>
                                                        <img src="images/order-item-01.jpg" alt="product" />
                                                    </figure>
                                                    <a href="#">The Sonic Boom</a>
                                                    <span class="price"><strong>Author:</strong> F. Scott Fitzgerald</span>
                                                    <span><strong>ISBN:</strong> 978158157</span>
                                                    <div class="rating">
                                                        <span>☆</span>
                                                        <span>☆</span>
                                                        <span>☆</span>
                                                        <span>☆</span>
                                                        <span>☆</span>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </li>
                                                <li>
                                                    <figure>
                                                        <img src="images/order-item-02.jpg" alt="product" />
                                                    </figure>
                                                    <a href="#">The Sonic Boom</a>
                                                    <span class="price"><strong>Author:</strong> F. Scott Fitzgerald</span>
                                                    <span><strong>ISBN:</strong> 978158157</span>
                                                    <div class="rating">
                                                        <span>☆</span>
                                                        <span>☆</span>
                                                        <span>☆</span>
                                                        <span>☆</span>
                                                        <span>☆</span>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </li>
                                                <li>
                                                    <figure>
                                                        <img src="images/order-item-03.jpg" alt="product" />
                                                    </figure>
                                                    <a href="#">The Sonic Boom</a>
                                                    <span class="price"><strong>Author:</strong> F. Scott Fitzgerald</span>
                                                    <span><strong>ISBN:</strong> 978158157</span>
                                                    <div class="rating">
                                                        <span>☆</span>
                                                        <span>☆</span>
                                                        <span>☆</span>
                                                        <span>☆</span>
                                                        <span>☆</span>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                </aside>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <!-- End: Products Section -->

@endsection


