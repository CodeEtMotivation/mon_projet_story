<div>
    <p>
        <input type="text" wire:model="search">
    </p>
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

                @foreach($userLikes as $line)
                    {{$line->id}}
                @endforeach    
</div>
