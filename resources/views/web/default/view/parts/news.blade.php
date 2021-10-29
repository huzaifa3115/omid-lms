<div class="container-fluid">
    <div class="container news-container">
        <div class="row">
            <div class="col-md-12 col-xs-12 col-sm-12">
                <!-- <div class="row-xs">
                    <div class="two-ads-container">
                        <div class="h-10 visible-xs"></div>
                        @if(isset($ads))
                            <div class="row">
                                @foreach($ads as $ad)
                                    @if($ad->position == 'main-article-side')
                                        <a href="{{ $ad->url }}"><img src="{{ $ad->image }}" class="{{ $ad->size }}"></a>
                                    @endif
                                @endforeach
                                <div class="h-15"></div>
                            </div>
                        @endif
                    </div>
                </div> -->
                <div class="row-xs contents_box">
                    <div class="top-user-container">
                        <div class="header">
							<i class="secicon mdi mdi-teach"></i>
                            <span class="best-users">{{ trans('main.top_vendors') }}</span>
                        </div>
                        <div class="user-tabs">
                            <ul class="nav nav-tabs nav-justified" role="tablist">
                                <li class="active"><a href="#tab1" role="tab" data-toggle="tab">{{ trans('main.courses_feedback') }}</a></li>
                                <li><a href="#tab2" role="tab" data-toggle="tab">{{ trans('main.courses_count') }}</a></li>
                                <li><a href="#tab3" role="tab" data-toggle="tab">{{ trans('main.sales') }}</a></li>
                            </ul>
                            <!-- TAB CONTENT -->
                            <div class="tab-content">
                                <div class="active tab-pane fade in" id="tab1">
                                    @if(isset($user_rate))
                                        @foreach($user_rate as $ur)
                                            <?php $meta = arrayToList($ur->usermetas, 'option', 'value');?>
                                            <div class="col-md-3 tab-con">
                                        <a href="/profile/{{ $ur->id }}">
                                            <img alt="{{ $ur->username ?? '' }}" src="{{ !empty($meta['avatar']) ? $meta['avatar'] : '/assets/default/images/user.png' }}">
                                            <span>{{ !empty($ur->name) ? $ur->name : '' }}</span>
                                        </a>
                                    </div>
                                        @endforeach
                                    @endif
                                </div>
                                <div class="tab-pane fade" id="tab2">
                                    @if(isset($user_content))
                                        @foreach($user_content as $uc)
                                            <?php $meta = arrayToList($uc->usermetas, 'option', 'value');?>
                                            <div class="col-md-3 tab-con">
                                                <a href="/profile/{{ $uc->id }}">
                                                    <img  alt="{{ $uc->username ?? '' }}"  src="{{ !empty($meta['avatar']) ? $meta['avatar'] : '/assets/default/images/user.png' }}">
                                                    <span>{{ !empty($ur->name) ? $ur->name : '' }}</span>
                                                </a>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                                <div class="tab-pane fade" id="tab3">
                                    @if(isset($user_popular))
                                        @foreach($user_popular as $up)
                                            <?php $meta = arrayToList($up->usermetas, 'option', 'value');?>
                                            <div class="col-md-3 tab-con">
                                                <a href="/profile/{{ $up->id }}">
                                                    <img alt="{{ $up->username ?? '' }}" src="{{ !empty($meta['avatar']) ? $meta['avatar'] : '/assets/default/images/user.png' }}">
                                                    <span>{{ !empty($ur->name) ? $ur->name : '' }}</span>
                                                </a>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="h-10"></div>
            </div>
        </div>
    </div>
</div>
