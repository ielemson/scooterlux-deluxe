@extends('admin.admin_master')

@php
    
    $users = \App\Models\User::count();
    $products = \App\Models\Product::count();
    $products = \App\Models\Product::all();

    // dd($users);
    
@endphp
@section('dashboard_content')
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xl-2 col-6">
            <div class="box overflow-hidden pull-up">
                <div class="box-body">							
                    <div class="icon bg-primary-light rounded w-60 h-60">
                        <i class="text-primary mr-0 font-size-24 mdi mdi-account-multiple"></i>
                    </div>
                    <div>
                        <p class="text-mute mt-20 mb-0 font-size-16">Customers</p>
                        <h3 class="text-white mb-0 font-weight-500">{{$users}} </h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-2 col-6">
            <div class="box overflow-hidden pull-up">
                <div class="box-body">							
                    <div class="icon bg-warning-light rounded w-60 h-60">
                        <i class="text-warning mr-0 font-size-24 mdi mdi-car"></i>
                    </div>
                    <div>
                        <p class="text-mute mt-20 mb-0 font-size-16">Products</p>
                        <h3 class="text-white mb-0 font-weight-500">{{count($products)}} </h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-2 col-6">
            <div class="box overflow-hidden pull-up">
                <div class="box-body">							
                    <div class="icon bg-info-light rounded w-60 h-60">
                        <i class="text-info mr-0 font-size-24 mdi mdi-sale"></i>
                    </div>
                    <div>
                        <p class="text-mute mt-20 mb-0 font-size-16">Total Sales</p>
                        <h3 class="text-white mb-0 font-weight-500">$1,250 </h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-2 col-6">
            <div class="box overflow-hidden pull-up">
                <div class="box-body">							
                    <div class="icon bg-danger-light rounded w-60 h-60">
                        <i class="text-danger mr-0 font-size-24 mdi mdi-phone-incoming"></i>
                    </div>
                    <div>
                        <p class="text-mute mt-20 mb-0 font-size-16">Inbound Call</p>
                        <h3 class="text-white mb-0 font-weight-500">1,460 </h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-2 col-6">
            <div class="box overflow-hidden pull-up">
                <div class="box-body">							
                    <div class="icon bg-success-light rounded w-60 h-60">
                        <i class="text-success mr-0 font-size-24 mdi mdi-phone-outgoing"></i>
                    </div>
                    <div>
                        <p class="text-mute mt-20 mb-0 font-size-16">Outbound Call</p>
                        <h3 class="text-white mb-0 font-weight-500">1,700 </h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-2 col-6">
            <div class="box overflow-hidden pull-up">
                <div class="box-body">							
                    <div class="icon bg-light rounded w-60 h-60">
                        <i class="text-white mr-0 font-size-24 mdi mdi-chart-line"></i>
                    </div>
                    <div>
                        <p class="text-mute mt-20 mb-0 font-size-16">Total Revune</p>
                        <h3 class="text-white mb-0 font-weight-500">$4,500k </h3>
                    </div>
                </div>
            </div>
        </div>
      
        <div class="col-12">
            <div class="box">
                <div class="box-header">
                    <h4 class="box-title align-items-start flex-column">
                        New Arrivals
                        <small class="subtitle">New Products</small>
                    </h4>
                </div>
                <div class="box-body">
                    <div class="table-responsive">
                        <table class="table no-border">
                            <thead>
                                <tr class="text-uppercase bg-lightest">
                                    <th style="min-width: 250px"><span class="text-white">products</span></th>
                                    <th style="min-width: 100px"><span class="text-fade">purchased price</span></th>
                                    <th style="min-width: 100px"><span class="text-fade">selling price</span></th>
                                    <th style="min-width: 150px"><span class="text-fade">image</span></th>
                                    <th style="min-width: 130px"><span class="text-fade">quantity</span></th>
                                    <th style="min-width: 120px"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                    
                                <tr>										
                                    <td class="pl-0 py-8">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0 mr-20">
                                                <div class="bg-img h-50 w-50" style="background-image: url(../images/gallery/creative/img-1.jpg)"></div>
                                            </div>
    
                                            <div>
                                                <a href="#" class="text-white font-weight-600 hover-primary mb-1 font-size-16">{{$product->product_name_en}}</a>
                                                {{-- <span class="text-fade d-block">Pharetra, Nulla , Nec, Aliquet</span> --}}
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                       
                                        <span class="text-white font-weight-600 d-block font-size-16">
                                         @money($product->purchase_price,'NGN')
                                        </span>
                                    </td>
                                    <td>
                                      
                                        <span class="text-white font-weight-600 d-block font-size-16">
                                            @money($product->selling_price,'NGN')
                                        </span>
                                    </td>
                                    <td>
                                        
                                        <span class="text-white font-weight-600 d-block font-size-16">
                                           <img src="{{ asset( $product->product_thumbnail ) }}" width="50"/>
                                        </span>
                                    </td>
                                    <td>
                                        <span class="badge badge-primary-light badge-lg">{{$product->product_qty}}</span>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>  
        </div>
    </div>
</section>
<!-- /.content -->
@endsection