<div class="sidebar__nav border-top border-left  ">
	<span class="bars d-none padding-0-18"></span>
	<a class="header__logo  d-none" href=""></a>
	<div class="profile__info border cursor-pointer text-center">
		<div class="avatar__img"><img src="/admin/img/pro.jpg" class="avatar___img">
			<input type="file" accept="image/*" class="hidden avatar-img__input">
			<div class="v-dialog__container" style="display: block;"></div>
			<div class="box__camera default__avatar"></div>
		</div>
		<span class="profile__name">{{auth()->user()->name}}</span>    </div>
	
	
	<ul>
		<li class="item-li i-dashboard @if(request()->routeIs('admin.panel')) is-active @endif"><a href="{{route('admin.panel')}}">پیشخوان</a></li>
		<li class="item-li i-courses @if(request()->routeIs('contracts.index')) is-active @endif "><a href="{{route('contracts.index')}}">قراردادها</a></li>
{{--		<li class="item-li i-slideshow @if(request()->routeIs('regulation.create')) is-active @endif  "><a href="{{route('regulation.create')}}">نظم دهی پرسنل</a></li>--}}
		<li class="item-li i-users @if(request()->routeIs('newYear.index')) is-active @endif "><a href="{{route('newYear.index')}}">قوانین پایه</a></li>
		<li class="item-li i-users @if(request()->routeIs('users.index')) is-active @endif "><a href="{{route('users.index')}}">کاربران</a></li>
		<li class="item-li i-categories @if(request()->routeIs('edit.profile')) is-active @endif "><a href="{{route('edit.profile')}}">پروفایل کاربری</a></li>
		<li class="item-li i-banners"><a href="banners.html">بنر ها</a></li>
		<li class="item-li i-articles"><a href="articles.html">مقالات</a></li>
		<li class="item-li i-ads"><a href="ads.html">تبلیغات</a></li>
		<li class="item-li i-comments"><a href="comments.html"> نظرات</a></li>
		<li class="item-li i-tickets"><a href="tickets.html"> تیکت ها</a></li>
		<li class="item-li i-discounts"><a href="discounts.html">تخفیف ها</a></li>
		<li class="item-li i-transactions"><a href="transactions.html">تراکنش ها</a></li>
		<li class="item-li i-checkouts"><a href="checkouts.html">تسویه حساب ها</a></li>
		<li class="item-li i-checkout__request "><a href="checkout-request.html">درخواست تسویه </a></li>
		<li class="item-li i-my__purchases"><a href="mypurchases.html">خرید های من</a></li>
		<li class="item-li i-notification__management"><a href="notification-management.html">مدیریت اطلاع رسانی</a>
		</li>
		<li class="item-li i-user__inforamtion"><a href="user-information.html">اطلاعات کاربری</a></li>
	</ul>

</div>