{{-- 
@extends('app')

@section('content')
    <h2>Articles</h2>
    {{-- <a href="{{ route('articles.create') }}">Create Article</a> --}}

    {{-- <table border="1">
        <tr>
            <th>Code</th>
            <th>Designation</th>
            <th>Prix U</th>
            <th>Rayon</th>
            <th>ss_rayon</th>
            
            <th>Action</th>
        </tr>
        @foreach($articles as $article)
            <tr>
                <td>{{ $article->code }}</td>
                <td>{{ $article->designation }}</td>
                <td>{{ $article->prix_u }}</td>
                <td>{{ $article->rayon }}</td>
                <td>{{ $article->ss_rayon }}</td>
                <td>
                    {{-- <a href="{{ route('articles.edit', $article->code) }}">Edit</a> --}}
                {{-- </td>
            </tr>
        @endforeach
    </table> --}} --}}
{{-- @endsection --}} --}}

@extends('app')

@section('content')
<div class="px-lg-6 col-12 col-xl-12  bg-white pt-7 border-y border-300">
  <div data-list='{"valueNames":["product","customer","rating","review","time"],"page":6}'>
    <div class="row align-items-end justify-content-between pb-5 g-3">
      <div class="col-auto">
            <h3>Articles</h3>
      </div>
      <div class="col-12 col-md-auto">
        <div class="row g-2 gy-3">
          <div class="col-auto flex-1">
            <div class="search-box">
              <form class="position-relative" data-bs-toggle="search" data-bs-display="static">
                <input class="form-control search-input search form-control-sm" type="search" placeholder="Search" aria-label="Search" />
                <span class="fas fa-search search-box-icon"></span>
              </form>
            </div>
          </div>
          <div class="col-auto">
            <a href="{{route('artical.create')}}" class="btn btn-sm btn-phoenix-primary bg-white hover-bg-100 me-2">ADD Categories</a>
            {{-- <button class="btn btn-sm btn-phoenix-primary bg-white hover-bg-100 me-2" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">ADD Categories</button> --}}
          </div>
        </div>
      </div>
    </div>
    <div class="table-responsive mx-n1 px-1 scrollbar">
      <table class="table fs--1 mb-0 border-top border-200">
        <thead>
          <tr>
            <th class="white-space-nowrap fs--1 ps-0 align-middle">
              <div class="form-check mb-0 fs-0">
                <input class="form-check-input" id="checkbox-bulk-reviews-select" type="checkbox" data-bulk-select='{"body":"table-latest-review-body"}' />
              </div>
            </th>
            <th class="sort white-space-nowrap align-middle" scope="col" style="min-width:50px;" data-sort="product">Code</th>
            <th class="sort white-space-nowrap align-middle" scope="col" style="min-width:50px;" data-sort="product">Designation</th>
            <th class="sort align-middle" scope="col" data-sort="customer" style="min-width:100px;">Prix U</th>
            <th class="sort align-middle" scope="col" data-sort="customer" style="min-width:100px;">Rayon</th>
            <th class="sort align-middle" scope="col" data-sort="customer" style="min-width:100px;">ss_rayon</th>
            <th class="sort align-middle"  style="min-width:1px;"></th>
          </tr>
        </thead>
        <tbody class="list" id="table-latest-review-body">
            @forelse ($articles as $category)
                <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                    <td class="fs--1 align-middle ps-0">
                    <div class="form-check mb-0 fs-0">
                        <input class="form-check-input" type="checkbox" data-bulk-select-row='{"product":"Fitbit Sense Advanced Smartwatch with Tools for Heart Health, Stress Management & Skin Temperature Trends, Carbon/Graphite, One Size (S & L Bands)","productImage":"/products/60x60/1.png","customer":{"name":"Richard Dawkins","avatar":""},"rating":5,"review":"This Fitbit is fantastic! I was trying to be in better shape and needed some motivation, so I decided to treat myself to a new Fitbit.","status":{"title":"Approved","badge":"success","icon":"check"},"time":"Just now"}' />
                    </div>
                    </td>
                    <td class="align-middle product white-space-nowrap"><a class="fw-semi-bold" href="apps/e-commerce/landing/product-details.html">{{$category->code}}</a></td>
                    {{-- <td class="align-middle product white-space-nowrap">
                      @if($category->parentCategory)
                        <a class="fw-semi-bold" href="apps/e-commerce/landing/product-details.html">{{$category->parentCategory->name}}</a>
                      @else
                        N/A
                      @endif
                    </td> --}}
                    <td class="align-middle customer white-space-nowrap"><a class="d-flex align-items-center text-900" href="apps/e-commerce/landing/profile.html">
                        <div class="avatar avatar-l">
                        <h6 class="mb-0 ms-3 text-900">{{$category->designation}}</h6>
                    </a>
                    </td>
                    <td class="align-middle customer white-space-nowrap"><a class="d-flex align-items-center text-900" href="apps/e-commerce/landing/profile.html">
                      <div class="avatar avatar-l">
                      <h6 class="mb-0 ms-3 text-900">{{ $category->prix_u}}</h6>
                    </a>
                    </td>
                    <td class="align-middle customer white-space-nowrap"><a class="d-flex align-items-center text-900" href="apps/e-commerce/landing/profile.html">
                      <div class="avatar avatar-l">
                      <h6 class="mb-0 ms-3 text-900">{{ $category->rayon}}</h6>
                    </a>
                    </td>
                    <td class="align-middle customer white-space-nowrap"><a class="d-flex align-items-center text-900" href="apps/e-commerce/landing/profile.html">
                      <div class="avatar avatar-l">
                      <h6 class="mb-0 ms-3 text-900">{{ $category->ss_rayon}}</h6>
                    </a>
                    </td>
                    <td class="align-middle white-space-nowrap text-end pe-0">
                    <div class="position-relative">
                        <div class="hover-actions">
                        <a class="btn btn-phoenix-secondary btn-icon me-1 fs--2 text-900 px-0 me-1" href="{{route('artical.edit',$category->_id)}}"  >
                            <span class="fas fa-edit"></span>
                        </a>
                        <form action="{{route('artical.destroy',$category->_id)}}" method="post">
                            @csrf
                            {{-- Form Method spoofing
                            {{-- <input type="hidden" name="_method" value="delete"> --}}
                            @method('delete')
                            <button type="submit" class="btn btn-phoenix-secondary btn-icon fs--2 text-danger px-0"><span class="fas fa-trash"></span></button>
                        </form>
                        </div>
                    </div>
                    <div class="font-sans-serif btn-reveal-trigger position-static">
                        <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                        <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                        </div>
                    </div>
                    </td>
                </tr>
            @empty 
                <tr class="text-center">
                    <td colspan="7">No Articals defined...</td>
                </tr>     
            @endforelse
        </tbody>
      </table>
    </div>
    <div class="row align-items-center py-1">
      <div class="pagination d-none"></div>
      <div class="col d-flex fs--1">
        <p class="mb-0 d-none d-sm-block me-3 fw-semi-bold text-900" data-list-info="data-list-info"></p><a class="fw-semi-bold" href="#!" data-list-view="*">View all<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a><a class="fw-semi-bold d-none" href="#!" data-list-view="less">View Less</a>
      </div>
      <div class="col-auto d-flex">

        <button class="btn btn-link px-1 me-1" type="button" title="Previous" data-list-pagination="prev"><span class="fas fa-chevron-left me-2"></span>Previous</button>
        <button class="btn btn-link px-1 ms-1" type="button" title="Next" data-list-pagination="next">Next<span class="fas fa-chevron-right ms-2"></span></button>
      </div>
    </div>
  </div>
</div>
@endsection
