@extends('layout')
@section('title', 'Sản phẩm')
@section('content')
<div class="breadcrumbs">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 col-md-6 col-12">
        <div class="breadcrumbs-content">
          <h1 class="page-title">Shop Grid</h1>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-12">
        <ul class="breadcrumb-nav">
          <li><a href="{{ url('/') }}"><i class="lni lni-home"></i> Home</a></li>
          <li><a href="{{ url('/products') }}">Shop</a></li>
          <li>Shop Grid</li>
        </ul>
      </div>
    </div>
  </div>
</div>

<section class="product-grids section">
  <div class="container">
    <div class="row">
      <!-- Sidebar -->
      <div class="col-lg-3 col-12">
        <div class="product-sidebar">
          <!-- Search form -->
          <div class="single-widget search">
            <h3>Search Product</h3>
            <form action="{{ route('products') }}" method="GET">
              <input type="text" name="query" placeholder="Search Here..." value="{{ request('query') }}">
              <button type="submit"><i class="lni lni-search-alt"></i></button>
            </form>
          </div>
          <!-- Category list -->
          <div class="single-widget">
            <h3>All Categories</h3>
            <ul class="list">
              @foreach($categories as $category)
              <li>
                <a href="{{ route('productsByCategory', ['categoryId' => $category->id, 'query' => request('query')]) }}">{{ $category->name }}</a>
              </li>
              @endforeach
            </ul>
          </div>
        </div>
      </div>
      <!-- Product list -->
      <div class="col-lg-9 col-12">
        <div class="product-grids-head">
          <div class="product-grid-topbar">
            <div class="row align-items-center">
              <div class="col-lg-7 col-md-8 col-12">
                <div class="product-sorting">
                  <label for="sorting">Sort by:</label>
                  <select class="form-control" id="sorting">
                    <option>Popularity</option>
                    <option>Low - High Price</option>
                    <option>High - Low Price</option>
                    <option>Average Rating</option>
                    <option>A - Z Order</option>
                    <option>Z - A Order</option>
                  </select>
                  <h3 class="total-show-product">Showing: <span>{{ $products->firstItem() }} - {{ $products->lastItem() }} items</span></h3>
                </div>
              </div>
              <div class="col-lg-5 col-md-4 col-12">
                <nav>
                  <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-grid-tab" data-bs-toggle="tab" data-bs-target="#nav-grid" type="button" role="tab" aria-controls="nav-grid" aria-selected="true"><i class="lni lni-grid-alt"></i></button>
                    <button class="nav-link" id="nav-list-tab" data-bs-toggle="tab" data-bs-target="#nav-list" type="button" role="tab" aria-controls="nav-list" aria-selected="false"><i class="lni lni-list"></i></button>
                  </div>
                </nav>
              </div>
            </div>
          </div>
          <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-grid" role="tabpanel" aria-labelledby="nav-grid-tab">
              <div class="row">
                @foreach($products as $product)
                <div class="col-lg-4 col-md-6 col-12">
                  <div class="single-product">
                    <div class="product-image">
                      <a href="{{ route('detail', ['id' => $product->id]) }}">
                        <img src="{{ asset($product->image) }}" alt="#">
                      </a>
                      <span class="sale-tag">-25%</span>
                      <div class="button">
                        <a href="#" class="btn"><i class="lni lni-cart"></i> Add to Cart</a>
                      </div>
                    </div>
                    <div class="product-info">
                      <span class="category">
                        @foreach($categories as $category)
                        @if($category->id == $product->category_id)
                        {{ $category->name }}
                        @endif
                        @endforeach
                      </span>
                      <h4 class="title">
                        <a href="{{ route('detail', ['id' => $product->id]) }}">{{ $product->name }}</a>
                      </h4>
                      <ul class="review">
                        <li><i class="lni lni-star-filled"></i></li>
                        <li><i class="lni lni-star-filled"></i></li>
                        <li><i class="lni lni-star-filled"></i></li>
                        <li><i class="lni lni-star-filled"></i></li>
                        <li><i class="lni lni-star-filled"></i></li>
                        <li><span>5.0 Review(s)</span></li>
                      </ul>
                      <div class="price">
                        <span>$275.00</span>
                        <span class="discount-price">$300.00</span>
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach
              </div>
              <div class="row">
                <div class="col-12">
                  <div class="pagination left">
                    <ul class="pagination-list">
                      {{ $products->appends(['query' => request('query'), 'category_id' => request('category_id')])->links('vendor.pagination.bootstrap-4') }}
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="nav-list" role="tabpanel" aria-labelledby="nav-list-tab">
              <div class="row">
                @foreach($products as $product)
                <div class="col-lg-12 col-md-12 col-12">
                  <div class="single-product">
                    <div class="row align-items-center">
                      <div class="col-lg-4 col-md-4 col-12">
                        <div class="product-image">
                          <a href="{{ route('detail', ['id' => $product->id]) }}">
                            <img src="{{ asset($product->image) }}" alt="#">
                          </a>
                          <span class="new-tag">New</span>
                          <div class="button">
                            <a href="#" class="btn"><i class="lni lni-cart"></i> Add to Cart</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-8 col-md-8 col-12">
                        <div class="product-info">
                          <span class="category">
                            @foreach($categories as $category)
                            @if($category->id == $product->category_id)
                            {{ $category->name }}
                            @endif
                            @endforeach
                          </span>
                          <h4 class="title">
                            <a href="{{ route('detail', ['id' => $product->id]) }}">{{ $product->name }}</a>
                          </h4>
                          <ul class="review">
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><span>5.0 Review(s)</span></li>
                          </ul>
                          <div class="price">
                            <span>{{ $product->price }}</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
