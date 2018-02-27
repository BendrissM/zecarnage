
{!! Form::open(['action' => $url, 'method' => 'GET', 'class' => 'sidebar-form']) !!}
    <div class="input-group">
        <input type="text" name="search" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
            <button type="submit" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
            </button>
        </span>
    </div>
{!! Form::close() !!}