<nav>
    <div class="container">
            <h2 class="logo">
                STORY
            </h2>
            <div class="search-bar">
                <i class="fas fa-search"></i>
                <input type="search" placeholder="rechercher">
            </div>
            <div class="create">
                <label for="create-post" class="btn btn-primary">
                    Create
                </label>
                <div class="profile-picture">
                    <img src="{{ Storage::url(Auth::user()->photo) }}" alt="d">
                </div>
            </div>
    </div>
</nav>
