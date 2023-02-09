@extends('layouts.ap')



   @section('content')
    
             <!-- Main   -->

     <main>
         <div class="container">
             <!-- left   -->
             <div class="left">
                 <a class="profile">
                     <div class="profile-picture">
                         <img src="{{ Storage::url(Auth::user()->photo) }}">
                     </div>
                     <div class="handle">
                         <h4>{{ Auth::user()->name }}</h4>
                         <p class="text-muted">
                            {{ Auth::user()->pays }}
                         </p>
                     </div>
                 </a>

                 <!-- sidebar   -->
                 <div class="sidebar">
                     <a href="" class="menu-item active">
                         <span>
                             <i class="uil uil-home ">
                             </i>
                         </span>
                         <h3>
                             home
                         </h3>
                     </a> 
                     <a href="" class="menu-item">
                         <span>
                             <i class="uil uil-compass ">
                                 
                             </i>
                         </span>
                         <h3>
                             exploirer
                         </h3>
                     </a>
                     <a href="" class="menu-item" id="notifications">
                         <span>
                             <i class="uil uil-bell ">
                                <small class="notification-count">
                                    1
                                </small> 
                             </i>
                         </span>
                         <h3>
                             notification
                         </h3>
                         <!-- notification liste   -->
                         <div class="notifications-popup ">
                             <div>
                                 <div class="profile-picture">
                                    <img src="img/model.jpg"> 
                                 </div>
                                 <div class="notification-body">
                                    <b>keke benjamin</b> accept ton ami
                                    <small class="text-muted">
                                        2 days ago
                                    </small>
                                 </div>
                             </div>
                             <div>
                                 <div class="profile-picture">
                                    <img src="img/boy.jpg"> 
                                 </div>
                                 <div class="notification-body">
                                    <b>keke benjamin</b> accept ton ami
                                    <small class="text-muted">
                                        2 days ago
                                    </small>
                                 </div>
                             </div>
                         </div>                  
                     </a>
                     <a href="" class="menu-item">
                         <span>
                             <i class="uil uil-envelope-alt ">
                                <small class="notification-count">
                                    1
                                </small>    
                             </i>
                         </span>
                         <h3>
                            message
                         </h3>
                     </a> 
                     <a href="" class="menu-item">
                         <span>
                             <i class="uil uil-Bookmarks ">
                                 
                             </i>
                         </span>
                         <h3>
                            bookmarks
                         </h3>
                     </a>  
                     <a href="" class="menu-item">
                         <span>
                             <i class="uil uil-chart-line ">
                                 
                             </i>
                         </span>
                         <h3>
                            analitics
                         </h3>
                     </a> 
                     <a href="" class="menu-item">
                         <span>
                             <i class="uil uil-palette ">
                             </i>
                         </span>
                         <h3>
                            theme
                         </h3>
                     </a>
                     <a href="" class="menu-item">
                         <span>
                             <i class="uil uil-setting ">
                             </i>
                         </span>
                         <h3>
                            setting
                         </h3>
                     </a>
                 </div>
                 <!-- endsidebar   -->
                 <label for="create-post" class="btn btn-primary">
                     create
                 </label>
             </div>
             <!--=== endleft   -->

 



             <!-- middle   -->
             <div class="middle">
                <!-- stories   -->

                <div class="stories">

                    <div class="story" style="background: url('storage/photo_profile/img_avatar3.png') no-repeat center center/cover;">
                        <div class="profile-picture">
                            <img src="{{ Storage::url(Auth::user()->photo) }}">
                        </div>
                        <p class="name">{{ Auth::user()->name }}</p>
                    </div>
                    
                    @foreach($stories as $story)

                    <div class="story" style="background: url('storage/{{ $story->image }}') no-repeat center center/cover;">
                        <div class="profile-picture">
                            <img src="storage/{{ $story->user->photo }}">
                        </div>
                        <p class="name">{{ $story->user->name }}</p>
                    </div>

                    @endforeach
                
                   

                </div>
                <!-- end of story   -->
                <form class="create-post">
                    <div class="profile-picture">
                        <img src="{{ Storage::url(Auth::user()->photo) }}">
                    </div>
                    <input type="text" name="" placeholder="a quoi pense tu" id="create-post">
                    <input type="submit" name="" value="post" class="btn btn-primary">
                </form>

                <!-- feeds   -->
                @foreach($posts as $post)
                <div class="feeds">
                    <div class="feed">
                        <div class="head">
                            <div class="user">
                                <div class="profile-picture">
                                    <img src="storage/{{ $post->user->photo }}">
                                </div>
                                <div class="ingo">
                                    <h3>
                                        {{ $post->user->name }}
                                    </h3>
                                    <small>
                                        {{ $post->user->pays }} , creer a {{ $post->created_at->format('h')}}h 
                                    </small>
                                </div>
                                
                            </div>
                            <span class="edit">
                                    <i class="uil uil-ellipsis-h"></i>
                            </span>
                        </div>

                        <div class="photo">
                            <img src="storage/{{ $post->image }}">
                        </div>

                        <div class="action-buttons">
                            <div class="interaction-buttons">
                                <span>
                                    <i class="uil uil-heart"></i>
                                </span>
                                <span>
                                    <i class="uil uil-comment-dots"></i>
                                </span>
                                <span>
                                    <i class="uil uil-share-alt"></i>
                                </span>
                            </div>
                            <div class="bookmark">
                                <span>
                                    <i class="uil uil-bookmark-full"></i>
                                </span>
                            </div>
                        </div>

                        <div class="liked-by">
                           <span>
                               <img src="img/boy.jpg">
                           </span>
                           <span>
                               <img src="img/girl.jpg">
                           </span>
                           <span>
                               <img src="img/dp.jpg">
                           </span> 
                           <span>
                               <img src="img/model.jpg">
                           </span> 
                           <p>liked by<b>and</b> 2,323 others personnes</p>
                        </div>

                        <div class="caption">
                            <p><b>lana rose</b> 26 commentaires pour votre post
                                <span class="harsh-tag">
                                    #lifestyle
                                </span>
                            </p>
                        </div>
                        <div class="comments text-muted">
                            view all 277 comments
                        </div>
                        <!-- endfeed   -->

                    </div>  
                        <!-- end feeds   -->
                </div>
                @endforeach


             </div> 
             <!-- end of middle   -->





             <!-- right   -->
             <div class="right">
                 <div class="messages">
                     <div class="heading">
                         <h4>Messages</h4>
                         <i class="uil uil-edit"></i>
                     </div>

                     <!-- search   -->
                     <div class="search-bar">
                         <i class="uil uil-search"></i>
                         <input type="search" name="" placeholder="search message" id="message-search">
                     </div>

                     <!-- message cathegorie   -->
                     <div class="category">
                         <h6 class="active">
                             Primary
                         </h6>
                         <h6>
                             General
                         </h6>
                         <h6 class="message-requests">
                             Requests(7)
                         </h6>
                     </div>

                     <!-- message -->
                     <div class="message">
                         <div class="profile-picture">
                             <img src="img/boy.jpg">
                             <div class="active"></div>
                         </div>
                         <div class="message-body">
                             <h5>edem ddd</h5>
                             <p class="text-bold">hdg</p>
                         </div>
                     </div>
                     <div class="message">
                         <div class="profile-picture">
                             <img src="img/boy.jpg">
                             <div class="active"></div>
                         </div>
                         <div class="message-body">
                             <h5>edem ddd</h5>
                             <p class="text-bold">hdg</p>
                         </div>
                     </div> 
                 </div>
                 <!--end  message -->

                 <!-- friend requests -->

                 <div class="friend-requests">
                     <h4>Resquests</h4>
                     <div class="request">
                         <div class="info">
                             <div class="profile-picture">
                                 <img src="img/girl.jpg">
                             </div>
                             <div>
                                 <h5>Hadja</h5>
                                 <p class="text-bold">
                                     8 minute
                                 </p>
                                
                             </div>
                         </div>
                         <div class="action">
                                     <button class="btn btn-primary">
                                        Accept
                                     </button>
                                     <button class="btn">
                                        decline
                                     </button>
                        </div>
                     </div>
                 </div>

             </div>
             <!--  end right -->
         </div> 
     </main>

     

   @endsection

