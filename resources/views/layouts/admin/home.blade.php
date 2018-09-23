@extends('layouts.admin.layout2')

@section('content')
<div class="row-fluid page-head">
    <h2 class="page-title"><i class="fontello-icon-monitor"></i> Dashboard <small>demo dashboard 1</small></h2>
    <p class="pagedesc">Sample preparation dashboard Boo of Administrators - Demopage One </p>
    <div class="page-bar">
        <div class="btn-toolbar"> </div>
    </div>
</div>
<!-- // page head -->

<div id="page-content" class="page-content">
    <section>
        <div class="row-fluid margin-top20">
            <div class="span12 well well-black">
                <div class="row-fluid">
                    <div class="span6 grider">
                        <h3><i class="fontello-icon-chart-bar-3"></i> Daily VISIT <small>Weekends are colored</small></h3>
                        <p class="pagedesc">Statistical sample chart with jQuery Flot graphs. The content below are loaded using inline data.</p>
                        <hr class="margin-mx">
                        <div id="dashChartVisitors" style="width:100%; height:170px" class="margin-bottom32"> </div>
                        <!-- // Chart 1 -->
                        <div id="dashChartVisitorsOverview" style="width:99%;height:45px"> </div>
                        <!-- // Chart 2 -->
                        <p class="info-block">To zoom in, select the area or use the button.</p>
                        <ul class="btn-toolbar"> 
                            <li><a id="setLastHours" class="btn btn-green">last 24 hours</a></li> 
                            <li><a id="setLastSevenDays" class="btn btn-green">last 7 days</a> </li>
                            <li><a id="setLastFortnight" class="btn btn-green">last 14 days</a> </li>
                            <li><a id="clearSelection" class="btn btn-red">Clear</a> </li>
                            <li><a class="btn btn-grey" href="#">View details &raquo;</a> </li>
                        </ul>
                        <hr class="mm" />
                        <!-- // Chart block -->
                        
                        <div class="row-fluid">
                            <div class="span12">
                                <table class="table table-condensed">
                                    <caption>
                                    Default Table Caption - Title for table <span>Here text in span</span>
                                    </caption>
                                    <thead>
                                        <tr>
                                            <th scope="col" width="40%"> Traffic sources</th>
                                            <th scope="col" class="hidden-phone">Current Month</th>
                                            <th scope="col" class="hidden-tablet hidden-phone">Change</th>
                                            <th scope="col" class="text-right">Target</th>
                                            <th scope="col" width="100px">Trend</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th><span class="label label-positive">Direct</span></th>
                                            <td class="hidden-phone text-right bold">547</td>
                                            <td class="hidden-tablet hidden-phone text-right positive bold"> + 44 <i class="ficon-up-dir f-16"></i></td>
                                            <td class="text-right">600</td>
                                            <td><div class="section-chart"> <span class="DSPLine" values="7,9,8,7,7,9,8,9,10,11,12,10,9,9,8,10,11,9,10,3,7,8,6"></span> </div></td>
                                        </tr>
                                        <tr>
                                            <th><span class="label label-positive">Refer</span></th>
                                            <td class="hidden-phone text-right bold">724</td>
                                            <td class="hidden-tablet hidden-phone text-right positive bold">+ 38 <i class="ficon-up-dir f-16"></i></td>
                                            <td class="text-right">500</td>
                                            <td><div class="section-chart"> <span class="DSPLine" values="30,32,33,31,33,34,36,37,38,40,36,32,33,37,39,42"></span> </div></td>
                                        </tr>
                                        <tr>
                                            <th><span class="label label-negative">Social</span></th>
                                            <td class="hidden-phone text-right bold">918</td>
                                            <td class="hidden-tablet hidden-phone text-right"><span class="badge badge-negative"> - 59 <i class="ficon-down-dir f-16"></i></span></td>
                                            <td class="text-right">600</td>
                                            <td><div class="section-chart"> <span class="DSPLine" values="10,11,10,18,16,17,19,19,21,24,25,27,25,28,22,17"></span> </div></td>
                                        </tr>
                                        <tr>
                                            <th><span class="label label-positive">Search</span></th>
                                            <td class="hidden-phone text-right bold">754</td>
                                            <td class="hidden-tablet hidden-phone text-right positive bold">+ 42 <i class="ficon-up-dir f-16"></i></td>
                                            <td class="text-right">600</td>
                                            <td><div class="section-chart"> <span class="DSPLine" values="7,7,0,2,4,5,0,1,1,2,6,2,5,7,9,0,4,3,4,6,5,3"></span> </div></td>
                                        </tr>
                                        <tr>
                                            <th><span class="label label-inverse">Internal</span></th>
                                            <td class="hidden-phone text-right bold">700</td>
                                            <td class="hidden-tablet hidden-phone text-right bold">+ 95 <i class=" ficon-left-dir f-16"></i></td>
                                            <td class="text-right">1000</td>
                                            <td><div class="section-chart"> <span class="DSPLine" values="17,17,17,17,17,18,17,17,17,17,17,17,18,17,17,18,17"></span> </div></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- // Example row --> 
                        
                    </div>
                    <!-- // column -->
                    
                    <div class="span6 grider">
                        <div class="row-fluid">
                            <div class="span6 grider-item">
                                <div class="row-fluid">
                                    <div class="span12 grider-item">
                                        <div class="statistic-box well well-black">
                                            <div class="section-title">
                                                <h5><i class="fontello-icon-back-in-time"></i> Activity</h5>
                                            </div>
                                            <div class="section-content item">
                                                <h4 class="statistic-values pull-left padding-right10"> <span class="section-icon"><i class="fontello-icon-monitor"></i></span> 84% </h4>
                                                <span> Desktop</span> </div>
                                            <div class="section-content">
                                                <h4 class="statistic-values pull-left padding-right10"> <span class="section-icon"><i class="fontello-icon-mobile"></i></span> 16% </h4>
                                                <span> Mobile</span> </div>
                                        </div>
                                        <!-- // box --> 
                                    </div>
                                    <!-- // column --> 
                                </div>
                                <!-- // Example row -->
                                
                                <div class="row-fluid">
                                    <div class="span12 grider-item">
                                        <ul class="nav nav-well">
                                            <li><a class="well well-black" href="javascript:void(0);"><i class="fontello-icon-users"></i>
                                                <h4 class="statistic-values pull-right">2559</h4>
                                                Total Users</a></li>
                                            <li><a class="well well-black" href="javascript:void(0);"><i class="fontello-icon-user-4"></i>
                                                <h4 class="statistic-values pull-right">21</h4>
                                                New Users (last week)</a></li>
                                            <li><a class="well well-black" href="javascript:void(0);"><i class="fontello-icon-basket-2"></i>
                                                <h4 class="statistic-values pull-right">15 487</h4>
                                                Total Shop Items</a></li>
                                            <li><a class="well well-black" href="javascript:void(0);"><i class="fontello-icon-archive"></i>
                                                <h4 class="statistic-values pull-right">69 789</h4>
                                                Total Orders</a></li>
                                            <li><a class="well well-black positive" href="javascript:void(0);"><i class="fontello-icon-download"></i>
                                                <h4 class="statistic-values pull-right">9</h4>
                                                Pending Orders</a></li>
                                            <li><a class="well well-black negative" href="javascript:void(0);"><i class="fontello-icon-lifebuoy"></i>
                                                <h4 class="statistic-values pull-right">4</h4>
                                                Customer Support</a></li>
                                        </ul>
                                        <!-- // statistic nav --> 
                                    </div>
                                    <!-- // column --> 
                                </div>
                                <!-- // Example row --> 
                                
                            </div>
                            <!-- // column -->
                            
                            <div class="span6 grider-item">
                                <div class="row-fluid">
                                    <div class="span12 grider-item">
                                        <div class="statistic-box well well-black well-impressed">
                                            <div class="section-title">
                                                <h5><i class="fontello-icon-users"></i> Total trafic</h5>
                                            </div>
                                            <div class="section-content">
                                                <h2 class="statistic-values">22,266 <span class="negative"><i class="indicator fontello-icon-down-dir"></i><sub>-708</sub></span></h2>
                                                <span class="info-block">Total Trafic Previous 30 days: 21,558</span> </div>
                                        </div>
                                        <!-- // box --> 
                                    </div>
                                    <!-- // column --> 
                                </div>
                                <!-- // Example row -->
                                
                                <div class="row-fluid">
                                    <div class="span12 grider-item">
                                        <div class="statistic-box well well-black well-impressed">
                                            <div class="section-title">
                                                <h5><i class="fontello-icon-user"></i> Unique Visits</h5>
                                            </div>
                                            <div class="section-content">
                                                <h2 class="statistic-values">14,746 <span class="positive"><i class="indicator fontello-icon-up-dir"></i><sup>+4,460</sup></span></h2>
                                                <span class="info-block">Unique Visits Previous 30 days: 10,268</span> </div>
                                        </div>
                                        <!-- // box --> 
                                    </div>
                                    <!-- // column --> 
                                </div>
                                <!-- // Example row -->
                                
                                <div class="row-fluid">
                                    <div class="span12 grider-item">
                                        <div class="statistic-box well well-black well-impressed">
                                            <div class="section-title">
                                                <h5><i class="fontello-icon-user"></i> Unique Visits</h5>
                                            </div>
                                            <div class="section-content">
                                                <h2 class="statistic-values">14,746 <span class="positive"><i class="indicator fontello-icon-up-dir"></i><sup>+4,460</sup></span></h2>
                                                <span class="info-block">Unique Visits Previous 30 days: 10,268</span> </div>
                                        </div>
                                        <!-- // box --> 
                                    </div>
                                    <!-- // column --> 
                                </div>
                                <!-- // Example row -->
                                
                                <div class="row-fluid">
                                    <div class="span12 grider-item">
                                        <div class="statistic-box well well-black well-impressed">
                                            <div class="section-left"> <i class="fontello-icon-users f-28"></i> </div>
                                            <div class="section-wrapper-right">
                                                <div class="section-right">
                                                    <h3 class="statistic-values negative"> - 2,726 <i class="indicator fontello-icon-down-dir f-28"></i></h3>
                                                    <span class="info-block">Total trafic 30 days</span> </div>
                                            </div>
                                        </div>
                                        <!-- // box --> 
                                    </div>
                                    <!-- // column --> 
                                </div>
                                <!-- // Example row -->
                                
                                <div class="row-fluid">
                                    <div class="span12 grider-item">
                                        <div class="statistic-box well well-black well-impressed">
                                            <div class="section-left"> <i class="fontello-icon-users f-28"></i> </div>
                                            <div class="section-wrapper-right">
                                                <div class="section-right">
                                                    <h3 class="statistic-values positive"> + 2,726 <i class="indicator fontello-icon-up-dir f-28"></i></h3>
                                                    <span class="info-block">Total trafic 30 days</span> </div>
                                            </div>
                                        </div>
                                        <!-- // box --> 
                                    </div>
                                    <!-- // column --> 
                                </div>
                                <!-- // Example row --> 
                                
                            </div>
                            <!-- // column --> 
                            
                        </div>
                        <!-- // Example row --> 
                    </div>
                    <!-- // column --> 
                    
                </div>
            </div>
            <!-- // column --> 
            
        </div>
        <!-- // Example row --> 
        
    </section>
    <section>
        <div class="row-fluid">
            <div class="span4">
                <div class="widget widget-simple">
                    <div class="widget-header header-small"> <a class="btn btn-mini btn-success pull-right" href="#">Show All</a>
                        <h6><i class="fontello-icon-net"></i> Top Referrers</h6>
                    </div>
                    <div class="widget-content">
                        <div class="widget-body">
                            <table class="table table-condensed table-striped">
                                <thead>
                                    <tr>
                                        <th>Referrer</th>
                                        <th>Uniques</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a target="_blank" href="http://www.google.com">google.com</a></td>
                                        <td><span>1278</span></td>
                                    </tr>
                                    <tr>
                                        <td><a target="_blank" href="http://www.facebook.com">facebook.com</a></td>
                                        <td><span>846</span></td>
                                    </tr>
                                    <tr>
                                        <td><a target="_blank" href="http://www.themeforest.net">themeforest.net</a></td>
                                        <td><span>765</span></td>
                                    </tr>
                                    <tr>
                                        <td><a target="_blank" href="http://www.dribbble.com">dribbble.com</a></td>
                                        <td><span>598</span></td>
                                    </tr>
                                    <tr>
                                        <td><a target="_blank" href="http://www.twitter.com">twitter.com</a></td>
                                        <td><span>345</span></td>
                                    </tr>
                                    <tr>
                                        <td><a target="_blank" href="http://www.seznam.cz">seznam.cz</a></td>
                                        <td><span>294</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- // widget --> 
            </div>
            <!-- // column -->
            
            <div class="span4">
                <div class="widget widget-simple">
                    <div class="widget-header header-small"> <a class="btn btn-mini btn-success pull-right" href="#">Show All</a>
                        <h6><i class="fontello-icon-eye-1"></i> Most Visited Pages</h6>
                    </div>
                    <div class="widget-content">
                        <div class="widget-body">
                            <table class="table table-condensed table-striped">
                                <thead>
                                    <tr>
                                        <th>Page</th>
                                        <th>Visits</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a href="javascript:;">Dashboard</a></td>
                                        <td><span>2654</span></td>
                                    </tr>
                                    <tr>
                                        <td><a href="javascript:;">Form Demo</a></td>
                                        <td><span>2154</span></td>
                                    </tr>
                                    <tr>
                                        <td><a href="javascript:;">Boo DataTable</a></td>
                                        <td><span>1945</span></td>
                                    </tr>
                                    <tr>
                                        <td><a href="javascript:;">Statistic Flot</a></td>
                                        <td><span>1654</span></td>
                                    </tr>
                                    <tr>
                                        <td><a href="javascript:;">ProgressBars</a></td>
                                        <td><span>1125</span></td>
                                    </tr>
                                    <tr>
                                        <td><a href="javascript:;">Widgets</a></td>
                                        <td><span>948</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- // column -->
            
            <div class="span4">
                <div class="widget well well-black">
                    <div class="widget-header header-small"> <a class="btn btn-mini btn-success pull-right" href="#">Show All</a>
                        <h6><i class="fontello-icon-popup-2"></i> Browsers</h6>
                    </div>
                    <div class="widget-content">
                        <div class="widget-body">
                            <table class="table table-condensed table-striped">
                                <thead>
                                    <tr>
                                        <th>Browser</th>
                                        <th>Visits</th>
                                        <th>Percent</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>Firefox</th>
                                        <td><span>2598</span></td>
                                        <td><div class="progress progress-success progress-small margin-s0">
                                                <div class="bar tip-tc" style="width:36%" title="36%"> </div>
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <th>Chrome</th>
                                        <td><span>1546</span></td>
                                        <td><div class="progress progress-success progress-small margin-s0">
                                                <div class="bar tip-tc" style="width:21%" title="21%"> </div>
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <th>Internet Explorer</th>
                                        <td><span>1120</span></td>
                                        <td><div class="progress progress-success progress-small margin-s0">
                                                <div class="bar tip-tc" style="width:18%" title="18%"> </div>
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <th>Safari</th>
                                        <td><span>756</span></td>
                                        <td><div class="progress progress-success progress-small margin-s0">
                                                <div class="bar tip-tc" style="width:12%" title="12%"> </div>
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <th>Opera</th>
                                        <td><span>412</span></td>
                                        <td><div class="progress progress-success progress-small margin-s0">
                                                <div class="bar tip-tc" style="width:10%" title="10%"> </div>
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <th>Others</th>
                                        <td><span>165</span></td>
                                        <td><div class="progress progress-success progress-small margin-s0">
                                                <div class="bar tip-tc" style="width:3%" title="3%"> </div>
                                            </div></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- // column --> 
            
        </div>
        <!-- // Example row --> 
        
    </section>
    <section>
        <div class="row-fluid">
            <div class="span8">
                <div class="widget widget-recent">
                    <div class="widget-header">
                        <h4><i class="fontello-icon-article-alt-1"></i>Recent Posts</h4>
                    </div>
                    <div class="widget-content">
                        <div class="widget-body">
                            <ul class="widget-list">
                                <li class="media media-overflow">
                                    <div class="media-right">
                                        <div class="quick-menu">
                                            <div class="btn-group"> <a class="btn btn-mini btn-success" href="javascript:void(0);">Approve</a> <a data-toggle="dropdown" class="btn btn-mini dropdown-toggle"> or&nbsp; <span class="caret"></span></a>
                                                <ul class="dropdown-menu pull-right">
                                                    <li><a href="javascript:void(0);"><i class="icon-pencil"></i><span class="divider-text"></span> Edit</a></li>
                                                    <li><a href="javascript:void(0);"><i class="icon-remove"></i><span class="divider-text"></span> Reject</a></li>
                                                    <li><a href="javascript:void(0);"><i class="icon-ok"></i><span class="divider-text"></span> Approve</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="javascript:void(0);"><i class="icon-trash"></i><span class="divider-text"></span> Delete</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <ul class="data inline">
                                            <li><i class="fontello-icon-feather"></i> By: <a href="#"><strong>John Doe</strong></a></li>
                                            <li class="divider-vertical"></li>
                                            <li><strong>2 Aug 2012</strong>, 09:27 AM</li>
                                            <li class="divider-vertical"></li>
                                            <li>IP: <strong>158.45.46.27</strong></li>
                                            <li class="divider-vertical"></li>
                                            <li>updated: <strong>6:25 PM</strong> (5 hours ago)</li>
                                        </ul>
                                        <h4 class="media-heading"> <a href="javascript:void(0);">Aliquam facilisis enim et elit tincidunt Suspendisse</a></h4>
                                        <p class="data">Lorem ipsum dolor sit amet consectetuer Nunc porta Maecenas lorem semper. Mauris risus justo egest...</p>
                                    </div>
                                </li>
                                <li class="media media-overflow">
                                    <div class="media-right">
                                        <div class="quick-menu">
                                            <div class="btn-group"> <a class="btn btn-mini btn-success" href="javascript:void(0);">Approve</a> <a data-toggle="dropdown" class="btn btn-mini dropdown-toggle"> or&nbsp; <span class="caret"></span></a>
                                                <ul class="dropdown-menu pull-right">
                                                    <li><a href="javascript:void(0);"><i class="icon-pencil"></i><span class="divider-text"></span> Edit</a></li>
                                                    <li><a href="javascript:void(0);"><i class="icon-remove"></i><span class="divider-text"></span> Reject</a></li>
                                                    <li><a href="javascript:void(0);"><i class="icon-ok"></i><span class="divider-text"></span> Approve</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="javascript:void(0);"><i class="icon-trash"></i><span class="divider-text"></span> Delete</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <ul class="data inline">
                                            <li><i class="fontello-icon-feather"></i> By: <a href="#"><strong>John Doe</strong></a></li>
                                            <li class="divider-vertical"></li>
                                            <li><strong>2 Aug 2012</strong>, 09:27 AM</li>
                                            <li class="divider-vertical"></li>
                                            <li>IP: <strong>158.45.46.27</strong></li>
                                            <li class="divider-vertical"></li>
                                            <li>updated: <strong>6:25 PM</strong> (5 hours ago)</li>
                                        </ul>
                                        <h4 class="media-heading"> <a href="javascript:void(0);">Lorem ipsum dolor sit amet consectetuer</a></h4>
                                        <p class="data">Lorem ipsum dolor sit amet consectetuer Nunc porta Maecenas lorem semper. Mauris risus justo egest Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus. Cras sit amet nibh libero, in gravida nulla.</p>
                                    </div>
                                </li>
                                <li class="media media-overflow">
                                    <div class="media-right">
                                        <div class="quick-menu">
                                            <div class="btn-group"> <a class="btn btn-mini btn-success" href="javascript:void(0);">Approve</a> <a data-toggle="dropdown" class="btn btn-mini dropdown-toggle"> or&nbsp; <span class="caret"></span></a>
                                                <ul class="dropdown-menu pull-right">
                                                    <li><a href="javascript:void(0);"><i class="icon-pencil"></i><span class="divider-text"></span> Edit</a></li>
                                                    <li><a href="javascript:void(0);"><i class="icon-remove"></i><span class="divider-text"></span> Reject</a></li>
                                                    <li><a href="javascript:void(0);"><i class="icon-ok"></i><span class="divider-text"></span> Approve</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="javascript:void(0);"><i class="icon-trash"></i><span class="divider-text"></span> Delete</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <ul class="data inline">
                                            <li><i class="fontello-icon-feather"></i> By: <a href="#"><strong>John Doe</strong></a></li>
                                            <li class="divider-vertical"></li>
                                            <li><strong>2 Aug 2012</strong>, 09:27 AM</li>
                                            <li class="divider-vertical"></li>
                                            <li>IP: <strong>158.45.46.27</strong></li>
                                            <li class="divider-vertical"></li>
                                            <li>updated: <strong>6:25 PM</strong> (5 hours ago)</li>
                                        </ul>
                                        <h4 class="media-heading"> <a href="javascript:void(0);">Nunc porta Maecenas</a></h4>
                                        <p class="data">Lorem ipsum dolor sit amet consectetuer Nunc porta Maecenas lorem semper. Mauris risus justo egest...</p>
                                    </div>
                                </li>
                                <li class="media media-overflow">
                                    <div class="media-right">
                                        <div class="quick-menu">
                                            <div class="btn-group"> <a class="btn btn-mini btn-success" href="javascript:void(0);">Approve</a> <a data-toggle="dropdown" class="btn btn-mini dropdown-toggle"> or&nbsp; <span class="caret"></span></a>
                                                <ul class="dropdown-menu pull-right">
                                                    <li><a href="javascript:void(0);"><i class="icon-pencil"></i><span class="divider-text"></span> Edit</a></li>
                                                    <li><a href="javascript:void(0);"><i class="icon-remove"></i><span class="divider-text"></span> Reject</a></li>
                                                    <li><a href="javascript:void(0);"><i class="icon-ok"></i><span class="divider-text"></span> Approve</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="javascript:void(0);"><i class="icon-trash"></i><span class="divider-text"></span> Delete</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <ul class="data inline">
                                            <li><i class="fontello-icon-feather"></i> By: <a href="#"><strong>John Doe</strong></a></li>
                                            <li class="divider-vertical"></li>
                                            <li><strong>2 Aug 2012</strong>, 09:27 AM</li>
                                            <li class="divider-vertical"></li>
                                            <li>IP: <strong>158.45.46.27</strong></li>
                                            <li class="divider-vertical"></li>
                                            <li>updated: <strong>6:25 PM</strong> (5 hours ago)</li>
                                        </ul>
                                        <h4 class="media-heading"> <a href="javascript:void(0);">Elit tincidunt Suspendisse</a></h4>
                                        <p class="data">Lorem ipsum dolor sit amet consectetuer Nunc porta Maecenas lorem semper. Mauris risus justo egest Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus. Cras sit amet nibh libero.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- // Widget --> 
            </div>
            <!-- // column -->
            
            <div class="span4">
                <div class="widget widget-simple">
                    <div class="widget-header">
                        <h4><i class="fontello-icon-th-list-4"></i> Posts by Category</h4>
                    </div>
                    <!-- // widget header -->
                    <div class="widget-content">
                        <div class="widget-body">
                            <div class="progress-group margin-00">
                                <div class="label-field">Entertaiment <span class="pull-right">536 posts</span></div>
                                <div class="progress progress-success progress-mini filled3 margin-0s">
                                    <div class="filler">
                                        <div class="bar" style="width:100%"> </div>
                                    </div>
                                </div>
                                <!-- // progress 1 -->
                                
                                <div class="label-field">Fashion <span class="pull-right">359 posts</span></div>
                                <div class="progress progress-success progress-mini filled3 margin-0s">
                                    <div class="filler">
                                        <div class="bar" style="width:75%"> </div>
                                    </div>
                                </div>
                            </div>
                            <!-- // progress 2 -->
                            
                            <div class="label-field">Gaming <span class="pull-right">298 posts</span></div>
                            <div class="progress progress-success progress-mini filled3 margin-0s">
                                <div class="filler">
                                    <div class="bar" style="width:52%"> </div>
                                </div>
                            </div>
                            <!-- // progress 3 -->
                            
                            <div class="label-field">Business <span class="pull-right">274 posts</span></div>
                            <div class="progress progress-success progress-mini filled3 margin-0s">
                                <div class="filler">
                                    <div class="bar" style="width:50%"> </div>
                                </div>
                            </div>
                            <!-- // progress 3 -->
                            
                            <div class="label-field">Journals <span class="pull-right">214 posts</span></div>
                            <div class="progress progress-success progress-mini filled3 margin-0s">
                                <div class="filler">
                                    <div class="bar" style="width:46%"> </div>
                                </div>
                            </div>
                            <!-- // progress 3 -->
                            
                            <div class="label-field">Auto <span class="pull-right">196 posts</span></div>
                            <div class="progress progress-success progress-mini filled3 margin-0s">
                                <div class="filler">
                                    <div class="bar" style="width:38%"> </div>
                                </div>
                            </div>
                            <!-- // progress 3 --> 
                        </div>
                    </div>
                    <!-- // widget content --> 
                </div>
                <!-- // Widget --> 
            </div>
            <!-- // column --> 
        </div>
        <!-- // Example row --> 
        
    </section>
</div>
<!-- // page content -->
@endsection