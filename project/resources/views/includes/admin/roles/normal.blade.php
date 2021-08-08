@if(Auth::guard('admin')->user()->role_id != 0)

@if(Auth::guard('admin')->user()->sectionCheck('orders'))

<li>
        <a href="#order" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false"><i class="fas fa-hand-holding-usd"></i>{{ __('Orders') }}</a>
        <ul class="collapse list-unstyled" id="order" data-parent="#accordion" >
               <li>
                <a href="{{route('admin-order-index')}}"> {{ __('All Orders') }}</a>
            </li>
            <li>
                <a href="{{route('admin-order-pending')}}"> {{ __('Pending Orders') }}</a>
            </li>
            <li>
                <a href="{{route('admin-order-processing')}}"> {{ __('Processing Orders') }}</a>
            </li>
            <li>
                <a href="{{route('admin-order-completed')}}"> {{ __('Completed Orders') }}</a>
            </li>
            <li>
                <a href="{{route('admin-order-declined')}}"> {{ __('Declined Orders') }}</a>
            </li>  

        </ul>
    </li>

@endif

@if(Auth::guard('admin')->user()->sectionCheck('products'))

    <li>
        <a href="#menu2" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false">
            <i class="icofont-cart"></i>{{ __('Products') }}
        </a>
        <ul class="collapse list-unstyled" id="menu2" data-parent="#accordion">
            <li>
                <a href="{{ route('admin-prod-types') }}"><span>{{ __('Add New Product') }}</span></a>
            </li>
            <li>
                <a href="{{ route('admin-prod-index') }}"><span>{{ __('All Products') }}</span></a>
            </li>
            <li>
                <a href="{{ route('admin-prod-deactive') }}"><span>{{ __('Deactivated Product') }}</span></a>
            </li>
            <li>
                <a href="{{ route('admin-prod-catalog-index') }}"><span>{{ __('Product Catalogs') }}</span></a>
            </li>
        </ul>
    </li>

@endif


@if(Auth::guard('admin')->user()->sectionCheck('affilate_products'))

    <li>
        <a href="#affiliateprod" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false">
            <i class="icofont-cart"></i>{{ __('Affiliate Products') }}
        </a>
        <ul class="collapse list-unstyled" id="affiliateprod" data-parent="#accordion">
            <li>
                <a href="{{ route('admin-import-create') }}"><span>{{ __('Add Affiliate Product') }}</span></a>
            </li>
            <li>
                <a href="{{ route('admin-import-index') }}"><span>{{ __('All Affiliate Products') }}</span></a>
            </li>
        </ul>
    </li>

@endif


@if(Auth::guard('admin')->user()->sectionCheck('customers'))

    <li>
        <a href="#menu3" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false">
            <i class="icofont-user"></i>{{ __('Customers') }}
        </a>
        <ul class="collapse list-unstyled" id="menu3" data-parent="#accordion">
            <li>
                <a href="{{ route('admin-user-index') }}"><span>{{ __('Customers List') }}</span></a>
            </li>

            <li>
                <a href="{{ route('admin-user-image') }}"><span>{{ __('Customer Default Image') }}</span></a>
            </li>
        </ul>
    </li>

@endif

@if(Auth::guard('admin')->user()->sectionCheck('vendors'))

    <li>
        <a href="#vendor" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false">
            <i class="icofont-ui-user-group"></i>{{ __('Vendors') }}
        </a>
        <ul class="collapse list-unstyled" id="vendor" data-parent="#accordion">
            <li>
                <a href="{{ route('admin-vendor-index') }}"><span>{{ __('Vendors List') }}</span></a>
            </li>

            <li>
                <a href="{{ route('admin-vendor-subs') }}"><span>{{ __('Vendor Subscriptions') }}</span></a>
            </li>
            <li>
                <a href="{{ route('admin-vendor-color') }}"><span>{{ __('Default Background') }}</span></a>
            </li>

        </ul>
    </li>

    <li>
        <a href="#vendor1" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false">
                <i class="icofont-verification-check"></i>{{ __('Vendor Verifications') }}
        </a>
        <ul class="collapse list-unstyled" id="vendor1" data-parent="#accordion">
            <li>
                <a href="{{ route('admin-vr-index') }}"><span>{{ __('All Verifications') }}</span></a>
            </li>
            <li>
                <a href="{{ route('admin-vr-pending') }}"><span>{{ __('Pending Verifications') }}</span></a>
            </li>
        </ul>
    </li>


@endif

@if(Auth::guard('admin')->user()->sectionCheck('vendor_subscription_plans'))

    <li>
        <a href="{{ route('admin-subscription-index') }}" class=" wave-effect"><i class="fas fa-dollar-sign"></i>{{ __('Vendor Subscription Plans') }}</a>
    </li>

@endif

@if(Auth::guard('admin')->user()->sectionCheck('categories'))

    <li>
        <a href="#menu5" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false"><i class="fas fa-sitemap"></i>{{ __('Manage Categories') }}</a>
        <ul class="collapse list-unstyled
        @if(request()->is('admin/attribute/*/manage') && request()->input('type')=='category')
          show
        @elseif(request()->is('admin/attribute/*/manage') && request()->input('type')=='subcategory')
          show
        @elseif(request()->is('admin/attribute/*/manage') && request()->input('type')=='childcategory')
          show
        @endif" id="menu5" data-parent="#accordion" >
                <li class="@if(request()->is('admin/attribute/*/manage') && request()->input('type')=='category') active @endif">
                    <a href="{{ route('admin-cat-index') }}"><span>{{ __('Main Category') }}</span></a>
                </li>
                <li class="@if(request()->is('admin/attribute/*/manage') && request()->input('type')=='subcategory') active @endif">
                    <a href="{{ route('admin-subcat-index') }}"><span>{{ __('Sub Category') }}</span></a>
                </li>
                <li class="@if(request()->is('admin/attribute/*/manage') && request()->input('type')=='childcategory') active @endif">
                    <a href="{{ route('admin-childcat-index') }}"><span>{{ __('Child Category') }}</span></a>
                </li>
        </ul>
    </li>

@endif



@if(Auth::guard('admin')->user()->sectionCheck('product_discussion'))

    <li>
        <a href="#menu4" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false">
            <i class="icofont-speech-comments"></i>{{ __('Product Views') }}
        </a>
        <ul class="collapse list-unstyled" id="menu4" data-parent="#accordion">
            <li>
                <a href="{{ route('admin-rating-index') }}"><span>{{ __('Product Reviews') }}</span></a>
            </li>
            <li>
                <a href="{{ route('admin-comment-index') }}"><span>{{ __('Comments') }}</span></a>
            </li>
            <li>
                <a href="{{ route('admin-report-index') }}"><span>{{ __('Reports') }}</span></a>
            </li>
        </ul>
    </li>

@endif

@if(Auth::guard('admin')->user()->sectionCheck('set_coupons'))

    <li>
        <a href="{{ route('admin-coupon-index') }}" class=" wave-effect"><i class="fas fa-percentage"></i>{{ __('Set Coupons') }}</a>
    </li>

@endif

@if(Auth::guard('admin')->user()->sectionCheck('blog'))

    <li>
        <a href="#blog" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false">
            <i class="fas fa-fw fa-newspaper"></i>{{ __('Blog') }}
        </a>
        <ul class="collapse list-unstyled" id="blog" data-parent="#accordion">
            <li>
                <a href="{{ route('admin-cblog-index') }}"><span>{{ __('Categories') }}</span></a>
            </li>
            <li>
                <a href="{{ route('admin-blog-index') }}"><span>{{ __('Posts') }}</span></a>
            </li>
        </ul>
    </li>

@endif








@if(Auth::guard('admin')->user()->sectionCheck('menu_page_settings'))

    <li>
        <a href="#menu" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false">
            <i class="fas fa-file-code"></i>{{ __('Menu Page Settings') }}
        </a>
        <ul class="collapse list-unstyled" id="menu" data-parent="#accordion">
            <li>
                <a href="{{ route('admin-faq-index') }}"><span>{{ __('FAQ Page') }}</span></a>
            </li>
            <li>
                <a href="{{ route('admin-ps-contact') }}"><span>{{ __('Contact Us Page') }}</span></a>
            </li>
            <li>
                <a href="{{ route('admin-page-index') }}"><span>{{ __('Other Pages') }}</span></a>
            </li>
        </ul>
    </li>

@endif


@if(Auth::guard('admin')->user()->sectionCheck('emails_settings'))

    <li>
        <a href="#emails" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false">
            <i class="fas fa-at"></i>{{ __('Email Settings') }}
        </a>
        <ul class="collapse list-unstyled" id="emails" data-parent="#accordion">
            <li><a href="{{route('admin-mail-index')}}"><span>{{ __('Email Template') }}</span></a></li>  
            <li><a href="{{route('admin-mail-config')}}"><span>{{ __('Email Configurations') }}</span></a></li>  
        
        </ul>
    </li>

@endif


@if(Auth::guard('admin')->user()->sectionCheck('payment_settings'))

    <li>
        <a href="#payments" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false">
            <i class="fas fa-file-code"></i>{{ __('Payment Settings') }}
        </a>
        <ul class="collapse list-unstyled" id="payments" data-parent="#accordion">
            <li><a href="{{route('admin-gs-payments')}}"><span>{{__('Payment Information')}}</span></a></li>  
   
          
        </ul>
    </li>

@endif








@if(Auth::guard('admin')->user()->sectionCheck('manage_staffs'))


    <li>
        <a href="{{ route('admin-staff-index') }}" class=" wave-effect"><i class="fas fa-user-secret"></i>{{ __('Manage Staffs') }}</a>
    </li>

@endif


@if(Auth::guard('admin')->user()->sectionCheck('subscribers'))

    <li>
        <a href="{{ route('admin-subs-index') }}" class=" wave-effect"><i class="fas fa-users-cog mr-2"></i>{{ __('Subscribers') }}</a>
    </li>

@endif


@if(Auth::guard('admin')->user()->sectionCheck('seo_tools'))

    <li>
        <a href="#seoTools" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false">
            <i class="fas fa-wrench"></i>{{ __('SEO Tools') }}
        </a>
        <ul class="collapse list-unstyled" id="seoTools" data-parent="#accordion">
            <li>
                <a href="{{ route('admin-prod-popular',30) }}"><span>{{ __('Popular Products') }}</span></a>
            </li>
            <li>
                <a href="{{ route('admin-seotool-analytics') }}"><span>{{ __('Google Analytics') }}</span></a>
            </li
            >
            <li>
                <a href="{{ route('admin-seotool-keywords') }}"><span>{{ __('Website Meta Keywords') }}</span></a>
            </li>
        </ul>
    </li>

@endif

@endif