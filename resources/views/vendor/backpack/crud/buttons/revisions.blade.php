@if ($crud->hasAccess('revisions') && count($entry->revisionHistory))
    <a href="{{ url($crud->route.'/'.$entry->getKey().'/revisions') }}" class="btn btn-xs btn-primary"><i class="fa fa-history"></i> {{ trans('backpack::crud.revisions') }}</a>
@endif
