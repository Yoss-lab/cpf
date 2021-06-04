<div class="news-updates">
      <div class="container">
         
        <div class="row">
          <div class="col-lg-12">
             <div class="section-heading">
              <h2 class="text-black">Actualiteés</h2>
              <a href="#" class="card-link">Voir plus</a>
            </div>
            <div class="row">
              <div class="col-lg-6">
                <div class="post-entry-big">
                  <a href="news-single.html" class="img-link"><img src="assets/img/blog_large_1.jpg" alt="Image" class="img-fluid"></a>
                  <div class="post-content">
                    <div class="post-meta"> 
                      <a href="#">June 6, 2019</a>
                      <span class="mx-1">/</span>
                      <a href="#">Admission</a>, <a href="#">Updates</a>
                    </div>
                    <h3 class="post-heading"><a href="news-single.html">Campus Camping and Learning Session</a></h3>
                  </div>
                </div>
              </div>


              <div class="col-lg-6">
                  @foreach($actualites as $actualite)

                <div class="post-entry-big horizontal d-flex mb-4">
                  <a href="news-single.html" class="img-link mr-4"><img src="{{asset('assets/img/actualite/'.$actualite->image)}}" alt="Image" class="img-fluid"></a>
                  <div class="post-content">
                    <div class="post-meta">
                      <a href="#">{{$actualite -> created_at}}</a>
                      <span class="mx-1">/</span>
                      <a href="#">Admission</a>, <a href="#">Updates</a>
                    </div>
                    <h3 class="post-heading"><a href="news-single.html">{{$actualite -> titre}}</a></h3>
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