@extends('templates.resume.layout')

@section('title')

    <title>Andrew Smith - Responsive Resume / Personal Portfolio Template</title>
@endsection

@section('css')

@endsection

@section('content')
<div class="blog-main">
    <div class="blog-left blog-listing">
        <div class="blog-top">
            <div class="blog-title"><h2>Blog</h2><div class="breadcrumbs"><a href="{{ route('template.resume.index') }}">Home</a>&nbsp;&nbsp;/&nbsp;&nbsp;Blog</div></div>
        </div>
        <div class="row">
            <div class="blog-list">
                <div class="blog-img"><a href="{{ route('template.resume.blogdetail') }}"><img src="{{ asset('img/resume/work1.jpg') }}" alt=""/></a></div>
                <div class="blog-list-details"> <span class="date">Saturday &nbsp;/&nbsp; June 15, 2013</span>
                    <h3><a href="{{ route('template.resume.blogdetail') }}">This is a standard post with a preview image</a></h3>
                    <span class="post-details"><a href="#">Admin</a> &nbsp;/&nbsp; <a href="#">Web Design</a> &nbsp;/&nbsp; <a href="#">23 Comments</a></span>
                    <div class="title-divider"></div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    <div class="contact-social margin-top30"><a href="https://www.facebook.com" target="_blank"><i class="fa fa-facebook"></i></a> <a href="https://twitter.com" target="_blank"><i class="fa fa-twitter"></i></a> <a href="https://www.youtube.com" target="_blank"><i class="fa fa-youtube"></i></a><a href="https://plus.google.com" target="_blank"><i class="fa fa-google-plus"></i></a><a href="https://www.linkedin.com" target="_blank"><i class="fa fa-linkedin"></i></a></div>
                </div>
            </div>
            <div class="blog-list">
                <div class="blog-img">
                    <iframe src="//www.youtube.com/embed/ZwzY1o_hB5Y" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="blog-list-details"> <span class="date">Saturday &nbsp;/&nbsp; June 15, 2013</span>
                    <h3><a href="{{ route('template.resume.blogdetail') }}">This is a standard post with an embedded video</a></h3>
                    <span class="post-details"><a href="#">Admin</a> &nbsp;/&nbsp; <a href="#">Web Design</a> &nbsp;/&nbsp; <a href="#">23 Comments</a></span>
                    <div class="title-divider"></div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    <div class="contact-social margin-top30"><a href="https://www.facebook.com" target="_blank"><i class="fa fa-facebook"></i></a> <a href="https://twitter.com" target="_blank"><i class="fa fa-twitter"></i></a> <a href="https://www.youtube.com" target="_blank"><i class="fa fa-youtube"></i></a><a href="https://plus.google.com" target="_blank"><i class="fa fa-google-plus"></i></a><a href="https://www.linkedin.com" target="_blank"><i class="fa fa-linkedin"></i></a> </div>
                </div>
            </div>
            <div class="blog-list">
                <div class="blog-img">
                    <div id="owl-demo" class="owl-carousel">
                        <div class="item"><img src="{{ asset('img/resume/work2.jpg') }}" alt="" /></div>
                        <div class="item"><img src="{{ asset('img/resume/work-details2.jpg') }}" alt="" /></div>
                        <div class="item"><img src="{{ asset('img/resume/work-details3.jpg') }}" alt="" /></div>
                        <div class="item"><img src="{{ asset('img/resume/work-details4.jpg') }}" alt="" /></div>
                        <div class="item"><img src="{{ asset('img/resume/work-details5.jpg') }}" alt="" /></div>
                    </div>
                </div>
                <div class="blog-list-details"> <span class="date">Saturday &nbsp;/&nbsp; June 15, 2013</span>
                    <h3><a href="{{ route('template.resume.blogdetail') }}">This is a standard post with a slider gallery</a></h3>
                    <span class="post-details"><a href="#">Admin</a> &nbsp;/&nbsp; <a href="#">Web Design</a> &nbsp;/&nbsp; <a href="#">23 Comments</a></span>
                    <div class="title-divider"></div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    <div class="contact-social margin-top30"><a href="https://www.facebook.com" target="_blank"><i class="fa fa-facebook"></i></a> <a href="https://twitter.com" target="_blank"><i class="fa fa-twitter"></i></a> <a href="https://www.youtube.com" target="_blank"><i class="fa fa-youtube"></i></a><a href="https://plus.google.com" target="_blank"><i class="fa fa-google-plus"></i></a><a href="https://www.linkedin.com" target="_blank"><i class="fa fa-linkedin"></i></a> </div>
                </div>
            </div>
            <div class="blog-list">
                <div class="blog-img"><a href="{{ route('template.resume.blogdetail') }}"><img src="{{ asset('img/resume/work3.jpg') }}" alt=""/></a></div>
                <div class="blog-list-details"> <span class="date">Saturday &nbsp;/&nbsp; June 15, 2013</span>
                    <h3><a href="{{ route('template.resume.blogdetail') }}">This is a standard post with a preview image</a></h3>
                    <span class="post-details"><a href="#">Admin</a> &nbsp;/&nbsp; <a href="#">Web Design</a> &nbsp;/&nbsp; <a href="#">23 Comments</a></span>
                    <div class="title-divider"></div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    <div class="contact-social margin-top30"><a href="https://www.facebook.com" target="_blank"><i class="fa fa-facebook"></i></a> <a href="https://twitter.com" target="_blank"><i class="fa fa-twitter"></i></a> <a href="https://www.youtube.com" target="_blank"><i class="fa fa-youtube"></i></a><a href="https://plus.google.com" target="_blank"><i class="fa fa-google-plus"></i></a><a href="https://www.linkedin.com" target="_blank"><i class="fa fa-linkedin"></i></a> </div>
                </div>
            </div>
            <div class="blog-list">
                <div class="blog-img"><a href="{{ route('template.resume.blogdetail') }}"><img src="{{ asset('img/resume/work5.jpg') }}" alt=""/></a></div>
                <div class="blog-list-details"> <span class="date">Saturday &nbsp;/&nbsp; June 15, 2013</span>
                    <h3><a href="{{ route('template.resume.blogdetail') }}">This is a standard post with a preview image</a></h3>
                    <span class="post-details"><a href="#">Admin</a> &nbsp;/&nbsp; <a href="#">Web Design</a> &nbsp;/&nbsp; <a href="#">23 Comments</a></span>
                    <div class="title-divider"></div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    <div class="contact-social margin-top30"><a href="https://www.facebook.com" target="_blank"><i class="fa fa-facebook"></i></a> <a href="https://twitter.com" target="_blank"><i class="fa fa-twitter"></i></a> <a href="https://www.youtube.com" target="_blank"><i class="fa fa-youtube"></i></a><a href="https://plus.google.com" target="_blank"><i class="fa fa-google-plus"></i></a><a href="https://www.linkedin.com" target="_blank"><i class="fa fa-linkedin"></i></a> </div>
                </div>
            </div>
            <div class="blog-list">
                <div class="blog-img"><a href="{{ route('template.resume.blogdetail') }}"><img src="{{ asset('img/resume/work-details1.jpg') }}" alt=""/></a></div>
                <div class="blog-list-details"> <span class="date">Saturday &nbsp;/&nbsp; June 15, 2013</span>
                    <h3><a href="{{ route('template.resume.blogdetail') }}">This is a standard post with a preview image</a></h3>
                    <span class="post-details"><a href="#">Admin</a> &nbsp;/&nbsp; <a href="#">Web Design</a> &nbsp;/&nbsp; <a href="#">23 Comments</a></span>
                    <div class="title-divider"></div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    <div class="contact-social margin-top30"><a href="https://www.facebook.com" target="_blank"><i class="fa fa-facebook"></i></a> <a href="https://twitter.com" target="_blank"><i class="fa fa-twitter"></i></a> <a href="https://www.youtube.com" target="_blank"><i class="fa fa-youtube"></i></a><a href="https://plus.google.com" target="_blank"><i class="fa fa-google-plus"></i></a><a href="https://www.linkedin.com" target="_blank"><i class="fa fa-linkedin"></i></a> </div>
                </div>
            </div>
            <div class="blog-list">
                <div class="blog-img">
                    <div id="owl-demo1" class="owl-carousel">
                        <div class="item"><img src="{{ asset('img/resume/work2.jpg') }}" alt="" /></div>
                        <div class="item"><img src="{{ asset('img/resume/work-details2.jpg') }}" alt="" /></div>
                        <div class="item"><img src="{{ asset('img/resume/work-details3.jpg') }}" alt="" /></div>
                        <div class="item"><img src="{{ asset('img/resume/work-details4.jpg') }}" alt="" /></div>
                        <div class="item"><img src="{{ asset('img/resume/work-details5.jpg') }}" alt="" /></div>
                    </div>
                </div>
                <div class="blog-list-details"> <span class="date">Saturday &nbsp;/&nbsp; June 15, 2013</span>
                    <h3><a href="{{ route('template.resume.blogdetail') }}">This is a standard post with a slider gallery</a></h3>
                    <span class="post-details"><a href="#">Admin</a> &nbsp;/&nbsp; <a href="#">Web Design</a> &nbsp;/&nbsp; <a href="#">23 Comments</a></span>
                    <div class="title-divider"></div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    <div class="contact-social margin-top30"><a href="https://www.facebook.com" target="_blank"><i class="fa fa-facebook"></i></a> <a href="https://twitter.com" target="_blank"><i class="fa fa-twitter"></i></a> <a href="https://www.youtube.com" target="_blank"><i class="fa fa-youtube"></i></a><a href="https://plus.google.com" target="_blank"><i class="fa fa-google-plus"></i></a><a href="https://www.linkedin.com" target="_blank"><i class="fa fa-linkedin"></i></a> </div>
                </div>
            </div>
            <div class="blog-list">
                <div class="blog-img"><a href="{{ route('template.resume.blogdetail') }}"><img src="{{ asset('img/resume/work-details4.jpg') }}" alt=""/></a></div>
                <div class="blog-list-details"> <span class="date">Saturday &nbsp;/&nbsp; June 15, 2013</span>
                    <h3><a href="{{ route('template.resume.blogdetail') }}">This is a standard post with a preview image</a></h3>
                    <span class="post-details"><a href="#">Admin</a> &nbsp;/&nbsp; <a href="#">Web Design</a> &nbsp;/&nbsp; <a href="#">23 Comments</a></span>
                    <div class="title-divider"></div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    <div class="contact-social margin-top30"><a href="https://www.facebook.com" target="_blank"><i class="fa fa-facebook"></i></a> <a href="https://twitter.com" target="_blank"><i class="fa fa-twitter"></i></a> <a href="https://www.youtube.com" target="_blank"><i class="fa fa-youtube"></i></a><a href="https://plus.google.com" target="_blank"><i class="fa fa-google-plus"></i></a><a href="https://www.linkedin.com" target="_blank"><i class="fa fa-linkedin"></i></a> </div>
                </div>
            </div>
            <div class="blog-list">
                <div class="blog-img"><a href="{{ route('template.resume.blogdetail') }}"><img src="{{ asset('img/resume/work-details5.jpg') }}" alt=""/></a></div>
                <div class="blog-list-details"> <span class="date">Saturday &nbsp;/&nbsp; June 15, 2013</span>
                    <h3><a href="{{ route('template.resume.blogdetail') }}">This is a standard post with a preview image</a></h3>
                    <span class="post-details"><a href="#">Admin</a> &nbsp;/&nbsp; <a href="#">Web Design</a> &nbsp;/&nbsp; <a href="#">23 Comments</a></span>
                    <div class="title-divider"></div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    <div class="contact-social margin-top30"><a href="https://www.facebook.com" target="_blank"><i class="fa fa-facebook"></i></a> <a href="https://twitter.com" target="_blank"><i class="fa fa-twitter"></i></a> <a href="https://www.youtube.com" target="_blank"><i class="fa fa-youtube"></i></a><a href="https://plus.google.com" target="_blank"><i class="fa fa-google-plus"></i></a><a href="https://www.linkedin.com" target="_blank"><i class="fa fa-linkedin"></i></a> </div>
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
<div class="pagination">
    <ul class="pagerblock">
        <li><a href="javascript:void(0)"><i class="fa fa-angle-left"></i></a></li>
        <li><a href="javascript:void(0)" class="current">1</a></li>
        <li><a href="javascript:void(0)">2</a></li>
        <li><a href="javascript:void(0)">3</a></li>
        <li><a href="javascript:void(0)"><i class="fa fa-angle-right"></i></a></li>
    </ul>
</div>
</div>
@endsection

@section('js')

@endsection
