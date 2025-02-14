  <!-- Start Hero Section -->
  <div class="hero">
      <div class="container">
          <div class="row justify-content-between">
              <div class="col-lg-5">
                  <div class="intro-excerpt">
                      <h1>Blog</h1>
                  </div>
              </div>
              <div class="col-lg-7">

            </div>
          </div>
      </div>
  </div>
  <!-- End Hero Section -->



  <section class="section blog-wrap bg-gray mt-5">
      <div class="container">
          <div class="row">
              <div class="col-lg-8">
                  <div class="row">
                      <div class="col-lg-12 mb-5">
                          <div class="single-blog-item">

                              <div class="blog-item-content bg-white p-5">
                                  <h2 class="mt-3 mb-4"><a href="">{{ $blog->tieuDe }}</a>
                                  </h2>
                                  <div class="blog-item-meta bg-gray py-1 px-2">
                                      <span class="text-muted text-capitalize mr-3"><i
                                              class="ti-pencil-alt mr-2"></i>Creativity</span>
                                      <span class="text-muted text-capitalize mr-3"><i class="ti-comment mr-2"></i>5
                                          Comments</span>
                                      <span class="text-black text-capitalize mr-3">Create date: <i
                                              class="ti-time mr-1"></i>{{ $blog->ngayDang }}</span>
                                      <span class="text-black text-capitalize mr-3">Views: <i
                                              class="ti-time mr-1"></i>{{ $blog->xem }}</span>
                                  </div>

                                  <p class="lead mb-4">
                                      {!! $blog->noiDung !!}
                                  </p>

                                  <div class="tag-option mt-5 clearfix">
                                      {{-- share  --}}
                                      <ul class="float-right list-inline">
                                          <li class="list-inline-item"> Share: </li>
                                          <li class="list-inline-item"><a
                                                  href="https://themewagon.github.io/megakit-2/blog-single.html#"
                                                  target="_blank"><i class="fab fa-facebook-f"
                                                      aria-hidden="true"></i></a></li>
                                          <li class="list-inline-item"><a
                                                  href="https://themewagon.github.io/megakit-2/blog-single.html#"
                                                  target="_blank"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                                          </li>
                                          <li class="list-inline-item"><a
                                                  href="https://themewagon.github.io/megakit-2/blog-single.html#"
                                                  target="_blank"><i class="fab fa-pinterest-p"
                                                      aria-hidden="true"></i></a></li>
                                          <li class="list-inline-item"><a
                                                  href="https://themewagon.github.io/megakit-2/blog-single.html#"
                                                  target="_blank"><i class="fab fa-google-plus"
                                                      aria-hidden="true"></i></a></li>
                                      </ul>
                                  </div>
                              </div>
                          </div>
                      </div>


                      <div class="col-lg-12 mb-5">
                          <div class="posts-nav bg-white p-5 d-lg-flex d-md-flex justify-content-between ">
                              <a class="post-prev align-items-center"
                                  href="https://themewagon.github.io/megakit-2/blog-single.html#">
                                  <div class="posts-prev-item mb-4 mb-lg-0">
                                      <span class="nav-posts-desc text-color">- Previous Post</span>
                                      <h6 class="nav-posts-title mt-1">
                                          Donec consectetuer ligula <br>vulputate sem tristique.
                                      </h6>
                                  </div>
                              </a>
                              <div class="border"></div>
                              <a class="posts-next" href="https://themewagon.github.io/megakit-2/blog-single.html#">
                                  <div class="posts-next-item pt-4 pt-lg-0">
                                      <span class="nav-posts-desc text-lg-right text-md-right text-color d-block">-
                                          Next Post</span>
                                      <h6 class="nav-posts-title mt-1">
                                          Ut aliquam sollicitudin leo.
                                      </h6>
                                  </div>
                              </a>
                          </div>
                      </div>

                      <div class="col-lg-12 mb-5">
                          <div class="comment-area card border-0 p-5">
                              <h4 class="mb-4">{{ count($commment) }} Comments</h4>
                              @foreach ($commment as $item)
                                  <ul class="comment-tree list-unstyled">
                                      <li class="mb-5">
                                          <div class="comment-area-box">
                                              <img alt="" src="./blog.detail.blade_files/test1.jpg"
                                                  class="img-fluid float-left mr-3 mt-2">

                                              <h5 class="mb-1">{{ $item->hoTen }}</h5>
                                              <span>{{ $item->email }}</span>

                                              <div
                                                  class="comment-meta mt-4 mt-lg-0 mt-md-0 float-lg-right float-md-right">
                                                  <a href="https://themewagon.github.io/megakit-2/blog-single.html#"><i
                                                          class="icofont-reply mr-2 text-muted"></i>Reply |</a>
                                                  <span class="date-comm">{{ $item->ngayDang }}</span>
                                              </div>

                                              <div class="comment-content mt-3">
                                                  <p>{!! $item->noiDung !!}</p>
                                              </div>
                                          </div>
                                      </li>
                              @endforeach

                              </ul>
                          </div>
                      </div>

                      {{-- comment --}}
                      <div class="col-lg-12">
                          <form class="contact-form bg-white rounded p-5" id="comment-form">
                              <h4 class="mb-4">Write a comment</h4>
                              <div class="row mb-3">
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <input class="form-control" type="text" name="name" id="name"
                                              placeholder="Name:">
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <input class="form-control" type="text" name="mail" id="mail"
                                              placeholder="Email:">
                                      </div>
                                  </div>
                              </div>

                              <textarea class="form-control mb-3" name="comment" id="comment" cols="30" rows="5" placeholder="Comment"
                                  data-gramm="false" wt-ignore-input="true"></textarea>

                              <input class="btn btn-main btn-round-full" type="submit" name="submit-contact"
                                  id="submit_contact" value="Submit Message">
                          </form>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4">
                  <div class="sidebar-wrap">
                      <div class="sidebar-widget search card p-4 mb-3 border-0">
                          <input type="text" class="form-control" placeholder="search">
                          <a href="https://themewagon.github.io/megakit-2/blog-single.html#"
                              class="btn btn-mian btn-small d-block mt-2">search</a>
                      </div>

                      <div class="sidebar-widget card border-0 mb-3">
                          <img src="./blog.detail.blade_files/blog-author.jpg" alt="" class="img-fluid">
                          <div class="card-body p-4 text-center">
                              <h5 class="mb-0 mt-4">Arther Conal</h5>
                              <p>Digital Marketer</p>
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt, dolore.</p>

                              <ul class="list-inline author-socials">
                                  <li class="list-inline-item mr-3">
                                      <a href="https://themewagon.github.io/megakit-2/blog-single.html#"><i
                                              class="fab fa-facebook-f text-muted"></i></a>
                                  </li>
                                  <li class="list-inline-item mr-3">
                                      <a href="https://themewagon.github.io/megakit-2/blog-single.html#"><i
                                              class="fab fa-twitter text-muted"></i></a>
                                  </li>
                                  <li class="list-inline-item mr-3">
                                      <a href="https://themewagon.github.io/megakit-2/blog-single.html#"><i
                                              class="fab fa-linkedin-in text-muted"></i></a>
                                  </li>
                                  <li class="list-inline-item mr-3">
                                      <a href="https://themewagon.github.io/megakit-2/blog-single.html#"><i
                                              class="fab fa-pinterest text-muted"></i></a>
                                  </li>
                                  <li class="list-inline-item mr-3">
                                      <a href="https://themewagon.github.io/megakit-2/blog-single.html#"><i
                                              class="fab fa-behance text-muted"></i></a>
                                  </li>
                              </ul>
                          </div>
                      </div>

                      <div class="sidebar-widget latest-post card border-0 p-4 mb-2">
                          <h5>Latest Posts</h5>
                          @foreach ($latest_post as $item)
                              <div class="media border-bottom">
                                  <a href=""><img class="mr-4" src="./blog.detail.blade_files/bt-3.jpg"
                                          alt=""></a>
                                  <div class="media-body">
                                      <h6 class="my-2"><a href="{{ $item->id }}">{!! $item->tieuDe !!}</a>
                                      </h6>
                                      <span class="text-sm text-muted">{{ $item->ngayDang }}</span>
                                  </div>
                              </div>
                          @endforeach
                      </div>

                      <div class="sidebar-widget bg-white rounded tags p-4 mb-3">
                          <h5 class="mb-4">Tags</h5>

                          <a href="https://themewagon.github.io/megakit-2/blog-single.html#">{{ $blog->tags }}</a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
