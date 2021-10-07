
    
@extends('layouts.app')

  @section('title')
  商品一覧
 @endsection
  
  @section('content')
  
   <!-- SukuSuku文字表示 -->
    <div class="jumbotron top-img">
        <p class="text-center text-white top-img-text">{{ config('app.name', 'Laravel')}}</p>
    </div>
    
    <!-- 追加開始 -->
    <div class="header-above">
		<div class="wrapper header-inner">
			
			<button class="btn btn-mobileMenu"></button>
			<nav class="nav-outer">
				<ul class="nav clearfix">
					<li class="nav-item"><a href="#container">商品を探す</a></li>
					
					<li class="nav-item"><a href="#course">記事を読む</a></li>
					
				</ul>
			</nav>
		</div>
	</div>
    
    
    
<!-- 追加終了 -->
<section id="container">
    <div class="container">
    	
        <div class="top__title text-center"><a href="#">
            All Products
        </div>
        
        <div class="row">
            @foreach ($products as $product)
            
            <a href="{{ route('product.show', $product->id) }}" class="col-lg-4 col-md-6">
                <div class="card">
                    <img src="{{ asset($product->image) }}" class="card-img"/>
                    <div class="card-body">
                        <p class="card-title">{{ $product->name }}</p>
                        <p class="card-text">¥{{ number_format($product->price) }}</p>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </div>
    
    </section>
        
    
        
    
    
    
     <!-- 追加開始 -->
  
  <!--追加③c-->
<section id="course">
	<div class="layout-course">
		<a href="#">
		<h2 class="section-title section-title__modifier-primary">Media News<span class="section-title__ja"></span></h2>
		<a href="#">
		
		<a href="https://www.kaken.co.jp/nou_doubutsu/agro/polioxin_50th.html" target="_blank"><img src="/images/11.jpg">
		
		
		<h3 class="course__title">なぜ、ポリオキシンは環境に優しい農業を可能にするのか</h3>
		<p class="course__detail text-center section-paragraph">
			環境保全への意識の高まりを背景に、EU圏を中心に化学農薬への規制が強まる昨今、<br>
			科研製薬製の殺菌剤ポリオキシンが目指す環境に優しい農業へ向けた挑戦を追った。</p>
		<p class="news-list__date">2021.10.10</p>
	
	</div>
	
	<div class="layout-course">
		
		<a href="#">
			<a href="https://smartagri-jp.com/smartagri/34" target="_blank"><img src="/images/12.jpg">
		<h3 class="course__title">世界のスマート農業成功事例に学ぶ 〜アメリカ、オランダの例</h3>
		<p class="course__detail text-center section-paragraph">
			スマート農業（スマートアグリ）は、ロボット技術やICT技術を活用する農業を指し、<br>
			日本でも盛んに取り組まれているが、世界では既に確かな導入実績があがっている。</p>
		<p class="news-list__date">2021.9.18</p>
	
	</div>
	
	<div class="layout-course">
		
		<a href="#">
		<a href="https://newspicks.com/book/1071/article/3300783?ref=book_1071" target="_blank"><img src="/images/10.jpg">
		<h3 class="course__title">農業を革新する、7人のアウトサイダーたち</h3>
		<p class="course__detail text-center section-paragraph">
			日本食を支える「農業」は、待ったなしの危機的状況にある。就業人口は半減、就労者の<br>
			平均年齢は66.6歳に達した。旧来システムが根強い状況下、農業の変革に挑む７人に迫る。</p>
		<p class="news-list__date">2021.9.10</p>
		
		
	</div>
		
		<a href="#" class="btn_end">TOPへ戻る</a>
	
</section>
  
  
  <!-- 追加終了 -->
     
        
    </div>

@endsection
