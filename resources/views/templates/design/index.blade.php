@extends('templates.design.layout')

@section('title')
<title>Dsgn Bootstarp Website Template | Home :: w3layouts</title>
@endsection

@section('css')

@endsection

@section('content')

<div class="content">
    <div class="col-md-8 projects" id='projects'>
        <div class="project_top">
            <div class="col-md-6 project_left">
                <ul class="project_nav">
                    <li class="active"><a href="#">All</a></li>
                    <li><a href="#">House</a></li>
                    <li><a href="#">Commercial</a></li>
                    <li><a href="#">Personal</a></li>
                    <li><a href="#">Studio Lab</a></li>
                </ul>
                <h1 class="project_head">Projects</h1>
                <div class="clearfix"></div>
            </div>
            <div class="col-md-6 project_middle">
                <div class="fundue">
                    <div class="fundue_left">
                        <ul class="fundue_list">
                            <h3>Fondue</h3>
                            <li>Project Assistant : <span class="put-left">mazim placerat</span></li>
                            <li>Material : <span class="put-left">mazim placerat</span></li>
                            <li>Typology : <span class="put-left">mazim placerat</span></li>
                            <li>Client : <span class="put-left">mazim placerat</span></li>
                            <li>Year : <span class="put-left">2014</span></li>
                            <li class="view"> <a class="popup-with-zoom-anim" href="#small-dialog4"><img src="{{ asset('img/design/arrow.png') }}" alt=""/>View Project</a></li>
                            <div id="small-dialog4" class="mfp-hide">
                                <div class="pop_up2">
                                    <div class="popup_left7">
                                        <img src="{{ asset('img/design/fundue.jpg') }}" class="img-responsive" alt=""/>
                                    </div>
                                    <div class="project-info">
                                        <h3>Project #1</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                        <div class="popup_grid">
                                            <ul class="info1">
                                                <li><span>Category : </span> eiusmod</li>
                                                <li><span>Year : </span> 2014</li>
                                            </ul>
                                            <ul class="heart_popup">
                                                <li><a href="#"><img src="{{ asset('img/design/heart.png') }}" alt=""/><br>+200</a></li>
                                            </ul>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <li class="heart"><a href="#"><img src="{{ asset('img/design/heart.png') }}" alt=""/><br>+200</a></li>
                        </ul>
                    </div>
                    <div class="fundue_right">
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="louis">
            <div class="col-md-4 louis_left">
                <ul class="louis_list">
                    <h3>Louis</h3>
                    <li>Project Assistant : <span class="put-left">mazim placerat</span></li>
                    <li>Material : <span class="put-left">mazim placerat</span></li>
                    <li>Typology : <span class="put-left">mazim placerat</span></li>
                    <li>Client : <span class="put-left">mazim placerat</span></li>
                    <li>Year : <span class="put-left">2014</span></li>
                    <li class="louis_link"> <a class="popup-with-zoom-anim" href="#small-dialog9"><img src="{{ asset('img/design/arrow.png') }}" alt=""/>View Project</a></li>
                    <div id="small-dialog9" class="mfp-hide">
                        <div class="pop_up2">
                            <div class="popup_left">
                                <img src="{{ asset('img/design/louis.jpg') }}" class="img-responsive" alt=""/>
                            </div>
                            <div class="project-info info2">
                                <h3>Project #2</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                <div class="popup_grid">
                                    <ul class="info1">
                                        <li><span>Category : </span> eiusmod</li>
                                        <li><span>Year : </span> 2014</li>
                                    </ul>
                                    <ul class="heart_popup">
                                        <li><a href="#"><img src="{{ asset('img/design/heart.png') }}" alt=""/><br>+200</a></li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <li class="heart_louis"><a href="#"><img src="{{ asset('img/design/w_heart.png') }}" alt=""/><br>+200</a></li>
                </ul>
            </div>
            <div class="col-md-8 louis_right">
                <div class="caption">
                    <ul class="caption_left">
                        <h3>259-875-p23</h3>
                        <li>Typology : <span class="put-left">mazim placerat</span></li>
                        <li>Client : <span class="put-left">mazim placerat</span></li>
                        <li>Year : <span class="put-left">2014</span></li>
                    </ul>
                    <ul class="caption_right">
                        <li class="caption_view"> <a class="popup-with-zoom-anim" href="#small-dialog5"><img src="{{ asset('img/design/arrow.png') }}" alt=""/>View Project</a></li>
                        <div id="small-dialog5" class="mfp-hide">
                            <div class="pop_up2">
                                <div class="popup_left4">
                                    <img src="{{ asset('img/design/louis_right.jpg') }}" class="img-responsive" alt=""/>
                                </div>
                                <div class="project-info info2">
                                    <h3>Project #3</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    <div class="popup_grid">
                                        <ul class="info1">
                                            <li><span>Category : </span> eiusmod</li>
                                            <li><span>Year : </span> 2014</li>
                                        </ul>
                                        <ul class="heart_popup">
                                            <li><a href="#"><img src="{{ asset('img/design/heart.png') }}" alt=""/><br>+200</a></li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <li class="caption_heart"><a href="#"><img src="{{ asset('img/design/heart.png') }}" alt=""/><br>+200</a></li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="sessan">
            <div class="col-md-8 sessan_left">
                <div class="sessan_box">
                    <ul class="sessan_grid">
                        <h3>Sessan</h3>
                        <li>Typology : <span class="put-left">mazim placerat</span></li>
                        <li>Client : <span class="put-left">mazim placerat</span></li>
                        <li>Year : <span class="put-left">2014</span></li>
                    </ul>
                    <ul class="session_view">
                        <li> <a class="popup-with-zoom-anim" href="#small-dialog11"><img src="{{ asset('img/design/arrow.png') }}" alt=""/>View Project</a></li>
                        <div id="small-dialog11" class="mfp-hide">
                            <div class="pop_up2">
                                <div class="popup_left3">
                                    <img src="{{ asset('img/design/sessan.jpg') }}" class="img-responsive" alt=""/>
                                </div>
                                <div class="project-info info2">
                                    <h3>Project #1</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    <div class="popup_grid">
                                        <ul class="info1">
                                            <li><span>Category : </span> eiusmod</li>
                                            <li><span>Year : </span> 2014</li>
                                        </ul>
                                        <ul class="heart_popup">
                                            <li><a href="#"><img src="{{ asset('img/design/heart.png') }}" alt=""/><br>+200</a></li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </ul>
                    <ul class="session_heart">
                        <li><a href="#"><img src="{{ asset('img/design/heart.png') }}" alt=""/><br>+200</a></li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-md-4 alessi">
                <ul class="fiji_list alessi_list">
                    <h3>Fiji</h3>
                    <li>Designer : <span class="put-left">mazim plac</span></li>
                    <li>Typology : <span class="put-left">placer</span></li>
                    <li>Year : <span class="put-left">2014</span></li>
                    <li class="fiji_view"> <a class="popup-with-zoom-anim" href="#small-dialog6"><img src="{{ asset('img/design/arrow.png') }}" alt=""/>View Project</a></li>
                    <div id="small-dialog6" class="mfp-hide">
                        <div class="pop_up2">
                            <div class="popup_left6">
                                <img src="{{ asset('img/design/alessi.png') }}" class="img-responsive" alt=""/>
                            </div>
                            <div class="project-info info2">
                                <h3>Project #3</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                <div class="popup_grid">
                                    <ul class="info1">
                                        <li><span>Category : </span> eiusmod</li>
                                        <li><span>Year : </span> 2014</li>
                                    </ul>
                                    <ul class="heart_popup">
                                        <li><a href="#"><img src="{{ asset('img/design/heart.png') }}" alt=""/><br>+200</a></li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <li class="fiji_heart"><a href="#"><img src="{{ asset('img/design/heart.png') }}" alt=""/><br>+200</a></li>
                </ul>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="col-md-4 content_right">
        <div class="potter">
            <ul class="fundue_list potter_left">
                <h3>Potter</h3>
                <li>For <span class="put-left">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh</span></li>
                <li class="view potter"> <a class="popup-with-zoom-anim" href="#small-dialog7"><img src="{{ asset('img/design/arrow.png') }}" alt=""/>View Project</a></li>
                <div id="small-dialog7" class="mfp-hide">
                    <div class="pop_up2">
                        <div class="popup_left2">
                            <img src="{{ asset('img/design/potter.jpg') }}" class="img-responsive" alt=""/>
                        </div>
                        <div class="project-info info2">
                            <h3>Project #4</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            <div class="popup_grid">
                                <ul class="info1">
                                    <li><span>Category : </span> eiusmod</li>
                                    <li><span>Year : </span> 2014</li>
                                </ul>
                                <ul class="heart_popup">
                                    <li><a href="#"><img src="{{ asset('img/design/heart.png') }}" alt=""/><br>+200</a></li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <li class="heart p_heart"><a href="#"><img src="{{ asset('img/design/heart.png') }}" alt=""/><br>+200</a></li>
            </ul>
            <div class="potter_right">
                <img src="{{ asset('img/design/potter.jpg') }}" class="img-responsive" alt=""/>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="tabano">
            <ul class="caption_left">
                <h3>Tabano</h3>
                <li>Typology : <span class="put-left">mazim placerat</span></li>
                <li>Client : <span class="put-left">mazim placerat</span></li>
                <li>Year : <span class="put-left">2014</span></li>
            </ul>
            <ul class="caption_right">
                <li class="caption_view"> <a class="popup-with-zoom-anim" href="#small-dialog10"><img src="{{ asset('img/design/arrow.png') }}" alt=""/>View Project</a></li>
                <div id="small-dialog10" class="mfp-hide">
                    <div class="pop_up2">
                        <div class="popup_left5">
                            <img src="{{ asset('img/design/tabano.jpg') }}" class="img-responsive" alt=""/>
                        </div>
                        <div class="project-info info2">
                            <h3>Project #5</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            <div class="popup_grid">
                                <ul class="info1">
                                    <li><span>Category : </span> eiusmod</li>
                                    <li><span>Year : </span> 2014</li>
                                </ul>
                                <ul class="heart_popup">
                                    <li><a href="#"><img src="{{ asset('img/design/heart.png') }}" alt=""/><br>+200</a></li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <li class="caption_heart"><a href="#"><img src="{{ asset('img/design/heart.png') }}" alt=""/><br>+200</a></li>
            </ul>
        </div>
        <div class="fiji">
            <ul class="fiji_list">
                <h3>Fiji</h3>
                <li>Designer : <span class="put-left">mazim placerat</span></li>
                <li>Typology : <span class="put-left">mazim placerat</span></li>
                <li>Year : <span class="put-left">2014</span></li>
                <li class="fiji_view"> <a class="popup-with-zoom-anim" href="#small-dialog8"><img src="{{ asset('img/design/arrow.png') }}" alt=""/>View Project</a></li>
                <div id="small-dialog8" class="mfp-hide">
                    <div class="pop_up2">
                        <div class="popup_left3">
                            <img src="{{ asset('img/design/fiji1.jpg') }}" class="img-responsive" alt=""/>
                        </div>
                        <div class="project-info info2">
                            <h3>Project #6</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            <div class="popup_grid">
                                <ul class="info1">
                                    <li><span>Category : </span> eiusmod</li>
                                    <li><span>Year : </span> 2014</li>
                                </ul>
                                <ul class="heart_popup">
                                    <li><a href="#"><img src="{{ asset('img/design/heart.png') }}" alt=""/><br>+200</a></li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <li class="fiji_heart"><a href="#"><img src="{{ asset('img/design/heart.png') }}" alt=""/><br>+200</a></li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="timeline">
            <ul class="timeline_grid">
                <h4>Timeline</h4>
                <li><a href="#">2014</a></li>
                <li><a href="#">2013</a></li>
                <li><a href="#">2012</a></li>
                <li><a href="#">2011</a></li>
                <li><a href="#">2010</a></li>
            </ul>
        </div>
    </div>
    <div class="clearfix"></div>
</div>
<div class="content_middle" id="studio">
    <div class="col-md-4 studio">
        <h2 class="studio_head">Studio</h2>
        <div class="clearfix"></div>
    </div>
    <div class="col-md-8 studio_right">
        <div class="col_1_of_middle span_1_of_middle">
            <h4>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</h4>
            <h4 class="s_desc1">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi..</h4>
            <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore</p>
            <p>Mirum est notare quam littera Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore iriure </p>
            <p class="s_desc">Claritas est etiam processus dynamicus, qui sequitu Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore</p>
        </div>
        <div class="col_1_of_middle span_1_of_middle">
            <div class="mask1"><img src="{{ asset('img/design/pic1.jpg') }}" alt="image" class="img-responsive zoom-img" /></div>
            <div class="middle_lists">
                <h5>Awards</h5>
                <ul class="list">
                    <li>luptatum zzri</li>
                    <li>tempor cum</li>
                    <li>demonstraverunt</li>
                    <li> videntur parum</li>
                </ul>
                <ul class="list1">
                    <li>est usus legen</li>
                    <li>Mirum est</li>
                    <li>humanitatis</li>
                </ul>
                <div class="clearfix"> </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="clearfix"></div>
</div>
<div class="staff">
    <div class="container_wrap">
        <div class="col-md-3 staff1">
            <h4>Staff.</h4>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper</p>
            <p class="staff_desc">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim</p>
        </div>
        <div class="col-md-3 staff2">
            <div class="view view-fifth">
                <div class="mask1"><img src="{{ asset('img/design/s1.jpg') }}" alt="image" class="img-responsive zoom-img" /></div>
                <div class="mask">
                    <a class="popup-with-zoom-anim" href="#small-dialog1"> <div class="info"><img src="{{ asset('img/design/magnify-alt2.png') }}"></div></a>
                    <div id="small-dialog1" class="mfp-hide">
                        <div class="pop_up2">
                            <img src="{{ asset('img/design/s11.jpg') }}" class="img-responsive" alt=""/>
                            <p class="popup_desc">Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes </p>
                        </div>
                    </div>
                </div>
                <h3><a href="#">lectores legere</a></h3>
                <p>Designer</p>
                <ul class="staff_list">
                    <li class="staff_cv">CV<img src="{{ asset('img/design/s_arrow.png') }}" alt=""/></li>
                    <li class="staff_social">
                        <ul class="s_social">
                            <li><a href=""> <i class="fb1"> </i> </a></li>
                            <li><a href=""><i class="tw1"> </i> </a></li>
                            <li><a href=""><i class="linked1"> </i> </a></li>
                            <li><a href=""><i class="google1"> </i> </a></li>
                        </ul>
                    </li>
                    <div class="clearfix"> </div>
                </ul>
            </div>
        </div>
        <div class="col-md-3 staff2">
            <div class="view view-fifth">
                <div class="mask1"><img src="{{ asset('img/design/s2.jpg') }}" alt="image" class="img-responsive zoom-img" /></div>
                <div class="mask">
                    <a class="popup-with-zoom-anim" href="#small-dialog2"> <div class="info"><img src="{{ asset('img/design/magnify-alt2.png') }}"></div></a>
                    <div id="small-dialog2" class="mfp-hide">
                        <div class="pop_up2">
                            <img src="{{ asset('img/design/s22.jpg') }}" class="img-responsive" alt=""/>
                            <p class="popup_desc">Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes </p>
                        </div>
                    </div>
                </div>
                <h3><a href="#">lectores legere</a></h3>
                <p>Designer</p>
                <ul class="staff_list">
                    <li class="staff_cv">CV<img src="{{ asset('img/design/s_arrow.png') }}" alt=""/></li>
                    <li class="staff_social">
                        <ul class="s_social">
                            <li><a href=""> <i class="fb1"> </i> </a></li>
                            <li><a href=""><i class="tw1"> </i> </a></li>
                            <li><a href=""><i class="linked1"> </i> </a></li>
                            <li><a href=""><i class="google1"> </i> </a></li>
                        </ul>
                    </li>
                    <div class="clearfix"> </div>
                </ul>
            </div>
        </div>
        <div class="col-md-3 staff2">
            <div class="view view-fifth">
                <div class="mask1"><img src="{{ asset('img/design/s3.jpg') }}" alt="image" class="img-responsive zoom-img" /></div>
                <div class="mask">
                    <a class="popup-with-zoom-anim" href="#small-dialog3"> <div class="info"><img src="{{ asset('img/design/magnify-alt2.png') }}"></div></a>
                    <div id="small-dialog3" class="mfp-hide">
                        <div class="pop_up2">
                            <img src="{{ asset('img/design/s33.jpg') }}" class="img-responsive" alt=""/>
                            <p class="popup_desc">Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes </p>
                        </div>
                    </div>
                </div>
                <h3><a href="#">lectores legere</a></h3>
                <p>Designer</p>
                <ul class="staff_list">
                    <li class="staff_cv">CV<img src="{{ asset('img/design/s_arrow.png') }}" alt=""/></li>
                    <li class="staff_social">
                        <ul class="s_social">
                            <li><a href=""> <i class="fb1"> </i> </a></li>
                            <li><a href=""><i class="tw1"> </i> </a></li>
                            <li><a href=""><i class="linked1"> </i> </a></li>
                            <li><a href=""><i class="google1"> </i> </a></li>
                        </ul>
                    </li>
                    <div class="clearfix"> </div>
                </ul>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<div class="news" id="news">
    <div class="col-md-4 news_left">
        <h2 class="studio_head">News</h2>
        <div class="clearfix"></div>
    </div>
    <div class="col-md-8 news_right">
        <div class="col_1_of_middle span_1_of_middle">
            <h3><a href="#">Duis autem vel eum iriure dolor in hendrerit</a></h3>
            <p class="date"><time datetime="2014-01-01" title="date">14.08.2014</time></p>
            <div class="mask1"><img src="{{ asset('img/design/n1.jpg') }}" alt="image" class="img-responsive zoom-img" /></div>
            <p class="news_desc">Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
            <a href="#" class="btn1">read more</a>
            <div class="clearfix"></div>
        </div>
        <div class="col_1_of_middle span_1_of_middle">

            <h3><a href="#">Ut wisi enim ad minim veniam, quis nostrud </a></h3>
            <p class="date"><time datetime="2014-01-01" title="date">14.08.2014</time></p>
            <div class="mask1"><img src="{{ asset('img/design/n2.jpg') }}" alt="image" class="img-responsive zoom-img" /></div>
            <p class="news_desc">Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
            <a href="#" class="btn1">read more</a>
            <div class="clearfix"></div>
        </div>

        <div class="clearfix"></div>
    </div>
</div>
@endsection

@section('js')
<script type="text/javascript">
    $(document).ready(function() {
        /*
         var defaults = {
         containerID: 'toTop', // fading element id
         containerHoverID: 'toTopHover', // fading element hover id
         scrollSpeed: 1200,
         easingType: 'linear'
         };
         */

        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
@endsection
