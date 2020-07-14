@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.post.actions.edit', ['name' => $post->id]))

@section('body')

    <div class="container-xl">
        <div class="card">

            <post-form
                :action="'{{ $post->resource_url }}'"
                :data="{{ $post->toJson() }}"
                v-cloak
                inline-template>
            
                <form class="form-horizontal form-edit" method="post" @submit.prevent="onSubmit" :action="action" novalidate>


                    <div class="card-header">
                        <i class="fa fa-pencil"></i> {{ trans('admin.post.actions.edit', ['name' => $post->id]) }}
                    </div>

                    <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    @include('admin.post.components.form-elements')
                                </div>

                                <div class="col-md-12 col-lg-12 col-xl-5 col-xxl-4">
                                    @include('admin.post.components.edit-form-elements-right')
                                </div>
                            </div>
                    </div>
                    
                    
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" :disabled="submiting">
                            <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-download'"></i>
                            {{ trans('brackets/admin-ui::admin.btn.save') }}
                        </button>
                    </div>
                    
                </form>

        </post-form>

        </div>
    
</div>

@endsection