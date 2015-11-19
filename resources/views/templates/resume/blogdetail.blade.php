@extends('templates.resume.layout')

@section('title')

    <title>Andrew Smith - Responsive Resume / Personal Portfolio Template</title>
    @endsection

    @section('css')

    @endsection

    @section('content')
<div class="blog-main">
    <div class="blog-left">
        <div class="blog-top">
            <div class="blog-title blog-details-title">
                <h2>This is a standard post with a preview image</h2>
                <div class="breadcrumbs"><a href="{{ route('template.resume.index') }}">Home</a>&nbsp;&nbsp;/&nbsp;&nbsp;<a href="{{ route('template.resume.blog') }}">Blog</a>&nbsp;&nbsp;/&nbsp;&nbsp;This is a standard post with a preview image</div>
                <span class="post-details ">Saturday &nbsp;/&nbsp; June 15, 2013 &nbsp;/&nbsp; <a href="#">Admin</a> &nbsp;/&nbsp; <a href="#">Web Design</a> &nbsp;/&nbsp; <a href="#comments">23 Comments</a></span>
            </div>
        </div>
        <div class="blog-details">
            <div class="blog-details-img">
                <div id="owl-demo" class="owl-carousel">
                    <div class="item"><img src="{{ asset('img/resume/blog-details-01.jpg') }}" alt="" /></div>
                    <div class="item"><img src="{{ asset('img/resume/blog-details-02.jpg') }}" alt="" /></div>
                    <div class="item"><img src="{{ asset('img/resume/blog-details-03.jpg') }}" alt="" /></div>
                    <div class="item"><img src="{{ asset('img/resume/blog-details-04.jpg') }}" alt="" /></div>
                </div>
            </div>
            <div class="blog-content">
                <div class="content-left"> <strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ullamcorper congue tellus at blandit. Sed quis dolor et orci feugiat vulputate. </strong>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ullamcorper congue tellus at blandit. Sed quis dolor et orci feugiat vulputate. Vivamus nec felis pharetra, iaculis dolor ut, imperdiet ex. Nulla elementum quam id nulla luctus tempor sed sed velit. Nam sed libero at lectus consectetur accumsan vitae non enim. Duis nec massa arcu. Cras fringilla ex eget consequat luctus. </p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ullamcorper congue tellus at blandit. Sed quis dolor et orci feugiat vulputate. Vivamus nec felis pharetra, iaculis dolor ut, imperdiet ex. Nulla elementum quam id nulla luctus tempor sed sed velit. Nam sed libero at lectus consectetur accumsan vitae non enim. Duis nec massa arcu. Cras fringilla ex eget consequat luctus. </p>
                </div>
                <div class="content-right"><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ullamcorper congue tellus at blandit.</strong>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ullamcorper congue tellus at blandit. Sed quis dolor et orci feugiat vulputate. Vivamus nec felis pharetra, iaculis dolor ut, imperdiet ex. Nulla elementum quam id nulla luctus tempor sed sed velit. Nam sed libero at lectus consectetur accumsan vitae non enim. Duis nec massa arcu. Cras fringilla ex eget consequat luctus. </p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ullamcorper congue tellus at blandit. Sed quis dolor et orci feugiat vulputate. Vivamus nec felis pharetra, iaculis dolor ut, imperdiet ex. Nulla elementum quam id nulla luctus tempor sed sed velit. Nam sed libero at lectus consectetur accumsan vitae non enim. Duis nec massa arcu. Cras fringilla ex eget consequat luctus. </p>
                </div>
            </div>
            <div class="blog-share">
                <div class="contact-social"><a href="https://www.facebook.com" target="_blank"><i class="fa fa-facebook"></i></a> <a href="https://twitter.com" target="_blank"><i class="fa fa-twitter"></i></a> <a href="https://www.youtube.com" target="_blank"><i class="fa fa-youtube"></i></a><a href="https://plus.google.com" target="_blank"><i class="fa fa-google-plus"></i></a><a href="https://www.linkedin.com" target="_blank"><i class="fa fa-linkedin"></i></a></div>
            </div>
            <div id="comments" class="comments-main">
                <div class="comments-details">
                    <div class="comments-name"> <a href="javascript:void(0)" class="pull-left"> <img src="{{ asset('img/resume/team-01.jpg') }}" alt="" class="media-object"> </a> <span class="name">Ray Michael</span><span class="date light-gray">September 05th, 2014</span><a class="button small-button" href="javascript:void(0)">Post Reply</a></div>
                    <div class="comments-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ullamcorper congue tellus at blandit. Sed quis dolor et orci feugiat vulputate. Vivamus nec felis pharetra, iaculis dolor ut, imperdiet ex. Nulla elementum quam id nulla luctus tempor sed sed velit. Nam sed libero at lectus consectetur accumsan vitae non enim. Duis nec massa arcu. Cras fringilla ex eget consequat luctus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ullamcorper congue tellus at blandit. </div>
                </div>
                <div class="comments-details no-border-bottom">
                    <div class="comments-name"> <a href="javascript:void(0)" class="pull-left"> <img src="{{ asset('img/resume/team-02.jpg') }}" alt="" class="media-object"> </a> <span class="name">Kristi Hines</span><span class="date light-gray">August 13th, 2014</span><a class="button small-button" href="javascript:void(0)">Post Reply</a></div>
                    <div class="comments-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ullamcorper congue tellus at blandit. Sed quis dolor et orci feugiat vulputate. Vivamus nec felis pharetra, iaculis dolor ut, imperdiet ex. Nulla elementum quam id nulla luctus tempor sed sed velit. Nam sed libero at lectus consectetur accumsan vitae non enim. Duis nec massa arcu. Cras fringilla ex eget consequat luctus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ullamcorper congue tellus at blandit. </div>
                </div>
                <div class="comments-details comments-sub">
                    <div class="comments-name"> <a href="javascript:void(0)" class="pull-left"> <img src="{{ asset('img/resume/team-01.jpg') }}" alt="" class="media-object"> </a> <span class="name">Kristi Hines</span><span class="date light-gray">August 13th, 2014</span><a class="button small-button" href="javascript:void(0)">Post Reply</a></div>
                    <div class="comments-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ullamcorper congue tellus at blandit. Sed quis dolor et orci feugiat vulputate. Vivamus nec felis pharetra, iaculis dolor ut, imperdiet ex. Nulla elementum quam id nulla luctus tempor sed sed velit. Nam sed libero at lectus consectetur accumsan vitae non enim. Duis nec massa arcu. Cras fringilla ex eget consequat luctus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ullamcorper congue tellus at blandit. </div>
                </div>
                <div class="comments-details">
                    <div class="comments-name"> <a href="javascript:void(0)" class="pull-left"> <img src="{{ asset('img/resume/team-03.jpg') }}" alt="" class="media-object"> </a> <span class="name">Ray Michael</span><span class="date light-gray">August 15th, 2014</span><a class="button small-button" href="javascript:void(0)">Post Reply</a></div>
                    <div class="comments-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ullamcorper congue tellus at blandit. Sed quis dolor et orci feugiat vulputate. Vivamus nec felis pharetra, iaculis dolor ut, imperdiet ex. Nulla elementum quam id nulla luctus tempor sed sed velit. Nam sed libero at lectus consectetur accumsan vitae non enim. Duis nec massa arcu. Cras fringilla ex eget consequat luctus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ullamcorper congue tellus at blandit. </div>
                </div>
            </div>
            <div class="recent-comments">
                <h5>Leave a Comment</h5>
                <div class="form-group">
                    <div class="col-3 margin-right30">
                        <label for="author">Name <span class="required">*</span></label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-3 margin-right30">
                        <label for="author">Email <span class="required">*</span></label>
                        <input type="text" class="form-control last">
                    </div>
                    <div class="col-3">
                        <label for="author">Website</label>
                        <input type="text" class="form-control last">
                    </div>
                    <div class="col-12 margin-top20">
                        <label for="author">Comment <span class="required">*</span></label>
                        <textarea class="form-control"></textarea>
                        <button class="button">Send Message</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="blog-right">
        <div class="sidebar-block">
            <h3>Search Blog</h3>
            <input type="text" placeholder="Search Blog..." class="form-control search">
        </div>
        <div class="sidebar-block">
            <h3>September 2014</h3>
            <table class="calendar">
                <thead>
                <tr>
                    <th scope="col" title="Monday">M</th>
                    <th scope="col" title="Tuesday">T</th>
                    <th scope="col" title="Wednesday">W</th>
                    <th scope="col" title="Thursday">T</th>
                    <th scope="col" title="Friday">F</th>
                    <th scope="col" title="Saturday">S</th>
                    <th scope="col" title="Sunday">S</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>&nbsp;</td>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                    <td>5</td>
                    <td>6</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>8</td>
                    <td>9</td>
                    <td>10</td>
                    <td><a href="">11</a></td>
                    <td>12</td>
                    <td>13</td>
                </tr>
                <tr>
                    <td>14</td>
                    <td>15</td>
                    <td>16</td>
                    <td>17</td>
                    <td>18</td>
                    <td>19</td>
                    <td>20</td>
                </tr>
                <tr>
                    <td>21</td>
                    <td><a href="">22</a></td>
                    <td>23</td>
                    <td>24</td>
                    <td>25</td>
                    <td>26</td>
                    <td>27</td>
                </tr>
                <tr>
                    <td>28</td>
                    <td>29</td>
                    <td>30</td>
                    <td>31</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="sidebar-block">
            <h3>Categories</h3>
            <ul>
                <li><a href="#">Web Design</a><span class="pull-right">48</span></li>
                <li><a href="#">Featured Blog</a><span class="pull-right">66</span></li>
                <li><a href="#">Photography Idea</a><span class="pull-right">32</span></li>
                <li><a href="#">Design Tutorials</a><span class="pull-right">16</span></li>
                <li><a href="#">News and Events</a><span class="pull-right">25</span></li>
                <li><a href="#">Arts and Entertainment</a><span class="pull-right">38</span></li>
            </ul>
        </div>
        <div class="sidebar-block">
            <h3>Archive</h3>
            <ul>
                <li><a href="#">December 2014</a><span class="pull-right">48</span></li>
                <li><a href="#">January 2015</a><span class="pull-right">66</span></li>
                <li><a href="#">Febriary 2015</a><span class="pull-right">32</span></li>
                <li><a href="#">March 2015</a><span class="pull-right">16</span></li>
                <li><a href="#">April 2015</a><span class="pull-right">25</span></li>
            </ul>
        </div>
        <div class="sidebar-block">
            <h3>Popular Posts</h3>
            <ul>
                <li><a href="#">This is a standard post with a preview image...</a><span class="date">Saturday &nbsp;/&nbsp; June 15, 2013</span></li>
                <li><a href="#">This is a standard post with an embedded video...</a><span class="date">Saturday &nbsp;/&nbsp; June 15, 2013</span></li>
                <li><a href="#">This is a standard post with a slider gallery...</a><span class="date">Saturday &nbsp;/&nbsp; June 15, 2013</span></li>
                <li><a href="#">This is an embedded audio post...</a><span class="date">Saturday &nbsp;/&nbsp; June 15, 2013</span></li>
            </ul>
        </div>
        <div class="sidebar-block">
            <h3>Tags Cloud</h3>
            <div class="tagcloud"> <a href="javascript:void(0)">Advertisement</a> <a href="javascript:void(0)">Fashion</a> <a href="javascript:void(0)">Forest</a> <a href="javascript:void(0)">Nature</a> <a href="javascript:void(0)">Photo</a> <a href="javascript:void(0)">Portrait</a> <a href="javascript:void(0)">Sea</a> <a href="javascript:void(0)">Sky</a> <a href="javascript:void(0)">Wordpress</a> </div>
        </div>
        <div class="sidebar-block">
            <h3>Text Widget</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
        </div>
    </div>
</div>
</div>

    @endsection

@section('js')

@endsection