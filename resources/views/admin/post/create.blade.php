@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.post.actions.create'))

@section('body')

    <div class="container-xl">

                <div class="card">
        
        <post-form
            :action="'{{ url('admin/posts') }}'"
            v-cloak
            inline-template>

            <form class="form-horizontal form-create" method="post" @submit.prevent="onSubmit" :action="action" novalidate>
                
                <div class="card-header">
                    <i class="fa fa-plus"></i> {{ trans('admin.post.actions.create') }}
                </div>

                <div class="card-body">
                <div class="row">
                    <div class="col">
                        @include('admin.post.components.form-elements')
                    </div>

                    <div class="col-md-12 col-lg-12 col-xl-5 col-xxl-4">
                        @include('admin.post.components.form-elements-right')
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