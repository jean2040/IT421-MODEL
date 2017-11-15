<header>
    <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 py-4">
                    <h4 class="text-white">CRUD APP</h4>
                    <p class="text-muted">This is a CRUD Application made with Laravel 5.5 and Bootstrap4</p>
                </div>
                <div class="col-sm-4 py-4">
                    <h4 class="text-white">Contact</h4>
                    <ul class="list-unstyled">
                        <li><a href="https://github.com/jean2040/IT421-MODEL" class="text-white">GitHub</a></li>
                        <li><a href="#" class="text-white">Email me</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="navbar navbar-dark bg-dark">
        <div class="d-flex justify-content-center">
            <a href="#" class="navbar-brand"><img src="{{ asset('images/profile-icon.png') }}" width="30px" height="30px"></a>
            <a href="/model_view/public/tasks" class="navbar-brand">Tasks</a>
            <a href="/model_view/public/tasks/new/" class="navbar-brand">Create Task</a>
        </div>
        <div class="d-flex flex-row-reverse">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </div>
</header>
